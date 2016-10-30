<?php
    $test = 1;
    $int = 1;
    $navSelected= 0;
    $title = "Supersized | GV";
    $mdesc = "";
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/head.inc.php');
?>
<link href="/nuevo/_test/css/main.css" rel="stylesheet">
<!--fondo supersized-->
<link href="/nuevo/_test/css/supersized.css" rel="stylesheet">
<script type="text/javascript" src="/nuevo/_test/js/supersized.3.2.7.js"></script>
<script type="text/javascript" src="/nuevo/_test/js/supersized.shutter.js"></script>

<!--    Supersized - Fullscreen Slideshow jQuery Plugin
        Version : 3.2.7
        Site	: www.buildinternet.com/project/supersized

        Author	: Sam Dunn
        Company : One Mighty Roar (www.onemightyroar.com)
        License : MIT License / GPL License
-->
<script type="text/javascript">
    jQuery(function($){
        $.supersized({
            // Functionality
            slide_interval: 3000, // Length between transitions
            transition: 1, // 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
            transition_speed: 700, // Speed of transition

            // Components
            slide_links: false,	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
            slides: [ // Slideshow Images
                        {image : '/nuevo/_test/img/perfect/bg01.jpg'},
                        {image : '/nuevo/_test/img/perfect/bg02.jpg'},
                        {image : '/nuevo/_test/img/perfect/bg03.jpg'},
                        {image : '/nuevo/_test/img/perfect/bg04.jpg'}
                    ]
        });
});
</script>
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/header.inc.php'); ?>
    <div id="main" class="container" role="main">

    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/footer.inc.php'); ?>
</body>
</html>
