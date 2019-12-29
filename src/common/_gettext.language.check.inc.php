<?php
    //gettext file
    
    if(isset($l)) {
        $gettext_idiomaElegido = $_GET['l'];        
    } else {
        $gettext_idiomaElegido = 'es_AR';
    }        
    $gettext_idioma = $gettext_idiomaElegido;
?>

<?php
    $l = $_GET['l'];
    
    if($l == "en_GB"){
        $gettext_idioma = 'en_GB';
    } else {
        $gettext_idioma = 'es_AR';
    };
?>