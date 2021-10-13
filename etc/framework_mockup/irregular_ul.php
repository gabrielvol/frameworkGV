<?php
    $page_test = 1;
    $page_int = 1;
    
    $site_title = "Irregular Gallery | GV";
    $site_desc = "";
    
    $nav_pageCurrent = 0;
    
    include($_SERVER['DOCUMENT_ROOT'] . '/framework/common/head.inc.php');
?>
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/framework/common/header.inc.php'); ?>
    <div id="main" class="container" role="main">
        
        <ul class="irregular_ul unstyled displayFlex mha">
            <li class="pRel borderBox hoverGrowS">
                <a href="<?php echo $url_entorno; ?>/img/img_01.jpg" data-lightbox="gallery" data-title="irregular" class="pAbs displayBlock">
                    <img src="<?php echo $url_entorno; ?>/img/img_01.jpg" alt="" class="displayBlock">
                </a>
            </li>
        </ul>
        
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/framework/common/footer.inc.php'); ?>
</html>