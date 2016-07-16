/*
 *  Document   : base_forms_validation.js
 *  Author     : pixelcave
 *  Description: Custom JS code used in Form Validation Page
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
                'numero': { required: true, minlength: 3 },
                'usuario' : {required: true },
                'pass' : { required: true },
                'area' : { required: true },
                'cargo' : { required: true },
                'nombre' : { required: true },
                'apellidop' : { required: true },
                'area' : { required: true },
                'nivel' : { required: true }
            },messages: {},
            submitHandler: function(form){
                  //var base_url = '<?= base_url("index.php/UserController/adm_Usuarios_Form_Generales")?>'+"/"+ get_code;
                  var base_url = 'UserController/adm_Usuarios_Form_Generales';
                  //console.log($('#addusuariogenform').serialize());
                  $.ajax({
                    url: base_url,                    
                    type: "post",
                    dataType: 'json',
                    data: $(form).serialize(),
                    beforeSend:function(){
                        $( "#btn_datos_gen" ).prop( "disabled", true );
                        $( "#btn_datos_cancelar" ).prop( "disabled", true );
                        
                        if ($( "#load_datos_gen" ).hasClass( "hidden" )) {
                            $( "#load_datos_gen" ).removeClass( "hidden" );
                          };
                    },
                    success:function(data){
                        if (data) {
                            if (!$( "#load_datos_gen" ).hasClass( "hidden" )) { //quitar el load
                                $( "#load_datos_gen" ).addClass( "hidden" );
                             };
                            //
                             if (typeof(data.estatus_error) === 'undefined') { //agregado
                              //console.log(data.id_user);
                              /*if (!$( "#btn_datos_gen" ).hasClass( "hidden" )) { //ocultar agregar
                                $( "#btn_datos_gen" ).addClass( "hidden" );
                              }; */
                              if ($( "#btn_datos_gen_otro" ).hasClass( "hidden" )) { //quitar el load
                                $( "#btn_datos_gen_otro" ).removeClass( "hidden" );
                              };
                              
                              $("#id_user").val(data.id_user); //asignas valor agregado
                              //form.reset();
                             }else{ //errores de validacion
                              $( "#btn_datos_gen" ).prop( "disabled", false );
                              $( "#btn_datos_cancelar" ).prop( "disabled", false );
                               alert(data.error)
                               //console.log(data.error); 
                             };
                        }else{ //some error

                        };
                    }
                });                   
            }
        });
    };

    //validacion de datos usuario escolaridad  600 a 814
        var initValidationEscolaridad = function(){
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
                'esc_ini_dia' : { required: true },
                'esc_ini_ano' : { required: true },
                'esc_ini_mes' : { required: true },
                'esc_fin_dia' : { required: true },
                'esc_fin_mes' : { required: true },
                'esc_fin_ano' : { required: true },
                'esc_anos' : { required: true },
                'esc_doc' : { required: true },
                'esc_estatus' : { required: true },
            },messages: {},
            submitHandler: function(form){
                  //var base_url = '<?= base_url("index.php/UserController/adm_Usuarios_Form_Generales")?>'+"/"+ get_code;
                  
                  var id_user = parseInt( $("#id_user").val() ); //variable de usuario
                  var base_url = ""
                  if ( !isNaN($.trim(id_user) ) == "") { 
                    alert("¡Agregue Usuario!");
                    return false;
                  };
                  var id_esc = parseInt($("#id_esc").val() );
                  if ( !isNaN($.trim(id_esc) )== "") { // variable update
                    //base_url = 'UserController/adm_Usuarios_Form_Escolares/'+id_user;
                  }else{ //nuevo
                    //base_url = 'UserController/adm_Usuarios_Form_Escolares/'+id_user;
                  };
                  //console.log("iniciando envio");                
                  base_url = 'UserController/adm_Usuarios_Form_Escolares/'+id_user;
                  //console.log($('#addusuariogenform').serialize());
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
                    },
                    success:function(data){                      
                        if (data) {
                          $( "#btn_datos_esc" ).prop( "disabled", false );
                          if (!$( "#load_datos_esc" ).hasClass( "hidden" )) { //quitar el load
                              $( "#load_datos_esc" ).addClass( "hidden" );
                            }; 
                          $("#id_esc").val(); //limpiando variable de update                 
                             if (typeof(data.estatus_error) === 'undefined') { //agregado                             
                               
                               //console.log(data);
                              addEscolaridad(data);
                              form.reset(); //reseteo de form
                             }else{ //errores de validacion
                               alert(data.error);
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
      var fech_ini  = data.esc_ini_dia + "/" +data.esc_ini_mes + "/" +data.esc_ini_ano;
      var fech_fin  = data.esc_fin_dia + "/" +data.esc_fin_mes + "/" +data.esc_fin_ano;
      var trs =$("#table_esc tr").length;
      $("#label_find_esc").text(trs);
      //TEMPORALES
      var esc_instituto = $( "#esc_instituto option:selected" ).text();
      var esc_titulo = $( "#esc_titulo option:selected" ).text();
      var esc_doc = $( "#esc_doc option:selected" ).text();
      var esc_estatus = $( "#esc_estatus option:selected" ).text();

      var nuevaFila='<tr id="id_esc_'+data.id_esc+'">';
      nuevaFila+= '<td class="text-center hidden">'+(data.id_esc)+' </td>';
      nuevaFila+='<td class="text-center">'+(trs)+' </td>';
      //nuevaFila+='<td class="text-left">'+(data.esc_instituto)+'</td>';
      //nuevaFila+='<td class="text-left">'+(data.esc_titulo)+'</td>';
       nuevaFila+='<td class="text-left">'+(esc_instituto)+'</td>';
      nuevaFila+='<td class="text-left">'+(esc_titulo)+'</td>';
      nuevaFila+='<td class="text-center">'+(fech_ini)+'</td>';
      nuevaFila+='<td class="text-center">'+(fech_fin)+'</td>';
      nuevaFila+='<td class="text-center">'+(data.esc_anos)+'</td>';
      //nuevaFila+='<td class="text-left">'+(data.esc_doc)+'</td>';
      //nuevaFila+='<td class="text-center">'+(data.esc_estatus)+'</td>';
       nuevaFila+='<td class="text-left">'+(esc_doc)+'</td>';
      nuevaFila+='<td class="text-center">'+(esc_estatus)+'</td>';


      nuevaFila+='<td class="text-center" > <div class="btn-group">';
      nuevaFila+= '<span class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" onclick="editEscolarida('+data.id_esc+', '+trs+')" title="Editar" >';
      nuevaFila+= '<i class="fa fa-pencil"></i>';
      nuevaFila+= '</span>';
      nuevaFila+= '<button class="btn btn-danger btn-xs" type="button"  onclick="deleteEscolarida('+data.id_esc+', '+trs+')" data-toggle="tooltip" data-placement="top" title="Eliminar">';
      nuevaFila+= '<i class="fa fa-times"></i>';
      nuevaFila+= '</button>';
      nuevaFila+= '</div></td>';
              
      nuevaFila+="</tr>";
      $("#table_esc").append(nuevaFila);
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
                'hab_habilidad_des': { required: true },
                'hab_habilidad' : {required: true },
                'hab_nivel' : { required: true },
                'hab_anos' : { required: true }
            },messages: {},
            submitHandler: function(form){                 
                 var id_user = parseInt( $("#id_user").val() ); //variable de usuario
                  var base_url = "";
                  if ( !isNaN($.trim(id_user) ) == "") { 
                    alert("¡Agregue Usuario!");
                    return false;
                  };
                  var id_hab = parseInt($("#id_hab_form").val() );
                  if ( !isNaN($.trim(id_hab) )== "") { // variable update
                    //base_url = 'UserController/adm_Usuarios_Form_Escolares/'+id_user;
                  }else{ //nuevo
                    //base_url = 'UserController/adm_Usuarios_Form_Escolares/'+id_user;
                  };                  
                
                  base_url = 'UserController/adm_Usuarios_Form_Habilidad/'+id_user;

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
                               console.log(data);
                               addHabilidad(data);
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
        //fin validaciones habilidates
    var addHabilidad = function(data){ //http://www.lawebdelprogramador.com/codigo/JQuery/2279-Anadir-y-eliminar-filas-de-una-tabla-con-jquery.html
      // id table #table_hab; id contador #label_find_hab
      var habilidad = $( "#hab_habilidad option:selected" ).text();
      var hab_nivel = $( "#hab_nivel option:selected" ).text();
      var trs =$("#table_hab tr").length;
      $("#label_find_hab").text(trs);
      var nuevaFila='<tr id="id_hab_'+data.id_hab+'">';
      nuevaFila+= '<td class="text-center hidden">'+(data.id_hab)+' </td>';
      nuevaFila+='<td class="text-center">'+(trs)+' </td>';
      //nuevaFila+='<td class="text-left">'+(data.hab_habilidad)+'</td>';
      //nuevaFila+='<td class="text-center">'+(data.hab_nivel)+'</td>';
      nuevaFila+='<td class="text-left">'+(habilidad)+'</td>';
      nuevaFila+='<td class="text-center">'+(hab_nivel)+'</td>';
      nuevaFila+='<td class="text-center">'+(data.hab_anos)+'</td>';

      nuevaFila+='<td class="text-center" > <div class="btn-group">';
      nuevaFila+= '<span class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" onclick="editHabilidad('+data.id_esc+', '+trs+')" title="Editar" >';
      nuevaFila+= '<i class="fa fa-pencil"></i>';
      nuevaFila+= '</span>';
      nuevaFila+= '<button class="btn btn-danger btn-xs" type="button"  onclick="deleteEscolarida('+data.id_esc+', '+trs+')" data-toggle="tooltip" data-placement="top" title="Eliminar">';
      nuevaFila+= '<i class="fa fa-times"></i>';
      nuevaFila+= '</button>';
      nuevaFila+= '</div></td>';              
      nuevaFila+="</tr>";
      $("#table_hab").append(nuevaFila);
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
                'cer_certificacion_des': { required: true },
                'cer_certificacion' : {required: true },
                'cer_ano' : { required: true }
            },messages: {},
            submitHandler: function(form){                 
                 var id_user = parseInt( $("#id_user").val() ); //variable de usuario
                  var base_url = "";
                  if ( !isNaN($.trim(id_user) ) == "") { 
                    alert("¡Agregue Usuario!");
                    return false;
                  };
                  var id_cer = parseInt($("#id_cer_form").val() );
                  if ( !isNaN($.trim(id_cer) )== "") { // variable update
                    //base_url = 'UserController/adm_Usuarios_Form_Escolares/'+id_user;
                  }else{ //nuevo
                    //base_url = 'UserController/adm_Usuarios_Form_Escolares/'+id_user;
                  };                  
                
                  base_url = 'UserController/adm_Usuarios_Form_Certificacion/'+id_user;

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
                               //console.log(data);
                               addCertificacion(data);
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
          nuevaFila+= '<td class="text-center hidden">'+(data.id_cer)+' </td>';
          nuevaFila+='<td class="text-center">'+(trs)+' </td>';
          //nuevaFila+='<td class="text-left">'+(data.cer_certificacion)+'</td>';
          nuevaFila+='<td class="text-left">'+(certificacion)+'</td>';
          nuevaFila+='<td class="text-center">'+(data.cer_ano)+'</td>';

          nuevaFila+='<td class="text-center" > <div class="btn-group">';
          nuevaFila+= '<span class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" onclick="editCertificacion('+data.id_esc+')" title="Editar" >';
          nuevaFila+= '<i class="fa fa-pencil"></i>';
          nuevaFila+= '</span>';
          nuevaFila+= '<button class="btn btn-danger btn-xs" type="button"  onclick="deleteCertificion('+data.id_esc+')" data-toggle="tooltip" data-placement="top" title="Eliminar">';
          nuevaFila+= '<i class="fa fa-times"></i>';
          nuevaFila+= '</button>';
          nuevaFila+= '</div></td>';              
          nuevaFila+="</tr>";
          $("#table_cer").append(nuevaFila);
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
                'cur_curso_des': { required: true },
                'cur_curso' : {required: true },
                'cur_ini_dia' : { required: true },
                'cur_ini_mes' : { required: true },
                'cur_ini_ano' : { required: true },
                'cur_fin_dia' : { required: true },
                'cur_fin_mes' : { required: true },
                'cur_fin_ano' : { required: true },
                'cur_duracion' : { required: true },
                'cur_instituto' : { required: true }
            },messages: {},
            submitHandler: function(form){                 
                 var id_user = parseInt( $("#id_user").val() ); //variable de usuario
                  var base_url = "";
                  if ( !isNaN($.trim(id_user) ) == "") { 
                    alert("¡Agregue Usuario!");
                    return false;
                  };
                  var id_cur = parseInt($("#id_cur_form").val() );
                  if ( !isNaN($.trim(id_cur) )== "") { // variable update
                    //base_url = 'UserController/adm_Usuarios_Form_Escolares/'+id_user;
                  }else{ //nuevo
                    //base_url = 'UserController/adm_Usuarios_Form_Escolares/'+id_user;
                  };                
                  base_url = 'UserController/adm_Usuarios_Form_Curso/'+id_user;

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
                               //console.log(data);
                               addCurso(data);
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
      var fech_ini  = data.cur_ini_dia + "/" +data.cur_ini_mes + "/" +data.cur_ini_ano;
      var fech_fin  = data.cur_fin_dia + "/" +data.cur_fin_mes + "/" +data.cur_fin_ano;
      var cur_curso = $( "#cur_curso option:selected" ).text();
      var cur_duracion = $( "#cur_curso option:selected" ).text();
      var cur_instituto = $( "#cur_curso option:selected" ).text();
      var trs =$("#table_cur tr").length;
      $("#label_find_cur").text(trs);
      var nuevaFila='<tr id="id_esc_'+data.id_cur+'">';
      nuevaFila+= '<td class="text-center hidden">'+(data.id_cur)+' </td>';
      nuevaFila+='<td class="text-center">'+(trs)+' </td>';
      //nuevaFila+='<td class="text-left">'+(data.cur_curso)+'</td>';
      nuevaFila+='<td class="text-left">'+(cur_curso)+'</td>';
      nuevaFila+='<td class="text-center">'+(fech_ini)+'</td>';
      nuevaFila+='<td class="text-center">'+(fech_fin)+'</td>';
      //nuevaFila+='<td class="text-center">'+(data.cur_duracion)+'</td>';
      //nuevaFila+='<td class="text-left">'+(data.cur_instituto)+'</td>';
      nuevaFila+='<td class="text-center">'+(cur_duracion)+'</td>';
      nuevaFila+='<td class="text-left">'+(cur_instituto)+'</td>';

      nuevaFila+='<td class="text-center" > <div class="btn-group">';
      nuevaFila+= '<span class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" onclick="editCurso('+data.id_esc+')" title="Editar" >';
      nuevaFila+= '<i class="fa fa-pencil"></i>';
      nuevaFila+= '</span>';
      nuevaFila+= '<button class="btn btn-danger btn-xs" type="button"  onclick="deleteCurso('+data.id_esc+')" data-toggle="tooltip" data-placement="top" title="Eliminar">';
      nuevaFila+= '<i class="fa fa-times"></i>';
      nuevaFila+= '</button>';
      nuevaFila+= '</div></td>';
              
      nuevaFila+="</tr>";
      $("#table_cur").append(nuevaFila);
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
                'exp_ini_dia' : { required: true },
                'exp_ini_mes' : { required: true },
                'exp_ini_ano' : { required: true },
                'exp_fin_dia' : { required: true },
                'exp_fin_mes' : { required: true },
                'exp_fin_ano' : { required: true },
                'exp_actividades' : { required: true }
            },messages: {},
            submitHandler: function(form){                 
                 var id_user = parseInt( $("#id_user").val() ); //variable de usuario
                  var base_url = "";
                  if ( !isNaN($.trim(id_user) ) == "") { 
                    alert("¡Agregue Usuario!");
                    return false;
                  };
                  var id_exp= parseInt($("#id_exp_form").val() );
                  if ( !isNaN($.trim(id_exp) )== "") { // variable update
                    //base_url = 'UserController/adm_Usuarios_Form_Escolares/'+id_user;
                  }else{ //nuevo
                    //base_url = 'UserController/adm_Usuarios_Form_Escolares/'+id_user;
                  };                
                  base_url = 'UserController/adm_Usuarios_Form_Experiencia/'+id_user;

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
                               //console.log(data);
                               addExperiencia(data);
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
        //fin validaciones EXPERIENCIA
      var addExperiencia = function(data){ //http://www.lawebdelprogramador.com/codigo/JQuery/2279-Anadir-y-eliminar-filas-de-una-tabla-con-jquery.html
      // id table #table_esc; id contador #label_find_esc
      var fech_ini  = data.exp_ini_dia + "/" +data.exp_ini_mes + "/" +data.exp_ini_ano;
      var fech_fin  = data.exp_fin_dia + "/" +data.exp_fin_mes + "/" +data.exp_fin_ano;
      var trs =$("#table_exp tr").length;
      $("#label_find_exp").text(trs);
      var nuevaFila='<tr id="id_exp_'+data.id_cur+'">';
      nuevaFila+= '<td class="text-center hidden">'+(data.id_cur)+' </td>';
      nuevaFila+='<td class="text-center">'+(trs)+' </td>';
      nuevaFila+='<td class="text-left">'+(data.exp_empresa)+'</td>';
      nuevaFila+='<td class="text-left">'+(data.exp_giro)+'</td>';
      nuevaFila+='<td class="text-left">'+(data.exp_puesto)+'</td>';
      nuevaFila+='<td class="text-center">'+(fech_ini)+'</td>';
      nuevaFila+='<td class="text-center">'+(fech_fin)+'</td>';
      nuevaFila+='<td class="text-center">'+(data.exp_actividades)+'</td>';

      nuevaFila+='<td class="text-center" > <div class="btn-group">';
      nuevaFila+= '<span class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" onclick="editExperiencia('+data.id_esc+')" title="Editar" >';
      nuevaFila+= '<i class="fa fa-pencil"></i>';
      nuevaFila+= '</span>';
      nuevaFila+= '<button class="btn btn-danger btn-xs" type="button"  onclick="deleteExperiencia('+data.id_esc+')" data-toggle="tooltip" data-placement="top" title="Eliminar">';
      nuevaFila+= '<i class="fa fa-times"></i>';
      nuevaFila+= '</button>';
      nuevaFila+= '</div></td>';
              
      nuevaFila+="</tr>";
      $("#table_exp").append(nuevaFila);
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
                    alert("¡Agregue Usuario!");
                    return false;
                  };
                  var id_area= parseInt($("#id_area_form").val() );
                  if ( !isNaN($.trim(id_area) )== "") { // variable update
                    //base_url = 'UserController/adm_Usuarios_Form_Escolares/'+id_user;
                  }else{ //nuevo
                    //base_url = 'UserController/adm_Usuarios_Form_Escolares/'+id_user;
                  };                
                  base_url = 'UserController/adm_Usuarios_Form_Area_Exp/'+id_user;

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
                               //console.log(data);
                               addArea(data);
                              //form.reset(); //reseteo de fomr
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
      nuevaFila+= '<td class="text-center hidden">'+(data.id_area)+' </td>';
      nuevaFila+='<td class="text-center">'+(trs)+' </td>';
      /*nuevaFila+='<td class="text-left">'+(data.area_area)+'</td>';
      nuevaFila+='<td class="text-left">'+(data.area_subarea)+'</td>';
      nuevaFila+='<td class="text-left">'+(data.area_tiempo)+'</td>'; */

      nuevaFila+='<td class="text-left">'+(area_area)+'</td>';
      nuevaFila+='<td class="text-left">'+(area_subarea)+'</td>';
      nuevaFila+='<td class="text-left">'+(area_tiempo)+'</td>';

      nuevaFila+='<td class="text-center" > <div class="btn-group">';
      nuevaFila+= '<span class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" onclick="editArea('+data.id_esc+')" title="Editar" >';
      nuevaFila+= '<i class="fa fa-pencil"></i>';
      nuevaFila+= '</span>';
      nuevaFila+= '<button class="btn btn-danger btn-xs" type="button"  onclick="deleteArea('+data.id_esc+')" data-toggle="tooltip" data-placement="top" title="Eliminar">';
      nuevaFila+= '<i class="fa fa-times"></i>';
      nuevaFila+= '</button>';
      nuevaFila+= '</div></td>';
              
      nuevaFila+="</tr>";
      $("#table_area").append(nuevaFila);
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
            // Init Validation on Select2 change
            jQuery('.js-select2').on('change', function(){
                jQuery(this).valid();
            });
            //Resetear formulario
            jQuery.fn.reset = function () {
              $(this).each (function() { this.reset(); });
            }
        }
    };
}();
   
   function editEscolarida(id_esc, posicion){ //editar escolaridad
    // id table #table_esc; id contador #label_find_esc
      var row = $("#id_esc_"+$.trim(id_esc) );
      console.log(row);
      var update = row.children();
      console.log(update);
      console.log(update[0].outerText);
    }
    function delEscolarida(id_esc, posicion){ //editar escolaridad
    // id table #table_esc; id contador #label_find_esc
      var row = $("#id_esc_"+$.trim(id_esc) );
      console.log(row);
      var update = row.children();
      console.log(update[0].outerText);
    } 

    function editHabilidad(id_esc, posicion){ //editar escolaridad
    // id table #table_hab; id contador #label_find_hab
      var row = $("#id_hab_"+$.trim(id_esc) );
      console.log(row);
      var update = row.children();
      console.log(update[0].outerText); //id
    }  
    function delHabilidad(id_esc, posicion){ //editar escolaridad
    // id table #table_hab; id contador #label_find_hab
      var row = $("#id_hab_"+$.trim(id_esc) );
      console.log(row);
      var update = row.children();
      console.log(update[0].outerText); //id
    } 

    function editCertificacion(id_esc){}
    function deleteCertificion(id_esc){}

    function editCurso(id_esc){}
    function deleteCurso(id_esc){}

    function editExperiencia(id_esc){ alert(id_esc) }
    function deleteExperiencia(id_esc){}

    function editArea(id_esc){ alert(id_esc) }
    function deleteArea(id_esc){}
    

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