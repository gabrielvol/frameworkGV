<?php
    $dir_env = '/stage';
//    include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/gettext/languageCheck.inc.php');
    
    $page_int               = 1;    
    $nav_pageCurrent        = 'page_PAGEINT';
//    $nav_pageCurrent_int    = 'page_PAGEINT_home';
//    $nav_pageCurrent_id     = 'page_PAGEINT_id';
    
    $page_construccion      = 1;
    $has_form               = 0;
    $has_lightbox           = 0; // REF [26]
    $has_slider             = 0;
//    $has-CUSTOMVARIABLE     = 1;
//    $lang_en                = 1;
       
    include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/var/__main.var.inc.php');
    
    $page_url_full          = $url_construccion_full; //$url_PAGEINT_full;
    
    $site_title             = "PaginaInterna | ". $site_name_title;
//    $site_title_GB          = "SinTraduccion | ". $site_name_title;
    
    $site_desc              = $site_desc_global;
//    $site_desc_GB           = $site_desc_global_GB;
    
    $openGraph_title            = $site_title;
//    $openGraph_title_GB         = $site_title_GB;
    $openGraph_desc             = $openGraph_desc_global;
//    $openGraph_desc_GB          = $openGraph_desc_global_GB;
    $openGraph_url_img          = $openGraph_url_img_sq;
    $openGraph_url_img_width    = $openGraph_img_sq_width;
    $openGraph_url_img_height   = $openGraph_img_sq_height;
    $openGraph_siteName         = $openGraph_siteName_global;
    
    include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/common/head.inc.php');
//    include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/gettext/locale.inc.php');
//    include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/common/speller.inc.php');
?>
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/common/header.inc.php'); ?>
    <div id="main" <?php echo $classes_main; ?> role="main">
        <div class="container">
            <h1><?php echo _('Sitio en construcci&oacute;n'); ?></h1>
            <p><?php echo _('Disculpe las molestias, muy pronto podr&aacute; ver el contenido de esta p&aacute;gina'); ?>.</p>
            <?php include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/common/page.error.p.inc.php'); ?>
        </div>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/common/footer.inc.php'); ?>
</body>
</html>
