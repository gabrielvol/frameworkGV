<?php
    $dir_env = '/stage';
//    include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/gettext/languageCheck.inc.php');
    
    $page_int               = 1;   
    $nav_pageCurrent        = 'page_contacto';
//    $nav_pageCurrent_int    = 'page_contacto_home';
//    $nav_pageCurrent_id     = 'page_PAGEINT_id';
    
    $page_construccion      = 0;
    $has_form               = 1;
    $has_lightbox           = 0; // REF [26]
    $has_slider             = 0;
//    $has-CUSTOMVARIABLE     = 1;
//    $lang_en                = 1;
    
    include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/var/__main.var.inc.php'); 
    
    $form_var               = $_GET['formvar'];    
    $page_url_full          = $url_contacto_full;   
    
    $page_title             = "Contacto | ". $site_name_title;
//    $page_title_GB          = "Contact | ". $site_name_title_GB;
//    $page_title_XX          = "Contact | ". $site_name_title_XX;
    
    $page_desc              = $site_desc_global;
//    $page_desc_GB           = $site_desc_global_GB;
//    $page_desc_XX           = $site_desc_global_XX;
    
    include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/var/meta.openGraph.var.inc.php');
    include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/common/head.inc.php');
//    include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/gettext/locale.inc.php');
//    include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/common/speller.inc.php');
?>
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/common/header.inc.php'); ?>
    <div id="main" <?php echo $classes_main; ?> role="main">
        <div class="mobileForm tabletForm">
            <?php include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/common/form.main.inc.php'); ?>
        </div>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/common/footer.inc.php'); ?>
</body>
</html>