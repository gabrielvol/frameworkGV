<?php /*
<script src="<?php echo $url_dir; ?>/js/smoothScroll.jQuery.js"></script>
*/ ?>

<script src="<?php echo $url_dir; ?>/js/_global.js"></script>

<?php /*
<script src="<?php echo $url_dir; ?>/js/_topper.js"></script>
<script src="<?php echo $url_dir; ?>/js/_scrollSpy.js"></script>
*/ ?>

<?php         if($nav_accordion_act == 1): // nav `[/var/nav.act.inc.php]` ?>
<script src="<?php echo $url_dir; ?>/js/_nav_accordion.js"></script>

<?php endif; if($nav_drawer_act == 1): // nav `[/var/nav.act.inc.php]` ?>
<script src="<?php echo $url_dir; ?>/js/_nav_drawer.js"></script>

<?php /*
<script src="<?php echo $url_dir; ?>/js/slick.js"></script>
<script src="<?php echo $url_dir; ?>/js/_slick.js"></script>
*/ ?>


<?php endif; if($nav_pageCurrent == 1):
/* // Home
<script src="<?php echo $url_dir; ?>/js/aaaaaa.js"></script>
<script src="<?php echo $url_dir; ?>/js/_aaaaaa.js"></script>
<script src="<?php echo $url_dir; ?>/js/_index.js"></script>
*/
?>


<?php endif; if($nav_pageCurrent == 000):
/* // SECTIONNAME
<script src="<?php echo $url_dir; ?>/js/aaaaaa.js"></script>
<script src="<?php echo $url_dir; ?>/js/_aaaaaa.js"></script>
*/
?>


<?php endif; if($nav_pageCurrent == 000):
/* // Contacto 
<script src="<?php echo $url_dir; ?>/js/scrollKeep.js"></script>
<script src="<?php echo $url_dir; ?>/js/_contacto.js"></script>
*/
?>

<?php endif; if($nav_pageCurrent == 000 || $nav_pageCurrent == 000):
/* // SECTIONNAME / SECTIONNAME
<script src="<?php echo $url_dir; ?>/js/aaaaaa.js"></script>
<script src="<?php echo $url_dir; ?>/js/_aaaaaa.js"></script>
*/
?>

<?php endif; if($section_hasForm == 1): ?>
    <script src="<?php echo $url_dir; ?>/js/scrollKeep.js"></script>
    <script src="<?php echo $url_dir; ?>/js/_form.js"></script>

<?php endif; if($load_lightbox == 1): ?>
    <script src="<?php echo $url_dir; ?>/js/lightbox.min.js"></script>
    <script src="<?php echo $url_dir; ?>/js/_lightbox.js"></script>
<?php endif; ?>