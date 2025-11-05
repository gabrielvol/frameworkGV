<?php
/* * NombreDeProyecto * ========================================================
   Telephone Variables [/src/var/tel.var.inc.php]
   ========================================================================== */

/* // Descripcion ----------------------------------------------------------- */

/* // Tel prefixes ---------------------------------------------------------- */
$tel_code_country_AR               = '54'; /* // REF [13] */
$tel_code_country_MX               = '52'; /* // REF [13] */
$tel_code_country_NANP             = '1'; /* // REF [13] */ /* NANP North American Numbering Plan */
$tel_code_country_UY               = '598'; /* // REF [13] */

/* // Tel prefixes Argentina - Buenos Aires -- */
$tel_code_area_AR_11               = '11';
$tel_code_area_AR_WP_11            = '9' . $tel_code_area_AR_11;

$tel_prefix_whatsApp_AR_11         = $tel_code_country_AR . $tel_code_area_AR_WP_11;
$tel_prefix_call_AR_11             = $tel_code_country_AR . $tel_code_area_AR_11;    
$tel_prefix_formatted_11           = '(' . $tel_code_area_AR_11 . ')';  

/* // Tel prefixes Argentina - Entre Rios -- */
$tel_code_area_AR_3447             = '3447';
$tel_code_area_AR_WP_3447          = '9' . $tel_code_area_AR_3447;

$tel_prefix_whatsApp_AR_3447       = $tel_code_country_AR . $tel_code_area_AR_WP_3447;
$tel_prefix_call_AR_3447           = $tel_code_country_AR . $tel_code_area_AR_3447;    
$tel_prefix_formatted_AR_3447      = '(+' . $tel_code_country_AR . '9 ' . $tel_code_area_AR_3447 . ')'; 

/* // Tel prefixes México - CDMX -- */
$tel_code_area_MX_55              = '55';

$tel_prefix_whatsApp_MX_55        = $tel_code_country_MX . $tel_code_area_MX_55;
$tel_prefix_call_MX_55            = $tel_prefix_whatsApp_MX_55;    
$tel_prefix_formatted_MX_55       = '(+ ' . $tel_code_country_MX . ' ' . $tel_code_area_MX_55 . ')'; 

/* // Tel prefixes México - Monterrey -- */
$tel_code_area_MX_82              = '82';

$tel_prefix_whatsApp_MX_82        = $tel_code_country_MX . $tel_code_area_MX_82;
$tel_prefix_call_MX_82            = $tel_prefix_whatsApp_MX_82;    
$tel_prefix_formatted_MX_82       = '(+ ' . $tel_code_country_MX . ' ' . $tel_code_area_MX_82 . ')';

/* // Tel prefixes Uruguay - Montevideo -- */
$tel_code_area_UY_94              = '94';

$tel_prefix_whatsApp_UY_94        = $tel_code_country_UY . $tel_code_area_UY_94;
$tel_prefix_call_UY_94            = $tel_prefix_whatsApp_UY_94;    
$tel_prefix_formatted_UY_94       = '(+ ' . $tel_code_country_UY . ' ' . $tel_code_area_UY_94 . ')';

/* // Tel prefixes USA - Miami -- */
$tel_code_area_USA_305              = '305';

$tel_prefix_whatsApp_USA_305        = $tel_code_country_NANP . $tel_code_area_USA_305;
$tel_prefix_call_USA_305            = $tel_prefix_whatsApp_USA_305;    
$tel_prefix_formatted_USA_305       = '(+ ' . $tel_code_country_NANP . ' ' . $tel_code_area_USA_305 . ')';

   
    
/* // Telephone number XXXX ------------------------------------------------- */
$site_tel_XXXX_a                  = '0000';
$site_tel_XXXX_b                  = 'XXXX';

$site_tel_XXXX                    = $site_tel_XXXX_a . $site_tel_XXXX_b;
$site_tel_XXXX_formatted          = $tel_prefix_formatted_11 . ' ' . $site_tel_XXXX_a . '-' . $site_tel_XXXX_b;

$site_tel_XXXX_whatsApp           = $tel_prefix_whatsApp_AR_11 . $site_tel_XXXX;
$site_tel_XXXX_whatsApp_formatted = '+' . $tel_code_country_AR . ' ' . $tel_code_area_AR_WP_11 . ' ' . $site_tel_XXXX_a . ' ' . $site_tel_XXXX_b;
$site_tel_XXXX_whatsApp_chatOpen  = 'https://wa.me/' . $site_tel_XXXX_whatsApp . '?text=Hola,%20quiero%20hacer%20una%20consulta!';
$site_tel_XXXX_whatsApp_chatOpen_api = 'https://api.whatsapp.com/send?phone=' . $site_tel_XXXX_whatsApp . '?text=Hola,%20quiero%20hacer%20una%20consulta!';
$site_tel_XXXX_whatsApp_chatOpen_web = 'https://web.whatsapp.com/send?phone=' . $site_tel_XXXX_whatsApp . '?text=Hola,%20quiero%20hacer%20una%20consulta!';

