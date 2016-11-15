<?php
    $test = 1;
    $int = 1;
    $navSelected= 0;
    $title = "LightBox | GV";
    $mdesc = "";
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/head.inc.php');
?>
<link href="/nuevo/oldframework/css/main.css" rel="stylesheet">
<link href="/nuevo/oldframework/css/lightbox.css" rel="stylesheet">
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/header.inc.php'); ?>
    <div id="main" class="container" role="main">
        <ul class="horizontal clearfix">
            <li>
                <a href="/nuevo/oldframework/img/img01.jpg" data-lightbox="galeria" data-title="Espectadores nuevos"><img src="/nuevo/oldframework/img/img01.jpg" alt="Imagen" /></a>
            </li>
            <li>
                <a href="/nuevo/oldframework/img/img02.jpg" data-lightbox="galeria" data-title="Espectadores de un concierto de rock que miran"><img src="/nuevo/oldframework/img/img02_.jpg" alt="Imagen" /></a>
            </li>
            <li>
                <a href="/nuevo/oldframework/img/img03.jpg" data-lightbox="galeria" data-title="Espectadores de un concierto de rock que miran extasiados el show de Marilyn Manson"><img src="/nuevo/oldframework/img/img03_.jpg" alt="Imagen" /></a>
            </li>
            <?php
                $files = scandir($_SERVER['DOCUMENT_ROOT'] . '/img/imageFolder/');
                foreach($files as $image) {
                    if($image !== '.' && $image !== '..' && $image !== '01.jpg'){
                        echo '<li>
                            <a href="/nuevo/oldframework/img/imageFolder/'.$image.'" data-lightbox="galeria" data-title="Espectadores de un concierto de rock que miran extasiados el show de Marilyn Manson"><img src="/nuevo/oldframework/img/imageFolder/'.$image.'" alt="Imagen" /></a>
                        </li>';
                    }
                }
            ?>
        </ul>
    </div>
    <script type="text/javascript" src="/nuevo/etc/js/lightbox.min.js"></script>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/footer.inc.php'); ?>
    <script type="text/javascript">
        lightbox.option({
            'resizeDuration': 1000,
            'wrapAround': true
        })
    </script>
</body>
</html>
