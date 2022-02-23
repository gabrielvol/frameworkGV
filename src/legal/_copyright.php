<?php
    $dir_env = '/stage';
//    include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/common/gettext.languageCheck.inc.php');
    
    $page_int               = 1;   
    $nav_pageCurrent        = 'page_legal';
    $nav_pageCurrent_int    = 'page_copyright';
    
    $has_form               = 0;
    $has_lightbox           = 0; // REF [26]
    $has_slider             = 0;
//    $lang_en                = 1;
    
    include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/var/__main.var.inc.php');
    
    $page_url_full          = $url_copyright_full;
    
    $site_title      = "Licencia | ". $site_name_title;
//  $site_title_GB   = "Licence | ". $site_name_title;
    
    $site_desc       = $site_desc_global;
//  $site_desc_GB    = $site_desc_global_GB;
    
    $openGraph_title            = $site_title;
//    $openGraph_title_GB         = $site_title_GB;
    $openGraph_desc             = $openGraph_desc_global;
//    $openGraph_desc_GB          = $openGraph_desc_global_GB;
    $openGraph_url_img          = $openGraph_url_img_sq;
    $openGraph_url_img_width    = $openGraph_img_sq_width;
    $openGraph_url_img_height   = $openGraph_img_sq_height;
    $openGraph_siteName         = $openGraph_siteName_global;
    
    include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/common/head.inc.php');
//    include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/gettext/locale.inc.php');
//    include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/common/speller.inc.php');
?>
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/common/header.inc.php'); ?>
    <div id="main" <?php echo $classes_main; ?> role="main">
        <section class="container">
            <h1 class="black alignCenter">Licencia</h1>
            <p class="nota black">El contenido de este sitio web se encuentra bajo la siguiente licencia:</p>
            <p class="lic black alignCenter">Atribución-NoComercial-SinDerivadas 4.0 Internacional (CC BY-NC-ND 4.0)</p>
            <p class="hDos bold black">Usted es libre de:</p>
            <p class="black"><span class="bold">Compartir</span> — copiar y redistribuir el material en cualquier medio o formato.</p>
            <p class="nota black">La licenciante no puede revocar estas libertades en tanto usted siga los términos de la licencia</p>
            <p class="hDos bold black">Bajo los siguientes términos:</p>
            <ul>
                <li><span class="bold">Atribución</span> Usted debe dar crédito de manera adecuada, brindar un enlace a la licencia, e indicar si se han realizado cambios. Puede hacerlo en cualquier forma razonable, pero no de forma tal que sugiera que usted o su uso tienen el apoyo de la licenciante. </li>
                <li><span class="bold">NoComercial</span> Usted no puede hacer uso del material con propósitos comerciales. </li>
                <li><span class="bold">SinDerivadas</span> Si remezcla, transforma o crea a partir de el material, no podrá distribuir el material modificado.</li>
            </ul>
            <ul class="mtl ptl">
                <li><a href="https://creativecommons.org/licenses/by-nc-nd/4.0/deed.es#" class="nota black">Ver Resumen</a></li>
                <li><a href="https://creativecommons.org/licenses/by-nc-nd/4.0/legalcode" class="nota black">Ver Liencia</a></li>
            </ul>
        </section>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/common/footer.inc.php'); ?>
</body>
</html>
