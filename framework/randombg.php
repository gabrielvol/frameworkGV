<?php
    $test = 1;
    $int = 1;
    $navSelected= 0;
    $title = "Random Full Background | GV";
    $mdesc = "";
    include($_SERVER['DOCUMENT_ROOT'] . '/framework/common/head.inc.php');
?>
<link href="/framework/css/main.css" rel="stylesheet">
<link href="/framework/css/randombg.css" rel="stylesheet">
<?php
    $ext = array("bg01.jpg", "bg02.jpg");
    shuffle($ext); //Give the array a shuffle
?>
<style type="text/css">
    #main{background-image:url('/framework/img/perfect/<?php echo $ext[0];?>')}
</style>

</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/framework/common/header.inc.php'); ?>    
    <div id="main" class="container" role="main">

    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/framework/common/footer.inc.php'); ?>
</body>
</html>