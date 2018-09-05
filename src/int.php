<?php
    $int = 1;
    
    $title = "PáginaInterna | PáginaSinTítulo";
    //$titleEN = "PáginaInterna | UntitledPage";
    
    $mdesc = "";
    //$mdescEN = "";
    
    $ogTitle = "OGWebsiteTitle";
    $ogSiteName = $ogTitle;
    $ogDesc = "Descr.";
    // Max 65 char
    // 12345678901234567890123456789012345678901234567890123456789012345
    
    $navCurrent = 1;
    $navCurrentInt = 0;
    
    //Gettext variable, debe ir antes del head
    $idioma = $_GET['l'];
    
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/head.inc.php');
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/gettext.inc.php');
?>
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/header.inc.php'); ?>
    <div id="main" class="int seccion" role="main">
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/footer.inc.php'); ?>
</body>
</html>
