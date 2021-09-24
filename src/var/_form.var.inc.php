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



/* // Form Main ------------------------------------------------------------- */   
$form_recipient__formMain            = "tampas@gmail.com"; //$site_email_EMAILA_address;
$form_recipient_CC__formMain         = $form_recipient__formMain;
$form_recipient_BCC__formMain        = $form_recipient__formMain;


$form_status_recipient__formMain        = $form_recipient__formMain;
$form_status_recipient_mailto__formMain = 'mailto:'. $form_recipient__formMain;


/* // Form Footer ----------------------------------------------------------- */   
$form_recipient__formFooter            = "tampas@gmail.com"; //$site_email_ventas_address;
$form_recipient_CC__formFooter         = $form_recipient__formFooter;
$form_recipient_BCC__formFooter        = $form_recipient__formFooter;       

$form_status_recipient__formFooter        = $form_recipient__formFooter;
$form_status_recipient_mailto__formFooter = 'mailto:'. $form_recipient__formFooter;
?>