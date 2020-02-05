<?php
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/variables/__main.var.inc.php');
    
    $page_int           = 1;
    $section_error      = 1;
       
    $site_title         = "Error | ". $company_name_title;
  //$site_title_GB      = "Error | ". $company_name_title;
       
    $site_desc          = $site_desc_global;
  //$site_desc_GB       = $site_desc_global_GB;
       
    $nav_pageCurrent    = 0;
    
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/gettext.languageCheck.inc.php');   
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/head.inc.php');
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/gettext.locale.inc.php');
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/variables/gettext.var.inc.php');
?>
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/header.inc.php'); ?>
    <div id="main" class="page_int section_error pvl" role="main">
        <h1 class="greyD alignCenter"><?php echo _("P&aacute;gina no encontrada"); ?>.</h1>
        <p class="errorType pbl grey alignCenter"><?php echo _("Error 404"); ?>.</p>
        <p class="black alignCenter"><?php echo _("Puede continuar navegando el sitio yendo a la"); ?> <a href="/nuevo/" class="black underline"><?php echo _("p&aacute;gina inicial del sitio"); ?></a><?php echo _(", o a nuestra"); ?> <a href="/nuevo/contacto.php" class="black underline"><?php echo _("p&aacute;gina de contacto"); ?></a>.</p>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/footer.inc.php'); ?>
</body>
</html>
