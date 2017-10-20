<?php
    $test = 1;
    $int = 1;
    $navSelected= 0;
    $title = "Shadow Box | GV";
    $mdesc = "";
    include($_SERVER['DOCUMENT_ROOT'] . '/framework/common/head.inc.php');
?>
<link href="/framework/css/main.css" rel="stylesheet">
<link href="/framework/css/shadowbox.css" rel="stylesheet">
<script type="text/javascript" src="https://raw.githubusercontent.com/gabrielvol/frameworkGV/master/etc/js/shadowbox.js"></script>
<script type="text/javascript">
    Shadowbox.init({
        counterType: "skip",
        displayCounter: false
//        players:  ['html', 'iframe','img']
    });
</script>
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/framework/common/header.inc.php'); ?>    
    <div id="main" class="container" role="main">
        <ul class="set horizontal clearfix">
            <li><a href="/framework/img/img01.jpg" rel="shadowbox[galeria]"><img src="/framework/img/img01.jpg" alt="Shadowbox" class="displayBlock" /></a></li>
            <li><a href="/framework/img/img02.jpg" rel="shadowbox[galeria]"><img src="/framework/img/img02_.jpg" alt="Shadowbox" class="displayBlock" /></a></li>
            <li><a href="/framework/img/img01.jpg" rel="shadowbox[galeria]"><img src="/framework/img/img01.jpg" alt="Shadowbox" class="displayBlock" /></a></li>
            <li><a href="/framework/img/img02.jpg" rel="shadowbox[galeria]"><img src="/framework/img/img02_.jpg" alt="Shadowbox" class="displayBlock" /></a></li>
            <li><a href="/framework/video/video.swf" rel="shadowbox[galeria];width=720;height=540;player=iframe"><img src="/framework/img/img02_.jpg" alt="Shadowbox" class="displayBlock" /></a></li>
            <li><a href="/framework/video/video.mp4" rel="shadowbox[galeria];width=720;height=540;player=iframe"><img src="/framework/img/img02_.jpg" alt="Shadowbox" class="displayBlock" /></a></li>
            <li><a href="/framework/video/video.swf" rel="shadowbox[galeria];width=720;height=540;player=img"><img src="/framework/img/img02_.jpg" alt="Shadowbox" class="displayBlock" /></a></li>
            <li><a href="/framework/video/video.mp4" rel="shadowbox[galeria];width=720;height=540;player=img"><img src="/framework/img/img02_.jpg" alt="Shadowbox" class="displayBlock" /></a></li>
            <li><a href="/framework/video/video.swf" rel="shadowbox[galeria];width=720;height=540;player=html"><img src="/framework/img/img02_.jpg" alt="Shadowbox" class="displayBlock" /></a></li>
            <li><a href="/framework/video/video.mp4" rel="shadowbox[galeria];width=720;height=540;player=html"><img src="/framework/img/img02_.jpg" alt="Shadowbox" class="displayBlock" /></a></li>
            <li><a href="/framework/video/video.swf" rel="shadowbox[galeria];width=720;height=540;player=swf"><img src="/framework/img/img02_.jpg" alt="Shadowbox" class="displayBlock" /></a></li>
            <li><a href="/framework/video/video.mp4" rel="shadowbox[galeria];width=720;height=540;player=swf"><img src="/framework/img/img02_.jpg" alt="Shadowbox" class="displayBlock" /></a></li>
            <li><a href="/framework/video/video.swf" rel="shadowbox[galeria];width=720;height=540"><img src="/framework/img/img02_.jpg" alt="Shadowbox" class="displayBlock" /></a></li>
            <li><a href="/framework/video/video.mp4" rel="shadowbox[galeria];width=720;height=540"><img src="/framework/img/img02_.jpg" alt="Shadowbox" class="displayBlock" /></a></li>
        </ul>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/framework/common/footer.inc.php'); ?>
</body>
</html>