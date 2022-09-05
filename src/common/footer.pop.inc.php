<?php     
/* Entornos no-produccion */
if($dir_env != ''):
endif;

/* Solo entorno */
if($dir_env == '/stage'):
endif;

/* Solo entorno produccion */
if(empty($dir_env)):
endif;
?>

<?php
/*
if($nav_pageCurrent == 'page_PAGINA'):
    include('pop.inc.php');
endif;

if($nav_pageCurrent_int == 'page_PAGINA_INT'):
    include('pop.inc.php');
endif;

if($nav_pageCurrent == 'page_PAGINA' || $nav_pageCurrent_int == 'page_PAGINA_INT'):
    include('pop.inc.php');
endif;
    
if($page_int == 1): // Internas
    include('pop.inc.php');
endif;
 * 
if($has_pop_video == 1):
    include('pop.video.inc.php');
endif;
*/
?>