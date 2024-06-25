<?php
/* * NombreDeProyecto * ========================================================
   Telephone Variables [/src/var/tel.var.inc.php]
   ========================================================================== */

/* // Descripcion ----------------------------------------------------------- */

/* // Tel prefixes ---------------------------------------------------------- */
$tel_code_country               = '54'; // REF [13]
$tel_code_country          = '52'; // REF [13]

$tel_code_area                  = '11';
$tel_code_area_int              = '9' . $tel_code_area;

$tel_prefix_whatsapp            = $tel_code_country . $tel_code_area_int;
$tel_prefix_call                = $tel_code_country . $tel_code_area;    
$tel_prefix_formatted           = '(' . $tel_code_area . ')';  
    
    
// $tel_code_area              = '2325';
// $tel_code_area_int          = '02325';
    
// $tel_prefix_whatsapp        = $tel_code_country . $tel_code_area_int;
// $tel_prefix_call            = $tel_code_country . $tel_code_area;  
// $tel_prefix_formatted       = '(02325)';       
    
    
    
/* // Telephone number XXXX ------------------------------------------------- */
$site_tel_XXXX_a                  = '0000';
$site_tel_XXXX_b                  = 'XXXX';

$site_tel_XXXX                    = $site_tel_XXXX_a . $site_tel_XXXX_b;
$site_tel_XXXX_formatted          = $tel_prefix_formatted . ' ' . $site_tel_XXXX_a . '-' . $site_tel_XXXX_b;

$site_tel_XXXX_whatsapp           = $tel_prefix_whatsapp . $site_tel_XXXX;
$site_tel_XXXX_whatsapp_formatted = '+' . $tel_code_country . ' ' . $tel_code_area_int . ' ' . $site_tel_XXXX_a . ' ' . $site_tel_XXXX_b;
$site_tel_XXXX_whatsapp_chatOpen  = 'https://wa.me/' . $site_tel_XXXX_whatsapp . '?text=Hola,%20me%20interesa%20la%20propuesta!';
$site_tel_XXXX_whatsapp_chatOpen_api = 'https://api.whatsapp.com/send?phone=' . $site_tel_XXXX_whatsapp . '?text=Hola,%20me%20interesa%20la%20propuesta!';
$site_tel_XXXX_whatsapp_chatOpen_web = 'https://web.whatsapp.com/send?phone=' . $site_tel_XXXX_whatsapp . '?text=Hola,%20me%20interesa%20la%20propuesta!';

$site_tel_XXXX_call               = 'tel:+' . $tel_prefix_call . $site_tel_XXXX;
$site_tel_XXXX_call_href          = 'href="tel:+' . $tel_prefix_call . $site_tel_XXXX . '"';
$site_tel_XXXX_call_anchor        = '<a ' . $site_tel_XXXX_call_href . '>' . $site_tel_XXXX . '</a>'; 
    
    
        
/* // Telephone number 0800 ------------------------------------------------- */
$site_tel_0800_a                  = '0800';
$site_tel_0800_b                  = '111';
$site_tel_0800_c                  = '9999';
    
$site_tel_0800                    = $site_tel_0800_a . $site_tel_0800_b . $site_tel_0800_c;
$site_tel_0800_formatted          = $site_tel_0800_a . '-' . $site_tel_0800_b . '-' . $site_tel_0800_c;
       
$site_tel_0800_call               = 'wtai://wp/mc;' . $site_tel_0800;
$site_tel_0800_call_href          = 'href="' . $site_tel_0800_call . '"';
$site_tel_0800_call_anchor        = '<a ' . $site_tel_0800_call_href . '>' . $site_tel_0800_formatted . '</a>';
    
    
    
/* // Telephone number ZZZZ ------------------------------------------------- */
// $site_tel_ZZZZ_a                  = '0000';
// $site_tel_ZZZZ_b                  = 'ZZZZ';

// $site_tel_ZZZZ                    = $site_tel_ZZZZ_a . $site_tel_ZZZZ_b;
// $site_tel_ZZZZ_formatted          = $tel_prefix_formatted . ' ' . $site_tel_ZZZZ_a . '-' . $site_tel_ZZZZ_b;

// $site_tel_ZZZZ_whatsapp           = $tel_prefix_whatsapp . $site_tel_ZZZZ;
// $site_tel_ZZZZ_whatsapp_formatted = '+' . $tel_code_country . ' ' . $tel_code_area_int . ' ' . $site_tel_ZZZZ_a . ' ' . $site_tel_ZZZZ_b;
// $site_tel_ZZZZ_whatsapp_chatOpen  = 'https://wa.me/' . $site_tel_ZZZZ_whatsapp . '?text=Hola,%20me%20interesa%20la%20propuesta!';
// $site_tel_ZZZZ_whatsapp_chatOpen_api = 'https://api.whatsapp.com/send?phone=' . $site_tel_ZZZZ_whatsapp . '?text=Hola,%20me%20interesa%20la%20propuesta!';
// $site_tel_ZZZZ_whatsapp_chatOpen_web = 'https://web.whatsapp.com/send?phone=' . $site_tel_ZZZZ_whatsapp . '?text=Hola,%20me%20interesa%20la%20propuesta!';

// $site_tel_ZZZZ_call               = 'tel:+' . $tel_prefix_call . $site_tel_ZZZZ;
// $site_tel_ZZZZ_call_href          = 'href="tel:+' . $tel_prefix_call . $site_tel_ZZZZ . '"';
// $site_tel_ZZZZ_call_anchor        = '<a ' . $site_tel_ZZZZ_call_href . '>' . $site_tel_ZZZZ . '</a>';  
    
    
        
/* // Telephone number YYYY ------------------------------------------------- */
// $site_tel_YYYY_a                     = '9999';
// $site_tel_YYYY_b                     = '9999';
    
// $site_tel_YYYY                       = $site_tel_YYYY_a . $site_tel_YYYY_b;
// $site_tel_YYYY_formatted             = $tel_prefix_formatted . ' ' . $site_tel_YYYY_a. '-' .$site_tel_YYYY_b;
    
// $site_tel_YYYY_whatsapp              = $tel_prefix_whatsapp . $site_tel_YYYY;
// $site_tel_YYYY_whatsapp_formatted    = '+' . $tel_code_country . ' ' . $tel_code_area_int . $site_tel_YYYY_a . ' ' . $site_tel_YYYY_b;
// $site_tel_YYYY_whatsapp_chatOpen     = 'https://api.whatsapp.com/send?phone=' . $site_tel_YYYY_whatsapp;
// $site_tel_YYYY_whatsapp_WAme         = 'https://wa.me/' . $site_tel_YYYY_whatsapp . '?text=Hola,%20me%20interesa%20la%20propuesta!';
        
// $site_tel_YYYY_call                  = 'tel:+' . $tel_prefix_call . $site_tel_YYYY;
// $site_tel_YYYY_call_href             = 'href="tel:+' . $tel_prefix_call . $site_tel_YYYY . '"';
// $site_tel_YYYY_call_anchor           = '<a ' . $site_tel_YYYY_call_href . '>' . $site_tel_YYYY . '</a>'; 
?>