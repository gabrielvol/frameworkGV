<?php
/* // Domains --------------------------------------------------------------- */
    $domain_global      = 'sitiocomar';
    $domain_sec         = 'sitiocomar';
    
    $url_global         = 'http://www.'. $domain_global;
    $url_sec            = 'http://www.'. $domain_sec;
    
    
/* // Hashes ---------------------------------------------------------------- */
    $hash_main          = '#main';
    $hash_inicio        = '#inicio';
//    $hash-SECCION       = '#seccion';
//    $hash-SECCION       = '#seccion';
//    $hash-SECCION       = '#seccion';
    
    
/* // url ------------------------------------------------------------------- */
    $url_root           = $url_dir .'/';
    $url_index          = $url_dir .'/index.php';       // $nav_pageCurrent 1
    $url_contacto       = $url_dir .'/contacto.php';    // $nav_pageCurrent 0
//    $url-PAGINA         = $url_dir .'/pagina.php';      // $nav_pageCurrent 0
//    $url-PAGINA         = $url_dir .'/pagina.php';      // $nav_pageCurrent 0
//    $url-PAGINA         = $url_dir .'/pagina.php';      // $nav_pageCurrent 0

    $url_main_hs        = $url_dir .'/'. $hash_main;
    $url_inicio_hs      = $url_dir .'/'. $hash_inicio;
//    $url-SECCION_hs      = $url_dir .'/'. $hash_SECCION;
//    $url-SECCION_hs      = $url_dir .'/'. $hash_SECCION;
//    $url-SECCION_hs      = $url_dir .'/'. $hash_SECCION;  

//    $url_quienesSomos_hs_INDEX    = $url_index . $hash_quienesSomos; 
//    $url-SECCION_hs_PAGINA        = $url_PAGINA . $hash_SECCION;
//    $url-SECCION_hs_PAGINA        = $url_PAGINA . $hash_SECCION;
//    $url-SECCION_hs_PAGINA        = $url_PAGINA . $hash_SECCION;
  
    
/* // global urls / full urls ----------------------------------------------- */
    $url_global_full        = $url_global . $url_dir;
    
    $url_index_full         = $url_global . $url_index;
    $url_contacto_full      = $url_global . $url_contacto;
//    $url-PAGINA_full        = $url_global . $url_PAGINA;
//    $url-PAGINA_full        = $url_global . $url_PAGINA;
//    $url-PAGINA_full        = $url_global . $url_PAGINA;
    
    $url_openGraph_global   = $url_global_full;
    
    
/* // href ------------------------------------------------------------------ */ 
    $href_root          = 'href="'. $url_root .'"'; 
    $href_index         = 'href="'. $url_index .'"';
    $href_contacto      = 'href="'. $url_contacto .'"';
//    $href-PAGINA        = 'href="'. $url_PAGINA .'"';
//    $href-PAGINA        = 'href="'. $url_PAGINA .'"';
//    $href-PAGINA        = 'href="'. $url_PAGINA .'"';
    
    $href_main_hs       = 'href="'. $url_main_hs .'"';
    $href_inicio_hs     = 'href="'. $url_inicio_hs .'"';
//    $href-SECCION_hs    = 'href="'. $url_SECCION_hs .'"';
//    $href-SECCION_hs    = 'href="'. $url_SECCION_hs .'"';
//    $href-SECCION_hs    = 'href="'. $url_SECCION_hs .'"';

//    $href_quienesSomos_hs_INDEX = 'href="'. $url_quienesSomos_hs_INDEX .'"';
//    $href-SECCION_hs_PAGINA      = 'href="'. $url_SECCION_hs_PAGINA .'"';
//    $href-SECCION_hs_PAGINA      = 'href="'. $url_SECCION_hs_PAGINA .'"';
//    $href-SECCION_hs_PAGINA      = 'href="'. $url_SECCION_hs_PAGINA .'"';
    
    
/* // misc / experimental --------------------------------------------------- */ 
    
//    $url_actual     = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>