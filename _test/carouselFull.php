<?php
    $snippets = 1;
    $int = 1;
    $navSelected= 0;
    $title = "Carousel Full | GV";
    $mdesc = "";
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/head.inc.php');
?>
<link href="/nuevo/_test/css/main.css" rel="stylesheet">
<link rel="stylesheet" href="/nuevo/_test/css/carouselFull.css"/>
<script type="text/javascript" src="/nuevo/_test/js/carouFredSel.js"></script>
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/header.inc.php'); ?>
    <div id="main" class="" role="main">
        <div class="carouselWrap pRel">
            <ul class="carouselFull horizontal clearfix">
                <li><img src="/nuevo/_test/img/carouselFull/building1.jpg" alt="Imagen" width="990" height="450" class="displayBlock" /></li>
                <li><img src="/nuevo/_test/img/carouselFull/building2.jpg" alt="Imagen" width="990" height="450" class="displayBlock" /></li>
                <li><img src="/nuevo/_test/img/carouselFull/building3.jpg" alt="Imagen" width="990" height="450" class="displayBlock" /></li>
                <li><img src="/nuevo/_test/img/carouselFull/building4.jpg" alt="Imagen" width="990" height="450" class="displayBlock" /></li>
                <li><img src="/nuevo/_test/img/carouselFull/building5.jpg" alt="Imagen" width="990" height="450" class="displayBlock" /></li>
                <li><img src="/nuevo/_test/img/carouselFull/building6.jpg" alt="Imagen" width="990" height="450" class="displayBlock" /></li>
            </ul>
            <a href="#" class="scPrev displayBlock sprites indentedText">Anterior</a>
            <a href="#" class="scNext displayBlock sprites indentedText">Siguiente</a>
            <div class="scPag"></div>
        </div>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/footer.inc.php'); ?>
<script type="text/javascript">
    $(function() {
        $('.carouselFull').carouFredSel({
            width: '100%',
            items: {
                visible: 3,
                start: -1
            },
            scroll: {
                items: 1,
                duration: 1000,
                timeoutDuration: 3000
            },
            prev: '.scPrev',
            next: '.scNext',
            pagination: {
                container: '.scPag',
                deviation: 1
            }
        });
    });
</script>
</body>
</html>
