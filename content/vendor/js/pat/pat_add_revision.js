/*
 * VALIDACIONES PARA USUARIOS GENERALES
 * Init Bootstrap Forms Validation, for more examples you can check out https://github.com/jzaefferer/jquery-validation   
 */
var BaseFormValidation = function() {
      //validacion de agregar blog
        var initValidationGeneral = function(){
        jQuery('#add_revision').validate({
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
                'no_revision' : {required: true },     
                'tipo_revision' : {required: true },                
                'prog_adic' : { required: true },
                'clave' : { required: true },
                'instancia' : { required: true },
                'justificacion' : { required: true },
                'area_revizar' : { required: true },
                'descripcion' : { required: true },
                'objetivo' : { required: true },
                'semana_ini' : { required: true },
                'semana_fin' : { required: true },
                'ts_revision' : { required: true },
                'ts_hombre' : { required: true },
                'periodo_ini' : { required: true },
                'periodo_fin' : { required: true },
                'aud_precedente' : { required: true },
                'muestra' : { required: true },
                'universo' : { required: true },
                'riesgo' : { required: true },
            },messages: {},
            submitHandler: function(form){                
                if ($("#id_rev_form").val() == "") {
                  $("#modal_confirmar_add").modal('show');
                }else{
                  addpresentacion_confirm();
                };
            }
        });
    };

    return {
        init: function () {
            // validaciones adddatos
            initValidationGeneral();  

            // Init Validation on Select2 change
            jQuery('.js-select2').on('change', function(){
                jQuery(this).valid();
            });            
            jQuery.fn.reset = function () {
              $(this).each (function() { this.reset(); });
            }
        }
    };
}();
  //ADD USUARIOS
  function addpresentacion_confirm(){   
      var compensacion = $.trim($("#sup_bandera_url").text() );
      var base_url = compensacion+'PatController/m1_0_0_form_pat_agregar_revision_add';
      var form = $("#add_revision");
      $.ajax({
        url: base_url,                    
        type: "post",
        dataType: 'json',
        data: $(form).serialize(),
        beforeSend:function(){
          //$("#modal_confirmar_add_user").modal('hide');
          $( "#btn_datos_gen" ).prop( "disabled", true );
          $( "#btn_datos_cancelar" ).prop( "disabled", true );
          
          if ($( "#load_datos_gen" ).hasClass( "hidden" )) {
            $( "#load_datos_gen" ).removeClass( "hidden" );
          };
        },success:function(data){
          console.log(data);          
          if (data) {              
               if (typeof(data.estatus_error) === 'undefined') { //agregado 
                
                if (!$( "#load_datos_gen" ).hasClass( "hidden" )) { //quitar el load
                    $( "#load_datos_gen" ).addClass( "hidden" );
                 };
                if ($( "#btn_datos_gen_otro" ).hasClass( "hidden" )) { 
                  $( "#btn_datos_gen_otro" ).removeClass( "hidden" );
                };

                if (typeof(data.update_revision) === 'undefined') {
                  //addPres(data);
                  $( "#btn_datos_gen" ).prop( "disabled", false );
                  $( "#btn_datos_cancelar" ).prop( "disabled", false );
                }else{
                  //editPres(data); 
                }
                //$("#id_rev_form").val(data.id_pre_eje);
                //form.reset();
                //CKEDITOR.instances['blog_des'].setData('');
               }else{ //errores de validacion                
                 alert(data.error);
               };
          }else{ //some error
            alert('Error interno, recargue la pagina');
          };
        }
    });
  }

   var addPres = function(data){ 
      
    }

    var editPres = function(data){
      var row = $("#id_pres_"+$.trim(data.id_pre_eje) );
      file_type = $("#pre_eje_file_type option[value='"+data.pre_eje_file_type+"']").text();
      $(row).find("td:eq(1)").text(data.pre_eje_name); 
      $(row).find("td:eq(2)").text(data.pre_eje_des); 
      $(row).find("td:eq(3)").html(file_type); 
    }

    function editAreaformval(data, select){
      return $(select+' option').filter(function(){return $(this).html() == data; }).val();
    }
    function editpresForm(id_pres){
      //console.log(id_pres)
      var row = $("#id_pres_"+$.trim(id_pres) ); //tabla
      //console.log(row)
      var pre_eje_name = $(row).find("td:eq(1)").text();
      var pre_eje_des = $(row).find("td:eq(2)").html();
      var file_type = editAreaformval( $.trim( $(row).find("td:eq(3)").text() ), '#pre_eje_file_type' );

      $("#id_rev_form").val(id_pres);   //CKEDITOR.instances['blog_des'].setData(blog_des)
      $("#pre_eje_name").val(pre_eje_name);
      $("#pre_eje_des").val(pre_eje_des);
      $("#pre_eje_file_type").val(file_type);

      var hasclass = $( ".btn-open-form > i" ).hasClass('si-arrow-down');
      if (hasclass == true) {
        $( ".btn-open-form" ).trigger( "click" ); 
      };
    }
    
    function delPrespar(id_pres){ //modal delete escolaridad
      $('#btn_del_all').attr('onClick', 'delPres('+id_pres+');');
      $('#modal_del_all').modal('show');
    }

    function delPres(id_pres){ //Eliminar escolaridad
    // id table #table_esc; id contador #label_find_esc      
      base_url = 'PatController/delete_pres_ejec/'+id_pres;
      $.ajax({
        url: base_url,                    
        type: "post",
        dataType: 'json',
        data: {data : 'delete'},
        beforeSend:function(){
          //console.log("eiminado");
          $('#modal_del_all').modal('hide');
          $("#id_pres_"+$.trim(id_pres) ).hide();
        },
        success:function(data){                        
            //*
            if (data) {    
                 if (typeof(parseInt(data) ) === "number") {
                  $("#id_pres_"+$.trim(data) ).remove();              
                  var trs = $("#table_esc tbody tr").length;
                  $("#label_find_esc").text(trs);
                  $('#modal_del_all').modal('hide');
                 }else{
                  alert('Error de datos');
                 };
            }else{ //some error
              alert('Error Interno');
            };
            //*
        }
    });  
    }



// Initialize when page loads
jQuery(function(){ BaseFormValidation.init(); });














