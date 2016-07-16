
var BaseFormValidation = function() {
  
    
    //validaciones habilidades //3er formulario
    var function_some = function(){
      function_interna('some')
     }

    var function_interna = function(data){}

    return {
        init: function () { //iniciando
            // 
            function_some(); //declaracion de metodos
            
            jQuery('.js-select2').on('change', function(){ 
                jQuery(this).valid();
            });

            jQuery.fn.reset = function () {//Resetear formulario
              $(this).each (function() { this.reset(); });
            }
        }
    };
}();
   
      function func_onclick(id_esc){}    

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