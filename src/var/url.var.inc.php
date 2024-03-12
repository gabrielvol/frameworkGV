<?php
/* * NombreDeProyecto * ========================================================
   URL Variables [/src/var/url.var.inc.php]
   ========================================================================== */

/* // Descripcion ----------------------------------------------------------- */
// Definición de urls y href del sitio.
//
// #url #href #hash #gettext

/* // Hashes ---------------------------------------------------------------- */
$hash_body          = '#body';
$hash_top           = '#header';
$hash_main          = '#main';
//$hash_inicio        = '#inicio';
//$hash_contacto      = '#contacto';
// $hash-SECCION       = '#seccion';
// $hash-SECCION       = '#seccion';
// $hash-SECCION       = '#seccion';
    
    

/* // url ------------------------------------------------------------------- */
// Los vínculos que tienen un hash creado deben ser comentados en la siguiente
// lista

$url_root           = $dir_env . '/';
$url_index          = $dir_env . '/index.php';
$url_home           = $dir_env . '/home.php';
$url_contacto       = $dir_env . '/contacto.php';
//$url_gracias        = $dir_env . '/gracias.php';
//$url_construccion   = $dir_env . '/construccion.php';
//$url_copyright      = $dir_env . '/legal/copyright.php';
// $url_PAGINA         = $dir_env . '/pagina.php';
// $url_PAGINA         = $dir_env . '/pagina.php';
// $url_PAGINA         = $dir_env . '/pagina.php';

$url_logo           = $url_root;

$url_top_hs         = $dir_env . '/' . $hash_top;
$url_main_hs        = $dir_env . '/' . $hash_main;
//$url_inicio_hs      = $dir_env . '/' . $hash_inicio;
//$url_contacto_hs    = $dir_env . '/' . $hash_contacto;
// $url_SECCION_hs     = $dir_env . '/' . $hash_SECCION;
// $url_SECCION_hs     = $dir_env . '/' . $hash_SECCION;
// $url-SECCION-hs     = $dir_env . '/' . $hash-SECCION;
// $url-SECCION-hs     = $dir_env . '/' . $hash-SECCION;

$url_top_hs_HOME             = $url_home . $hash_top;
$url_main_hs_HOME             = $url_home . $hash_main; 
//$url_inicio_hs_HOME           = $url_home . $hash_inicio;
//$url_contacto_hs_HOME         = $url_home . $hash_contacto;
// $url_SECCION_hs_PAGINA          = $url_PAGINA . $hash_SECCION;
// $url_SECCION_hs_PAGINA          = $url_PAGINA . $hash_SECCION;
// $url-SECCION-hs-PAGINA          = $url_PAGINA . $hash-SECCION;
// $url-SECCION-hs-PAGINA          = $url_PAGINA . $hash-SECCION;

/*___ urls con variable de idioma al final _*/
    $url_root           = $dir_env . '/' . $gettext_idioma_url;
    $url_index          = $dir_env . '/index.php' . $gettext_idioma_url;
    //$url_home         = $dir_env . '/inicio.php' . $gettext_idioma_url;
    $url_contacto       = $dir_env . '/contacto.php' . $gettext_idioma_url;
    //$url_gracias        = $dir_env . '/gracias.php' . $gettext_idioma_url;
    //$url_construccion   = $dir_env . '/construccion.php' . $gettext_idioma_url;
    //$url_copyright      = $dir_env . '/legal/copyright.php' . $gettext_idioma_url;
    // $url_PAGINA         = $dir_env . '/pagina.php' . $gettext_idioma_url;
    // $url_PAGINA         = $dir_env . '/pagina.php' . $gettext_idioma_url;
    // $url_PAGINA         = $dir_env . '/pagina.php' . $gettext_idioma_url;
    
    $url_logo           = $url_root;

/*___ urls para hashes __________________*/
    $url_main_hs        = $dir_env . '/' . $gettext_idioma_url . $hash_main;
    //$url_inicio_hs      = $dir_env . '/' . $gettext_idioma_url . $hash_inicio;
    //$url_contacto_hs    = $dir_env . '/' . $gettext_idioma_url . $hash_contacto;
    // $url_SECCION_hs     = $dir_env . '/' . $gettext_idioma_url . $hash_SECCION;
    // $url_SECCION_hs     = $dir_env . '/' . $gettext_idioma_url . $hash_SECCION;
    // $url_SECCION_hs     = $dir_env . '/' . $gettext_idioma_url . $hash_SECCION;

    $url_main_hs_HOME     = $url_home . $url_main_hs;
    //$url_inicio_hs_HOME   = $url_home . $url_inicio_hs;
    //$url_contacto_hs_HOME = $url_home . $url_contacto_hs;
    // $url_PAGINA_hs_PAGINA_gettext   = $url_PAGINA . $hash_PAGINA;
    // $url_PAGINA_hs_PAGINA_gettext   = $url_PAGINA . $hash_PAGINA;
    // $url_PAGINA_hs_PAGINA_gettext   = $url_PAGINA . $hash_PAGINA;
    

    
/* // global urls / full urls ----------------------------------------------- */
$url_main               = $http_protocol . $domain_main;
//$url_main               = $http_protocol . $domain_wip;
$url_main_full          = $url_main . $dir_env;

$url_wip                = $http_protocol . $domain_wip;
$url_wip_full           = $url_wip . $dir_env;

$url_sec                = 'http://www.' . $domain_sec;

$url_custom             = 'http://www.' . $domain_custom;


