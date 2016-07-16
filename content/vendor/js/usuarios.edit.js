/*
 * VALIDACIONES PARA USUARIOS GENERALES
 * Init Bootstrap Forms Validation, for more examples you can check out https://github.com/jzaefferer/jquery-validation   
 */


var BaseFormValidation = function() {
      //validacion de datos generales 172 a 600
        var initValidationGeneral = function(){
        jQuery('#addusuariogenform').validate({
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
                'rol_permisos' : {required: true },
                'usuario' : {
                  required: true, 
                  email: true,
                  remote: { 
                    url: '../UserController/check_user_edit/'+ $.trim($("#id_user").val()),
                    type: "post",
                    data: { check_user : function(data) { return $("#usuario").val(); } },
                    complete : function(data,status, http){},
                    error: function(jqXHR, textStatus, errorThrown) {                      
                        //alert("Error Recargue la pagina" + errorThrown);
                    }
                  }
                },
                'pass' : { required: true  },
                'nombre' : { required: true },
                'apellidop' : { required: true },
                'fecha_nac' : { required: true },
                'sexo' : { required: true },
                'estado_civil' : { required: true },
                'curp' : { 
                  required: true,
                  remote: { 
                    url: '../UserController/check_some_edit/'+ $.trim($("#id_user").val()),
                    type: "post",
                    data: { check : function(data) { return $("#curp").val(); }, campo : 'curp' },
                    error: function(jqXHR, textStatus, errorThrown) {}
                  } 
                },
                'lugar_nac' : { required: true },
                'nacionalidad' : { required: true },
                'n_expediente' : { 
                  required: true,
                  remote: { 
                    url: '../UserController/check_some_edit/'+ $.trim($("#id_user").val()),
                    type: "post",
                    data: { check : function(data) { return $("#n_expediente").val(); }, campo : 'n_expediente' },
                    error: function(jqXHR, textStatus, errorThrown) {}
                  }
                },
                'area' : { required: true },
                'cargo' : { required: true },
                'area' : { required: true },
                'nivel' : { required: true },
                'nivel_codigo' : { required: true },
                'nivel_status' : { required: true },
                'nivel_codigo_puesto' : { required: true },
                'grado' : { required: true },
                'grado_codigo' : { required: true },
                'grado_cedula' : { required: true },
                'grado_iniciales' : { required: true },
                'email_cnbv' : { 
                  required: true,
                  email: true,
                  equalTo : "#usuario"
                },
                'email_personal' : { 
                  required: true,
                  email: true,
                  remote: { 
                    url: '../UserController/check_some_edit/'+ $.trim($("#id_user").val()),
                    type: "post",
                    data: { check : function(data) { return $("#email_personal").val(); }, campo : 'email_personal' },
                    error: function(jqXHR, textStatus, errorThrown) {}
                  }
                },
                'celular' : { required: true },
                'telefono' : { required: true },
                //'telefono_ext' : { required: true },
                'direccion' : { required: true },
                'torre' : { required: true },
                'piso' : { required: true },
                'coordenada' : { required: true }
            },messages: {
              'usuario' : {remote : 'Usuario registrado.'},
              'email_cnbv' : {equalTo : 'Por favor, escribe el mismo valor de usuario.'},
              'curp' : {remote : 'Curp registrada.'},
              'n_expediente' : {remote : 'No. Expediente registrado.'},
              'email_personal' : {remote : 'Correo electronico personal registrado.'}
            },
            submitHandler: function(form){
                $("#modal_confirmar_add_user").modal('show');
            }
        });
    };

    //validacion de datos usuario escolaridad  600 a 814
        var initValidationEscolaridad = function(){
          jQuery.validator.addMethod('valid_anos', function (value, element, param) {
              var fechainicio =  $("#esc_ini_fecha").val();
              var fechafin =  $("#esc_fin_fecha").val();
              var inicio = moment( fechainicio, 'DD/MM/YYYY');
              var fin = moment(fechafin,'DD/MM/YYYY');
              //var diff = fin.diff(inicio, 'days');
              var diff = fin.diff(inicio, 'years');
              console.log(diff);
              if (diff > 0) {
                $("#esc_anos").val(diff);
                return true
              }else{
                $("#esc_anos").val('0');                
                return false;
              }            
          }, 'Asigne un rango de fecha valido!');
        jQuery('#addusuario_escolaridad_form').validate({
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
                'esc_instituto': { required: true },
                'esc_titulo' : {required: true },
                'esc_anos' : { required: true },
                'esc_fin_fecha' : { 
                  required: true,
                  valid_anos : true  
                },
                'esc_ini_fecha' : { required: true },
                'esc_doc' : { required: true },
                'esc_estatus' : { required: true },
            },messages: {},
            submitHandler: function(form){
                  //var base_url = '<?= base_url("index.php/UserController/adm_Usuarios_Form_Generales")?>'+"/"+ get_code;
                  
                  var id_user = parseInt( $("#id_user").val() ); //variable de usuario
                  var base_url = ""
                  if ( !isNaN($.trim(id_user) ) == "") {            
                    jQuery('#modal_info_add_user').modal('show');
                    return false;
                  };              
                  base_url = '../UserController/adm_Usuarios_Form_Escolares/'+id_user;
                  $.ajax({
                    url: base_url,                    
                    type: "post",
                    dataType: 'json',
                    data: $(form).serialize(),
                    beforeSend:function(){
                        $( "#btn_datos_esc" ).prop( "disabled", true );
                        if ($( "#load_datos_esc" ).hasClass( "hidden" )) {
                            $( "#load_datos_esc" ).removeClass( "hidden" );
                          }; 
                    },success:function(data){                      
                        if (data) {
                          $( "#btn_datos_esc" ).prop( "disabled", false );
                          if (!$( "#load_datos_esc" ).hasClass( "hidden" )) { //quitar el load
                              $( "#load_datos_esc" ).addClass( "hidden" );
                            }; 
                          $("#id_esc").val(); //limpiando variable de update                 
                             if (typeof(data.estatus_error) === 'undefined' ) { //agregado                             
                                
                                if (typeof(data.id_esc_update) === 'undefined') {
                                  addEscolaridad(data); //nueva escolaridad
                                }else{
                                  editEscolarida(data); //update escolaridad
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
                          alert('Error de datos');
                          console.log('Error de datos');
                        };
                        
                    }
                });                   
            }
        });
    };   
    //validacion de datos generales  600 a 814
    //http://www.lawebdelprogramador.com/codigo/JQuery/2279-Anadir-y-eliminar-filas-de-una-tabla-con-jquery.html
    // id table #table_esc; id contador #label_find_esc    
    var addEscolaridad = function(data){ //http://www.lawebdelprogramador.com/codigo/JQuery/2279-Anadir-y-eliminar-filas-de-una-tabla-con-jquery.html
      // id table #table_esc; id contador #label_find_esc
      var fech_ini  = data.esc_ini_fecha;
      var fech_fin  = data.esc_fin_fecha;
      console.log(data);
      var trs =$("#table_esc tr").length;
      $("#label_find_esc").text(trs);
      //TEMPORALES
      var esc_instituto = $( "#esc_instituto option:selected" ).text();
      var esc_titulo = $( "#esc_titulo option:selected" ).text();
      var esc_doc = $( "#esc_doc option:selected" ).text();
      var esc_estatus = $( "#esc_estatus option:selected" ).text();

      var nuevaFila='<tr id="id_esc_'+data.id_esc+'">';
      nuevaFila+='<td class="text-center">'+(trs)+' </td>';
       nuevaFila+='<td class="text-left">'+(esc_instituto)+'</td>';
      nuevaFila+='<td class="text-left">'+(esc_titulo)+'</td>';
      nuevaFila+='<td class="text-center">'+(fech_ini)+'</td>';
      nuevaFila+='<td class="text-center">'+(fech_fin)+'</td>';
      nuevaFila+='<td class="text-center">'+(data.esc_anos)+'</td>';
      nuevaFila+='<td class="text-left">'+(esc_doc)+'</td>';
      nuevaFila+='<td class="text-center">'+(esc_estatus)+'</td>';

      nuevaFila+='<td class="text-center" > <div class="btn-group">';
      nuevaFila+= '<span class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" onclick="editEscolaridaform('+data.id_esc+', '+trs+')" title="Editar" >';
      nuevaFila+= '<i class="fa fa-pencil"></i>';
      nuevaFila+= '</span>';
      nuevaFila+= '<button class="btn btn-danger btn-xs" type="button"  onclick="delEscolaridapar('+data.id_esc+')" data-toggle="tooltip" data-placement="top" title="Eliminar">';
      nuevaFila+= '<i class="fa fa-times"></i>';
      nuevaFila+= '</button>';
      nuevaFila+= '</div></td>';
              
      nuevaFila+="</tr>";
      $("#table_esc").append(nuevaFila);
    }

    var editEscolarida = function(data){
      //var fech_ini  = data.esc_ini_dia + "/" +data.esc_ini_mes + "/" +data.esc_ini_ano;
      //var fech_fin  = data.esc_fin_dia + "/" +data.esc_fin_mes + "/" +data.esc_fin_ano;
      var fech_ini  = data.esc_ini_fecha;
      var fech_fin  = data.esc_fin_fecha;

      var esc_instituto = $( "#esc_instituto option:selected" ).text();
      var esc_titulo = $( "#esc_titulo option:selected" ).text();
      var esc_doc = $( "#esc_doc option:selected" ).text();
      var esc_estatus = $( "#esc_estatus option:selected" ).text();

      var row = $("#id_esc_"+$.trim(data.id_esc) );
      //console.log(row);      
      //console.log( $(row).find("td:eq(2)").text() );
      $(row).find("td:eq(2)").text(esc_instituto); //instituto
      $(row).find("td:eq(3)").text(esc_titulo);
      $(row).find("td:eq(4)").text(fech_ini);//desde
      $(row).find("td:eq(5)").text(fech_fin);
      $(row).find("td:eq(6)").text(data.esc_anos); //anos
      $(row).find("td:eq(7)").text(esc_doc); 
      $(row).find("td:eq(8)").text(esc_estatus); 
      //console.log(row.text());      
    }

    //validaciones habilidades //3er formulario
        var initValidationHabilidad = function(){ 
        jQuery('#addusuario_habilidad_form').validate({
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
                //'hab_habilidad_des': { required: true },
                'hab_habilidad' : {required: true },
                'hab_nivel' : { required: true },
                'hab_anos' : { required: true }
            },messages: {},
            submitHandler: function(form){                 
                 var id_user = parseInt( $("#id_user").val() ); //variable de usuario
                  var base_url = "";
                  if ( !isNaN($.trim(id_user) ) == "") { 
                    jQuery('#modal_info_add_user').modal('show');
                    return false;
                  };                
                
                  base_url = '../UserController/adm_Usuarios_Form_Habilidad/'+id_user;
                  $.ajax({
                    url: base_url,                    
                    type: "post",
                    dataType: 'json',
                    data: $(form).serialize(),
                    beforeSend:function(){
                        $( "#btn_datos_hab" ).prop( "disabled", true );
                        if ($( "#load_datos_hab" ).hasClass( "hidden" )) {
                            $( "#load_datos_hab" ).removeClass( "hidden" );
                          };
                    },
                    success:function(data){                        
                        //*
                        if (data) {
                          $( "#btn_datos_hab" ).prop( "disabled", false );
                          if (!$( "#load_datos_hab" ).hasClass( "hidden" )) { //quitar el load
                              $( "#load_datos_hab" ).addClass( "hidden" );
                            }; 
                          //$("#id_hab").val(); //limpiando variable de update                 
                             if (typeof(data.estatus_error) === 'undefined') { //agregado    
                               if (typeof(data.id_esc_update) === 'undefined') {
                                  addHabilidad(data); //nueva habilidad
                                }else{
                                  editHabilidad(data); //update habilidad
                                }    
                              form.reset(); //reseteo de fomr

                             }else{ //errores de validacion
                               alert(data.error);
                               //console.log(data);
                             };
                        }else{ //some error
                          alert('Error de datos');
                          //console.log('Error de datos');
                        };
                        //*
                    }
                });                   
            }
        });
        }
        //fin validaciones habilidates
    var addHabilidad = function(data){ //http://www.lawebdelprogramador.com/codigo/JQuery/2279-Anadir-y-eliminar-filas-de-una-tabla-con-jquery.html
      // id table #table_hab; id contador #label_find_hab
      var habilidad = $( "#hab_habilidad option:selected" ).text();
      var hab_nivel = $( "#hab_nivel option:selected" ).text();
      var trs =$("#table_hab tr").length;
      $("#label_find_hab").text(trs);
      var nuevaFila='<tr id="id_hab_'+data.id_hab+'">';
      nuevaFila+='<td class="text-center">'+(trs)+' </td>';
      //nuevaFila+='<td class="text-left hidden">'+(data.hab_habilidad_des)+'</td>';
       nuevaFila+='<td class="text-left hidden">'+''+'</td>';
      nuevaFila+='<td class="text-left">'+(habilidad)+'</td>';
      nuevaFila+='<td class="text-center">'+(hab_nivel)+'</td>';
      nuevaFila+='<td class="text-center">'+(data.hab_anos)+'</td>';

      nuevaFila+='<td class="text-center" > <div class="btn-group">';
      nuevaFila+= '<span class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" onclick="editHabilidadform('+data.id_hab+')" title="Editar" >';
      nuevaFila+= '<i class="fa fa-pencil"></i>';
      nuevaFila+= '</span>';
      nuevaFila+= '<button class="btn btn-danger btn-xs" type="button"  onclick="delHabilidadconfirm('+data.id_hab+')" data-toggle="tooltip" data-placement="top" title="Eliminar">';
      nuevaFila+= '<i class="fa fa-times"></i>';
      nuevaFila+= '</button>';
      nuevaFila+= '</div></td>';              
      nuevaFila+="</tr>";
      $("#table_hab").append(nuevaFila);
    }

    var editHabilidad = function(data){
      var hab_habilidad = $( "#hab_habilidad option:selected" ).text();
      var hab_nivel = $( "#hab_nivel option:selected" ).text();
      var hab_anos = $( "#hab_anos option:selected" ).text();

      var row = $("#id_hab_"+$.trim(data.id_hab) );
      //$(row).find("td:eq(1)").text(data.hab_habilidad_des);
      $(row).find("td:eq(2)").text(hab_habilidad); 
      $(row).find("td:eq(3)").text(hab_nivel);
      $(row).find("td:eq(4)").text(data.hab_anos);       
    }

    //validaciones CERTIFICACIONES //4er formulario
        var initValidationCertificacion = function(){ 
        jQuery('#addusuario_certificacion_form').validate({
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
                //'cer_certificacion_des': { required: true },
                'cer_certificacion' : {required: true },
                'cer_ano' : { required: true }
            },messages: {},
            submitHandler: function(form){                 
                 var id_user = parseInt( $("#id_user").val() ); //variable de usuario
                  var base_url = "";
                  if ( !isNaN($.trim(id_user) ) == "") { 
                    jQuery('#modal_info_add_user').modal('show');
                    return false;
                  };           
                
                  base_url = '../UserController/adm_Usuarios_Form_Certificacion/'+id_user;
                  $.ajax({
                    url: base_url,                    
                    type: "post",
                    dataType: 'json',
                    data: $(form).serialize(),
                    beforeSend:function(){
                        $( "#btn_submit_cer" ).prop( "disabled", true );
                        if ($( "#load_datos_cer" ).hasClass( "hidden" )) {
                            $( "#load_datos_cer" ).removeClass( "hidden" );
                          };
                    },
                    success:function(data){                        
                        //*
                        if (data) {
                          $( "#btn_submit_cer" ).prop( "disabled", false );
                          if (!$( "#load_datos_cer" ).hasClass( "hidden" )) { //quitar el load
                              $( "#load_datos_cer" ).addClass( "hidden" );
                            }; 
                            //$("#id_cer").val(); //limpiando variable de update                 
                             if (typeof(data.estatus_error) === 'undefined') { //agregado
                               if (typeof(data.id_esc_update) === 'undefined') {
                                  addCertificacion(data); //nueva habilidad
                                }else{
                                  editCertificacion(data); //update habilidad
                                }  
                              form.reset(); //reseteo de fomr
                             }else{ //errores de validacion
                               alert(data.error);
                               //console.log(data);
                             };
                        }else{ //some error
                          alert('Error de datos');
                          console.log('Error de datos');
                        };
                        //*
                    }
                });                   
            }
        });
        }
        //fin validaciones CERTIFICACIONES
        var addCertificacion = function(data){ //http://www.lawebdelprogramador.com/codigo/JQuery/2279-Anadir-y-eliminar-filas-de-una-tabla-con-jquery.html
          // id table #table_hab; id contador #label_find_hab
          var certificacion = $( "#cer_certificacion option:selected" ).text();
          var trs =$("#table_cer tr").length;
          $("#label_find_cer").text(trs);
          var nuevaFila='<tr id="id_cer_'+data.id_cer+'">';
          nuevaFila+='<td class="text-center">'+(trs)+' </td>';
          //nuevaFila+= '<td class="text-center hidden">'+(data.cer_certificacion_des)+' </td>';
          nuevaFila+= '<td class="text-center hidden">'+''+' </td>';
          nuevaFila+='<td class="text-left">'+(certificacion)+'</td>';
          nuevaFila+='<td class="text-center">'+(data.cer_ano)+'</td>';

          nuevaFila+='<td class="text-center" > <div class="btn-group">';
          nuevaFila+= '<span class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" onclick="editCertificacion('+data.id_cer+')" title="Editar" >';
          nuevaFila+= '<i class="fa fa-pencil"></i>';
          nuevaFila+= '</span>';
          nuevaFila+= '<button class="btn btn-danger btn-xs" type="button"  onclick="deleteCertificacionconfirm('+data.id_cer+')" data-toggle="tooltip" data-placement="top" title="Eliminar">';
          nuevaFila+= '<i class="fa fa-times"></i>';
          nuevaFila+= '</button>';
          nuevaFila+= '</div></td>';              
          nuevaFila+="</tr>";
          $("#table_cer").append(nuevaFila);
        }

        var editCertificacion = function(data){
          console.log(data);    
          //var cer_certificacion_des = $( "#hab_habilidad option:selected" ).text();
          var cer_certificacion = $( "#cer_certificacion option:selected" ).text();
          var row = $("#id_cer_"+$.trim(data.id_cer) );
          //$(row).find("td:eq(1)").text(data.cer_certificacion_des);
          $(row).find("td:eq(2)").text(cer_certificacion);
          $(row).find("td:eq(3)").text(data.cer_ano);       
        }
      
    //validaciones CURSO //5er formulario
        var initValidationCurso = function(){ 
        jQuery('#addusuario_curso_form').validate({
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
                //'cur_curso_des': { required: true },
                'cur_curso' : {required: true },
                'cur_ini_fecha' : { required: true },
                'cur_fin_fecha' : { required: true },
                'cur_duracion' : { required: true },
                'cur_instituto' : { required: true }
            },messages: {},
            submitHandler: function(form){                 
                 var id_user = parseInt( $("#id_user").val() ); //variable de usuario
                  var base_url = "";
                  if ( !isNaN($.trim(id_user) ) == "") { 
                    jQuery('#modal_info_add_user').modal('show');
                    return false;
                  };
                  var id_cur = parseInt($("#id_cur_form").val() );
                  if ( !isNaN($.trim(id_cur) )== "") { // variable update
                    //base_url = 'UserController/adm_Usuarios_Form_Escolares/'+id_user;
                  }else{ //nuevo
                    //base_url = 'UserController/adm_Usuarios_Form_Escolares/'+id_user;
                  };                
                  base_url = '../UserController/adm_Usuarios_Form_Curso/'+id_user;

                  $.ajax({
                    url: base_url,                    
                    type: "post",
                    dataType: 'json',
                    data: $(form).serialize(),
                    beforeSend:function(){
                        $( "#btn_submit_cur" ).prop( "disabled", true );
                        if ($( "#load_datos_cur" ).hasClass( "hidden" )) {
                            $( "#load_datos_cur" ).removeClass( "hidden" );
                          };
                    },
                    success:function(data){                        
                        //*
                        if (data) {
                          $( "#btn_submit_cur" ).prop( "disabled", false );
                          if (!$( "#load_datos_cur" ).hasClass( "hidden" )) { //quitar el load
                              $( "#load_datos_cur" ).addClass( "hidden" );
                            }; 
                            //$("#id_cer").val(); //limpiando variable de update                 
                             if (typeof(data.estatus_error) === 'undefined') { //agregado
                               if (typeof(data.id_esc_update) === 'undefined') {
                                  addCurso(data); //nueva curso
                                }else{
                                  editCurso(data); //update curso
                                } 
                              form.reset(); //reseteo de fomr
                             }else{ //errores de validacion
                               alert(data.error);
                               //console.log(data);
                             };
                        }else{ //some error
                          alert('Error de datos');
                          console.log('Error de datos');
                        };
                        //*
                    }
                });                   
            }
        });
        }
        //fin validaciones CURSO

      var addCurso = function(data){ //http://www.lawebdelprogramador.com/codigo/JQuery/2279-Anadir-y-eliminar-filas-de-una-tabla-con-jquery.html
      // id table #table_esc; id contador #label_find_esc
      //var fech_ini  = data.cur_ini_dia + "/" +data.cur_ini_mes + "/" +data.cur_ini_ano;
      //var fech_fin  = data.cur_fin_dia + "/" +data.cur_fin_mes + "/" +data.cur_fin_ano;
      var fech_ini  = data.cur_ini_fecha;
      var fech_fin  = data.cur_fin_fecha;
      var cur_curso = $( "#cur_curso option:selected" ).text();
      var cur_duracion = $( "#cur_duracion option:selected" ).text();
      var cur_instituto = $( "#cur_instituto option:selected" ).text();
      var trs =$("#table_cur tr").length;
      $("#label_find_cur").text(trs);
      var nuevaFila='<tr id="id_cur_'+data.id_cur+'">';
      //nuevaFila+= '<td class="text-center hidden">'+(data.id_cur)+' </td>';
      nuevaFila+='<td class="text-center">'+(trs)+' </td>';
      //nuevaFila+='<td class="text-left hidden">'+(data.cur_curso_des)+'</td>';
      nuevaFila+='<td class="text-left hidden">'+''+'</td>';
      nuevaFila+='<td class="text-left">'+(cur_curso)+'</td>';
      nuevaFila+='<td class="text-center">'+(fech_ini)+'</td>';
      nuevaFila+='<td class="text-center">'+(fech_fin)+'</td>';
      //nuevaFila+='<td class="text-center">'+(data.cur_duracion)+'</td>';
      //nuevaFila+='<td class="text-left">'+(data.cur_instituto)+'</td>';
      nuevaFila+='<td class="text-center">'+(cur_duracion)+'</td>';
      nuevaFila+='<td class="text-left">'+(cur_instituto)+'</td>';

      nuevaFila+='<td class="text-center" > <div class="btn-group">';
      nuevaFila+= '<span class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" onclick="editCursoform('+data.id_cur+')" title="Editar" >';
      nuevaFila+= '<i class="fa fa-pencil"></i>';
      nuevaFila+= '</span>';
      nuevaFila+= '<button class="btn btn-danger btn-xs" type="button"  onclick="deleteCursoconfirm('+data.id_cur+')" data-toggle="tooltip" data-placement="top" title="Eliminar">';
      nuevaFila+= '<i class="fa fa-times"></i>';
      nuevaFila+= '</button>';
      nuevaFila+= '</div></td>';
              
      nuevaFila+="</tr>";
      $("#table_cur").append(nuevaFila);
    }

    var editCurso = function(data){
      var fech_ini  = data.cur_ini_fecha;
      var fech_fin  = data.cur_fin_fecha;
      
      var cur_curso = $( "#cur_curso option:selected" ).text();
      var cur_duracion = $( "#cur_duracion option:selected" ).text();
      var cur_instituto = $( "#cur_instituto option:selected" ).text();

      var esc_doc = $( "#esc_doc option:selected" ).text();
      var esc_estatus = $( "#esc_estatus option:selected" ).text();

      var row = $("#id_cur_"+$.trim(data.id_cur) );
      //$(row).find("td:eq(1)").text(data.cur_curso_des); 
      $(row).find("td:eq(2)").text(cur_curso); 
      $(row).find("td:eq(3)").text(fech_ini);//desde
      $(row).find("td:eq(4)").text(fech_fin);//hasta
      $(row).find("td:eq(5)").text(cur_duracion);
      $(row).find("td:eq(6)").text(cur_instituto);  
      
    }

     //validaciones EXPERIENCIA //6er formulario
        var initValidationExperiencia = function(){ 
        jQuery('#addusuario_experiencia_form').validate({
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
                'exp_empresa': { required: true },
                'exp_giro' : {required: true },
                'exp_puesto' : {required: true },
                'exp_ini_fecha' : { required: true },
                'exp_fin_fecha' : { required: true },
                'exp_actividades' : { required: true }
            },messages: {},
            submitHandler: function(form){                 
                 var id_user = parseInt( $("#id_user").val() ); //variable de usuario
                  var base_url = "";
                  if ( !isNaN($.trim(id_user) ) == "") { 
                    jQuery('#modal_info_add_user').modal('show');
                    return false;
                  };
                  var id_exp= parseInt($("#id_exp_form").val() );
                  if ( !isNaN($.trim(id_exp) )== "") { // variable update
                    //base_url = 'UserController/adm_Usuarios_Form_Escolares/'+id_user;
                  }else{ //nuevo
                    //base_url = 'UserController/adm_Usuarios_Form_Escolares/'+id_user;
                  };                
                  base_url = '../UserController/adm_Usuarios_Form_Experiencia/'+id_user;
                  $.ajax({
                    url: base_url,                    
                    type: "post",
                    dataType: 'json',
                    data: $(form).serialize(),
                    beforeSend:function(){
                        $( "#btn_submit_exp" ).prop( "disabled", true );
                        if ($( "#load_datos_exp" ).hasClass( "hidden" )) {
                            $( "#load_datos_exp" ).removeClass( "hidden" );
                          };
                    },
                    success:function(data){                        
                        //*
                        if (data) {
                          $( "#btn_submit_exp" ).prop( "disabled", false );
                          if (!$( "#load_datos_exp" ).hasClass( "hidden" )) { //quitar el load
                              $( "#load_datos_exp" ).addClass( "hidden" );
                            }; 
                            //$("#id_cer").val(); //limpiando variable de update                 
                             if (typeof(data.estatus_error) === 'undefined') { //agregado
                                if (typeof(data.id_all_update) === 'undefined') {
                                  addExperiencia(data); //nueva
                                }else{
                                  editExperiencia(data); //update
                                } 
                                form.reset(); //reseteo
                             }else{ //errores de validacion
                               alert(data.error);
                               //console.log(data);
                             };
                        }else{ //some error
                          alert('Error de datos');
                          //console.log('Error de datos');
                        };
                        //*
                    }
                });                   
            }
        });
        }
        //fin validaciones EXPERIENCIA
      var addExperiencia = function(data){ //http://www.lawebdelprogramador.com/codigo/JQuery/2279-Anadir-y-eliminar-filas-de-una-tabla-con-jquery.html
      // id table #table_esc; id contador #label_find_exp
      var fech_ini = data.exp_ini_fecha;
      var fech_fin = data.exp_fin_fecha;
      //var fech_ini  = data.exp_ini_dia + "/" +data.exp_ini_mes + "/" +data.exp_ini_ano;
      //var fech_fin  = data.exp_fin_dia + "/" +data.exp_fin_mes + "/" +data.exp_fin_ano;
      var trs =$("#table_exp tr").length;
      $("#label_find_exp").text(trs);
      var nuevaFila='<tr id="id_exp_'+data.id_exp+'">';
      //nuevaFila+= '<td class="text-center hidden">'+(data.id_exp)+' </td>';
      nuevaFila+='<td class="text-center">'+(trs)+' </td>';
      nuevaFila+='<td class="text-left">'+(data.exp_empresa)+'</td>';
      nuevaFila+='<td class="text-left">'+(data.exp_giro)+'</td>';
      nuevaFila+='<td class="text-left">'+(data.exp_puesto)+'</td>';
      nuevaFila+='<td class="text-center">'+(fech_ini)+'</td>';
      nuevaFila+='<td class="text-center">'+(fech_fin)+'</td>';
      nuevaFila+='<td class="text-center">'+(data.exp_actividades)+'</td>';

      nuevaFila+='<td class="text-center" > <div class="btn-group">';
      nuevaFila+= '<span class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" onclick="editExperienciaform('+data.id_exp+')" title="Editar" >';
      nuevaFila+= '<i class="fa fa-pencil"></i>';
      nuevaFila+= '</span>';
      nuevaFila+= '<button class="btn btn-danger btn-xs" type="button"  onclick="deleteExperienciaconfirm('+data.id_exp+')" data-toggle="tooltip" data-placement="top" title="Eliminar">';
      nuevaFila+= '<i class="fa fa-times"></i>';
      nuevaFila+= '</button>';
      nuevaFila+= '</div></td>';
              
      nuevaFila+="</tr>";
      $("#table_exp").append(nuevaFila);
    }

    var editExperiencia = function(data){
      console.log('edit_exp');
      var fech_ini = data.exp_ini_fecha;
      var fech_fin = data.exp_fin_fecha;
      var row = $("#id_exp_"+$.trim(data.id_exp) );
      $(row).find("td:eq(1)").text(data.exp_empresa); 
      $(row).find("td:eq(2)").text(data.exp_giro); 
      $(row).find("td:eq(3)").text(data.exp_puesto);
      $(row).find("td:eq(4)").text(fech_ini);//desde
      $(row).find("td:eq(5)").text(fech_fin);//hasta
      $(row).find("td:eq(6)").text(data.exp_actividades);        
    }
    //validaciones AREA DE EXPERIENCIA //7er formulario
        var initValidationArea = function(){ 
        jQuery('#addusuario_area_form').validate({
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
                'area_area': { required: true },
                'area_subarea' : {required: true },
                'area_tiempo' : {required: true }
            },messages: {},
            submitHandler: function(form){                 
                 var id_user = parseInt( $("#id_user").val() ); //variable de usuario
                  var base_url = "";
                  if ( !isNaN($.trim(id_user) ) == "") { 
                    jQuery('#modal_info_add_user').modal('show');
                    return false;
                  };
                  
                  var id_area= parseInt($("#id_area_form").val() );
                  if ( !isNaN($.trim(id_area) )== "") { // variable update
                    //base_url = 'UserController/adm_Usuarios_Form_Escolares/'+id_user;
                  }else{ //nuevo
                    //base_url = 'UserController/adm_Usuarios_Form_Escolares/'+id_user;
                  };                
                  base_url = '../UserController/adm_Usuarios_Form_Area_Exp/'+id_user;

                  $.ajax({
                    url: base_url,                    
                    type: "post",
                    dataType: 'json',
                    data: $(form).serialize(),
                    beforeSend:function(){
                        //$( "#btn_submit_area" ).prop( "disabled", true );
                        if ($( "#load_datos_area" ).hasClass( "hidden" )) {
                            $( "#load_datos_area" ).removeClass( "hidden" );
                          };
                    },
                    success:function(data){                        
                        //*
                        if (data) {
                          //$( "#btn_submit_area" ).prop( "disabled", false );
                          if (!$( "#load_datos_area" ).hasClass( "hidden" )) { //quitar el load
                              $( "#load_datos_area" ).addClass( "hidden" );
                            }; 
                            //$("#id_cer").val(); //limpiando variable de update                 
                             if (typeof(data.estatus_error) === 'undefined') { //agregado
                               if (typeof(data.id_all_update) === 'undefined') {
                                  addArea(data); //nueva
                                }else{
                                  editArea(data); //update
                                } 
                              form.reset(); //reseteo de fomr
                             }else{ //errores de validacion
                               alert(data.error);
                               //console.log(data);
                             };
                        }else{ //some error
                          alert('Error de datos');
                          console.log('Error de datos');
                        };
                        //*
                    }
                });                   
            }
        });
        }
        //fin validaciones AREA DE EXPERIENCIA
        var addArea = function(data){ //http://www.lawebdelprogramador.com/codigo/JQuery/2279-Anadir-y-eliminar-filas-de-una-tabla-con-jquery.html
      // id table #table_area; id contador #label_find_area
      //*temporales
      var area_area = $( "#area_area option:selected" ).text();
      var area_subarea = $( "#area_subarea option:selected" ).text();
      var area_tiempo = $( "#area_tiempo option:selected" ).text();
      //*temporales
      var trs =$("#table_area tr").length;
      $("#label_find_area").text(trs);
      var nuevaFila='<tr id="id_area_'+data.id_area+'">';
      nuevaFila+='<td class="text-center">'+(trs)+' </td>';
      nuevaFila+='<td class="text-left">'+(area_area)+'</td>';
      nuevaFila+='<td class="text-left">'+(area_subarea)+'</td>';
      nuevaFila+='<td class="text-left">'+(area_tiempo)+'</td>';

      nuevaFila+='<td class="text-center" > <div class="btn-group">';
      nuevaFila+= '<span class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" onclick="editAreaform('+data.id_area+')" title="Editar" >';
      nuevaFila+= '<i class="fa fa-pencil"></i>';
      nuevaFila+= '</span>';
      nuevaFila+= '<button class="btn btn-danger btn-xs" type="button"  onclick="deleteAreaconfirm('+data.id_area+')" data-toggle="tooltip" data-placement="top" title="Eliminar">';
      nuevaFila+= '<i class="fa fa-times"></i>';
      nuevaFila+= '</button>';
      nuevaFila+= '</div></td>';
              
      nuevaFila+="</tr>";
      $("#table_area").append(nuevaFila);
    }

    var editArea = function(data){
      console.log(data);
      console.log('editando');
      var area_area = $( "#area_area option:selected" ).text();
      var area_subarea = $( "#area_subarea option:selected" ).text();
      var area_tiempo = $( "#area_tiempo option:selected" ).text();

      var row = $("#id_area_"+$.trim(data.id_area) );
      $(row).find("td:eq(1)").text(area_area); 
      $(row).find("td:eq(2)").text(area_subarea); 
      $(row).find("td:eq(3)").text(area_tiempo);
      
    }

    var initcountTables = function(){ 
      //Escolaridad
      var trs =$("#table_esc tbody tr").length;
      $("#label_find_esc").text(trs);
      var trs =$("#table_hab tbody tr").length;
      $("#label_find_hab").text(trs);
      var trs =$("#table_cer tbody tr").length;
      $("#label_find_cer").text(trs);
      var trs =$("#table_cur tbody tr").length;
      $("#label_find_cur").text(trs);
       var trs =$("#table_area tbody tr").length;
      $("#label_find_area").text(trs);
    }    

    return {
        init: function () {
            // validaciones de datos generales 100 a 600 
            initValidationGeneral();
            // validaciones de escolaridad 600 a 800
            initValidationEscolaridad();    
            // validaciones de escolaridad 800 a 900
            initValidationHabilidad();
             // validaciones de escolaridad 800 a 900
            initValidationCertificacion();
             // validaciones de escolaridad 900 a 1150
            initValidationCurso();
            // validaciones de Experiencia profecional 1150 a 1300
            initValidationExperiencia();
            //validaciones de areas de  Experiencia 1300 a --
            initValidationArea();
            //contando las filas en las tablas
            initcountTables();
            // Init Validation on Select2 change
            jQuery('.js-select2').on('change', function(){
                jQuery(this).valid();
            });
            //Resetear formulario
            jQuery.fn.reset = function () {
              $(this).each (function() { this.reset(); });
            }
            $("#usuario").focusout(function(){
              var usuario_val =  $("#usuario").val();
              console.log(usuario_val);
              $("#email_cnbv").val(usuario_val);
            })
        }
    };
}();
  //ADD USUARIOS
  function addusuario_confirm2(){
    var form = $("#addusuariogenform");
    console.log($(form).serialize());
  }

  function addusuario_confirm(){
      var base_url = '../UserController/adm_Usuarios_Form_Generales_edit';
      var form = $("#addusuariogenform");

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
                $( "#btn_datos_gen" ).prop( "disabled", false );
                $( "#btn_datos_cancelar" ).prop( "disabled", false );
                if (!$( "#load_datos_gen" ).hasClass( "hidden" )) { //quitar el load
                    $( "#load_datos_gen" ).addClass( "hidden" );
                 };
                 if (typeof(data.estatus_error) === 'undefined') { //agregado                             
                  if ($( "#btn_datos_gen_otro" ).hasClass( "hidden" )) { //quitar el load
                    $( "#btn_datos_gen_otro" ).removeClass( "hidden" );
                  };
                  addusuario_confirm_files();
                  //$("#id_user").val(data.id_user); //asignas valor agregado
                  //form.reset();
                 }else{ //errores de validacion
                  
                   alert(data.error);
                 };
            }else{ //some error
              alert('Error interno, recargue la pagina');
            };
        }
    });
  }

  function addusuario_confirm_files(){
    //http://stackoverflow.com/questions/5392344/sending-multipart-formdata-with-jquery-ajax
      var id_user = $("#id_user").val();
      if (id_user == "") {
        return false;
      }; 
      var base_url = '../UserController/adm_Usuarios_Form_Generales_files/'+id_user;
      var form = $("#addusuariogenform");  

      var data = new FormData();
      var cont = 0;
      jQuery.each(jQuery('#curr_file')[0].files, function(i, file) {
          data.append('curr_file', file); cont = 1;          
      });      
      jQuery.each(jQuery('#perfil_file')[0].files, function(i, file) {
          data.append('perfil_file', file); cont = 1;
      }); 
      jQuery.each(jQuery('#desempeno_file')[0].files, function(i, file) {
          data.append('desempeno_file', file); cont = 1;
      }); 
      jQuery.each(jQuery('#foto_file')[0].files, function(i, file) {
          data.append('foto_file', file); cont = 1;
      }); 
      if (cont == 0) {
        return false;
        console.log("sin archivos");
      };
      console.log(data );
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
        },
        success:function(data){
           if (!$("#label_load_file").hasClass('hidden')) {
              $("#label_load_file").addClass('hidden')
            };
          //console.log(data);
            if (data) {
              var result = ""
              //console.log(data.curr_file.Error);
              //CONSULTA DE ERRORES
               if (typeof(data.curr_file) != 'undefined') {//agregado    
                 if (typeof(data.curr_file.Error) != 'undefined') {
                   result += '<div class="col-md-12 text-left ">*'+data.curr_file.Error+'</div>';
                 };  
               }
               if (typeof(data.perfil_file) != 'undefined') {//agregado 
                  if (typeof(data.perfil_file.Error) != 'undefined') {
                    result += '<div class="col-md-12 text-left ">*'+data.perfil_file.Error+'</div>';
                  };      
               }
               if (typeof(data.desempeno_file) != 'undefined') {//agregado                                               
                if (typeof(data.desempeno_file.Error) != 'undefined') {
                  result += '<div class="col-md-12 text-left ">*'+data.desempeno_file.Error+'</div>';
                }                
               }
               if (typeof(data.foto_file) != 'undefined') {//agregado    
                if (typeof(data.foto_file.Error) != 'undefined') {                                           
                  result += '<div class="col-md-12 text-left ">*'+data.foto_file.Error+'</div>';
                }
               }

               if (result != "") {
                $("#show_message_error_file").html(result);
                $("#modal_message_error_file").modal('show');
               };
               //ACCIONES EN EL GUARDADO DE ARCHIVOS
               if (typeof(data.curr_file) != 'undefined') {//agregado    
                 if (typeof(data.curr_file.curr_url) != 'undefined') {                  
                  if ($("#btn_curr").hasClass('disabled')) {
                    $("#btn_curr").removeClass('disabled')
                  };
                 };  
               }
               if (typeof(data.perfil_file) != 'undefined') {//agregado 
                  if (typeof(data.perfil_file.perfil_url) != 'undefined') {
                    if ($("#btn_perfil").hasClass('disabled')) {
                      $("#btn_perfil").removeClass('disabled')
                    };
                    //$("#btn_perfil").prop( "disabled", false );
                  };      
               }
               if (typeof(data.desempeno_file) != 'undefined') {//agregado                                               
                if (typeof(data.desempeno_file.desempeno_url) != 'undefined') {
                  if ($("#btn_desempeno").hasClass('disabled')) {
                      $("#btn_desempeno").removeClass('disabled')
                    };
                  //$("#btn_desempeno").prop( "disabled", false );
                }                
               }
               if (typeof(data.foto_file) != 'undefined') {//agregado    
                if (typeof(data.foto_file.foto_url) != 'undefined') { 
                  if ($("#btn_foto").hasClass('disabled')) {
                    $("#btn_foto").removeClass('disabled')
                  };   
                  //$("#btn_foto").prop( "disabled", false );                                                         
                }
               }

            }else{ //some error
              alert('Error interno al agregar archivos, recargue la pagina');
            };
        },error: function(jqXHR, textStatus, errorThrown){// Handle errors here
            console.log('ERRORS: ' + textStatus);
            if (!$("#label_load_file").hasClass('hidden')) {
              $("#label_load_file").addClass('hidden')
            };
            // STOP LOADING SPINNER
        }
    });
  }

  function down_file(curr_url, curr_name){
      var id_user = $("#id_user").val();
      if (id_user == "") { return false; };
      var base_url = '../UserController/get_down_file';
      $.ajax({
        url: base_url,                    
        type: "post",
        dataType: 'json',
        data: {'curr_url' : curr_url , 'curr_name' : curr_name ,  'id_user': id_user },
        beforeSend:function(){},
        success:function(data){
          console.log(data);
            if (data) {
              console.log(data);
              //$.fileDownload(data).done(function () { alert('File download a success!'); })
              //.fail(function () { alert('File download failed!'); });
              //window.location.replace(data)
              document.location.href = data;
            }else{ //some error
              alert('Error interno, recargue la pagina');
            };
        }
    });
  }
   //EDIT ESCOLARIDAD
   function editEscolaridaform(id_esc){ //editar escolaridad // id table #table_esc; id contador #label_find_esc      
      var row = $("#id_esc_"+$.trim(id_esc) );
      $("#id_esc").val(id_esc);
      var esc_instituto = editEscolaridaformval($(row).find("td:eq(2)").text(), '#esc_instituto' );
      var esc_titulo = editEscolaridaformval($(row).find("td:eq(3)").text(), '#esc_titulo' );
      var desde = $(row).find("td:eq(4)").text() ;
      var hasta = $(row).find("td:eq(5)").text();
      var esc_anos = $(row).find("td:eq(6)").text();
      var esc_doc  = editEscolaridaformval($(row).find("td:eq(7)").text() ,'#esc_doc' );
      var esc_estatus = editEscolaridaformval($(row).find("td:eq(8)").text() , '#esc_estatus' ) ;

      var indesde= desde.substring(8, 10) + '-' + desde.substring(5, 7)  + '-' + desde.substring(0, 4)
      var inhasta= hasta.substring(8, 10)  + '-' + hasta.substring(5, 7) + '-' + hasta.substring(0, 4)

      $("#esc_instituto").val(esc_instituto);
      $("#esc_titulo").val(esc_titulo);

      $("#esc_ini_fecha").val(indesde);
      $("#esc_fin_fecha").val(inhasta);
      
      $("#esc_anos").val(esc_anos);
      $("#esc_doc").val(esc_doc);
      $("#esc_estatus").val(esc_estatus);
    }

    function editEscolaridaformval(data, select){
      return $(select+' option').filter(function(){return $(this).html() == data; }).val();
    }
    //DELETE USER
    function delEscolaridapar(id_esc){ //modal delete escolaridad
      $('#btn_del_all').attr('onClick', 'delEscolarida('+id_esc+');');
      $('#modal_del_all').modal('show');
    }
    function delEscolarida(id_esc){ //Eliminar escolaridad
    // id table #table_esc; id contador #label_find_esc      
      base_url = '../UserController/del_Usuarios_Form_Escolares/'+id_esc;
      $.ajax({
        url: base_url,                    
        type: "post",
        dataType: 'json',
        data: {data : 'delete'},
        beforeSend:function(){
          //console.log("eiminado");
          $('#modal_del_all').modal('hide');
          $("#id_esc_"+$.trim(id_esc) ).hide();
        },
        success:function(data){                        
            //*
            if (data) {    
                 if (typeof(parseInt(data) ) === "number") {
                  var row = $("#id_esc_"+$.trim(data) );
                  row.remove();
                  var trs = $("#table_esc tr").length;
                  $("#label_find_esc").text(trs-1);
                  $('#modal_del_all').modal('hide');
                 }else{
                  alert('Error de datos');
                 };
            }else{ //some error
              alert('Error de datos');
              console.log('Error de datos');
            };
            //*
        }
    });  
    } 

    //EDITAR HABILIDAD
     function editHabilidadform(id_hab){ 
     //console.log(id_hab);     
      var row = $("#id_hab_"+$.trim(id_hab) ); //table
      $("#id_hab_form").val(id_hab);
      //var hab_habilidad_des = $(row).find("td:eq(1)").text() ;
      var hab_habilidad = editHabilidadformval($(row).find("td:eq(2)").text(), '#hab_habilidad' );      
      var hab_nivel = editHabilidadformval($(row).find("td:eq(3)").text(), '#hab_nivel' );
      var hab_anos  = editHabilidadformval($(row).find("td:eq(4)").text() ,'#hab_anos' );
      //$("#hab_habilidad_des").val(hab_habilidad_des);
      $("#hab_habilidad").val(hab_habilidad);
      $("#hab_nivel").val(hab_nivel);
      $("#hab_anos").val(hab_anos);
    }

    function editHabilidadformval(data, select){
      return $(select+' option').filter(function(){return $(this).html() == data; }).val();
    }
    //ELIMINAR HABILIDAD
    function delHabilidadconfirm(id_esc){ //modal delete escolaridad
      $('#btn_del_all').attr('onClick', 'delHabilidad('+id_esc+');');
      $('#modal_del_all').modal('show');
    }
    function delHabilidad(id_hab){

      base_url = '../UserController/del_Usuarios_Form_Habilidad/'+id_hab;
      $.ajax({
        url: base_url,                    
        type: "post",
        dataType: 'json',
        data: {data : 'delete'},
        beforeSend:function(){
          //console.log("eiminado");
          $('#modal_del_all').modal('hide');
          $("#id_hab_"+$.trim(id_hab) ).hide();
        },
        success:function(data){                        
            //*
            if (data) {    
                 if (typeof(parseInt(data) ) === "number") {
                  var row = $("#id_hab_"+$.trim(data) );
                  row.remove();
                  var trs = $("#table_hab tr").length;
                  $("#label_find_hab").text(trs-1);
                  $('#modal_del_all').modal('hide');
                 }else{
                  alert('Error de datos');
                 };
            }else{ //some error
              alert('Error interno, al eliminar habilidad!');
            };
            //*
        }
    });  

    } 


    //EDITAR HABILIDAD
    function editCertificacion(id_cer){
       //console.log(id_cer);     
      var row = $("#id_cer_"+$.trim(id_cer) ); //table
      $("#id_cer_form").val(id_cer);
      //var cer_certificacion_des = $(row).find("td:eq(1)").text() ;
      var cer_certificacion = editCertificacionformval($(row).find("td:eq(2)").text(), '#cer_certificacion' );      

      var cer_ano  = editCertificacionformval($(row).find("td:eq(3)").text() ,'#cer_ano' );
      //$("#cer_certificacion_des").val(cer_certificacion_des);
      $("#cer_certificacion").val(cer_certificacion);
      $("#cer_ano").val(cer_ano);

    }
    function editCertificacionformval(data, select){
      return $(select+' option').filter(function(){return $(this).html() == data; }).val();
    }
    
    //del certificado
    function deleteCertificacionconfirm(id_esc){ //modal delete escolaridad
      $('#btn_del_all').attr('onClick', 'deleteCertificacion('+id_esc+');');
      $('#modal_del_all').modal('show');
    }
    function deleteCertificacion(id_cer){
      base_url = '../UserController/del_Usuarios_Form_Certificacion/'+id_cer;
      $.ajax({
        url: base_url,                    
        type: "post",
        dataType: 'json',
        data: {data : 'delete'},
        beforeSend:function(){
          //console.log("eiminado");
          $('#modal_del_all').modal('hide');
          $("#id_cer_"+$.trim(id_cer) ).hide();
        },
        success:function(data){                        
            //*
            if (data) {    
                 if (typeof(parseInt(data) ) === "number") {
                  var row = $("#id_cer_"+$.trim(data) );
                  row.remove();
                  var trs = $("#table_cer tr").length;
                  $("#label_find_cer").text(trs-1);
                  
                 }else{
                  alert('Error de datos');
                 };
            }else{ //some error
              alert('Error interno, al eliminar Certificado!');
            };
            //*
        }
    });  
    }

    //editar curso
    function editCursoform(id_cur){      
      //console.log(id_cur)
      var row = $("#id_cur_"+$.trim(id_cur) ); 
      $("#id_cur_form").val(id_cur);

      //var cur_curso_des = $(row).find("td:eq(1)").text();
      var cur_curso = editCursoformval($(row).find("td:eq(2)").text(), '#cur_curso' );
      var desde = $(row).find("td:eq(3)").text();
      var hasta = $(row).find("td:eq(4)").text();
      var cur_duracion = editCursoformval($(row).find("td:eq(5)").text(), '#cur_duracion' );
      var cur_instituto = editCursoformval($(row).find("td:eq(6)").text(), '#cur_instituto' );
      
      var indesde= desde.substring(8, 10) + '-' + desde.substring(5, 7)  + '-' + desde.substring(0, 4)
      var inhasta= hasta.substring(8, 10)  + '-' + hasta.substring(5, 7) + '-' + hasta.substring(0, 4)
      

      //$("#cur_curso_des").val(cur_curso_des);      
      $("#cur_curso").val(cur_curso);
      $("#cur_ini_fecha").val(indesde);
      $("#cur_fin_fecha").val(inhasta);
      $("#cur_duracion").val(cur_duracion);
      $("#cur_instituto").val(cur_instituto);
    }
    function editCursoformval(data, select){
      return $(select+' option').filter(function(){return $(this).html() == data; }).val();
    }
    function deleteCursoconfirm(id_esc){ //modal delete escolaridad
      $('#btn_del_all').attr('onClick', 'deleteCurso('+id_esc+');');
      $('#modal_del_all').modal('show');
    }

    function deleteCurso(id_cur){
      base_url = '../UserController/del_Usuarios_Form_Curso/'+id_cur;
      $.ajax({
        url: base_url,                    
        type: "post",
        dataType: 'json',
        data: {data : 'delete'},
        beforeSend:function(){
          //console.log("eiminado");
          $('#modal_del_all').modal('hide');
          $("#id_cur_"+$.trim(id_cur) ).hide();
        },
        success:function(data){                        
            //*
            if (data) {    
                 if (typeof(parseInt(data) ) === "number") {
                  var row = $("#id_cur_"+$.trim(data) );
                  row.remove();
                  var trs = $("#table_cur tr").length;
                  $("#label_find_cur").text(trs-1);
                  
                 }else{
                  alert('Error interno :(');
                 };
            }else{ //some error
              alert('Error interno, al eliminar Curso!');
            };
            //*
        }
    });  
    }

    function editExperienciaform(id_exp){
      console.log(id_exp)
      var row = $("#id_exp_"+$.trim(id_exp) ); //tabla
      $("#id_exp_form").val(id_exp);

      var exp_empresa = $(row).find("td:eq(1)").text();
      var exp_giro = $(row).find("td:eq(2)").text();
      var exp_puesto = $(row).find("td:eq(3)").text();

      var desde = $(row).find("td:eq(4)").text();
      var hasta = $(row).find("td:eq(5)").text();
   
      var exp_actividades = $(row).find("td:eq(6)").text();
      
      var indesde= desde.substring(8, 10) + '-' + desde.substring(5, 7)  + '-' + desde.substring(0, 4)
      var inhasta= hasta.substring(8, 10)  + '-' + hasta.substring(5, 7) + '-' + hasta.substring(0, 4)

      $("#exp_empresa").val(exp_empresa);   
      $("#exp_giro").val(exp_giro);
      $("#exp_puesto").val(exp_puesto);      
      $("#exp_ini_fecha").val(indesde);
      $("#exp_fin_fecha").val(inhasta);
      $("#exp_actividades").val(exp_actividades);
    }

    function deleteExperienciaconfirm(id_exp){ //modal delete escolaridad
      $('#btn_del_all').attr('onClick', 'deleteExperiencia('+id_exp+');');
      $('#modal_del_all').modal('show');
    }

    function deleteExperiencia(id_exp){
      base_url = '../UserController/del_Usuarios_Form_Experiencia/'+id_exp;
      $.ajax({
        url: base_url,                    
        type: "post",
        dataType: 'json',
        data: {data : 'delete'},
        beforeSend:function(){
          $('#modal_del_all').modal('hide');
          $("#id_exp_"+$.trim(id_exp) ).hide();
        },
        success:function(data){                        
          //*
          if (data) {    
               if (typeof(parseInt(data) ) === "number") {
                var row = $("#id_exp_"+$.trim(data) );
                row.remove();
                var trs = $("#table_exp tr").length;
                $("#label_find_exp").text(trs-1);                
               }else{
                alert('Error interno :(');
               };
          }else{ //some error
            alert('Error interno, al eliminar Experiencia!');
          };
          //*
        }
      });  

    }

    function editAreaform(id_area){
       var row = $("#id_area_"+$.trim(id_area) ); //tabla
      $("#id_area_form").val(id_area);
      var area_area = editAreaformval($(row).find("td:eq(1)").text(), '#area_area' );
      var area_subarea = editAreaformval($(row).find("td:eq(2)").text(), '#area_subarea' );
      var area_tiempo = editAreaformval($(row).find("td:eq(3)").text(), '#area_tiempo' );
   
      $("#area_area").val(area_area);
      $("#area_subarea").val(area_subarea);
      $("#area_tiempo").val(area_tiempo);
    }
    function editAreaformval(data, select){
      return $(select+' option').filter(function(){return $(this).html() == data; }).val();
    }

    function deleteAreaconfirm(id_area){ //modal delete escolaridad
      $('#btn_del_all').attr('onClick', 'deleteArea('+id_area+');');
      $('#modal_del_all').modal('show');
    }

    function deleteArea(id_area){
      base_url = '../UserController/del_Usuarios_Form_Area_Exp/'+id_area;
      $.ajax({
        url: base_url,                    
        type: "post",
        dataType: 'json',
        data: {data : 'delete'},
        beforeSend:function(){
          $('#modal_del_all').modal('hide');
          $("#id_area_"+$.trim(id_area) ).hide();
        },
        success:function(data){                        
          //*
          if (data) {    
               if (typeof(parseInt(data) ) === "number") {
                var row = $("#id_area_"+$.trim(data) );
                row.remove();
                var trs = $("#table_area tr").length;
                $("#label_find_area").text(trs-1);                
               }else{
                alert('Error interno :(');
               };
          }else{ //some error
            alert('Error interno, al eliminar area de experiencia!');
          };
          //*
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