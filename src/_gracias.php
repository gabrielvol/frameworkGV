<?php
    $dir_env = '/stage';
//    include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/gettext/languageCheck.inc.php');
//    $page_var               = $_GET['page_var']; 
    
    $page_int               = 1; 
    $nav_pageCurrent        = 'page_gracias'; 
    $nav_pageCurrent_int    = 'page_gracias_home';
    
/* // Si se activa `$nav_pageCurrent_id`
   1. Hay que asignar los títulos en `/var/page.gracias.var.inc.php` */
//    $nav_pageCurrent_id     = 'page_gracias_ID';

/* 2. Las siguientes variables se declaran en `/var/page.gracias.var.inc.php` */
    $page_construccion      = 0;
    $page_redirect          = 0;

    $has_form               = 0; /* // REF [36] Form variables */
    $has_lightbox           = 0; /* // REF [26] */
    $has_pop_video          = 0;
    $has_scrolling          = 1;
    $has_slider             = 0;
//    $has-CUSTOMVARIABLE     = 0;
//    $lang_GB                = 1;

/* 3. Se incluye el archivo de variables */
//    include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/var/page.gracias.var.inc.php');

/* // Form identifier Global ------------------------------------------------ *
   La variable $form_id puede ser declarada de tres formas:
   
   a) De manera global en `[/src/var/form.var.inc.php]` para todo el sitio
   b) En el archivo `[/src/var/page.PAGEINT.var.inc.php]` para un grupo de paginas
   c) En la pagina donde va a ser usado
*/
// $form_id = 'formMainID'; /* // REF [36] Form variables */
// $form_id_spelled = 'Contactanos';
    
    $page_header_classes = '';
    $page_main_classes = '';
    
    include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/var/__main.var.inc.php');
    
    $page_url_full          = $url_gracias_full;

/* 4. Se comenta la siguiente variable `$page_title` */
    $page_title             = $page_title_home_gracias . " | " . $site_name_title;
    
/* 5. La nueva variable `$page_title` se construye de la siguiente forma:
   $page_title_home_gracias se declara en `/var/meta.titlesDesc.var.inc.php`
   $page_title_id se declara en `/var/page.gracias.var.inc.php` */
//   $page_title             = $page_title_id . " | " . $page_title_home_gracias . " | " . $site_name_title;    
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
