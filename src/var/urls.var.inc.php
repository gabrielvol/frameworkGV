<?php
    /* // URLS -------------------------------------------------------------- */
    $domain_global      = 'sitiocomar';
    $domain_sec         = 'sitiocomar';
    
    $url_global         = 'http://www.'. $domain_global;
    $url_sec            = 'http://www.'. $domain_sec;
    
    $url_openGraph_global   = $url_global . $url_dir;
    
    
    $url_index          = $url_dir .'/';                // $nav_pageCurrent 0
//    $url-PAGINA         = $url_dir .'/pagina.php';      // $nav_pageCurrent 0
//    $url-PAGINA         = $url_dir .'/pagina.php';      // $nav_pageCurrent 0
//    $url-PAGINA         = $url_dir .'/pagina.php';      // $nav_pageCurrent 0
    $url_contacto       = $url_dir .'/contacto.php';    // $nav_pageCurrent 0
    
//    $url_inicio         = "/#inicio";
//    $url-PAGINA         = "/#seccion"; 
//    $url-PAGINA         = "/#seccion"; 
//    $url-PAGINA         = "/#seccion"; 
//    $url_contacto       = "/#contacto";
    
    $url_contacto_full  = $url_global . $url_contacto;
    
    $href_index         = 'href="'. $url_index .'"';
//    $href-PAGINA        = 'href="'. $url_PAGINA .'"';
//    $href-PAGINA        = 'href="'. $url_PAGINA .'"';
//    $href-PAGINA        = 'href="'. $url_PAGINA .'"';
//    $href-PAGINA        = 'href="'. $url_PAGINA .'"';
//    $href-PAGINA        = 'href="'. $url_PAGINA .'"';
    $href_contacto      = 'href="'. $url_contacto .'"';
    
//    $url_actual     = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>