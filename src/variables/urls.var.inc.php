<?php
    // -------------------------------------------------------------------------
    // URLS
    $domain_global  = 'sitiocomar';
    $url_global     = 'http://www.'. $domain_global;
    $url_openGraph  = 'http://www.'. $domain_global;
    
    $domain_sec     = 'sitiocomar';
    $url_sec        = 'http://www.'. $domain_sec;
    
    $url-seccion        = '/nuevo/seccion.php';
    $url_index          = '/nuevo/';
    $url_contacto       = '/nuevo/contacto.php';
    $url_contacto_full  = $url_global . $url_contacto;
    
    $href-seccion  = 'href="'. $url .'"';
    $href_index    = 'href="'. $url_index .'"';
    $href_contacto = 'href="'. $url_contacto .'"';
    
    $url_actual     = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>