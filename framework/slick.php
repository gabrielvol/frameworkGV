<?php
    $test = 1;
    $int = 1;
    $navSelected= 0;
    $title = "Slick | GV";
    $mdesc = "";
    include($_SERVER['DOCUMENT_ROOT'] . '/framework/common/head.inc.php');
?>
<link href="/framework/css/main.css" rel="stylesheet">
<link href="/framework/css/slick.css" rel="stylesheet">
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/framework/common/header.inc.php'); ?>
    <div id="main" class="container" role="main">
        <ul class="slick mask horizontal clearfix">
            <li><img data-lazy="/framework/img/img_slide01.png" alt="Slick"></li>
            <li><img data-lazy="/framework/img/img_slide02.png" alt="Slick"></li>
            <li><img data-lazy="/framework/img/img_slide03.png" alt="Slick"></li>
        </ul>
        
        <ul class="slick mask horizontal clearfix">
            <li><img src="/framework/img/img_slide01.png" alt="Slick"></li>
            <li><img src="/framework/img/img_slide02.png" alt="Slick"></li>
            <li><img src="/framework/img/img_slide03.png" alt="Slick"></li>
        </ul>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/framework/common/footer.inc.php'); ?>
    <script type="text/javascript" src="/etc/js/src/slick.js"></script>
    <script type="text/javascript" src="https://raw.githubusercontent.com/gabrielvol/frameworkGV/master/etc/js/plugins/slick.js"></script>
</html>