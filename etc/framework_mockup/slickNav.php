<?php
    $page_test = 1;
    $page_int = 1;
    $nav_pageCurrent= 0;
    $site_title = "Slick | GV";
    $site_desc = "";
    include($_SERVER['DOCUMENT_ROOT'] . '/framework/common/head.inc.php');
?>
<link href="/framework/css/main.css" rel="stylesheet">
<link href="/framework/css/slick.css" rel="stylesheet">
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/framework/common/header.inc.php'); ?>
    <div id="main" class="container" role="main">                
        <ol id="sliderMain" class="sliderMain corvetteC3 mask horizontal clearfix fullWidth">
            <li><img src="/nuevo/img/coleccion/corvetteC3/01.jpg" alt="" class="displayBlock fullWidth"></li>
            <li><img src="/nuevo/img/coleccion/corvetteC3/02.jpg" alt="" class="displayBlock fullWidth"></li>
            <li><img src="/nuevo/img/coleccion/corvetteC3/03.jpg" alt="" class="displayBlock fullWidth"></li>
            <li><img src="/nuevo/img/coleccion/corvetteC3/04.jpg" alt="" class="displayBlock fullWidth"></li>
            <li><img src="/nuevo/img/coleccion/corvetteC3/05.jpg" alt="" class="displayBlock fullWidth"></li>
            <li><img src="/nuevo/img/coleccion/corvetteC3/06.jpg" alt="" class="displayBlock fullWidth"></li>
            <li><img src="/nuevo/img/coleccion/corvetteC3/07.jpg" alt="" class="displayBlock fullWidth"></li>
            <li><img src="/nuevo/img/coleccion/corvetteC3/08.jpg" alt="" class="displayBlock fullWidth"></li>
            <li><img src="/nuevo/img/coleccion/corvetteC3/09.jpg" alt="" class="displayBlock fullWidth"></li>
            <li><img src="/nuevo/img/coleccion/corvetteC3/10.jpg" alt="" class="displayBlock fullWidth"></li>
            <li><img src="/nuevo/img/coleccion/corvetteC3/11.jpg" alt="" class="displayBlock fullWidth"></li>
            <li><img src="/nuevo/img/coleccion/corvetteC3/12.jpg" alt="" class="displayBlock fullWidth"></li>
            <li><img src="/nuevo/img/coleccion/corvetteC3/13.jpg" alt="" class="displayBlock fullWidth"></li>
            <li><img src="/nuevo/img/coleccion/corvetteC3/14.jpg" alt="" class="displayBlock fullWidth"></li>
            <li><img src="/nuevo/img/coleccion/corvetteC3/15.jpg" alt="" class="displayBlock fullWidth"></li>
            <li><img src="/nuevo/img/coleccion/corvetteC3/16.jpg" alt="" class="displayBlock fullWidth"></li>
        </ol>
        <ol id="sliderNav" class="sliderNav corvetteC3Nav mask horizontal clearfix fullWidth borderBox bgGreyXXL ptm" role="group" aria-owns="sliderMain" aria-controls="sliderMain">
            <li class="borderBox"><img src="/nuevo/img/coleccion/corvetteC3/01.jpg" alt="Ver fotografía número uno." class="displayBlock fullWidth"></li>
            <li class="borderBox"><img src="/nuevo/img/coleccion/corvetteC3/02.jpg" alt="Ver fotografía número dos." class="displayBlock fullWidth"></li>
            <li class="borderBox"><img src="/nuevo/img/coleccion/corvetteC3/03.jpg" alt="Ver fotografía número tres." class="displayBlock fullWidth"></li>
            <li class="borderBox"><img src="/nuevo/img/coleccion/corvetteC3/04.jpg" alt="Ver fotografía número cuatro." class="displayBlock fullWidth"></li>
            <li class="borderBox"><img src="/nuevo/img/coleccion/corvetteC3/05.jpg" alt="Ver fotografía número cinco." class="displayBlock fullWidth"></li>
            <li class="borderBox"><img src="/nuevo/img/coleccion/corvetteC3/06.jpg" alt="Ver fotografía número seis." class="displayBlock fullWidth"></li>
            <li class="borderBox"><img src="/nuevo/img/coleccion/corvetteC3/07.jpg" alt="Ver fotografía número siete." class="displayBlock fullWidth"></li>
            <li class="borderBox"><img src="/nuevo/img/coleccion/corvetteC3/08.jpg" alt="Ver fotografía número ocho." class="displayBlock fullWidth"></li>
            <li class="borderBox"><img src="/nuevo/img/coleccion/corvetteC3/09.jpg" alt="Ver fotografía número nueve." class="displayBlock fullWidth"></li>
            <li class="borderBox"><img src="/nuevo/img/coleccion/corvetteC3/10.jpg" alt="Ver fotografía número diez." class="displayBlock fullWidth"></li>
            <li class="borderBox"><img src="/nuevo/img/coleccion/corvetteC3/11.jpg" alt="Ver fotografía número once." class="displayBlock fullWidth"></li>
            <li class="borderBox"><img src="/nuevo/img/coleccion/corvetteC3/12.jpg" alt="Ver fotografía número doce." class="displayBlock fullWidth"></li>
            <li class="borderBox"><img src="/nuevo/img/coleccion/corvetteC3/13.jpg" alt="Ver fotografía número trece." class="displayBlock fullWidth"></li>
            <li class="borderBox"><img src="/nuevo/img/coleccion/corvetteC3/14.jpg" alt="Ver fotografía número catorce." class="displayBlock fullWidth"></li>
            <li class="borderBox"><img src="/nuevo/img/coleccion/corvetteC3/15.jpg" alt="Ver fotografía número quince." class="displayBlock fullWidth"></li>
            <li class="borderBox"><img src="/nuevo/img/coleccion/corvetteC3/16.jpg" alt="Ver fotografía número diecicéis." class="displayBlock fullWidth"></li>
        </ol>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/framework/common/footer.inc.php'); ?>
    <script src="/js/slick.js"></script>
    <script src="/js/_slickNav.js"></script>
</html>