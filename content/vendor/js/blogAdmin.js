/*
 *  Document   : base_forms_validation.js
 *  Author     : pixelcave
 *  Description: Custom JS code used in Form Validation Page
 * Init Bootstrap Forms Validation, for more examples you can check out https://github.com/jzaefferer/jquery-validation   
 */


var BaseFormValidation = function() {
      //validacion de datos generales 172 a 600
        var initValidationBlog = function(){

        jQuery('#addblogform').validate({
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
                'blog_titulo': { required: true},
                'blog_fecha' : {required: true },
                'blog_tipo' : { required: true },
                'blog_des' : { required: true }
            },messages: {},
            submitHandler: function(form){
              
                $("#modal_confirmar_add_blog").modal('show');
            }
        });
    };

    

    return {
        init: function () {
            // validaciones de datos generales 100 a 600 
            initValidationBlog();

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

  function addblog_confirm(){
      var base_url = 'BlogController/adm_Blog_add';
      var form = $("#addblogform");
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
            if (data) {
              console.log(data);
                if (!$( "#load_datos_gen" ).hasClass( "hidden" )) { //quitar el load
                    $( "#load_datos_gen" ).addClass( "hidden" );
                 };
                 if (typeof(data.estatus_error) === 'undefined') { //agregado                             
                  if ($( "#btn_datos_gen_otro" ).hasClass( "hidden" )) { //quitar el load
                    $( "#btn_datos_gen_otro" ).removeClass( "hidden" );
                  };

                  $("#id_user").val(data.id_user); //asignas valor agregado
                  //form.reset();
                 }else{ //errores de validacion
                  $( "#btn_datos_gen" ).prop( "disabled", false );
                  $( "#btn_datos_cancelar" ).prop( "disabled", false );
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