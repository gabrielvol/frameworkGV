
<?php if($gettext_idioma == 'zh_CN'): /* // REF [14] */ ?>
<link href="<?php echo $url_entorno; ?>/css/styles_zh.css" rel="stylesheet">
<?php else: ?>
<link href="<?php echo $url_entorno; ?>/css/styles.css" rel="stylesheet">
<?php endif; ?>

<?php
/* // REF [24]
<link href="<?php echo $url_entorno; ?>/css/uikit.min.css" rel="stylesheet">
*/
?>

<?php if($nav_pageCurrent == 'page_index'): /*
<link href="<?php echo $url_entorno; ?>/js/aaaaaa.css" rel="stylesheet">
*/
?>

<?php endif; if($page_int == 1): /* // Internas
<link href="<?php echo $url_entorno; ?>/js/aaaaaa.css" rel="stylesheet">
*/
?>

<?php endif; if($nav_pageCurrent_int == 'page_home'): /*
<link href="<?php echo $url_entorno; ?>/js/aaaaaa.css" rel="stylesheet">
*/
?>


<?php endif; if($nav_pageCurrent_int == 'page_inicio'): /*
<link href="<?php echo $url_entorno; ?>/js/aaaaaa.css" rel="stylesheet">
*/
?>


<?php endif; if($nav_pageCurrent == 'page_contacto'): /* // REF [23]
<link href="<?php echo $url_entorno; ?>/css/datepicker.css" rel="stylesheet">
<link href="<?php echo $url_entorno; ?>/js/aaaaaa.css" rel="stylesheet">
*/
?>


<?php endif; if($nav_pageCurrent == 'page_gracias'): /*
<link href="<?php echo $url_entorno; ?>/js/aaaaaa.css" rel="stylesheet">
*/
?>


<?php endif; if($nav_pageCurrent == 'page-PAGINA'): /*
<link href="<?php echo $url_entorno; ?>/js/aaaaaa.css" rel="stylesheet">
*/
?>


<?php endif; if($nav_pageCurrent_int == 'page-PAGINA_INT'): /*
<link href="<?php echo $url_entorno; ?>/js/aaaaaa.css" rel="stylesheet">
*/
?>

<?php endif; if($nav_pageCurrent == 'page-PAGINA' || $nav_pageCurrent_int == 'page-PAGINA_INT'): /*
<link href="<?php echo $url_entorno; ?>/js/aaaaaa.css" rel="stylesheet">
*/
?>

<?php endif; if($page_construccion == 1): /*
<link href="<?php echo $url_entorno; ?>/js/aaaaaa.css" rel="stylesheet">
*/
endif; ?>