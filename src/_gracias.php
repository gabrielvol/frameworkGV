<?php
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/var/__main.var.inc.php');
    
    $page_int           = 1;
    $page_gracias       = 1;
    
    $nav_pageCurrent    = 0;
    
    $site_title         = "Gracias | ". $site_name_title;
//  $site_desc_GB       = "Thank You | ". $site_name_title;
    
    $site_desc          = $site_desc_global;
//  $site_desc_GB       = $site_desc_global_GB;
    
    $openGraph_title    = $openGraph_title_global;
//  $openGraph_title_GB = $openGraph_title_global_GB;
    $openGraph_desc     = $openGraph_desc_global;
//  $openGraph_desc_GB  = $openGraph_desc_global_GB;
//  $openGraph_url_img  = $url_global .'/nuevo'; 
    $openGraph_url_img  = $url_global; 
    $openGraph_siteName = $openGraph_title;
    
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/gettext.languageCheck.inc.php');   
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/head.inc.php');
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/gettext.locale.inc.php');
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/var/gettext.var.inc.php');
?>
</head>
<body>
    <?php
        include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/header.inc.php');
        include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/formSend.inc.php');
    ?>
    <div id="main" class="page_int page_gracias" role="main">
        <h1 class="alignCenter">Gracias</h1>
        <p class="alignCenter"><?php echo $formStatus_MSG_OK_globalB ?></p>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/footer.inc.php'); ?>
</body>
</html>
