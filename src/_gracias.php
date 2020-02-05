<?php
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/variables/__main.var.inc.php');
    
    $page_int        = 1;
    $section_gracias = 1;
    
    $site_title      = "Gracias | ".$company_name_title;
  //$site_desc_GB    = "Thank You | ".$company_name_title;
    
    $site_desc       = $site_desc_global;
  //$site_desc_GB    = $site_desc_global_GB;
    
    $openGraph_title    = $site_title;
  //$openGraph_title_GB = $site_title_GB;
    $openGraph_desc     = $openGraph_desc_global;
  //$openGraph_desc_GB  = $openGraph_desc_global_GB;    
    $openGraph_img_url  = $url_global;  
    $openGraph_siteName = $openGraph_title;
    
    $nav_pageCurrent = 0;
    
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/gettext.languageCheck.inc.php');   
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/head.inc.php');
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/gettext.locale.inc.php');
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/variables/gettext.var.inc.php');
?>
</head>
<body>
    <?php
        include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/header.inc.php');
        include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/formSend.inc.php');
    ?>
    <div id="main" class="page_int section_gracias" role="main">
        <h1 class="alignCenter">Gracias</h1>
        <p class="alignCenter"><?php echo $formStatusMSG_OK_globalB ?></p>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/footer.inc.php'); ?>
</body>
</html>
