<?php
    $dir_env = '/stage';
    
//    include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/gettext/languageCheck.inc.php');
    
    $page_int      = 0;
    $nav_pageCurrent        = 'page_subdomain_SUBDOMAIN';
    $nav_pageCurrent_int    = 'page_subdomain_SUBDOMAIN_home';
    
    $has_lightbox           = 0; /* // REF [26] */
    $has_pop_video          = 0;
    $has_scrolling          = 0;
    $has_slider             = 0;
    
    $page_subdomain         = 1;
    $page_construccion      = 0;
    /* // REF [53*] Page redirect
     * Si se activa `$page_redirect` hay que setear la variable `$page_redirect_url`
     */
    $page_redirect          = 1;
    $has_form               = 0; /* // REF [36] Form variables */
    $page_noTrack           = 0;
    $has_captcha            = 0;
    
    $page_body_classes = '';
    $page_header_classes = '';
    $page_main_classes = '';
    
    include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/var/__main.var.inc.php');  
    
        
    if($page_redirect) {
        /* // REF [53*] Page redirect */
        $page_redirect_url = $url_to_redirect_full; 
    } else {
        $page_url_full = $url_index_full;
    }
    
    $page_title             = $site_name_full;    
    $page_desc              = $page_desc_global;
     
    include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/var/meta.openGraph.var.inc.php');
    include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/common/head.inc.php');
?>
<body id="body" class="<?php echo $classes_body; ?>">
    <?php include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/common/header.inc.php'); ?>
    <div id="main" <?php echo $classes_main; ?> role="main">
        <?php if($page_redirect): include ($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/common/page.redirect.p.inc.php'); else: /* // REF [53*] Page redirect */ ?>
        
        <?php /*
            <h1><?php echo $page_heading_id; ?></h1>
            <h1><?php echo $page_title_home_PAGEINT; ?></h1>
        */ ?>
            
        <?php endif; /* Cierra el condicional // REF [53*] Page redirect */ ?>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/common/footer.inc.php'); ?>
</body>
</html>
