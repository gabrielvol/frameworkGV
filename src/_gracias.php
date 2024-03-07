<?php
    $dir_env = '/stage';
//    include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/gettext/languageCheck.inc.php');
//    $page_var               = $_GET['page_var']; 
    
    $page_int               = 1; 
    $nav_pageCurrent        = 'page_gracias'; 
    $nav_pageCurrent_int    = 'page_gracias_home';
// Si se activa el id hay que asignar los títulos en `/var/page.PAGEINT.var.inc.php`
//    $nav_pageCurrent_id     = 'page_gracias_id';
    
    $page_construccion      = 0;
    $page_redirect          = 0;

    $has_form               = 0; // REF [36]
    $has_lightbox           = 0; // REF [26]
    $has_pop_video          = 0;
    $has_scrolling          = 1;
    $has_slider             = 0;
//    $has-CUSTOMVARIABLE     = 1;   
//    $lang_GB                = 1; 

// Si se activa el id:
//    include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/var/page.PAGEINT.var.inc.php');
    
    $page_main_classes      = '';
    
    include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/var/__main.var.inc.php');
    
    $page_url_full          = $url_gracias_full;
    
    $page_title             = $page_title_home_gracias . " | " . $site_name_title;    
// Si se activa el id `$page_title` se construye de la siguiente forma:
//    $page_title             = $page_title_id ." | ". $page_title_home_gracias ." | " . $site_name_title;    
    $page_desc              = $page_desc_global;
     
    include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/var/meta.openGraph.var.inc.php');   
    include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/common/head.inc.php');
?>
<body id="body">
    <?php
        include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/common/header.inc.php');
        include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/common/form.main.send.inc.php');
    ?>
    <div id="main" <?php echo $classes_main; ?> role="main">
        <h1 class="txAlignCenter"><?php echo $page_title_home_gracias; ?></h1>
        <p class="txAlignCenter"><?php echo $form_status_ok_globalB; ?></p>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/common/footer.inc.php'); ?>
</body>
</html>
