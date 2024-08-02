<?php
/* * NombreDeProyecto * ========================================================
   Titles and Descriptions Variables [/src/var/meta.titlesDesc.var.inc.php]
   ========================================================================== */

/* // Descripcion ----------------------------------------------------------- */
// Variable para site lang, titulos y descripcion de sitio
//
// #description #lang #meta #seo #title


/* // Site titles _ ~ 70 char ----------------------------------------------- */
// ·____________________________________________________________________·
// 123456789-123456789-123456789-123456789-123456789-123456789-123456789-
// El index usa como titulo solamente `$site_name_full`

// Las internas componen el nombre con las variables
// `$page_title_home-PAGEINT` y `$site_name_title`
// Ej.: Nosotros | `$page_title_home_laEmpresa` | `$site_name_title`  

// La variable `$page_title_home-PAGEINT` tambien se usa para el item en
// Nav Main para usar el mismo texto como item

// La variable `$page_desc_global` se usa como descripcion para todas las
// paginas del sitio. Para cambiar la descripcion de una unica pagina hay
// que modificar la variable `$page_desc` en el archivo de la pagina

if(isset($gettext_idioma)){

/* // en_GB ----------------------------------------------------------------- */    
if($gettext_idioma == 'en_GB'){
    $site_name_full         = 'SiteNameFull';
    $site_name_short        = 'SiteNameShort';
    $site_name_title        = 'SiteNameTitle';
    $site_name_tag          = 'SiteNameTag';

//    $page_title_home_PAGEINT    = 'TituloEnIngles';
//    $page_title_home_PAGEINT    = 'TituloEnIngles';
    $page_title_home_contacto   = 'Contact';    
    $page_title_home_gracias    = 'Thank You';
    $page_title_home_copyright  = 'License';    
//    $page_title_redirect  = 'redirect';
    
/*___ Nav Main items ____________________*/
    $nav_main_item_home         = 'Home';
    $nav_main_item_contacto     = $page_title_home_contacto; 
//    $nav_main_item_PAGEINT      = $page_title_home_PAGEINT;
//    $nav_main_item_PAGEINT      = $page_title_home_PAGEINT;
//    $nav_main_item_PAGEINT      = $page_title_home_PAGEINT;   
//    $nav_main_item_PAGEID       = 'TituloEnIngles_id';
    
/*___ Descripcion global _ ~ 160 char ___*/
// ·_______________________________________________________________________________________________________________________________________________________________________·
// 123456789-123456789-123456789-123456789-123456789-123456789-123456789-123456789-123456789-123456789-123456789-123456789-123456789-123456789-123456789-123456789-123456789
    $page_desc_global       = '';


/* // xx_XX ----------------------------------------------------------------- */
} elseif($gettext_idioma == 'xx_XX'){
    $site_name_full          = 'SiteNameFull';
    $site_name_short         = 'SiteNameShort';
    $site_name_title         = 'SiteNameTitle';
    $site_name_tag           = 'SiteNameTag';

//    $page_title_home_PAGEINT    = 'sinTraduccion';   
//    $page_title_home_PAGEINT    = 'sinTraduccion';   
    $page_title_home_contacto   = 'sinTraduccion';     
    $page_title_home_gracias    = 'sinTraduccion';
    $page_title_home_copyright  = 'sinTraduccion';   
//    $page_title_redirect  = 'redirect';
    
/*___ Nav Main items ____________________*/
    $nav_main_item_home         = 'Home';
    $nav_main_item_contacto     = $page_title_home_contacto; 
//    $nav_main_item_PAGEINT      = $page_title_home_PAGEINT;
//    $nav_main_item_PAGEINT      = $page_title_home_PAGEINT;
//    $nav_main_item_PAGEINT      = $page_title_home_PAGEINT;   
//    $nav_main_item_PAGEID       = 'sinTraduccion_id';
    
/*___ Descripcion global _ ~ 160 char ___*/
// ·_______________________________________________________________________________________________________________________________________________________________________·
// 123456789-123456789-123456789-123456789-123456789-123456789-123456789-123456789-123456789-123456789-123456789-123456789-123456789-123456789-123456789-123456789-123456789
    $page_desc_global        = 'sinTraduccion';


/* // es_AR ----------------------------------------------------------------- */
} } else {    
    $site_name_full         = 'SiteNameFull';
    $site_name_short        = 'SiteNameShort';
    $site_name_title        = 'SiteNameTitle';
    $site_name_tag          = 'SiteNameTag';

//    $page_title_home_PAGEINT    = 'TituloEnCastellano';
//    $page_title_home_PAGEINT    = 'TituloEnCastellano';
    $page_title_home_contacto   = 'Contacto';    
    $page_title_home_gracias    = 'Gracias';
    $page_title_home_copyright  = 'Licencia';    
//    $page_title_redirect  = 'redirect';
    
/*___ Nav Main items ____________________*/
    $nav_main_item_home         = 'Home';
    $nav_main_item_contacto     = $page_title_home_contacto; 
//    $nav_main_item_PAGEINT      = $page_title_home_PAGEINT;
//    $nav_main_item_PAGEINT      = $page_title_home_PAGEINT;
//    $nav_main_item_PAGEINT      = $page_title_home_PAGEINT;   
//    $nav_main_item_PAGEID       = 'TituloEnCastellano_id';
    
/*___ Descripcion global _ ~ 160 char ___*/
// ·_______________________________________________________________________________________________________________________________________________________________________·
// 123456789-123456789-123456789-123456789-123456789-123456789-123456789-123456789-123456789-123456789-123456789-123456789-123456789-123456789-123456789-123456789-123456789
    $page_desc_global       = '';
}

?>