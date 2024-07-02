<?php
    $dir_env = '/stage';
//    include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/gettext/languageCheck.inc.php');
//    $page_var               = $_GET['page_var'];
    
    $page_int      = 1;
    $nav_pageCurrent        = '';
    $nav_pageCurrent_int    = '';
// Si se activa `$nav_pageCurrent_id` hay que asignar los títulos en `/var/page.PAGEINT.var.inc.php`
//    $nav_pageCurrent_id     = 'page_PAGEINT_ID';
    
    $page_construccion      = 0;
    $page_redirect          = 1;
    
    $has_form               = 0; // REF [36]
    $has_lightbox           = 0; // REF [26]
    $has_pop_video          = 0;
    $has_scrolling          = 0;
    $has_slider             = 0;
//    $has-CUSTOMVARIABLE     = 0;
//    $lang_GB                = 1;
    
    
    include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/var/__main.var.inc.php');
    
    $page_url_full          = $url_PAGEINT_full;    

    $page_title             = $page_title_PAGEINT_redirect . " | " . $site_name_title;   
    $page_desc              = $page_desc_global;
     
    include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/var/meta.openGraph.var.inc.php');
    include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/common/head.inc.php');
?>

    <meta http-equiv="refresh" content="0; url=https_www_redirect_com">
    <script type="text/javascript">
        window.location.href = "https_www_redirect_com"
    </script>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/common/header.inc.php'); ?>
    <div id="main" <?php echo $classes_main; ?> role="main">
        <p>Si la página no se redirige automaticamente puede hacer clic en <a href="https_www_redirect_com">este vínculo</a>.</p>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/common/footer.inc.php'); ?>
</body>
</html>
