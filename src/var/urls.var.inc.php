<?php
    /* // URLS -------------------------------------------------------------- */
    $domain_global      = 'sitiocomar';
    $domain_sec         = 'sitiocomar';
    
    $url_global         = 'http://www.'. $domain_global;
    $url_sec            = 'http://www.'. $domain_sec;
    
    $url_openGraph_global   = $url_global;
    
    
    $url_index          = '/nuevo/';                //$nav_pageCurrent 0
//    $url-seccion        = '/nuevo/seccion.php';     //$nav_pageCurrent 0
//    $url-seccion        = '/nuevo/seccion.php';     //$nav_pageCurrent 0
//    $url-seccion        = '/nuevo/seccion.php';     //$nav_pageCurrent 0
    $url_contacto       = '/nuevo/contacto.php';    //$nav_pageCurrent 0
    
//    $url_inicio         = "#inicio";
//    $url-seccion        = "#seccion"; 
//    $url-seccion        = "#seccion"; 
//    $url-seccion        = "#seccion"; 
//    $url-seccion        = "#seccion";  
//    $url_contacto       = "#contacto";
    
    $url_contacto_full  = $url_global . $url_contacto;

//    LOAD urls.gettext.var.inc
    
    $href_index         = 'href="'. $url_index .'"';
//    $href-xxx           = 'href="'. $url_xxx .'"';
//    $href-xxx           = 'href="'. $url_xxx .'"';
//    $href-xxx           = 'href="'. $url_xxx .'"';
//    $href-xxx           = 'href="'. $url_xxx .'"';
//    $href-xxx           = 'href="'. $url_xxx .'"';
    $href_contacto      = 'href="'. $url_contacto .'"';
    
    $url_actual     = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>