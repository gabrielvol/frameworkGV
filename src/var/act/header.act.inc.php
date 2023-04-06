<?php
/* * NombreDeProyecto * ========================================================
   Header Activators [/src/var/act/header.act.inc.php]
   ========================================================================== */

/* // Descripcion ----------------------------------------------------------- */
// Activadores para Header.
//
// #php #variables #activador #header #logo #before


/* // Listado --------------------------------------------------------------- */
// 01 _ $logo_bgImage_before_act
//
//
// 01 _ $logo_bgImage_before_act
// REF [02] `[/etc/css/custom/act/logo_act.scss]`
// Activa los if que se encuentran en `[/src/common/header.inc.php]`
//
// Genera un `div.logo_before` que envuelve al logo.



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



$logo_bgImage_before_act    = 0; // REF [02] `[/etc/css/custom/act/logo_act.scss]`

?>