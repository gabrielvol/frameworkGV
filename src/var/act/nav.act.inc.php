<?php
/* * NombreDeProyecto * ========================================================
   Navigation Activators [/src/var/act/nav.act.inc.php]
   ========================================================================== */

/* // Descripcion ----------------------------------------------------------- */
// Activadores para Nav.
//
// #php #variables #activador #nav


/* // Listado --------------------------------------------------------------- */
// 01 _ $nav_drawer_act
// 02 _ $nav_SECTION_hasSub_act
// 03 _ $nav_accordion_act
// 04 _ $nav_double_AT_act
//
//



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



/*___ /common/nav.main.inc.php ____________*/
/*___ /etc/custom/act/section_nav_act.scss _*/
$nav_drawer_act         = 1; // REF [06]
$nav_SECTION_hasSub_act = 0; // REF [07]
$nav_accordion_act      = 0;

// Si se activa `$nav_double_AT_act` hay que activar `$classes_container_act_AT` en `[/etc/css/custom/act/classes_useful_act.scss]`
$nav_double_AT_act      = 0; // REF [05] `[/src/common/nav.main.inc.php]`
?>