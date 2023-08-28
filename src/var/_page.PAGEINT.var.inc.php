<?php
/* * NombreDeProyecto * ========================================================
   PAGEINT Variables [/src/var/page.PAGEINT.var.inc.php]
   ========================================================================== */

/* // Descripcion ----------------------------------------------------------- */



/* // Referencias globales de nombres de variables y mixins ----------------- */
///-- Inicio del nombre
// bd                   = borde
// bg                   = fondo / background
// bx                   = box
// ft                   = fuente
// mq, MQ               = media query @media
// tx                   = texto

///-- Fin del nombre
// _before              = se usa con pseudo-elementos ::before
// _after               = se usa con pseudo-elementos ::after
// _act                 = activacion
// _ani                 = animacion
// _hover               = se usa con pseudo-clases :focus y :hover
// _hs                  = hash
// _imp			= importacion
// _mx                  = mixin

///-- Espaciado
// P, M                 = padding, margin
// T, R, B, L           = top, right, bottom, left
// H, V, A, X           = horizontal, vertical, all, custom defined

///-- Tamanos de Pantalla
// M, T, D, DL          = mobile, tablet, desktop, desktop large
// B, A, O, L           = before, after, only, landscape

///-- Colores
// X, L, D              = extra, light, dark
// De, S, B             = desaturated, semi, bright

///-- Fuentes
// T, L, M, R, B, BK    = thin, light, medium, regular, bold, black
// X, S, U, C, I        = extra, semi, ultra, condensed, italic



/*___ Titles ____________________________*/
// Ej.:
// $pageRecetas_title_huevoFrito    = 'Cómo hacer un exquisito huevo frito';
// $page_heading_id                 = '';

if($l == 'en_GB'){
    $PAGEINT_title_PAGEID    = 'TituloPagID_GB';
//    $PAGEINT_title_PAGEID    = 'TituloPagID_GB';
//    $PAGEINT_title_PAGEID    = 'TituloPagID_GB';
    
    if($nav_pageCurrent_id == "page_PAGEINT_ID"){
        $page_title_id          = $PAGEINT_title_PAGEID;
        $page_heading_id        = $PAGEINT_title_PAGEID; }
        
//    if($nav_pageCurrent_id == "page_PAGEINT_ID"){
//      $page_title_id        = $PAGEINT_title_PAGEID;
//      $page_heading_id      = $PAGEINT_title_PAGEID; }


} elseif($l == 'xx_XX'){
    $PAGEINT_title_PAGEID    = 'sinTraduccion';
//    $PAGEINT_title_PAGEID    = 'sinTraduccion';
//    $PAGEINT_title_PAGEID    = 'sinTraduccion';
    
    $nav_main_item_PAGEINTID    = '';

    if($nav_pageCurrent_id == "page_PAGEINT_ID"){
        $page_title_id      = $PAGEINT_title_PAGEID;
        $page_heading_id        = $PAGEINT_title_PAGEID; }
        
//    if($nav_pageCurrent_id == "page_PAGEINT_ID"){
//      $page_title_id        = $PAGEINT_title_PAGEID;
//      $page_heading_id      = $PAGEINT_title_PAGEID; }


} else {
    $PAGEINT_title_PAGEID       = 'TituloPagID';
//    $PAGEINT_title_PAGEID       = 'TituloPagID';
//    $PAGEINT_title_PAGEID       = 'TituloPagID';
    
    if($nav_pageCurrent_id == "page_PAGEINT_ID"){
        $page_title_id      = $PAGEINT_title_PAGEID;
        $page_heading_id        = $PAGEINT_title_PAGEID; }
        
//    if($nav_pageCurrent_id == "page_PAGEINT_ID"){
//      $page_title_id        = $PAGEINT_title_PAGEID;
//      $page_heading_id      = $PAGEINT_title_PAGEID; }
}

?>