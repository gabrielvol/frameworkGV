<?php        
    // -------------------------------------------------------------------------
        //-- Tels
    $company_tel_main_a            = "1234";
    $company_tel_main_b            = "5678";
    
    $company_tel_sec_a             = "1234";
    $company_tel_sec_b             = "5678";
    
    $company_tel_main              = $company_tel_main_a . $company_tel_main_b;
    $company_tel_main_formatted    = "(011) " . $company_tel_main_a . "-" . $company_tel_main_b;
    $company_tel_main_countryCode  = "+54 911 " . $company_tel_main;
    $company_tel_main_whatsapp     = "54911".$company_tel_main;
    
    $company_tel_sec               = $company_tel_sec_a . $company_tel_sec_b;
    $company_tel_sec_formatted     = "(011) " . $company_tel_sec_a . "-" . $company_tel_sec_b;
    $company_tel_sec_countryCode   = "+54 911 " . $company_tel_sec;
    $company_tel_sec_whatsapp      = "54911" . $company_tel_sec;
?>