<?php
/* * NombreDeProyecto * ========================================================
   Telephone Variables [/src/var/tel.var.inc.php]
   ========================================================================== */

/* // Descripcion ----------------------------------------------------------- */

/* // Tel prefixes ---------------------------------------------------------- */
$tel_code_country_AR               = '54'; /* // REF [13] */

/* // Tel prefixes Buenos Aires -- */
$tel_code_area_11                  = '11';
$tel_code_area_int_11              = '9' . $tel_code_area_11;

$tel_prefix_whatsApp_11            = $tel_code_country_AR . $tel_code_area_int_11;
$tel_prefix_call_11                = $tel_code_country_AR . $tel_code_area_11;    
$tel_prefix_formatted_11           = '(' . $tel_code_area_11 . ')';  

/* // Tel prefixes Entre Rios -- */
$tel_code_area_3447              = '3447';
$tel_code_area_int_3447          = '9' . $tel_code_area_3447;

$tel_prefix_whatsApp_3447            = $tel_code_country_AR . $tel_code_area_int_3447;
$tel_prefix_call_3447                = $tel_code_country_AR . $tel_code_area_3447;    
$tel_prefix_formatted_3447           = '(+' . $tel_code_country_AR . '9 ' . $tel_code_area_3447 . ')'; 

   
    
/* // Telephone number XXXX ------------------------------------------------- */
$site_tel_XXXX_a                  = '0000';
$site_tel_XXXX_b                  = 'XXXX';

$site_tel_XXXX                    = $site_tel_XXXX_a . $site_tel_XXXX_b;
$site_tel_XXXX_formatted          = $tel_prefix_formatted_11 . ' ' . $site_tel_XXXX_a . '-' . $site_tel_XXXX_b;

$site_tel_XXXX_whatsApp           = $tel_prefix_whatsApp_11 . $site_tel_XXXX;
$site_tel_XXXX_whatsApp_formatted = '+' . $tel_code_country_AR . ' ' . $tel_code_area_int_11 . ' ' . $site_tel_XXXX_a . ' ' . $site_tel_XXXX_b;
$site_tel_XXXX_whatsApp_chatOpen  = 'https://wa.me/' . $site_tel_XXXX_whatsApp . '?text=Hola,%20quiero%20hacer%20una%20consulta!';
$site_tel_XXXX_whatsApp_chatOpen_api = 'https://api.whatsapp.com/send?phone=' . $site_tel_XXXX_whatsApp . '?text=Hola,%20quiero%20hacer%20una%20consulta!';
$site_tel_XXXX_whatsApp_chatOpen_web = 'https://web.whatsapp.com/send?phone=' . $site_tel_XXXX_whatsApp . '?text=Hola,%20quiero%20hacer%20una%20consulta!';

$site_tel_XXXX_call               = 'tel:+' . $tel_prefix_call_11 . $site_tel_XXXX;
$site_tel_XXXX_call_href          = 'href="tel:+' . $tel_prefix_call_11 . $site_tel_XXXX . '"';
$site_tel_XXXX_call_anchor        = '<a ' . $site_tel_XXXX_call_href . '>' . $site_tel_XXXX . '</a>';
    
    
        
/* // Telephone number YYYY ------------------------------------------------- 
$site_tel_YYYY_a                     = '9999';
$site_tel_YYYY_b                     = '9999';
    
$site_tel_YYYY                       = $site_tel_YYYY_a . $site_tel_YYYY_b;
$site_tel_YYYY_formatted             = $tel_prefix_formatted_11 . ' ' . $site_tel_YYYY_a. '-' .$site_tel_YYYY_b;
    
$site_tel_YYYY_whatsApp              = $tel_prefix_whatsApp_11 . $site_tel_YYYY;
$site_tel_YYYY_whatsApp_formatted    = '+' . $tel_code_country_AR . ' ' . $tel_code_area_int_11 . $site_tel_YYYY_a . ' ' . $site_tel_YYYY_b;
$site_tel_YYYY_whatsApp_chatOpen     = 'https://api.whatsapp.com/send?phone=' . $site_tel_YYYY_whatsApp;
$site_tel_YYYY_whatsApp_WAme         = 'https://wa.me/' . $site_tel_YYYY_whatsApp . '?text=Hola,%20quiero%20hacer%20una%20consulta!';
        
$site_tel_YYYY_call                  = 'tel:+' . $tel_prefix_call_11 . $site_tel_YYYY;
$site_tel_YYYY_call_href             = 'href="tel:+' . $tel_prefix_call_11 . $site_tel_YYYY . '"';
$site_tel_YYYY_call_anchor           = '<a ' . $site_tel_YYYY_call_href . '>' . $site_tel_YYYY . '</a>'; */
 
 

/* // Telephone number ER 3447 ZZZZ ----------------------------------------- 
$site_tel_ZZZZ_a                  = '0000';
$site_tel_ZZZZ_b                  = 'ZZZZ';
    
$site_tel_ZZZZ                    = $site_tel_ZZZZ_a . $site_tel_ZZZZ_b;
$site_tel_ZZZZ_formatted          = $tel_prefix_formatted_3447 . ' ' . $site_tel_ZZZZ_a. '-' .$site_tel_ZZZZ_b;
    
$site_tel_ZZZZ_whatsApp           = $tel_prefix_whatsApp_3447 . $site_tel_ZZZZ;
$site_tel_ZZZZ_whatsApp_formatted = '+' . $tel_code_country_AR . ' ' . $tel_code_area_int_3447 . ' ' . $site_tel_ZZZZ_a . ' ' . $site_tel_ZZZZ_b;
$site_tel_ZZZZ_whatsApp_chatOpen  = 'https://api.whatsapp.com/send?phone=' . $site_tel_ZZZZ_whatsApp;
$site_tel_ZZZZ_whatsApp_WAme      = 'https://wa.me/' . $site_tel_ZZZZ_whatsApp . '?text=Hola,%20quiero%20hacer%20una%20consulta!';
        
$site_tel_ZZZZ_call               = 'tel:+' . $tel_prefix_call_3447 . $site_tel_ZZZZ;
$site_tel_ZZZZ_call_href          = 'href="tel:+' . $tel_prefix_call_3447 . $site_tel_ZZZZ . '"';
$site_tel_ZZZZ_call_anchor        = '<a ' . $site_tel_ZZZZ_call_href . '>' . $site_tel_ZZZZ . '</a>'; */
  

        
/* // Telephone number 0800 ------------------------------------------------- */
$site_tel_0800_a                  = '0800';
$site_tel_0800_b                  = '111';
$site_tel_0800_c                  = '9999';
    
$site_tel_0800                    = $site_tel_0800_a . $site_tel_0800_b . $site_tel_0800_c;
$site_tel_0800_formatted          = $site_tel_0800_a . '-' . $site_tel_0800_b . '-' . $site_tel_0800_c;
       
$site_tel_0800_call               = 'wtai://wp/mc;' . $site_tel_0800;
$site_tel_0800_call_href          = 'href="' . $site_tel_0800_call . '"';
$site_tel_0800_call_anchor        = '<a ' . $site_tel_0800_call_href . '>' . $site_tel_0800_formatted . '</a>';

?>