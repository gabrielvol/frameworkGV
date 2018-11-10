<?php
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/variables.inc.php');
    
    $index = 1;
    
    $title = "PáginaSinTítulo";
    //$titleGB = "UntitledPage";
    
    $mdesc = "";
    //$mdescGB = "";
    
             // Max 35 char
             // 123456789-123456789-123456789-12345 
    $ogTitle = "OGWebsiteTitle";
    //$ogTitleGB = "OGWebsiteTitle";
    
            // Max 65 char
            // 123456789-123456789-123456789-123456789-123456789-123456789-12345 
    $ogDesc = "Descr.";
    //$ogDescGB = "Descr.";
    
    $ogURL = $url;  
    $ogSiteName = $ogTitle;
    
    $navCurrent = 0;
    
    //Gettext variable, debe ir antes del head
    if(isset($l)) {
        $idiomaElegido = $_GET['l'];        
    } else {
        $idiomaElegido = 'es_AR';
    }        
    $idioma = $idiomaElegido;
    
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/head.inc.php');
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/gettext.inc.php');
?>
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/header.inc.php'); ?>
    <div id="main" class="index" role="main">
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/footer.inc.php'); ?>
</body>
</html>
