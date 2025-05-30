<?php
/* // Create variables for form data ---------------------------------------- */
$data_apellido__formMainID = $_POST['data_apellido__formMainID'];
$data_nombreAp__formMainID = $_POST['data_nombreAp__formMainID'];
$data_nombreCo__formMainID = $_POST['data_nombreCo__formMainID'];
$data_username__formMainID = $_POST['data_username__formMainID'];
$data_cantidad__formMainID = $_POST['data_cantidad__formMainID'];

$data_genero__formMainID = $_POST['data_genero__formMainID'];
$data_dni__formMainID = $_POST['data_dni__formMainID'];
$data_fecha__formMainID = $_POST['data_fecha__formMainID'];

$data_direccion__formMainID = $_POST['data_direccion__formMainID'];
$data_ciudad__formMainID = $_POST['data_ciudad__formMainID'];
$data_domicilio__formMainID = $_POST['data_domicilio__formMainID'];
$data_localidad__formMainID = $_POST['data_localidad__formMainID'];
$data_codigoPostal__formMainID = $_POST['data_codigoPostal__formMainID'];
$data_provincia__formMainID = $_POST['data_provincia__formMainID'];
$data_pais__formMainID = $_POST['data_pais__formMainID'];

$data_email__formMainID = $_POST['data_email__formMainID'];
$data_telefono__formMainID = $_POST['data_telefono__formMainID'];
$data_celular__formMainID = $_POST['data_celular__formMainID'];
$data_whatsAppAreaCode__formMainID = $_POST['data_whatsapAreaCode__formMainID'];
$data_whatsAppNumber__formMainID = $_POST['data_whatsAppNumber__formMainID'];

$data_webSite__formMainID = $_POST['data_webSite__formMainID'];
$data_facebook__formMainID = $_POST['data_facebook__formMainID'];
$data_instagram__formMainID = $_POST['data_instagram__formMainID'];  
$data_comoQueres__formMainID = $_POST['data_comoQueres__formMainID'];        

$data_empresa__formMainID = $_POST['data_empresa__formMainID'];
$data_razonSocial__formMainID = $_POST['data_razonSocial__formMainID'];
$data_cargo__formMainID = $_POST['data_cargo__formMainID'];
$data_rubro__formMainID = $_POST['data_rubro__formMainID'];

$data_asunto__formMainID = $_POST['data_asunto__formMainID'];
$data_area__formMainID = $_POST['data_area__formMainID'];
$data_mensaje__formMainID = $_POST['data_mensaje__formMainID'];
    
    
/* // Si el envio fue exitoso reseteamos lo que el usuario escribio --------- */    
$_POST['data_apellido__formMainID'] = '';
$_POST['data_nombreAp__formMainID'] = '';     
$_POST['data_nombreCo__formMainID'] = '';               
$_POST['data_genero__formMainID'] = '';
$_POST['data_direccion__formMainID'] = '';
$_POST['data_ciudad__formMainID'] = '';
$_POST['data_domicilio__formMainID'] = '';
$_POST['data_localidad__formMainID'] = '';
$_POST['data_codigoPostal__formMainID'] = '';
$_POST['data_provincia__formMainID'] = '';
$_POST['data_pais__formMainID'] = '';
$_POST['data_fecha__formMainID'] = '';
$_POST['data_email__formMainID'] = '';
$_POST['data_webSite__formMainID'] = '';
$_POST['data_facebook__formMainID'] = '';
$_POST['data_telefono__formMainID'] = '';
$_POST['data_celular__formMainID'] = '';
$_POST['data_whatsAppAreaCode__formMainID'] = '';
$_POST['data_whatsAppNumber__formMainID'] = '';
$_POST['data_empresa__formMainID'] = '';
$_POST['data_razonSocial__formMainID'] = '';
$_POST['data_cargo__formMainID'] = '';
$_POST['data_rubro__formMainID'] = '';
$_POST['data_comoQueres__formMainID'] = '';
$_POST['data_asunto__formMainID'] = '';
$_POST['data_mensaje__formMainID'] = '';
    
    
    
