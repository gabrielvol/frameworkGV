<?php
    /* // URLS -------------------------------------------------------------- */
    $domain_global      = 'sitiocomar';
    $url_global         = 'http://www.'. $domain_global;
    $url_openGraph      = 'http://www.'. $domain_global;
    
    $domain_sec         = 'sitiocomar';
    $url_sec            = 'http://www.'. $domain_sec;
    
    $url_index          = '/nuevo/';
 // $url-seccion        = '/nuevo/seccion.php';
 // $url-seccion        = '/nuevo/seccion.php';
 // $url-seccion        = '/nuevo/seccion.php';
 // $url-seccion        = '/nuevo/seccion.php';
 // $url-seccion        = '/nuevo/seccion.php';
    $url_contacto       = '/nuevo/contacto.php';
    
 // $url_inicio         = "#inicio";
 // $url-seccion        = "#seccion"; 
 // $url-seccion        = "#seccion"; 
 // $url-seccion        = "#seccion"; 
 // $url-seccion        = "#seccion";  
 // $url_contacto       = "#contacto";
    
    $url_contacto_full  = $url_global . $url_contacto;

 // LOAD urls.gettext.var.inc
    
    $href_index         = 'href="'. $url_index .'"';
 // $href-seccion       = 'href="'. $url_xxx .'"';
 // $href-seccion       = 'href="'. $url_xxx .'"';
 // $href-seccion       = 'href="'. $url_xxx .'"';
 // $href-seccion       = 'href="'. $url_xxx .'"';
 // $href-seccion       = 'href="'. $url_xxx .'"';
    $href_contacto      = 'href="'. $url_contacto .'"';
    
    $url_actual     = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>