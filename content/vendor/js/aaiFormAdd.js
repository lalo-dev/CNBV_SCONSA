/*
 * VALIDACIONES PARA NORMATIVA AAI
 * Init Bootstrap Forms Validation, for more examples you can check out https://github.com/jzaefferer/jquery-validation
 */
var BaseFormValidation = function() {
    //validacion de agregar AAI
    var initValidationGeneral = function(){
        jQuery('#aaiFormAdd').validate({
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
                'aai_nombre'    : {required: true },
                'file1'         : {required: true },
            },messages: {},
            submitHandler: function(form){
                if ($("#id_aai_form").val() == "") {
                    $("#modal_confirmar_add_aai").modal('show');
                }else{
                    aaiFormAdd_confirm();
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
            var trs =$("#table_aai tbody tr").length;
            $("#label_find_aai").text(trs);
        }
    };
}();
//ADD AAI
function aaiFormAdd_confirm(){

    var base_url = 'AaiController/aai_form_add';
    var form = $("#aaiFormAdd");
    $.ajax({
        url: base_url,
        type: "post",
        dataType: 'json',
        data: $(form).serialize(),
        beforeSend:function(){
            $("#modal_confirmar_add_aai").modal('hide');
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
                    if (typeof(data.id_aai_update) === 'undefined') {
                        addAai(data); //nueva blog
                    }else{
                        editAai(data); //update blog
                    }
                    $("#id_aai_form").val(data.id_aai);

                    addAai_confirm_files();
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

var addAai = function(data){
    //console.log("entro a funcion");
    //*temporales
    aai_tipo = $("#aai_tipo option[value='"+data.aai_tipo+"']").text();
    //console.log(blog_tipo);
    var trs =$("#table_aai tr").length;
    $("#label_find_blog").text(trs);
    var nuevaFila='<tr id="id_aai_'+data.id_aai+'">';
    nuevaFila+='<td class="text-center">'+(trs)+' </td>';
    nuevaFila+='<td class="text-left">'+(data.aai_nombre)+'</td>';
    nuevaFila+='<td class="text-left">'+(data.aai_des)+'</td>';
    //Tipo
    nuevaFila+='<td class="text-center">'+(aai_tipo)+'</td>';
    //Archivo
    nuevaFila+='<td>&nbsp;</td>';
    //Acciones
    nuevaFila+='<td class="text-center" > <div class="btn-group">';
    nuevaFila+= '<button class="btn btn-primary btn-xs" onclick="editAaiForm('+data.id_blog+')" data-toggle="tooltip" data-placement="top" title="Editar" >';
    nuevaFila+= '<i class="fa fa-pencil"></i>';
    nuevaFila+= '</button>';
    nuevaFila+= '<button class="btn btn-danger btn-xs" onclick="delLogpar('+data.id_blog+')" data-toggle="tooltip" data-placement="top" title="Eliminar">';
    nuevaFila+= '<i class="fa fa-times"></i>';
    nuevaFila+= '</button>';
    nuevaFila+= '</div></td>';
    nuevaFila+="</tr>";
    $("#table_aai").append(nuevaFila);
}

var editAai = function(data){
    var row = $("#id_aai_"+$.trim(data.id_blog) );
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

// Initialize when page loads
jQuery(function(){ BaseFormValidation.init(); });
