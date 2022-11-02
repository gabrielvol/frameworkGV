<?php
    $page_test = 1;
    $page_int = 1;
    $nav_pageCurrent= 0;
    $site_title = "Slick | GV";
    $site_desc = "";
    include($_SERVER['DOCUMENT_ROOT'] . '/common/head.inc.php');
?>
<link href="/css/main.css" rel="stylesheet">
<link href="/css/slick.css" rel="stylesheet">
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/common/header.inc.php'); ?>
    <div id="main" class="container" role="main">                
        <ol id="slick_with_nav" class="slick_with_nav unstyled">
            <li><img src="<?php echo $dir_env; ?>/img/img_sliderNav_01.jpg" alt="" /></li>
            <li><img src="<?php echo $dir_env; ?>/img/img_sliderNav_02.jpg" alt="" /></li>
            <li><img src="<?php echo $dir_env; ?>/img/img_sliderNav_03.jpg" alt="" /></li>
            <li><img src="<?php echo $dir_env; ?>/img/img_sliderNav_04.jpg" alt="" /></li>
            <li><img src="<?php echo $dir_env; ?>/img/img_sliderNav_05.jpg" alt="" /></li>
            <li><img src="<?php echo $dir_env; ?>/img/img_sliderNav_06.jpg" alt="" /></li>
            <li><img src="<?php echo $dir_env; ?>/img/img_sliderNav_07.jpg" alt="" /></li>
            <li><img src="<?php echo $dir_env; ?>/img/img_sliderNav_08.jpg" alt="" /></li>
            <li><img src="<?php echo $dir_env; ?>/img/img_sliderNav_09.jpg" alt="" /></li>
            <li><img src="<?php echo $dir_env; ?>/img/img_sliderNav_10.jpg" alt="" /></li>
        </ol>
        <ol id="slick_nav" class="slick_nav unstyled" role="group" aria-owns="slick_with_nav" aria-controls="slick_with_nav">
            <li class="borderBox"><img src="<?php echo $dir_env; ?>/img/img_sliderNav_01.jpg" alt="uno." /></li>
            <li class="borderBox"><img src="<?php echo $dir_env; ?>/img/img_sliderNav_02.jpg" alt="dos." /></li>
            <li class="borderBox"><img src="<?php echo $dir_env; ?>/img/img_sliderNav_03.jpg" alt="tres." /></li>
            <li class="borderBox"><img src="<?php echo $dir_env; ?>/img/img_sliderNav_04.jpg" alt="cuatro." /></li>
            <li class="borderBox"><img src="<?php echo $dir_env; ?>/img/img_sliderNav_05.jpg" alt="cinco." /></li>
            <li class="borderBox"><img src="<?php echo $dir_env; ?>/img/img_sliderNav_06.jpg" alt="seis." /></li>
            <li class="borderBox"><img src="<?php echo $dir_env; ?>/img/img_sliderNav_07.jpg" alt="siete." /></li>
            <li class="borderBox"><img src="<?php echo $dir_env; ?>/img/img_sliderNav_08.jpg" alt="ocho." /></li>
            <li class="borderBox"><img src="<?php echo $dir_env; ?>/img/img_sliderNav_09.jpg" alt="nueve." /></li>
            <li class="borderBox"><img src="<?php echo $dir_env; ?>/img/img_sliderNav_10.jpg" alt="diez." /></li>
            <li class="borderBox"><img src="<?php echo $dir_env; ?>/img/img_sliderNav_11.jpg" alt="once." /></li>
            <li class="borderBox"><img src="<?php echo $dir_env; ?>/img/img_sliderNav_12.jpg" alt="doce." /></li>
            <li class="borderBox"><img src="<?php echo $dir_env; ?>/img/img_sliderNav_13.jpg" alt="trece." /></li>
            <li class="borderBox"><img src="<?php echo $dir_env; ?>/img/img_sliderNav_14.jpg" alt="catorce." /></li>
            <li class="borderBox"><img src="<?php echo $dir_env; ?>/img/img_sliderNav_15.jpg" alt="quince." /></li>
            <li class="borderBox"><img src="<?php echo $dir_env; ?>/img/img_sliderNav_16.jpg" alt="diecicéis." /></li>
        </ol>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/common/footer.inc.php'); ?>
    <script src="<?php echo $dir_env; ?>/js/slick.js"></script>
    <script src="<?php echo $dir_env; ?>/js/_slick_nav.js"></script>
</html>