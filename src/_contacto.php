<?php
    $url_entorno = '/nuevo';
//    include($_SERVER['DOCUMENT_ROOT'] . $url_entorno .'/gettext/languageCheck.inc.php');
    
    $page_int               = 1;   
    $nav_pageCurrent        = 0;   
    
    $has_form               = 1;
    $has_lightbox           = 0;
    $has_slider             = 0;
    
    include($_SERVER['DOCUMENT_ROOT'] . $url_entorno .'/var/__main.var.inc.php');    
    
    $page_url_full          = $url_contacto_full;
    
    $site_title             = "Contacto | ". $site_name_title;
//    $site_title_GB          = "Contact | ". $site_name_title;
    
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
    
    include($_SERVER['DOCUMENT_ROOT'] . $url_entorno .'/common/head.inc.php');
//    include($_SERVER['DOCUMENT_ROOT'] . $url_entorno .'/gettext/locale.inc.php');
?>
<link href="<?php echo $url_entorno; ?>/_source/css/datepicker.css" rel="stylesheet">
<script src="<?php echo $url_entorno; ?>/_source/js/jquery-ui-datepicker.js"></script>
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . $url_entorno .'/common/header.inc.php'); ?>
    <div id="main" class="page_int page_contacto" role="main">
        <div class="mobileForm tabletForm">
            <?php include($_SERVER['DOCUMENT_ROOT'] . $url_entorno .'/common/form.main.inc.php'); ?>
        </div>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . $url_entorno .'/common/footer.inc.php'); ?>
</body>
</html>