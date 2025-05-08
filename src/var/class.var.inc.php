<?php
/* * NombreDeProyecto * ========================================================
   Classes Variables [/src/var/class.var.inc.php]
   ========================================================================== */

/* // Descripcion ----------------------------------------------------------- 
   Archivo de variables php para <header>, <footer> y <#main>

   #php #variables #header #main #footer #class #container

   // REF [38*] ContainerMAX width
   En las variables `$class_end_` de Header, Footer y Main se concatena la variable 
   `$containerMAX_value`, el ancho maximo de container a partir del cual deja
   de crecer en ancho

   La variable `$containerMAX_value` se declara en `[/src/var/global.var.inc.php]`
*/


/* // Model ----------------------------------------------------------------- 
    $class_ini_SECTION      = '';

if(!empty($page_int)):
    $class_ini_SECTION      .= 'class_int ';
endif; 

    $class_ini_SECTION      .= $nav_pageCurrent . ' ';

    $class_ini_SECTION      .= $nav_pageCurrent_int . ' ';

if(!empty($nav_pageCurrent_id)):
    $class_ini_SECTION      .= $nav_pageCurrent_id . ' ';
endif; 
    
if($nav_pageCurrent         == 'page_aaa'):
    $class_ini_SECTION      .= 'class_aaa ';
endif; 
    
if(!empty($has_CUSTOMVARIABLE)):
    $class_ini_SECTION      .= 'class_aaa ';
else:
    $class_ini_SECTION      .= 'class_bbb ';
endif;
    
    $class_end_SECTION      = ''; 
    
$classes_SECTION            = 'class="' . $class_ini_SECTION . $class_end_SECTION . '"';
*/

/* // Header Classes -------------------------------------------------------- */
    $class_ini_header       = 'navDrawer_closed ';

if(!empty($page_int)):
    $class_ini_header       .= 'header_int ';
endif; 

    $class_ini_header       .= 'header_' . $nav_pageCurrent . ' ';

    $class_ini_header       .= 'header_' . $nav_pageCurrent_int . ' ';

if(!empty($nav_pageCurrent_id)):
    $class_ini_header       .= 'header_' . $nav_pageCurrent_id . ' ';
endif; 

if($nav_pageCurrent         == 'page_PAGEINT'):
    $class_ini_header       .= 'error_alert error_alert_a ';
endif;
        
if($nav_pageCurrent_int     == 'page_PAGEINT_home'):
    $class_ini_header       .= 'error_alert error_alert_b ';
endif;  
    
    $class_end_header       = ' ' . $containerMAX_value; /* // REF [38*] */

if(!empty($page_redirect)):
    $class_end_header      .= 'header_redirect '; /* // REF [53*] Page redirect */
endif;  
    
$classes_header             = 'class="'. $class_ini_header . $page_header_classes . $class_end_header .'"';


/* // Footer Classes -------------------------------------------------------- */
    $class_ini_footer       = '';

if(!empty($page_int)):
    $class_ini_footer       .= 'footer_int ';
endif;

    $class_ini_footer       .= 'footer_' . $nav_pageCurrent . ' ';

    $class_ini_footer       .= 'footer_' . $nav_pageCurrent_int . ' ';

if(!empty($page_construccion)):
    $class_ini_footer       .= 'footer_construccion ';
endif; 

if(!empty($nav_pageCurrent_id)):
    $class_ini_footer       .= 'footer_' . $nav_pageCurrent_id . ' ';
endif; 
    
if($nav_pageCurrent         == 'page_PAGEINT'):
    $class_ini_footer       .= 'error_alert error_alert_a ';
endif;
    
if($nav_pageCurrent_int     == 'page_PAGEINT_home'):
    $class_ini_footer       .= 'error_alert error_alert_b ';
endif;
    
    $class_end_footer       = ' ' . $containerMAX_value; /* // REF [38*] */

if(!empty($page_redirect)):
    $class_end_footer       .= 'footer_redirect '; /* // REF [53*] Page redirect */
endif;  

$classes_footer             = 'class="' . $class_ini_footer . $class_end_footer . '"';


/* // Main Classes -------------------------------------------------------- */
    $class_ini_main         = '';

if(!empty($page_int)):
    $class_ini_main         .= 'page_int ' . $nav_pageCurrent . ' ';
else:
    $class_ini_main         .= $nav_pageCurrent . ' ';
endif; 

    $class_ini_main         .= $nav_pageCurrent_int . ' ';

if(!empty($nav_pageCurrent_id)):
    $class_ini_main         .= $nav_pageCurrent_id . ' ';
endif; 
    
    $class_end_main         = ' ' . $containerMAX_value; /* // REF [38*] */

if(!empty($page_construccion)):
    $class_end_main         .= 'page_construccion ';
endif; 

if(!empty($page_redirect)):
    $class_end_main         .= 'page_redirect '; /* // REF [53*] Page redirect */
endif; 
    
$classes_main               = 'class="' . $class_ini_main . $page_main_classes . $class_end_main . '"';
?>