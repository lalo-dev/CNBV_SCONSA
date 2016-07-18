/*
 * VALIDACIONES PARA USUARIOS GENERALES
 * Init Bootstrap Forms Validation, for more examples you can check out https://github.com/jzaefferer/jquery-validation   
 */
var BaseFormValidation = function() {
      //validacion de agregar blog
        var initValidationGeneral_basura = function(){
        jQuery('.form_comment_rev').validate({
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
                'mess_comment' : {required: true },       
            },messages: {},
            submitHandler: function(form){   
            console.log( $(this) );             
                if ($("#id_pres_form").val() == "") {
                  //$("#modal_confirmar_add_pres").modal('show');
                }else{
                  //addpresentacion_confirm();
                };
            }
        });
    };

    return {
        init: function () {
            // validaciones adddatos
            initValidationGeneral_basura();            
            // Init Validation on Select2 change
            jQuery('.js-select2').on('change', function(){
                jQuery(this).valid();
            });            
            jQuery.fn.reset = function () {
              $(this).each (function() { this.reset(); });
            }
            var trs =$("#table_revisiones tbody tr").length;
            $("#label_find_total_rev").text(trs); 

            $(".mess_comment").keypress(function(event) {
                if (event.which == 13) {
                    event.preventDefault(); //console.log( $(this) );
                    var sub_form = $(this).parent(".form_comment_rev");//.submit();
                    var sub_form_ser = $(sub_form).serialize(); //id_comment=2&mess_comment=casd

                    var id_comment = sub_form.children('.id_comment');
                    var id_comment_val = $(id_comment).val();

                    var mess_comment= sub_form.children('.mess_comment');
                    var mess_comment_val = $(mess_comment).val();

                    if ($.trim(mess_comment_val) != "" && typeof( parseInt(id_comment_val) ) === "number"  ) {
                      addpresentacion_confirm(sub_form_ser);
                    }else{
                      //alert("Error interno, recargue la pagina");
                    };
                    
                }
            });          
        }
    };
}();
  //ADD USUARIOS
  function addpresentacion_confirm(sub_form_ser){  
      var compensacion = $.trim($("#sup_bandera_url").text() );
      var base_url = compensacion+'PatController/m1_0_0_form_pat_revision_commit_add';
      $.ajax({
        url: base_url,                    
        type: "post",
        dataType: 'json',
        data: sub_form_ser,
        beforeSend:function(){        
          if ($( "#load_datos_gen_commit" ).hasClass( "hidden" )) {
            $( "#load_datos_gen_commit" ).removeClass( "hidden" );
          };
        },success:function(data){
          if (!$( "#load_datos_gen_commit" ).hasClass( "hidden" )) { //quitar el load
              $( "#load_datos_gen_commit" ).addClass( "hidden" );
           };
          if (data) {              
               if (typeof(data.estatus_error) === 'undefined') { //agregado 
                if (typeof( parseInt(data.id ) ) === "number"  ) {
                  var mess_comment = $("#modal_comment_rev_"+data.id_rev + " .mess_comment" ).val("")//.children(".mess_comment");                  
                  var nuevaFila = '<div class="block block-rounded block-transparent push-15 push-50-l" title="Fecha de Creacion '+data.date_created+'">';
                   nuevaFila+='<div class="block-content block-content-full block-content-mini bg-gray-lighter">'+data.comentario+'</div> ';
                   nuevaFila+='</div>';
                  $("#modal_comment_rev_"+data.id_rev +" .content_commit").append(nuevaFila);
                }; //id: "2", id_creater: "1", id_rev: "2", comentario: "este es una dato", date_created: "2016-07-12 13:41:44"                
               }else{ //errores de validacion                
                 alert(data.error);
               };
          }else{ //some error
            alert('Error interno, recargue la pagina');
          };
        }
    });
  }


  //codigo basura 
   var addPres_basura = function(data){ //http://www.lawebdelprogramador.com/codigo/JQuery/2279-Anadir-y-eliminar-filas-de-una-tabla-con-jquery.html
      file_type = $("#pre_eje_file_type option[value='"+data.pre_eje_file_type+"']").text();
      //console.log(file_type);
      var trs =$("#table_pres tr").length;
      $("#label_find_pres").text(trs);
      var nuevaFila='<tr id="id_pres_'+data.id_pre_eje+'">';
      //nuevaFila+= '<td class="text-center hidden">'+(data.id_area)+' </td>';
      nuevaFila+='<td>'+(trs)+' </td>';
      nuevaFila+='<td class="text-left">'+(data.pre_eje_name )+'</td>';
      nuevaFila+='<td class="text-left">'+(data.pre_eje_des)+'</td>';
      nuevaFila+='<td class="text-center">'+file_type+'</td>';
      //nuevaFila+='<td class="text-center">'+('normativaDoc.docx')+'</td>';
      nuevaFila+='<td class="text-center">'+'sin recurso'+'</td>';
      nuevaFila+='<td class="text-center" > <div class="btn-group">';
      nuevaFila+= '<span class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" onclick="editpresForm('+data.id_pre_eje+')" title="Editar" >';
      nuevaFila+= '<i class="fa fa-pencil"></i>';
      nuevaFila+= '</span>';
      nuevaFila+= '<button class="btn btn-danger btn-xs" type="button"  onclick="delPrespar('+data.id_pre_eje+')" data-toggle="tooltip" data-placement="top" title="Eliminar">';
      nuevaFila+= '<i class="fa fa-times"></i>';
      nuevaFila+= '</button>';
      nuevaFila+= '</div></td>';              
      nuevaFila+="</tr>";
      $("#table_pres").append(nuevaFila);
    }

    var editPres_basura = function(data){ 
      var row = $("#id_pres_"+$.trim(data.id_pre_eje) );
      file_type = $("#pre_eje_file_type option[value='"+data.pre_eje_file_type+"']").text();
      $(row).find("td:eq(1)").text(data.pre_eje_name); 
      $(row).find("td:eq(2)").text(data.pre_eje_des); 
      $(row).find("td:eq(3)").html(file_type); 
    }

    function editAreaformval(data, select){
      return $(select+' option').filter(function(){return $(this).html() == data; }).val();
    }
    function editpresForm_basura(id_pres){
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
    
    function delPrespar(id_pres){ //modal delete validacion
      $('#btn_del_all').attr('onClick', 'delPres('+id_pres+');');
      $('#modal_del_all').modal('show');
    }

    function delPres(id_pres){ //Eliminar validacion
      var compensacion = $.trim($("#sup_bandera_url").text() );    
      base_url = compensacion+'PatController/m1_0_0_form_pat_revision_commit_del/'+id_pres;
      $.ajax({
        url: base_url,                    
        type: "post",
        dataType: 'json',
        data: {data : 'delete'},
        beforeSend:function(){    //console.log("eiminado");
          $('#modal_del_all').modal('hide');
          $("#id_pres_"+$.trim(id_pres) ).hide();
        },
        success:function(data){                        
            //*
            if (data) {    
                 if (typeof(parseInt(data) ) === "number") {
                  $("#id_pres_"+$.trim(data) ).remove();
                  var trs =$("#table_revisiones tbody tr").length;
                  $("#label_find_total_rev").text(trs); 
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

    function validarRevision(id_val){
      $('#btn_validar_revision').attr('onClick', 'addValidacion('+id_val+');');
      $('#modal_validar_revision').modal('show');
    }
    function addValidacion(id_val){
      console.log(id_val);
       //Eliminar validacion
      var compensacion = $.trim($("#sup_bandera_url").text() );    
      base_url = compensacion+'PatController/revision_btn_revizado';
      $.ajax({
        url: base_url,                    
        type: "post",
        dataType: 'json',
        data: {id_rev : id_val},
        beforeSend:function(){    //console.log("eiminado");
          $('#modal_validar_revision').modal('hide');
          //$("#id_pres_"+$.trim(id_pres) ).hide();
        },
        success:function(data){                        
            //*
            console.log(data)
            if (data) {    
                 if (typeof(parseInt(data.id_alert) ) === "number") {
                  /*
                  //$("#id_pres_"+$.trim(data) ).remove();
                  /*var trs =$("#table_revisiones tbody tr").length;
                  $("#label_find_total_rev").text(trs); 
                  $('#modal_del_all').modal('hide'); */
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
   function ChangeStatusRevisado(identificador){ //cambiar status de revision   
      var bandera;
      if ( $("#rev_check_revisado_"+identificador).is(':checked') ) {
        bandera = 1;
      }else{
        bandera = 0;
      };
      console.log(bandera);
      var compensacion = $.trim($("#sup_bandera_url").text() );  
          base_url = compensacion+'PatController/revision_check_revizado';
          $.ajax({
            url: base_url,                    
            type: "post",
            dataType: 'json',
            data: {estatus_revisado : bandera, id_rev : identificador},
            beforeSend:function(){
              //console.log("");
            },
            success:function(data){                      
                //*
                console.log(data);         
                if (data) {   //console.log(data)
                  if (data.estatus_revisado == 1) {
                     $("#rev_check_revisado_"+$.trim(data.id_rev)).prop('checked', true);
                  }else{
                     $("#rev_check_revisado_"+$.trim(data.id_rev)).prop('checked', false);
                  };                
                }else{ //some error
                  alert('Error en la pagina, recargue de nuevo');
                };
                //*
            }
        });   
          //fin
      }

      function ChangeStatusValidado(identificador){ //cambiar status de revision   
      var bandera;
      if ( $("#rev_check_validado_"+identificador).is(':checked') ) {
        bandera = 1;
      }else{
        bandera = 0;
      };
      console.log(bandera);
      var compensacion = $.trim($("#sup_bandera_url").text() );  
          base_url = compensacion+'PatController/revision_check_validado';
          $.ajax({
            url: base_url,                    
            type: "post",
            dataType: 'json',
            data: {estatus_validado : bandera, id_rev : identificador},
            beforeSend:function(){},
            success:function(data){                      
                //*
                console.log(data);         
                if (data) {   //console.log(data)
                  if (data.estatus_validado == 1) {
                     $("#rev_check_validado_"+$.trim(data.id_rev)).prop('checked', true);
                  }else{
                     $("#rev_check_validado_"+$.trim(data.id_rev)).prop('checked', false);
                  };                
                }else{ //some error
                  alert('Error en la pagina, recargue de nuevo');
                };
                //*
            }
        });   
          //fin
      }

// Initialize when page loads
jQuery(function(){ BaseFormValidation.init(); });