/* // Campos $formMail_texto ------------------------------------------------ */
$formMail_texto .= '<strong>Nombre:</strong> ' . $data_nombre__formMainID . '<br />';
$formMail_texto .= '<strong>Apellido:</strong> ' . $data_apellido__formMainID . '<br />';
$formMail_texto .= '<strong>Nombre y apellido:</strong> ' . $data_nombreAp__formMainID . '<br />';
$formMail_texto .= '<strong>Nombre completo:</strong> ' . $data_nombreCo__formMainID . '<br />';
$formMail_texto .= '<strong>Nombre de usuario:</strong> ' . $data_username__formMainID . '<br />';
$formMail_texto .= '<strong>Direcci&oacute;n:</strong> ' . $data_direccion__formMainID . '<br />';
$formMail_texto .= '<strong>Ciudad:</strong> ' . $data_ciudad__formMainID . '<br />';
$formMail_texto .= '<strong>Domicilio:</strong> ' . $data_domicilio__formMainID . '<br />';
$formMail_texto .= '<strong>Sexo:</strong> ' . $data_genero__formMainID . '<br />';
$formMail_texto .= '<strong>Cantidad:</strong> ' . $data_cantidad__formMainID . '<br />';
$formMail_texto .= '<strong>DNI:</strong> ' . $data_dni__formMainID . '<br />';
$formMail_texto .= '<strong>C&oacute;digo postal:</strong> ' . $data_codigoPostal__formMainID . '<br />';
$formMail_texto .= '<strong>Localidad:</strong> ' . $data_localidad__formMainID . '<br />';
$formMail_texto .= '<strong>Provincia:</strong> ' . $data_provincia__formMainID . '<br />';
$formMail_texto .= '<strong>Pa&iacute;s:</strong> ' . $data_pais__formMainID . '<br />';
$formMail_texto .= '<strong>Fecha:</strong> ' . $data_fecha__formMainID . '<br />';
$formMail_texto .= '<strong>Correo electr&oacute;nico:</strong> ' . $data_email__formMainID . '<br />';
$formMail_texto .= '<strong>Correo electr&oacute;nico:</strong> <a href="mailto:' . $data_email__formMainID . '">' . $data_email__formMainID . '</a><br />';
$formMail_texto .= '<strong>Sitio web:</strong> ' . $data_webSite__formMainID . '<br />';
$formMail_texto .= '<strong>Perfil de Facebook:</strong> ' . $data_facebook__formMainID . '<br />';
$formMail_texto .= '<strong>Perfil de Instagram:</strong> <a href="https://www.instagram.com/' . $data_instagram__formMainID . '">' . $data_instagram__formMainID . '</a><br />';
$formMail_texto .= '<strong>Tel&eacute;fono:</strong> ' . $data_telefono__formMainID . '<br />';
$formMail_texto .= '<strong>Celular:</strong> ' . $data_celular__formMainID . '<br />';
$formMail_texto .= '<strong>WhatsApp:</strong> <a href="https://wa.me/+549' . $data_whatsAppAreaCode__formMainID . $data_whatsAppNumer__formMainID . '">+54 9 '. $data_whatsAppAreaCode__formMainID . ' ' . $data_whatsAppNumer__formMainID ."</a><br />";
$formMail_texto .= '<strong>Empresa:</strong> ' . $data_empresa__formMainID . '<br />';
$formMail_texto .= '<strong>Raz&oacute;n Social:</strong> ' . $data_razonSocial__formMainID . '<br />';
$formMail_texto .= '<strong>Cargo:</strong> ' . $data_cargo__formMainID . '<br />';
$formMail_texto .= '<strong>Asunto:</strong> ' . $data_asunto__formMainID . '<br />';
$formMail_texto .= '<strong>&iquest;C&oacute;mo quer&eacute;s que te contactemos?:</strong> ' . $data_comoQueres__formMainID . '<br />';
$formMail_texto .= '<strong>Rubro:</strong> ' . $data_rubro__formMainID . '<br />';
$formMail_texto .= '<br /><strong>Mensaje:</strong><br />' . $data_mensaje__formMainID;
    
    
    
