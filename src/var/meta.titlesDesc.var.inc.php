<?php
/* * NombreDeProyecto * ========================================================
   Titles and Descriptions Variables [/src/var/meta.titlesDesc.var.inc.php]
   ========================================================================== */

/* // Descripcion ----------------------------------------------------------- */
// Variable para site lang, títulos y descripción de sitio
//
// #description #lang #meta #seo #title



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



/* // Site titles ----------------------------------------------------------- */
// El index usa como titulo solamente $site_name_full

// Las internas componen el nombre con las variables
// $page_title_home_PAGEINT y $site_name_title
// Ej.: Nosotros | $page_title_home_laEmpresa | $site_name_title  

// La variable $page_title_home_PAGEINT tambien se usa para el item en Nav Main

if($l == 'en_GB'){    
    $site_name_full         = 'SiteNameFull';
    $site_name_short        = 'SiteNameShort';
    $site_name_title        = 'SiteNameTitle';
    $site_name_tag          = 'SiteNameTag';

//    $page_title_home_PAGEINT    = 'TituloEnIngles';
//    $page_title_home_PAGEINT    = 'TituloEnIngles';
    $page_title_home_contacto   = 'Contact';    
    $page_title_home_gracias    = 'Thank You';
    $page_title_home_copyright  = 'License';    
//    $page_title_PAGEINT_redirect  = 'redirect';
    
/*___ Nav Main items ____________________*/
    $nav_main_item_home         = 'Home';
    $nav_main_item_contacto     = $page_title_home_contacto; 
//    $nav_main_item_PAGEINT      = $page_title_home_PAGEINT;
//    $nav_main_item_PAGEINT      = $page_title_home_PAGEINT;
//    $nav_main_item_PAGEINT      = $page_title_home_PAGEINT;   
//    $nav_main_item_PAGEID       = 'TituloEnIngles_id';
    
/*___ Descripcion global ________________*/ 
    $page_desc_global       = '';


} elseif($l == 'xx_XX'){
    $site_name_full          = 'SiteNameFull';
    $site_name_short         = 'SiteNameShort';
    $site_name_title         = 'SiteNameTitle';
    $site_name_tag           = 'SiteNameTag';

//    $page_title_home_PAGEINT    = 'sinTraduccion';   
//    $page_title_home_PAGEINT    = 'sinTraduccion';   
    $page_title_home_contacto   = 'sinTraduccion';     
    $page_title_home_gracias    = 'sinTraduccion';
    $page_title_home_copyright  = 'sinTraduccion';   
//    $page_title_PAGEINT_redirect  = 'redirect';
    
/*___ Nav Main items ____________________*/
    $nav_main_item_home         = 'Home';
    $nav_main_item_contacto     = $page_title_home_contacto; 
//    $nav_main_item_PAGEINT      = $page_title_home_PAGEINT;
//    $nav_main_item_PAGEINT      = $page_title_home_PAGEINT;
//    $nav_main_item_PAGEINT      = $page_title_home_PAGEINT;   
//    $nav_main_item_PAGEID       = 'sinTraduccion_id';
    
/*___ Descripcion global ________________*/ 
    $page_desc_global        = 'sinTraduccion';


} else {    
    $site_name_full         = 'SiteNameFull';
    $site_name_short        = 'SiteNameShort';
    $site_name_title        = 'SiteNameTitle';
    $site_name_tag          = 'SiteNameTag';

//    $page_title_home_PAGEINT    = 'TituloEnCastellano';
//    $page_title_home_PAGEINT    = 'TituloEnCastellano';
    $page_title_home_contacto   = 'Contacto';    
    $page_title_home_gracias    = 'Gracias';
    $page_title_home_copyright  = 'Licencia';    
//    $page_title_PAGEINT_redirect  = 'redirect';
    
/*___ Nav Main items ____________________*/
    $nav_main_item_home         = 'Home';
    $nav_main_item_contacto     = $page_title_home_contacto; 
//    $nav_main_item_PAGEINT      = $page_title_home_PAGEINT;
//    $nav_main_item_PAGEINT      = $page_title_home_PAGEINT;
//    $nav_main_item_PAGEINT      = $page_title_home_PAGEINT;   
//    $nav_main_item_PAGEID       = 'TituloEnCastellano_id';
    
/*___ Descripcion global ________________*/ 
    $page_desc_global       = '';
}

?>