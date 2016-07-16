/*
 * VALIDACIONES PARA USUARIOS CATALOGOS
 * Init Bootstrap Forms Validation, for more examples you can check out https://github.com/jzaefferer/jquery-validation   
 */
 var BaseFormValidation = function() {

var initValidationCatAreas = function(){
        jQuery('#form_cat').validate({
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
                'proceso': { required: true },
                //'orden' : {required: true, digits : true },
                'descripcion' : { required: true },
            },messages: {},
            submitHandler: function(form){  
              var id_cat_form = $("#id_cat_form").val();  
              if ($.trim(id_cat_form) == "") {
                $("#modal_confirmar_add_cat").modal('show');
              }else{
                addcatalogo_confirm();
              };
                             
            }
        });
    };   

    return {
        init: function () {
            initValidationCatAreas();    
            
            jQuery('.js-select2').on('change', function(){
                jQuery(this).valid();
            });
            //Resetear formulario
            jQuery.fn.reset = function () {
              $(this).each (function() { this.reset(); });
            }
            var trs = $("#table_cat tbody tr").length;
            $("#label_find_cat").text(trs);
            $(".btn-open-form").click(function(){
              //console.log( $(this) );

            })
            
        }
    };
}();

  

  //ADD USUARIOS
  function addcatalogo_confirm(){
    form = $("#form_cat");
    base_url = 'CatalogoController/add_m50_4_catalogo';
    $.ajax({
      url: base_url,                    
      type: "post",
      dataType: 'json',
      data: $(form).serialize(),
      beforeSend:function(){
          $( "#btn_add_cat" ).prop( "disabled", true );
          $( "#btn_add_cat_canc" ).prop( "disabled", true );
          if ($( "#load_datos" ).hasClass( "hidden" )) {
              $( "#load_datos" ).removeClass( "hidden" );
            }; 
      },
      success:function(data){                                     
          if (data) {
            $( "#btn_add_cat" ).prop( "disabled", false );
            $( "#btn_add_cat_canc" ).prop( "disabled", false );
              if (!$( "#load_datos" ).hasClass( "hidden" )) { //quitar el load
                $( "#load_datos" ).addClass( "hidden" );
              }; 
              $("#id_cat_form").val(''); //limpiando variable de update                 
              if (typeof(data.estatus_error) === 'undefined' ) { //agregado  
                if (typeof(data.id_catalogo_update) === 'undefined') {
                  addCatalogo(data); //nueva catalogo
                }else{
                  editCatalogo(data); //update catalogo
                }                               
                form.reset(); //reseteo de form
               }else{ //errores de validacion
                if (typeof(data.id_esc_update) === 'undefined') {
                  alert(data.error);
                }else{
                  form.reset();
                };                               
                 //console.log(data);
               };
          }else{ //some error
            alert('Error interno, contacte al administrador de la pagina');
            //console.log('Error de datos');
          };
          
      }
  });    
  }

  function addCatalogo(data){ 
      var trs =$("#table_cat tr").length;
      $("#label_find_cat").text(trs);
      var nuevaFila='<tr id="id_cat_'+data.id+'">';
      nuevaFila+='<td class="text-center index">'+(trs)+' </td>';
      nuevaFila+='<td>'+data.des+'</td>';
      //nuevaFila+='<td>'+data.orden+'</td>';
      nuevaFila+='<td>'+data.deslarga+'</td>';
      var fecha = data.date_created.substring(0, 10);
      nuevaFila+='<td class="text-center">'+fecha+'</td>';     
      nuevaFila+='<td class="text-center" > <div class="btn-group">';
      nuevaFila+= '<span class="btn draggable-handler text-gray" style="padding:0; padding-right:0.5em">';
      nuevaFila+= '<i class="si si-cursor-move"></i></span>';
      nuevaFila+= '<span class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" onclick="editCatalogoform('+data.id+')" title="Editar" >';
      nuevaFila+= '<i class="fa fa-pencil"></i></span>';
      nuevaFila+= '<button class="btn btn-danger btn-xs" type="button"  onclick="delCatalogopar('+data.id+')" data-toggle="tooltip" data-placement="top" title="Eliminar">';
      nuevaFila+= '<i class="fa fa-times"></i>';
      nuevaFila+= '</button>';
      nuevaFila+= '</div></td>';
              
      nuevaFila+="</tr>";
      $("#table_cat").append(nuevaFila);
    }

    function editCatalogo(data){
      var row = $("#id_cat_"+$.trim(data.id) );
      $(row).find("td:eq(1)").text(data.des); 
      //$(row).find("td:eq(2)").text(data.orden);
      $(row).find("td:eq(2)").text(data.deslarga);    
      var fecha = data.date_created.substring(0, 10);   
      $(row).find("td:eq(3)").text(fecha);       
    }
   //EDIT USER
   function editCatalogoform(id_cat){
      var row = $("#id_cat_"+$.trim(id_cat) );
      $("#id_cat_form").val(id_cat);

      var proceso = $(row).find("td:eq(1)").text() ;
      //var orden = $(row).find("td:eq(2)").text();
      var descripcion = $(row).find("td:eq(2)").text();
      $("#proceso").val(proceso);
      //$("#orden").val(orden);
      $("#descripcion").val(descripcion);
      //abrir form para editar
      var hasclass = $( ".btn-open-form > i" ).hasClass('si-arrow-down');
      if (hasclass == true) {
        $( ".btn-open-form" ).trigger( "click" ); 
      };
    }

    //DELETE CATALAGO
    function delCatalogopar(id_cat){ //modal delete catalogo
      $('#btn_del_all').attr('onClick', 'delCatalogo('+id_cat+');');
      $('#modal_del_all').modal('show');
    }
    function delCatalogo(id_cat){ //Eliminar catalogo  
      base_url = 'CatalogoController/delete_m50_4_catalogo/'+id_cat; 
      $.ajax({
        url: base_url,                    
        type: "post",
        dataType: 'json',
        data: {data : 'delete'},
        beforeSend:function(){
          $('#modal_del_all').modal('hide');
          $("#id_cat_"+$.trim(id_cat) ).hide();
        },
        success:function(data){                        
            //*
            if (data) {    
                 if (typeof(parseInt(data) ) === "number") {
                  var row = $("#id_cat_"+$.trim(data) );
                  row.remove();
                  var trs = $("#table_cat tbody tr").length;
                  $("#label_find_cat").text(trs);
                  //$('#modal_del_all').modal('hide');
                  reset_table_index();
                 }else{
                  alert('Error interno');
                 };
            }else{ //some error
              alert('Error de datos');
              //console.log('Error de datos');
            };
            //*
        }
    });  
    }

      function reset_table_index(){
        $('td.index', $("#table_cat tbody") ).each(function (i) {
            $(this).html(i + 1);          
        });
      } 
        //DROP

        var lastScrollPosition = 0; //variables defined in upper scope
        var tempScrollPosition = 0;

        window.onscroll = function () { // Up to you requirement you may change it to another elemnet e.g $("#YourPanel").onscroll
            clearTimeout($.data(this, 'scrollTimer'));
            $.data(this, 'scrollTimer', setTimeout(function () {
                tempScrollPosition = lastScrollPosition; // Scrolls don't change from position a to b. They cover some numbers between a and b during the change to create a smooth sliding visual. That's why we pick the previous scroll position with a timer of 250ms.
            }, 250));

            lastScrollPosition = $(document).scrollTop(); // Up to you requirement you may change it to another elemnet e.g $("#YourPanel").onscroll
        }; 
        var fixHelperModified = function(e, tr) {
        var $originals = tr.children();
        var $helper = tr.clone();
        $helper.children().each(function(index) {
            $(this).width($originals.eq(index).width()+20);
            //$(this).top($originals.eq(index).top());
            //console.log( $(this) );
            //$(this).css({"background-color":"yellow","height":"35px;","overflow":"hidden;"});
            $(this).addClass('hidden');
        });
           return $helper;
        },updateIndex = function(e, ui) {
            $('td.index', ui.item.parent() ).each(function (i) {
                $(this).html(i + 1);       //sacar index y id de row 
                var id_cat = $.trim($(this).parent().attr('id').replace("id_cat_", "") );
                var pos = i +1;            //console.log( id_cat + " : " + pos );
                sortable_mysql(id_cat, pos);
            });
        };
        //http://jsfiddle.net/pmw57/tzYbU/205/
        $("#table_cat tbody").sortable({
          //connectWith: '.draggable-column',
          helper: fixHelperModified,
          stop: updateIndex,
          opacity: .75,
          handle: '.draggable-handler',
          tolerance: 'pointer',
          //placeholder: 'draggable-placeholder',
          placeholder: {
              element: function(currentItem) {
                var content = $(currentItem).html();                
                return $("<tr>"+content+" </tr>")[0];
                //return $("<tr><td>Soltar</td> <td></td> <td></td> <td></td> <td></td> <td></td> </tr>")[0];
              },
              update: function(container, p) {
                  return;
              }
          },
          /*start: function(e, ui){
              //ui.item.startPos = ui.item.index(),
              ui.placeholder.css({
                  'height': ui.item.outerHeight(),
                  //'height': ui.item.height(),
                  //'margin-bottom': ui.item.css('margin-bottom'),
                  //'overflow' : 'hidden'
              });
          } */
        }).disableSelection();

        jQuery('.draggable-column').sortable({
            connectWith: '.draggable-column',
            items: '.draggable-item',
            dropOnEmpty: true,
            opacity: .75,
            handle: '.draggable-handler',
            placeholder: 'draggable-placeholder',
            tolerance: 'pointer',
            start: function(e, ui){
                ui.placeholder.css({
                    'height': ui.item.outerHeight(),
                    'margin-bottom': ui.item.css('margin-bottom')
                });
            }
        }).disableSelection;

      function sortable_mysql(id_cat, pos){
          base_url = 'CatalogoController/sortable_mysql';
          $.ajax({
            url: base_url,                    
            type: "post",
            dataType: 'json',
            data: { 'id_cat':id_cat, 'pos': pos   },
            beforeSend:function(){},
            success:function(data){                                     
                if (data) {
                  //console.log(data);
                }else{ //some error
                  alert('Error interno, contacte al administrador de la pagina');            
                };          
            }
        });    
      }

// Initialize when page loads
jQuery(function(){ BaseFormValidation.init(); });