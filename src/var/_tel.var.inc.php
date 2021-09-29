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



/* // Tel prefixes ---------------------------------------------------------- */
$tel_code_country               = '54'; // REF [13]

$tel_code_area                  = '11';
$tel_code_area_int              = '911';

$tel_prefix_whatsapp            = $tel_code_country . $tel_code_area_int;
$tel_prefix_call                = $tel_code_country . $tel_code_area;    
$tel_prefix_formatted           = '(11)';  
    
    
//  $tel_alt_code_area              = '2325';
//  $tel_alt_code_area_int          = '02325';
    
//  $tel_alt_prefix_whatsapp        = $tel_code_country . $tel_alt_code_area_int;
//  $tel_alt_prefix_call            = $tel_code_country . $tel_alt_code_area;  
//  $tel_alt_prefix_formatted       = '(02325)';       
    
    
    
/* // Telephone number PRINCIPAL -------------------------------------------- */
$site_tel_PRINCIPAL_a             = '0000';
$site_tel_PRINCIPAL_b             = '0000';

$site_tel_PRINCIPAL               = $site_tel_PRINCIPAL_a . $site_tel_PRINCIPAL_b;
$site_tel_PRINCIPAL_formatted     = $tel_prefix_formatted .' '. $site_tel_PRINCIPAL_a .'-'. $site_tel_PRINCIPAL_b;

$site_tel_PRINCIPAL_whatsapp            = $tel_prefix_whatsapp . $site_tel_PRINCIPAL;
$site_tel_PRINCIPAL_whatsapp_formatted  = '+'. $tel_code_country .' '. $tel_code_area_int . $site_tel_PRINCIPAL_a .' '. $site_tel_PRINCIPAL_b;
$site_tel_PRINCIPAL_whatsapp_chatOpen   = 'https://api.whatsapp.com/send?phone='. $site_tel_PRINCIPAL_whatsapp;
$site_tel_PRINCIPAL_whatsapp_WAme       = 'https://wa.me/'. $site_tel_PRINCIPAL_whatsapp .'?text=I’m%20interested%20in%20your%20car%20for%20sale';

$site_tel_PRINCIPAL_call          = 'tel:+'. $tel_prefix_call . $site_tel_PRINCIPAL;
$site_tel_PRINCIPAL_call_href     = 'href="tel:+'. $tel_prefix_call . $site_tel_PRINCIPAL .'"';
$site_tel_PRINCIPAL_call_anchor   = '<a '. $site_tel_PRINCIPAL_call_href .'>'. $site_tel_PRINCIPAL .'</a>'; 
    
    
        
/* // Telephone number SECUNDARIO ------------------------------------------- */
//  $site_tel_SECUNDARIO_a              = '9999';
//  $site_tel_SECUNDARIO_b              = '9999';
    
//  $site_tel_SECUNDARIO                = $site_tel_SECUNDARIO_a . $site_tel_SECUNDARIO_b;
//  $site_tel_SECUNDARIO_formatted      = $tel_prefix_formatted. ' '. $site_tel_SECUNDARIO_a. '-' .$site_tel_SECUNDARIO_b;
    
//  $site_tel_SECUNDARIO_whatsapp           = $tel_prefix_whatsapp . $site_tel_SECUNDARIO;
//  $site_tel_SECUNDARIO_whatsapp_formatted = '+'. $tel_code_country .' '. $tel_code_area_int . $site_tel_SECUNDARIO_a .' '. $site_tel_SECUNDARIO_b;
//  $site_tel_SECUNDARIO_whatsapp_chatOpen  = 'https://api.whatsapp.com/send?phone='. $site_tel_SECUNDARIO_whatsapp;
//  $site_tel_SECUNDARIO_whatsapp_WAme      = 'https://wa.me/'. $site_tel_SECUNDARIO_whatsapp .'?text=I’m%20interested%20in%20your%20car%20for%20sale';
        
//  $site_tel_SECUNDARIO_call           = 'tel:+'. $tel_prefix_call . $site_tel_SECUNDARIO;
//  $site_tel_SECUNDARIO_call_href      = 'href="tel:+'. $tel_prefix_call . $site_tel_SECUNDARIO .'"';
//  $site_tel_SECUNDARIO_call_anchor    = '<a '. $site_tel_SECUNDARIO_call_href .'>'. $site_tel_SECUNDARIO .'</a>'; 
    
    
        
/* // Telephone number ALT -------------------------------------------------- */
//  $site_tel_alt_TELALT_a              = '9999';
//  $site_tel_alt_TELALT_b              = '9999';
    
//  $site_tel_alt_TELALT                = $site_tel_alt_TELALT_a . $site_tel_alt_TELALT_b;
//  $site_tel_alt_TELALT_formatted      = $tel_alt_prefix_formatted. ' '. $site_tel_alt_TELALT_a. '-' .$site_tel_alt_TELALT_b;
    
//  $site_tel_alt_TELALT_whatsapp           = $tel_alt_prefix_whatsapp . $site_tel_alt_TELALT;
//  $site_tel_alt_TELALT_whatsapp_formatted = '+'. $tel_alt_code_country .' '. $tel_alt_code_area_int . $site_tel_alt_TELALT_a .' '. $site_tel_alt_TELALT_b;
//  $site_tel_alt_TELALT_whatsapp_chatOpen  = 'https://api.whatsapp.com/send?phone='. $site_tel_alt_TELALT_whatsapp;
//  $site_tel_alt_TELALT_whatsapp_WAme      = 'https://wa.me/'. $site_tel_alt_TELALT_whatsapp .'?text=I’m%20interested%20in%20your%20car%20for%20sale';
        
//  $site_tel_alt_TELALT_call           = 'tel:+'. $tel_alt_prefix_call . $site_tel_alt_TELALT;
//  $site_tel_alt_TELALT_call_href      = 'href="tel:+'. $tel_alt_prefix_call . $site_tel_alt_TELALT .'"';
//  $site_tel_alt_TELALT_call_anchor    = '<a '. $site_tel_alt_TELALT_call_href .'>'. $site_tel_alt_TELALT .'</a>'; 
    
    
    
/* // Fax number  ----------------------------------------------------------- */
//  $site_fax_a                  = '2222';
//  $site_fax_b                  = '3333';
    
//  $site_fax                    = $site_fax_a . $site_fax_b;
//  $site_fax_formatted          = $tel_prefix_formatted .' '. $site_fax_a .'-'. $site_fax_b;
        
//  $site_fax_call           = 'tel:+'. $tel_prefix_call . $site_tel_fax;
//  $site_fax_call_href      = 'href="tel:+'. $tel_prefix_call . $site_tel_fax .'"';
//  $site_fax_call_anchor    = '<a '. $site_fax_call_href .'>'. $site_tel_fax .'</a>'; 
?>