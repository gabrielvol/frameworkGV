<?php        
    // -------------------------------------------------------------------------
        //-- Tels
    $company_tel_main_a            = '0000';
    $company_tel_main_b            = '0000';
    
    $company_tel_sec_a             = '9999';
    $company_tel_sec_b             = '9999';
    
    $company_tel_main              = $company_tel_main_a . $company_tel_main_b;
    $company_tel_main_formatted    = '(011) '. $company_tel_main_a .'-'. $company_tel_main_b;
    $company_tel_main_countryCode  = '+54 911 '. $company_tel_main;
    
    $company_tel_main_whatsapp     = '54911'. $company_tel_main;
    $social_whatsapp_chatOpen      = 'https://api.whatsapp.com/send?phone='. $company_tel_main_whatsapp;
    $social_whatsapp_WAme_url      = 'https://wa.me/'. $company_tel_main_whatsapp .'?text=I’m%20interested%20in%20your%20car%20for%20sale';
    
    $company_tel_sec               = $company_tel_sec_a . $company_tel_sec_b;
    $company_tel_sec_formatted     = '(011) '. $company_tel_sec_a. '-' .$company_tel_sec_b;
    $company_tel_sec_countryCode   = '+54 911 '. $company_tel_sec;
    $company_tel_sec_whatsapp      = '54911'. $company_tel_sec;
?>