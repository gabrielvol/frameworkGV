<?php
/* * NombreDeProyecto * ========================================================
   Form Variables [/src/var/form.var.inc.php]
   ========================================================================== */

/* // Descripcion ----------------------------------------------------------- */



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



/* // Form Main ------------------------------------------------------------- */   
///-- Produccion / Stage
if($dir_env == '' || $dir_env == '/stage'):
    $form_recipient__formMain           = $site_email_EMAILA;
    $form_recipient_CC__formMain        = $site_email_EMAILA . ', ' . $site_email_EMAILB;
    $form_recipient_BCC__formMain       = 'tampas@gmail.com'; // TODO
endif;

///-- No es Produccion / No es Stage
if($dir_env != '' || $dir_env !== '/stage'):
    $form_recipient__formMain           = 'tampas@gmail.com';
    $form_recipient_CC__formMain        = '';
    $form_recipient_BCC__formMain       = '';
endif;

$form_status_recipient__formMain        = $form_recipient__formMain;
$form_status_recipient_mailto__formMain = 'mailto:'. $form_recipient__formMain;


/* // Form Contacto --------------------------------------------------------- */   
///-- Produccion / Stage
if($dir_env == '' || $dir_env == '/stage'):
    $form_recipient__formContacto           = $site_email_EMAILA;
    $form_recipient_CC__formContacto        = $site_email_EMAILA . ', ' . $site_email_EMAILB;
    $form_recipient_BCC__formContacto       = 'tampas@gmail.com'; // TODO
endif;

///-- No es Produccion / No es Stage
if($dir_env != '' || $dir_env !== '/stage'):
    $form_recipient__formContacto           = 'tampas@gmail.com';
    $form_recipient_CC__formContacto        = '';
    $form_recipient_BCC__formContacto       = '';
endif;

$form_status_recipient__formContacto        = $form_recipient__formContacto;
$form_status_recipient_mailto__formContacto = 'mailto:'. $form_recipient__formContacto;


/* // Form Footer ----------------------------------------------------------- */   
///-- Produccion / Stage
if($dir_env == '' || $dir_env == '/stage'):
    $form_recipient__formFooter           = $site_email_EMAILA;
    $form_recipient_CC__formFooter        = $site_email_EMAILA . ', ' . $site_email_EMAILB;
    $form_recipient_BCC__formFooter       = 'tampas@gmail.com'; // TODO
endif;

///-- No es Produccion / No es Stage
if($dir_env != '' || $dir_env !== '/stage'):
    $form_recipient__formFooter           = 'tampas@gmail.com';
    $form_recipient_CC__formFooter        = '';
    $form_recipient_BCC__formFooter       = '';
endif;    

$form_status_recipient__formFooter        = $form_recipient__formFooter;
$form_status_recipient_mailto__formFooter = 'mailto:'. $form_recipient__formFooter;
?>