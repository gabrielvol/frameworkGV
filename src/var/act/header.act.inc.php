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
// mq                   = media query @media
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



$logo_bgImage_before_act    = 0; // REF [02] `[/etc/css/custom/act/logo_act.scss]`

?>