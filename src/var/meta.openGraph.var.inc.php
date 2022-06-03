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



/* // Open Graph meta ------------------------------------------------------- */


// -- Título _ Max 35 char________________·_________________________________·
//                                        123456789-123456789-123456789-12345
// Se declaran distintas variables por página
if($nav_pageCurrent == 'page_index'):
// Estas variables son usadas en el head `meta property og title`
        $openGraph_title            = $site_name_full;
//        $openGraph_title_DE         = $site_name_full_DE;
//        $openGraph_title_GB         = $site_name_full_GB;
//        $openGraph_title_PT         = $site_name_full_PT;
//        $openGraph_title_XX         = $site_name_full_XX;

//elseif($nav_pageCurrent == 'page_PAGEINT'):
// Estas variables son usadas en el head `meta property og title`
//        $openGraph_title            = $page_title;
//        $openGraph_title_DE         = $page_title_DE;
//        $openGraph_title_GB         = $page_title_GB;
//        $openGraph_title_PT         = $page_title_PT;
//        $openGraph_title_XX         = $page_title_XX;
    
else:
// Estas variables son usadas en el head `meta property og title`
        $openGraph_title            = $page_title;
//        $openGraph_title_DE         = $page_title_DE;
//        $openGraph_title_GB         = $page_title_GB;
//        $openGraph_title_PT         = $page_title_PT;
//        $openGraph_title_XX         = $page_title_XX;
endif;


    
// -- Descripción _ Max 65 char___________·_______________________________________________________________·
//                                        123456789-123456789-123456789-123456789-123456789-123456789-12345 
// Estas variables son usadas en el head `meta property og description`
    $openGraph_desc                 = $page_desc_global;
//    $openGraph_desc_DE              = $page_desc_global_DE;
//    $openGraph_desc_GB              = $page_desc_global_GB;
//    $openGraph_desc_PT              = $page_desc_global_PT;
//    $openGraph_desc_XX              = $page_desc_global_XX;
    
    
    
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
    
    
    
// -- Site Name
    $openGraph_siteName             = $site_name_full;
//    $openGraph_siteName_DE          = $site_name_full_DE;
//    $openGraph_siteName_GB          = $site_name_full_GB;
//    $openGraph_siteName_PT          = $site_name_full_PT;
//    $openGraph_siteName_XX          = $site_name_full_XX;



// -- misc
    $openGraph_url                  = $url_main_full;
    $openGraph_type                 = 'website';
    $openGraph_locale               = $site_lang_locale;
?>