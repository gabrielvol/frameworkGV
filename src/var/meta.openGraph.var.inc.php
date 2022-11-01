<?php
/* * NombreDeProyecto * ========================================================
   Open Graph Variables [/src/var/meta.openGraph.var.inc.php]
   ========================================================================== */

/* // Descripcion ----------------------------------------------------------- */
// Variables para open graph
//
// #meta #openGraph #seo



/* // Referencias globales de nombres de variables y mixins ----------------- */
///-- Inicio del nombre
// bd                   = borde
// bg                   = fondo / background
// bx                   = box
// ft                   = fuente
// mq, MQ               = media query @media
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



/* // Open Graph meta ------------------------------------------------------- */


// -- Título _ Max 35 char ___________
// ·_________________________________·
// 123456789-123456789-123456789-12345
//
// Se declaran distintas variables por página
if($nav_pageCurrent == 'page_index'):
// Esta variable se usa en el head `meta property og title`
    $openGraph_title            = $site_name_full;    
else:
// Esta variable se usa en el head `meta property og title`
    $openGraph_title            = $page_title;
endif;
    
    
    
// -- Site Name
    $openGraph_siteName             = $site_name_full;


    
// -- Descripción _ Max 65 char ____________________________________
// ·_______________________________________________________________·
// 123456789-123456789-123456789-123456789-123456789-123456789-12345 
//
// Esta variable se usa en el head `meta property og description`
    $openGraph_desc                 = $page_desc_global;

    
    
// -- Image
    $openGraph_img_url_sq           = $url_wip_full .'/og_img_01.jpg';
    $openGraph_img_width_sq         = '1000';
    $openGraph_img_height_sq        = '1000';

    $openGraph_img_url_big          = $url_wip_full .'/og_img_01.jpg';
    $openGraph_img_width_big        = '1200';
    $openGraph_img_height_big       = '630';
    
    $openGraph_img_url_secure       = $openGraph_img_url_big;
    $openGraph_img_url              = $openGraph_img_url_big;
    $openGraph_img_type             = 'image/jpg';
    $openGraph_img_width            = $openGraph_img_width_big;
    $openGraph_img_height           = $openGraph_img_height_big;



// -- misc
    $openGraph_url                  = $url_main_full;
    $openGraph_type                 = 'website';
    $openGraph_locale               = $site_lang_locale;


/* // Favicon --------------------------------------------------------------- */
    $favicon_url                        = $url_wip_full;
    $favicon_color_theme                = '#ffffff';
    $favicon_color_msApplicationTile    = $favicon_color_theme;
    $favicon_color_safariPinnedTab      = $favicon_color_theme;
?>