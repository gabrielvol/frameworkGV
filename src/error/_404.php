<?php
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/var/__main.var.inc.php');
    
    $page_int           = 1;
    $page_error         = 1;
       
    $nav_pageCurrent    = 0;
       
    $site_title         = "Error | ". $site_name_title;
//  $site_title_GB      = "Error | ". $site_name_title;
       
    $site_desc          = $site_desc_global;
//  $site_desc_GB       = $site_desc_global_GB;
    
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/gettext.languageCheck.inc.php');   
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/head.inc.php');
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/gettext.locale.inc.php');
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/var/gettext.var.inc.php');
?>
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/header.inc.php'); ?>
    <div id="main" class="page_int page_error pvl" role="main">
        <h1 class="greyD alignCenter"><?php echo _("P&aacute;gina no encontrada"); ?>.</h1>
        <p class="errorType pbl grey alignCenter"><?php echo _("Error 404"); ?>.</p>
        <p class="black alignCenter"><?php echo _("Puede continuar navegando el sitio yendo a la"); ?> <a href="/nuevo/" class="black underline"><?php echo _("p&aacute;gina inicial del sitio"); ?></a><?php echo _(", o a nuestra"); ?> <a href="/nuevo/contacto.php" class="black underline"><?php echo _("p&aacute;gina de contacto"); ?></a>.</p>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/footer.inc.php'); ?>
</body>
</html>
