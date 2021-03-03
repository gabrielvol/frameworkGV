<?php
    $url_dir = '/nuevo';
    include($_SERVER['DOCUMENT_ROOT'] . $url_dir .'/var/__main.var.inc.php');
    
    $page_int               = 1;
    $load_lightbox          = 0;
    
    $nav_pageCurrent        = 1;
    $nav_pageCurrent_int    = 0;
    
    $site_title             = "PaginaInterna | ". $site_name_title;
//  $site_title_GB          = "PaginaInterna | ". $site_name_title;
    
    $site_desc              = $site_desc_global;
//  $site_desc_GB           = $site_desc_global_GB;
    
    $openGraph_title            = $site_title_GB;
//  $openGraph_title_GB         = $site_title_GB;
    $openGraph_desc             = $openGraph_desc_global;
//  $openGraph_desc_GB          = $openGraph_desc_global_GB;
//  $openGraph_url_img          = $openGraph_url_img_sq . $url_dir; 
    $openGraph_url_img          = $openGraph_url_img_sq;
    $openGraph_url_img_width    = $openGraph_img_sq_width;
    $openGraph_url_img_height   = $openGraph_img_sq_height;
    $openGraph_siteName         = $openGraph_siteName_global;
    
    include($_SERVER['DOCUMENT_ROOT'] . $url_dir .'/common/gettext.languageCheck.inc.php');   
    include($_SERVER['DOCUMENT_ROOT'] . $url_dir .'/common/head.inc.php');
    include($_SERVER['DOCUMENT_ROOT'] . $url_dir .'/common/gettext.locale.inc.php');
    include($_SERVER['DOCUMENT_ROOT'] . $url_dir .'/var/gettext.var.inc.php');
?>
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . $url_dir .'/common/header.inc.php'); ?>
    <div id="main" class="page_int page-aaaaa" role="main">
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . $url_dir .'/common/footer.inc.php'); ?>
</body>
</html>
