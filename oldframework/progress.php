<?php
    $test = 1;
    $int = 1;
    $navSelected= 0;
    $title = "HTML5 Progress Bar | GV";
    $mdesc = "";
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/head.inc.php');
?>
<link href="/nuevo/odlframework/css/main.css" rel="stylesheet">
<link href="/nuevo/odlframework/css/progress.css" rel="stylesheet">
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/header.inc.php'); ?>    
    <div id="main" class="container progress" role="main">
        <progress max="100" value="27"><span class="">27</span>%</progress>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/footer.inc.php'); ?>
</body>
</html>