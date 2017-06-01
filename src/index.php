<?php
    $index = 1;
    
    $title = "PáginaSinTítulo";
    //$titleEN = "UntitledPage";
    $mdesc = "";
    
    $navSelected = 1;
    
    //Gettext variable, debe ir antes del head
    $idioma = $_GET['l'];
    
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/head.inc.php');
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/gettext.inc.php');
?>

<!--Borrar-->
<style media="screen" type="text/css">
#navTest li{
    border: 1px solid #000;
    float: left;
    background-color: #eee;
    padding: 0 5px;
    margin-bottom: 5px;
}
#navTest li, #navTest li a{
    height: 20px;
    line-height: 20px;
}
#navTest li + li{margin-left: 5px}
#navTest li a{font-size: 0.7em}
</style>
<!--Borrar-->

</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/header.inc.php'); ?>
    
    <!--Borrar-->
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/_test/common/nav.inc.php'); ?>
    <!--Borrar-->
    
    <div id="main" class="index" role="main">
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/footer.inc.php'); ?>
</body>
</html>
