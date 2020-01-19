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
        <ul class="slick mask horizontal clearfix">
            <li><img data-lazy="/framework/img/img_slide01.png" alt="" aria-hidden="true"></li>
            <li><img data-lazy="/framework/img/img_slide02.png" alt="" aria-hidden="true"></li>
            <li><img data-lazy="/framework/img/img_slide03.png" alt="" aria-hidden="true"></li>
        </ul>
        
        <ul class="slick mask horizontal clearfix">
            <li><img src="/framework/img/img_slide01.png" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <li><img src="/framework/img/img_slide02.png" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <li><img src="/framework/img/img_slide03.png" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
        </ul>
        
        <?php
            $sliderClass = 'sliderSeccion';
            
            $sliderFoto_main_01 = '01';
            $sliderFoto_main_02 = '02';
            $sliderFoto_main_03 = '03';
            $sliderFoto_main_04 = '04';
            $sliderFoto_main_05 = '05';
            $sliderFoto_main_06 = '06';
            $sliderFoto_main_07 = '07';
            $sliderFoto_main_08 = '08';
            $sliderFoto_main_09 = '09';
            $sliderFoto_main_10 = '10';
            $sliderFoto_main_11 = '11';
            $sliderFoto_main_12 = '12';
            $sliderFoto_main_13 = '13';
            $sliderFoto_main_14 = '14';
            $sliderFoto_main_15 = '15';
            $sliderFoto_main_16 = '16';
            $sliderFoto_main_17 = '17';
            $sliderFoto_main_18 = '18';
            $sliderFoto_main_19 = '19';
            $sliderFoto_main_20 = '20';
            include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/slick.main.inc.php');
        ?>                
        <ul class="slick mask horizontal clearfix <?php if(isset($sliderClass)) { echo $sliderClass; } ?>">
            <?php        if(isset($sliderFoto_main_01)): // Section ?>
            <li><img src="/nuevo/img/img_slide<?php echo $sliderFoto_main_01; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($sliderFoto_main_02)): // Section ?>
            <li><img src="/nuevo/img/img_slide<?php echo $sliderFoto_main_02; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($sliderFoto_main_03)): // Section ?>
            <li><img src="/nuevo/img/img_slide<?php echo $sliderFoto_main_03; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($sliderFoto_main_04)): // Section ?>
            <li><img src="/nuevo/img/img_slide<?php echo $sliderFoto_main_04; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($sliderFoto_main_05)): // Section ?>
            <li><img src="/nuevo/img/img_slide<?php echo $sliderFoto_main_05; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($sliderFoto_main_06)): // Section ?>
            <li><img src="/nuevo/img/img_slide<?php echo $sliderFoto_main_06; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($sliderFoto_main_07)): // Section ?>
            <li><img src="/nuevo/img/img_slide<?php echo $sliderFoto_main_07; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($sliderFoto_main_08)): // Section ?>
            <li><img src="/nuevo/img/img_slide<?php echo $sliderFoto_main_08; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($sliderFoto_main_09)): // Section ?>
            <li><img src="/nuevo/img/img_slide<?php echo $sliderFoto_main_09; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($sliderFoto_main_10)): // Section ?>
            <li><img src="/nuevo/img/img_slide<?php echo $sliderFoto_main_10; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($sliderFoto_main_11)): // Section ?>
            <li><img src="/nuevo/img/img_slide<?php echo $sliderFoto_main_11; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($sliderFoto_main_12)): // Section ?>
            <li><img src="/nuevo/img/img_slide<?php echo $sliderFoto_main_12; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($sliderFoto_main_13)): // Section ?>
            <li><img src="/nuevo/img/img_slide<?php echo $sliderFoto_main_13; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($sliderFoto_main_14)): // Section ?>
            <li><img src="/nuevo/img/img_slide<?php echo $sliderFoto_main_14; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($sliderFoto_main_15)): // Section ?>
            <li><img src="/nuevo/img/img_slide<?php echo $sliderFoto_main_15; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($sliderFoto_main_16)): // Section ?>
            <li><img src="/nuevo/img/img_slide<?php echo $sliderFoto_main_16; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($sliderFoto_main_17)): // Section ?>
            <li><img src="/nuevo/img/img_slide<?php echo $sliderFoto_main_17; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($sliderFoto_main_18)): // Section ?>
            <li><img src="/nuevo/img/img_slide<?php echo $sliderFoto_main_18; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($sliderFoto_main_19)): // Section ?>
            <li><img src="/nuevo/img/img_slide<?php echo $sliderFoto_main_19; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($sliderFoto_main_20)): // Section ?>
            <li><img src="/nuevo/img/img_slide<?php echo $sliderFoto_main_20; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; ?>
        </ul>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/framework/common/footer.inc.php'); ?>
    <script src="/js/slick.js"></script>
    <script src="/js/_slick.js"></script>
</html>