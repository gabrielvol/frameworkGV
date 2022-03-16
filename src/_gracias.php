<?php
    $dir_env = '/stage';
//    include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/gettext/languageCheck.inc.php');
    
    $page_int               = 1; 
    $nav_pageCurrent        = 'page_gracias';
    
    $page_construccion      = 0;
    $has_form               = 0;
    $has_lightbox           = 0; // REF [26]
    $has_slider             = 0; 
//    $has-CUSTOMVARIABLE     = 1;
//    $lang_en                = 1;
    
    include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/var/__main.var.inc.php');
    
    $page_url_full          = $url_gracias_full;
    
    $site_title             = "Gracias | ". $site_name_title;
//    $site_title_GB          = "Thank You | ". $site_name_title;
    
    $site_desc              = $site_desc_global;
//    $site_desc_GB           = $site_desc_global_GB;
     
    include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/var/meta.openGraph.var.inc.php');   
    include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/common/head.inc.php');
//    include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/gettext/locale.inc.php');
//    include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/common/speller.inc.php');
?>
</head>
<body>
    <?php
        include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/common/header.inc.php');
        include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/common/form.main.send.inc.php');
    ?>
    <div id="main" <?php echo $classes_main; ?> role="main">
        <h1 class="txAlignCenter">Gracias</h1>
        <p class="txAlignCenter"><?php echo $form_status_ok_globalB ?></p>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/common/footer.inc.php'); ?>
</body>
</html>
