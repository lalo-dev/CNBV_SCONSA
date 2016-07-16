
var BaseFormValidation = function() {
      //validacion de datos generales 172 a 600
        var initValidationGeneral = function(){
        jQuery('#addusuarioareasform').validate({
            ignore: [],
            errorClass: 'help-block animated fadeInDown',
            errorElement: 'div',
            errorPlacement: function(error, e) {
                jQuery(e).parents('.form-group > div').append(error);
            },
            highlight: function(e) {
                var elem = jQuery(e);
                elem.closest('.form-group').removeClass('has-error').addClass('has-error');
                elem.closest('.help-block').remove();
            },
            success: function(e) {
                  var elem = jQuery(e);
                  elem.closest('.form-group').removeClass('has-error');
                  elem.closest('.help-block').remove();
            },
            rules: {                
                //'rol_permiso': { required: true, },
                'entidad' : {required: true },
                'n_expediente' : { required: true },
                'area' : { required: true },
                'nombre' : { required: true },
                'apellidop' : { required: true },
                'cargo' : { required: true },  
                'nivel' : { required: true },
                'nivel_codigo' : { required: true },
                'grado' : { required: true },
                'grado_codigo' : { required: true },
                'fecha_nac' : { required: true },
                'sexo' : { required: true },
                'rfc' : { required: true },
                'curp' : { required: true },
                'lugar_nac' : { required: true },
                'nacionalidad' : { required: true },
                'email_cnbv' : { required: true },
                'extension' : { required: true },
                'torre' : { required: true },
                'piso' : { required: true },
                'coordenada' : { required: true },
                'red' : { required: true }
            },messages: {},
            submitHandler: function(form){
                $("#modal_confirmar_add_user_area").modal('show');
            }
        });
    };

    

    return {
        init: function () {
            // validaciones de datos generales 100 a 600 
            initValidationGeneral();
            // Init Validation on Select2 change
            jQuery('.js-select2').on('change', function(){
                jQuery(this).valid();
            });

            //Resetear formulario
            jQuery.fn.reset = function () {
              $(this).each (function() { this.reset(); });
            }
        }
    };
}();
  //ADD USUARIOS

  function addusuario_confirm(){
    
      var base_url = '../UserController/adm_Usuarios_Area_edit';
      
      var form = $("#addusuarioareasform");
      $.ajax({
        url: base_url,                    
        type: "post",
        dataType: 'json',
        data: $(form).serialize(),
        beforeSend:function(){
            $("#modal_confirmar_add_user").modal('hide');
            $( "#btn_datos_gen" ).prop( "disabled", true );
            $( "#btn_datos_cancelar" ).prop( "disabled", true );
            
            if ($( "#load_datos_gen" ).hasClass( "hidden" )) {
                $( "#load_datos_gen" ).removeClass( "hidden" );
              };
        },
        success:function(data){
          console.log(data);
            if (data) {
              $( "#btn_datos_gen" ).prop( "disabled", false );
               $( "#btn_datos_cancelar" ).prop( "disabled", false );
                if (!$( "#load_datos_gen" ).hasClass( "hidden" )) { //quitar el load
                    $( "#load_datos_gen" ).addClass( "hidden" );
                 };
                 if (typeof(data.estatus_error) === 'undefined') { //agregado                             
                  if ($( "#btn_datos_gen_otro" ).hasClass( "hidden" )) { //quitar el load
                    $( "#btn_datos_gen_otro" ).removeClass( "hidden" );
                  };
                  //$("#id_user").val(data.id_user); //asignas valor agregado
                  //form.reset();
                 }else{ //errores de validacion
                   alert(data.error);
                 };
            }else{ //some error
              alert('Error interno, recargue la pagina');
            };
        }
    });
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