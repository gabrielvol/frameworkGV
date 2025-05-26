<?php
/* * NombreDeProyecto * ========================================================
   Domain Variables [/src/var/domain.var.inc.php]
   ========================================================================== */

/* // Descripcion ----------------------------------------------------------- 
   Definición de dominios y global url

   #domain #subdomain #http #url

// $domain_main
   Debe contener el dominio completo, incluyendo al subdominio si lo es
   No es subdominio: $domain_main = 'sitioweb.com';
   Sí es subdominio: $domain_main = 'tienda.sitioweb.com';

// $domain_sub_SUBDOMAIN
   Debe contener solamente el nombre del subdominio concatenado con un .
   Se usa para crear urls dentro del dominio principal que dirijan a una pagina
   del subdominio
   Debe ser comentado en el repositorio del subdominio
   $domain_sub_SUBDOMAIN  = 'tienda' . '.';

*/

/* // Domains // REF [54] --------------------------------------------------- */
$http_protocol      = 'https://www.';

$domain_main        = 'sitiocomar';

$domain_sub_SUBDOMAIN = 'SUBDOMAIN' . '.';

$domain_wip         = $domain_main;

$domain_sec         = 'sitiocomar';

$domain_custom      = 'sitiocomar';

?>