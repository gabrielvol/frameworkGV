<?php
/* * NombreDeProyecto * ========================================================
   Language Check Variables [/src/gettext/languageCheck.inc.php]
   ========================================================================== */

/* // Descripcion ----------------------------------------------------------- */
// REF [14] Gettext Locales
// REF [14a] Idioma Chino ZH, MingLiu font
//
// Variables $l, $gettext_idioma y $gettext_idioma_url
// Asignación de idioma
// 
// #php #gettext



if(empty($_GET['l'])){
    $l = 'es';
} else {
    $l = $_GET['l'];
}

if($l == 'pt') {
    $gettext_idioma     = 'pt_BR';
    $gettext_idioma_url = '?l=pt';

} elseif($l == 'en'){
//    $gettext_idioma     = 'en_US';
    $gettext_idioma     = 'en_GB';
    $gettext_idioma_url = '?l=en';

} elseif($l == 'de') {
    $gettext_idioma     = 'de_DE';
    $gettext_idioma_url = '?l=de';

} elseif($l == 'fr') {
    $gettext_idioma     = 'fr_FR';
    $gettext_idioma_url = '?l=fr';

} elseif($l == 'it') {
    $gettext_idioma     = 'it_IT';
    $gettext_idioma_url = '?l=it';

} else {
//    $gettext_idioma     = 'es_ES';
//    $gettext_idioma     = 'es_UY';
    $gettext_idioma     = 'es_AR';
    $gettext_idioma_url = '?l=es';
}

?>