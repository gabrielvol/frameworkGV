<?php
    // -------------------------------------------------------------------------
    // URLS
    $domain_global  = "sitiocomar";
    $url_global     = "http://www.".$domain_global;
    $url_openGraph  = "http://www.".$domain_global;
    
    $url_seccion = "/nuevo/seccion.php";
    
    $href_seccion = 'href="'.$url_seccion.'"';
    
    $urlActual      = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>