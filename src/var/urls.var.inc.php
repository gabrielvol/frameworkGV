<?php
/* * NombreDeProyecto * ========================================================
   URL Variables [/src/var/urls.var.inc.php]
   ========================================================================== */

/* // Descripcion ----------------------------------------------------------- */
// Definición de urls y href del sitio.
//
// #url #href #hash #gettext


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



/* // Hashes ---------------------------------------------------------------- */
$hash_main          = '#main';
//$hash_inicio        = '#inicio';
//$hash_contacto      = '#contacto';
// $hash-SECCION       = '#seccion';
// $hash-SECCION       = '#seccion';
// $hash-SECCION       = '#seccion';
    
$hash_main_gettext          = '#main';
//$hash_inicio_gettext        = '#'. _('inicio');
//$hash_contacto_gettext      = '#'. _('contacto');
// $hash-PAGINA-gettext         = '#'. _('seccion');
// $hash-PAGINA-gettext         = '#'. _('seccion');
// $hash-PAGINA-gettext         = '#'. _('seccion'); 

    
    
/* // url ------------------------------------------------------------------- */
$url_root           = $url_entorno .'/';
$url_logo           = $url_root;
$url_index          = $url_entorno .'/index.php';       // $nav_pageCurrent 1
//$url_inicio         = $url_entorno .'/inicio.php';      // $nav_pageCurrent 2
$url_contacto       = $url_entorno .'/contacto.php';    // $nav_pageCurrent 3
//$url_gracias        = $url_entorno .'/gracias.php';     // $nav_pageCurrent 4
// $url-PAGINA         = $url_entorno .'/pagina.php';      // $nav_pageCurrent 0
// $url-PAGINA         = $url_entorno .'/pagina.php';      // $nav_pageCurrent 0
// $url-PAGINA         = $url_entorno .'/pagina.php';      // $nav_pageCurrent 0

$url_main_hs        = $url_entorno .'/'. $hash_main;
//$url_inicio_hs      = $url_entorno .'/'. $hash_inicio;
//$url_contacto_hs    = $url_entorno .'/'. $hash_contacto;
// $url-SECCION-hs     = $url_entorno .'/'. $hash_SECCION;
// $url-SECCION-hs     = $url_entorno .'/'. $hash_SECCION;
// $url-SECCION-hs     = $url_entorno .'/'. $hash_SECCION; 

$url_root           = $url_entorno .'/'. $gettext_idioma_url;
$url_logo           = $url_root;
$url_index          = $url_entorno .'/index.php'. $gettext_idioma_url;       // $nav_pageCurrent 1
//$url_inicio         = $url_entorno .'/inicio.php'. $gettext_idioma_url;    // $nav_pageCurrent 2
$url_contacto       = $url_entorno .'/contacto.php'. $gettext_idioma_url;    // $nav_pageCurrent 3
//$url_gracias        = $url_entorno .'/gracias.php'. $gettext_idioma_url;     // $nav_pageCurrent 4
// $url-PAGINA         = $url_entorno .'/pagina.php'. $gettext_idioma_url;      // $nav_pageCurrent 0
// $url-PAGINA         = $url_entorno .'/pagina.php'. $gettext_idioma_url;      // $nav_pageCurrent 0
// $url-PAGINA         = $url_entorno .'/pagina.php'. $gettext_idioma_url;      // $nav_pageCurrent 0

$url_main_hs        = $url_entorno .'/'. $gettext_idioma_url . $hash_main;
//$url_inicio_hs      = $url_entorno .'/'. $gettext_idioma_url . $hash_inicio;
//$url_contacto_hs    = $url_entorno .'/'. $gettext_idioma_url . $hash_contacto;
// $url-SECCION-hs     = $url_entorno .'/'. $gettext_idioma_url . $hash_SECCION;
// $url-SECCION-hs     = $url_entorno .'/'. $gettext_idioma_url . $hash_SECCION;
// $url-SECCION-hs     = $url_entorno .'/'. $gettext_idioma_url . $hash_SECCION;

$url_main_hs_gettext            = $url_entorno .'/'. $gettext_idioma_url . $hash_main_gettext;
//$url_inicio_hs_gettext          = $url_entorno .'/'. $gettext_idioma_url . $hash_inicio_gettext;
//$url_contacto_hs_gettext        = $url_entorno .'/'. $gettext_idioma_url . $hash_contacto_gettext;
// $url-PAGINA-hs_gettext          = $url_entorno .'/'. $gettext_idioma_url . $hash_PAGINA_gettext;
// $url-PAGINA-hs_gettext          = $url_entorno .'/'. $gettext_idioma_url . $hash_PAGINA_gettext;
// $url-PAGINA-hs_gettext          = $url_entorno .'/'. $gettext_idioma_url . $hash_PAGINA_gettext;

$url_main_hs_INICIO             = $url_inicio . $hash_main; 
//$url_inicio_hs_INICIO           = $url_inicio . $hash_inicio;
//$url_contacto_hs_INICIO         = $url_inicio . $hash_contacto; 
// $url-SECCION-hs-PAGINA          = $url_PAGINA . $hash_SECCION;
// $url-SECCION-hs-PAGINA          = $url_PAGINA . $hash_SECCION;
// $url-SECCION-hs-PAGINA          = $url_PAGINA . $hash_SECCION; 
    
