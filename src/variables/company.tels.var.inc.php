<?php        
    // -------------------------------------------------------------------------
        //-- Prefixes
    $tel_code_country              = '54';
    $tel_code_area                 = '911';
    $tel_prefix_watsapp            = $tel_code_country . $tel_code_area;
    
    $tel_formatted_prefix          = '(011)';
    
            
        //-- Tels
    $company_tel_main_a            = '0000';
    $company_tel_main_b            = '0000';
    
    $company_tel_sec_a             = '9999';
    $company_tel_sec_b             = '9999';
    
    $company_tel_main              = $company_tel_main_a . $company_tel_main_b;
    $company_tel_main_formatted    = $tel_formatted_prefix .' '. $company_tel_main_a .'-'. $company_tel_main_b;
    $company_tel_main_code_country = '+'. $tel_code_country .' '.$tel_code_area.' '. $company_tel_main;
    
    $company_tel_main_whatsapp     = $tel_prefix_watsapp . $company_tel_main;
    $social_whatsapp_chatOpen      = 'https://api.whatsapp.com/send?phone='. $company_tel_main_whatsapp;
    $social_whatsapp_WAme_url      = 'https://wa.me/'. $company_tel_main_whatsapp .'?text=I’m%20interested%20in%20your%20car%20for%20sale';
    
    $company_tel_sec               = $company_tel_sec_a . $company_tel_sec_b;
    $company_tel_sec_formatted     = $tel_formatted_prefix. ' '. $company_tel_sec_a. '-' .$company_tel_sec_b;
    $company_tel_sec_code_country  = '+'. $tel_code_country .' '. $tel_code_area .' '. $company_tel_sec;
    $company_tel_sec_whatsapp      = $tel_prefix_watsapp . $company_tel_sec;
?>