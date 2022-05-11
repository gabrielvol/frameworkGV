<?php
    $dir_env = '/stage';
//    include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/gettext/languageCheck.inc.php');
    
    $page_int               = 1;    
    $nav_pageCurrent        = 'page_PAGEINT';
//    $nav_pageCurrent_int    = 'page_PAGEINT_home';
//    $nav_pageCurrent_id     = 'page_PAGEINT_id';
    
    $page_construccion      = 1;
//    $has-CUSTOMVARIABLE     = 1;
       
    include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/var/__main.var.inc.php');
    
    $page_url_full          = $url_construccion_full; //$url_PAGEINT_full;
    
    $page_title             = "PaginaInterna | ". $site_name_title;
//    $page_title_GB          = "SinTraduccion | ". $site_name_title_GB;
//    $page_title_XX          = "SinTraduccion | ". $site_name_title_XX;
    
    $page_desc              = $page_desc_global;
//    $page_desc_GB           = $page_desc_global_GB; 
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
        <div class="container">
            <h1><?php echo _('Sitio en construcci&oacute;n'); ?></h1>
            <p><?php echo _('Disculpe las molestias, muy pronto podr&aacute; ver el contenido de esta p&aacute;gina'); ?>.</p>
            <?php include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/common/page.error.p.inc.php'); ?>
        </div>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/common/footer.inc.php'); ?>
</body>
</html>
