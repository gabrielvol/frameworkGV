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
            $sliderClass = 'sliderSeccion';
            
            $fotoSliderMain01 = '01';
            $fotoSliderMain02 = '02';
            $fotoSliderMain03 = '03';
            $fotoSliderMain04 = '04';
            $fotoSliderMain05 = '05';
            $fotoSliderMain06 = '06';
            $fotoSliderMain07 = '07';
            $fotoSliderMain08 = '08';
            $fotoSliderMain09 = '09';
            $fotoSliderMain10 = '10';
            $fotoSliderMain11 = '11';
            $fotoSliderMain12 = '12';
            $fotoSliderMain13 = '13';
            $fotoSliderMain14 = '14';
            $fotoSliderMain15 = '15';
            $fotoSliderMain16 = '16';
            $fotoSliderMain17 = '17';
            $fotoSliderMain18 = '18';
            $fotoSliderMain19 = '19';
            $fotoSliderMain20 = '10';
            include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/slick.main.inc.php');
        ?>                
        <ul class=" slick mask horizontal clearfix <?php if(isset($sliderClass)) { echo $sliderClass; } ?>">
            <?php if(isset($fotoSliderMain01)): ?>
            <li><img src="/nuevo/img/img_slide<?php echo $fotoSliderMain01; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($fotoSliderMain02)): ?>
            <li><img src="/nuevo/img/img_slide<?php echo $fotoSliderMain02; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($fotoSliderMain03)): ?>
            <li><img src="/nuevo/img/img_slide<?php echo $fotoSliderMain03; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($fotoSliderMain04)): ?>
            <li><img src="/nuevo/img/img_slide<?php echo $fotoSliderMain04; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($fotoSliderMain05)): ?>
            <li><img src="/nuevo/img/img_slide<?php echo $fotoSliderMain05; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($fotoSliderMain06)): ?>
            <li><img src="/nuevo/img/img_slide<?php echo $fotoSliderMain06; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($fotoSliderMain07)): ?>
            <li><img src="/nuevo/img/img_slide<?php echo $fotoSliderMain07; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($fotoSliderMain08)): ?>
            <li><img src="/nuevo/img/img_slide<?php echo $fotoSliderMain08; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($fotoSliderMain09)): ?>
            <li><img src="/nuevo/img/img_slide<?php echo $fotoSliderMain09; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($fotoSliderMain10)): ?>
            <li><img src="/nuevo/img/img_slide<?php echo $fotoSliderMain10; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($fotoSliderMain11)): ?>
            <li><img src="/nuevo/img/img_slide<?php echo $fotoSliderMain11; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($fotoSliderMain12)): ?>
            <li><img src="/nuevo/img/img_slide<?php echo $fotoSliderMain12; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($fotoSliderMain13)): ?>
            <li><img src="/nuevo/img/img_slide<?php echo $fotoSliderMain13; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($fotoSliderMain14)): ?>
            <li><img src="/nuevo/img/img_slide<?php echo $fotoSliderMain14; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($fotoSliderMain15)): ?>
            <li><img src="/nuevo/img/img_slide<?php echo $fotoSliderMain15; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($fotoSliderMain16)): ?>
            <li><img src="/nuevo/img/img_slide<?php echo $fotoSliderMain16; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($fotoSliderMain17)): ?>
            <li><img src="/nuevo/img/img_slide<?php echo $fotoSliderMain17; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($fotoSliderMain18)): ?>
            <li><img src="/nuevo/img/img_slide<?php echo $fotoSliderMain18; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($fotoSliderMain19)): ?>
            <li><img src="/nuevo/img/img_slide<?php echo $fotoSliderMain19; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($fotoSliderMain20)): ?>
            <li><img src="/nuevo/img/img_slide<?php echo $fotoSliderMain20; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; ?>
        </ul>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/framework/common/footer.inc.php'); ?>
    <script src="/js/slick.js"></script>
    <script src="/js/_slick.js"></script>
</html>