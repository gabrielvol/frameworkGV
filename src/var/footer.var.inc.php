<?php
/* * NombreDeProyecto * ========================================================
   Footer Variables [/src/var/footer.var.inc.php]
   ========================================================================== */

/* // Descripcion ----------------------------------------------------------- */
// Archivo de variables php para <footer>
//
// #php #variables #footer #class



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



/* // Footer Classes -------------------------------------------------------- */
$footer_class           = '';
    
if($nav_pageCurrent == 0):
    $footer_class       .= ' error_alert error_alert_a'; endif;
    
if($nav_pageCurrent_int == 000):
    $footer_class       .= ' error_alert error_alert_b'; endif;

if($page_index == 1):
    $footer_class       .= ' footer_index'; endif;
    
if($has_footer == 0):
    $footer_class       .= ' displayNone'; endif;

$footer_classes         = 'class="'. $footer_class .'"';
?>