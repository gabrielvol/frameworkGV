<?php
    $test = 1;
    $int = 1;
    $navSelected= 0;
    $title = "audio | GV";
    $mdesc = "";
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/head.inc.php');
?>
<link href="/nuevo/oldframework/css/main.css" rel="stylesheet">
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/header.inc.php'); ?>
    <div id="main" class="flexContainer" role="main">
        <audio controls autoplay hidden loop="false">
            <source src="/clientes/anibal/audio/tantascosas.mp3" type="audio/mpeg">
        </audio>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/footer.inc.php'); ?>
</body>
</html>
