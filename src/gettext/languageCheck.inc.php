<?php
/* * NombreDeProyecto * ========================================================
   Language Check Variables [/src/gettext/languageCheck.inc.php]
   ========================================================================== */

/* // Descripcion ----------------------------------------------------------- */
// REF [14] Gettext Locales
// REF [14a] Idioma Chino ZH, MingLiu font
//
// Variables $l, $gettext_lang y $gettext_lang_url
// Asignación de idioma
// 
// #php #gettext



$l = $_GET['l'] ?? null;
$gettext_act = 1;

if($l === 'pt') {
    $site_lang_code             = 'pt'; // REF [13] // REF [27]
    $site_lang_code_country     = 'BR'; // REF [27]
    $site_lang_locale           = $site_lang_code .'_'. $site_lang_code_country;
    $site_lang_HTML_attr        = $site_lang_code .'-'. $site_lang_code_country; // REF [28]

    $gettext_lang             = $site_lang_locale;
    $gettext_lang_url         = '?l=' . $site_lang_code;
    $gettext_class            = 'lang_' . $site_lang_code_country;  
    
    $gettext_lang_msg_switch_BR       = "Navegar no site em Portugu&ecirc;s";
    $gettext_lang_name_BR    = "Portugu&ecirc;s";
    
    

} elseif($l === 'en'){
    $site_lang_code             = 'en'; // REF [13] // REF [27]
    $site_lang_code_country     = 'GB'; // REF [27]
    //$site_lang_code_country     = 'US'; // REF [27]
    $site_lang_locale           = $site_lang_code .'_'. $site_lang_code_country;
    $site_lang_HTML_attr        = $site_lang_code .'-'. $site_lang_code_country; // REF [28]

    $gettext_lang             = $site_lang_locale;
    $gettext_lang_url         = '?l=' . $site_lang_code;
    $gettext_class            = 'lang_' . $site_lang_code_country;
    
    $gettext_lang_msg_switch_US       = "Switch to English version";
    $gettext_lang_name_US    = "English";
    
    $gettext_lang_msg_switch_GB       = "Switch to English version";
    $gettext_lang_name_GB    = "English";
    
    

} elseif($l === 'de') {
    $site_lang_code             = 'de'; // REF [13] // REF [27]
    $site_lang_code_country     = 'DE'; // REF [27]
    $site_lang_locale           = $site_lang_code .'_'. $site_lang_code_country;
    $site_lang_HTML_attr        = $site_lang_code .'-'. $site_lang_code_country; // REF [28]

    $gettext_lang             = $site_lang_locale;
    $gettext_lang_url         = '?l=' . $site_lang_code;
    $gettext_class            = 'lang_' . $site_lang_code_country;
    
    $gettext_lang_msg_switch_DE       = "Durchsuchen Sie die Website in deutscher Sprache";
    $gettext_lang_name_DE    = "Deustche";
    
    $gettext_lang_msg_switch_DE       = "Durchsuchen Sie die Website in deutscher Sprache";
    $gettext_lang_name_DE    = "Deustche";
    
    

} elseif($l === 'fr') {
    $site_lang_code             = 'fr'; // REF [13] // REF [27]
    $site_lang_code_country     = 'FR'; // REF [27]
    $site_lang_locale           = $site_lang_code .'_'. $site_lang_code_country;
    $site_lang_HTML_attr        = $site_lang_code .'-'. $site_lang_code_country; // REF [28]

    $gettext_lang             = $site_lang_locale;
    $gettext_lang_url         = '?l=' . $site_lang_code;
    $gettext_class            = 'lang_' . $site_lang_code_country;
    
    $gettext_lang_msg_switch_FR       = "Parcourir le site en langue fran&ccedil;aise";
    $gettext_lang_name_FR    = "Fran&ccedil;aise";
    
    

} elseif($l === 'it') {
    $site_lang_code             = 'it'; // REF [13] // REF [27]
    $site_lang_code_country     = 'IT'; // REF [27]
    $site_lang_locale           = $site_lang_code .'_'. $site_lang_code_country;
    $site_lang_HTML_attr        = $site_lang_code .'-'. $site_lang_code_country; // REF [28]

    $gettext_lang             = $site_lang_locale;
    $gettext_lang_url         = '?l=' . $site_lang_code;
    $gettext_class            = 'lang_' . $site_lang_code_country;
    
    $gettext_lang_msg_switch_IT       = "";
    $gettext_lang_name_IT    = "";
    
    

} elseif ($l === 'zh') {
    $site_lang_code             = 'zh'; // REF [13] // REF [27]
    $site_lang_code_country     = 'CN'; // REF [27]
    $site_lang_locale           = $site_lang_code .'_'. $site_lang_code_country;
    $site_lang_HTML_attr        = $site_lang_code .'-'. $site_lang_code_country; // REF [28]

    $gettext_lang             = $site_lang_locale;
    $gettext_lang_url         = '?l=' . $site_lang_code;
    $gettext_class            = 'lang_' . $site_lang_code_country;
    
    $gettext_lang_msg_switch_ZH       = "浏览网站的中文版本。";
    $gettext_lang_name_ZH    = "中文";

    
    
} else {
    $site_lang_code             = 'es'; // REF [13] // REF [27]
    $site_lang_code_country     = 'AR'; // REF [27]
    //$site_lang_code_country     = 'ES'; // REF [27]
    //$site_lang_code_country     = 'UY'; // REF [27]
    $site_lang_locale           = $site_lang_code .'_'. $site_lang_code_country;
    $site_lang_HTML_attr        = $site_lang_code .'-'. $site_lang_code_country; // REF [28]

    $gettext_lang             = $site_lang_locale;
    $gettext_lang_url         = '?l=' . $site_lang_code;
    $gettext_class            = 'lang_' . $site_lang_code_country;
    
    $gettext_lang_msg_switch_AR       = "Naveg&aacute; el sitio en idioma castellano";
    $gettext_lang_name_AR    = "Castellano";
    
    $gettext_lang_msg_switch_ES       = "Navegar el sitio en idioma espa&ntilde;ol";
    $gettext_lang_name_ES    = "Espa&ntilde;ol";
    
    $gettext_lang_msg_switch_UY       = "Naveg&aacute; el sitio en idioma castellano";
    $gettext_lang_name_UY    = "Castellano";
}

?>