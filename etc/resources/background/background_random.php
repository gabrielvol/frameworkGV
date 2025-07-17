<?php
    $bg_file = array("bg01.jpg", "bg02.jpg");
    
    shuffle($bg_file);
?>

<style type="text/css">
    #main{
        background-image: url('#{$dir_env}/img/<?php echo $bg_file[0]; ?>');
    }
</style>

</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/common/header.inc.php'); ?>    
    <div id="main" class="container" role="main">

    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/common/footer.inc.php'); ?>
</body>
</html>