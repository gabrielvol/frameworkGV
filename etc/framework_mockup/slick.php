<?php
    $page_test = 1;
    $page_int = 1;
    
    $site_title = "Irregular Gallery | GV";
    $site_desc = "";
    
    $nav_pageCurrent = 0;
    
    include($_SERVER['DOCUMENT_ROOT'] . '/framework/common/head.inc.php');
?>
<link href="/framework/css/main.css" rel="stylesheet">
<link href="/framework/css/slick.css" rel="stylesheet">
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/framework/common/header.inc.php'); ?>
    <div id="main" class="container" role="main">
        <ul class="slick slick_main mask horizontal clearfix">
            <li><img data-lazy="/framework/img/img_slide01.png" alt="" aria-hidden="true"></li>
            <li><img data-lazy="/framework/img/img_slide02.png" alt="" aria-hidden="true"></li>
            <li><img data-lazy="/framework/img/img_slide03.png" alt="" aria-hidden="true"></li>
        </ul>
        
        <ul class="slick slick_main mask horizontal clearfix">
            <li><img src="/framework/img/img_slide01.png" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <li><img src="/framework/img/img_slide02.png" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <li><img src="/framework/img/img_slide03.png" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
        </ul>
        
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/framework/common/footer.inc.php'); ?>
    <script src="/js/slick.js"></script>
    <script src="/js/_slick.js"></script>
</html>