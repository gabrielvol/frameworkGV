<?php
    $snippets=1;
    $int=1;
    $navSelected=0;
    $title="Unslider | GV";
    $mdesc="";
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/head.inc.php');
?>
<script type="text/javascript" src="/nuevo/_snippets/js/unslider.js"></script>
<link rel="stylesheet" href="/nuevo/_snippets/css/unslider.css"/>
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/header.inc.php'); ?>
    <div id="main" class="" role="main">
        <div class="unslider">
            <ul class="horizontal clearfix nextPrevPag">
                <li><img src="/nuevo/_snippets/img/sliderFull/img04.jpg" alt="Slide" class="displayBlock" /></li>
                <li><img src="/nuevo/_snippets/img/sliderFull/img03.jpg" alt="Slide" class="displayBlock" /></li>
                <li><img src="/nuevo/_snippets/img/sliderFull/img04.jpg" alt="Slide" class="displayBlock" /></li>
                <li><img src="/nuevo/_snippets/img/sliderFull/img03.jpg" alt="Slide" class="displayBlock" /></li>
            </ul>
        </div>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/footer.inc.php'); ?>
    <script type="text/javascript">
        $('.unslider').unslider({
            arrows: true,              // display prev/next arrows (boolean)
            dots: true,               //  Display dot navigation
            fade: true     //use fade instead of slide
        });
    </script>
</body>
</html>