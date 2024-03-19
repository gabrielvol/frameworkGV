$(document).ready(function () {
/* // Form Actions ---------------------------------------------------------- */
    checkFields ($('.radio-list input:checked, .offices-list-map ul input:checked'));

    $('input[type="radio"]').click(function(){
        if($(this).attr("value")=="no"){
            $(".vendeinet").hide();
        }
        
        if($(this).attr("value")=="si"){
            $(".vendeinet").show();
        }               
    });

    $("#formMainID").submit(function (e) {
        var mensaje = $("#mensaje").val();

        if (mensaje.length > 200) {
            e.preventDefault();
            alert("El mensaje no puede tener más de 200 caracteres.");
        }
    });

    $('#mensaje').on('paste', function (e) {
        e.preventDefault();
        alert('No se permite pegar texto en este campo.');
    });
    
    // Disable enter key
    $('.campo_email').keydown(function(e) {
        if(e.which == 13) { return false; }
    });    
    
    // Enable enter key
    $("input[name=search]").on('keyup', function(e) {
        if(e.keyCode == 13) {
            $("#search-btn").trigger("click");
        }
    });
    
    function comprobar_email($email){ 
  	$mail_correcto = 0; 
    
        if ((strlen($email) >= 6) && (substr_count($email,"@") == 1) && (substr($email,0,1) != "@") && (substr($email,strlen($email)-1,1) != "@")){ 
            if ((!strstr($email,"'")) && (!strstr($email,"\"")) && (!strstr($email,"\\")) && (!strstr($email,"\$")) && (!strstr($email," "))) { 

                // Miro si tiene caracter . 
               if (substr_count($email,".")>= 1){ 

                  // Obtengo la terminacion del dominio 
                  $term_dom = substr(strrchr ($email, '.'),1); 
                  
                  // Compruebo que la terminacion del dominio sea correcta 
                  if (strlen($term_dom)>1 && strlen($term_dom)<5 && (!strstr($term_dom,"@")) ){
                      
                    // Compruebo que lo de antes del dominio sea correcto 
                    $antes_dom     = substr($email,0,strlen($email) - strlen($term_dom) - 1); 
                    $caracter_ult  = substr($antes_dom,strlen($antes_dom)-1,1); 
                     
                    if ($caracter_ult != "@" && $caracter_ult != "."){ 
                        $mail_correcto = 1; 
                    } 
                  } 
               } 
            } 
        } 
        return ($mail_correcto) ;
    }
});