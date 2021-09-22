<?php
    $url_entorno = '/nuevo';
    include($_SERVER['DOCUMENT_ROOT'] . $url_entorno .'/gettext/languageCheck.inc.php');
    
    $page_index             = 1;
    $page_inicio            = 1;
    $nav_pageCurrent        = 2;
    
    include($_SERVER['DOCUMENT_ROOT'] . $url_entorno .'/var/__main.var.inc.php');
    
    $page_url_full          = $url_inicio_full;
    
    $has_form               = 0;
    $has_lightbox           = 0;
    $has_slider             = 0;
    
//    $has-CUSTOMVARIABLE     = 0;
    
    $site_title             = $site_name_full;
//    $site_title_GB          = $site_name_full;
    
    $site_desc              = $site_desc_global;
//    $site_desc_GB           = $site_desc_global_GB;
    
    $openGraph_title            = $openGraph_title_global;
//    $openGraph_title_GB         = $openGraph_title_global_GB;
    $openGraph_desc             = $openGraph_desc_global;
//    $openGraph_desc_GB          = $openGraph_desc_global_GB;
    $openGraph_url_img          = $openGraph_url_img_sq;
    $openGraph_url_img_width    = $openGraph_img_sq_width;
    $openGraph_url_img_height   = $openGraph_img_sq_height;
    $openGraph_siteName         = $openGraph_siteName_global;
       
    include($_SERVER['DOCUMENT_ROOT'] . $url_entorno .'/common/head.inc.php');
    include($_SERVER['DOCUMENT_ROOT'] . $url_entorno .'/gettext/locale.inc.php');
?>
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . $url_entorno .'/common/header.inc.php'); ?>
    <div id="main" class="page_index" role="main">        
        <?php
            include($_SERVER['DOCUMENT_ROOT'] . $url_entorno .'/common/section.aaa.inc.php');
            include($_SERVER['DOCUMENT_ROOT'] . $url_entorno .'/common/section.bbb.inc.php');
            include($_SERVER['DOCUMENT_ROOT'] . $url_entorno .'/common/section.ccc.inc.php');
        ?>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . $url_entorno .'/common/footer.inc.php'); ?>
</body>
</html>
