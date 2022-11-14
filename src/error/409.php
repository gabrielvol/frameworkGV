<?php
    $dir_env = '/stage';
//    include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/gettext/languageCheck.inc.php');
    
    $page_int           = 1;
    $nav_pageCurrent    = 'page_error';   
    
    $has_scrolling          = 0;
    
    include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/var/__main.var.inc.php');
       
    $page_title             = "Error | " . $site_name_title;
//    $page_title_DE          = "SinTraduccion | " . $site_name_title_DE;
//    $page_title_GB          = "Error | " . $site_name_title_GB;
//    $page_title_PT          = "SinTraduccion | " . $site_name_title_PT;
//    $page_title_XX          = "SinTraduccion | " . $site_name_title_XX;
       
    $page_desc          = $page_desc_global;
//    $page_desc_DE           = $page_desc_global_DE;
//    $page_desc_GB           = $page_desc_global_GB;
//    $page_desc_PT           = $page_desc_global_PT;
//    $page_desc_XX           = $page_desc_global_XX;
    
    include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/common/head.inc.php');
//    include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/gettext/locale.inc.php');
?>
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/common/header.inc.php'); ?>
    <div id="main" <?php echo $classes_main; ?> role="main">
        <h1><?php echo _("P&aacute;gina no encontrada"); ?>.</h1>
        <p class="errorType">Error 409.</p>
        <?php include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/common/page.error.p.inc.php'); ?>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/common/footer.inc.php'); ?>
</body>
</html>
