<?php /* // REF [24]
<link href="<?php echo $dir_env; ?>/css/uikit.min.css" rel="stylesheet">
*/ ?>
<?php if($gettext_idioma == 'zh_CN'): /* // REF [14a] Idioma Chino ZH, MingLiu font */ ?>
<link href="<?php echo $dir_env; ?>/css/styles_zh.css" rel="stylesheet">
<?php else: ?>
<link href="<?php echo $dir_env; ?>/css/styles.css" rel="stylesheet">
<?php endif; ?>

<?php /* Alternate StyleSheets
<link href="<?php echo $dir_env; ?>/css/styles_highContrast.css" rel="alternate stylesheet" title="High Contrast">
*/ ?>
<?php if($has_form == 1): /* // REF [23]
<link href="<?php echo $dir_env; ?>/css/datepicker.css" rel="stylesheet">
*/ ?>
<?php endif; if($nav_pageCurrent == 'page_index'): /*
<link href="<?php echo $dir_env; ?>/css/aaaaaa.css" rel="stylesheet">
*/ ?>
<?php endif; if($page_int == 1): /* // Internas
<link href="<?php echo $dir_env; ?>/css/aaaaaa.css" rel="stylesheet">
*/ ?>
<?php endif; if($nav_pageCurrent_int == 'page_home'): /*
<link href="<?php echo $dir_env; ?>/css/aaaaaa.css" rel="stylesheet">
*/ ?>
<?php endif; if($nav_pageCurrent_int == 'page_inicio'): /*
<link href="<?php echo $dir_env; ?>/css/aaaaaa.css" rel="stylesheet">
*/ ?>
<?php endif; if($nav_pageCurrent == 'page_contacto'): /*
<link href="<?php echo $dir_env; ?>/css/aaaaaa.css" rel="stylesheet">
*/ ?>
<?php endif; if($nav_pageCurrent == 'page_gracias'): /*
<link href="<?php echo $dir_env; ?>/css/aaaaaa.css" rel="stylesheet">
*/ ?>
<?php endif; if($nav_pageCurrent == 'page_PAGINA'): /*
<link href="<?php echo $dir_env; ?>/css/aaaaaa.css" rel="stylesheet">
*/ ?>
<?php endif; if($nav_pageCurrent_int == 'page_PAGINA_INT'): /*
<link href="<?php echo $dir_env; ?>/css/aaaaaa.css" rel="stylesheet">
*/ ?>
<?php endif; if($nav_pageCurrent == 'page_PAGINA' || $nav_pageCurrent_int == 'page_PAGINA_INT'): /*
<link href="<?php echo $dir_env; ?>/css/aaaaaa.css" rel="stylesheet">
*/ ?>
<?php endif; if($page_construccion == 1): /*
<link href="<?php echo $dir_env; ?>/css/aaaaaa.css" rel="stylesheet">
*/
endif; ?>