/* // Campos $mail->Body ---------------------------------------------------- */
$mail->Body .= '<strong>Nombre:</strong> ' . $data_nombre__formMainID . '<br>';
$mail->Body .= '<strong>Apellido:</strong> ' . $data_apellido__formMainID . '<br />';
$mail->Body .= '<strong>Nombre y apellido:</strong> ' . $data_nombreAp__formMainID . '<br />';
$mail->Body .= '<strong>Nombre completo:</strong> ' . $data_nombreCo__formMainID . '<br />';
$mail->Body .= '<strong>Nombre de usuario:</strong> ' . $data_username__formMainID . '<br />';
$mail->Body .= '<strong>Direcci&oacute;n:</strong> ' . $data_direccion__formMainID . '<br />';
$mail->Body .= '<strong>Ciudad:</strong> ' . $data_ciudad__formMainID . '<br />';
$mail->Body .= '<strong>Domicilio:</strong> ' . $data_domicilio__formMainID . '<br />';
$mail->Body .= '<strong>Sexo:</strong> ' . $data_genero__formMainID . '<br />';
$mail->Body .= '<strong>Cantidad:</strong> ' . $data_cantidad__formMainID . '<br />';
$mail->Body .= '<strong>DNI:</strong> ' . $data_dni__formMainID . '<br />';
$mail->Body .= '<strong>C&oacute;digo postal:</strong> ' . $data_codigoPostal__formMainID . '<br />';
$mail->Body .= '<strong>Localidad:</strong> ' . $data_localidad__formMainID . '<br />';
$mail->Body .= '<strong>Provincia:</strong> ' . $data_provincia__formMainID . '<br />';
$mail->Body .= '<strong>Pa&iacute;s:</strong> ' . $data_pais__formMainID . '<br />';
$mail->Body .= '<strong>Fecha:</strong> ' . $data_fecha__formMainID . '<br />';
$mail->Body .= '<strong>Correo electr&oacute;nico:</strong> ' . $data_email__formMainID . '<br />';
$mail->Body .= '<strong>Correo electr&oacute;nico:</strong> <a href="mailto:' . $data_email__formMainID . '">' . $data_email__formMainID . '</a><br />';
$mail->Body .= '<strong>Sitio web:</strong> ' . $data_webSite__formMainID . '<br />';
$mail->Body .= '<strong>Perfil de Facebook:</strong> ' . $data_facebook__formMainID . '<br />';
$mail->Body .= '<strong>Perfil de Instagram:</strong> <a href="https://www.instagram.com/' . $data_instagram__formMainID . '">' . $data_instagram__formMainID . '</a><br />';
$mail->Body .= '<strong>Tel&eacute;fono:</strong> ' . $data_telefono__formMainID . '<br />';
$mail->Body .= '<strong>Celular:</strong> ' . $data_celular . '<br />';
$mail->Body .= '<strong>WhatsApp:</strong> <a href="https://wa.me/+549' . $data_whatsAppAreaCode__formMainID . $data_whatsAppNumer__formMainID . '">+54 9 '. $data_whatsAppAreaCode__formMainID . ' ' . $data_whatsAppNumer__formMainID ."</a><br />";
$mail->Body .= '<strong>Empresa:</strong> ' . $data_empresa__formMainID . '<br />';
$mail->Body .= '<strong>Raz&oacute;n Social:</strong> ' . $data_razonSocial__formMainID . '<br />';
$mail->Body .= '<strong>Cargo:</strong> ' . $data_cargo__formMainID . '<br />';
$mail->Body .= '<strong>Asunto:</strong> ' . $data_asunto__formMainID . '<br />';
$mail->Body .= '<strong>&iquest;C&oacute;mo quer&eacute;s que te contactemos?:</strong> ' . $data_comoQueres__formMainID . '<br />';
$mail->Body .= '<strong>Rubro:</strong> ' . $data_rubro__formMainID . '<br />';
$mail->Body .= '<br /><strong>Mensaje:</strong><br />' . $data_mensaje__formMainID;
        
        
    
