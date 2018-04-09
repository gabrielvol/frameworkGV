<?php
    $test = 1;
    $int = 1;
    $navSelected= 0;
    $title = "Slick | GV";
    $mdesc = "";
    include($_SERVER['DOCUMENT_ROOT'] . '/framework/common/head.inc.php');
?>
<link href="/framework/css/main.css" rel="stylesheet">
<link href="/framework/css/slick.css" rel="stylesheet">
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/framework/common/header.inc.php'); ?>
    <div id="main" class="container" role="main">
        <ul class="slick mask horizontal clearfix">
            <li><img data-lazy="/framework/img/img_slide01.png" alt="" aria-hidden="true"></li>
            <li><img data-lazy="/framework/img/img_slide02.png" alt="" aria-hidden="true"></li>
            <li><img data-lazy="/framework/img/img_slide03.png" alt="" aria-hidden="true"></li>
        </ul>
        
        <ul class="slick mask horizontal clearfix">
            <li><img src="/framework/img/img_slide01.png" alt="" aria-hidden="true"></li>
            <li><img src="/framework/img/img_slide02.png" alt="" aria-hidden="true"></li>
            <li><img src="/framework/img/img_slide03.png" alt="" aria-hidden="true"></li>
        </ul>
        
        <?php
            $foto01 = '11';
            $foto02 = '12';
            include($_SERVER['DOCUMENT_ROOT'] . '/clientes/aqualiceweb/common/slick.fotos.inc.php');
        ?>
        <ul class="slick mask horizontal clearfix">
            <?php if(isset($foto01)): ?>
            <li><img src="/clientes/aqualiceweb/img/sliderAplicaciones/img_slide<?php echo $foto01; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($foto02)): ?>
            <li><img src="/clientes/aqualiceweb/img/sliderAplicaciones/img_slide<?php echo $foto02; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; if(isset($foto03)): ?>
            <li><img src="/clientes/aqualiceweb/img/sliderAplicaciones/img_slide<?php echo $foto03; ?>.jpg" alt="" aria-hidden="true" class="displayBlock fullWidth"></li>
            <?php endif; ?>
        </ul>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/framework/common/footer.inc.php'); ?>
    <script src="/js/slick.js" type="text/javascript"></script>
</html>