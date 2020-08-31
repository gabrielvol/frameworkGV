<?php
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/nuevo/var/__main.var.inc.php');
    
    $page_int           = 1;
    $page_error         = 1;
       
    $nav_pageCurrent    = 0;
       
    $site_title         = "Error | ". $site_name_title;
//  $site_title_GB      = "Error | ". $site_name_title;
       
    $site_desc          = $site_desc_global;
//  $site_desc_GB       = $site_desc_global_GB;
    
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/nuevo/common/gettext.languageCheck.inc.php');   
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/nuevo/common/head.inc.php');
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/nuevo/common/gettext.locale.inc.php');
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/nuevo/var/gettext.var.inc.php');
?>
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/nuevo/common/header.inc.php'); ?>
    <div id="main" class="page_int page_error" role="main">
        <h1><?php echo _("P&aacute;gina no encontrada"); ?>.</h1>
        <p class="errorType"><?php echo _("Error 404"); ?>.</p>
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/nuevo/common/page.error.p.inc.php'); ?>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/nuevo/common/footer.inc.php'); ?>
</body>
</html>
