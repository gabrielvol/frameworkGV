<?php
    include($_SERVER['DOCUMENT_ROOT'] . '/framework/common/head.inc.php');
?>
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/framework/common/header.inc.php'); ?>    
    <div id="main" class="container" role="main">
        <button class="load_a">Uno</button>
        <button class="load_b">Dos</button>
        <button class="load_c">Tres</button>
        
        <div class="loadHere"></div>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/framework/common/footer.inc.php'); ?>
    
    <script type="text/javascript">
        $('.load_a').click(function() {
            $( "#loadHere" ).load( "/resources/load.html #projects li" );
            $( ".loadHere" ).load( "/framework/loadsource/uno.php p" );
        });
        $('.load_b').click(function() {
            $( ".loadHere" ).load( "/framework/loadsource/dos.php p" );
        });
        $('.load_c').click(function() {
            $( ".loadHere" ).load( "/framework/loadsource/tres.php p" );
        });
    </script>
</body>
</html>