$site_tel_XXXX_call               = 'tel:+' . $tel_prefix_call_AR_11 . $site_tel_XXXX;
$site_tel_XXXX_call_href          = 'href="tel:+' . $tel_prefix_call_AR_11 . $site_tel_XXXX . '"';
$site_tel_XXXX_call_anchor        = '<a ' . $site_tel_XXXX_call_href . '>' . $site_tel_XXXX . '</a>';
    
    
        
/* // Telephone number YYYY ------------------------------------------------- *
$site_tel_YYYY_a                     = '9999';
$site_tel_YYYY_b                     = '9999';
    
$site_tel_YYYY                       = $site_tel_YYYY_a . $site_tel_YYYY_b;
$site_tel_YYYY_formatted             = $tel_prefix_formatted_11 . ' ' . $site_tel_YYYY_a. '-' .$site_tel_YYYY_b;
    
$site_tel_YYYY_whatsApp              = $tel_prefix_whatsApp_AR_11 . $site_tel_YYYY;
$site_tel_YYYY_whatsApp_formatted    = '+' . $tel_code_country_AR . ' ' . $tel_code_area_AR_WP_11 . $site_tel_YYYY_a . ' ' . $site_tel_YYYY_b;
$site_tel_YYYY_whatsApp_chatOpen     = 'https://api.whatsapp.com/send?phone=' . $site_tel_YYYY_whatsApp;
$site_tel_YYYY_whatsApp_WAme         = 'https://wa.me/' . $site_tel_YYYY_whatsApp . '?text=Hola,%20quiero%20hacer%20una%20consulta!';
        
$site_tel_YYYY_call                  = 'tel:+' . $tel_prefix_call_AR_11 . $site_tel_YYYY;
$site_tel_YYYY_call_href             = 'href="tel:+' . $tel_prefix_call_AR_11 . $site_tel_YYYY . '"';
$site_tel_YYYY_call_anchor           = '<a ' . $site_tel_YYYY_call_href . '>' . $site_tel_YYYY . '</a>';
*/



/* // Telephone number AR ER 3447 ZZZZ -------------------------------------- *
$site_tel_ZZZZ_a                  = '0000';
$site_tel_ZZZZ_b                  = 'ZZZZ';
    
$site_tel_ZZZZ                    = $site_tel_ZZZZ_a . $site_tel_ZZZZ_b;
$site_tel_ZZZZ_formatted          = $tel_prefix_formatted_AR_3447 . ' ' . $site_tel_ZZZZ_a. '-' .$site_tel_ZZZZ_b;
    
$site_tel_ZZZZ_whatsApp           = $tel_prefix_whatsApp_AR_3447 . $site_tel_ZZZZ;
$site_tel_ZZZZ_whatsApp_formatted = '+' . $tel_code_country_AR . ' ' . $tel_code_area_AR_WP_3447 . ' ' . $site_tel_ZZZZ_a . ' ' . $site_tel_ZZZZ_b;
$site_tel_ZZZZ_whatsApp_chatOpen  = 'https://api.whatsapp.com/send?phone=' . $site_tel_ZZZZ_whatsApp;
$site_tel_ZZZZ_whatsApp_WAme      = 'https://wa.me/' . $site_tel_ZZZZ_whatsApp . '?text=Hola,%20quiero%20hacer%20una%20consulta!';
        
$site_tel_ZZZZ_call               = 'tel:+' . $tel_prefix_call_AR_3447 . $site_tel_ZZZZ;
$site_tel_ZZZZ_call_href          = 'href="tel:+' . $tel_prefix_call_AR_3447 . $site_tel_ZZZZ . '"';
$site_tel_ZZZZ_call_anchor        = '<a ' . $site_tel_ZZZZ_call_href . '>' . $site_tel_ZZZZ . '</a>';
*/
 


/* // Telephone number MX CDMX 55 2222 -------------------------------------- *
$site_tel_2222_a                  = '1111';
$site_tel_2222_b                  = '2222';
    
$site_tel_2222                    = $site_tel_2222_a . $site_tel_2222_b;
$site_tel_2222_formatted          = $tel_prefix_formatted_MX_55 . ' ' . $site_tel_2222_a. '-' .$site_tel_2222_b;
    
$site_tel_2222_whatsApp           = $tel_prefix_whatsApp_MX_55 . $site_tel_2222;
$site_tel_2222_whatsApp_formatted = '+' . $tel_code_country_MX . ' ' . $tel_code_area_MX_55 . ' ' . $site_tel_2222_a . ' ' . $site_tel_2222_b;
$site_tel_2222_whatsApp_chatOpen  = 'https://api.whatsapp.com/send?phone=' . $site_tel_2222_whatsApp;
$site_tel_2222_whatsApp_WAme      = 'https://wa.me/' . $site_tel_2222_whatsApp . '?text=Hola,%20quiero%20hacer%20una%20consulta!';
        
$site_tel_2222_call               = 'tel:+' . $tel_prefix_call_MX_55 . $site_tel_2222;
$site_tel_2222_call_href          = 'href="tel:+' . $tel_prefix_call_MX_55 . $site_tel_2222 . '"';
$site_tel_2222_call_anchor        = '<a ' . $site_tel_2222_call_href . '>' . $site_tel_2222 . '</a>'; 
*/
 
 

