<?php
    $test = 1;
    $int = 1;
    $navSelected= 0;
    $title = "Slick | GV";
    $mdesc = "";
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/head.inc.php');
?>
<link href="/nuevo/oldframework/css/main.css" rel="stylesheet">
<link href="/nuevo/oldframework/css/slick.css" rel="stylesheet">
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/header.inc.php'); ?>
    <div id="main" class="container" role="main">
        <ul class="slick mask horizontal clearfix">
            <li><img data-lazy="/img/img_slide01.png" alt="Slick"></li>
            <li><img data-lazy="/img/img_slide02.png" alt="Slick"></li>
            <li><img data-lazy="/img/img_slide03.png" alt="Slick"></li>
        </ul>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/footer.inc.php'); ?>
    <script type="text/javascript" src="/nuevo/oldframework/js/slick.js"></script>
    <script type="text/javascript">
        $('.slick').slick({
            infinite: true,
            dots: true,
            arrows: false,            
            fade: true,
            
            slidesToShow: 3,
            slidesToScroll: 3,
            lazyLoad: 'ondemand',
            
            autoplay: true,
            autoplaySpeed: 5000,
            speed: 500,
            
            centerMode: true,
            centerPadding: '60px',
            
            variableWidth: true,
            adaptiveHeight: true,
            
            responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            ]
        });
    </script>
</body>
</html>