<?php
/* * NombreDeProyecto * ========================================================
   Meta Variables [/src/var/meta.var.inc.php]
   ========================================================================== */

/* // Descripcion ----------------------------------------------------------- */
// Variable para site lang, datos de open graph, títulos y descripción de sitio
//
// #description #lang #meta #openGraph #title



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



/* // Site language --------------------------------------------------------- */
$site_lang_code             = 'es'; // REF [13] // REF [27]
$site_lang_code_country     = 'AR'; // REF [27]
$site_lang_locale           = $site_lang_code .'_'. $site_lang_code_country;
$site_lang_HTML_attr        = $site_lang_code .'-'. $site_lang_code_country; // REF [28]


/* // Site titles ----------------------------------------------------------- */
// El index usa solamente $site_name_full
// Las internas usan el nombre de la pagina seguido de $site_name_title
// Ej.: Contacto | SECTION | $site_name_title

$site_name_full             = 'SiteNameFull';
$site_name_short            = 'SiteNameShort';
$site_name_title            = 'SiteNameTitle';
$site_name_tag              = 'SiteNameTag';

$site_name_full_GB          = 'SiteNameFull';
$site_name_short_GB         = 'SiteNameShort';
$site_name_title_GB         = 'SiteNameTitle';
$site_name_tag_GB           = 'SiteNameTag';


/* // Site descriptions ----------------------------------------------------- */
$site_desc_global           = '';
$site_desc_global_GB        = '';


/* // Open Graph meta ------------------------------------------------------- */     
// Max 35 char                                                       ·
//                                 123456789-123456789-123456789-12345
// $openGraph_title_global se usa en index solamente
$openGraph_title_global         = '';
$openGraph_title_global_GB      = '';

$openGraph_siteName_global      = $openGraph_title_global;    
$openGraph_siteName_global_GB   = $openGraph_title_global_GB;

// Max 65 char                                                                                     ·
//                                 123456789-123456789-123456789-123456789-123456789-123456789-12345 
$openGraph_desc_global          = '';
$openGraph_desc_global_GB       = '';

$openGraph_url                  = $url_openGraph_global;
$openGraph_type                 = 'website';

$openGraph_url_img_sq           = $url_openGraph_global .'/og_img_sq_01.jpg';
$openGraph_url_img_sq_secure    = $openGraph_url_img_sq;
$openGraph_img_sq_width         = '1000';
$openGraph_img_sq_height        = '1000';

$openGraph_url_img_big          = $url_openGraph_global .'/og_img_big_01.jpg';
$openGraph_url_img_big_secure   = $openGraph_url_img_big;
$openGraph_img_big_width        = '1200';
$openGraph_img_big_height       = '630';
?>