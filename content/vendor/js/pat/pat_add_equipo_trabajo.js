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
            $('tr:not(.hidden) td.index ', $("#table_equipo_trabajo tbody") ).each(function (i) {
              $(this).html(i + 1);          
          });
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
          //console.log(data);          
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
    //////////////////////

    function add_list_worker(data){
      //$("#user_trx_"+$.trim(data.id_usuario)).removeClass('hidden');
      //console.log(data);  
      var trs =$("#table_equipo_trabajo tr").length;
      $("#label_equipo_trabajo").text(trs);
      //$("#user_tr_"+$.trim(data.id_usuario) + " .select_rol option[value='48']").val();
      var select = $("#user_tr_"+$.trim(data.id_usuario) + " .select_rol").val();
      var select_reten = "";
      var nombre = $("#user_tr_"+$.trim(data.id_usuario) + " td:eq(2)").text();
      var puesto = $("#user_tr_"+$.trim(data.id_usuario) + " td:eq(3)").text();
      //console.log(select);
      if (!$.isEmptyObject(select)) {
        $.each(select, function(index, value) {                     
          if ($.trim(value) != "") {
              select_reten += $("#user_tr_"+$.trim(data.id_usuario) + " .select_rol option[value='"+value+"']").text() + ", ";
          };                    
        });
      };

      //console.log(select_reten);
      var nuevaFila='<tr id="user_trx_'+data.id_usuario+'">';
      nuevaFila+='<td class="index">'+(trs)+' </td>';
      nuevaFila+='<td class="text-left">'+select_reten+'</td>';
      nuevaFila+='<td class="text-left">'+nombre+'</td>';
      nuevaFila+='<td class="text-left">'+puesto+'</td>';
    
      nuevaFila+='<td class="text-center" > <div class="btn-group">';
      nuevaFila+= '<button class="btn btn-danger btn-xs" type="button"  onclick="initValidationChangeStatus('+data.id_usuario+',1)" data-toggle="tooltip" data-placement="top" title="Eliminar">';
      nuevaFila+= '<i class="fa fa-times"></i>';
      nuevaFila+= '</button>';
      nuevaFila+= '</div></td>';              
      nuevaFila+="</tr>";
      $("#table_equipo_trabajo").append(nuevaFila);
    }

    function add_list_worker_selected(data){
      //$("#user_trx_"+$.trim(data.id_usuario)).removeClass('hidden');
      //console.log("data");
      //console.log(data);
 
      //$("#user_tr_"+$.trim(data.id_usuario) + " .select_rol option[value='48']").val();
      var select = $("#user_tr_"+$.trim(data.id_usuario) + " .select_rol").val();
      var select_reten = "";
      //console.log(select);
      if (!$.isEmptyObject(select)) {
        $.each(select, function(index, value) {                     
          if ($.trim(value) != "") {
              select_reten += $("#user_tr_"+$.trim(data.id_usuario) + " .select_rol option[value='"+value+"']").text() + ", ";
          };                    
        });
      }else{
        var select_reten = "N/A";
      };
      var tabla = $("#user_trx_"+$.trim(data.id_usuario) );
      $(tabla).find("td:eq(1)").text(select_reten);

    }

    function initValidationChangeStatus(identificador, baderax){ //cambiar status de usuario   
      var id_revision = $.trim( $("#id_revision").text() );
      var bandera;
      if ( $("#activo_user_"+identificador).is(':checked') ) {
        bandera = 0;
      }else{
        bandera = 1;
      };
      if (baderax == 1) {
        bandera = 1;
      };
      //console.log("bandera : " + bandera);
      //console.log(id_revision +" " +identificador)
          var compensacion = $.trim($("#sup_bandera_url").text() );          
          base_url = compensacion+'PatController/rol_usuarios_change_status';
          $.ajax({
            url: base_url,                    
            type: "post",
            dataType: 'json',
            data: {activo : bandera, id_user : identificador, id_rev : id_revision},
            beforeSend:function(){  //console.log("");
            },
            success:function(data){                      
                //*                              
                if (data) { 
                  if (typeof(data.estatus_error) === 'undefined') {
                    if (data.activo == 0) {
                      $("#activo_user_"+$.trim(data.id_usuario)).prop('checked', true);
                      initValidationChangeRoles(data.id_usuario);
                      
                      add_list_worker(data);
                    }else{
                      $("#activo_user_"+$.trim(data.id_usuario)).prop('checked', false);
                      //$("#user_trx_"+$.trim(data.id_usuario)).addClass('hidden');
                      $("#user_trx_"+$.trim(data.id_usuario)).remove();
                    };
                    var trs = $("#table_equipo_trabajo tbody tr:not(.hidden)").length;
                    $("#label_equipo_trabajo").text(trs);
                    reset_table_index();
                  }else{ //errores de validacion                
                   alert(data.error);
                 };
                  //console.log(data)                                  
                }else{ //some error
                  alert('Error de datos');
                };
                //*
            }
        });   
          //fin
      }

      function reset_table_index(){
        $('tr:not(.hidden) td.index ', $("#table_equipo_trabajo tbody") ).each(function (i) {
            $(this).html(i + 1);          
        });
      } 

    function initValidationChangeRoles(identificador){ //cambiar status de usuario   
      var id_revision = $.trim( $("#id_revision").text() );
      var bandera;
      var roles = $("#user_tr_"+identificador+ " .select_rol").serialize();
      if ( $("#activo_user_"+identificador).is(':checked') ) {
        bandera = 0;
      }else{
        bandera = 1;
      };

      var compensacion = $.trim($("#sup_bandera_url").text() );   
          base_url = compensacion+'PatController/rol_usuarios_change_roles';
          $.ajax({
            url: base_url,                    
            type: "post",
            dataType: 'json',
            data: {activo : bandera, id_user : identificador, id_rev : id_revision , rol : roles },
            beforeSend:function(){
              //console.log("");
            },
            success:function(data){   
            //console.log(data);                   
                //*                
                if (data) { 
                  //console.log(data)
                  if (typeof( parseInt(data.id_usuario)) == "number") {
                    //afectacion de equipo de trabajo al cambio de roles
                    if (data.activo == 0) {
                     $("#activo_user_"+$.trim(data.id_usuario)).prop('checked', true);
                      add_list_worker_selected(data);
                    }else{
                       $("#activo_user_"+$.trim(data.id_usuario)).prop('checked', false);
                    }; 
                     //47 : titular ; 48 : coordinador; 49 : jefe_grupo; 50: auditor; 51 : consulta
                    if (data.rol_titular == 0) {
                      $("#user_tr_"+data.id_usuario+ " .select_rol option[value='47']").prop('selected', true);
                    }else{
                      $("#user_tr_"+data.id_usuario+ " .select_rol option[value='47']").prop('selected', false);
                    };
                    if (data.rol_cordinador == 0) {
                      $("#user_tr_"+data.id_usuario+ " .select_rol option[value='48']").prop('selected', true);
                    }else{
                      $("#user_tr_"+data.id_usuario+ " .select_rol option[value='48']").prop('selected', false);
                    };
                    if (data.rol_jefe_grupo == 0) {
                      $("#user_tr_"+data.id_usuario+ " .select_rol option[value='49']").prop('selected', true);
                    }else{
                      $("#user_tr_"+data.id_usuario+ " .select_rol option[value='49']").prop('selected', false);
                    };
                    //var titular = $("#user_tr_"+data.id_usuario+ " .select_rol option[value='48']")//.prop('checked');
                    //console.log(data.rol_titular);
                  }else{  alert('Error en la pagina, contacte a su administrador');   };                                                   
                }else{ //some error
                  alert('Error en la pagina');
                };
                //*
            }
        });   
          //fin
      }


// Initialize when page loads
jQuery(function(){ BaseFormValidation.init(); });














