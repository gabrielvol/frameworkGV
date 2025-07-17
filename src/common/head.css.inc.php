<?php
/* * NombreDeProyecto * ========================================================
   <head> .css [/src/common/head.css.inc.php]
   ========================================================================== */

/* // Descripcion -----------------------------------------------------------
 * Archivo de carga de hojas de estilo .css
 * Este archivo se carga en `[/src/common/head.inc.php]`
 * 
 * uikit
 * 
 * styles_main
 * 
 * alternate style sheets
 * 
 * datepicker.css
 * 
 * .css por página
 * 
*/

/* // REF [24]
<link href="<?php echo $dir_env; ?>/css/uikit.min.css" rel="stylesheet"> */


if(isset($gettext_idioma) && $gettext_idioma == 'zh_CN'): /* // REF [14a] Idioma Chino ZH, MingLiu font */ ?>
<link href="<?php echo $dir_env; ?>/css/styles_zh.css" rel="stylesheet">

<?php else: ?>
<link href="<?php echo $dir_env; ?>/css/styles_main.css" rel="stylesheet">

<?php endif;


/* Alternate StyleSheets
<link href="<?php echo $dir_env; ?>/css/styles_highContrast.css" rel="alternate stylesheet" title="High Contrast"> */


if($has_form): /* // REF [23] // REF [36] Form variables
<link href="<?php echo $dir_env; ?>/css/datepicker.css" rel="stylesheet"> */
endif;


if($nav_pageCurrent == 'page_index'): /*
<link href="<?php echo $dir_env; ?>/css/page_styles.css" rel="stylesheet"> */
endif;


if($page_int): /* // Internas
<link href="<?php echo $dir_env; ?>/css/page_styles.css" rel="stylesheet"> */
endif;


if($nav_pageCurrent_int == 'page_index_index'): /*
<link href="<?php echo $dir_env; ?>/css/page_styles.css" rel="stylesheet"> */
endif;


if($nav_pageCurrent_int == 'page_index_home'): /*
<link href="<?php echo $dir_env; ?>/css/page_styles.css" rel="stylesheet"> */
endif;


if($nav_pageCurrent == 'page_contacto'): /*
<link href="<?php echo $dir_env; ?>/css/page_styles.css" rel="stylesheet"> */
endif;


if($nav_pageCurrent == 'page_gracias'): /*
<link href="<?php echo $dir_env; ?>/css/page_styles.css" rel="stylesheet"> */
endif;


if($nav_pageCurrent == 'page_PAGINA'): /*
<link href="<?php echo $dir_env; ?>/css/page_styles.css" rel="stylesheet"> */
endif;


if($nav_pageCurrent_int == 'page_PAGINA_INT'): /*
<link href="<?php echo $dir_env; ?>/css/page_styles.css" rel="stylesheet"> */
endif;


if($nav_pageCurrent == 'page_PAGINA' || $nav_pageCurrent_int == 'page_PAGINA_INT'): /*
<link href="<?php echo $dir_env; ?>/css/page_styles.css" rel="stylesheet"> */
endif;


if($page_construccion): /*
<link href="<?php echo $dir_env; ?>/css/page_styles.css" rel="stylesheet"> */
endif; ?>