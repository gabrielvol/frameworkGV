<?php
    $dir_env = '/stage';
//    include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/gettext/languageCheck.inc.php');
//    $page_var               = $_GET['page_var']; 
    
    $page_int               = 1;   
    $nav_pageCurrent        = 'page_contacto';
    $nav_pageCurrent_int    = 'page_contacto_home';
// Si se activa el id hay que asignar los títulos en `/var/PAGEINT.var.inc.php`
//    $nav_pageCurrent_id     = 'page_contacto_id';
    
    $page_construccion      = 0;
    
    $has_form               = 1;
    $has_scrolling          = 1;
//    $has-CUSTOMVARIABLE     = 1;
//    $lang_GB                = 1;

// Si se activa el id:
//    include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/var/PAGEINT.var.inc.php');
    
    $page_main_classes      = '';
    
    include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/var/__main.var.inc.php'); 
    
    $form_var               = $_GET['formvar'];    
    $page_url_full          = $url_contacto_full;   
    
    $page_title             = $page_title_home_contacto . " | " . $site_name_title;
// Si se activa el id `$page_title` se construye de la siguiente forma:
//    $page_title             = $page_title_id ." | ". $page_title_home_contacto ." | " . $site_name_title;    
    $page_desc              = $page_desc_global;
    
    include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/var/meta.openGraph.var.inc.php');
    include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/common/head.inc.php');
?>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/common/header.inc.php'); ?>
    <div id="main" <?php echo $classes_main; ?> role="main">
        <h1><?php echo $page_title_home_contacto; ?></h1>
        <div class="mobileForm tabletForm">
            <?php include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/common/form.main.inc.php'); ?>
        </div>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/common/footer.inc.php'); ?>
</body>
</html>