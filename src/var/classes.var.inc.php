<?php
/* * NombreDeProyecto * ========================================================
   Footer Variables [/src/var/classes.var.inc.php]
   ========================================================================== */

/* // Descripcion ----------------------------------------------------------- */
// Archivo de variables php para <header>, <footer> y <#main>
//
// #php #variables #header #main #footer #class



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



/* // Model ----------------------------------------------------------------- */
$SECTION_class              = "";

if($nav_pageCurrent         == 'page_aaa'):
    $SECTION_class          .= ' class_aaa'; endif;  
    
if($has_CUSTOMVARIABLE      == 1):
    $SECTION_class          .= ' class_aaa';
else:
    $SECTION_class          .= ' class_bbb';
endif;

$SECTION_classes            = 'class="'. $SECTION_class .'"';


/* // Header Classes -------------------------------------------------------- */
$header_class               = "navDrawer_closed ";

if($nav_pageCurrent         == 'page_index'):
    $header_class           .= ' header_index'; endif;     

if($nav_pageCurrent         == 'page_interna'):
    $header_class           .= ' error_alert error_alert_a'; endif;
        
if($nav_pageCurrent_int     == 'page_interna_home'):
    $header_class           .= ' error_alert error_alert_b'; endif;  

$header_classes             = 'class="'. $header_class .'"';


/* // Footer Classes -------------------------------------------------------- */
$footer_class               = ' ';

if($nav_pageCurrent         == 'page_index'):
    $footer_class           .= ' footer_index'; endif;   
    
if($nav_pageCurrent         == 'page_interna'):
    $footer_class           .= ' error_alert error_alert_a'; endif;
    
if($nav_pageCurrent_int     == 'page_interna_home'):
    $footer_class           .= ' error_alert error_alert_b'; endif;

$footer_classes             = 'class="'. $footer_class .'"';


/* // Main Classes -------------------------------------------------------- */
    $main_class              = '';

if($page_int                == 1):
    $main_class             .= 'page_int '. $nav_pageCurrent .' ';
else:
    $main_class             .= $nav_pageCurrent .' ';
endif;    

if(isset($nav_pageCurrent_int)):
    $main_class             .= $nav_pageCurrent_int; endif; 
    
//
    $main_class_finals      = ' ';   

if(isset($nav_pageCurrent_id)):
    $main_class_finals      .= $nav_pageCurrent_id; endif;  
    
//
$main_classes               = 'class="'. $main_class . $main_class_finals .'"';
?>