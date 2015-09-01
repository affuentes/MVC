function listar_pais(){
    
    $.ajax({
    url: '../control/ctrl_pais.php',
    type:'POST',
    dataType: 'json',
    data: {operacion:'select_all'},
    success: function(output_string)
            {
              //alert(output_string) ; 
            for(i = 0; i < output_string.length; i++){
                $("#select_pais").append(new Option(output_string[i].Nombre, output_string[i].IdPais));                    
                }
           
            }, // End of success function of ajax form
    error: function(jqXHR, exception){
        alert('Error.\n' + jqXHR.status + ' ' + exception);
    }        
        }); // End of ajax call  
    
    
    return false;
    }

