<?php
/* * NombreDeProyecto * ========================================================
   Site Language Variables [/src/var/lang.var.inc.php]
   ========================================================================== */

/* // Descripcion ----------------------------------------------------------- 
   Variable para site lang, títulos y descripción de sitio

   // REF [13] Address / date_default_timezone_set
   // REF [27] Country Codes ISO 3166 / Language Codes ISO 639-1
   // REF [28] HTML lang attribute
 
   #locale #lang #meta #seo
*/

/* // Site language --------------------------------------------------------- */
$site_lang_code             = 'es'; /* // REF [13] // REF [27] */
$site_lang_code_country     = 'AR'; /* // REF [27] */
$site_lang_locale           = $site_lang_code . '_' . $site_lang_code_country;
$site_lang_HTML_attr        = $site_lang_code . '-' . $site_lang_code_country; /* // REF [28] */

?>