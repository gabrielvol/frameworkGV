<?php
    $url_dir = '/nuevo';
    include($_SERVER['DOCUMENT_ROOT'] . $url_dir .'/var/__main.var.inc.php');
    
    $page_int           = 1;
    $page_error         = 1;

       
    $nav_pageCurrent    = 0;
       
    $site_title         = $site_name_title;
    $site_title_GB      = $site_name_title_GB;
       
    $site_desc          = $site_desc_global;
    $site_desc_GB       = $site_desc_global_GB;
    
    include($_SERVER['DOCUMENT_ROOT'] . $url_dir .'/common/gettext.languageCheck.inc.php');
    include($_SERVER['DOCUMENT_ROOT'] . $url_dir .'/common/head.inc.php');
    include($_SERVER['DOCUMENT_ROOT'] . $url_dir .'/common/gettext.locale.inc.php');
    include($_SERVER['DOCUMENT_ROOT'] . $url_dir .'/var/gettext.var.inc.php');
?>
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . $url_dir .'/common/header.inc.php'); ?>
    <div id="main" class="page_int page_error" role="main">
        <h1><?php echo _("P&aacute;gina no encontrada"); ?>.</h1>
        <p class="errorType">Error 417.</p>
        <?php include($_SERVER['DOCUMENT_ROOT'] . $url_dir .'/common/page.error.p.inc.php'); ?>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . $url_dir .'/common/footer.inc.php'); ?>
</body>
</html>
