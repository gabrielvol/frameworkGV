<?php
    // URLS
    $url = "http://wwwsitecomar";
    $urlActual = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    
    // Misc
    $dateThisYear = (int)date('Y');
    
    // Company
    $company_name_full    = "CompanyNameFull";
    $company_name_short   = "CompanyNameShort";
        // Tels
    $company_tel_main              = "12345678";
    $company_tel_main_countryCode  = "+54 911 " . $telN_main;
    $company_tel_sec               = "12345678";
    $company_tel_sec_countryCode   = "+54 911 " . $telN_sec;
    
    // Social
    $urlTW      = "https://www.twitter.com/";
    $urlFB      = "https://www.facebook.com/usuario";
    $urlIG      = "https://www.instagram.com/usuario";
    $urlLI      = "https://www.linkedin.com/usuario";
    $urlWA      = "https://api.whatsapp.com/send?phone=5491100001111";
    $urlWAme    = "https://wa.me/5491100001111?text=I'm%20interested%20in%20your%20car%20for%20sale";
    $urlEM      = "correo@servidor.com";
    $urlTO      = "mailto:".$urlEM;
    $urlGM      = "https://goo.gl/maps/aaaaaaaaaaaa";
    $urlYT      = "https://www.youtube.com/user/ffffffffffffff"; 
    
    // Header
    $logoImgBgBefore        = 0;
    
    // Nav
    $navDrawer              = 1;
    $navAcc                 = 0;
    $navHorizontalCenterAT  = 0;
?>