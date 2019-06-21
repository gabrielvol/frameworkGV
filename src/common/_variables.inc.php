<?php
    // -------------------------------------------------------------------------
    // URLS
    $url_global = "http://wwwsitecomar";
    $urlActual = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    
    // -------------------------------------------------------------------------
    // MISCELANEOUS
    $dateThisYear = (int)date('Y');    
    
    // -------------------------------------------------------------------------
    // COMPANY DATA
    $company_name_full    = "CompanyNameFull";
    $company_name_short   = "CompanyNameShort";
    
        //-- Address
    $company_address_main          = "aaaaaaaaaaaaaaaaaaaaaaaaaa";
    $company_address_main_en       = "bbbbbbbbbbbbbbbbbbbbbbbbbb  Autonomous City of Buenos Aires";
    
        //-- Tels
    $company_tel_main              = "12345678";
    $company_tel_main_formatted    = "(011) 1234-5678";
    $company_tel_main_countryCode  = "+54 911 " . $telN_main;
    $company_tel_main_whatsapp     = "54911".$telN_main;
    
    $company_tel_sec               = "12345678";
    $company_tel_sec_countryCode   = "+54 911 " . $telN_sec;   

        //-- Titling
    $site_desc_global = ""; 
    
    // -------------------------------------------------------------------------
    // SOCIAL NETWORKS
    $social_facebook_url        = "https://www.facebook.com/usuario";
    $social_instagram_url       = "https://www.instagram.com/usuario";
    $social_whatsapp_chatOpen   = "https://api.whatsapp.com/send?phone=".$company_tel_main_whatsapp;
    $social_whatsapp_WAme_url   = "https://wa.me/".$company_tel_main_whatsapp."?text=I'm%20interested%20in%20your%20car%20for%20sale";
    
    $social_email_addressMain   = "correo@servido.com";
    $social_mailto_addressMain  = "mailto:".$social_email_addressMain;
    
    $social_googleMap_url       = "https://goo.gl/maps/aaaaaaaaaaaa";
    $social_googleYouTube_url   = "https://www.youtube.com/user/ffffffffffffff"; 
    
    $social_twitter_url         = "https://www.twitter.com/usuario";
    $social_linkedin_url        = "https://www.linkedin.com/usuario";
    
    // -------------------------------------------------------------------------
    // HEADER
    $logoImgBgBefore            = 0;
    
    // -------------------------------------------------------------------------
    // NAVIGATION
    $navDrawer_act              = 1;
    $navAcc_act                 = 0;
    $navHorizontalCenter_AT_act = 0;
?>