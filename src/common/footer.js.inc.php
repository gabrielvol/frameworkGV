<?php
/* * NombreDeProyecto * ========================================================
   <footer> .js [/src/common/footer.js.inc.php]
   ========================================================================== */

/* // Descripcion -----------------------------------------------------------
 * Archivo de carga de scripts .js
 * Este archivo se carga en `[/src/common/footer.inc.php]`
 * 
 * _global.js
 * 
 * _nav_.js
 * 
 * _scrolling.js
 * 
 * .js por página
 * 
 * scrollKeep.js
 * 
 * _forms.js
 * 
 * _captcha.js
 * 
 * _lightbox.js
 * 
 * _slick.js
 * 
 * pop.video.js
 * 
 * SEO scripts
 * 
*/
       
/* if($has_vimeo): ?>
<script src="https://player.vimeo.com/api/player.js"></script>
<?php endif; */

if($dir_env): /* // REF [48] Dev window width */ ?>
<script src="<?php echo $dir_env; ?>/js/_global.stage.js"></script>

<?php elseif(empty($dir_env)): ?>
<script src="<?php echo $dir_env; ?>/js/_global.produ.js"></script>

<?php endif; ?>


<script src="<?php echo $dir_env; ?>/js/_global.all.js"></script>


<?php if($nav_accordion_act): /* nav `[/var/act/nav.act.inc.php]` */ ?>
<script src="<?php echo $dir_env; ?>/js/_nav_accordion.js"></script>

<?php endif; if($nav_drawer_act): /* // REF [06] nav `[/var/act/nav.act.inc.php]` */ ?>
<script src="<?php echo $dir_env; ?>/js/_nav_drawer.js"></script>
    
<?php endif;


if($has_scrolling): ?>
<script src="<?php echo $dir_env; ?>/js/_scrolling.js"></script>

<?php endif;


if($nav_pageCurrent == 'page_index'): /*
<script src="<?php echo $dir_env; ?>/js/page_script.js">"></script>
<script src="<?php echo $dir_env; ?>/js/_page_script.js">"></script>
<script src="<?php echo $dir_env; ?>/js/_page_index.js"></script>
*/ ?>

<?php endif; if($page_int): /* // Internas
<script src="<?php echo $dir_env; ?>/js/page_script.js">"></script>
<script src="<?php echo $dir_env; ?>/js/_page_script.js">"></script>
<script src="<?php echo $dir_env; ?>/js/_page_int.js"></script>
*/ ?>

<?php endif; if($nav_pageCurrent_int == 'page_index_index'): /*
<script src="<?php echo $dir_env; ?>/js/page_script.js">"></script>
<script src="<?php echo $dir_env; ?>/js/_page_script.js">"></script>
<script src="<?php echo $dir_env; ?>/js/_page_home.js"></script>
*/ ?>

<?php endif; if($nav_pageCurrent_int == 'page_index_home'): /*
<script src="<?php echo $dir_env; ?>/js/page_script.js">"></script>
<script src="<?php echo $dir_env; ?>/js/_page_script.js">"></script>
<script src="<?php echo $dir_env; ?>/js/_page_inicio.js"></script>
*/ ?>

<?php endif; if($nav_pageCurrent == 'page_contacto'): /*
<script src="<?php echo $dir_env; ?>/js/_page_script.js">"></script>
<script src="<?php echo $dir_env; ?>/js/_contacto.js"></script>
*/ ?>

<?php endif; if($nav_pageCurrent == 'page_gracias'): /*
<script src="<?php echo $dir_env; ?>/js/page_script.js">"></script>
<script src="<?php echo $dir_env; ?>/js/_page_script.js">"></script>
<script src="<?php echo $dir_env; ?>/js/_page_gracias.js"></script>
*/ ?>

<?php endif; if($nav_pageCurrent == 'page_PAGINA'): /*
<script src="<?php echo $dir_env; ?>/js/page_script.js">"></script>
<script src="<?php echo $dir_env; ?>/js/_page_script.js">"></script>
*/ ?>

<?php endif; if($nav_pageCurrent_int == 'page_PAGINA_INT'): /*
<script src="<?php echo $dir_env; ?>/js/page_script.js">"></script>
<script src="<?php echo $dir_env; ?>/js/_page_script.js">"></script>
*/ ?>

<?php endif; if($nav_pageCurrent == 'page_PAGINA' || $nav_pageCurrent_int == 'page_PAGINA_INT'): /*
<script src="<?php echo $dir_env; ?>/js/page_script.js">"></script>
<script src="<?php echo $dir_env; ?>/js/_page_script.js">"></script>
*/ ?>

<?php endif; if($page_construccion): /*
<script src="<?php echo $dir_env; ?>/js/page_script.js">"></script>
<script src="<?php echo $dir_env; ?>/js/_page_script.js">"></script>
<script src="<?php echo $dir_env; ?>/js/_page_construccion.js"></script>
*/ ?>

<?php endif;


if($has_form): /* // REF [36] Form variables */ ?>
<script src="<?php echo $dir_env; ?>/js/scrollKeep.js"></script><?php /* // REF [25] */ ?>
<?php /* <script src="<?php echo $dir_env; ?>/js/ui-datepicker.jQuery.js"></script> REF [31] */ ?>
<script src="<?php echo $dir_env; ?>/js/_form.js"></script>

<?php endif;


/* // REF [50] Google reCaptcha
 * Luego de crear los condicionales hay que crear el archivo correspondiente
 * en `[/src/js/__captcha_formXX.js]`
 * 
 */
if($has_captcha == 1 && $form_id == 'formMainID'): ?>
<script src="<?php echo $dir_env; ?>/js/_captcha_formMainID.js"></script>

<?php /* elseif($has_captcha == 1 && $form_id == 'formContacto'): ?>
<script src="<?php echo $dir_env; ?>/js/_captcha_formContacto.js"></script>

<?php /* elseif($has_captcha == 1 && $form_id == 'formIniciarSesion'): ?>
<script src="<?php echo $dir_env; ?>/js/_captcha_formIniciarSesion.js"></script>

<?php elseif($has_captcha == 1 && $form_id == 'formRecuperarContrasena'): ?>
<script src="<?php echo $dir_env; ?>/js/_captcha_formRecuperarContrasena.js"></script>

<?php */ endif;


/* // REF [26] Lightbox */
if($has_lightbox == 1): ?>
<script src="<?php echo $dir_env; ?>/js/lightbox.min.js"></script>
<script src="<?php echo $dir_env; ?>/js/_lightbox.js"></script>

<?php endif;


if($has_slider): ?>
<script src="<?php echo $dir_env; ?>/js/slick.js"></script>
<script src="<?php echo $dir_env; ?>/js/_slick.js"></script>

<?php endif;


if($has_pop_video): ?>
<script src="<?php echo $dir_env; ?>/js/_pop.video.js"></script>

<?php endif; ?>