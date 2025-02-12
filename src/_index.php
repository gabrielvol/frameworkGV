<?php
    $dir_env = '/stage';
    
//    ini_set('display_errors', 0);
//    ini_set('log_errors', 1);
    
//    include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/gettext/languageCheck.inc.php');
//    $page_var               = $_GET['page_var']; 
    
    $page_int      = 0;
    $nav_pageCurrent        = 'page_index';
    $nav_pageCurrent_int    = 'page_index_index';
     
    include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/var/page.index.var.inc.php');

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
    
    $page_url_full          = $url_index_full;  
    
    $page_title             = $site_name_full;    
    $page_desc              = $page_desc_global;
     
    include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/var/meta.openGraph.var.inc.php');
    include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/common/head.inc.php');
?>
<body id="body">
    <?php include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/common/header.inc.php'); ?>
    <div id="main" <?php echo $classes_main; ?> role="main">
        <?php include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/sections/home.all.inc.php'); ?>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/common/footer.inc.php'); ?>
</body>
</html>
