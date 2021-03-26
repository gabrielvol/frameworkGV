<?php
    /* // Gettext URLS ------------------------------------------------------ */

    $hash_inicio_gettext         = '#main';
    $hash_inicio_gettext         = '#'. _('inicio');
//    $hash-PAGINA-gettext         = '#'. _('seccion');
//    $hash-PAGINA-gettext         = '#'. _('seccion');
//    $hash-PAGINA-gettext         = '#'. _('seccion');
    $hash_contacto_gettext       = '#'. _('contacto');  
    

    $url_inicio_gettext         = $url_dir .'/'. $hash_inicio_gettext;
//    $url-PAGINA-gettext         = $url_dir .'/'. $hash-PAGINA-gettext;
//    $url-PAGINA-gettext         = $url_dir .'/'. $hash-PAGINA-gettext;
//    $url-PAGINA-gettext         = $url_PAGINA . $hash-PAGINA-gettext;
//    $url-PAGINA-gettext         = $url_PAGINA . $hash-PAGINA-gettext;
    $url_contacto_gettext       = $url_dir .'/'. $hash_contacto_gettext;  
    
    
    $href_inicio_gettext        = 'href="'. $url_inicio_gettext .'"';
//    $href-PAGINA_gettext       = 'href="'. $url .'"';
//    $href-PAGINA_gettext       = 'href="'. $url .'"';
//    $href-PAGINA_gettext       = 'href="'. $url .'"';
    $href_contacto_gettext      = 'href="'. $url_contacto_gettext .'"';  
    
    
    $url_inicio_full_gettext    = $url_global . $url_inicio_gettext;
    $url_inicio_full_gettext    = $url_global . $url_index . $hash_inicio_gettext;
//    $url_PAGINA_full_gettext  = $url_global . $url_PAGINA_gettext;
//    $url_PAGINA_full_gettext  = $url_global . $url_PAGINA_gettext;
//    $url_PAGINA_full_gettext  = $url_global . $url_PAGINA . $hash_PAGINA_gettext;
//    $url_PAGINA_full_gettext  = $url_global . $url_PAGINA . $hash_PAGINA_gettext;
    $url_contacto_full_gettext  = $url_global . $url_contacto_gettext;
?>