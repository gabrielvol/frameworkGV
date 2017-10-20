<?php
    $test = 1;
    $int = 1;
    $navSelected= 0;
    $title = "Tiny Carousel | GV";
    $mdesc = "";
    include($_SERVER['DOCUMENT_ROOT'] . '/framework/common/head.inc.php');
?>
<link href="/framework/css/main.css" rel="stylesheet">
<link href="/framework/css/carouselTiny.css" rel="stylesheet">
<script type="text/javascript" src="https://raw.githubusercontent.com/gabrielvol/frameworkGV/master/etc/js/carouselTiny.js"></script>
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/framework/common/header.inc.php'); ?>
    <div id="main" class="container" role="main">
        <div class="tinyCarousel pRel">
            <a href="#" class="scPrev displayBlock sprites indentedText">Anterior</a>
            <div class="viewport pRel">
                <ul class="overview pAbs horizontal">
                    <li><a href="#"><img src="/framework/img/img01.jpg" width="100" height="100" alt="Imagen" class="displayBlock" /></a></li>
                    <li><a href="#"><img src="/framework/img/img02.jpg" width="100" height="100" alt="Imagen" class="displayBlock" /></a></li>
                    <li><a href="#"><img src="/framework/img/img01.jpg" width="100" height="100" alt="Imagen" class="displayBlock" /></a></li>
                    <li><a href="#"><img src="/framework/img/img02.jpg" width="100" height="100" alt="Imagen" class="displayBlock" /></a></li>
                    <li><a href="#"><img src="/framework/img/img01.jpg" width="100" height="100" alt="Imagen" class="displayBlock" /></a></li>
                    <li><a href="#"><img src="/framework/img/img02.jpg" width="100" height="100" alt="Imagen" class="displayBlock" /></a></li>
                </ul>
            </div>
            <a href="#" class="scNext displayBlock sprites indentedText">Siguiente</a>
       </div>
    </div>
    <script type="text/javascript">
        $('.tinyCarousel').tinycarousel();
    </script>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/framework/common/footer.inc.php'); ?>
</body>
</html>
