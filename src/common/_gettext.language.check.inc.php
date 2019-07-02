<?php
    $l = $_GET['l'];
    
    if(isset($l)) {
        $gettext_idiomaElegido = $_GET['l'];        
    } else {
        $gettext_idiomaElegido = 'es_AR';
    }        
    $gettext_idioma = $gettext_idiomaElegido;
?>

<?php
    $l = $_GET['l'];
    
    if($l == "en"){
        include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/gettext.language.set.en.inc.php');
    } else {
        include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/gettext.language.set.es.inc.php');
    };
?>