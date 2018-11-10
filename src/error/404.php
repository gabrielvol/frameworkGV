<?php
    $error = 1;
    
    $title = "Error | ";
    //$titleGB = "UntitledPage";
    $mdesc = "";
    
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
    <div id="main" class="errorPage pvl" role="main">
        <h1 class="greyD alignCenter"><?php echo _("P&aacute;gina no encontrada"); ?>.</h1>
        <p class="errorType pbl grey alignCenter"><?php echo _("Error 404"); ?>.</p>
        <p class="black alignCenter"><?php echo _("Puede continuar navegando el sitio yendo a la"); ?> <a href="/nuevo/" class="black underline"><?php echo _("p&aacute;gina inicial del sitio"); ?></a><?php echo _(", o a nuestra"); ?> <a href="/nuevo/contacto.php" class="black underline"><?php echo _("p&aacute;gina de contacto"); ?></a>.</p>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/footer.inc.php'); ?>
</body>
</html>
