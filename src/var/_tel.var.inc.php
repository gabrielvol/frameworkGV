<?php
/* * NombreDeProyecto * ========================================================
   Telephone Variables [/src/var/tel.var.inc.php]
   ========================================================================== */

/* // Descripcion ----------------------------------------------------------- */



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



/* // Tel prefixes ---------------------------------------------------------- */
$tel_code_country               = '54'; // REF [13]

$tel_code_area                  = '11';
$tel_code_area_int              = '911';

$tel_prefix_whatsapp            = $tel_code_country . $tel_code_area_int;
$tel_prefix_call                = $tel_code_country . $tel_code_area;    
$tel_prefix_formatted           = '(11)';  
    
    
// $tel_alt_code_area              = '2325';
// $tel_alt_code_area_int          = '02325';
    
// $tel_alt_prefix_whatsapp        = $tel_code_country . $tel_alt_code_area_int;
// $tel_alt_prefix_call            = $tel_code_country . $tel_alt_code_area;  
// $tel_alt_prefix_formatted       = '(02325)';       
    
    
    
/* // Telephone number PRINCIPAL -------------------------------------------- */
$site_tel_PHONEA_a                  = '0000';
$site_tel_PHONEA_b                  = '0000';

$site_tel_PHONEA                    = $site_tel_PHONEA_a . $site_tel_PHONEA_b;
$site_tel_PHONEA_formatted          = $tel_prefix_formatted .' '. $site_tel_PHONEA_a .'-'. $site_tel_PHONEA_b;

$site_tel_PHONEA_whatsapp           = $tel_prefix_whatsapp . $site_tel_PHONEA;
$site_tel_PHONEA_whatsapp_formatted = '+'. $tel_code_country .' '. $tel_code_area_int .' '. $site_tel_PHONEA_a .' '. $site_tel_PHONEA_b;
$site_tel_PHONEA_whatsapp_chatOpen  = 'https://wa.me/'. $site_tel_PHONEA_whatsapp .'?text=I’m%20interested%20in%20your%20car%20for%20sale';
$site_tel_PHONEA_whatsapp_chatOpen_api = 'https://api.whatsapp.com/send?phone='. $site_tel_PHONEA_whatsapp .'?text=I’m%20interested%20in%20your%20car%20for%20sale';
$site_tel_PHONEA_whatsapp_chatOpen_web = 'https://web.whatsapp.com/send?phone='. $site_tel_PHONEA_whatsapp .'?text=I’m%20interested%20in%20your%20car%20for%20sale';

$site_tel_PHONEA_call               = 'tel:+'. $tel_prefix_call . $site_tel_PHONEA;
$site_tel_PHONEA_call_href          = 'href="tel:+'. $tel_prefix_call . $site_tel_PHONEA .'"';
$site_tel_PHONEA_call_anchor        = '<a '. $site_tel_PHONEA_call_href .'>'. $site_tel_PHONEA .'</a>'; 
    
    
        
/* // Telephone number 0800 ------------------------------------------------- */
$site_tel_PHONE0800_a                  = '0800';
$site_tel_PHONE0800_b                  = '111';
$site_tel_PHONE0800_c                  = '9999';
    
$site_tel_PHONE0800                    = $site_tel_PHONE0800_a . $site_tel_PHONE0800_b . $site_tel_PHONE0800_c;
$site_tel_PHONE0800_formatted          = $site_tel_PHONE0800_a .'-'. $site_tel_PHONE0800_b .'-'. $site_tel_PHONE0800_c;
       
$site_tel_PHONE0800_call               = 'wtai://wp/mc;'. $site_tel_PHONE0800;
$site_tel_PHONE0800_call_href          = 'href="'. $site_tel_PHONE0800_call .'"';
$site_tel_PHONE0800_call_anchor        = '<a '. $site_tel_PHONE0800_call_href .'>'. $site_tel_PHONE0800_formatted .'</a>'; 
    
    
        
/* // Telephone number SECUNDARIO ------------------------------------------- */
// $site_tel_PHONEB_a                  = '9999';
// $site_tel_PHONEB_b                  = '9999';
    
