<?php if($has_vimeo == 1): ?>
<script src="https://player.vimeo.com/api/player.js"></script>
<?php endif; ?>

<script src="<?php echo $dir_env; ?>/js/_global.js"></script>
    
<?php if($nav_accordion_act == 1): // nav `[/var/act/nav.act.inc.php]` ?>
<script src="<?php echo $dir_env; ?>/js/_nav_accordion.js"></script>

<?php endif; if($nav_drawer_act == 1): // nav `[/var/act/nav.act.inc.php]` ?>
<script src="<?php echo $dir_env; ?>/js/_nav_drawer.js"></script>

<?php endif; if($nav_pageCurrent == 'page_index'): /*
<script src="<?php echo $dir_env; ?>/js/aaaaaa.js"></script>
<script src="<?php echo $dir_env; ?>/js/_aaaaaa.js"></script>
<script src="<?php echo $dir_env; ?>/js/_index.js"></script>
*/ ?>

<?php endif; if($page_int == 1): /* // Internas
<script src="<?php echo $dir_env; ?>/js/aaaaaa.js"></script>
<script src="<?php echo $dir_env; ?>/js/_aaaaaa.js"></script>
<script src="<?php echo $dir_env; ?>/js/_int.js"></script>
*/ ?>

<?php endif; if($nav_pageCurrent_int == 'page_home'): /*
<script src="<?php echo $dir_env; ?>/js/aaaaaa.js"></script>
<script src="<?php echo $dir_env; ?>/js/_aaaaaa.js"></script>
<script src="<?php echo $dir_env; ?>/js/_home.js"></script>
*/ ?>

<?php endif; if($nav_pageCurrent_int == 'page_inicio'): /*
<script src="<?php echo $dir_env; ?>/js/aaaaaa.js"></script>
<script src="<?php echo $dir_env; ?>/js/_aaaaaa.js"></script>
<script src="<?php echo $dir_env; ?>/js/_inicio.js"></script>
*/ ?>

<?php endif; if($nav_pageCurrent == 'page_contacto'): /*
<script src="<?php echo $dir_env; ?>/js/_aaaaaa.js"></script>
<script src="<?php echo $dir_env; ?>/js/_contacto.js"></script>
*/ ?>

<?php endif; if($nav_pageCurrent == 'page_gracias'): /*
<script src="<?php echo $dir_env; ?>/js/aaaaaa.js"></script>
<script src="<?php echo $dir_env; ?>/js/_aaaaaa.js"></script>
<script src="<?php echo $dir_env; ?>/js/_gracias.js"></script>
*/ ?>

<?php endif; if($nav_pageCurrent == 'page_PAGINA'): /*
<script src="<?php echo $dir_env; ?>/js/aaaaaa.js"></script>
<script src="<?php echo $dir_env; ?>/js/_aaaaaa.js"></script>
*/ ?>

<?php endif; if($nav_pageCurrent_int == 'page_PAGINA_INT'): /*
<script src="<?php echo $dir_env; ?>/js/aaaaaa.js"></script>
<script src="<?php echo $dir_env; ?>/js/_aaaaaa.js"></script>
*/ ?>

<?php endif; if($nav_pageCurrent == 'page_PAGINA' || $nav_pageCurrent_int == 'page_PAGINA_INT'): /*
<script src="<?php echo $dir_env; ?>/js/aaaaaa.js"></script>
<script src="<?php echo $dir_env; ?>/js/_aaaaaa.js"></script>
*/ ?>

<?php endif; if($page_construccion == 1): /*
<script src="<?php echo $dir_env; ?>/js/aaaaaa.js"></script>
<script src="<?php echo $dir_env; ?>/js/_aaaaaa.js"></script>
<script src="<?php echo $dir_env; ?>/js/_construccion.js"></script>
*/ ?>

<?php endif; if($has_form == 1): ?>
<script src="<?php echo $dir_env; ?>/js/scrollKeep.js"></script><?php /* // REF [25] */ ?>
<?php /* <script src="<?php echo $dir_env; ?>/js/ui-datepicker.jQuery.js"></script> REF [31] */ ?>
<script src="<?php echo $dir_env; ?>/js/_form.js"></script>

<?php endif; if($has_lightbox == 1): /* // REF [26] */ ?>
<script src="<?php echo $dir_env; ?>/js/lightbox.min.js"></script>
<script src="<?php echo $dir_env; ?>/js/_lightbox.js"></script>

<?php endif; if($has_slider == 1): ?>
<script src="<?php echo $dir_env; ?>/js/slick.js"></script>
<script src="<?php echo $dir_env; ?>/js/_slick.js"></script>

<?php endif; if($has_pop_video == 1): ?>
<script src="<?php echo $dir_env; ?>/js/_pop.video.js"></script>
<?php endif; ?>