<?php
    $index=1;
    $navSelected= 0;
    $title = "Title";
    $mdesc = "";
    //Gettext variable, debe ir antes del head
    $idioma=$_GET['l'];
/*
    <?php echo _(""); ?>
    <?php echo _("
    "); ?>
*/
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/head.inc.php');
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/gettext.inc.php');
?>
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/header.inc.php'); ?>
    <div id="main" class="index" role="main">
        <a href="/nuevo/oldframework/">Go to test</a>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/footer.inc.php'); ?>
    <script type="text/javascript" src="/nuevo/test/ng/javaScript01.js"></script>
</body>
</html>
