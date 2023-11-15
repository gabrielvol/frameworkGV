<?php
/* * NombreDeProyecto * ========================================================
   PHP Variables Main Loader [/src/var/main.var.inc.php]
   ========================================================================== */

/* // Descripcion ----------------------------------------------------------- */
// Listado principal de includes de variables php.
//
// #php #variables #includes



/* // Referencias globales de nombres de variables y mixins ----------------- */
///-- Inicio del nombre
// bd                   = borde
// bg                   = fondo / background
// bx                   = box
// ft                   = fuente
// mq, MQ               = media query @media
// tx                   = texto

///-- Fin del nombre
// _before              = se usa con pseudo-elementos ::before
// _after               = se usa con pseudo-elementos ::after
// _act                 = activacion
// _ani                 = animacion
// _hover               = se usa con pseudo-clases :focus y :hover
// _hs                  = hash
// _imp			= importacion
// _mx                  = mixin

///-- Espaciado
// P, M                 = padding, margin
// T, R, B, L           = top, right, bottom, left
// H, V, A, X           = horizontal, vertical, all, custom defined

///-- Tamanos de Pantalla
// M, T, D, DL          = mobile, tablet, desktop, desktop large
// B, A, O, L           = before, after, only, landscape

///-- Colores
// X, L, D              = extra, light, dark
// De, S, B             = desaturated, semi, bright

///-- Fuentes
// T, L, M, R, B, BK    = thin, light, medium, regular, bold, black
// X, S, U, C, I        = extra, semi, ultra, condensed, italic



/* // Activadores ----------------------------------------------------------- */
include('act/header.act.inc.php');
include('act/nav.act.inc.php');
    
    
/* // Data ------------------------------------------------------------------ */
include('lang.var.inc.php');
include('domain.var.inc.php');
// include('date.var.inc.php');
include('urls.var.inc.php');
    
include('meta.titlesDesc.var.inc.php');
// include('address.var.inc.php');
// include('tel.var.inc.php');
include('email.var.inc.php');
    
// include('social.var.inc.php');
    
// include('file.var.inc.php');
// include('media.var.inc.php');

if(!empty($has_form)){ include('form.var.inc.php'); } // REF [36]

include('classes.var.inc.php');

/* Entornos no-produccion
if($dir_env !== ''){ include('xxx.var.inc.php'); }

/* Solo entorno
if($dir_env == '/stage'){ include('xxx.var.inc.php'); }

/* Solo entorno produccion
if(empty($dir_env)){ include('xxx.var.inc.php'); }
*/

?>