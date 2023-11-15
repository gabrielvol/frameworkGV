<?php
/* * NombreDeProyecto * ========================================================
   Classes Variables [/src/var/classes.var.inc.php]
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



/* // Model -----------------------------------------------------------------
    $class_ini_SECTION      = '';

if(!empty($page_int)):
    $class_ini_SECTION      .= 'class_int '; endif; 

    $class_ini_SECTION      .= $nav_pageCurrent . ' ';

    $class_ini_SECTION      .= $nav_pageCurrent_int . ' ';

if(!empty($nav_pageCurrent_id)):
    $class_ini_SECTION      .= $nav_pageCurrent_id . ' '; endif; 
    
if($nav_pageCurrent         == 'page_aaa'):
    $class_ini_SECTION      .= 'class_aaa '; endif; 
    
if(!empty($has_CUSTOMVARIABLE)):
    $class_ini_SECTION      .= 'class_aaa ';
else:
    $class_ini_SECTION      .= 'class_bbb '; endif;
    
//----- Finals
    $class_end_SECTION      = ''; 
    
//-----
$classes_SECTION            = 'class="' . $class_ini_SECTION . $class_end_SECTION . '"';
 */

/* // Header Classes -------------------------------------------------------- */
    $class_ini_header       = 'navDrawer_closed ';

if(!empty($page_int)):
    $class_ini_header       .= 'header_int '; endif; 

    $class_ini_header       .= 'header_' . $nav_pageCurrent . ' ';

    $class_ini_header       .= 'header_' . $nav_pageCurrent_int . ' ';

if(!empty($nav_pageCurrent_id)):
    $class_ini_header       .= 'header_' . $nav_pageCurrent_id . ' '; endif; 

if($nav_pageCurrent         == 'page_PAGEINT'):
    $class_ini_header       .= 'error_alert error_alert_a '; endif;
        
if($nav_pageCurrent_int     == 'page_PAGEINT_home'):
    $class_ini_header       .= 'error_alert error_alert_b '; endif;  
    
//----- Finals
    $class_end_header       = '';  

if(!empty($page_redirect)):
    $class_end_header      .= 'header_redirect '; endif;  
    
//-----
$classes_header             = 'class="'. $class_ini_header . $class_end_header .'"';


/* // Footer Classes -------------------------------------------------------- */
    $class_ini_footer       = '';

if(!empty($page_int)):
    $class_ini_footer       .= 'footer_int '; endif;

    $class_ini_footer       .= 'footer_' . $nav_pageCurrent . ' ';

    $class_ini_footer       .= 'footer_' . $nav_pageCurrent_int . ' ';

if(!empty($nav_pageCurrent_id)):
    $class_ini_footer       .= 'footer_' . $nav_pageCurrent_id . ' '; endif; 
    
if($nav_pageCurrent         == 'page_PAGEINT'):
    $class_ini_footer       .= 'error_alert error_alert_a '; endif;
    
if($nav_pageCurrent_int     == 'page_PAGEINT_home'):
    $class_ini_footer       .= 'error_alert error_alert_b '; endif;
    
//----- Finals
    $class_end_footer       = '';  

if(!empty($page_redirect)):
    $class_end_footer       .= 'footer_redirect '; endif;  
    
//-----
$classes_footer             = 'class="'. $class_ini_footer . $class_end_footer .'"';


/* // Main Classes -------------------------------------------------------- */
    $class_ini_main         = '';

if(!empty($page_int)):
    $class_ini_main         .= 'page_int '. $nav_pageCurrent .' ';
else:
    $class_ini_main         .= $nav_pageCurrent .' ';
endif; 

    $class_ini_main         .= $nav_pageCurrent_int .' ';

if(!empty($nav_pageCurrent_id)):
    $class_ini_main         .= $nav_pageCurrent_id .' '; endif; 
    
//----- Finals
    $class_end_main         = 'containerA1600'; // REF [38]

if(!empty($page_construccion)):
    $class_end_main         .= 'page_construccion '; endif; 

if(!empty($page_redirect)):
    $class_end_main         .= 'page_redirect '; endif; 
    
//-----
$classes_main               = 'class="'. $class_ini_main . $page_main_classes . $class_end_main .'"';
?>