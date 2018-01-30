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
            <li><img data-lazy="/framework/img/img_slide01.png" alt=""></li>
            <li><img data-lazy="/framework/img/img_slide02.png" alt=""></li>
            <li><img data-lazy="/framework/img/img_slide03.png" alt=""></li>
        </ul>
        
        <ul class="slick mask horizontal clearfix">
            <li><img src="/framework/img/img_slide01.png" alt=""></li>
            <li><img src="/framework/img/img_slide02.png" alt=""></li>
            <li><img src="/framework/img/img_slide03.png" alt=""></li>
        </ul>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/framework/common/footer.inc.php'); ?>
    <script src="/js/slick.js" type="text/javascript"></script>
</html>