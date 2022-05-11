<?php
/* * NombreDeProyecto * ========================================================
   Metadata Main Variables [/src/var/meta.main.var.inc.php]
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

// $site_name_full_XX          = 'SiteNameFull'; // $site_name_full
// $site_name_short_XX         = 'SiteNameShort'; // $site_name_short
// $site_name_title_XX         = 'SiteNameTitle'; // $site_name_title
// $site_name_tag_XX           = 'SiteNameTag'; // $site_name_tag


/* // Site descriptions ----------------------------------------------------- */
$page_desc_global           = '';
$page_desc_global_GB        = '';
// $page_desc_global_XX        = ''; // $page_desc_global


/* // Favicon --------------------------------------------------------------- */
$favicon_url                        = $url_wip_full;
$favicon_color_theme                = '#ffffff';
$favicon_color_msApplicationTile    = $favicon_color_theme;
$favicon_color_safariPinnedTab      = $favicon_color_theme;

?>