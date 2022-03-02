<?php
/* * NombreDeProyecto * ========================================================
   Meta Variables [/src/var/meta.openGraph.var.inc.php]
   ========================================================================== */

/* // Descripcion ----------------------------------------------------------- */
// Variables para open graph
//
// #openGraph 



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
// Título _ Max 35 char________________·_________________________________·
//                                     123456789-123456789-123456789-12345
// $openGraph_title_global se asigna a $openGraph_title en page_index
// y a $openGraph_siteName
    $openGraph_title_global         = $site_name_full;
//    $openGraph_title_global_GB      = $site_name_full_GB;

    $openGraph_img_url_sq           = $url_local_full .'/og_img_sq_01.jpg';
    $openGraph_img_width_sq         = '1000';
    $openGraph_img_height_sq        = '1000';

    $openGraph_img_url_big          = $url_local_full .'/og_img_big_01.jpg';
    $openGraph_img_width_big        = '1200';
    $openGraph_img_height_big       = '630';

if($nav_pageCurrent == 'page_index'):
        $openGraph_title            = $openGraph_title_global;
//        $openGraph_title_GB         = $openGraph_title_global_GB;

//elseif($nav_pageCurrent == 'page_PAGEINT'):
//        $openGraph_title            = $site_title;
//        $openGraph_title_GB         = $site_title_GB;
    
else:
        $openGraph_title            = $site_title;
//        $openGraph_title_GB         = $site_title_GB;
endif;

        $openGraph_url                  = $url_global;
    // Descripción _ Max 65 char___________·_______________________________________________________________·
    //                                     123456789-123456789-123456789-123456789-123456789-123456789-12345 
        $openGraph_desc                 = $site_desc_global;
//        $openGraph_img_url_secure       = $openGraph_img_url_sq;
        $openGraph_img_url              = $openGraph_img_url_sq;
        $openGraph_img_type             = 'image/jpg';
        $openGraph_img_width            = $openGraph_img_width_sq;
        $openGraph_img_height           = $openGraph_img_height_sq;
        $openGraph_type                 = 'website';
        $openGraph_siteName             = $openGraph_title_global;
        $openGraph_locale               = $site_lang_locale;
        
//        $openGraph_desc_GB              = $site_desc_global_GB;
//        $openGraph_siteName_GB          = $openGraph_title_global_GB;
?>