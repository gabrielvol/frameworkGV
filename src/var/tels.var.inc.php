<?php
    /* // Tel prefixes ------------------------------------------------------ */
    $tel_code_country               = '54';
    
    $tel_code_area                  = '11';
    $tel_code_area_int              = '911';
    
    $tel_prefix_whatsapp            = $tel_code_country . $tel_code_area_int;
    $tel_prefix_call                = $tel_code_country . $tel_code_area;    
    $tel_prefix_formatted           = '(11)';  
    
    
//    $tel_alt_code_area              = '2325';
//    $tel_alt_code_area_int          = '02325';
    
//    $tel_alt_prefix_whatsapp        = $tel_code_country . $tel_alt_code_area_int;
//    $tel_alt_prefix_call            = $tel_code_country . $tel_alt_code_area;  
//    $tel_alt_prefix_formatted       = '(02325)';       
    
    
    
    /* // Telephone number PRINCIPAL ---------------------------------------- */
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
    
    
        
    /* // Telephone number SECUNDARIO --------------------------------------- */
//    $site_tel_NOMBRE_a              = '9999';
//    $site_tel_NOMBRE_b              = '9999';
    
//    $site_tel_NOMBRE                = $site_tel_NOMBRE_a . $site_tel_NOMBRE_b;
//    $site_tel_NOMBRE_formatted      = $tel_prefix_formatted. ' '. $site_tel_NOMBRE_a. '-' .$site_tel_NOMBRE_b;
    
//    $site_tel_NOMBRE_whatsapp           = $tel_prefix_whatsapp . $site_tel_NOMBRE;
//    $site_tel_NOMBRE_whatsapp_formatted = '+'. $tel_code_country .' '. $tel_code_area_int . $site_tel_NOMBRE_a .' '. $site_tel_NOMBRE_b;
//    $site_tel_NOMBRE_whatsapp_chatOpen  = 'https://api.whatsapp.com/send?phone='. $site_tel_NOMBRE_whatsapp;
//    $site_tel_NOMBRE_whatsapp_WAme      = 'https://wa.me/'. $site_tel_NOMBRE_whatsapp .'?text=I’m%20interested%20in%20your%20car%20for%20sale';
        
//    $site_tel_NOMBRE_call           = 'tel:+'. $tel_prefix_call . $site_tel_NOMBRE;
//    $site_tel_NOMBRE_call_href      = 'href="tel:+'. $tel_prefix_call . $site_tel_NOMBRE .'"';
//    $site_tel_NOMBRE_call_anchor    = '<a '. $site_tel_NOMBRE_call_href .'>'. $site_tel_NOMBRE .'</a>'; 
    
    
        
    /* // Telephone number ALT ---------------------------------------------- */
//    $site_tel_alt_NOMBRE_a              = '9999';
//    $site_tel_alt_NOMBRE_b              = '9999';
    
//    $site_tel_alt_NOMBRE                = $site_tel_alt_NOMBRE_a . $site_tel_alt_NOMBRE_b;
//    $site_tel_alt_NOMBRE_formatted      = $tel_alt_prefix_formatted. ' '. $site_tel_alt_NOMBRE_a. '-' .$site_tel_alt_NOMBRE_b;
    
//    $site_tel_alt_NOMBRE_whatsapp           = $tel_alt_prefix_whatsapp . $site_tel_alt_NOMBRE;
//    $site_tel_alt_NOMBRE_whatsapp_formatted = '+'. $tel_alt_code_country .' '. $tel_alt_code_area_int . $site_tel_alt_NOMBRE_a .' '. $site_tel_alt_NOMBRE_b;
//    $site_tel_alt_NOMBRE_whatsapp_chatOpen  = 'https://api.whatsapp.com/send?phone='. $site_tel_alt_NOMBRE_whatsapp;
//    $site_tel_alt_NOMBRE_whatsapp_WAme      = 'https://wa.me/'. $site_tel_alt_NOMBRE_whatsapp .'?text=I’m%20interested%20in%20your%20car%20for%20sale';
        
//    $site_tel_alt_NOMBRE_call           = 'tel:+'. $tel_alt_prefix_call . $site_tel_alt_NOMBRE;
//    $site_tel_alt_NOMBRE_call_href      = 'href="tel:+'. $tel_alt_prefix_call . $site_tel_alt_NOMBRE .'"';
//    $site_tel_alt_NOMBRE_call_anchor    = '<a '. $site_tel_alt_NOMBRE_call_href .'>'. $site_tel_alt_NOMBRE .'</a>'; 
    
    
    
    /* // Fax number  ------------------------------------------------------- */
//    $site_fax_a                  = '2222';
//    $site_fax_b                  = '3333';
    
//    $site_fax                    = $site_fax_a . $site_fax_b;
//    $site_fax_formatted          = $tel_prefix_formatted .' '. $site_fax_a .'-'. $site_fax_b;
        
//    $site_fax_call           = 'tel:+'. $tel_prefix_call . $site_tel_fax;
//    $site_fax_call_href      = 'href="tel:+'. $tel_prefix_call . $site_tel_fax .'"';
//    $site_fax_call_anchor    = '<a '. $site_fax_call_href .'>'. $site_tel_fax .'</a>'; 
?>