/* // INICIA VALIDACIÓN en .form_validation_span ---------------------------- */
} elseif(!isset($data_apellido__formMainID) || trim($data_apellido__formMainID) == ''){
    $form_validation_span_msg_data_apellido__formMainID = $form_validation_msg_data_apellido__formMainID;
    $form_validation_span_class_data_apellido__formMainID = " form_validation_span_active";
    $form_validation_input_class_data_apellido__formMainID = " form_validation_input_invalid";
    $form_input_autofocus_data_apellido__formMainID = "autofocus";

} elseif(!isset($data_nombreAp__formMainID) || trim($data_nombreAp__formMainID) == ''){
    $form_validation_span_msg_data_nombreAp__formMainID = $form_validation_msg_data_nombreAp__formMainID;
    $form_validation_span_class_data_nombreAp__formMainID = " form_validation_span_active";
    $form_validation_input_class_data_nombreAp__formMainID = " form_validation_input_invalid";
    $form_input_autofocus_data_nombreAp__formMainID = "autofocus";

} elseif(!isset($data_nombreCo__formMainID) || trim($data_nombreCo__formMainID) == ''){
    $form_validation_span_msg_data_nombreCo__formMainID = $form_validation_msg_data_nombreCo__formMainID;
    $form_validation_span_class_data_nombreCo__formMainID = " form_validation_span_active";
    $form_validation_input_class_data_nombreCo__formMainID = " form_validation_input_invalid";
    $form_input_autofocus_data_nombreCo__formMainID = "autofocus";

} elseif(!isset($data_username__formMainID) || trim($data_username__formMainID) == ''){
    $form_validation_span_msg_data_username__formMainID = $form_validation_msg_data_username__formMainID;
    $form_validation_span_class_data_username__formMainID = " form_validation_span_active";
    $form_validation_input_class_data_username__formMainID = " form_validation_input_invalid";
    $form_input_autofocus_data_username__formMainID = "autofocus";

} elseif(!isset($data_dni__formMainID) || trim($data_dni__formMainID) == ''){
    $form_validation_span_msg_data_dni__formMainID = $form_validation_msg_data_dni__formMainID;
    $form_validation_span_class_data_dni__formMainID = " form_validation_span_active";
    $form_validation_input_class_data_dni__formMainID = " form_validation_input_invalid";
    $form_input_autofocus_data_dni__formMainID = "autofocus";

} elseif(!isset($data_direccion__formMainID) || trim($data_direccion__formMainID) == ''){
    $form_validation_span_msg_data_direccion__formMainID = $form_validation_msg_data_direccion__formMainID;
    $form_validation_span_class_data_direccion__formMainID = " form_validation_span_active";
    $form_validation_input_class_data_direccion__formMainID = " form_validation_input_invalid";
    $form_input_autofocus_data_direccion__formMainID = "autofocus";

} elseif(!isset($data_ciudad__formMainID) || trim($data_ciudad__formMainID) == ''){
    $form_validation_span_msg_data_ciudad__formMainID = $form_validation_msg_data_ciudad__formMainID;
    $form_validation_span_class_data_ciudad__formMainID = " form_validation_span_active";
    $form_validation_input_class_data_ciudad__formMainID = " form_validation_input_invalid";
    $form_input_autofocus_data_ciudad__formMainID = "autofocus";

} elseif(!isset($data_domicilio__formMainID) || trim($data_domicilio__formMainID) == ''){
    $form_validation_span_msg_data_domicilio__formMainID = $form_validation_msg_data_domicilio__formMainID;
    $form_validation_span_class_data_domicilio__formMainID = " form_validation_span_active";
    $form_validation_input_class_data_domicilio__formMainID = " form_validation_input_invalid";
    $form_input_autofocus_data_domicilio__formMainID = "autofocus";

} elseif(!isset($data_localidad__formMainID) || trim($data_localidad__formMainID) == ''){
    $form_validation_span_msg_data_localidad__formMainID = $form_validation_msg_data_localidad__formMainID;
    $form_validation_span_class_data_localidad__formMainID = " form_validation_span_active";
    $form_validation_input_class_data_localidad__formMainID = " form_validation_input_invalid";
    $form_input_autofocus_data_localidad__formMainID = "autofocus";

} elseif(!isset($data_codigoPostal__formMainID) || trim($data_codigoPostal__formMainID) == ''){
    $form_validation_span_msg_data_codigoPostal__formMainID = $form_validation_msg_data_codigoPostal__formMainID;
    $form_validation_span_class_data_codigoPostal__formMainID = " form_validation_span_active";
    $form_validation_input_class_data_codigoPostal__formMainID = " form_validation_input_invalid";
    $form_input_autofocus_data_codigoPostal__formMainID = "autofocus";

} elseif(!isset($data_provincia__formMainID) || trim($data_provincia__formMainID) == ''){
    $form_validation_span_msg_data_provincia__formMainID = $form_validation_msg_data_provincia__formMainID;
    $form_validation_span_class_data_provincia__formMainID = " form_validation_span_active";
    $form_validation_input_class_data_provincia__formMainID = " form_validation_input_invalid";
    $form_input_autofocus_data_provincia__formMainID = "autofocus";

} elseif(!isset($data_pais__formMainID) || trim($data_pais__formMainID) == ''){
    $form_validation_span_msg_data_pais__formMainID = $form_validation_msg_data_pais__formMainID;
    $form_validation_span_class_data_pais__formMainID = " form_validation_span_active";
    $form_validation_input_class_data_pais__formMainID = " form_validation_input_invalid";
    $form_input_autofocus_data_pais__formMainID = "autofocus";

} elseif(!isset($data_celular__formMainID) || trim($data_celular__formMainID) == ''){
    $form_validation_span_msg_data_celular__formMainID = $form_validation_msg_data_celular__formMainID;
    $form_validation_span_class_data_celular__formMainID = " form_validation_span_active";
    $form_validation_input_class_data_celular__formMainID = " form_validation_input_invalid";
    $form_input_autofocus_data_celular__formMainID = "autofocus";

} elseif(!isset($data_whatsAppAreaCode__formMainID) || trim($data_whatsAppAreaCode__formMainID) == ''){
    $form_validation_span_msg_data_whatsAppAreaCode__formMainID = $form_validation_msg_data_whatsAppAreaCode__formMainID;
    $form_validation_span_class_data_whatsAppAreaCode__formMainID = " form_validation_span_active";
    $form_validation_input_class_data_whatsApp__formMainID = " form_validation_input_invalid";
    $form_validation_input_class_data_whatsAppAreaCode__formMainID = " form_validation_input_invalid";
    $form_input_autofocus_data_whatsAppAreaCode__formMainID = "autofocus";

} elseif(!isset($data_whatsAppNumber__formMainID) || trim($data_whatsAppNumber__formMainID) == ''){
    $form_validation_span_msg_data_whatsAppNumber__formMainID = $form_validation_msg_data_whatsAppNumber__formMainID;
    $form_validation_span_class_data_whatsAppNumber__formMainID = " form_validation_span_active";
    $form_validation_input_class_data_whatsApp__formMainID = " form_validation_input_invalid";
    $form_validation_input_class_data_whatsAppNumber__formMainID = " form_validation_input_invalid";
    $form_input_autofocus_data_whatsAppNumber__formMainID = "autofocus";

} elseif(!isset($data_telefono__formMainID) || trim($data_telefono__formMainID) == ''){
    $form_validation_span_msg_data_telefono__formMainID = $form_validation_msg_data_telefono__formMainID;
    $form_validation_span_class_data_telefono__formMainID = " form_validation_span_active";
    $form_validation_input_class_data_telefono__formMainID = " form_validation_input_invalid";
    $form_input_autofocus_data_telefono__formMainID = "autofocus";

} elseif(!isset($data_email__formMainID) || trim($data_email__formMainID) == ''){
    $form_validation_span_msg_data_email__formMainID = $form_validation_msg_data_email__formMainID;
    $form_validation_span_class_data_email__formMainID = " form_validation_span_active";
    $form_validation_input_class_data_email__formMainID = " form_validation_input_invalid";
    $form_input_autofocus_data_email__formMainID = "autofocus";

} elseif(!isset($data_webSite__formMainID) || trim($data_webSite__formMainID) == ''){
    $form_validation_span_msg_data_webSite__formMainID = $form_validation_msg_data_webSite__formMainID;
    $form_validation_span_class_data_webSite__formMainID = " form_validation_span_active";
    $form_validation_input_class_data_webSite__formMainID = " form_validation_input_invalid";
    $form_input_autofocus_data_webSite__formMainID = "autofocus";

} elseif(!isset($data_facebook__formMainID) || trim($data_facebook__formMainID) == ''){
    $form_validation_span_msg_data_facebook__formMainID = $form_validation_msg_data_facebook__formMainID;
    $form_validation_span_class_data_facebook__formMainID = " form_validation_span_active";
    $form_validation_input_class_data_facebook__formMainID = " form_validation_input_invalid";
    $form_input_autofocus_data_facebook__formMainID = "autofocus";

} elseif(!isset($data_empresa__formMainID) || trim($data_empresa__formMainID) == ''){
    $form_validation_span_msg_data_empresa__formMainID = $form_validation_msg_data_empresa__formMainID;
    $form_validation_span_class_data_empresa__formMainID = " form_validation_span_active";
    $form_validation_input_class_data_empresa__formMainID = " form_validation_input_invalid";
    $form_input_autofocus_data_empresa__formMainID = "autofocus";

} elseif(!isset($data_razonSocial__formMainID) || trim($data_razonSocial__formMainID) == ''){
    $form_validation_span_msg_data_razonSocial__formMainID = $form_validation_msg_data_razonSocial__formMainID;
    $form_validation_span_class_data_razonSocial__formMainID = " form_validation_span_active";
    $form_validation_input_class_data_razonSocial__formMainID = " form_validation_input_invalid";
    $form_input_autofocus_data_razonSocial__formMainID = "autofocus";

} elseif(!isset($data_cargo__formMainID) || trim($data_cargo__formMainID) == ''){
    $form_validation_span_msg_data_cargo__formMainID = $form_validation_msg_data_cargo__formMainID;
    $form_validation_span_class_data_cargo__formMainID = " form_validation_span_active";
    $form_validation_input_class_data_cargo__formMainID = " form_validation_input_invalid";
    $form_input_autofocus_data_cargo__formMainID = "autofocus";

} elseif(!isset($data_fecha__formMainID) || trim($data_fecha__formMainID) == ''){
    $form_validation_span_msg_data_fecha__formMainID = $form_validation_msg_data_fecha__formMainID;
    $form_validation_span_class_data_fecha__formMainID = " form_validation_span_active";
    $form_validation_input_class_data_fecha__formMainID = " form_validation_input_invalid";
    $form_input_autofocus_data_fecha__formMainID = "autofocus";

} elseif(!isset($data_cantidad__formMainID) || trim($data_cantidad__formMainID) == ''){
    $form_validation_span_msg_data_cantidad__formMainID = $form_validation_msg_data_cantidad__formMainID;
    $form_validation_span_class_data_cantidad__formMainID = " form_validation_span_active";
    $form_validation_input_class_data_cantidad__formMainID = " form_validation_input_invalid";
    $form_input_autofocus_data_cantidad__formMainID = "autofocus";

} elseif(!isset($data_rubro__formMainID) || trim($data_rubro__formMainID) == ''){
    $form_validation_span_msg_data_rubro__formMainID = $form_validation_msg_data_rubro__formMainID;
    $form_validation_span_class_data_rubro__formMainID = " form_validation_span_active";
    $form_validation_input_class_data_rubro__formMainID = " form_validation_input_invalid";
    $form_input_autofocus_data_rubro__formMainID = "autofocus";

} elseif(!isset($data_comoQueres__formMainID) || trim($data_comoQueres__formMainID) == ''){
    $form_validation_span_msg_data_comoQueres__formMainID = $form_validation_msg_data_comoQueres__formMainID;
    $form_validation_span_class_data_comoQueres__formMainID = " form_validation_span_active";
    $form_validation_input_class_data_comoQueres__formMainID = " form_validation_input_invalid";
    $form_input_autofocus_data_comoQueres__formMainID = "autofocus";

} elseif(!isset($data_asunto__formMainID) || trim($data_asunto__formMainID) == ''){
    $form_validation_span_msg_data_asunto__formMainID = $form_validation_msg_data_asunto__formMainID;
    $form_validation_span_class_data_asunto__formMainID = " form_validation_span_active";
    $form_validation_input_class_data_asunto__formMainID = " form_validation_input_invalid";
    $form_input_autofocus_data_asunto__formMainID = "autofocus";

} elseif(!isset($data_area__formMainID) || trim($data_area__formMainID) == ''){
    $form_validation_span_msg_data_area__formMainID = $form_validation_msg_data_area__formMainID;
    $form_validation_span_class_data_area__formMainID = " form_validation_span_active";
    $form_validation_input_class_data_area__formMainID = " form_validation_input_invalid";
    // $form_input_autofocus_data_area__formMainID = "autofocus";

} elseif(!isset($data_mensaje__formMainID) || trim($data_mensaje__formMainID) == ''){
    $form_validation_span_msg_data_mensaje__formMainID = $form_validation_msg_data_mensaje__formMainID;
    $form_validation_span_class_data_mensaje__formMainID = " form_validation_span_active";
    $form_validation_input_class_data_mensaje__formMainID = " form_validation_input_invalid";
    $form_input_autofocus_data_mensaje__formMainID = "autofocus";
    
    
    
/* // INICIA VALIDACIÓN en .form_validation_div ----------------------------- */  
} elseif(!isset($data_apellido__formMainID) || trim($data_apellido__formMainID) == ''){
    $form_validation_div_msg__formMainID = $form_validation_msg_data_apellido__formMainID;
    $form_validation_div_class__formMainID = " form_validation_div_invalid";
    $form_validation_input_class_data_apellido__formMainID = " form_validation_input_invalid";
    $form_input_autofocus_data_apellido__formMainID = "autofocus";

} elseif(!isset($data_nombreAp__formMainID) || trim($data_nombreAp__formMainID) == ''){
    $form_validation_div_msg__formMainID = $form_validation_msg_data_nombreAp__formMainID;
    $form_validation_div_class__formMainID = " form_validation_div_invalid";
    $form_validation_input_class_data_nombreAp__formMainID = " form_validation_input_invalid";
    $form_input_autofocus_data_nombreAp__formMainID = "autofocus";

} elseif(!isset($data_nombreCo__formMainID) || trim($data_nombreCo__formMainID) == ''){
    $form_validation_div_msg__formMainID = $form_validation_msg_data_nombreCo__formMainID;
    $form_validation_div_class__formMainID = " form_validation_div_invalid";
    $form_validation_input_class_data_nombreCo__formMainID = " form_validation_input_invalid";
    $form_input_autofocus_data_nombreCo__formMainID = "autofocus";

} elseif(!isset($data_username__formMainID) || trim($data_username__formMainID) == ''){
    $form_validation_div_msg__formMainID = $form_validation_msg_data_username__formMainID;
    $form_validation_div_class__formMainID = " form_validation_div_invalid";
    $form_validation_input_class_data_username__formMainID = " form_validation_input_invalid";
    $form_input_autofocus_data_username__formMainID = "autofocus";

} elseif(!isset($data_dni__formMainID) || trim($data_dni__formMainID) == ''){
    $form_validation_div_msg__formMainID = $form_validation_msg_data_dni__formMainID;
    $form_validation_div_class__formMainID = " form_validation_div_invalid";
    $form_validation_input_class_data_dni__formMainID = " form_validation_input_invalid";
    $form_input_autofocus_data_dni__formMainID = "autofocus";

} elseif(!isset($data_direccion__formMainID) || trim($data_direccion__formMainID) == ''){
    $form_validation_div_msg__formMainID = $form_validation_msg_data_direccion__formMainID;
    $form_validation_div_class__formMainID = " form_validation_div_invalid";
    $form_validation_input_class_data_direccion__formMainID = " form_validation_input_invalid";
    $form_input_autofocus_data_direccion__formMainID = "autofocus";

} elseif(!isset($data_ciudad__formMainID) || trim($data_ciudad__formMainID) == ''){
    $form_validation_div_msg__formMainID = $form_validation_msg_data_ciudad__formMainID;
    $form_validation_div_class__formMainID = " form_validation_div_invalid";
    $form_validation_input_class_data_ciudad__formMainID = " form_validation_input_invalid";
    $form_input_autofocus_data_ciudad__formMainID = "autofocus";

} elseif(!isset($data_domicilio__formMainID) || trim($data_domicilio__formMainID) == ''){
    $form_validation_div_msg__formMainID = $form_validation_msg_data_domicilio__formMainID;
    $form_validation_div_class__formMainID = " form_validation_div_invalid";
    $form_validation_input_class_data_domicilio__formMainID = " form_validation_input_invalid";
    $form_input_autofocus_data_domicilio__formMainID = "autofocus";

} elseif(!isset($data_localidad__formMainID) || trim($data_localidad__formMainID) == ''){
    $form_validation_div_msg__formMainID = $form_validation_msg_data_localidad__formMainID;
    $form_validation_div_class__formMainID = " form_validation_div_invalid";
    $form_validation_input_class_data_localidad__formMainID = " form_validation_input_invalid";
    $form_input_autofocus_data_localidad__formMainID = "autofocus";

} elseif(!isset($data_codigoPostal__formMainID) || trim($data_codigoPostal__formMainID) == ''){
    $form_validation_div_msg__formMainID = $form_validation_msg_data_codigoPostal__formMainID;
    $form_validation_div_class__formMainID = " form_validation_div_invalid";
    $form_validation_input_class_data_codigoPostal__formMainID = " form_validation_input_invalid";
    $form_input_autofocus_data_codigoPostal__formMainID = "autofocus";

} elseif(!isset($data_provincia__formMainID) || trim($data_provincia__formMainID) == ''){
    $form_validation_div_msg__formMainID = $form_validation_msg_data_provincia__formMainID;
    $form_validation_div_class__formMainID = " form_validation_div_invalid";
    $form_validation_input_class_data_provincia__formMainID = " form_validation_input_invalid";
    $form_input_autofocus_data_provincia__formMainID = "autofocus";

} elseif(!isset($data_pais__formMainID) || trim($data_pais__formMainID) == ''){
    $form_validation_div_msg__formMainID = $form_validation_msg_data_pais__formMainID;
    $form_validation_div_class__formMainID = " form_validation_div_invalid";
    $form_validation_input_class_data_pais__formMainID = " form_validation_input_invalid";
    $form_input_autofocus_data_pais__formMainID = "autofocus";

} elseif(!isset($data_telefono__formMainID) || trim($data_telefono__formMainID) == ''){
    $form_validation_div_msg__formMainID = $form_validation_msg_data_telefono__formMainID;
    $form_validation_div_class__formMainID = " form_validation_div_invalid";
    $form_validation_input_class_data_telefono__formMainID = " form_validation_input_invalid";
    $form_input_autofocus_data_telefono__formMainID = "autofocus";

} elseif(!isset($data_celular__formMainID) || trim($data_celular__formMainID) == ''){
    $form_validation_div_msg__formMainID = $form_validation_msg_data_celular__formMainID;
    $form_validation_div_class__formMainID = " form_validation_div_invalid";
    $form_validation_input_class_data_celular__formMainID = " form_validation_input_invalid";
    $form_input_autofocus_data_celular__formMainID = "autofocus";

} elseif(!isset($data_whatsAppAreaCode__formMainID) || trim($data_whatsAppAreaCode__formMainID) == ''){
    $form_validation_div_msg__formMainID = $form_validation_msg_data_whatsAppAreaCode__formMainID;
    $form_validation_div_class__formMainID = " form_validation_div_invalid";
    $form_validation_input_class_data_whatsApp__formMainID = " form_validation_input_invalid";
    $form_validation_input_class_data_whatsAppAreaCode__formMainID = " form_validation_input_invalid";
    $form_input_autofocus_data_whatsAppAreaCode__formMainID = "autofocus";

} elseif(!isset($data_whatsAppNumber__formMainID) || trim($data_whatsAppNumber__formMainID) == ''){
    $form_validation_div_msg__formMainID = $form_validation_msg_data_whatsAppNumber__formMainID;
    $form_validation_div_class__formMainID = " form_validation_div_invalid";
    $form_validation_input_class_data_whatsApp__formMainID = " form_validation_input_invalid";
    $form_validation_input_class_data_whatsAppNumber__formMainID = " form_validation_input_invalid";
    $form_input_autofocus_data_whatsAppNumber__formMainID = "autofocus";

} elseif(!isset($data_email__formMainID) || trim($data_email__formMainID) == ''){
    $form_validation_div_msg__formMainID = $form_validation_msg_data_email__formMainID;
    $form_validation_div_class__formMainID = " form_validation_div_invalid";
    $form_validation_input_class_data_email__formMainID = " form_validation_input_invalid";
    $form_input_autofocus_data_email__formMainID = "autofocus";

} elseif(!isset($data_webSite__formMainID) || trim($data_webSite__formMainID) == ''){
    $form_validation_div_msg__formMainID = $form_validation_msg_data_webSite__formMainID;
    $form_validation_div_class__formMainID = " form_validation_div_invalid";
    $form_validation_input_class_data_webSite__formMainID = " form_validation_input_invalid";
    $form_input_autofocus_data_webSite__formMainID = "autofocus";

} elseif(!isset($data_facebook__formMainID) || trim($data_facebook__formMainID) == ''){
    $form_validation_div_msg__formMainID = $form_validation_msg_data_facebook__formMainID;
    $form_validation_div_class__formMainID = " form_validation_div_invalid";
    $form_validation_input_class_data_facebook__formMainID = " form_validation_input_invalid";
    $form_input_autofocus_data_facebook__formMainID = "autofocus";

} elseif(!isset($data_comoQueres__formMainID) || trim($data_comoQueres__formMainID) == ''){
    $form_validation_div_msg__formMainID = $form_validation_msg_data_comoQueres__formMainID;
    $form_validation_div_class__formMainID = " form_validation_div_invalid";
    $form_validation_input_class_data_comoQueres__formMainID = " form_validation_input_invalid";
    $form_input_autofocus_data_comoQueres__formMainID = "autofocus";

} elseif(!isset($data_empresa__formMainID) || trim($data_empresa__formMainID) == ''){
    $form_validation_div_msg__formMainID = $form_validation_msg_data_empresa__formMainID;
    $form_validation_div_class__formMainID = " form_validation_div_invalid";
    $form_validation_input_class_data_empresa__formMainID = " form_validation_input_invalid";
    $form_input_autofocus_data_empresa__formMainID = "autofocus";

} elseif(!isset($data_razonSocial__formMainID) || trim($data_razonSocial__formMainID) == ''){
    $form_validation_div_msg__formMainID = $form_validation_msg_data_razonSocial__formMainID;
    $form_validation_div_class__formMainID = " form_validation_div_invalid";
    $form_validation_input_class_data_razonSocial__formMainID = " form_validation_input_invalid";
    $form_input_autofocus_data_razonSocial__formMainID = "autofocus";

} elseif(!isset($data_cargo__formMainID) || trim($data_cargo__formMainID) == ''){
    $form_validation_div_msg__formMainID = $form_validation_msg_data_cargo__formMainID;
    $form_validation_div_class__formMainID = " form_validation_div_invalid";
    $form_validation_input_class_data_cargo__formMainID = " form_validation_input_invalid";
    $form_input_autofocus_data_cargo__formMainID = "autofocus";

} elseif(!isset($data_asunto__formMainID) || trim($data_asunto__formMainID) == ''){
    $form_validation_div_msg__formMainID = $form_validation_msg_data_asunto__formMainID;
    $form_validation_div_class__formMainID = " form_validation_div_invalid";
    $form_validation_input_class_data_cargo__formMainID = " form_validation_input_invalid";
    $form_input_autofocus_data_cargo__formMainID = "autofocus";

} elseif(!isset($data_fecha__formMainID) || trim($data_fecha__formMainID) == ''){
    $form_validation_div_msg__formMainID = $form_validation_msg_data_fecha__formMainID;
    $form_validation_div_class__formMainID = " form_validation_div_invalid";
    $form_validation_input_class_data_fecha__formMainID = " form_validation_input_invalid";
    $form_input_autofocus_data_fecha__formMainID = "autofocus";

} elseif(!isset($data_rubro__formMainID) || trim($data_rubro__formMainID) == ''){
    $form_validation_div_msg__formMainID = $form_validation_msg_data_rubro__formMainID;
    $form_validation_div_class__formMainID = " form_validation_div_invalid";
    $form_validation_input_class_data_rubro__formMainID = " form_validation_input_invalid";
    $form_input_autofocus_data_rubro__formMainID = "autofocus";

} elseif(!isset($data_newsletter__formMainID) || trim($data_newsletter__formMainID) == ''){
    $form_validation_div_msg__formMainID = $form_validation_msg_data_newsletter__formMainID;
    $form_validation_div_class__formMainID = " form_validation_div_invalid";
    $form_validation_input_class_data_newsletter__formMainID = " form_validation_input_invalid";
    $form_input_autofocus_data_newsletter__formMainID = "autofocus";

} elseif(!isset($data_mensaje__formMainID) || trim($data_mensaje__formMainID) == ''){
    $form_validation_div_msg__formMainID = $errordata_mensaje__formMainID;
    $form_validation_div_class__formMainID = " form_validation_div_invalid";
    $form_validation_input_class_data_mensaje__formMainID = " form_validation_input_invalid";
    $form_input_autofocus_data_mensaje__formMainID = "autofocus";

} elseif(!isset($data_area__formMainID) || trim($data_area__formMainID) == ''){
    $form_validation_div_msg__formMainID = $form_validation_msg_data_area__formMainID;
    $form_validation_div_class__formMainID = " form_validation_div_invalid";
    $form_validation_input_class_data_area__formMainID = " form_validation_input_invalid";
    $form_input_autofocus_data_area__formMainID = "autofocus";
?>