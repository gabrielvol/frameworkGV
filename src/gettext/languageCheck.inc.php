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



$l = $_GET['l'] ?? null;

if($l === 'pt') {
    $gettext_idioma     = 'pt_BR';
    $gettext_idioma_url = '?l=pt';
    $lang_attr          = 'pt';
    $lang_class         = 'lang_PT';    
    
    $gettext_switchMsg_BR       = "Navegar no site em Portugu&ecirc;s";
    $gettext_languageName_BR    = "Portugu&ecirc;s";

} elseif($l === 'en'){
    $gettext_idioma     = 'en_GB';
//    $gettext_idioma     = 'en_US';
    
    $gettext_idioma_url = '?l=en';
    $lang_attr          = 'en';
    $lang_class         = 'lang_EN';
    
    $gettext_switchMsg_US       = "Switch to English version";
    $gettext_languageName_US    = "English";
    
    $gettext_switchMsg_GB       = "Switch to English version";
    $gettext_languageName_GB    = "English";

} elseif($l === 'de') {
    $gettext_idioma     = 'de_DE';
    $gettext_idioma_url = '?l=de';
    $lang_attr          = 'de';
    $lang_class         = 'lang_DE';
    
    $gettext_switchMsg_DE       = "Durchsuchen Sie die Website in deutscher Sprache";
    $gettext_languageName_DE    = "Deustche";

} elseif($l === 'fr') {
    $gettext_idioma     = 'fr_FR';
    $gettext_idioma_url = '?l=fr';
    $lang_attr          = 'fr';
    $lang_class         = 'lang_FR';
    
    $gettext_switchMsg_FR       = "Parcourir le site en langue fran&ccedil;aise";
    $gettext_languageName_FR    = "Fran&ccedil;aise";

} elseif($l === 'it') {
    $gettext_idioma     = 'it_IT';
    $gettext_idioma_url = '?l=it';
    $lang_attr          = 'it';
    $lang_class         = 'lang_IT';
    
    $gettext_switchMsg_IT       = "";
    $gettext_languageName_IT    = "";

} elseif ($l === 'zh') {
    $gettext_idioma     = 'zh_CN';
    $gettext_idioma_url = '?l=zh';
    $lang_attr          = 'zh-CN';
    $lang_class         = 'lang_ZH';
    
    $gettext_switchMsg_ZH       = "";
    $gettext_languageName_ZH    = "";

} else {
    $gettext_idioma     = 'es_AR';
//    $gettext_idioma     = 'es_ES';
//    $gettext_idioma     = 'es_UY';
    
    $gettext_idioma_url = '?l=es';
    $lang_attr          = 'es';
    $lang_class         = 'lang_ES';
    
    $gettext_switchMsg_AR       = "Naveg&aacute; el sitio en idioma castellano";
    $gettext_languageName_AR    = "Castellano";
    
    $gettext_switchMsg_ES       = "Navegar el sitio en idioma espa&ntilde;ol";
    $gettext_languageName_ES    = "Espa&ntilde;ol";
    
    $gettext_switchMsg_UY       = "Naveg&aacute; el sitio en idioma castellano";
    $gettext_languageName_UY    = "Castellano";
}

?>