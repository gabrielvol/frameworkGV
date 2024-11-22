<?php
    $dir_env = '/stage';
//    include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/gettext/languageCheck.inc.php');
//    $page_var               = $_GET['page_var']; 
    
    $page_int               = 1;    
    $nav_pageCurrent        = 'page_construccion';
    $nav_pageCurrent_int    = 'page_construccion_home';
    
// Si se activa `$nav_pageCurrent_id`
// 1. Hay que asignar los títulos en `/var/page.construccion.var.inc.php`
//    $nav_pageCurrent_id     = 'page_construccion_ID';

// 2. Las siguientes variables se declaran en `/var/page.construccion.var.inc.php`
    $page_construccion      = 1;
    $page_redirect          = 0;

    $has_form               = 0; // REF [36] Form variables
    $has_lightbox           = 0; // REF [26]
    $has_pop_video          = 0;
    $has_scrolling          = 0;
    $has_slider             = 0;
//    $has-CUSTOMVARIABLE     = 0;
//    $lang_GB                = 1;

// 3. Se incluye el archivo de variables
//    include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/var/page.construccion.var.inc.php');

/* // Form identifier Global ------------------------------------------------ *
// La variable $form_id puede ser declarada de tres formas:
// 
// 1- De manera global en `[/src/var/form.var.inc.php]` para todo el sitio
// 2- En el archivo `[/src/var/page.PAGEINT.var.inc.php]` para un grupo de paginas
// 3- En la pagina donde va a ser usado
// 
// $form_id = 'formMainID'; // REF [36] Form variables
*/
    
    $page_main_classes      = '';
       
    include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/var/__main.var.inc.php');
    
    $page_url_full          = $url_construccion_full;

// 4. Se comenta la siguiente variable `$page_title`
    $page_title             = $page_title_home_construccion . " | " . $site_name_title;
    
// 5. La nueva variable `$page_title` se construye de la siguiente forma:
// $page_title_home_construccion se declara en `/var/meta.titlesDesc.var.inc.php`
// $page_title_id se declara en `/var/page.construccion.var.inc.php`
// 
//   $page_title             = $page_title_id . " | " . $page_title_home_construccion . " | " . $site_name_title;    
    $page_desc              = $page_desc_global;
     
    include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/var/meta.openGraph.var.inc.php');   
    include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/common/head.inc.php');
?>
<body id="body">
    <?php include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/common/header.inc.php'); ?>
    <div id="main" <?php echo $classes_main; ?> role="main">
        <div class="container container_construccion">
            <h1><?php echo _('Sitio en construcci&oacute;n'); ?></h1>
            <p><?php echo _('Disculpe las molestias, muy pronto podr&aacute; ver el contenido de esta p&aacute;gina'); ?>.</p>
            <?php include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/common/page.error.p.inc.php'); ?>
        </div>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/common/footer.inc.php'); ?>
</body>
</html>
