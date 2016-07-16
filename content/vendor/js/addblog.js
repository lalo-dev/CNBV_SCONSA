/*
 * VALIDACIONES PARA USUARIOS GENERALES
 * Init Bootstrap Forms Validation, for more examples you can check out https://github.com/jzaefferer/jquery-validation   
 */
var BaseFormValidation = function() {
      //validacion de agregar blog
        var initValidationGeneral = function(){
        jQuery('#addblog').validate({
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
                'blog_titulo' : {required: true },
                //'blog_des' : {required: true },
                'blog_tipo' : { required: true },
                'link1' : {url : true},
                'link2' : {url : true},
                'link3' : {url : true},
                'link4' : {url : true},
            },messages: {},
            submitHandler: function(form){                
                if ($("#id_blog_form").val() == "") {
                  $("#modal_confirmar_add_blog").modal('show');
                }else{
                  addblog_confirm();
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
            //Resetear formulario
            jQuery.fn.reset = function () {
              $(this).each (function() { this.reset(); });
            }
            var trs =$("#table_blog tbody tr").length;
            $("#label_find_blog").text(trs);
            $("#btn_datos_cancelar").click(function(){
              CKEDITOR.instances['blog_des'].setData('');
            })
        }
    };
}();
  //ADD USUARIOS
  function addblog_confirm(){
    var cont_ckedit = CKEDITOR.instances['blog_des'].getData();
    $("#blog_des").html(cont_ckedit);
    if ($.trim(cont_ckedit) == "") {
      alert("Error, Descripcion vacio");
      return false;
    };
      var base_url = 'BlogController/adm_Blog_add';
      var form = $("#addblog");
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
        },success:function(data){
          $( "#btn_datos_gen" ).prop( "disabled", false );
          $( "#btn_datos_cancelar" ).prop( "disabled", false );
          if (!$( "#load_datos_gen" ).hasClass( "hidden" )) { //quitar el load
              $( "#load_datos_gen" ).addClass( "hidden" );
           };
          if (data) {              
               if (typeof(data.estatus_error) === 'undefined') { //agregado                
                //addblog(data); // add blog a tabla
                if (typeof(data.id_blog_update) === 'undefined') {
                  addblog(data); //nueva blog
                }else{
                  editBlog(data); //update blog
                }
                $("#id_blog_form").val(data.id_blog);                

                addblog_confirm_files();
                form.reset();

                CKEDITOR.instances['blog_des'].setData('');
               }else{ //errores de validacion                
                 alert(data.error);
               };
          }else{ //some error
            alert('Error interno, recargue la pagina');
          };
        }
    });
  }

   var addblog = function(data){ //http://www.lawebdelprogramador.com/codigo/JQuery/2279-Anadir-y-eliminar-filas-de-una-tabla-con-jquery.html
      //console.log("entro a funcion");
      //*temporales
      blog_tipo = $("#blog_tipo option[value='"+data.blog_tipo+"']").text();
      //console.log(blog_tipo);
      var trs =$("#table_blog tr").length;
      $("#label_find_blog").text(trs);
      var nuevaFila='<tr id="id_blog_'+data.id_blog+'">';
      //nuevaFila+= '<td class="text-center hidden">'+(data.id_area)+' </td>';
      nuevaFila+='<td>'+(trs)+' </td>';
      nuevaFila+='<td>'+(blog_tipo)+'</td>';
      nuevaFila+='<td class="text-left">'+(data.blog_titulo)+'</td>';
      nuevaFila+='<td class="text-left">'+(data.blog_des)+'</td>';
      nuevaFila+='<td style="width: 200px;">';
      nuevaFila+='<p><a target="_blank" href="'+data.link1+'">'+ $.trim(data.link1)+'</a></p>'
      nuevaFila+='<p><a target="_blank" href="'+data.link2+'">'+ $.trim(data.link2)+'</a></p>'
      nuevaFila+='<p><a target="_blank" href="'+data.link3+'">'+ $.trim(data.link3)+'</a></p>'
      nuevaFila+='<p><a target="_blank" href="'+data.link4+'">'+ $.trim(data.link4)+'</a></p>'
      nuevaFila+='</td>';
       // solo una imagen ejemplo
      nuevaFila+='<td class="imgs" style="width: 100px;" id="id_blog_imgs_'+data.id_blog+'">';
      nuevaFila+='<div class="row js-gallery"> ';

      nuevaFila+='<div class="col-xs-12">';
      nuevaFila+='<div class="blog_img_1"></div>';
      nuevaFila+= '</div>'; ;

      nuevaFila+='<div class="col-xs-12">';
      nuevaFila+='<div class="blog_img_2"></div>';
      nuevaFila+= '</div>'; 

      nuevaFila+='<div class="col-xs-12">';
      nuevaFila+='<div class="blog_img_3"></div>';
      nuevaFila+= '</div>'; 

      nuevaFila+='<div class="col-xs-12">';
      nuevaFila+='<div class="blog_img_4"></div>';
      nuevaFila+= '</div>'; 

      //nuevaFila+= '</div>'; 
      nuevaFila+= '</div>'; 
      nuevaFila+='</td>';

      nuevaFila+='<td class="text-center" > <div class="btn-group">';
      nuevaFila+= '<span class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" onclick="editblogForm('+data.id_blog+')" title="Editar" >';
      nuevaFila+= '<i class="fa fa-pencil"></i>';
      nuevaFila+= '</span>';
      nuevaFila+= '<button class="btn btn-danger btn-xs" type="button"  onclick="delLogpar('+data.id_blog+')" data-toggle="tooltip" data-placement="top" title="Eliminar">';
      nuevaFila+= '<i class="fa fa-times"></i>';
      nuevaFila+= '</button>';
      nuevaFila+= '</div></td>';              
      nuevaFila+="</tr>";
      $("#table_blog").append(nuevaFila);
    }

    var editBlog = function(data){
      var row = $("#id_blog_"+$.trim(data.id_blog) );
      blog_tipo = $("#blog_tipo option[value='"+data.blog_tipo+"']").text();

      $(row).find("td:eq(1)").text(blog_tipo); 
      $(row).find("td:eq(2)").text(data.blog_titulo); 
      //$(row).find("td:eq(3)").text(data.blog_des);
      $(row).find("td:eq(3)").html(data.blog_des);
      
      $(row).find("td:eq(4) p:nth-child(1)").text(data.link1); 
      $(row).find("td:eq(4) p:nth-child(2)").text(data.link2); 
      $(row).find("td:eq(4) p:nth-child(3)").text(data.link3); 
      $(row).find("td:eq(4) p:nth-child(4)").text(data.link4);  
    }

    function editAreaformval(data, select){
      return $(select+' option').filter(function(){return $(this).html() == data; }).val();
    }
    function editblogForm(id_blog){
      var row = $("#id_blog_"+$.trim(id_blog) ); //tabla
      var blog_titulo = $(row).find("td:eq(2)").text();
      var blog_des = $(row).find("td:eq(3)").html();
      var blog_tipo = editAreaformval( $.trim( $(row).find("td:eq(1)").text() ), '#blog_tipo' );

      var link1 = $(row).find("td:eq(4) p:nth-child(1)").text();
      var link2 = $(row).find("td:eq(4) p:nth-child(2)").text();
      var link3 = $(row).find("td:eq(4) p:nth-child(3)").text();
      var link4 = $(row).find("td:eq(4) p:nth-child(4)").text();

      $("#id_blog_form").val(id_blog);
      $("#blog_titulo").val(blog_titulo);
      //$("#blog_des").val(blog_des);
      CKEDITOR.instances['blog_des'].setData(blog_des)
      $("#blog_tipo").val(blog_tipo);
      $("#link1").val(link1);
      $("#link2").val(link2);
      $("#link3").val(link3);
      $("#link4").val(link4);

      var img1 = $("#id_blog_imgs_"+ $.trim(id_blog) + " .blog_img_1 a").prop("href");
      var img2 = $("#id_blog_imgs_"+ $.trim(id_blog) + " .blog_img_2 a").prop("href");
      var img3 = $("#id_blog_imgs_"+ $.trim(id_blog) + " .blog_img_3 a").prop("href");
      var img4 = $("#id_blog_imgs_"+ $.trim(id_blog) + " .blog_img_4 a").prop("href");

      if (typeof(img1) != 'undefined') {
        $("#img1_vista_form").prop("src", img1);
      };
      if (typeof(img2) != 'undefined') {
        $("#img2_vista_form").prop("src", img2);
      };
      if (typeof(img3) != 'undefined') {
        $("#img3_vista_form").prop("src", img3);
      };
      if (typeof(img4) != 'undefined') {
        $("#img4_vista_form").prop("src", img4);
      };
      var hasclass = $( ".btn-open-form > i" ).hasClass('si-arrow-down');
      if (hasclass == true) {
        $( ".btn-open-form" ).trigger( "click" ); 
      };
    }
    
    function delLogpar(id_blog){ //modal delete escolaridad
      $('#btn_del_all').attr('onClick', 'delLog('+id_blog+');');
      $('#modal_del_all').modal('show');
    }
    function delLog(id_blog){ //Eliminar escolaridad
    // id table #table_esc; id contador #label_find_esc      
      base_url = 'BlogController/delete_Log/'+id_blog;
      $.ajax({
        url: base_url,                    
        type: "post",
        dataType: 'json',
        data: {data : 'delete'},
        beforeSend:function(){
          //console.log("eiminado");
          $('#modal_del_all').modal('hide');
          $("#id_blog_"+$.trim(id_blog) ).hide();
        },
        success:function(data){                        
            //*
            if (data) {    
                 if (typeof(parseInt(data) ) === "number") {
                  $("#id_blog_"+$.trim(data) ).remove();              
                  var trs = $("#table_esc tbody tr").length;
                  $("#label_find_esc").text(trs);
                  $('#modal_del_all').modal('hide');
                 }else{
                  alert('Error de datos');
                 };
            }else{ //some error
              alert('Error Interno');
              //console.log('Error de datos');
            };
            //*
        }
    });  
    }

  function addblog_confirm_files(){     
    var compensacion = $.trim($("#sup_bandera_url").text() );
      img_vista_form = compensacion + "content/blogs/blank.png"; //reset img vista
      $(".img_vista_form").prop("src", img_vista_form);
      var id_blog = $("#id_blog_form").val();
      //console.log("inicio carga de imagenes " + id_blog);
      if (id_blog == "") {
        return false;
      }; 

      var base_url = compensacion+'BlogController/adm_blog_Form_files/'+id_blog;
      var data = new FormData();
      var cont = 0;
      jQuery.each(jQuery('#img1')[0].files, function(i, file) {
          data.append('img1', file); cont = 1;          
      });      
      jQuery.each(jQuery('#img2')[0].files, function(i, file) {
          data.append('img2', file); cont = 1;
      }); 
      jQuery.each(jQuery('#img3')[0].files, function(i, file) {
          data.append('img3', file); cont = 1;
      }); 
      jQuery.each(jQuery('#img4')[0].files, function(i, file) {
          data.append('img4', file); cont = 1;
      }); 
      if (cont == 0) {
        //console.log("sin archivos");
        return false;
        
      };
      //console.log(data );
      $(".file_clear").val('');
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
              //console.log(data.img1.Error);
               if (typeof(data.img1) != 'undefined') {//agregado    
                 if (typeof(data.img1.Error) != 'undefined') {
                   result += '<div class="col-md-12 text-left ">*'+data.img1.Error+'</div>';
                 };  
               }
               if (typeof(data.img2) != 'undefined') {//agregado 
                  if (typeof(data.img2.Error) != 'undefined') {
                    result += '<div class="col-md-12 text-left ">*'+data.img2.Error+'</div>';
                  };      
               }
               if (typeof(data.img3) != 'undefined') {//agregado                                               
                if (typeof(data.img3.Error) != 'undefined') {
                  result += '<div class="col-md-12 text-left ">*'+data.img3.Error+'</div>';
                }                
               }
               if (typeof(data.img4) != 'undefined') {//agregado    
                if (typeof(data.img4.Error) != 'undefined') {                                           
                  result += '<div class="col-md-12 text-left ">*'+data.img4.Error+'</div>';
                }
               }
               if (result != "") {
                $("#show_message_error_file").html(result);
                $("#modal_message_error_file").modal('show');
               };
               //ACCIONES EN EL GUARDADO DE ARCHIVOS
               if (typeof(data.img1) != 'undefined') {//agregado    
                 if (typeof(data.img1.img1_url) != 'undefined') {
                   nuevaFila='<a class="img-link" href="'+data.img1.base_url+ data.img1.img1_url+'">';
                   nuevaFila+='<img class="img-responsive" src="'+data.img1.base_url+ data.img1.img1_url+'" alt="">'
                   nuevaFila+=' </a>' 
                   //console.log(nuevaFila);
                   $("#id_blog_imgs_"+ $.trim(data.img1.id_blog) + " .blog_img_1").html(nuevaFila);
             
                   //$("#btn_curr").prop( "href", data.img1.base_url+"get_down_file/" + id_blog +"/curr"  );
                 };  
               }
               if (typeof(data.img2) != 'undefined') {//agregado 
                  if (typeof(data.img2.img2_url) != 'undefined') {
                    nuevaFila='<a class="img-link" href="'+data.img2.base_url+ data.img2.img2_url+'">';
                    nuevaFila+='<img class="img-responsive" src="'+data.img2.base_url+ data.img2.img2_url+'" alt="">'
                    nuevaFila+=' </a>' 
                    //console.log(nuevaFila);
                    $("#id_blog_imgs_"+ $.trim(data.img2.id_blog) + " .blog_img_2").html(nuevaFila);
                    
                  };      
               }
               if (typeof(data.img3) != 'undefined') {//agregado                                               
                if (typeof(data.img3.img3_url) != 'undefined') {
                  nuevaFila='<a class="img-link" href="'+data.img3.base_url+ data.img3.img3_url+'">';
                  nuevaFila+='<img class="img-responsive" src="'+data.img3.base_url+ data.img3.img3_url+'" alt="">'
                  nuevaFila+=' </a>' 
                  //console.log(nuevaFila);
                  $("#id_blog_imgs_"+ $.trim(data.img3.id_blog) + " .blog_img_3").html(nuevaFila);
                 }                
               }
               if (typeof(data.img4) != 'undefined') {//agregado    
                if (typeof(data.img4.img4_url) != 'undefined') {    
                  nuevaFila='<a class="img-link" href="'+data.img4.base_url+ data.img4.img4_url+'">';
                  nuevaFila+='<img class="img-responsive" src="'+data.img4.base_url+ data.img4.img4_url+'" alt="">'
                  nuevaFila+=' </a>' 
                  //console.log(nuevaFila);
                  $("#id_blog_imgs_"+ $.trim(data.img4.id_blog) + " .blog_img_4").html(nuevaFila);    
                }
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












