<?php
    $dir_env = '/stage';
//    include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/gettext/languageCheck.inc.php');
     
    include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/var/page.error.var.inc.php');
    
    $page_header_classes = '';
    $page_main_classes = '';
    
    include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/var/__main.var.inc.php');
       
    $page_title             = "Error | " . $site_name_title;
       
    $page_desc          = $page_desc_global;
    
    include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/common/head.inc.php');
?>
<body id="body" class="body_page_error">
    <?php include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/common/header.inc.php'); ?>
    <div id="main" <?php echo $classes_main; ?> role="main">
        <h1><?php if(isset($gettext_idioma)){ if($gettext_idioma == 'de_DE') { echo 'SinTraduccion'; } elseif($gettext_idioma == 'en_GB') { echo 'Page Not Found'; } elseif($gettext_idioma == 'pt_BR') { echo 'SinTraduccion'; } else { echo 'P&aacute;gina no encontrada'; } } ?>.</h1>
        <p class="errorType">Error 423.</p>
        <?php include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/common/page.error.p.inc.php'); ?>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/common/footer.inc.php'); ?>
</body>
</html>
