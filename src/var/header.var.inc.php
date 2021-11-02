<?php
/* * NombreDeProyecto * ========================================================
   Header Variables [/src/var/header.var.inc.php]
   ========================================================================== */

/* // Descripcion ----------------------------------------------------------- */
// Archivo de variables php para <header>
//
// #php #variables #header #class



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



/* // Header Classes -------------------------------------------------------- */
$header_class           = "navDrawer_closed";

if($page_index == 1){
    $header_class       .= ' header_index';
}

if($header_white == 1) {
    $header_class       .= ' header_white'; }
    else {
    $header_class       .= ' header_transparent';
}
        
if($nav_pageCurrent == 0){
    $header_class       .= ' header_section';
}
        
if($nav_pageCurrent_int == 000){
    $header_class       .= ' header_section';
}

if($page_desarrollos_int == 0){
    $header_class       .= ' header_section';
}

$header_classes         = 'class="'. $header_class .'"';
?>