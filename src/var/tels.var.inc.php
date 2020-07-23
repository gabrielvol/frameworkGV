<?php
    /* // Tel prefixes ------------------------------------------------------ */
    $tel_code_country               = '54';
    $tel_code_area                  = '11';
    $tel_code_area_int              = '911';
    
    $tel_prefix_whatsapp            = $tel_code_country . $tel_code_area_int;
    $tel_prefix_call                = $tel_code_country . $tel_code_area;    
    $tel_prefix_formatted           = '(11)';
    
            
    /* // Tel numbers ------------------------------------------------------- */
    $site_tel_main_a             = '0000';
    $site_tel_main_b             = '0000';
    
    $site_tel_sec_a              = '9999';
    $site_tel_sec_b              = '9999';
    
    $site_fax_a                  = '2222';
    $site_fax_b                  = '3333';
    
//    $site_tel_NOMBRE_a           = '1111';
//    $site_tel_NOMBRE_b           = '2222';
    
    
    /* // Telephone number Main --------------------------------------------- */
    $site_tel_main               = $site_tel_main_a . $site_tel_main_b;
    $site_tel_main_formatted     = $tel_prefix_formatted .' '. $site_tel_main_a .'-'. $site_tel_main_b;
    
    $site_tel_main_whatsapp      = $tel_prefix_whatsapp . $site_tel_main;
    $site_whatsapp_main_chatOpen = 'https://api.whatsapp.com/send?phone='. $site_tel_main_whatsapp;
    $site_whatsapp_main_WAme     = 'https://wa.me/'. $site_tel_main_whatsapp .'?text=I’m%20interested%20in%20your%20car%20for%20sale';
        
    $site_tel_call_main          = 'tel:+'. $tel_prefix_call . $site_tel_main;
    $site_tel_call_href_main     = 'href="tel:+'. $tel_prefix_call . $site_tel_main .'"';
    $site_tel_call_anchor_main   = '<a '. $site_tel_call_href_main .'>'. $site_tel_main .'</a>'; 
    
        
    /* // Telephone number Secondary ---------------------------------------- */
    $site_tel_sec                = $site_tel_sec_a . $site_tel_sec_b;
    $site_tel_sec_formatted      = $tel_prefix_formatted. ' '. $site_tel_sec_a. '-' .$site_tel_sec_b;
    
    $site_tel_sec_whatsapp       = $tel_prefix_whatsapp . $site_tel_sec;
    $site_whatsapp_sec_chatOpen  = 'https://api.whatsapp.com/send?phone='. $site_tel_sec_whatsapp;
    $site_whatsapp_sec_WAme      = 'https://wa.me/'. $site_tel_sec_whatsapp .'?text=I’m%20interested%20in%20your%20car%20for%20sale';
        
    $site_tel_call_sec           = 'tel:+'. $tel_prefix_call . $site_tel_sec;
    $site_tel_call_href_sec      = 'href="tel:+'. $tel_prefix_call . $site_tel_sec .'"';
    $site_tel_call_anchor_sec    = '<a '. $site_tel_call_href_sec .'>'. $site_tel_sec .'</a>'; 
    
    
    /* // Fax number  ------------------------------------------------------- */
    $site_fax                    = $site_fax_a . $site_fax_b;
    $site_fax_formatted          = $tel_prefix_formatted .' '. $site_fax_a .'-'. $site_fax_b;
        
    $site_tel_call_fax           = 'tel:+'. $tel_prefix_call . $site_tel_fax;
    $site_tel_call_href_fax      = 'href="tel:+'. $tel_prefix_call . $site_tel_fax .'"';
    $site_tel_call_anchor_fax    = '<a '. $site_tel_call_href_fax .'>'. $site_tel_fax .'</a>'; 
    
    
    /* // Telephone number NOMBRE ------------------------------------------- */
//    $site_tel_NOMBRE               = $site_tel_NOMBRE_a . $site_tel_NOMBRE_b;
//    $site_tel_NOMBRE_formatted     = $tel_prefix_formatted .' '. $site_tel_NOMBRE_a .'-'. $site_tel_NOMBRE_b;
    
//    $site_tel_NOMBRE_whatsapp      = $tel_prefix_whatsapp . $site_tel_NOMBRE;
//    $site_whatsapp_NOMBRE_chatOpen = 'https://api.whatsapp.com/send?phone='. $site_tel_NOMBRE_whatsapp;
//    $site_whatsapp_NOMBRE_WAme     = 'https://wa.me/'. $site_tel_NOMBRE_whatsapp .'?text=I’m%20interested%20in%20your%20car%20for%20sale';
        
//    $site_tel_call_NOMBRE          = 'tel:+'. $tel_prefix_call . $site_tel_NOMBRE;
//    $site_tel_call_href_NOMBRE     = 'href="tel:+'. $tel_prefix_call . $site_tel_NOMBRE .'"';
//    $site_tel_call_anchor_NOMBRE   = '<a '. $site_tel_call_href_NOMBRE .'>'. $site_tel_NOMBRE .'</a>'; 
    
    
    /* // Miscelaneous ------------------------------------------------------ */ 
    $site_whatsapp_chatOpen_global        = $site_whatsapp_main_chatOpen;
?>