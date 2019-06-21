<?php
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/variables.inc.php');
    
    $page_index      = 1;
    
    $site_title      = $company_name_full;
  //$site_title_GB   = $company_name_full;
    
    $site_desc       = $site_desc_global;
  //$site_desc_GB    = $site_desc_global_en;
    
//---Open Graph Start
                        // Max 35 char
                        // 123456789-123456789-123456789-12345 
    $openGraph_title    = $site_title;
  //$openGraph_title_GB = "OGWebsiteTitle";
    
                        // Max 65 char                       ·
                        // 123456789-123456789-123456789-123456789-123456789-123456789-12345 
    $openGraph_desc     = $site_desc_global;
  //$openGraph_desc_GB  = "Descr.";
    
    $openGraph_url      = $url_global;  
    $openGraph_siteName = $openGraph_title;
//---Open Graph End
    
    $nav_pageCurrent = 0;
    
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/gettext.variableCheck.inc.php');    
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/head.inc.php');
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/gettext.locale.inc.php');
?>
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/header.inc.php'); ?>
    <div id="main" class="page_index" role="main">
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/footer.inc.php'); ?>
</body>
</html>
