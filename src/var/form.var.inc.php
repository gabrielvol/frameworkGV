<?php
/* * NombreDeProyecto * ========================================================
   Form Variables [/src/var/form.var.inc.php]
   ========================================================================== */

/* // Descripcion ----------------------------------------------------------- */
// Archivo de asignación de variables para envíos del formulario
// Este archivo solamente se carga si la variable $has_form tiene asignado un 1
//
// REF [36] Form variable $has_form
// REF [50] Google reCaptcha



/* // REF [50] Google reCaptcha --------------------------------------------- */
// Si se activa `$has_recaptcha` tambien hay que activar `$google_captcha_act`
// en  `[/etc/css/custom/act/google_act.scss]`
$has_captcha = 1;

// La variable captcha_key_site tambien debe ser declarada
// en `[/src/js/global.produ.js]`
$captcha_key_site = 'sinclave';
$captcha_key_secret = 'sinclave';

$captcha_score_treshold = 0.5;

// Get the IP address of the origin of the submission
$captcha_ip_remote = $_SERVER['REMOTE_ADDR'];

/* // Form identifier Global ------------------------------------------------ */
// La variable $form_id puede ser declarada de tres formas:
// 
// 1- De manera global en `[/src/var/form.var.inc.php]` para todo el sitio
// 2- En el archivo `[/src/var/page.PAGEINT.var.inc.php]` para un grupo de paginas
// 3- En la pagina donde va a ser usado
// 
// $form_id = 'formMainID'; // REF [36] Form variables



/* // Form Main // REF [36] Form variables ---------------------------------- */
if(!empty($dir_env) && $dir_env !== '/stage'):
    // test / maqueta
    $form_recipient__formMainID           = 'tampas@gmail.com';
    $form_recipient_CC__formMainID        = 'ggvv@hotmail.com.ar';
    $form_recipient_BCC__formMainID       = 'gabrielvol@protonmail.com';
else:
    // produ / stage
    $form_recipient__formMainID           = 'tampas@gmail.com'; // $site_email_CONTACTO_address;
    $form_recipient_CC__formMainID        = 'ggvv@hotmail.com.ar'; // $site_email_CONTACTO_address; // . ', ' . $site_email_EMAILA_address;
    $form_recipient_BCC__formMainID       = 'gabrielvol@protonmail.com';
    
endif;

$form_status_recipient__formMainID        = $form_recipient__formMainID;
$form_status_recipient_mailto__formMainID = 'mailto:' . $form_recipient__formMainID;


/* // Form Contacto // REF [36] Form variables ------------------------------ *
if(!empty($dir_env) && $dir_env !== '/stage'):
    // test / maqueta
    $form_recipient__formContacto           = 'tampas@gmail.com';
    $form_recipient_CC__formContacto        = 'ggvv@hotmail.com.ar';
    $form_recipient_BCC__formContacto       = 'gabrielvol@protonmail.com';
else:
    // produ / stage
    $form_recipient__formContacto           = 'tampas@gmail.com'; // $site_email_CONTACTO_address;
    $form_recipient_CC__formContacto        = 'ggvv@hotmail.com.ar'; // $site_email_CONTACTO_address; // . ', ' . $site_email_EMAILA_address;
    $form_recipient_BCC__formContacto       = 'gabrielvol@protonmail.com';
endif;

$form_status_recipient__formContacto        = $form_recipient__formContacto;
$form_status_recipient_mailto__formContacto = 'mailto:' . $form_recipient__formContacto;
*/

/* // Form Footer // REF [36] Form variables -------------------------------- *
if(!empty($dir_env) && $dir_env !== '/stage'):
    // test / maqueta
    $form_recipient__formFooter           = 'tampas@gmail.com';
    $form_recipient_CC__formFooter        = 'ggvv@hotmail.com.ar';
    $form_recipient_BCC__formFooter       = 'gabrielvol@protonmail.com';
else:
    // produ / stage    
    $form_recipient__formFooter           = 'tampas@gmail.com'; // $site_email_CONTACTO_address;
    $form_recipient_CC__formFooter        = 'ggvv@hotmail.com.ar'; // $site_email_CONTACTO_address; // . ', ' . $site_email_EMAILA_address;
    $form_recipient_BCC__formFooter       = 'gabrielvol@protonmail.com';
endif;    

$form_status_recipient__formFooter        = $form_recipient__formFooter;
$form_status_recipient_mailto__formFooter = 'mailto:' . $form_recipient__formFooter;
*/
?>