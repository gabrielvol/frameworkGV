<?php
/* * NombreDeProyecto * ========================================================
   Form Variables [/src/var/form.var.inc.php]
   ========================================================================== */

/* // Descripcion ----------------------------------------------------------- */
// Archivo de asignación de variables para envíos del formulario
// Este archivo solamente se carga si la variable $has_form tiene asignado un 1
//
// REF [36] Form variable $has_form



/* // Form Main // REF [36] ------------------------------------------------- */
if(!empty($dir_env) && $dir_env !== '/stage'):
    // test / maqueta
    $form_recipient__formMain           = 'tampas@gmail.com';
    $form_recipient_CC__formMain        = 'ggvv@hotmail.com.ar';
    $form_recipient_BCC__formMain       = 'gabrielvol@protonmail.com';
else:
    // produ / stage
    $form_recipient__formMain           = 'tampas@gmail.com'; // $site_email_contacto_address;
    $form_recipient_CC__formMain        = 'ggvv@hotmail.com.ar'; // $site_email_contacto_address; // . ', ' . $site_email_EMAILA_address;
    $form_recipient_BCC__formMain       = 'gabrielvol@protonmail.com';
    
endif;

$form_status_recipient__formMain        = $form_recipient__formMain;
$form_status_recipient_mailto__formMain = 'mailto:' . $form_recipient__formMain;


/* // Form Contacto // REF [36] --------------------------------------------- 
if(!empty($dir_env) && $dir_env !== '/stage'):
    // test / maqueta
    $form_recipient__formContacto           = 'tampas@gmail.com';
    $form_recipient_CC__formContacto        = 'ggvv@hotmail.com.ar';
    $form_recipient_BCC__formContacto       = 'gabrielvol@protonmail.com';
else:
    // produ / stage
    $form_recipient__formContacto           = 'tampas@gmail.com'; // $site_email_contacto_address;
    $form_recipient_CC__formContacto        = 'ggvv@hotmail.com.ar'; // $site_email_contacto_address; // . ', ' . $site_email_EMAILA_address;
    $form_recipient_BCC__formContacto       = 'gabrielvol@protonmail.com';
endif;

$form_status_recipient__formContacto        = $form_recipient__formContacto;
$form_status_recipient_mailto__formContacto = 'mailto:' . $form_recipient__formContacto;
*/

/* // Form Footer // REF [36] ----------------------------------------------- 
if(!empty($dir_env) && $dir_env !== '/stage'):
    // test / maqueta
    $form_recipient__formFooter           = 'tampas@gmail.com';
    $form_recipient_CC__formFooter        = 'ggvv@hotmail.com.ar';
    $form_recipient_BCC__formFooter       = 'gabrielvol@protonmail.com';
else:
    // produ / stage    
    $form_recipient__formFooter           = 'tampas@gmail.com'; // $site_email_contacto_address;
    $form_recipient_CC__formFooter        = 'ggvv@hotmail.com.ar'; // $site_email_contacto_address; // . ', ' . $site_email_EMAILA_address;
    $form_recipient_BCC__formFooter       = 'gabrielvol@protonmail.com';
endif;    

$form_status_recipient__formFooter        = $form_recipient__formFooter;
$form_status_recipient_mailto__formFooter = 'mailto:' . $form_recipient__formFooter;
*/
?>