<?php
    /* // Tel prefixes ------------------------------------------------------ */
    $tel_code_country               = '54';
    $tel_code_area                  = '11';
    $tel_code_area_int              = '911';
    
    $tel_prefix_whatsapp            = $tel_code_country . $tel_code_area_int;
    $tel_prefix_telHREF             = $tel_code_country . $tel_code_area;    
    $tel_prefix_formatted           = '(11)';
    
            
    /* // Tel numbers ------------------------------------------------------- */
    $company_tel_main_a             = '0000';
    $company_tel_main_b             = '0000';
    
    $company_tel_sec_a              = '9999';
    $company_tel_sec_b              = '9999';
    
    $company_fax_a                  = '2222';
    $company_fax_b                  = '3333';
    
 // $company_tel_NOMBRE_a           = '1111';
 // $company_tel_NOMBRE_b           = '2222';
    
    
    /* // Telephone number Main --------------------------------------------- */
    $company_tel_main               = $company_tel_main_a . $company_tel_main_b;
    $company_tel_main_formatted     = $tel_prefix_formatted .' '. $company_tel_main_a .'-'. $company_tel_main_b;
    $company_tel_main_code_country  = '+'. $tel_code_country .' '. $tel_code_area .' '. $company_tel_main;
    
    $company_tel_main_whatsapp      = $tel_prefix_whatsapp . $company_tel_main;
    $social_whatsapp_main_chatOpen  = 'https://api.whatsapp.com/send?phone='. $company_tel_main_whatsapp;
    $social_whatsapp_main_WAme_url  = 'https://wa.me/'. $company_tel_main_whatsapp .'?text=I’m%20interested%20in%20your%20car%20for%20sale';
    
    $social_telHREF_main            = 'tel:+'. $tel_prefix_telHREF . $company_tel_main;
    
    
    /* // Telephone number Secondary ---------------------------------------- */
    $company_tel_sec                = $company_tel_sec_a . $company_tel_sec_b;
    $company_tel_sec_formatted      = $tel_prefix_formatted. ' '. $company_tel_sec_a. '-' .$company_tel_sec_b;
    $company_tel_sec_code_country   = '+'. $tel_code_country .' '. $tel_code_area .' '. $company_tel_sec;
    
    $social_telHREF_sec            = 'tel:+'. $tel_prefix_telHREF . $company_tel_sec;
    
    
    /* // Fax number  ------------------------------------------------------- */
    $company_fax                    = $company_fax_a . $company_fax_b;
    $company_fax_formatted          = $tel_prefix_formatted .' '. $company_fax_a .'-'. $company_fax_b;
    $company_fax_code_country       = '+'. $tel_code_country .' '. $tel_code_area .' '. $company_fax;  
    
    $social_telHREF_fax             = 'tel:+'. $tel_prefix_telHREF . $company_tel_fax;
    
    
    /* // Telephone number NOMBRE ------------------------------------------- */
 // $company_tel_NOMBRE               = $company_tel_NOMBRE_a . $company_tel_NOMBRE_b;
 // $company_tel_NOMBRE_formatted     = $tel_prefix_formatted .' '. $company_tel_NOMBRE_a .'-'. $company_tel_NOMBRE_b;
 // $company_tel_NOMBRE_code_country  = '+'. $tel_code_country .' '. $tel_code_area .' '. $company_tel_NOMBRE;
    
 // $company_tel_NOMBRE_whatsapp      = $tel_prefix_whatsapp . $company_tel_NOMBRE;
 // $social_whatsapp_NOMBRE_chatOpen  = 'https://api.whatsapp.com/send?phone='. $company_tel_NOMBRE_whatsapp;
 // $social_whatsapp_NOMBRE_WAme_url  = 'https://wa.me/'. $company_tel_NOMBRE_whatsapp .'?text=I’m%20interested%20in%20your%20car%20for%20sale';
    
 // $social_telHREF_NOMBRE            = 'tel:+'. $tel_prefix_telHREF . $company_tel_NOMBRE; 
    
    
    /* // Miscelaneous ------------------------------------------------------ */ 
    $social_whatsapp_chatOpen       = $social_whatsapp_main_chatOpen;
?>