// $site_tel_PHONEB                    = $site_tel_PHONEB_a . $site_tel_PHONEB_b;
// $site_tel_PHONEB_formatted          = $tel_prefix_formatted. ' '. $site_tel_PHONEB_a. '-' .$site_tel_PHONEB_b;
    
// $site_tel_PHONEB_whatsapp           = $tel_prefix_whatsapp . $site_tel_PHONEB;
// $site_tel_PHONEB_whatsapp_formatted = '+'. $tel_code_country .' '. $tel_code_area_int .' '. $site_tel_PHONEB_a .' '. $site_tel_PHONEB_b;
// $site_tel_PHONEB_whatsapp_chatOpen  = 'https://api.whatsapp.com/send?phone='. $site_tel_PHONEB_whatsapp;
// $site_tel_PHONEB_whatsapp_WAme      = 'https://wa.me/'. $site_tel_PHONEB_whatsapp .'?text=I’m%20interested%20in%20your%20car%20for%20sale';
        
// $site_tel_PHONEB_call               = 'tel:+'. $tel_prefix_call . $site_tel_PHONEB;
// $site_tel_PHONEB_call_href          = 'href="tel:+'. $tel_prefix_call . $site_tel_PHONEB .'"';
// $site_tel_PHONEB_call_anchor        = '<a '. $site_tel_PHONEB_call_href .'>'. $site_tel_PHONEB .'</a>'; 
    
    
        
/* // Telephone number ALT -------------------------------------------------- */
// $site_tel_alt_PHONEALT_a                     = '9999';
// $site_tel_alt_PHONEALT_b                     = '9999';
    
// $site_tel_alt_PHONEALT                       = $site_tel_alt_PHONEALT_a . $site_tel_alt_PHONEALT_b;
// $site_tel_alt_PHONEALT_formatted             = $tel_alt_prefix_formatted. ' '. $site_tel_alt_PHONEALT_a. '-' .$site_tel_alt_PHONEALT_b;
    
// $site_tel_alt_PHONEALT_whatsapp              = $tel_alt_prefix_whatsapp . $site_tel_alt_PHONEALT;
// $site_tel_alt_PHONEALT_whatsapp_formatted    = '+'. $tel_alt_code_country .' '. $tel_alt_code_area_int . $site_tel_alt_PHONEALT_a .' '. $site_tel_alt_PHONEALT_b;
// $site_tel_alt_PHONEALT_whatsapp_chatOpen     = 'https://api.whatsapp.com/send?phone='. $site_tel_alt_PHONEALT_whatsapp;
// $site_tel_alt_PHONEALT_whatsapp_WAme         = 'https://wa.me/'. $site_tel_alt_PHONEALT_whatsapp .'?text=I’m%20interested%20in%20your%20car%20for%20sale';
        
// $site_tel_alt_PHONEALT_call                  = 'tel:+'. $tel_alt_prefix_call . $site_tel_alt_PHONEALT;
// $site_tel_alt_PHONEALT_call_href             = 'href="tel:+'. $tel_alt_prefix_call . $site_tel_alt_PHONEALT .'"';
// $site_tel_alt_PHONEALT_call_anchor           = '<a '. $site_tel_alt_PHONEALT_call_href .'>'. $site_tel_alt_PHONEALT .'</a>'; 
    
    
    
/* // Fax number  ----------------------------------------------------------- */
// $site_fax_a              = '2222';
// $site_fax_b              = '3333';
    
// $site_fax                = $site_fax_a . $site_fax_b;
// $site_fax_formatted      = $tel_prefix_formatted .' '. $site_fax_a .'-'. $site_fax_b;
        
// $site_fax_call           = 'tel:+'. $tel_prefix_call . $site_tel_fax;
// $site_fax_call_href      = 'href="tel:+'. $tel_prefix_call . $site_tel_fax .'"';
// $site_fax_call_anchor    = '<a '. $site_fax_call_href .'>'. $site_tel_fax .'</a>'; 
?>