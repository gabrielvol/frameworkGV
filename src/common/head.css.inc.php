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
<link href="<?php echo asset_versioned('/css/uikit.min.css', $dir_env); ?>" rel="stylesheet"> */


if(isset($gettext_lang) && $gettext_lang == 'zh_CN'): /* // REF [14a] Idioma Chino ZH, MingLiu font */ ?>
<link href="<?php echo asset_versioned('/css/styles_zh.css', $dir_env); ?>" rel="stylesheet">

<?php else: ?>
<link href="<?php echo asset_versioned('/css/styles_main.css', $dir_env); ?>" rel="stylesheet">

<?php endif;


/* Alternate StyleSheets
<link href="<?php echo asset_versioned('/css/styles_highContrast.css', $dir_env); ?>" rel="alternate stylesheet" title="High Contrast"> */


if($has_form): /* // REF [23] // REF [36] Form variables
<link href="<?php echo asset_versioned('/css/datepicker.css', $dir_env); ?>" rel="stylesheet"> */
endif;


if($nav_pageCurrent == 'page_index'): /*
<link href="<?php echo asset_versioned('/css/page_styles.css', $dir_env); ?>" rel="stylesheet"> */
endif;


if($page_int): /* // Internas
<link href="<?php echo asset_versioned('/css/page_styles.css', $dir_env); ?>" rel="stylesheet"> */
endif;


if($nav_pageCurrent_int == 'page_index_index'): /*
<link href="<?php echo asset_versioned('/css/page_styles.css', $dir_env); ?>" rel="stylesheet"> */
endif;


if($nav_pageCurrent_int == 'page_index_home'): /*
<link href="<?php echo asset_versioned('/css/page_styles.css', $dir_env); ?>" rel="stylesheet"> */
endif;


if($nav_pageCurrent == 'page_contacto'): /*
<link href="<?php echo asset_versioned('/css/page_styles.css', $dir_env); ?>" rel="stylesheet"> */
endif;


if($nav_pageCurrent == 'page_gracias'): /*
<link href="<?php echo asset_versioned('/css/page_styles.css', $dir_env); ?>" rel="stylesheet"> */
endif;


if($nav_pageCurrent == 'page_PAGINA'): /*
<link href="<?php echo asset_versioned('/css/page_styles.css', $dir_env); ?>" rel="stylesheet"> */
endif;


if($nav_pageCurrent_int == 'page_PAGINA_INT'): /*
<link href="<?php echo asset_versioned('/css/page_styles.css', $dir_env); ?>" rel="stylesheet"> */
endif;


if($nav_pageCurrent == 'page_PAGINA' || $nav_pageCurrent_int == 'page_PAGINA_INT'): /*
<link href="<?php echo asset_versioned('/css/page_styles.css', $dir_env); ?>" rel="stylesheet"> */
endif;


if($page_construccion): /*
<link href="<?php echo asset_versioned('/css/page_styles.css', $dir_env); ?>" rel="stylesheet"> */
endif; ?>