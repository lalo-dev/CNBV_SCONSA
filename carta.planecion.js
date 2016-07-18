$(function(){
  

  tab1Comentarios();

   var mdl = kendo.observable({
     tab2:{
        idAnterior:0,
        verificado:0,
        validado:0,
        obser1:'',
        obser2:'',
        obser3:'',
        obser4:'',
        obser5:''
     },
     tab3:{
        idDM:0,
        verificado:0,
        validado:0,
        trimestre:'',
        anio:'',
        diagnostic:'',
        recomenda:''
     },
     tab4:{
        verificado:0,
        validado:0,
       plazas: [{
        puesto:'',
        dir1:'',
        dir2:''
       }]
     },
     addFila:function(){
         this.tab4.plazas.push({
        puesto:'',
        dir1:'',
        dir2:''
       });
     },
     deleteFila:function(e){
       var indx = this.tab4.plazas.indexOf(e.data);
       this.tab4.plazas.splice(indx,1);
     },
     saveTab2:function(e){
         e.preventDefault();

          var tab2 = this.tab2.toJSON();
              tab2.id_revision = idRevision;
              tab2.verificado = (tab2.verificado)?1:0;
              tab2.validado = (tab2.validado)?1:0;

         jx('set_tab2',tab2,function(r){
              mdl.tab2.idAnterior = r;
          });
     },
     saveTab3:function(e){
         e.preventDefault();

          var tab3 = this.tab3.toJSON();
              tab3.id_revision = idRevision;
              tab3.verificado = (tab3.verificado)?1:0;
              tab3.validado = (tab3.validado)?1:0;

         jx('set_tab3',tab3,function(r){
              mdl.tab3.idDM = r;
          });
    },
    saveTab4:function(e){
      e.preventDefault();
      console.log(this.tab4.toJSON());
      jx('')
     
    }
   });

   kendo.bind($('#c-mdl'), mdl);


   jx('get_tab2',{id_revision:idRevision},function(r){
            r = r[0];
             mdl.set('tab2',{
              idAnterior:r.id_anterior,
              verificado:parseInt(r.verificado),
              validado:parseInt(r.validado),
              obser1:r.observacion_1,
              obser2:r.observacion_2,
              obser3:r.observacion_3,
              obser4:r.mejora_1,
              obser5:r.mejora_2
             });
              console.log("tab2 result:",r);
          });

   jx('get_tab3',{id_revision:idRevision},function(r){
            r = r[0];
             mdl.set('tab3',{
              idDM:r.id_DM,
              verificado:parseInt(r.verificado),
              validado:parseInt(r.validado),
              trimestre:r.trimestre,
              anio:r.anio,
              diagnostic:r.diagnosticos,
              recomenda:r.recomendaciones
             });
              console.log("tab2 result:",r);
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

