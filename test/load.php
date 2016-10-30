<?php
    $snippets = 1;
    $int = 1;
    $navSelected= 0;
    $title = "Load | GV";
    $mdesc = "";
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/head.inc.php');
?>
<link href="/nuevo/_snippets/css/main.css" rel="stylesheet">
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/header.inc.php'); ?>    
    <div id="main" class="container" role="main">
        <a href="javascript:void(0)" class="unoLoader">Uno</a>
        <a href="javascript:void(0)" class="dosLoader">Dos</a>
        <a href="javascript:void(0)" class="tresLoader">Tres</a>
        <div class="loadHere"></div>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/footer.inc.php'); ?>
    <script type="text/javascript">
        $('.unoLoader').click(function() {
//            $( "#loadHere" ).load( "/resources/load.html #projects li" );
            $( ".loadHere" ).load( "/nuevo/loadsource/uno.php p" );
        });
        $('.dosLoader').click(function() {
            $( ".loadHere" ).load( "/nuevo/loadsource/dos.php p" );
        });
        $('.tresLoader').click(function() {
            $( ".loadHere" ).load( "/nuevo/loadsource/tres.php p" );
        });
    </script>
</body>
</html>