$url_main_hs_INICIO_gettext     = $url_inicio . $url_main_hs_gettext;
//$url_inicio_hs_INICIO_gettext   = $url_inicio . $url_inicio_hs_gettext;
//$url_contacto_hs_INICIO_gettext = $url_inicio . $url_contacto_hs_gettext;
// $url-PAGINA-hs-PAGINA-gettext   = $url_PAGINA . $hash_PAGINA_gettext;
// $url-PAGINA-hs-PAGINA-gettext   = $url_PAGINA . $hash_PAGINA_gettext;
// $url-PAGINA-hs-PAGINA-gettext   = $url_PAGINA . $hash_PAGINA_gettext;
  

    
/* // global urls / full urls ----------------------------------------------- */
$url_global_full        = $url_global . $url_entorno;

$url_index_full         = $url_global . $url_index;
//$url_inicio_full        = $url_global . $url_inicio;
$url_contacto_full      = $url_global . $url_contacto;
$url_gracias_full       = $url_global . $url_gracias;
// $url-PAGINA-full        = $url_global . $url_PAGINA;
// $url-PAGINA-full        = $url_global . $url_PAGINA;
// $url-PAGINA-full        = $url_global . $url_PAGINA;

//$url_inicio_hs_INICIO_full_gettext    = $url_global . $url_inicio . $hash_inicio_gettext;
//$url_contacto_hs_INICIO_full_gettext  = $url_global . $url_inicio . $hash_contacto_gettext;
// $url-PAGINA-hs-PAGINA-full_gettext    = $url_global . $url_PAGINA . $url_PAGINA_gettext;
// $url-PAGINA-hs-PAGINA-full_gettext    = $url_global . $url_PAGINA . $url_PAGINA_gettext;
// $url-PAGINA-hs-PAGINA-full_gettext    = $url_global . $url_PAGINA . $url_PAGINA_gettext;

$url_openGraph_global   = $url_global_full;
    
    
/* // href ------------------------------------------------------------------ */
$href_root          = 'href="'. $url_root .'"'; 
$href_logo          = $href_root;
$href_index         = 'href="'. $url_index .'"';
$href_contacto      = 'href="'. $url_contacto .'"';
$href_contacto      = ($nav_pageCurrent == 1) ? 'href="'. $url_contacto_hs .'"' : 'href="'. $url_contacto_hs_INICIO.'"';
// $href-PAGINA        = 'href="'. $url_PAGINA .'"';
// $href-PAGINA        = 'href="'. $url_PAGINA .'"';
// $href-PAGINA        = 'href="'. $url_PAGINA .'"';
    
$href_main_hs       = 'href="'. $url_main_hs .'"';
//$href_inicio_hs     = 'href="'. $url_inicio_hs .'"';
//$href_contacto_hs   = 'href="'. $url_contacto_hs .'"';
// $href-SECCION-hs    = 'href="'. $url_SECCION_hs .'"';
// $href-SECCION-hs    = 'href="'. $url_SECCION_hs .'"';
// $href-SECCION-hs    = 'href="'. $url_SECCION_hs .'"';

$href_main_hs_INICIO       = 'href="'. $url_main_hs_INICIO .'"';
//$href_inicio_hs_INICIO       = 'href="'. $url_inicio_hs_INICIO .'"';
//$href_contacto_hs_INICIO     = 'href="'. $url_contacto_hs_INICIO .'"';
// $href-SECCION-hs-PAGINA      = 'href="'. $url_SECCION_hs_PAGINA .'"';
// $href-SECCION-hs-PAGINA      = 'href="'. $url_SECCION_hs_PAGINA .'"';
// $href-SECCION-hs-PAGINA      = 'href="'. $url_SECCION_hs_PAGINA .'"';
     
$url_main_hs_full_gettext       = $url_global . $url_main_hs_gettext;
//$url_inicio_hs_full_gettext     = $url_global . $url_inicio_hs_gettext;
//$url_contacto_hs_full_gettext   = $url_global . $url_contacto_hs_gettext;
// $url-PAGINA-hs_full_gettext     = $url_global . $url_PAGINA_gettext;
// $url-PAGINA-hs_full_gettext     = $url_global . $url_PAGINA_gettext;
// $url-PAGINA-hs_full_gettext     = $url_global . $url_PAGINA_gettext;

$url_main_hs_INICIO_full_gettext        = $url_global . $url_index . $hash_main_gettext;
//$url_inicio_hs_INICIO_full_gettext      = $url_global . $url_index . $hash_inicio_gettext;
//$url_contacto_hs_INICIO_full_gettext    = $url_global . $url_index . $hash_contacto_gettext;
// $url-PAGINA-hs-PAGINA-full_gettext      = $url_global . $url_PAGINA . $url_PAGINA_gettext;
// $url-PAGINA-hs-PAGINA-full_gettext      = $url_global . $url_PAGINA . $url_PAGINA_gettext;
// $url-PAGINA-hs-PAGINA-full_gettext      = $url_global . $url_PAGINA . $url_PAGINA_gettext;
    
/* // misc / experimental --------------------------------------------------- */
    
// $url_actual     = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>