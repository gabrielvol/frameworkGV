<?php
/* * NombreDeProyecto * ========================================================
   PAGEINT Variables [/src/var/page.PAGEINT.var.inc.php]
   ========================================================================== */

/* // Descripcion ----------------------------------------------------------- */

// REF [26] Lightbox
// REF [36] Form variables
// REF [50] Google captcha



/* // Variables en comun para las paginas internas de PAGEINT --------------- */
$page_construccion      = 0;
$page_redirect          = 0;

$has_form               = 0; // REF [36] Form variables

/* // Form identifier global ------------------------------------------------ *
// La variable $form_id puede ser declarada de tres formas:
// 
// 1- De manera global en `[/src/var/form.var.inc.php]` para todo el sitio
// 2- En el archivo `[/src/var/page.PAGEINT.var.inc.php]` para un grupo de paginas
// 3- En la pagina donde va a ser usado
// 
// $form_id = 'formMainID'; // REF [36] Form variables
// $form_id_spelled = 'Contactanos';
*/

$has_lightbox           = 0; // REF [26]
$has_pop_video          = 0;
$has_scrolling          = 1;
$has_slider             = 0;
//    $has-CUSTOMVARIABLE     = 0;
//    $lang_GB                = 1;



/* // Titles ---------------------------------------------------------------- */
// Ej.:
// $pageRecetas_title_huevoFrito    = 'Cómo hacer un exquisito huevo frito';
// $page_heading_id                 = '';

if(isset($gettext_idioma)){ if($gettext_idioma == 'en_GB'){
    $PAGEINT_title_PAGEID    = 'TituloPagID_GB';
/*
    $PAGEINT_title_PAGEID    = 'TituloPagID_GB';
    $PAGEINT_title_PAGEID    = 'TituloPagID_GB';
*/

    if($nav_pageCurrent_id == "page_PAGEINT_ID"){
        $page_title_id          = $PAGEINT_title_PAGEID;
        $page_heading_id        = $PAGEINT_title_PAGEID; }
/*
    if($nav_pageCurrent_id == "page_PAGEINT_ID"){
      $page_title_id        = $PAGEINT_title_PAGEID;
      $page_heading_id      = $PAGEINT_title_PAGEID; }
*/


} elseif($gettext_idioma == 'xx_XX'){
    $PAGEINT_title_PAGEID    = 'sinTraduccion';
/*
    $PAGEINT_title_PAGEID    = 'sinTraduccion';
    $PAGEINT_title_PAGEID    = 'sinTraduccion';
*/
    
    $nav_main_item_PAGEINTID    = '';

    if($nav_pageCurrent_id == "page_PAGEINT_ID"){
        $page_title_id      = $PAGEINT_title_PAGEID;
        $page_heading_id        = $PAGEINT_title_PAGEID; }
/*
    if($nav_pageCurrent_id == "page_PAGEINT_ID"){
      $page_title_id        = $PAGEINT_title_PAGEID;
      $page_heading_id      = $PAGEINT_title_PAGEID; }
*/    


} else {
    $PAGEINT_title_PAGEID       = 'TituloPagID';
/*
    $PAGEINT_title_PAGEID       = 'TituloPagID';
    $PAGEINT_title_PAGEID       = 'TituloPagID';
*/    
    
    if($nav_pageCurrent_id == "page_PAGEINT_ID"){
        $page_title_id      = $PAGEINT_title_PAGEID;
        $page_heading_id    = $PAGEINT_title_PAGEID; }

/*
    if($nav_pageCurrent_id == "page_PAGEINT_ID"){
      $page_title_id        = $PAGEINT_title_PAGEID;
      $page_heading_id      = $PAGEINT_title_PAGEID; }
*/    
} }

?>