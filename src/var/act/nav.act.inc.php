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



/*___ /common/nav.main.inc.php ____________*/
/*___ /etc/custom/act/section_nav_act.scss _*/
$nav_drawer_act         = 1;    
$nav_SECTION_hasSub_act = 0;    
$nav_accordion_act      = 0;

// Si se activa `$nav_double_AT_act` hay que activar `$classes_container_act_AT` en `[/etc/css/custom/act/classes_useful_act.scss]`
$nav_double_AT_act      = 0;    
?> 