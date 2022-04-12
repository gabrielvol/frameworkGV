<?php
    $dir_env = '/stage';
//    include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/gettext/languageCheck.inc.php');
    
    $page_int               = 1; 
    $nav_pageCurrent        = 'page_gracias';
    
//    $has-CUSTOMVARIABLE     = 1;
    
    include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/var/__main.var.inc.php');
    
    $page_url_full          = $url_gracias_full;
    
    $page_title             = "Gracias | ". $site_name_title;
//    $page_title_GB          = "Thank You | ". $site_name_title_GB;
//    $page_title_XX          = "Thank You | ". $site_name_title_XX;
    
    $page_desc              = $site_desc_global;
//    $page_desc_GB           = $site_desc_global_GB;
//    $page_desc_XX           = $site_desc_global_XX;
     
    include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/var/meta.openGraph.var.inc.php');   
    include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/common/head.inc.php');
//    include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/gettext/locale.inc.php');
//    include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/common/speller.inc.php');
?>
</head>
<body>
    <?php
        include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/common/header.inc.php');
        include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/common/form.main.send.inc.php');
    ?>
    <div id="main" <?php echo $classes_main; ?> role="main">
        <h1 class="txAlignCenter">Gracias</h1>
        <p class="txAlignCenter"><?php echo $form_status_ok_globalB ?></p>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/common/footer.inc.php'); ?>
</body>
</html>
