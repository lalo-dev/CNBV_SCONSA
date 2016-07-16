
var BaseFormValidation = function() {
  
    
    //validaciones habilidades //3er formulario
    var function_iniciales = function(){
      var trs = $("#table_usuarios tbody tr").length;
      $("#label_count_user").text(trs);
      var trs_area = $("#table_usuarios_area tbody tr").length;
      $("#label_count_user_area").text(trs_area);
     }
    var function_interna = function(data){}



    return {
        init: function () { //iniciando
            // 
            function_iniciales(); //declaracion de funciones            
            jQuery('.js-select2').on('change', function(){ 
                jQuery(this).valid();
            });

            jQuery.fn.reset = function () {//Resetear formulario
              $(this).each (function() { this.reset(); });
            }
        }
    };
}();
    
    
    function initValidationChangeStatus(identificador){ //cambiar status de usuario   
      var bandera;
      if ( $("#activo_user_"+identificador).is(':checked') ) {
        bandera = 0;
      }else{
        bandera = 1;
      };
          base_url = 'UserController/adm_Usuarios_change_status/';
          $.ajax({
            url: base_url,                    
            type: "post",
            dataType: 'json',
            data: {activo : bandera, id_user : identificador},
            beforeSend:function(){
              //console.log("");
            },
            success:function(data){                      
                //*                
                if (data) { 
                  //console.log(data)
                  if (data.activo == 0) {
                     $("#activo_user_"+$.trim(data.id_user)).prop('checked', true);
                  }else{
                     $("#activo_user_"+$.trim(data.id_user)).prop('checked', false);
                  };                
                }else{ //some error
                  alert('Error de datos');
                };
                //*
            }
        });   
          //fin
      }

      function initValidationDeleteUserConf(identificador){ //confirmacion delete user
        $('#btn_del_all').attr('onClick', 'initValidationDeleteUser('+identificador+');');
        $('#modal_del_user').modal('show');
      }

      function initValidationDeleteUser(identificador){ //Delete user       
          base_url = 'UserController/adm_Usuarios_delete/';
          $.ajax({
            url: base_url,                    
            type: "post",
            dataType: 'json',
            data: {estatus : 1, id_user : identificador},
            beforeSend:function(){
              //console.log("Eliminando");
              $("#modal_del_user").modal('hide')
              $("#user_tr_"+$.trim(identificador)).hide();
            },
            success:function(data){                      
                //*               
                if (data) { 
                  
                  //console.log(data)
                  $("#user_tr_"+$.trim(identificador)).remove();
                  if (data.estatus == 1) {
                     $("#user_tr_"+$.trim(data.id_user)).remove();
                  }else{
                     alert("Error al eliminar usuario");
                  };  
                  var trs = $("#table_usuarios tbody tr").length;
                  $("#label_count_user").text(trs);              
                }else{ //some error
                  alert('Error de datos');
                }; 
                //*
            }
        });   
          //fin
      }    

      function openShowConsulta(open){
        $(open).modal('show');
      }

      //functiones para usuario area
      function initValidationChangeStatus_area(identificador){ //cambiar status de usuario   
      var bandera;
      if ( $("#activo_user_area_"+identificador).is(':checked') ) {
        bandera = 0;
      }else{
        bandera = 1;
      };
          base_url = 'UserController/adm_Usuarios_area_change_status/';
          $.ajax({
            url: base_url,                    
            type: "post",
            dataType: 'json',
            data: {activo : bandera, id_user : identificador},
            beforeSend:function(){
              //console.log("");
            },
            success:function(data){                      
                //*                
                if (data) { 
                  //console.log(data)
                  if (data.activo == 0) {
                     $("#activo_user_area_"+$.trim(data.id_user)).prop('checked', true);
                  }else{
                     $("#activo_user_area_"+$.trim(data.id_user)).prop('checked', false);
                  };                
                }else{ //some error
                  alert('Error de datos');
                };
                //*
            }
        });   
          //fin
      }


      function initValidationDeleteUserAreaConf(identificador){ //confirmacion delete user
        $('#btn_del_all_area').attr('onClick', 'initValidationDeleteUserArea('+identificador+');');
        $('#modal_del_user_area').modal('show');
      }

      function initValidationDeleteUserArea(identificador){ //Delete user       
          base_url = 'UserController/adm_Usuarios_area_delete/';
          $.ajax({
            url: base_url,                    
            type: "post",
            dataType: 'json',
            data: {estatus : 1, id_user : identificador},
            beforeSend:function(){
              //console.log("Eliminando");
              $("#modal_del_user_area").modal('hide')
              $("#user_area_tr_"+$.trim(identificador)).hide();
            },
            success:function(data){                      
                //*               
                if (data) {                   
                  //console.log(data)
                  $("#user_area_tr_"+$.trim(identificador)).remove();
                  if (data.estatus == 1) {
                     $("#user_area_tr_"+$.trim(data.id_user)).remove();
                  }else{
                     alert("Error al eliminar usuario");
                  };  
                  var trs = $("#table_usuarios_area tbody tr").length;
                  $("#label_count_user_area").text(trs);              
                }else{ //some error
                  alert('Error de datos');
                }; 
                //*
            }
        });   
          //fin
      }    


// Initialize when page loads
jQuery(function(){ BaseFormValidation.init(); });















//codigo borrador 

/*
function editEscolarida123(id_esc, posicion){ //editar escolaridad borrador
    // id table #table_esc; id contador #label_find_esc
      var trs =$("#table_esc tbody tr").length;      
      var rows = $('#table_esc tbody tr');
      var data;
      var data_id;
      var update= "";
      for(var i=0;i<trs;i++){
          var row = rows.eq(i);
          data = row.children();
          data_id =data[0].outerText;
          console.log(id_esc + ":" + data_id);
          if ($.trim(id_esc) === $.trim(data_id) ) {
            update = data;
          };
      }
      if (update =="") {
        alert("Error");
      }else{
        update[0].outerText; //id_esc
      };

    }

*/