/* // Telephone number MX MTY 82 3333 --------------------------------------- *
$site_tel_3333_a                  = '1111';
$site_tel_3333_b                  = '3333';
    
$site_tel_3333                    = $site_tel_3333_a . $site_tel_3333_b;
$site_tel_3333_formatted          = $tel_prefix_formatted_MX_81 . ' ' . $site_tel_3333_a. '-' .$site_tel_3333_b;
    
$site_tel_3333_whatsApp           = $tel_prefix_whatsApp_MX_81 . $site_tel_3333;
$site_tel_3333_whatsApp_formatted = '+' . $tel_code_country_MX . ' ' . $tel_code_area_MX_81 . ' ' . $site_tel_3333_a . ' ' . $site_tel_3333_b;
$site_tel_3333_whatsApp_chatOpen  = 'https://api.whatsapp.com/send?phone=' . $site_tel_3333_whatsApp;
$site_tel_3333_whatsApp_WAme      = 'https://wa.me/' . $site_tel_3333_whatsApp . '?text=Hola,%20quiero%20hacer%20una%20consulta!';
        
$site_tel_3333_call               = 'tel:+' . $tel_prefix_call_MX_81 . $site_tel_3333;
$site_tel_3333_call_href          = 'href="tel:+' . $tel_prefix_call_MX_81 . $site_tel_3333 . '"';
$site_tel_3333_call_anchor        = '<a ' . $site_tel_3333_call_href . '>' . $site_tel_3333 . '</a>'; 
*/
 
 

/* // Telephone number UY MTV 94 4444 --------------------------------------- *
$site_tel_4444_a                  = '1111';
$site_tel_4444_b                  = '4444';
    
$site_tel_4444                    = $site_tel_4444_a . $site_tel_4444_b;
$site_tel_4444_formatted          = $tel_prefix_formatted_UY_94 . ' ' . $site_tel_4444_a. '-' .$site_tel_4444_b;
    
$site_tel_4444_whatsApp           = $tel_prefix_whatsApp_UY_94 . $site_tel_4444;
$site_tel_4444_whatsApp_formatted = '+' . $tel_code_country_UY . ' ' . $tel_code_area_UY_94 . ' ' . $site_tel_4444_a . ' ' . $site_tel_4444_b;
$site_tel_4444_whatsApp_chatOpen  = 'https://api.whatsapp.com/send?phone=' . $site_tel_4444_whatsApp;
$site_tel_4444_whatsApp_WAme      = 'https://wa.me/' . $site_tel_4444_whatsApp . '?text=Hola,%20quiero%20hacer%20una%20consulta!';
        
$site_tel_4444_call               = 'tel:+' . $tel_prefix_call_UY_94 . $site_tel_4444;
$site_tel_4444_call_href          = 'href="tel:+' . $tel_prefix_call_UY_94 . $site_tel_4444 . '"';
$site_tel_4444_call_anchor        = '<a ' . $site_tel_4444_call_href . '>' . $site_tel_4444 . '</a>';
*/

 

/* // Telephone number USA Miami 305 6666 ----------------------------------- *
$site_tel_6666_a                  = '1111';
$site_tel_6666_b                  = '6666';
    
$site_tel_6666                    = $site_tel_6666_a . $site_tel_6666_b;
$site_tel_6666_formatted          = $tel_prefix_formatted_USA_305 . ' ' . $site_tel_6666_a. '-' .$site_tel_6666_b;
    
$site_tel_6666_whatsApp           = $tel_prefix_whatsApp_USA_305 . $site_tel_6666;
$site_tel_6666_whatsApp_formatted = '+' . $tel_code_country_NANP . ' ' . $tel_code_area_USA_94 . ' ' . $site_tel_6666_a . ' ' . $site_tel_6666_b;
$site_tel_6666_whatsApp_chatOpen  = 'https://api.whatsapp.com/send?phone=' . $site_tel_6666_whatsApp;
$site_tel_6666_whatsApp_WAme      = 'https://wa.me/' . $site_tel_6666_whatsApp . '?text=Hola,%20quiero%20hacer%20una%20consulta!';
        
$site_tel_6666_call               = 'tel:+' . $tel_prefix_call_USA_305 . $site_tel_6666;
$site_tel_6666_call_href          = 'href="tel:+' . $tel_prefix_call_USA_305 . $site_tel_6666 . '"';
$site_tel_6666_call_anchor        = '<a ' . $site_tel_6666_call_href . '>' . $site_tel_6666 . '</a>';
*/


        
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