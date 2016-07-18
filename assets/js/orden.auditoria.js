$(function(){
  

  tab1Comentarios();

   var mdl = kendo.observable({
        gral:{
          id_general:0,
          verificado:0,
          validado:0,
          periodo_reserva:'',
          ampli_reserva:'',
          fundamento_legal:'',
          fec_clasificacion:'',
          fec_des_clasificacion:'',
          fundamento_legal_2:'',
          confidencial:'',
          clasifico:'',
          desclasifico:''
        },
        orden:{
          id_orden:0,
          verificado:0,
          validado:0,
          fecha:'',
          rol:'',
          nombre:'',
          grado:'',
          coordinado:'',
          periodo:'',
          verificar:''
        },
        firma:{
          id_firma:0,
          rol:'',
          auditor:''
        },
        firmas:[],
        CCRol:'',
        CCs:[],
        addFirma:function(){
          var f = this.firma.toJSON();
          f.des = $('#slt-rol').find("option:selected").text();
          f.des_auditor = $('#slt-auditor').find("option:selected").text();
          this.firmas.push(f);
          this.set('firma',{
            id_firma:0,
            rol:'',
            auditor:''
          });

        },
        deletFirma:function(){

        },
        addCC:function(){
          var f = this.CCRol;
          if(f){
            this.CCs.push({cc_rol:f, id_CC:0, des_ccrol:  $('#slt-ccrol').find("option:selected").text() });
            this.set('CCRol','');
          }

        },
        deletCC:function(){

        },
        saveGeneral:function(e){
          e.preventDefault();
          var gral = this.gral.toJSON();
              gral.id_auditoria = idRevision;

          var idGral = gral.id_general;
          delete gral.id_general;

          gral.verificado= (gral.verificado) ? 1: 0;
          gral.validado= (gral.validado) ? 1: 0;

          jx('set_general',{gral:gral, id_general:idGral } , function(r){
            mdl.gral.id_general = r;
            alert('Registro guardado.');
          });
        },
        saveOrden:function(e){
          e.preventDefault();

          var ord = this.orden.toJSON();
              ord.id_auditoria = idRevision;

          var id_orden = ord.id_orden;
          delete ord.id_orden;

          ord.verificado = (ord.verificado) ? 1: 0;
          ord.validado = (ord.validado) ? 1: 0;

          var firm = this.firmas.toJSON();

          for(var i=0; i < firm.length; i++){
                delete firm[i].des;
                delete firm[i].des_auditor;
          }

          var cc =this.CCs.toJSON();

          for(var i=0; i < cc.length; i++){
                delete cc[i].des_ccrol;
          }
          
          jx('set_orden',{orden:ord,firmas:firm,cc:cc, id_orden:id_orden } , function(r){
            mdl.orden.id_orden = r;
            getOrden();
            alert('Registro guardado.');
          });
        },
        //catalogo
        catFirma:[]
  });

  kendo.bind($('#c-mdl'), mdl);

  jx('get_general',{id_revision: idRevision},function(r){

    if(r.length){
      r = r[0];
      r.verificado = parseInt(r.verificado);
        r.validado = parseInt(r.validado);
       mdl.set('gral',r);
    }    
    
  });


  var getOrden = function(){
    jx('get_orden',{id_revision: idRevision},function(r){

      if(r.length){
        r = r[0];
        r.verificado = parseInt(r.verificado);
          r.validado = parseInt(r.validado);
          mdl.set('firmas',r.firmas);
          mdl.set('CCs',r.CCs);
          delete r.CCs;
          delete r.firmas;
          mdl.set('orden',r);
      }   
    });
  } 
  getOrden();  

  jx('get_cat_firmas',null,function(r){
     mdl.set('catFirma',r);
  });

})

function tab1Comentarios(){
   //Consulta comentarios
 jx('get_comentarios',{id_revision:idRevision},function(r){

        var $chatWindow = jQuery('.js-chat-talk[data-chat-id="3"]');

        for(var i=0; i<r.length; i++){

            var $chatBlockClasses = 'animated fadeIn push-50-l';
            var $chatMsgClasses   = 'bg-gray-lighter';

            // Post it to its related window (if message level is 'self', make it stand out)
           
                $chatBlockClasses   = 'animated fadeInUp push-50-r';
                $chatMsgClasses     = 'bg-gray-light';
            
            $chatWindow.append('<div class="block block-rounded block-transparent push-15 ' + $chatBlockClasses + '">'
                    + '<div class="block-content block-content-full block-content-mini ' + $chatMsgClasses + '">'
                    + jQuery('<div />').text(r[i].comentario).html()
                    + '</div>'
                    + '</div>');

            // Scroll the message list to the bottom
            $chatWindow.animate({ scrollTop: $chatWindow[0].scrollHeight }, 150);
        }
    });

  //Agregamos comentarios
  $('#txtChat').keypress(function(e) {
    if(e.which == 13) {
        
        var coment = $(this).val();
       jx('set_comentario',{id_revision:idRevision, comentario:coment},function(r){
              console.log("result:",r);
          });
    }
  });

}

