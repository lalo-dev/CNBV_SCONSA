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
        idEstruc:0,
        verificado:0,
        validado:0,
        plazas: []
     },
     tab5:{
        id_marco:0,
        verificado:0,
        validado:0,
        id_lista_cat:'',
        listas: [],
        anio:''
     },
     tab6:{
        id_manual:0,
        verificado:0,
        validado:0,
        textObj:'',
        textFunc:'',
        objetivos:[],
        funciones:[]
     },
     tab7:{
      id_mapa:0,
      verificado:0,
      validado:0,
      proc1:{
        id_direccion:0,
        rubro:'',
        proceso:'',
        objetivo:'',
        etapa:'',
        descripcion:'',
        responsable:'',
        etapasProc:[]
      },
      proc2:{
        id_direccion:0,
         rubro:'',
        proceso:'',
        objetivo:'',
        etapa:'',
        descripcion:'',
        responsable:'',
        etapasProc:[]
      },
      proc3:{
        id_direccion:0,
        rubro:'',
        proceso:'',
        objetivo:'',
        etapa:'',
        descripcion:'',
        responsable:'',
        etapasProc:[]
      }
     },
     //tab4 event
     addFila:function(){
         this.tab4.plazas.push({
              idPlaza:0,
              puesto:'',
              dir1:'',
              dir2:'',
              dir3:'',
              dir4:''
             });
     },
      deleteFila:function(e){
       var indx = this.tab4.plazas.indexOf(e.data);
       this.tab4.plazas.splice(indx,1);
     },
     getidTemp:function(arry){
        
           return (arry.length)? parseInt(arry[arry.length-1].id_temp) + 1 : 1;
     },
     //tab5 event
     addLista:function(){
      var l = this.tab5.listas;

        this.tab5.listas.push({
              id_lista:0,
              id_temp:this.getidTemp(l),
              id_lista_cat:this.tab5.id_lista_cat,
              nomLista:$('#sltLista').find(":selected").text()
             });

        this.set('tab5.id_lista_cat','');
     },
     deltLista:function(e){
         var indx = this.tab5.listas.indexOf(e.data);
          this.tab5.listas.splice(indx,1);
     },
     //tab6 event
     addObjetivo:function(){
      var edit = this.indxObjec;
      var indx = (edit) ? this.tab6.objetivos.indexOf(edit) : -1;
      if(indx > -1){
        edit.objetivo = this.tab6.textObj;
        this.tab6.objetivos.splice(indx,1,edit);

      }else
        this.tab6.objetivos.push({
          id_objetivo:0,
          id_temp:this.getidTemp(this.tab6.objetivos),
          objetivo:this.tab6.textObj
        });

        this.set('tab6.textObj','');
        this.indxObjec = null;
     },
     editObjetivo:function(e){
        this.set('tab6.textObj',e.data.objetivo);
        this.indxObjec = e.data;
     },
     addFuncion:function(){

      var editFun = this.indxfuncion;
      var indx = (editFun) ? this.tab6.funciones.indexOf(editFun) : -1;

      if(indx > -1){
        editFun.funcion = this.tab6.textFunc;
        this.tab6.funciones.splice(indx,1,editFun);
      }else{

        this.tab6.funciones.push({
          id_funcion:0,
          id_temp:this.getidTemp(this.tab6.funciones),
          funcion:this.tab6.textFunc
        });
      }
        
        this.set('tab6.textFunc','');
        this.indxfuncion = null;
     },
     editFuncion:function(e){
        this.set('tab6.textFunc',e.data.funcion);
        this.indxfuncion = e.data;
     },
     //tab7 event
     addProceso:function(e){
      var currProc = $(e.currentTarget).data('proc');
      var indxProc = this.tab7[currProc].indxProc;
      var proc = this.tab7[currProc];
      var indx = (indxProc) ? this.tab7[currProc].etapasProc.indexOf(indxProc) : -1;

       if(indx > -1){
          indxProc.etapa = proc.etapa;
          indxProc.descripcion = proc.descripcion;
          indxProc.responsable = proc.responsable;
          this.tab7[currProc].etapasProc.splice(indx,1,indxProc);
       }else{

          this.tab7[currProc].etapasProc.push({
            id_etapa:0,
            etapa:proc.etapa,
            descripcion:proc.descripcion,
            responsable:proc.responsable,
            currProc: currProc
          });
       }

      var lim = 'tab7.'+currProc;
      this.set(lim+'.etapa','');
      this.set(lim+'.descripcion','');
      this.set(lim+'.responsable','');
      this.set(lim+'.indxProc', null);
    },
    editProc:function(e){

      var stPrc = 'tab7.'+e.data.currProc;
      // this.set(stPrc+'.indxProc', e.data);
      this.tab7[e.data.currProc].indxProc = e.data;
      this.set(stPrc+'.etapa',e.data.etapa);
      this.set(stPrc+'.descripcion',e.data.descripcion);
      this.set(stPrc+'.responsable',e.data.responsable);
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
              tab3.verificado = (tab3.verificado) ? 1: 0;
              tab3.validado = (tab3.validado) ? 1: 0;

         jx('set_tab3', tab3, function(r){
              mdl.tab3.idDM = r;
          });
    },
    saveTab4:function(e){
      e.preventDefault();
      var tab4 = this.tab4.toJSON();
          tab4.id_revision = idRevision;
          tab4.verificado = (tab4.verificado) ? 1: 0;
          tab4.validado = (tab4.validado) ? 1: 0;


      jx('set_tab4', tab4, function(r){
          tab4.idEstruc = r;
      });
    },
    saveTab5:function(e){
      e.preventDefault();
      var tab5 = this.tab5.toJSON();
          tab5.id_revision = idRevision;
          tab5.verificado = (tab5.verificado) ? 1: 0;
          tab5.validado = (tab5.validado) ? 1: 0;

          var ll = tab5.listas;
          tab5.listas = [];

          for(var i=0; i < ll.length; i++)
            if(ll[i].id_lista == 0)
              tab5.listas.push(ll[i]);

      jx('set_tab5', tab5, function(r){

          getTab5();
      });
    },
    saveTab6:function(e){
      e.preventDefault();
      var tab6 = this.tab6.toJSON();
          tab6.id_revision = idRevision;
          tab6.verificado = (tab6.verificado) ? 1: 0;
          tab6.validado = (tab6.validado) ? 1: 0;


      jx('set_tab6', tab6, function(r){
        console.log(r);
          // getTab5();
      });
    },
    saveTab7:function(e){
      e.preventDefault();
      var prc = $(e.currentTarget).data('proc');

      var tab7d = {
        id_revision: idRevision,
        id_mapa:this.tab7.id_mapa,
        verificado: (this.tab7.verificado) ? 1: 0,
        validado: (this.tab7.validado) ? 1: 0,
        num_direccion:prc,
        proc:this.tab7[prc].toJSON()
      };
      
      console.log(tab7d);
      jx('set_tab7', tab7d, function(r){
        console.log(r);
      });

    }
   });

   kendo.bind($('#c-mdl'), mdl);


   jx('get_tab2',{id_revision:idRevision},function(r){
      
        if(r.length){
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
        }
    });

   jx('get_tab3',{id_revision:idRevision},function(r){

     if(r.length){
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
     }

     });

   jx('get_tab4',{id_revision:idRevision},function(r){

      if(r.length){
        r = r[0];
        
         var rr = r.plazas;

          r.plazas = [];

         for(var i = 0;i < rr.length; i++){
            r.plazas.push({
              idPlaza:rr[i].id_plaza,
              puesto:rr[i].puesto,
              dir1:rr[i].direccion_grl_1,
              dir2:rr[i].direccion_grl_2,
              dir3:rr[i].direccion_grl_3,
              dir4:rr[i].direccion_grl_4
             });
         }

         mdl.set('tab4', {
            idEstruc: r.id_estructura,
            verificado: parseInt(r.verificado),
            validado: parseInt(r.validado),
            plazas:r.plazas
         });
      }
       
      
     });


   var getTab5 = function(){
    jx('get_tab5',{id_revision:idRevision},function(r){

      if(r.length){
        r = r[0]; 
        r.verificado = parseInt(r.verificado);
        r.validado = parseInt(r.validado);
        for(var i=0; i < r.listas.length;i++)
          r.listas[i].nomLista = 'Falta catalogo';
        

         mdl.set('tab5', r);
      }      
      
     });
   }

   var getTab6 = function(){
    jx('get_tab6',{id_revision:idRevision},function(r){

      if(r.length){
        r = r[0]; 
        r.verificado = parseInt(r.verificado);
        r.validado = parseInt(r.validado);

         mdl.set('tab6', r);
      }      
      
     });
   }

   var getTab7 = function(){
    jx('get_tab7',{id_revision:idRevision},function(r){

      if(r.length){
        r = r[0]; 
        r.verificado = parseInt(r.verificado);
        r.validado = parseInt(r.validado);

        mdl.set('tab7.id_mapa',r.id_mapa);
        mdl.set('tab7.verificado',r.verificado);
        mdl.set('tab7.validado',r.validado);

         // mdl.set('tab6', r);
         for(var i=0;i < r.direcciones.length;i++){
          r.direcciones[i].currProc = r.direcciones[i].num_direccion;

          for(var e=0;e < r.direcciones[i].etapasProc.length;e++){
             r.direcciones[i].etapasProc[e].currProc = r.direcciones[i].num_direccion;
          }

           mdl.set('tab7.'+r.direcciones[i].num_direccion,r.direcciones[i]);
         }
         console.log(r);
      }      
      
     });
   }

   getTab5();
   getTab6();
   getTab7();
  

     


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

