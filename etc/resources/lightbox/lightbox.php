<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/common/header.inc.php'); ?>
    <div id="main" class="container" role="main">
        <ul class="horizontal clearfix">
            <li>
                <a href="<?php echo $dir_env; ?>/img/img01.jpg" data-lightbox="galeria" data-title="Espectadores nuevos."><img src="/img/img01.jpg" alt="Imagen" /></a>
            </li>
            <li>
                <a href="<?php echo $dir_env; ?>/img/img02.jpg" data-lightbox="galeria" data-title="Espectadores de un concierto de rock que miran."><img src="/img/img02_.jpg" alt="Imagen" /></a>
            </li>
            <li>
                <a href="<?php echo $dir_env; ?>/img/img03.jpg" data-lightbox="galeria" data-title="Espectadores de un concierto de rock que miran contentos el show de Marilyn Manson."><img src="/img/img03_.jpg" alt="Imagen" /></a>
            </li>
            <?php
                $files = scandir($_SERVER['DOCUMENT_ROOT'] . '/img/imageFolder/');
                
                foreach($files as $image) {
                    if($image !== '.' && $image !== '..' && $image !== '01.jpg'){
                        echo '<li>
                            <a href="<?php echo $dir_env; ?>/img/imageFolder/'.$image.'" data-lightbox="galeria" data-title="Espectadores de un concierto de rock que miran extasiados el show de Marilyn Manson."><img src="/img/imageFolder/'.$image.'" alt="Imagen" /></a>
                        </li>';
                    } 
                }
            ?>
        </ul>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/common/footer.inc.php'); ?>
</body>