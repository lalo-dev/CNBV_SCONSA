
var BaseSiteContent = function() {    //validaciones site content
    var function_some = function(){
      //some code
    }
    return {
        init: function () { //iniciando
            // 
            function_some(); //declaracion de funciones  
            jQuery.fn.reset = function () {//Resetear formulario
              $(this).each (function() { this.reset(); });
            }
        }
    };
}();
    
    function load_all_alert(identificador){ //alerts 
      //console.log("llamado");
      var compensacion = $.trim($("#sup_bandera_url_sitecontet").text() );  
          base_url = compensacion+'SitecontentController/get_all_alert';
          $.ajax({
            url: base_url,                    
            type: "post",
            dataType: 'json',
            data: {get : 'alert'},
            beforeSend:function(){},
            success:function(data){  
            //console.log(data);                    
                //*           
                //console.log(data);     
                if (data) {
                  if (!$.isEmptyObject(data)) {
                    $("#list_alert").html('');
                    $.each(data, function(index, value) {  
                      var nuevaFila='<li id="id_alert_'+value.id_alert+'">';
                      nuevaFila+='<div class="font-w600">Documento pendiente: (Revisión/Corrección/Validación)</div>';
                      nuevaFila+='<div><a href="javascript:void(0)"><i class="fa fa-file-text-o"></i> Documento.pdf</a></div>';
                      nuevaFila+='<div><small class="text-muted">Solo tiene 2 días para : (Revisión/Corrección/Validación)</small></div>';       
                      nuevaFila+="</li>";
                      $("#list_alert").append(nuevaFila);
                      /*
                      check:"0" ; date_created:"2016-07-15 18:27:12"
                      estatus:"0"  ;  id_alert:"2";  id_creater:"1";  id_rev:"4";  info:"Revisar/validar"
                      */
   
                    });
                  }                        
                }else{ //some error
                  alert('Error, recargue la pagina');
                };
                //*
            }
        });   
          //fin
      }

      load_all_alert() //obtener alertas

      function openShowConsulta(open){
        
      }

// Initialize when page loads
jQuery(function(){ BaseSiteContent.init(); });















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