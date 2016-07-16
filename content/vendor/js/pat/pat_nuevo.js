
var BaseFormValidation = function() {
  
    
    //validaciones habilidades //3er formulario
    var function_iniciales = function(){}
    var function_interna = function(){}



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
      if ( $("#activo_pat_"+identificador).is(':checked') ) {
        bandera = 0;
      }else{
        bandera = 1;
      };
      if (bandera == 1) {
        $("#activo_pat_"+identificador).prop('checked', true);
        $("#modal_change_pat_off").modal('show');
        return false;
      };
      //console.log(identificador);
      //base_url = 'UserController/adm_Usuarios_change_status/';
          base_url = 'PatController/pat_change_status';
          $.ajax({
            url: base_url,                    
            type: "post",
            dataType: 'json',
            data: {activo : bandera, id_pat : identificador},
            beforeSend:function(){},
            success:function(data){  
            //console.log(data);                    
                //*                
                if (data) {
                  if (typeof(data.estatus_error) === 'undefined') {
                    if (data.activo == 0) {
                       $("#activo_user_"+$.trim(data.id_pat)).prop('checked', true);
                    }else{
                       $("#activo_user_"+$.trim(data.id_pat)).prop('checked', false);
                    };
                  }else{  
                    $("#activo_pat_"+identificador).prop('checked', false);
                    //alert(data.error);
                    $("#modal_change_pat_false").modal('show');
                  };
                                  
                }else{ //some error
                  alert('Error, recargue la pagina');
                };
                //*
            }
        });   
          //fin
      }


      function openShowConsulta(open){
        $(open).modal('show');
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