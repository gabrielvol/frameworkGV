<script src="<?php echo $dir_env; ?>/js/jQuery3.2.1.min.js"></script>
<script src="<?php echo $dir_env; ?>/js/modernizr2.8.3.js"></script>
<script src="<?php echo $dir_env; ?>/js/html5shiv.min.js"></script>
<?php /* // REF [24]
<script src="<?php echo $dir_env; ?>/js/uikit.min.js"></script>
*/ ?>
<?php if($nav_pageCurrent == 'page_index'): /*
<script src="<?php echo $dir_env; ?>/js/aaaaaa.js"></script>
*/ ?>
<?php endif; if(!empty($page_int)): /* // Internas
<script src="<?php echo $dir_env; ?>/js/aaaaaa.js"></script>
*/ ?>
<?php endif; if($nav_pageCurrent_int == 'page_home'): /*
<script src="<?php echo $dir_env; ?>/js/aaaaaa.js"></script>
*/ ?>
<?php endif; if($nav_pageCurrent_int == 'page_inicio'): /*
<script src="<?php echo $dir_env; ?>/js/aaaaaa.js"></script>
* /?>
<?php endif; if($nav_pageCurrent == 'page_contacto'): /* // REF [23]
<script src="<?php echo $dir_env; ?>/js/jquery-ui-datepicker.js"></script>
<script src="<?php echo $dir_env; ?>/js/aaaaaa.js"></script>
*/ ?>
<?php endif; if($nav_pageCurrent == 'page_gracias'): /*
<script src="<?php echo $dir_env; ?>/js/aaaaaa.js"></script>
*/ ?>
<?php endif; if($nav_pageCurrent == 'page_PAGINA'): /*
<script src="<?php echo $dir_env; ?>/js/aaaaaa.js"></script>
*/ ?>
<?php endif; if($nav_pageCurrent_int == 'page_PAGINA_INT'): /*
<script src="<?php echo $dir_env; ?>/js/aaaaaa.js"></script>
*/ ?>
<?php endif; if($nav_pageCurrent == 'page_PAGINA' || $nav_pageCurrent_int == 'page_PAGINA_INT'): /*
<script src="<?php echo $dir_env; ?>/js/aaaaaa.js"></script>
*/ ?>
<?php endif; if(!empty($page_construccion)): /*
<script src="<?php echo $dir_env; ?>/js/aaaaaa.js"></script>
*/ ?>
<?php endif; ?>