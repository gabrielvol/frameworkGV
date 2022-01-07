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
    $class_ini_SECTION      = '';

if($nav_pageCurrent         == 'page_aaa'):
    $class_ini_SECTION      .= 'class_aaa '; endif;  
    
if($has_CUSTOMVARIABLE      == 1):
    $class_ini_SECTION      .= 'class_aaa ';
else:
    $class_ini_SECTION      .= 'class_bbb ';
endif;
    
//----- Finals
    $class_end_SECTION      = ''; 
    
//-----
$classes_SECTION            = 'class="'. $class_ini_SECTION . $class_end_SECTION .'"';


/* // Header Classes -------------------------------------------------------- */
    $class_ini_header       = 'navDrawer_closed ';

if($nav_pageCurrent         == 'page_index'):
    $class_ini_header       .= 'header_index '; endif;  

if($nav_pageCurrent         == 'page_interna'):
    $class_ini_header       .= 'error_alert error_alert_a '; endif;
        
if($nav_pageCurrent_int     == 'page_interna_home'):
    $class_ini_header       .= 'error_alert error_alert_b '; endif;  
    
//----- Finals
    $class_end_header       = '';  
    
//-----
$classes_header             = 'class="'. $class_ini_header . $class_end_header .'"';


/* // Footer Classes -------------------------------------------------------- */
    $class_ini_footer       = '';

if($nav_pageCurrent         == 'page_index'):
    $class_ini_footer       .= 'footer_index '; endif;
    
if($nav_pageCurrent         == 'page_interna'):
    $class_ini_footer       .= 'error_alert error_alert_a '; endif;
    
if($nav_pageCurrent_int     == 'page_interna_home'):
    $class_ini_footer       .= 'error_alert error_alert_b '; endif;
    
//----- Finals
    $class_end_footer       = '';  
    
//-----
$classes_footer             = 'class="'. $class_ini_footer . $class_end_footer .'"';


/* // Main Classes -------------------------------------------------------- */
    $class_ini_main         = '';

if($page_int                == 1):
    $class_ini_main         .= 'page_int '. $nav_pageCurrent .' ';
else:
    $class_ini_main         .= $nav_pageCurrent .' ';
endif; 

if(isset($nav_pageCurrent_int)):
    $class_ini_main         .= $nav_pageCurrent_int .' '; endif; 
    
//----- Finals
    $class_end_main         = '';   

if(isset($nav_pageCurrent_id)):
    $class_end_main         .= $nav_pageCurrent_id .' '; endif;

if($page_construccion == 1):
    $class_end_main         .= 'page_construccion '; endif; 
    
//-----
$classes_main               = 'class="'. $class_ini_main . $class_end_main .'"';
?>