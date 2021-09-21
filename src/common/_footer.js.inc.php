<?php
/*
<script src="<?php echo $url_entorno; ?>/js/smoothScroll.jQuery.js"></script>
*/
?>

<script src="<?php echo $url_entorno; ?>/js/_global.js"></script>

<?php
/*
<script src="<?php echo $url_entorno; ?>/js/_topper.js"></script>
<script src="<?php echo $url_entorno; ?>/js/_scrollSpy.js"></script>
*/
?>

<?php         if($nav_accordion_act == 1): // nav `[/var/act/nav.act.inc.php]` ?>
<script src="<?php echo $url_entorno; ?>/js/_nav_accordion.js"></script>

<?php endif; if($nav_drawer_act == 1): // nav `[/var/act/nav.act.inc.php]` ?>
<script src="<?php echo $url_entorno; ?>/js/_nav_drawer.js"></script>

<?php endif; if($page_int == 1): ?>
<script src="<?php echo $url_entorno; ?>/js/_int.js"></script>


<?php endif; if($nav_pageCurrent == 1):
/* // Home
<script src="<?php echo $url_entorno; ?>/js/aaaaaa.js"></script>
<script src="<?php echo $url_entorno; ?>/js/_aaaaaa.js"></script>
<script src="<?php echo $url_entorno; ?>/js/_index.js"></script>
*/
?>


<?php endif; if($nav_pageCurrent == 3):
/* // Contacto 
<script src="<?php echo $url_entorno; ?>/js/scrollKeep.js"></script>
<script src="<?php echo $url_entorno; ?>/js/_contacto.js"></script>
*/
?>


<?php endif; if($nav_pageCurrent == 000):
/* // SECTIONNAME
<script src="<?php echo $url_entorno; ?>/js/aaaaaa.js"></script>
<script src="<?php echo $url_entorno; ?>/js/_aaaaaa.js"></script>
*/
?>

<?php endif; if($nav_pageCurrent == 000 || $nav_pageCurrent == 000):
/* // SECTIONNAME / SECTIONNAME
<script src="<?php echo $url_entorno; ?>/js/aaaaaa.js"></script>
<script src="<?php echo $url_entorno; ?>/js/_aaaaaa.js"></script>
*/
?>

<?php endif; if($has_form == 1): ?>
<script src="<?php echo $url_entorno; ?>/js/scrollKeep.js"></script>
<script src="<?php echo $url_entorno; ?>/js/_form.js"></script>

<?php endif; if($has_lightbox == 1): ?>
<script src="<?php echo $url_entorno; ?>/js/lightbox.min.js"></script>
<script src="<?php echo $url_entorno; ?>/js/_lightbox.js"></script>

<?php endif; if($has_slider == 1): ?>
<script src="<?php echo $url_entorno; ?>/js/slick.js"></script>
<script src="<?php echo $url_entorno; ?>/js/_slick.js"></script>
<?php endif; ?>