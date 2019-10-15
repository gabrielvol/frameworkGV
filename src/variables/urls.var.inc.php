<?php
    // -------------------------------------------------------------------------
    // URLS
    $domain_global  = "sitiocomar";
    $url_global     = "http://www.".$domain_global;
    $url_openGraph  = "http://www.".$domain_global;
    
    $url-seccion        = "/clientes/charly/seccion.php";
    $url_contacto       = "/clientes/charly/contacto.php";
    $url_contacto_full  = $url_global . $url_contacto;
    
    $href-seccion  = 'href="'.$url-seccion.'"';
    $href_contacto = 'href="'.$url_contacto.'"';
    
    $url_actual     = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>