<?php
    if (!isset($_SESSION)) { session_start(); }

    if(isset($_POST['contrasena']) && $_POST['contrasena'] == 'contrasenamuydificil'){
        $_SESSION['login']='Y';
        header("Location: index.php");	
        
    } else if(isset($_POST['contrasena']) && $_POST['contrasena'] != 'contrasenamuydificil'){
        header("Location: login.php?error");	
    }
    
        $dir_env = '';

        $page_int               = 1;
        $nav_pageCurrent        = 'page_PAGEINT';
        $nav_pageCurrent_int    = 'page_PAGEINT_home';
    //    $nav_pageCurrent_id     = 'page_PAGEINT_id';

        $page_construccion      = 0;
        $has_form               = 0;
        $has_lightbox           = 0; // REF [26]
        $has_slider             = 0;
    //    $has-CUSTOMVARIABLE     = 1;
    //    $lang_en                = 1;

        include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/var/__main.var.inc.php');

        $page_url_full          = $url_PAGEINT_full;

        $site_title             = "PaginaInterna | ". $site_name_title;
    //    $site_title_GB          = "SinTraduccion | ". $site_name_title;

        $site_desc              = $site_desc_global;
    //    $site_desc_GB           = $site_desc_global_GB;

        include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/var/meta.openGraph.var.inc.php');     
        include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/common/head.inc.php');
?>
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/common/header.inc.php'); ?>
    <div id="main" class="page_int page_PAGEINT" role="main">
        <section>
            <form class="mha" action="login.php" method="post">            
                <label for="password">
                    <span class="labelName"><?php echo _('Contraseña'); ?></span>
                    <input type="password" name="contrasena" id="contrasena" class="<?php if(isset($_GET['error'])){ echo 'errorInput'; }?>">  
                    <span class="errorMsg <?php if(isset($_GET['error'])){ echo 'displayBlock'; } ?>">Contraseña incorrecta</span>                         
                </label>
                <input type="submit" value="<?php echo _('Ingresar'); ?>">
            </form>
        </section>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/common/footer.inc.php'); ?>
</body>
</html>
