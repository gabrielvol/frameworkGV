<?php
/* * NombreDeProyecto * ========================================================
   PAGEINT Variables [/src/var/_PAGEINT.var.inc.php]
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
// _mx                  = mixin
// _act                 = activacion
// _ani                 = animacion
// _hs                  = hash
// _hover               = se usa con pseudoclases :focus y :hover
// _before              = se usa con pseudoelementos ::before
// _after               = se usa con pseudoelementos ::after

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



/* // Main ------------------------------------------------------------------ */
/*___ Elements __________________________*/
$page_construccion      = 0;
$has_form               = 0;
$has_lightbox           = 0; // REF [26]
$has_slider             = 0;
$has_pop_video          = 0;
//    $has-CUSTOMVARIABLE     = 1;
//    $lang_GB                = 1;

/*___ Titles ____________________________*/
if($l == 'en_GB'){
    if($nav_pageCurrent_id == "page-PAGEINTID"){ $page_title_id    = 'TituloEnIngles'; }
//    if($nav_pageCurrent_id == "page-PAGEINTID"){ $page_title_id    = 'TituloEnIngles'; }


} elseif($l == 'xx_XX'){
    if($nav_pageCurrent_id == "page-PAGEINTID"){ $page_title_id    = 'sinTraduccion'; }
//    if($nav_pageCurrent_id == "page-PAGEINTID"){ $page_title_id    = 'sinTraduccion'; }


} else {
    if($nav_pageCurrent_id == "page-PAGEINTID"){ $page_title_id    = 'TituloEnCastellano'; }
//    if($nav_pageCurrent_id == "page-PAGEINTID"){ $page_title_id    = 'TituloEnCastellano'; }
}

?>