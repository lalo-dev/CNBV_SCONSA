/*
 * VALIDACIONES PARA USUARIOS GENERALES
 * Init Bootstrap Forms Validation, for more examples you can check out https://github.com/jzaefferer/jquery-validation   
 */
var BaseFormValidation = function() {
      //validacion de agregar blog
        var initValidationGeneral = function(){
        jQuery('#add_semana_hombre').validate({
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
                'id_user' : {required: true },     
                'auditoria' : {required: true },                
                'seguimiento' : { required: true },
                'mejora_gestion' : { required: true },
                'trans_inte_parti' : { required: true },
                'quejas_denuncias' : { required: true },
                'responsabilidades' : { required: true },
                'controversia' : { required: true },
                'actividades' : { required: true },
                'planeacion' : { required: true },
                'informe_sfp' : { required: true },
                'comite' : { required: true },
                'junta_consejo' : { required: true },
                'act_adm' : { required: true },
                'capacitacion' : { required: true },
                'plazas_vac' : { required: true },
                'vacaciones' : { required: true },
                'total' : { required: true },
            },messages: {},
            submitHandler: function(form){                
                //if ($("#id_pres_form").val() == "") {
                  $("#modal_confirmar_add_pres").modal('show');
                //}else{
                  //addpresentacion_confirm();
                //};
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
            $("#add_semana_hombre input").on('change',function(){
              var suma_total = 0;
              suma_total +=parseInt($("#auditoria").val());
              suma_total +=parseInt($("#seguimiento").val());
              suma_total +=parseInt($("#mejora_gestion").val());
              suma_total +=parseInt($("#trans_inte_parti").val());
              suma_total +=parseInt($("#quejas_denuncias").val());
              suma_total +=parseInt($("#responsabilidades").val());
              suma_total +=parseInt($("#controversia").val());
              suma_total +=parseInt($("#actividades").val());
              suma_total +=parseInt($("#planeacion").val());
              suma_total +=parseInt($("#informe_sfp").val());
              suma_total +=parseInt($("#comite").val());
              suma_total +=parseInt($("#junta_consejo").val());
              suma_total +=parseInt($("#act_adm").val());
              suma_total +=parseInt($("#capacitacion").val());
              suma_total +=parseInt($("#plazas_vac").val());
              suma_total +=parseInt($("#vacaciones").val());
              if (typeof(parseInt(suma_total) ) === "number") {
                $("#total").val(parseInt(suma_total) );
              }else{
                $("#total").val('0');
              };
              
            })
            $("#id_user").on('change',function(){
              var user_id = $.trim($(this).val() );
              if (user_id == "") { alert("Error interno, recargue la pagina."); return false; };
              var base_url = 'PatController/m1_5_semanas_hombre_search_iduser/'+user_id;
              //var form = $("#add_semana_hombre");
              $.ajax({
                url: base_url,                    
                type: "post",
                dataType: 'json',
                //data: $(form).serialize(),
                beforeSend:function(){                  
                  if ($( "#load_datos_gen2" ).hasClass( "hidden" )) {
                    $( "#load_datos_gen2" ).removeClass( "hidden" );
                  };
                },success:function(data){
                  //console.log(data);
                  if (!$( "#load_datos_gen2" ).hasClass( "hidden" )) { //quitar el load
                      $( "#load_datos_gen2" ).addClass( "hidden" );
                   };
                  if (data) {
                    if (typeof(Number(data.id_sem_hom) ) === 'number') { //agregado 
                      //console.log(data);
                      $("#id_pres_form").val(data.id_sem_hom);

                      $("#auditoria").val(data.auditoria);
                      $("#seguimiento").val(data.seguimiento);
                      $("#mejora_gestion").val(data.mejora_gestion);
                      $("#trans_inte_parti").val(data.trans_inte_parti);
                      $("#quejas_denuncias").val(data.quejas_denuncias);
                      $("#responsabilidades").val(data.responsabilidades);
                      $("#controversia").val(data.controversia);
                      $("#actividades").val(data.actividades);
                      $("#planeacion").val(data.planeacion);
                      $("#informe_sfp").val(data.informe_sfp);
                      $("#comite").val(data.comite);
                      $("#junta_consejo").val(data.junta_consejo);
                      $("#act_adm").val(data.act_adm);
                      $("#capacitacion").val(data.capacitacion);
                      $("#plazas_vac").val(data.plazas_vac);
                      $("#vacaciones").val(data.vacaciones);
                      $("#total").val(data.total);
                      //alert(data.id_sem_hom);
                     }else{ //errores de validacion                
                       alert('Error interno, recargue la pagina.');
                     };
                  }else{
                    $("#id_pres_form").val('');
                    $("#auditoria").val('0');
                      $("#seguimiento").val('0');
                      $("#mejora_gestion").val('0');
                      $("#trans_inte_parti").val('0');
                      $("#quejas_denuncias").val('0');
                      $("#responsabilidades").val('0');
                      $("#controversia").val('0');
                      $("#actividades").val('0');
                      $("#planeacion").val('0');
                      $("#informe_sfp").val('0');
                      $("#comite").val('0');
                      $("#junta_consejo").val('0');
                      $("#act_adm").val('0');
                      $("#capacitacion").val('0');
                      $("#plazas_vac").val('0');
                      $("#vacaciones").val('0');
                      $("#total").val('0');
                      $("#xxx").val('0');
                    //alert('Error interno, recargue la pagina.');
                  };       
                   
                  
                }
            });
            })
        }
    };
}();
  //ADD USUARIOS
  function addpresentacion_confirm(){   
      var total = $("#total").val();
      //console.log(total);
      if (typeof(parseInt(total) ) === "number") {
        if (total > 52) {
          $("#modal_top_max_sem").modal('show');
          return false;
        };
      }else{
        $("#modal_top_max_sem").modal('show');
        return false;
      };
      var base_url = 'PatController/m1_5_semanas_hombre_add';
      var form = $("#add_semana_hombre");
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
          //console.log(data);
          $( "#btn_datos_gen" ).prop( "disabled", false );
          $( "#btn_datos_cancelar" ).prop( "disabled", false );
          if (!$( "#load_datos_gen" ).hasClass( "hidden" )) { //quitar el load
              $( "#load_datos_gen" ).addClass( "hidden" );
           };
          if (data) {              
               if (typeof(data.estatus_error) === 'undefined') { //agregado 
                if (typeof(data.id_pres_update) === 'undefined') {
                  addPres(data);
                }else{
                  editPres(data); 
                }
                //$("#id_pres_form").val(data.id_pre_eje);
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

      $("#id_pres_form").val(id_pres);   //CKEDITOR.instances['blog_des'].setData(blog_des)
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














