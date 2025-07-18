<?php
/* * NombreDeProyecto * ========================================================
   <head> .js [/src/common/head.js.inc.php]
   ========================================================================== */

/* // Descripcion -----------------------------------------------------------
 * Archivo de carga de scripts .js
 * Este archivo se carga en `[/src/common/head.inc.php]`
 * 
 * jQuery / Modernizr / html5shiv
 * 
 * reCapctcha V3
 * 
 * topbar.js
 * 
 * uikit.js
 * 
 * .js por página
 * 
*/
?>

<script src="<?php echo $dir_env; ?>/js/jQuery3.2.1.min.js"></script>
<script src="<?php echo $dir_env; ?>/js/modernizr2.8.3.js"></script>
<script src="<?php echo $dir_env; ?>/js/html5shiv.min.js"></script>

<?php if(empty($dir_env) && $has_captcha == 1): /* // REF [50] Google reCaptcha */ ?>
<script src='https://www.google.com/recaptcha/api.js?render=<?php echo $captcha_key_site; ?>'></script>

<?php /* <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
<script>
    var onloadCallback = function() {
        document.querySelectorAll('.g-recaptcha').forEach(function(el) {
            grecaptcha.render(el, {
                'sitekey': el.getAttribute('captcha_key_site'),
                'callback': function() {
                    var form = el.closest('form');
                    form.submit();
                },
            });
        });
    };
</script> */ ?>
<?php endif;


/* // REF [47] Topbar.js */ ?>
<script src="<?php echo $dir_env; ?>/js/topbar.min.js"></script>

<?php /* // REF [24]
<script src="<?php echo $dir_env; ?>/js/uikit.min.js"></script> */


if($nav_pageCurrent == 'page_index'): /*
<script src="<?php echo $dir_env; ?>/js/page_script.js"></script> */
endif;


if($page_int): /*
<script src="<?php echo $dir_env; ?>/js/page_script.js"></script> */
endif;


if($nav_pageCurrent_int == 'page_index_index'): /*
<script src="<?php echo $dir_env; ?>/js/page_script.js"></script> */
endif;


if($nav_pageCurrent_int == 'page_index_home'): /*
<script src="<?php echo $dir_env; ?>/js/page_script.js"></script> */
endif;


if($nav_pageCurrent == 'page_contacto'): /* // REF [23]
<script src="<?php echo $dir_env; ?>/js/jquery-ui-datepicker.js"></script>
<script src="<?php echo $dir_env; ?>/js/page_script.js"></script>
*/ endif;


if($nav_pageCurrent == 'page_gracias'): /*
<script src="<?php echo $dir_env; ?>/js/page_script.js"></script> */
endif;


if($nav_pageCurrent == 'page_PAGINA'): /*
<script src="<?php echo $dir_env; ?>/js/page_script.js"></script> */
endif;


if($nav_pageCurrent_int == 'page_PAGINA_INT'): /*
<script src="<?php echo $dir_env; ?>/js/page_script.js"></script> */
endif;


if($nav_pageCurrent == 'page_PAGINA' || $nav_pageCurrent_int == 'page_PAGINA_INT'): /*
<script src="<?php echo $dir_env; ?>/js/page_script.js"></script> */
endif;


if($page_construccion): /*
<script src="<?php echo $dir_env; ?>/js/page_script.js"></script> */
endif; ?>