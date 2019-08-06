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
            $slider_sliderMain_iniClass = 'sliderMain';
             
            $slider_sliderMain_foto_01  = '01';
            $slider_sliderMain_foto_02  = '02';
            $slider_sliderMain_foto_03  = '03';
            $slider_sliderMain_foto_04  = '04';
            $slider_sliderMain_foto_05  = '05';
            $slider_sliderMain_foto_06  = '06';
            $slider_sliderMain_foto_07  = '07';
            $slider_sliderMain_foto_08  = '08';
            $slider_sliderMain_foto_09  = '09';
            $slider_sliderMain_foto_10  = '10';
            $slider_sliderMain_foto_11  = '11';
            $slider_sliderMain_foto_12  = '12';
            $slider_sliderMain_foto_13  = '13';
            $slider_sliderMain_foto_14  = '14';
            $slider_sliderMain_foto_15  = '15';
            $slider_sliderMain_foto_16  = '16';
            $slider_sliderMain_foto_17  = '17';
            $slider_sliderMain_foto_18  = '18';
            $slider_sliderMain_foto_19  = '19';
            $slider_sliderMain_foto_20  = '10';
            include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/slick.main.inc.php');
        ?>                
        <ul class="slick mask horizontal clearfix <?php if(isset($slider_sliderMain_iniClass)) { echo $slider_sliderMain_iniClass; } ?>">
            <?php        if(isset($slider_sliderMain_foto_01)): ?>
            <li><img src="/nuevo/img/img_slide<?php echo $slider_sliderMain_foto_01; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($slider_sliderMain_foto_02)): ?>
            <li><img src="/nuevo/img/img_slide<?php echo $slider_sliderMain_foto_02; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($slider_sliderMain_foto_03)): ?>
            <li><img src="/nuevo/img/img_slide<?php echo $slider_sliderMain_foto_03; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($slider_sliderMain_foto_04)): ?>
            <li><img src="/nuevo/img/img_slide<?php echo $slider_sliderMain_foto_04; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($slider_sliderMain_foto_05)): ?>
            <li><img src="/nuevo/img/img_slide<?php echo $slider_sliderMain_foto_05; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($slider_sliderMain_foto_06)): ?>
            <li><img src="/nuevo/img/img_slide<?php echo $slider_sliderMain_foto_06; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($slider_sliderMain_foto_07)): ?>
            <li><img src="/nuevo/img/img_slide<?php echo $slider_sliderMain_foto_07; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($slider_sliderMain_foto_08)): ?>
            <li><img src="/nuevo/img/img_slide<?php echo $slider_sliderMain_foto_08; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($slider_sliderMain_foto_09)): ?>
            <li><img src="/nuevo/img/img_slide<?php echo $slider_sliderMain_foto_09; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($slider_sliderMain_foto_10)): ?>
            <li><img src="/nuevo/img/img_slide<?php echo $slider_sliderMain_foto_10; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($slider_sliderMain_foto_11)): ?>
            <li><img src="/nuevo/img/img_slide<?php echo $slider_sliderMain_foto_11; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($slider_sliderMain_foto_12)): ?>
            <li><img src="/nuevo/img/img_slide<?php echo $slider_sliderMain_foto_12; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($slider_sliderMain_foto_13)): ?>
            <li><img src="/nuevo/img/img_slide<?php echo $slider_sliderMain_foto_13; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($slider_sliderMain_foto_14)): ?>
            <li><img src="/nuevo/img/img_slide<?php echo $slider_sliderMain_foto_14; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($slider_sliderMain_foto_15)): ?>
            <li><img src="/nuevo/img/img_slide<?php echo $slider_sliderMain_foto_15; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($slider_sliderMain_foto_16)): ?>
            <li><img src="/nuevo/img/img_slide<?php echo $slider_sliderMain_foto_16; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($slider_sliderMain_foto_17)): ?>
            <li><img src="/nuevo/img/img_slide<?php echo $slider_sliderMain_foto_17; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($slider_sliderMain_foto_18)): ?>
            <li><img src="/nuevo/img/img_slide<?php echo $slider_sliderMain_foto_18; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($slider_sliderMain_foto_19)): ?>
            <li><img src="/nuevo/img/img_slide<?php echo $slider_sliderMain_foto_19; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($slider_sliderMain_foto_20)): ?>
            <li><img src="/nuevo/img/img_slide<?php echo $slider_sliderMain_foto_20; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; ?>
        </ul>
        
        <?php
            $slider_carousel_iniClass = 'carousel';
             
            $slider_carousel_foto_01  = '01';
            $slider_carousel_foto_02  = '02';
            $slider_carousel_foto_03  = '03';
            $slider_carousel_foto_04  = '04';
            $slider_carousel_foto_05  = '05';
            $slider_carousel_foto_06  = '06';
            $slider_carousel_foto_07  = '07';
            $slider_carousel_foto_08  = '08';
            $slider_carousel_foto_09  = '09';
            $slider_carousel_foto_10  = '10';
            $slider_carousel_foto_11  = '11';
            $slider_carousel_foto_12  = '12';
            $slider_carousel_foto_13  = '13';
            $slider_carousel_foto_14  = '14';
            $slider_carousel_foto_15  = '15';
            $slider_carousel_foto_16  = '16';
            $slider_carousel_foto_17  = '17';
            $slider_carousel_foto_18  = '18';
            $slider_carousel_foto_19  = '19';
            $slider_carousel_foto_20  = '10';
            include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/slick.carousel.inc.php');
        ?>                
        <ul class="slick mask horizontal clearfix <?php if(isset($slider_carousel_iniClass)) { echo $slider_carousel_iniClass; } ?>">
            <?php        if(isset($slider_carousel_foto_01)): ?>
            <li><img src="/nuevo/img/img_carousel<?php echo $slider_carousel_foto_01; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($slider_carousel_foto_02)): ?>
            <li><img src="/nuevo/img/img_carousel<?php echo $slider_carousel_foto_02; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($slider_carousel_foto_03)): ?>
            <li><img src="/nuevo/img/img_carousel<?php echo $slider_carousel_foto_03; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($slider_carousel_foto_04)): ?>
            <li><img src="/nuevo/img/img_carousel<?php echo $slider_carousel_foto_04; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($slider_carousel_foto_05)): ?>
            <li><img src="/nuevo/img/img_carousel<?php echo $slider_carousel_foto_05; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($slider_carousel_foto_06)): ?>
            <li><img src="/nuevo/img/img_carousel<?php echo $slider_carousel_foto_06; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($slider_carousel_foto_07)): ?>
            <li><img src="/nuevo/img/img_carousel<?php echo $slider_carousel_foto_07; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($slider_carousel_foto_08)): ?>
            <li><img src="/nuevo/img/img_carousel<?php echo $slider_carousel_foto_08; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($slider_carousel_foto_09)): ?>
            <li><img src="/nuevo/img/img_carousel<?php echo $slider_carousel_foto_09; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($slider_carousel_foto_10)): ?>
            <li><img src="/nuevo/img/img_carousel<?php echo $slider_carousel_foto_10; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($slider_carousel_foto_11)): ?>
            <li><img src="/nuevo/img/img_carousel<?php echo $slider_carousel_foto_11; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($slider_carousel_foto_12)): ?>
            <li><img src="/nuevo/img/img_carousel<?php echo $slider_carousel_foto_12; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($slider_carousel_foto_13)): ?>
            <li><img src="/nuevo/img/img_carousel<?php echo $slider_carousel_foto_13; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($slider_carousel_foto_14)): ?>
            <li><img src="/nuevo/img/img_carousel<?php echo $slider_carousel_foto_14; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($slider_carousel_foto_15)): ?>
            <li><img src="/nuevo/img/img_carousel<?php echo $slider_carousel_foto_15; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($slider_carousel_foto_16)): ?>
            <li><img src="/nuevo/img/img_carousel<?php echo $slider_carousel_foto_16; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($slider_carousel_foto_17)): ?>
            <li><img src="/nuevo/img/img_carousel<?php echo $slider_carousel_foto_17; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($slider_carousel_foto_18)): ?>
            <li><img src="/nuevo/img/img_carousel<?php echo $slider_carousel_foto_18; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($slider_carousel_foto_19)): ?>
            <li><img src="/nuevo/img/img_carousel<?php echo $slider_carousel_foto_19; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($slider_carousel_foto_20)): ?>
            <li><img src="/nuevo/img/img_carousel<?php echo $slider_carousel_foto_20; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; ?>
        </ul>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/framework/common/footer.inc.php'); ?>
    <script src="/js/slick.js"></script>
    <script src="/js/_slick.js"></script>
</html>