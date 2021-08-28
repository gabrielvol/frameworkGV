<?php
/* * NombreDeProyecto * ========================================================
   Email Variables [/src/var/email.var.inc.php]
   ========================================================================== */

/* // Descripcion ----------------------------------------------------------- */



/* // Referencias globales de nombres de variables y mixins ----------------- */
///-- Inicio del nombre
// bd                   = borde
// bg                   = fondo / background
// bx                   = box
// ft                   = fuente
// mq                   = media query @media
// tx                   = texto

///-- Fin del nombre
// _mx                  = mixin
// _act                 = activacion
// _ani                 = animacion
// _hs                  = hash
// _hover               = se usa con pseudoclases :focus y :hover
// _before              = se usa con pseudoelementos ::before
// _after               = se usa con pseudoelementos ::after

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



/* // Domain main ----------------------------------------------------------- */
$site_email_EMAILA           = 'EMAILA';
$site_email_EMAILA_address   = $site_email_EMAILA .'@'. $domain_global;
$site_email_EMAILA_mailto    = 'mailto:'. $site_email_EMAILA_address;
$site_email_EMAILA_href      = 'href="'. $site_email_EMAILA_mailto .'"';
$site_email_EMAILA_anchor    = '<a '. $site_email_EMAILA_href .'>'. $site_email_EMAILA_address .'</a>';

$site_email_EMAILB           = 'EMAILB';
$site_email_EMAILB_address   = $site_email_EMAILB .'@'. $domain_global;
$site_email_EMAILB_mailto    = 'mailto:'. $site_email_EMAILB_address;
$site_email_EMAILB_href      = 'href="'. $site_email_EMAILB_mailto .'"';
$site_email_EMAILB_anchor    = '<a '. $site_email_EMAILB_href .'>'. $site_email_EMAILB_address .'</a>';


/* // Domain secondary ------------------------------------------------------ */
$site_email_EMAILC           = 'EMAILC';
$site_email_EMAILC_address   = $site_email_EMAILC .'@'. $domain_sec;
$site_email_EMAILC_mailto    = 'mailto:'. $site_email_EMAILC_address;
$site_email_EMAILC_href      = 'href="'. $site_email_EMAILC_mailto .'"';
$site_email_EMAILC_anchor    = '<a '. $site_email_EMAILC_href .'>'. $site_email_EMAILC_address .'</a>';

$site_email_EMAILD           = 'EMAILD';
$site_email_EMAILD_address   = $site_email_EMAILD .'@'. $domain_sec;
$site_email_EMAILD_mailto    = 'mailto:'. $site_email_EMAILD_address;
$site_email_EMAILD_href      = 'href="'. $site_email_EMAILD_mailto .'"';
$site_email_EMAILD_anchor    = '<a '. $site_email_EMAILD_href .'>'. $site_email_EMAILD_address .'</a>';
?>