<?php
    // -------------------------------------------------------------------------
    // URLS
    $url_global = "http://wwwsitecomar";
    $urlActual = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    
    $url_section_contacto = $url_global."/contacto.php";
    
    // -------------------------------------------------------------------------
    // MISCELANEOUS
    $dateThisYear = (int)date('Y');    
    
    // -------------------------------------------------------------------------
    // COMPANY DATA
    $company_name_full    = "CompanyNameFull";
    $company_name_short   = "CompanyNameShort";
    $company_name_title   = "CompanyNameTitle";

        //-- Descriptions
    $site_desc_global     = ""; 
    $site_desc_global_GB  = ""; 
    
        //-- Address
    $company_address_main       = "aaaaaaaaaaaaaaaaaaaaaaaaaa";
    $company_address_main_GB    = "bbbbbbbbbbbbbbbbbbbbbbbbbb  Autonomous City of Buenos Aires";
    
        //-- Tels
    $company_tel_main              = "12345678";
    $company_tel_main_formatted    = "(011) 1234-5678";
    $company_tel_main_countryCode  = "+54 911 " . $telN_main;
    $company_tel_main_whatsapp     = "54911".$telN_main;
    
    $company_tel_sec               = "12345678";
    $company_tel_sec_countryCode   = "+54 911 " . $telN_sec;   
    
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
    
    // -------------------------------------------------------------------------
    // FILE DOWNLOADING 
    
    // section_section   
    $file_pdf01 = 'href="/files/archivopdf01.pdf" download="titulo_pricipal-titulo_secundario.pdf"';
    
    $file_href______pdf02 = 'href="/files/archivopdf02.pdf"';
    $file_download__pdf02 = 'download="titulo_pricipal-titulo_secundario.pdf"';
    
    // section_section -- Gettext
    $file_href______pdf03 = '/files/archivopdf02.pdf';
    $file_download__pdf03 = 'titulo_pricipal-titulo_secundario.pdf';
    $file_hrefDownload_pdf03 = 'href="'.$file_href______pdf03.'" download="'.$file_download__pdf03.'"';
?>