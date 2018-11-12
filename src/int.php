<?php
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/variables.inc.php');
    
    $int = 1;
    
    $title = "PáginaInterna | PáginaSinTítulo";
    //$titleGB = "PáginaInterna | UntitledPage";
    
    $mdesc = "";
    //$mdescGB = "";
    
    $ogURL = $url;
    $ogTitle = "OGWebsiteTitle";
    // Max 35 char 123456789-123456789-123456789-12345    
    $ogSiteName = $ogTitle;
    $ogDesc = "Descr.";
    // Max65 char 123456789-123456789-123456789-123456789-123456789-123456789-12345
    
    $navCurrent = 1;
    $navCurrentInt = 0;
    
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/gettext.variableCheck.inc.php');    
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/head.inc.php');
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/gettext.locale.php');
?>
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/header.inc.php'); ?>
    <div id="main" class="int seccion" role="main">
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/footer.inc.php'); ?>
</body>
</html>
