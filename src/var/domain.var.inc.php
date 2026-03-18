<?php
/* * NombreDeProyecto * ========================================================
   Domain Variables [/src/var/domain.var.inc.php]
   ========================================================================== */

/* // Descripcion ----------------------------------------------------------- *
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
$domain_query = $_SERVER['HTTP_HOST'] ?? $_SERVER['SERVER_NAME'] ?? 'unknown';

$domain_clean = preg_replace('/^www\./i', '', $domain_query);

$protocol_query = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
    ? "https://"
    : "http://";

$http_protocol  = $protocol_query . 'www.';


/* // International - - - - - - - - - - - - - - - - - - - - - - - - - - - - - *
$domain_com_mx      = 'domain.com.mx';

$domain_uy      = 'domain.uy';

$country_suffix = ($domain_clean === $domain_com_mx) ? ' MX' : ' UY';
*/


/* // Domain main - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - */
$domain_main        = $domain_clean;

$domain_main_full   = $http_protocol . $domain_main;


/* // Domain WIP  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - */
$domain_wip         = $domain_main;

$domain_wip_full   = $http_protocol . $domain_wip;


/* // Domain secondary  - - - - - - - - - - - - - - - - - - - - - - - - - - - */
$domain_sec         = 'sitiocomar';

$domain_sec_full   = $http_protocol . $domain_sec;


/* // Domain custom - - - - - - - - - - - - - - - - - - - - - - - - - - - - - */
$domain_custom      = 'sitiocomar';

$domain_custom_full   = $http_protocol . $domain_custom;


/* // Subdomain - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - */
$domain_sub_SUBDOMAIN = 'SUBDOMAIN' . '.';



?>