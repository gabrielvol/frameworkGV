<?php
    $dir_env = '/stage';
//    include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/common/gettext.languageCheck.inc.php');
//    $page_var               = $_GET['page_var']; 
    
    $page_int               = 1;   
    $nav_pageCurrent        = 'page_legal';
    $nav_pageCurrent_int    = 'page_legal_home';
    
/* // Si se activa `$nav_pageCurrent_id`
   1. Hay que asignar los títulos en `[/var/page.legal.var.inc.php]` */
//    $nav_pageCurrent_id     = 'page_legal_ID';

/* 2. Las siguientes variables se declaran en `[/var/page.legal.var.inc.php]` */      
    $has_lightbox           = 0; /* // REF [26] */
    $has_pop_video          = 0;
    $has_scrolling          = 1;
    $has_slider             = 0;
    $page_noTrack           = (!empty($dir_env)) ? 1 : 0;
//    $has_CUSTOMVARIABLE     = ($page_CUSTOMVARIABLE) ? 1 : 0;
//    $has_CUSTOMVARIABLE     = 0;
//    $lang_GB                = 1;
    
    $page_construccion      = 0;
    /* // REF [53*] Page redirect
     * Si se activa `$page_redirect` hay que setear la variable `$page_redirect_url`
     */
    $page_redirect          = 0;    
    $has_form               = 0; /* // REF [36] Form variables */ 
//    $has_CUSTOMVARIABLE     = ($page_CUSTOMVARIABLE) ? 1 : 0;
//    $has_CUSTOMVARIABLE     = 0;
//    $lang_GB                = 1; 

/* 3. Se incluye el archivo de variables */
//    include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/var/page.legal.var.inc.php');
    
    $page_header_classes = '';
    $page_main_classes = '';
    
    include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/var/__main.var.inc.php');

/* // Form identifier Global ------------------------------------------------ *
   La variable $form_id puede ser declarada de tres formas:
   
   a) De manera global en `[/src/var/form.var.inc.php]` para todo el sitio
   b) En el archivo `[/src/var/page.PAGEINT.var.inc.php]` para un grupo de paginas
   c) En la pagina donde va a ser usado
*/
// $form_id = 'formXX'; /* // REF [36*] Form variables */
// $form_id_spelled = 'Contactanos';
        
    if($page_redirect) {
        /* // REF [53*] Page redirect */
        $page_redirect_url = $url_to_redirect_full; 
    } else {
        $page_url_full = $url_copyright_full;
    }

/* 4. Se comenta la siguiente variable `$page_title` */
    $page_title             = $page_title_home_copyright . " | " . $site_name_title;
    
/* 5. La nueva variable `$page_title` se construye de la siguiente forma:
   $page_title_home_copyright se declara en `[/var/meta.titlesDesc.var.inc.php]`
   $page_title_id se declara en `[/var/page.legal.var.inc.php]` */
//   $page_title             = $page_title_id . " | " . $page_title_home_copyright . " | " . $site_name_title;
    $page_desc              = $page_desc_global;
     
    include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/var/meta.openGraph.var.inc.php');     
    include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/common/head.inc.php');
?>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/common/header.inc.php'); ?>
    <div id="main" <?php echo $classes_main; ?> role="main">
        <?php if($page_redirect): include ($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/common/page.redirect.p.inc.php'); else: /* // REF [53*] Page redirect */ ?>
        
        <section class="container">
            <h1 class="black txAlignCenter">Licencia</h1>
            <p class="nota black">El contenido de este sitio web se encuentra bajo la siguiente licencia:</p>
            <p class="lic black txAlignCenter">Atribución-NoComercial-SinDerivadas 4.0 Internacional (CC BY-NC-ND 4.0)</p>
            <p class="heading2 txBold black">Usted es libre de:</p>
            <p class="black"><span class="txBold">Compartir</span> — copiar y redistribuir el material en cualquier medio o formato.</p>
            <p class="nota black">La licenciante no puede revocar estas libertades en tanto usted siga los términos de la licencia</p>
            <p class="heading2 txBold black">Bajo los siguientes términos:</p>
            <ul>
                <li><span class="txBold">Atribución</span> Usted debe dar crédito de manera adecuada, brindar un enlace a la licencia, e indicar si se han realizado cambios. Puede hacerlo en cualquier forma razonable, pero no de forma tal que sugiera que usted o su uso tienen el apoyo de la licenciante. </li>
                <li><span class="txBold">NoComercial</span> Usted no puede hacer uso del material con propósitos comerciales. </li>
                <li><span class="txBold">SinDerivadas</span> Si remezcla, transforma o crea a partir de el material, no podrá distribuir el material modificado.</li>
            </ul>
            <ul class="mtl ptl">
                <li><a href="https://creativecommons.org/licenses/by-nc-nd/4.0/deed.es#" class="nota black">Ver Resumen</a></li>
                <li><a href="https://creativecommons.org/licenses/by-nc-nd/4.0/legalcode" class="nota black">Ver Liencia</a></li>
            </ul>
        </section>
        
        <?php endif; /* Cierra el condicional // REF [53*] Page redirect */ ?>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/common/footer.inc.php'); ?>
</body>
</html>
