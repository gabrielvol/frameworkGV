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