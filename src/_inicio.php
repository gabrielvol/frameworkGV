<?php
    $dir_env = '/stage';
//    include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/gettext/languageCheck.inc.php');
    $page_var               = $_GET['page_var']; 
    
    $nav_pageCurrent        = 'page_index';
    $nav_pageCurrent_int    = 'page_inicio';
    
    include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/var/index.var.inc.php');    
    include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/var/__main.var.inc.php');
    
    $page_url_full          = $url_inicio_full;
    
    $page_title             = $site_name_full;    
    $page_desc              = $page_desc_global;
     
    include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/var/meta.openGraph.var.inc.php');
    include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/common/head.inc.php');
//    include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/gettext/locale.inc.php');
//    include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/common/speller.inc.php');
?>
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/common/header.inc.php'); ?>
    <div id="main" <?php echo $classes_main; ?> role="main">  
        <?php include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/sections/_all.inc.php'); ?>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/common/footer.inc.php'); ?>
</body>
</html>