// Los vínculos que tienen un hash creado deben ser comentados en la siguiente
// lista

$url_index_full         = $url_wip . $url_index;
$url_home_full          = $url_wip . $url_home;
$url_contacto_full      = $url_wip . $url_contacto;
//$url_gracias_full       = $url_wip . $url_gracias;
//$url_construccion_full  = $url_wip . $url_construccion;
//$url_copyright_full     = $url_wip . $url_copyright;
// $url_PAGINA_full         = $url_wip . $url_PAGINA;
// $url_PAGINA_full         = $url_wip . $url_PAGINA;
// $url_PAGINA_full         = $url_wip . $url_PAGINA;

/*___ full urls para hashes traducidas ___*/
    //$url_inicio_hs_HOME_full    = $url_main . $url_home . $hash_inicio;
    //$url_contacto_hs_HOME_full  = $url_main . $url_home . $hash_contacto;
    // $url_PAGINA_hs_PAGINA_full    = $url_main . $url_PAGINA . $url_PAGINA;
    // $url_PAGINA_hs_PAGINA_full    = $url_main . $url_PAGINA . $url_PAGINA;
    // $url_PAGINA_hs_PAGINA_full    = $url_main . $url_PAGINA . $url_PAGINA;
    

    
/* // href ------------------------------------------------------------------ */
$href_root          = 'href="' . $url_root . '"'; 
$href_index         = 'href="' . $url_index . '"';
$href_contacto      = 'href="' . $url_contacto . '"';

$href_logo          = $href_root;

//$href_construccion  = 'href="' . $url_construccion . '"';
// $href_PAGINA        = 'href="' . $url_PAGINA . '"';
// $href_PAGINA        = 'href="' . $url_PAGINA . '"';
// $href_PAGINA        = 'href="' . $url_PAGINA . '"';

//$href_logo         = ($nav_pageCurrent == 'page_index') ? 'href="' . $url_top_hs . '"' : 'href="' . $url_top_hs_HOME . '"';
//$href_index         = ($nav_pageCurrent == 'page_index') ? 'href="' . $url_main_hs . '"' : 'href="' . $url_root . '"';
//$href_contacto      = ($nav_pageCurrent == 'page_PAGINA') ? 'href="' . $url_contacto_hs . '"' : 'href="' . $url_contacto_hs_HOME . '"';
// $href_PAGINA        = ($nav_pageCurrent == 'page_PAGINA') ? 'href="' . $url_SECCION_hs . '"' : 'href="' . $url_SECCION_hs_HOME . '"';
// $href_PAGINA        = ($nav_pageCurrent == 'page_PAGINA') ? 'href="' . $url_SECCION_hs . '"' : 'href="' . $url_SECCION_hs_HOME . '"';
// $href_PAGINA        = ($nav_pageCurrent == 'page_PAGINA') ? 'href="' . $url_SECCION_hs . '"' : 'href="' . $url_SECCION_hs_HOME . '"';
    
$href_top_hs        = 'href="' . $url_top_hs . '"';
$href_main_hs       = 'href="' . $url_main_hs . '"';
//$href_inicio_hs     = 'href="' . $url_inicio_hs . '"';
//$href_contacto_hs   = 'href="' . $url_contacto_hs . '"';
// $href_SECCION_hs    = 'href="' . $url_SECCION_hs . '"';
// $href_SECCION_hs    = 'href="' . $url_SECCION_hs . '"';
// $href_SECCION_hs    = 'href="' . $url_SECCION_hs . '"';

$href_top_hs_HOME       = 'href="' . $url_top_hs_HOME . '"';
$href_main_hs_HOME       = 'href="' . $url_main_hs_HOME . '"';
//$href_inicio_hs_HOME       = 'href="' . $url_inicio_hs_HOME . '"';
//$href_contacto_hs_HOME     = 'href="' . $url_contacto_hs_HOME . '"';
// $href_SECCION_hs_PAGINA      = 'href="' . $url_SECCION_hs_PAGINA . '"';
// $href_SECCION_hs_PAGINA      = 'href="' . $url_SECCION_hs_PAGINA . '"';
// $href_SECCION_hs_PAGINA      = 'href="' . $url_SECCION_hs_PAGINA . '"';
     
/*___ href para hashes traducidas ________*/
    $url_main_hs_full       = $url_wip . $url_main_hs;
    //$url_inicio_hs_full     = $url_wip . $url_inicio_hs;
    //$url_contacto_hs_full   = $url_wip . $url_contacto_hs;
    // $url_PAGINA_hs_full     = $url_wip . $url_PAGINA;
    // $url_PAGINA_hs_full     = $url_wip . $url_PAGINA;
    // $url_PAGINA_hs_full     = $url_wip . $url_PAGINA;

    $url_main_hs_HOME_full        = $url_wip . $url_index . $hash_main;
    //$url_inicio_hs_HOME_full      = $url_wip . $url_index . $hash_inicio;
    //$url_contacto_hs_HOME_full    = $url_wip . $url_index . $hash_contacto;
    // $url_PAGINA_hs_PAGINA_full      = $url_wip . $url_PAGINA . $url_PAGINA;
    // $url_PAGINA_hs_PAGINA_full      = $url_wip . $url_PAGINA . $url_PAGINA;
    // $url_PAGINA_hs_PAGINA_full      = $url_wip . $url_PAGINA . $url_PAGINA;
    


/* // misc / experimental --------------------------------------------------- */
    
// $url_actual     = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>