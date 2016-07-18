/*
 * VALIDACIONES PARA USUARIOS CATALOGOS
 * Init Bootstrap Forms Validation, for more examples you can check out https://github.com/jzaefferer/jquery-validation   
 */
 var BaseFormValidation = function() {

var initValidationCatAreas = function(){
        jQuery('#form_map').validate({
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
                'descripcion': { required: true },
                'impacto': { 
                  required: true,
                  range: [1, 10]
                },
                'probabilidad': { 
                  required: true,
                  range: [1, 10],
                  f_cuadrante : true
                },
                'cuadrante': { required: true },
                'riesgo_ponderado' : { required: true },
            },messages: {},
            submitHandler: function(form){  
              var id_map_form = $("#id_map_form").val();  
              if ($.trim(id_map_form) == "") {
                $("#modal_confirmar_add_map").modal('show');
              }else{
                addmap_confirm();
              };
                             
            }
        });
    };   

    return {
        init: function () {
          jQuery.validator.addMethod('f_cuadrante', function (value, element, param) {
            //CALCULO CUADRANTE
            var impacto = parseInt($("#impacto").val() );
            var probabilidad = parseInt($("#probabilidad").val());
            var cuadrante = 0
            if (typeof(impacto) === "number" && typeof(probabilidad) === "number") {
              if (probabilidad > 5 && impacto > 5) { //Cuadrante 1
                cuadrante = 'I';
              }else if(probabilidad > 5 && impacto <= 5){//Cuadrante 2
                cuadrante = 'II';
              }else if(probabilidad <=5 && impacto <=5){//Cuadrante 3
                cuadrante = 'II';
              }else if(probabilidad <= 5 && impacto > 5){ //Cuadrante 4
                cuadrante = 'IV';
              }else{
                return false;
              };
              $("#cuadrante").val(cuadrante);
              //CALCULO RIESGO PONDERADO
              //(Impacto(.6)) + (probabilidad(.4)) = riesgo ponderado
              //(2*.6) + (5.3*.4) = 1.2 + 2.12 = 3.32
              var impacto = parseFloat($("#impacto").val() );
              var probabilidad = parseFloat($("#probabilidad").val());
              var get_impacto = parseFloat( $("#getRiesgo_impacto").text() );
              var get_probabilidad = parseFloat( $("#getRiesgo_probabilidad").text() );
              //console.log( $("#getRiesgo_impacto").val() + get_impacto + " " + get_probabilidad);
              var get_result = parseFloat( (impacto * get_impacto) + (probabilidad * get_probabilidad) ).toFixed(2);

              $("#riesgo_ponderado").val(get_result);              
            }else{
              return false;
            };
            return true;

          }, 'Error al calcular Cuadrante y Riesgo ponderado!');
            initValidationCatAreas();    
            
            jQuery('.js-select2').on('change', function(){
                jQuery(this).valid();
            });
            //Resetear formulario
            jQuery.fn.reset = function () {
              $(this).each (function() { this.reset(); });
            }
            var trs = $("#table_map tbody tr").length;
            $("#label_find_cat").text(trs);
            $(".btn-open-form").click(function(){
              //console.log( $(this) );
            })
            
        }
    };
}();

  //ADD USUARIOS
  function addmap_confirm(){
    form = $("#form_map");
    //base_url = 'PatController/add_m50_4_catalogo';
    var compensacion = $.trim($("#sup_bandera_url").text() );
    console.log(compensacion);
    base_url = compensacion+'PatController/m1_4_mapa_riesgos_form_add';
    $.ajax({
      url: base_url,                    
      type: "post",
      dataType: 'json',
      data: $(form).serialize(),
      beforeSend:function(){
          $( "#btn_add_map" ).prop( "disabled", true );
          $( "#btn_add_map_canc" ).prop( "disabled", true );
          if ($( "#load_datos" ).hasClass( "hidden" )) {
              $( "#load_datos" ).removeClass( "hidden" );
            }; 
      },
      success:function(data){  
      //console.log(data);                                   
          if (data) {
            $( "#btn_add_map" ).prop( "disabled", false );
            $( "#btn_add_map_canc" ).prop( "disabled", false );
              if (!$( "#load_datos" ).hasClass( "hidden" )) { //quitar el load
                $( "#load_datos" ).addClass( "hidden" );
              }; 
              $("#id_map_form").val(''); //limpiando variable de update                 
              if (typeof(data.estatus_error) === 'undefined' ) { //agregado  
                if (typeof(data.id_riesgo_update) === 'undefined') {
                  addRiesgo(data); //nueva catalogo
                }else{
                  editRiesgo(data); //update catalogo
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

  function addRiesgo(data){ 
      var trs =$("#table_map tr").length;
      $("#label_find_cat").text(trs);
      var nuevaFila='<tr id="id_map_'+data.id_riesgo+'">';
      nuevaFila+='<td class="index">'+(trs)+' </td>';
      nuevaFila+='<td class="text-left">'+data.descripcion+'</td>';
      nuevaFila+='<td class="text-center">'+data.impacto+'</td>';
      nuevaFila+='<td class="text-center">'+data.probabilidad+'</td>';
      nuevaFila+='<td class="text-center">'+data.cuadrante+'</td>';
      nuevaFila+='<td class="text-left">'+data.riesgo_ponderado+'</td>';
      //var fecha = data.date_created.substring(0, 10);
      //nuevaFila+='<td class="text-center">'+fecha+'</td>';     
      nuevaFila+='<td class="text-center" > <div class="btn-group">';
      //nuevaFila+= '<span class="btn draggable-handler text-gray" style="padding:0; padding-right:0.5em">';
      //nuevaFila+= '<i class="si si-cursor-move"></i></span>';
      nuevaFila+= '<span class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" onclick="editRiesgoform('+data.id_riesgo+')" title="Editar" >';
      nuevaFila+= '<i class="fa fa-pencil"></i></span>';
      nuevaFila+= '<button class="btn btn-danger btn-xs" type="button"  onclick="delRiesgopar('+data.id_riesgo+')" data-toggle="tooltip" data-placement="top" title="Eliminar">';
      nuevaFila+= '<i class="fa fa-times"></i>';
      nuevaFila+= '</button>';
      nuevaFila+= '</div></td>';
              
      nuevaFila+="</tr>";
      $("#table_map").append(nuevaFila);
      
    }

    function editRiesgo(data){ //g
      var row = $("#id_map_"+$.trim(data.id_riesgo) );
      $(row).find("td:eq(1)").text(data.descripcion); 
      //$(row).find("td:eq(2)").text(data.orden);
      $(row).find("td:eq(2)").text(data.impacto);      
      $(row).find("td:eq(3)").text(data.probabilidad);       
      $(row).find("td:eq(4)").text(data.cuadrante); 
      $(row).find("td:eq(5)").text(data.riesgo_ponderado); 
    }
   //EDIT USER
   function editRiesgoform(id_cat){ //g
      var row = $("#id_map_"+$.trim(id_cat) );
      $("#id_map_form").val(id_cat);

      var descripcion = $(row).find("td:eq(1)").text() ;
      var impacto = $(row).find("td:eq(2)").text();
      var probabilidad = $(row).find("td:eq(3)").text();
      var cuadrante = $(row).find("td:eq(4)").text();
      var riesgo_ponderado = $(row).find("td:eq(5)").text();

      $("#descripcion").val(descripcion);
      $("#impacto").val(impacto);
      $("#probabilidad").val(probabilidad);
      $("#cuadrante").val(cuadrante);
      $("#riesgo_ponderado").val(riesgo_ponderado);
      //abrir form para editar
      var hasclass = $( ".btn-open-form > i" ).hasClass('si-arrow-down');
      if (hasclass == true) {
        $( ".btn-open-form" ).trigger( "click" ); 
      };
    }

    //DELETE CATALAGO
    function delRiesgopar(id_cat){ //g //modal delete catalogo
      $('#btn_del_all').attr('onClick', 'delCatalogo('+id_cat+');');
      $('#modal_del_all').modal('show');
    }
    function delCatalogo(id_cat){ //g //Eliminar catalogo  
      var compensacion = $.trim($("#sup_bandera_url").text() );
      base_url = compensacion+'PatController/delete_m1_4_mapa_riesgos_form/'+id_cat; 
      $.ajax({
        url: base_url,                    
        type: "post",
        dataType: 'json',
        data: {data : 'delete'},
        beforeSend:function(){
          $('#modal_del_all').modal('hide');
          $("#id_map_"+$.trim(id_cat) ).hide();
        },
        success:function(data){                        
            //*
            if (data) {    
                 if (typeof(parseInt(data) ) === "number") {
                  var row = $("#id_map_"+$.trim(data) );
                  row.remove();
                  var trs = $("#table_map tbody tr").length;
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

      function reset_table_index(){ //g
        $('td.index', $("#table_map tbody") ).each(function (i) {
            $(this).html(i + 1);          
        });
      } 
        //DROP

        var lastScrollPosition = 0; //variables defined in upper scope
        var tempScrollPosition = 0;

        window.onscroll = function () {//g // Up to you requirement you may change it to another elemnet e.g $("#YourPanel").onscroll
            clearTimeout($.data(this, 'scrollTimer'));
            $.data(this, 'scrollTimer', setTimeout(function () {
                tempScrollPosition = lastScrollPosition; // Scrolls don't change from position a to b. They cover some numbers between a and b during the change to create a smooth sliding visual. That's why we pick the previous scroll position with a timer of 250ms.
            }, 250));

            lastScrollPosition = $(document).scrollTop(); // Up to you requirement you may change it to another elemnet e.g $("#YourPanel").onscroll
        }; 
        var fixHelperModified = function(e, tr) { //g
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
                var id_cat = $.trim($(this).parent().attr('id').replace("id_map_", "") );
                var pos = i +1;            //console.log( id_cat + " : " + pos );
                sortable_mysql(id_cat, pos);
            });
        };
        //http://jsfiddle.net/pmw57/tzYbU/205/
        $("#table_map tbody").sortable({
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

      function sortable_mysql(id_cat, pos){ //g
        var compensacion = $.trim($("#sup_bandera_url").text() );
          base_url = compensacion+'PatController/sortable_mysql';
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