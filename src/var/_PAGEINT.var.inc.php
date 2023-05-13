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
$PAGEINTID_title_PAGEID_GB    = 'TituloPagID_GB';

$PAGEINTID_title_PAGEID_XX    = 'sinTraduccion';

$PAGEINTID_title_PAGEID       = 'TituloPagID';

if($l == 'en_GB'){
    if($nav_pageCurrent_id == "page-PAGEINTID"){ $page_title_id    = $PAGEINTID_title_PAGEID_GB; }
//    if($nav_pageCurrent_id == "page-PAGEINTID"){ $page_title_id    = $PAGEINTID_title_PAGEID_GB; }


} elseif($l == 'xx_XX'){
    if($nav_pageCurrent_id == "page-PAGEINTID"){ $page_title_id    = $PAGEINTID_title_PAGEID_XX; }
//    if($nav_pageCurrent_id == "page-PAGEINTID"){ $page_title_id    = $PAGEINTID_title_PAGEID_XX; }


} else {
    if($nav_pageCurrent_id == "page-PAGEINTID"){ $page_title_id    = $PAGEINTID_title_PAGEID; }
//    if($nav_pageCurrent_id == "page-PAGEINTID"){ $page_title_id    = $PAGEINTID_title_PAGEID; }
}

?>