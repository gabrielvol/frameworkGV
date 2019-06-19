<?php
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/variables.inc.php');
    
    $int = 1;
    $gracias = 1;
    
    $title      = "Gracias | ".$company_name_full;
  //$mdescGB    = "Thank You | ".$company_name_full;;
    
//Open Graph Start
                // Max 35 char
                // 123456789-123456789-123456789-12345 
    $ogTitle    = "OGWebsiteTitle";
  //$ogTitleGB  = "OGWebsiteTitle";
    
                // Max 65 char                       ·
                // 123456789-123456789-123456789-123456789-123456789-123456789-12345 
    $ogDesc     = "Descr.";
  //$ogDescGB   = "Descr.";
    
    $ogURL      = $url;  
    $ogSiteName = $ogTitle;
//Open Graph End
    
    $navCurrent = 0;
    
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/gettext.variableCheck.inc.php');    
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/head.inc.php');
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/gettext.locale.inc.php');
?>
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/common/header.inc.php'); ?>
    <div id="main" class="int gracias" role="main">
        <h1 class="alignCenter">Gracias</h1>
        <p class="alignCenter">Los datos se han enviado correctamente, nos comunicaremos a la brevedad. Muchas Gracias</p>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/common/footer.inc.php'); ?>
</body>
</html>
