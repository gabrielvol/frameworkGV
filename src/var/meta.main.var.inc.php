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
// El index usa solamente $site_name_full
//
// Las internas componen el nombre con las variables
// $page_title_home-PAGEINT y $site_name_title
// Ej.: Nosotros | $page_title_home_laEmpresa | $site_name_title

if($l == 'en_GB'){
    $site_name_full         = 'SiteNameFull';
    $site_name_short        = 'SiteNameShort';
    $site_name_title        = 'SiteNameTitle';
    $site_name_tag          = 'SiteNameTag';

//    $page_title_home-PAGEINT   = 'TituloEnIngles';
    $page_title_home_contacto  = 'Contact';

    $page_desc_global       = '';


} elseif($l == 'xx_XX'){
// $site_name_full          = 'SiteNameFull';
// $site_name_short         = 'SiteNameShort'; // $site_name_short
// $site_name_title         = 'SiteNameTitle'; // $site_name_title
// $site_name_tag           = 'SiteNameTag'; // $site_name_tag

// $page_title_home-PAGEINT    = 'sinTraduccion';

// $page_desc_global        = 'sinTraduccion';


} else {
    $site_name_full         = 'SiteNameFull';
    $site_name_short        = 'SiteNameShort';
    $site_name_title        = 'SiteNameTitle';
    $site_name_tag          = 'SiteNameTag';

//    $page_title_home-PAGEINT   = 'TituloEnCastellano';
    $page_title_home_contacto  = 'Contacto';

    $page_desc_global       = '';
}

?>