<?php
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/variables/__main.var.inc.php');
    
    $page_index      = 1;
    $load_lightbox   = 0;
    
    $site_title      = $company_name_full;
  //$site_title_GB   = $company_name_full;
    
    $site_desc       = $site_desc_global;
  //$site_desc_GB    = $site_desc_global_GB;
    
    $openGraph_title    = $openGraph_title_global;
  //$openGraph_title_GB = $openGraph_title_global_GB;
    $openGraph_desc     = $openGraph_desc_global;
  //$openGraph_desc_GB  = $openGraph_desc_global_GB;
  //$openGraph_img_url  = $url_global .'/nuevo'; 
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
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/header.inc.php'); ?>
    <div id="main" class="page_index" role="main">
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/footer.inc.php'); ?>
</body>
</html>
