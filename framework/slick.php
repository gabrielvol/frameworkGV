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
            <li><img data-lazy="/framework/img/img_slide01.png" alt="" aria-hidden="true"></li>
            <li><img data-lazy="/framework/img/img_slide02.png" alt="" aria-hidden="true"></li>
            <li><img data-lazy="/framework/img/img_slide03.png" alt="" aria-hidden="true"></li>
        </ul>
        
        <ul class="slick mask horizontal clearfix">
            <li><img src="/framework/img/img_slide01.png" alt="" aria-hidden="true"></li>
            <li><img src="/framework/img/img_slide02.png" alt="" aria-hidden="true"></li>
            <li><img src="/framework/img/img_slide03.png" alt="" aria-hidden="true"></li>
        </ul>
        
        <?php
            $fotoSliderHeader01 = '01';
            $fotoSliderHeader02 = '02';
            $fotoSliderHeader03 = '03';
            include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/slick.header.inc.php');
        ?>
        <ul class="slick mask horizontal clearfix">
            <?php if(isset($fotoSliderHeader01)): ?>
            <li><img src="/nuevo/img/img_slide<?php echo $fotoSliderHeader01; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($fotoSliderHeader02)): ?>
            <li><img src="/nuevo/img/img_slide<?php echo $fotoSliderHeader02; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($fotoSliderHeader03)): ?>
            <li><img src="/nuevo/img/img_slide<?php echo $fotoSliderHeader03; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; ?>
        </ul>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/framework/common/footer.inc.php'); ?>
    <script src="/js/slick.js"></script>
    <script src="/js/_slick.js"></script>
</html>