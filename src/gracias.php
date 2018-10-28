<?php
    $int = 1;
    $gracias = 1;
    
    $title = "Gracias";
    //$titleGB = "Thank You";
    
    $mdesc = "";
    //$mdescGB = "";
    
    $ogURL = $url;
    $ogTitle = "OGWebsiteTitle";
    // Max 35 char 123456789-123456789-123456789-12345    
    $ogSiteName = $ogTitle;
    $ogDesc = "Descr.";
    // Max65 char 123456789-123456789-123456789-123456789-123456789-123456789-12345
    
    $navCurrent = 0;
    
    include($_SERVER['DOCUMENT_ROOT'] . '/common/head.inc.php');
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
