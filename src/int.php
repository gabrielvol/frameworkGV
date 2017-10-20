<?php
    $int = 1;
    
    $title = "PáginaInterna | PáginaSinTítulo";
    //$titleEN = "PáginaInterna | UntitledPage";
    $mdesc = "";
    
    $navSelected = 1;
    $navSelectedInt = 1;
    
    //Gettext variable, debe ir antes del head
    $idioma = $_GET['l'];
    
    include($_SERVER['DOCUMENT_ROOT'] . '/framework/common/head.inc.php');
    include($_SERVER['DOCUMENT_ROOT'] . '/framework/common/gettext.inc.php');
?>
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/framework/common/header.inc.php'); ?>
    <div id="main" class="int seccion" role="main">
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/framework/common/footer.inc.php'); ?>
</body>
</html>
