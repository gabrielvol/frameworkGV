<?php
    //gettext file
    
/*
    if(isset($l)) {
        $gettext_idiomaElegido = $_GET['l'];        
    } else {
        $gettext_idiomaElegido = 'es_AR';
    }        
    $gettext_idioma = $gettext_idiomaElegido;
*/
?>

<?php
    $l = $_GET['l'];
    
    if($l == 'en_GB'){
        $gettext_idioma     = 'en_GB';
        $gettext_idioma_url = '?l=en_GB';
        
    } elseif($l == 'it_IT') {
        $gettext_idioma     = 'it_IT';
        $gettext_idioma_url = '?l=it_IT';
        
    } elseif($l == 'de_DE') {
        $gettext_idioma     = 'de_DE';
        $gettext_idioma_url = '?l=de_DE';
        
    } elseif($l == 'fr_FR') {
        $gettext_idioma     = 'fr_FR';
        $gettext_idioma_url = '?l=fr_FR';
        
    } elseif($l == 'pt_BR') {
        $gettext_idioma     = 'pt_BR';
        $gettext_idioma_url = '?l=pt_BR';
        
    } else {
        $gettext_idioma     = 'es_AR';
        $gettext_idioma_url = '?l=es_AR';
    }
/* 
*/
?>