<?php
    $test = 1;
    $int = 1;
    
    $title = "Slick | GV";
    $mdesc = "";
    
    $navSelected= 0;
    
    include($_SERVER['DOCUMENT_ROOT'] . '/framework/common/head.inc.php');
?>
<link href="/framework/css/main.css" rel="stylesheet">
<link href="/framework/css/slick.css" rel="stylesheet">
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/framework/common/header.inc.php'); ?>
    <div id="main" class="container" role="main">
        <ul class="slickSection slick mask horizontal clearfix">
            <li><img data-lazy="/framework/img/img_slide01.png" alt="" aria-hidden="true"></li>
            <li><img data-lazy="/framework/img/img_slide02.png" alt="" aria-hidden="true"></li>
            <li><img data-lazy="/framework/img/img_slide03.png" alt="" aria-hidden="true"></li>
        </ul>
        
        <ul class="slickSection slick mask horizontal clearfix">
            <li><img src="/framework/img/img_slide01.png" alt="" aria-hidden="true"></li>
            <li><img src="/framework/img/img_slide02.png" alt="" aria-hidden="true"></li>
            <li><img src="/framework/img/img_slide03.png" alt="" aria-hidden="true"></li>
        </ul>
        
        <?php
            $fotoSliderHeader01 = '01';
            $fotoSliderHeader02 = '02';
            $fotoSliderHeader03 = '03';
            $fotoSliderHeader04 = '04';
            $fotoSliderHeader05 = '05';
            $fotoSliderHeader06 = '06';
            $fotoSliderHeader07 = '07';
            $fotoSliderHeader08 = '08';
            $fotoSliderHeader09 = '09';
            $fotoSliderHeader10 = '10';
            $fotoSliderHeader11 = '11';
            $fotoSliderHeader12 = '12';
            $fotoSliderHeader13 = '13';
            $fotoSliderHeader14 = '14';
            $fotoSliderHeader15 = '15';
            $fotoSliderHeader16 = '16';
            $fotoSliderHeader17 = '17';
            $fotoSliderHeader18 = '18';
            $fotoSliderHeader19 = '19';
            $fotoSliderHeader20 = '10';
            include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/slick.header.inc.php');
        ?>
        <ul class="slickSection slick mask horizontal clearfix">
            <?php if(isset($fotoSliderHeader01)): ?>
            <li><img src="/nuevo/img/img_slide<?php echo $fotoSliderHeader01; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($fotoSliderHeader02)): ?>
            <li><img src="/nuevo/img/img_slide<?php echo $fotoSliderHeader02; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($fotoSliderHeader03)): ?>
            <li><img src="/nuevo/img/img_slide<?php echo $fotoSliderHeader03; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($fotoSliderHeader04)): ?>
            <li><img src="/nuevo/img/img_slide<?php echo $fotoSliderHeader04; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($fotoSliderHeader05)): ?>
            <li><img src="/nuevo/img/img_slide<?php echo $fotoSliderHeader05; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($fotoSliderHeader06)): ?>
            <li><img src="/nuevo/img/img_slide<?php echo $fotoSliderHeader06; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($fotoSliderHeader07)): ?>
            <li><img src="/nuevo/img/img_slide<?php echo $fotoSliderHeader07; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($fotoSliderHeader08)): ?>
            <li><img src="/nuevo/img/img_slide<?php echo $fotoSliderHeader08; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($fotoSliderHeader09)): ?>
            <li><img src="/nuevo/img/img_slide<?php echo $fotoSliderHeader09; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($fotoSliderHeader10)): ?>
            <li><img src="/nuevo/img/img_slide<?php echo $fotoSliderHeader10; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($fotoSliderHeader11)): ?>
            <li><img src="/nuevo/img/img_slide<?php echo $fotoSliderHeader11; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($fotoSliderHeader12)): ?>
            <li><img src="/nuevo/img/img_slide<?php echo $fotoSliderHeader12; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($fotoSliderHeader13)): ?>
            <li><img src="/nuevo/img/img_slide<?php echo $fotoSliderHeader13; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($fotoSliderHeader14)): ?>
            <li><img src="/nuevo/img/img_slide<?php echo $fotoSliderHeader14; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($fotoSliderHeader15)): ?>
            <li><img src="/nuevo/img/img_slide<?php echo $fotoSliderHeader15; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($fotoSliderHeader16)): ?>
            <li><img src="/nuevo/img/img_slide<?php echo $fotoSliderHeader16; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($fotoSliderHeader17)): ?>
            <li><img src="/nuevo/img/img_slide<?php echo $fotoSliderHeader17; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($fotoSliderHeader18)): ?>
            <li><img src="/nuevo/img/img_slide<?php echo $fotoSliderHeader18; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($fotoSliderHeader19)): ?>
            <li><img src="/nuevo/img/img_slide<?php echo $fotoSliderHeader19; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($fotoSliderHeader20)): ?>
            <li><img src="/nuevo/img/img_slide<?php echo $fotoSliderHeader20; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; ?>
        </ul>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/framework/common/footer.inc.php'); ?>
    <script src="/js/slick.js"></script>
    <script src="/js/_slick.js"></script>
</html>