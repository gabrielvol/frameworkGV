<?php
/* * NombreDeProyecto * ========================================================
   Form Status [/src/var/form.main.status.es.inc.php]
   ========================================================================== */

/* // Form Status ----------------------------------------------------------- */
$form_status_pop_button_close_txt           = 'Cerrar';
$form_status_pop_h2_ok_classes__formMainID    = 'mbm greenSystem txAlignCenter';
$form_status_pop_h2_error_classes__formMainID = 'mbm errorColour txAlignCenter';
$form_status_pop_anchor_classes__formMainID   = 'mbm txAlignCenter';

$form_status_ini_globalA__formMainID      = 'Complete el formulario por favor.';
$form_status_ini_globalB__formMainID      = 'Nos comunicaremos con Ud. a la brevedad.';
$form_status_ini_global__formMainID       = $form_status_ini_globalA__formMainID . ' ' . $form_status_ini_globalB__formMainID;

$form_status_ok_globalA__formMainID       = 'Mensaje enviado!';
$form_status_ok_globalB__formMainID       = 'Los datos se han enviado correctamente. Muchas Gracias.';
$form_status_ok_global__formMainID        = $form_status_ok_globalA__formMainID . ' ' . $form_status_ok_globalB__formMainID;

$form_status_error_globalA__formMainID    = 'Hubo un error al enviar el mensaje.';
$form_status_error_globalB__formMainID    = 'Intente nuevamente m&aacute;s tarde.';
$form_status_error_globalC__formMainID    = 'Puede comunicarse enviando un mensaje por correo electr&oacute;nico a <a href="' . $form_status_recipient_mailto__formMainID . '" class="' . $form_status_pop_anchor_classes__formMainID . '">' . $form_status_recipient__formMainID . '</a>.';
$form_status_error_global__formMainID        = $form_status_error_globalA__formMainID . ' ' . $form_status_error_globalB__formMainID . ' ' . $form_status_error_globalC__formMainID;

// $form_status_marquee__formMainID = '<p class="form_status form_status_ini">'. $form_status_ini_global__formMainID .'</p>';



/* // Captcha Status -------------------------------------------------------- */
$form_status_captcha_ini__formMainID = '<p>Todavía no se ejecuta la validación del captcha</p>';
$form_status_captcha_OKsuccessTrue__formMainID = '<p>Success true</p>';
$form_status_captcha_OKvalidacionOK__formMainID = '<p>Validacion OK, ahora corre PHPMailer</p>';
$form_status_captcha_ErrorScoreLow__formMainID = '<p>Error, score menor a 0.5</p>';
$form_status_captcha_ErrorSuccessFalse__formMainID = '<p>Error, response sucess false</p>';
$form_status_captcha_ErrorOther__formMainID = '<p>Otro tipo de error :( </p>';



/* // Validation ------------------------------------------------------------ */
$form_validation_div_msg__formMainID                  = '';
$form_validation_div_class__formMainID                = 'displayNone';

$form_validation_msg_data_nombre__formMainID          = 'Por favor, ingrese su nombre.';
$form_validation_msg_data_apellido__formMainID        = 'Por favor, ingrese su apellido.';
$form_validation_msg_data_nombreAp__formMainID        = 'Por favor, ingrese su nombre y apellido.';
$form_validation_msg_data_nombreCo__formMainID        = 'Por favor, ingrese su nombre completo.';
$form_validation_msg_data_username__formMainID        = 'Por favor, ingrese un nombre de usuario.';
$form_validation_msg_data_cantidad__formMainID        = 'Por favor, ingrese una cantidad.';
   
$form_validation_msg_data_direccion__formMainID       = 'Por favor, ingrese su direcci&oacute;n.';
$form_validation_msg_data_ciudad__formMainID          = 'Por favor, ingrese su ciudad.';
$form_validation_msg_data_domicilio__formMainID       = 'Por favor, ingrese su domicilio.';
$form_validation_msg_data_localidad__formMainID       = 'Por favor, ingrese su localidad.';
$form_validation_msg_data_codigoPostal__formMainID    = 'Por favor, ingrese su c&oacute;digo postal.'; 
$form_validation_msg_data_provincia__formMainID       = 'Por favor, ingrese su provincia.';
$form_validation_msg_data_pais__formMainID            = 'Por favor, ingrese su pa&iacute;s.';
   
$form_validation_msg_data_fecha__formMainID           = 'Por favor, indique la fecha deseada.';
$form_validation_msg_data_dni__formMainID             = 'Por favor, ingrese su n&uacute;mero de DNI.';
   
$form_validation_msg_data_email__formMainID           = 'Por favor, ingrese una direcci&oacute;n de correo v&aacute;lida.'; 
$form_validation_msg_data_telefono__formMainID        = 'Por favor, ingrese su n&uacute;mero de tel&eacute;fono.'; 
$form_validation_msg_data_celular__formMainID         = 'Por favor, ingrese su n&uacute;mero de celular.'; 
$form_validation_msg_data_whatsappAreaCode__formMainID = 'Por favor, ingrese un código de área.'; 
$form_validation_msg_data_whatsappNumber__formMainID  = 'Por favor, ingrese su n&uacute;mero.'; 
   
$form_validation_msg_data_webSite__formMainID         = 'Por favor, ingrese su sitio web.';
$form_validation_msg_data_facebook__formMainID        = 'Por favor, ingrese su perfil de Facebook.';
$form_validation_msg_data_instagram__formMainID       = 'Por favor, ingrese su perfil de Instagram.';
$form_validation_msg_data_comoQueres__formMainID      = 'Por favor, indique un medio de contacto.';
   
$form_validation_msg_data_empresa__formMainID         = 'Por favor, ingrese el nombre de su empresa.';
$form_validation_msg_data_razonSocial__formMainID     = 'Por favor, ingrese su raz&oacute;n social.';
$form_validation_msg_data_cargo__formMainID           = 'Por favor, ingrese su cargo.';
$form_validation_msg_data_rubro__formMainID           = 'Por favor, ingrese un rubro.';
$form_validation_msg_data_asunto__formMainID          = 'Por favor, ingrese un asunto.';
   
$form_validation_msg_data_area__formMainID            = 'Por favor, elija un &aacute;rea de contacto.';        
$form_validation_msg_data_newsletter__formMainID      = 'Por favor, elija una opci&oacute;n.';
$form_validation_msg_data_mensaje__formMainID         = 'Por favor, complete su mensaje.';

?>