/*
 * VALIDACIONES PARA USUARIOS GENERALES
 * Init Bootstrap Forms Validation, for more examples you can check out https://github.com/jzaefferer/jquery-validation   
 */
var BaseFormValidation = function() {
      //validacion de agregar blog
        var initValidationGeneral = function(){
        jQuery('#add_pre_ejecutiva').validate({
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
                'pre_eje_name' : {required: true },                
                'pre_eje_des' : { required: true },
                'pre_eje_file_type' : { required: true }
            },messages: {},
            submitHandler: function(form){                
                if ($("#id_pres_form").val() == "") {
                  $("#modal_confirmar_add_pres").modal('show');
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
            var trs =$("#table_pres tbody tr").length;
            $("#label_find_pres").text(trs);
            $("#btn_datos_cancelar").click(function(){
              //CKEDITOR.instances['blog_des'].setData('');
            })
        }
    };
}();
  //ADD USUARIOS
  function addpresentacion_confirm(){   
      var base_url = 'PatController/adm_pres_add';
      var form = $("#add_pre_ejecutiva");
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
                $("#id_pres_form").val(data.id_pre_eje);
                addpresentacion_confirm_files();
                form.reset();
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

   var addPres = function(data){ //http://www.lawebdelprogramador.com/codigo/JQuery/2279-Anadir-y-eliminar-filas-de-una-tabla-con-jquery.html
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
/*
      if (typeof(img1) != 'undefined') {
        $("#img1_vista_form").prop("src", img1);
      };
*/
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

  function addpresentacion_confirm_files(){     
      var compensacion = $.trim($("#sup_bandera_url").text() );
      //img_vista_form = compensacion + "content/blogs/blank.png"; //reset img vista
      //$(".img_vista_form").prop("src", img_vista_form);
      var id_pres = $("#id_pres_form").val();
      if (id_pres == "") { return false;   }; 

      var base_url = compensacion+'PatController/adm_pres_Form_files/'+id_pres;
      //var base_url = '../PatController/adm_pres_Form_files/'+id_pres;
      var data = new FormData();
      var cont = 0;
      jQuery.each(jQuery('#file1')[0].files, function(i, file) {
          data.append('img1', file); cont = 1;          
      }); 
      if (cont == 0) { //console.log("sin archivos");
        return false;        
      };
      $("#file1").val(''); //limpiando file
      $.ajax({
        url: base_url,        
        type: "post",
        contentType: 'multipart/form-data',
        cache: false,
        contentType: false,
        processData: false,
        dataType: 'json',
        data:  data,
        beforeSend:function(){
          if ($("#label_load_file").hasClass('hidden')) {
            $("#label_load_file").removeClass('hidden')
          };
          //console.log("enviado");
        },
        success:function(data){
             if (!$("#label_load_file").hasClass('hidden')) {
              $("#label_load_file").addClass('hidden')
            };
            //console.log(data);
            if (data) {
              var result = ""
               if (typeof(data.img1) != 'undefined') {//agregado    
                 if (typeof(data.img1.Error) != 'undefined') {
                   result += '<div class="col-md-12 text-left ">*'+data.img1.Error+'</div>';
                 };  
               }               
               if (result != "") {
                $("#show_message_error_file").html(result);
                $("#modal_message_error_file").modal('show');
               };
               //ACCIONES EN EL GUARDADO DE ARCHIVOS
               if (typeof(data.img1) != 'undefined') {//agregado    
                 if (typeof(data.img1.pre_eje_file_name) != 'undefined') {
                   /*nuevaFila='<a class="img-link" href="'+data.img1.base_url+ data.img1.pre_eje_file_url+'">';
                   nuevaFila+='<img class="img-responsive" src="'+data.img1.base_url+ data.img1.pre_eje_file_url+'" alt="">'
                   nuevaFila+=' </a>';  //console.log(nuevaFila);
                   $("#id_blog_imgs_"+ $.trim(data.img1.id_blog) + " .blog_img_1").html(nuevaFila);    */          
                   //$("#btn_curr").prop( "href", data.img1.base_url+"get_down_file/" + id_blog +"/curr"  );
                  var row = $("#id_pres_"+$.trim(data.img1.id_pre_eje) );
                  $(row).find("td:eq(4)").text(data.img1.pre_eje_file_name);                    
                    //console.log(row);
                    //console.log(data.img1.pre_eje_file_url);
                 };  
               }
            }else{ //some error
              alert('Error interno al agregar archivos, recargue la pagina');
            };
        },error: function(jqXHR, textStatus, errorThrown){// Handle errors here
          if (!$("#label_load_file").hasClass('hidden')) {
            $("#label_load_file").addClass('hidden')
          };
            //console.log('ERRORS: ' + textStatus);
            // STOP LOADING SPINNER
        }
    });
  }
// Initialize when page loads
jQuery(function(){ BaseFormValidation.init(); });














