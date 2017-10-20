<?php
    $test = 1;
    $int = 1;
    $navSelected= 0;
    $title = "audio | GV";
    $mdesc = "";
    include($_SERVER['DOCUMENT_ROOT'] . '/framework/common/head.inc.php');
?>
<link href="/framework/css/main.css" rel="stylesheet">
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/framework/common/header.inc.php'); ?>
    <div id="main" class="flexContainer" role="main">
        <audio controls autoplay hidden loop="false">
            <source src="/clientes/anibal/audio/tantascosas.mp3" type="audio/mpeg">
        </audio>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/framework/common/footer.inc.php'); ?>
</body>
</html>
