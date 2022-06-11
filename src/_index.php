<?php
    $dir_env = '/stage';
//    include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/gettext/languageCheck.inc.php');
    $page_var               = $_GET['page_var']; 
    
    $nav_pageCurrent        = 'page_index';
    $nav_pageCurrent_int    = 'page_home';
    
    $page_construccion      = 0;
    $has_form               = 0;
    $has_lightbox           = 0; // REF [26]
    $has_slider             = 0;
    $has_pop_video          = 0;
//    $has-CUSTOMVARIABLE     = 1;
//    $lang_GB                = 1;
     
    include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/var/__main.var.inc.php');  
    
    $page_url_full          = $url_index_full;  
    
    $page_title             = $site_name_full;
//    $page_title_DE          = $site_name_full_DE;
//    $page_title_GB          = $site_name_full_GB;
//    $page_title_PT          = $site_name_full_PT;
//    $page_title_XX          = $site_name_full_XX;
    
    $page_desc              = $page_desc_global;
//    $page_desc_DE           = $page_desc_global_DE;
//    $page_desc_GB           = $page_desc_global_GB;
//    $page_desc_PT           = $page_desc_global_PT;
//    $page_desc_XX           = $page_desc_global_XX;
     
    include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/var/meta.openGraph.var.inc.php');
    include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/common/head.inc.php');
//    include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/gettext/locale.inc.php');
//    include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/common/speller.inc.php');
?>
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/common/header.inc.php'); ?>
    <div id="main" <?php echo $classes_main; ?> role="main">
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/common/footer.inc.php'); ?>
</body>
</html>
