<?php
/* * NombreDeProyecto * ========================================================
   Global Variables [/src/var/global.var.inc.php]
   ========================================================================== */

/* // Descripcion ----------------------------------------------------------- 
   Variables que se usan en todo el sitio web.

   #php #variables #nav #main #footer #container


   // REF [38*] ContainerMAX width
   En la variable `$containerMAX_value` se declara la clase que indica el ancho
   maximo de container a partir del cual deja de crecer en ancho
   
   Esta variable se usa en el div <#main> y las etiquetas <header> y <footer>
   Se concantenan en el archivo `[/src/var/class.var.inc.php]`
   
   `.containerA1200` Min
   `.containerA1300`
   `.containerA1400`
   `.containerA1500` Max
*/ 

$containerMAX_value = ' containerA1400';

/* Este valor luego debe ser modificado en el archivo
   `[/etc/css/custom/var/container_sizes_var.scss]`
   declarado en la variable `$containerMAX_value`

   Y debe activarse la variable correspondiente en
   `[/etc/css/custom/act/classes_useful_act.scss]`
*/

?>