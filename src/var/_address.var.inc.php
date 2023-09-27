<?php
/* * NombreDeProyecto * ========================================================
   Addresses Variables [/src/var/address.var.inc.php]
   ========================================================================== */

/* // Descripcion ----------------------------------------------------------- */
// REF [13]



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



/* // Address Principal // REF [13] ----------------------------------------- */
if($gettext_idioma == 'en_GB'){
   $site_address_ADDRESSA_a   = 'bbbbbbbbbbbbbbbbbbbbbbbbbb Autonomous City of Buenos Aires';
   $site_address_ADDRESSA_b   = 'bbbbbbbbbbbbbbbbbbbbbbbbbb Autonomous City of Buenos Aires';
   $site_address_ADDRESSA     = $site_address_ADDRESSA_a .' '. $site_address_ADDRESSA_b;  


} elseif($gettext_idioma == 'xx_XX'){
//   $site_address_ADDRESSA_a               = 'aaaaaaaaaaaaaaaaaaaaaaaaaa';     
//   $site_address_ADDRESSA_b               = 'aaaaaaaaaaaaaaaaaaaaaaaaaa';
//   $site_address_ADDRESSA                 = $site_address_ADDRESSA_a .' '. $site_address_ADDRESSA_b; 


} else {      
   $site_address_ADDRESSA_a               = 'aaaaaaaaaaaaaaaaaaaaaaaaaa';     
   $site_address_ADDRESSA_b               = 'aaaaaaaaaaaaaaaaaaaaaaaaaa';
   $site_address_ADDRESSA                 = $site_address_ADDRESSA_a .' '. $site_address_ADDRESSA_b; 
}

$site_address_ADDRESSA_map_url         = 'https_goo_gl_maps_aaaaaaaaaaaa';
$site_address_ADDRESSA_map_href        = 'href="'. $site_address_ADDRESSA_map_url .'"';
$site_address_ADDRESSA_map_iframe_src  = 'https_google_com_maps_embed_aaaaaaaaaaaaaaaaa';
$site_address_ADDRESSA_map_iframe      = '<iframe src="'. $site_address_ADDRESSA_map_iframe_src .'" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    
    
/* // Address NOMBRE -------------------------------------------------------- */
// $site_address_NOMBRE_a       = 'bbbbbbbbbbbbbbbbbbbbbbbbbb';
// $site_address_NOMBRE_b       = 'bbbbbbbbbbbbbbbbbbbbbbbbbb';
// $site_address_NOMBRE         = $site_address_NOMBRE_a .' '. $site_address_NOMBRE_b;       
       
// $site_address_NOMBRE_map_url   = 'https_goo_gl_maps_aaaaaaaaaaaa';
// $site_address_NOMBRE_map_href  = 'href="'. $site_address_NOMBRE_map_url .'"';
// $site_address_NOMBRE_map_iframe_src  = 'https_google_com_maps_embed_aaaaaaaaaaaaaaaaa';
// $site_address_NOMBRE_map_iframe      = '<iframe src="'. $site_address_NOMBRE_map_iframe_src .'" allowfullscreen="" loading="lazy"></iframe>';
?>