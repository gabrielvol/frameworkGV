<?php
    $snippets = 1;
    $int = 1;
    $navSelected= 0;
    $title = "Video Cover | GV";
    $mdesc = "";
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/head.inc.php');
?>
<link href="/nuevo/_test/css/main.css" rel="stylesheet">
<link href="/nuevo/_test/css/videoCover.css" rel="stylesheet">
<!--<script type="text/javascript" src="/nuevo/_test/js/videoCover.js"></script>-->
</head>
<body>
    <?php //include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/header.inc.php'); ?>
    <div id="main" class="index" role="main">
        <?php $i = rand(1, 2); ?>
        <div class="video-container mask coverAll">
            <video autoplay loop class="fullWidth" poster="/nuevo/video/cover/ramonesCover.jpg">
                <source src="/nuevo/video/cover/ramones0<?php echo $i; ?>.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' />
                <source src="/nuevo/video/cover/ramones0<?php echo $i; ?>.webm" type='video/webm; codecs="vp8, vorbis"' />
                <source src="/nuevo/video/cover/ramones0<?php echo $i; ?>.ogv" type='video/ogg; codecs="theora, vorbis"' />
                Su explorador no puede reproducir el video.
            </video>
        </div>
    </div>
    <?php //include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/footer.inc.php'); ?>
</body>
</html>
