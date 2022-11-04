<?php
/* * NombreDeProyecto * ========================================================
   Site Language Variables [/src/var/lang.var.inc.php]
   ========================================================================== */

/* // Descripcion ----------------------------------------------------------- */
// Variable para site lang, títulos y descripción de sitio
//
// #description #lang #meta #seo #title



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



/* // Site language --------------------------------------------------------- */
$site_lang_code             = 'es'; // REF [13] // REF [27]
$site_lang_code_country     = 'AR'; // REF [27]
$site_lang_locale           = $site_lang_code . '_' . $site_lang_code_country;
$site_lang_HTML_attr        = $site_lang_code . '-' . $site_lang_code_country; // REF [28]

$l = $site_lang_HTML_attr; // REF [28]

?>