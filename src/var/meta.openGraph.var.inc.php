<?php
/* * NombreDeProyecto * ========================================================
   Open Graph Variables [/src/var/meta.openGraph.var.inc.php]
   ========================================================================== */

/* // Descripcion ----------------------------------------------------------- */
// Variables para open graph
// Este archivo se carga antes del head en cada página, no se carga desde
// PHP Variables Main Loader [/src/var/main.var.inc.php]
//
// #meta #openGraph #seo

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
    $openGraph_img_url_sq           = $url_wip_full . '/og_img_01.jpg';
    $openGraph_img_width_sq         = '1000';
    $openGraph_img_height_sq        = '1000';

    $openGraph_img_url_big          = $url_wip_full . '/og_img_01.jpg';
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