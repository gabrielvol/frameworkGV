<?php
/* * NombreDeProyecto * ========================================================
   PHP Variables Main Loader [/src/var/main.var.inc.php]
   ========================================================================== */

/* // Descripcion ----------------------------------------------------------- */
// Listado principal de includes de variables php.
//
// REF [36] Form variable $has_form
//
// #php #variables #includes

/* // Activadores ----------------------------------------------------------- */
include('act/header.act.inc.php');
include('act/nav.act.inc.php');
    
    
/* // Data ------------------------------------------------------------------ */
include('lang.var.inc.php');
//include('date.var.inc.php');

include('domain.var.inc.php');
// include('web.var.inc.php');
include('url.var.inc.php');
    
include('meta.titlesDesc.var.inc.php');
// include('address.var.inc.php');
// include('tel.var.inc.php');
include('email.var.inc.php');
    
// include('social.var.inc.php');
    
// include('file.var.inc.php');
// include('media.var.inc.php');
// include('page.PAGEINT.var.inc.php');

// REF [36]
if(!empty($has_form)){ include('form.var.inc.php'); }

include('class.var.inc.php');

/* Entornos no-produccion
if($dir_env !== ''){ include('xxx.var.inc.php'); }

/* Solo entorno
if($dir_env == '/stage'){ include('xxx.var.inc.php'); }

/* Solo entorno produccion
if(empty($dir_env)){ include('xxx.var.inc.php'); }
*/

?>