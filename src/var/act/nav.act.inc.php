<?php
/* * NombreDeProyecto * ========================================================
   Navigation Activators [/src/var/act/nav.act.inc.php]
   ========================================================================== */

/* // Descripcion ----------------------------------------------------------- 
   Activadores para Nav.

   #php #variables #activador #nav

   // Listado --------------------------------------------------------------- 
   01 _ $nav_drawer_act
   02 _ $nav_SECTION_hasSub_act
   03 _ $nav_accordion_act
   04 _ $nav_double_A768_act
*/

/*___ /common/nav.main.inc.php ____________*/
/*___ /etc/custom/act/section_nav_act.scss _*/
$nav_drawer_act         = 1; /* // REF [06] */
$nav_SECTION_hasSub_act = 0; /* // REF [07] */
$nav_accordion_act      = 0;

/*
Si se activa `$nav_double_A768_act` hay que activar `$classes_container_act_A768`
en `[/etc/css/custom/act/classes_useful_act.scss]` y `$nav_double_A768_act` en
`[/etc/css/custom/act/nav_main_act.scss]`
*/
$nav_double_A768_act      = 0; /* // REF [05] `[/src/common/nav.main.inc.php]` */
?>