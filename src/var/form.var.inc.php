<?php
/* * NombreDeProyecto * ========================================================
   Form Variables [/src/var/form.var.inc.php]
   ========================================================================== */

/* // Descripcion ----------------------------------------------------------- */
// Archivo de asignación de variables para envíos del formulario
// Este archivo solamente se carga si la variable $has_form tiene asignado un 1
// REF [36]



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



/* // Form Main // REF [36] ------------------------------------------------- */
if($dir_env !== '' && $dir_env !== '/stage'):
    // test / maqueta
    $form_recipient__formMain           = 'tampas@gmail.com';
    $form_recipient_CC__formMain        = 'gabrielvol@protonmail.com';
    $form_recipient_BCC__formMain       = 'ggvv@hotmail.com.ar';
else:
    // produ / stage
    $form_recipient__formMain           = 'gabrielvol@protonmail.com'; // $site_email_info;
    $form_recipient_CC__formMain        = 'tampas@gmail.com'; // $site_email_info; // . ', ' . $site_email_EMAILB;
    $form_recipient_BCC__formMain       = 'ggvv@hotmail.com.ar';
    
endif;

$form_status_recipient__formMain        = $form_recipient__formMain;
$form_status_recipient_mailto__formMain = 'mailto:'. $form_recipient__formMain;


/* // Form Contacto // REF [36] --------------------------------------------- */
if($dir_env !== '' && $dir_env !== '/stage'):
    // test / maqueta
    $form_recipient__formContacto           = 'tampas@gmail.com';
    $form_recipient_CC__formContacto        = 'gabrielvol@protonmail.com';
    $form_recipient_BCC__formContacto       = 'ggvv@hotmail.com.ar';
else:
    // produ / stage
    $form_recipient__formContacto           = 'gabrielvol@protonmail.com'; // $site_email_info;
    $form_recipient_CC__formContacto        = 'tampas@gmail.com'; // $site_email_info; // . ', ' . $site_email_EMAILB;
    $form_recipient_BCC__formContacto       = 'ggvv@hotmail.com.ar';
endif;

$form_status_recipient__formContacto        = $form_recipient__formContacto;
$form_status_recipient_mailto__formContacto = 'mailto:'. $form_recipient__formContacto;


/* // Form Footer // REF [36] ----------------------------------------------- */
if($dir_env !== '' && $dir_env !== '/stage'):
    // test / maqueta
    $form_recipient__formFooter           = 'tampas@gmail.com';
    $form_recipient_CC__formFooter        = 'gabrielvol@protonmail.com';
    $form_recipient_BCC__formFooter       = 'ggvv@hotmail.com.ar';
else:
    // produ / stage    
    $form_recipient__formFooter           = 'gabrielvol@protonmail.com'; // $site_email_info;
    $form_recipient_CC__formFooter        = 'tampas@gmail.com'; // $site_email_info; // . ', ' . $site_email_EMAILB;
    $form_recipient_BCC__formFooter       = 'ggvv@hotmail.com.ar';
endif;    

$form_status_recipient__formFooter        = $form_recipient__formFooter;
$form_status_recipient_mailto__formFooter = 'mailto:'. $form_recipient__formFooter;

?>