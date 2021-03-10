<?php
    //--------------------------------------------------------------------------
    // Fuentes de título de pop
    $formPop_h2_ok_classes__formName    = 'mbm greenSystem alignCenter';
    $formPop_h2_error_classes__formName = 'mbm errorColour alignCenter';
    $formPop_anchor_classes__formName   = 'mbm alignCenter';
    
    
    //--------------------------------------------------------------------------
    // Mandatory message
    $form_msg_mandatory__formName           = '';
    $form_msg_mandatory_classes__formName   = 'displayNone';
    
    
    //--------------------------------------------------------------------------
    // Status global
    $form_status_msg_ini_globalA__formName     = _('Complete el formulario por favor.');
    $form_status_msg_ini_globalB__formName     = _('Nos comunicaremos con Ud. a la brevedad.');
    $form_status_msg_ini_global__formName      = $form_status_msg_ini_globalA__formName ." ". $form_status_msg_ini_globalB__formName;
    
    $form_status_msg_OK_globalA__formName      = _('Env&iacute;o exitoso.');
    $form_status_msg_OK_globalB__formName      = _('Los datos se han enviado correctamente, nos comunicaremos a la brevedad. Muchas Gracias.');
    
    $form_status_msg_error_globalA__formName   = _('Hubo un error al enviar el mensaje.');
    $form_status_msg_error_globalB__formName   = _('Intente nuevamente m&aacute;s tarde.');
    $form_status_msg_error_globalC__formName   = _('Puede comunicarse enviando un mensaje por correo electr&oacute;nico a') . ' <a href="'. $form_status_msg_error_recipient_mailto .'" class="'. $formPop_anchor_classes__formName .'">'. $form_status_msg_error_recipient .'</a>.';
    
    //--------------------------------------------------------------------------
    // Status ini
    //$form_status_msg__formName = '<p class="status ini">'.$form_status_msg_ini_global__formName.'</p>';
        
        
    //--------------------------------------------------------------------------
    // Inicia proceso de form
    if (isset($_POST['button_form_submit__formName'])){
//        ini_set('sendmail_from', 'tampas@gmail.com');
//        ini_set('SMTP','mail.dominio.com');
        
//        ini_set('sendmail_from', $form_recipient);
//        ini_set('SMTP','mail.'. $domain_global);

        // Asignamos datos de campos a variables
        $data_nombre__formName          = $_POST['data_nombre__formName'];
        $data_apellido__formName        = $_POST['data_apellido__formName'];
        $data_nombreAp__formName        = $_POST['data_nombreAp__formName'];
        $data_nombreCo__formName        = $_POST['data_nombreCo__formName'];
        $data_username__formName        = $_POST['data_username__formName'];
        $data_cantidad__formName        = $_POST['data_cantidad__formName'];
        
        $data_genero__formName          = $_POST['data_genero__formName'];
        $data_dni__formName             = $_POST['data_dni__formName'];
        $data_fecha__formName           = $_POST['data_fecha__formName'];
        
        $data_direccion__formName       = $_POST['data_direccion__formName'];
        $data_domicilio__formName       = $_POST['data_domicilio__formName'];
        $data_localidad__formName       = $_POST['data_localidad__formName'];
        $data_codigoPostal__formName    = $_POST['data_codigoPostal__formName'];
        $data_provincia__formName       = $_POST['data_provincia__formName'];
        $data_pais__formName            = $_POST['data_pais__formName'];
        
        $data_email__formName           = $_POST['data_email__formName'];
        $data_telefono__formName        = $_POST['data_telefono__formName'];
        $data_celular__formName         = $_POST['data_celular__formName'];
        
        $data_webSite__formName         = $_POST['data_webSite__formName'];
        $data_facebook__formName        = $_POST['data_facebook__formName'];
        $data_instagram__formName       = $_POST['data_instagram__formName'];  
        $data_comoQueres__formName      = $_POST['data_comoQueres__formName'];        
        
        $data_empresa__formName         = $_POST['data_empresa__formName'];
        $data_razonSocial__formName     = $_POST['data_razonSocial__formName'];
        $data_cargo__formName           = $_POST['data_cargo__formName'];
        $data_rubro__formName           = $_POST['data_rubro__formName'];
        
        $data_asunto__formName          = $_POST['data_asunto__formName'];
        $data_area__formName            = $_POST['data_area__formName'];
        $data_mensaje__formName         = $_POST['data_mensaje__formName'];

        // Cabeceras del correo
        $formMail_recipient  = $form_recipient;
        // $formMail_recipient  = $data_area__formName;
        $formMail_asunto   = "Contacto Web de ". $data_nombre__formName ." - ". $data_empresa__formName;
        $formMail_headers  = "From: $data_nombre__formName <$data_email__formName>\r\n";
        //$formMail_headers .= "Reply-To: $data_email__formName \r\n";
        $formMail_headers .= "Content-type: text/html\r\n";
        $formMail_headers .= "X-Mailer: PHP5\n";
        $formMail_headers .= 'MIME-Version: 1.0' . "\n";
        //$formMail_headers .= "CC: ". $form_recipient_CC ."\r\n";
        //$formMail_headers .= "BCC: ". $form_recipient_BCC ."\r\n";
        $formMail_texto  = '<small style="color:#666">Este mensaje fue enviado desde el formulario que se encuentra en '. $url_contacto_full .'</small><br /><br />';
        $formMail_texto .= "<strong>Nombre:</strong> ". $data_nombre__formName ."<br />";
        $formMail_texto .= "<strong>Apellido:</strong> ". $data_apellido__formName ."<br />";
        $formMail_texto .= "<strong>Nombre y apellido:</strong> ". $data_nombreAp__formName ."<br />";
        $formMail_texto .= "<strong>Nombre completo:</strong> ". $data_nombreCo__formName ."<br />";
        $formMail_texto .= "<strong>Nombre de usuario:</strong> ". $data_username__formName ."<br />";
        $formMail_texto .= "<strong>Direcci&oacute;n:</strong> ". $data_direccion__formName ."<br />";
        $formMail_texto .= "<strong>Domicilio:</strong> ". $data_domicilio__formName ."<br />";
        $formMail_texto .= "<strong>Sexo:</strong> ". $data_genero__formName ."<br />";
        $formMail_texto .= "<strong>Cantidad:</strong> ". $data_cantidad__formName ."<br />";
        $formMail_texto .= "<strong>DNI:</strong> ". $data_dni__formName ."<br />";
        $formMail_texto .= "<strong>C&oacute;digo postal:</strong> ". $data_codigoPostal__formName ."<br />";
        $formMail_texto .= "<strong>Localidad:</strong> ". $data_localidad__formName ."<br />";
        $formMail_texto .= "<strong>Provincia:</strong> ". $data_provincia__formName ."<br />";
        $formMail_texto .= "<strong>Pa&iacute;s:</strong> ". $data_pais__formName ."<br />";
        $formMail_texto .= "<strong>Fecha:</strong> ". $data_fecha__formName ."<br />";
        $formMail_texto .= '<strong>Correo electr&oacute;nico:</strong> '. $data_email__formName ."<br />";
        $formMail_texto .= '<strong>Correo electr&oacute;nico:</strong> <a mailto="'. $data_email__formName .'">'. $data_email__formName ."</a><br />";
        $formMail_texto .= "<strong>Sitio web:</strong> ". $data_webSite__formName ."<br />";
        $formMail_texto .= "<strong>Perfil de Facebook:</strong> ". $data_facebook__formName ."<br />";
        $formMail_texto .= '<strong>Perfil de Instagram:</strong> <a href="https://www.instagram.com/'. $data_instagram__formName .'">'. $data_instagram__formName ."</a><br />";
        $formMail_texto .= "<strong>Tel&eacute;fono:</strong> ". $data_telefono__formName ."<br />";
        $formMail_texto .= "<strong>Celular:</strong> ". $data_celular ."<br />";
        $formMail_texto .= "<strong>Empresa:</strong> ". $data_empresa__formName ."<br />";
        $formMail_texto .= "<strong>Raz&oacute;n Social:</strong> ". $data_razonSocial__formName ."<br />";
        $formMail_texto .= "<strong>Cargo:</strong> ". $data_cargo__formName ."<br />";
        $formMail_texto .= "<strong>Asunto:</strong> ". $data_asunto__formName ."<br />";
        $formMail_texto .= "<strong>&iquest;C&oacute;mo quer&eacute;s que te contactemos?:</strong> ". $data_comoQueres__formName ."<br />";
        $formMail_texto .= "<strong>Rubro:</strong> ". $data_rubro__formName ."<br />";
        $formMail_texto .= "<br /><strong>Mensaje:</strong><br />". $data_mensaje;
        $formMail_texto .= '<br /><br />______<br /><small style="color:#666">Fin del mensaje</small>';
        
        
    //--------------------------------------------------------------------------
    // Variables Globales de Error
        $form_msg_mandatory_errorClass__formName = " msg_mandatory_invalid";
        $formSend_msg_error_data_nombre__formName         = _("Por favor, ingrese su nombre.");
        $formSend_msg_error_data_apellido__formName       = _("Por favor, ingrese su apellido.");
        $formSend_msg_error_data_nombreAp__formName       = _("Por favor, ingrese su nombre y apellido.");
        $formSend_msg_error_data_nombreCo__formName       = _("Por favor, ingrese su nombre completo.");
        $formSend_msg_error_data_username__formName       = _("Por favor, ingrese un nombre de usuario.");
        $formSend_msg_error_data_cantidad__formName       = _("Por favor, ingrese una cantidad.");
        
        $formSend_msg_error_data_direccion__formName      = _("Por favor, ingrese su direcci&oacute;n.");
        $formSend_msg_error_data_domicilio__formName      = _("Por favor, ingrese su domicilio.");
        $formSend_msg_error_data_localidad__formName      = _("Por favor, ingrese su localidad.");
        $formSend_msg_error_data_codigoPostal__formName   = _("Por favor, ingrese su c&oacute;digo postal."); 
        $formSend_msg_error_data_provincia__formName      = _("Por favor, ingrese su provincia.");
        $formSend_msg_error_data_pais__formName           = _("Por favor, ingrese su pa&iacute;s.");
        
        $formSend_msg_error_data_fecha__formName          = _("Por favor, indique la fecha deseada.");
        $formSend_msg_error_data_dni__formName            = _("Por favor, ingrese su n&uacute;mero de DNI.");
        
        $formSend_msg_error_data_email__formName          = _("Por favor, ingrese una direcci&oacute;n de correo v&aacute;lida."); 
        $formSend_msg_error_data_telefono__formName       = _("Por favor, ingrese su n&uacute;mero de tel&eacute;fono."); 
        $formSend_msg_error_data_celular__formName        = _("Por favor, ingrese su n&uacute;mero de celular."); 
        
        $formSend_msg_error_data_webSite__formName        = _("Por favor, ingrese su sitio web.");
        $formSend_msg_error_data_facebook__formName       = _("Por favor, ingrese su perfil de Facebook.");
        $formSend_msg_error_data_instagram__formName      = _("Por favor, ingrese su perfil de Instagram.");
        $formSend_msg_error_data_comoQueres__formName     = _("Por favor, indique un medio de contacto.");
        
        $formSend_msg_error_data_empresa__formName        = _("Por favor, ingrese el nombre de su empresa.");
        $formSend_msg_error_data_razonSocial__formName    = _("Por favor, ingrese su raz&oacute;n social.");
        $formSend_msg_error_data_cargo__formName          = _("Por favor, ingrese su cargo.");
        $formSend_msg_error_data_rubro__formName          = _("Por favor, ingrese un rubro.");
        $formSend_msg_error_data_asunto__formName         = _("Por favor, ingrese un asunto.");
        
        $formSend_msg_error_data_area__formName           = _("Por favor, elija un área de contacto.");        
        $formSend_msg_error_data_newsletter__formName     = _("Por favor, elija una opci&oacute;n.");
        $formSend_msg_error_data_mensaje__formName        = _("Por favor, complete su mensaje.");

        
            
//INICIA VALIDACIÓN EN div.msg_mandatory
        if (empty($_POST["data_nombre__formName"])) {
            $form_msg_mandatory__formName                   = $formSend_msg_error_data_nombre__formName;
            $form_msg_mandatory_classes__formName           = $form_msg_mandatory_errorClass__formName;
            $form_input_errorClass_data_nombre__formName       = "invalidField";
            $form_input_autofocus_data_nombre__formName         = "autofocus";
            
        } elseif (empty($_POST["data_apellido__formName"])) {
            $form_msg_mandatory__formName                   = $formSend_msg_error_data_apellido__formName;
            $form_msg_mandatory_classes__formName           = $form_msg_mandatory_errorClass__formName;
            $form_input_errorClass_data_apellido__formName     = "invalidField";
            $form_input_autofocus_data_apellido__formName       = "autofocus";
            
        } elseif (empty($_POST["data_nombreAp__formName"])) {
            $form_msg_mandatory__formName                   = $formSend_msg_error_data_nombreAp__formName;
            $form_msg_mandatory_classes__formName           = $form_msg_mandatory_errorClass__formName;
            $form_input_errorClass_data_nombreAp__formName    = "invalidField";
            $form_input_autofocus_data_nombreAp__formName      = "autofocus";
            
        } elseif (empty($_POST["data_nombreCo__formName"])) {
            $form_msg_mandatory__formName                   = $formSend_msg_error_data_nombreCo__formName;
            $form_msg_mandatory_classes__formName           = $form_msg_mandatory_errorClass__formName;
            $form_input_errorClass_data_nombreCo__formName   = "invalidField";
            $form_input_autofocus_data_nombreCo__formName     = "autofocus";
            
        } elseif (empty($_POST["data_username__formName"])) {
            $form_msg_mandatory__formName                   = $formSend_msg_error_data_username__formName;
            $form_msg_mandatory_classes__formName           = $form_msg_mandatory_errorClass__formName;
            $form_input_errorClass_data_username__formName     = "invalidField";
            $form_input_autofocus_data_username__formName       = "autofocus";
            
        } elseif (empty($_POST["data_dni__formName"])) {
            $form_msg_mandatory__formName                   = $formSend_msg_error_data_dni__formName;
            $form_msg_mandatory_classes__formName           = $form_msg_mandatory_errorClass__formName;
            $form_input_errorClass_data_dni__formName          = "invalidField";
            $form_input_autofocus_data_dni__formName            = "autofocus";
            
        } elseif (empty($_POST["data_direccion__formName"])) {
            $form_msg_mandatory__formName                   = $formSend_msg_error_data_direccion__formName;
            $form_msg_mandatory_classes__formName           = $form_msg_mandatory_errorClass__formName;
            $form_input_errorClass_data_direccion__formName    = "invalidField";
            $form_input_autofocus_data_direccion__formName      = "autofocus";
            
        } elseif (empty($_POST["data_domicilio__formName"])) {
            $form_msg_mandatory__formName                   = $formSend_msg_error_data_domicilio__formName;
            $form_msg_mandatory_classes__formName           = $form_msg_mandatory_errorClass__formName;
            $form_input_errorClass_data_domicilio__formName    = "invalidField";
            $form_input_autofocus_data_domicilio__formName      = "autofocus";
            
        } elseif (empty($_POST["data_localidad__formName"])) {
            $form_msg_mandatory__formName                   = $formSend_msg_error_data_localidad__formName;
            $form_msg_mandatory_classes__formName           = $form_msg_mandatory_errorClass__formName;
            $form_input_errorClass_data_localidad__formName    = "invalidField";
            $form_input_autofocus_data_localidad__formName      = "autofocus";
            
        } elseif (empty($_POST["data_codigoPostal__formName"])) {
            $form_msg_mandatory__formName                   = $formSend_msg_error_data_codigoPostal__formName;
            $form_msg_mandatory_classes__formName           = $form_msg_mandatory_errorClass__formName;
            $form_input_errorClass_data_codigoPostal__formName = "invalidField";
            $form_input_autofocus_data_codigoPostal__formName   = "autofocus";
            
        } elseif (empty($_POST["data_provincia__formName"])) {
            $form_msg_mandatory__formName                   = $formSend_msg_error_data_provincia__formName;
            $form_msg_mandatory_classes__formName           = $form_msg_mandatory_errorClass__formName;
            $form_input_errorClass_data_provincia__formName    = "invalidField";
            $form_input_autofocus_data_provincia__formName      = "autofocus";
            
        } elseif (empty($_POST["data_pais__formName"])) {
            $form_msg_mandatory__formName                   = $formSend_msg_error_data_pais__formName;
            $form_msg_mandatory_classes__formName           = $form_msg_mandatory_errorClass__formName;
            $form_input_errorClass_data_pais__formName         = "invalidField";
            $form_input_autofocus_data_pais__formName           = "autofocus";
            
        } elseif (empty($_POST["data_telefono__formName"])) {
            $form_msg_mandatory__formName                   = $formSend_msg_error_data_telefono__formName;
            $form_msg_mandatory_classes__formName           = $form_msg_mandatory_errorClass__formName;
            $form_input_errorClass_data_telefono__formName     = "invalidField";
            $form_input_autofocus_data_telefono__formName       = "autofocus";
            
        } elseif (empty($_POST["data_celular__formName"])) {
            $form_msg_mandatory__formName                   = $formSend_msg_error_data_celular__formName;
            $form_msg_mandatory_classes__formName           = $form_msg_mandatory_errorClass__formName;
            $form_input_errorClass_data_celular__formName     = "invalidField";
            $form_input_autofocus_data_celular__formName       = "autofocus";
            
        } elseif (empty($_POST["data_email__formName"])) {
            $form_msg_mandatory__formName                   = $formSend_msg_error_data_email__formName;
            $form_msg_mandatory_classes__formName           = $form_msg_mandatory_errorClass__formName;
            $form_input_errorClass_data_email__formName        = "invalidField";
            $form_input_autofocus_data_email__formName          = "autofocus";
            
        } elseif (empty($_POST["data_webSite__formName"])) {
            $form_msg_mandatory__formName                   = $formSend_msg_error_data_webSite__formName;
            $form_msg_mandatory_classes__formName           = $form_msg_mandatory_errorClass__formName;
            $form_input_errorClass_data_webSite__formName      = "invalidField";
            $form_input_autofocus_data_webSite__formName        = "autofocus";
            
        } elseif (empty($_POST["data_facebook__formName"])) {
            $form_msg_mandatory__formName                   = $formSend_msg_error_data_facebook__formName;
            $form_msg_mandatory_classes__formName           = $form_msg_mandatory_errorClass__formName;
            $form_input_errorClass_data_facebook__formName     = "invalidField";
            $form_input_autofocus_data_facebook__formName       = "autofocus";
            
        } elseif (empty($_POST["data_comoQueres__formName"])) {
            $form_msg_mandatory__formName                   = $formSend_msg_error_data_comoQueres__formName;
            $form_msg_mandatory_classes__formName           = $form_msg_mandatory_errorClass__formName;
            $form_input_errorClass_data_comoQueres__formName   = "invalidField";
            $form_input_autofocus_data_comoQueres__formName     = "autofocus";
            
        } elseif (empty($_POST["data_empresa__formName"])) {
            $form_msg_mandatory__formName                   = $formSend_msg_error_data_empresa__formName;
            $form_msg_mandatory_classes__formName           = $form_msg_mandatory_errorClass__formName;
            $form_input_errorClass_data_empresa__formName      = "invalidField";
            $form_input_autofocus_data_empresa__formName        = "autofocus";
            
        } elseif (empty($_POST["data_razonSocial__formName"])) {
            $form_msg_mandatory__formName                   = $formSend_msg_error_data_razonSocial__formName;
            $form_msg_mandatory_classes__formName           = $form_msg_mandatory_errorClass__formName;
            $form_input_errorClass_data_razonSocial__formName  = "invalidField";
            $form_input_autofocus_data_razonSocial__formName    = "autofocus";
            
        } elseif (empty($_POST["data_cargo__formName"])) {
            $form_msg_mandatory__formName                   = $formSend_msg_error_data_cargo__formName;
            $form_msg_mandatory_classes__formName           = $form_msg_mandatory_errorClass__formName;
            $form_input_errorClass_data_cargo__formName        = "invalidField";
            $form_input_autofocus_data_cargo__formName          = "autofocus";
            
        } elseif (empty($_POST["data_asunto__formName"])) {
            $form_msg_mandatory__formName                   = $formSend_msg_error_data_asunto__formName;
            $form_msg_mandatory_classes__formName           = $form_msg_mandatory_errorClass__formName;
            $form_input_errorClass_data_cargo__formName        = "invalidField";
            $form_input_autofocus_data_cargo__formName          = "autofocus";
            
        } elseif (empty($_POST["data_fecha__formName"])) {
            $form_msg_mandatory__formName                   = $formSend_msg_error_data_fecha__formName;
            $form_msg_mandatory_classes__formName           = $form_msg_mandatory_errorClass__formName;
            $form_input_errorClass_data_fecha__formName        = "invalidField";
            $form_input_autofocus_data_fecha__formName          = "autofocus";
            
        } elseif (empty($_POST["data_rubro__formName"])) {
            $form_msg_mandatory__formName                   = $formSend_msg_error_data_rubro__formName;
            $form_msg_mandatory_classes__formName           = $form_msg_mandatory_errorClass__formName;
            $form_input_errorClass_data_rubro__formName        = "invalidField";
            $form_input_autofocus_data_rubro__formName          = "autofocus";
            
        } elseif (empty($_POST["data_newsletter__formName"])) {
            $form_msg_mandatory__formName                   = $formSend_msg_error_data_newsletter__formName;
            $form_msg_mandatory_classes__formName           = $form_msg_mandatory_errorClass__formName;
            $form_input_errorClass_data_newsletter__formName   = "invalidField";
            $form_input_autofocus_data_newsletter__formName     = "autofocus";
            
        } elseif (empty($_POST["data_mensaje__formName"])) {
            $form_msg_mandatory__formName                   = $errordata_mensaje__formName;
            $form_msg_mandatory_classes__formName           = $form_msg_mandatory_errorClass__formName;
            $form_input_errorClass_data_mensaje__formName      = "invalidField";
            $form_input_autofocus_data_mensaje__formName        = "autofocus";
//FIN de validacion en div.msg_mandatory
                      
            
            
//INICIA VALIDACIÓN DEBAJO DE CADA INPUT
        if (empty($_POST["data_nombre__formName"])) {
            $form_label_msg_error_data_nombre__formName          = $formSend_msg_error_data_nombre__formName;
            $form_span_errorClass_data_nombre__formName        = "active";
            $form_input_errorClass_data_nombre__formName       = "invalidField";
            $form_input_autofocus_data_nombre__formName         = "autofocus";
                       
        } elseif (empty($_POST["data_apellido__formName"])) {
            $form_label_msg_error_data_apellido__formName        = $formSend_msg_error_data_apellido__formName;
            $form_span_errorClass_data_apellido__formName      = "active";
            $form_input_errorClass_data_apellido__formName     = "invalidField";
            $form_input_autofocus_data_apellido__formName       = "autofocus";
                       
        } elseif (empty($_POST["data_nombreAp__formName"])) {
            $form_label_msg_error_data_nombreAp__formName       = $formSend_msg_error_data_nombreAp__formName;
            $form_span_errorClass_data_nombreAp__formName     = "active";
            $form_input_errorClass_data_nombreAp__formName    = "invalidField";
            $form_input_autofocus_data_nombreAp__formName      = "autofocus";
                       
        } elseif (empty($_POST["data_nombreCo__formName"])) {
            $form_label_msg_error_data_nombreCo__formName      = $formSend_msg_error_data_nombreCo__formName;
            $form_span_errorClass_data_nombreCo__formName    = "active";
            $form_input_errorClass_data_nombreCo__formName   = "invalidField";
            $form_input_autofocus_data_nombreCo__formName     = "autofocus";
                       
        } elseif (empty($_POST["data_username__formName"])) {
            $form_label_msg_error_data_username__formName        = $formSend_msg_error_data_username__formName;
            $form_span_errorClass_data_username__formName      = "active";
            $form_input_errorClass_data_username__formName     = "invalidField";
            $form_input_autofocus_data_username__formName       = "autofocus";
                       
        } elseif (empty($_POST["data_dni__formName"])) {
            $form_label_msg_error_data_dni__formName             = $formSend_msg_error_data_dni__formName;
            $form_span_errorClass_data_dni__formName           = "active";
            $form_input_errorClass_data_dni__formName          = "invalidField";
            $form_input_autofocus_data_dni__formName            = "autofocus";
            
        } elseif (empty($_POST["data_direccion__formName"])) {
            $form_label_msg_error_data_direccion__formName       = $formSend_msg_error_data_direccion__formName;
            $form_span_errorClass_data_direccion__formName     = "active";
            $form_input_errorClass_data_direccion__formName    = "invalidField";
            $form_input_autofocus_data_direccion__formName      = "autofocus";
            
        } elseif (empty($_POST["data_domicilio__formName"])) {
            $form_label_msg_error_data_domicilio__formName       = $formSend_msg_error_data_domicilio__formName;
            $form_span_errorClass_data_domicilio__formName     = "active";
            $form_input_errorClass_data_domicilio__formName    = "invalidField";
            $form_input_autofocus_data_domicilio__formName      = "autofocus";
            
        } elseif (empty($_POST["data_localidad__formName"])) {
            $form_label_msg_error_data_localidad__formName       = $formSend_msg_error_data_localidad__formName;
            $form_span_errorClass_data_localidad__formName     = "active";
            $form_input_errorClass_data_localidad__formName    = "invalidField";
            $form_input_autofocus_data_localidad__formName      = "autofocus";
            
        } elseif (empty($_POST["data_codigoPostal__formName"])) {
            $form_label_msg_error_data_codigoPostal__formName    = $formSend_msg_error_data_codigoPostal__formName;
            $form_span_errorClass_data_codigoPostal__formName  = "active";
            $form_input_errorClass_data_codigoPostal__formName = "invalidField";
            $form_input_autofocus_data_codigoPostal__formName   = "autofocus";
            
        } elseif (empty($_POST["data_provincia__formName"])) {
            $form_label_msg_error_data_provincia__formName       = $formSend_msg_error_data_provincia__formName;
            $form_span_errorClass_data_provincia__formName     = "active";
            $form_input_errorClass_data_provincia__formName    = "invalidField";
            $form_input_autofocus_data_provincia__formName      = "autofocus";
            
        } elseif (empty($_POST["data_pais__formName"])) {
            $form_label_msg_error_data_pais__formName            = $formSend_msg_error_data_pais__formName;
            $form_span_errorClass_data_pais__formName          = "active";
            $form_input_errorClass_data_pais__formName         = "invalidField";
            $form_input_autofocus_data_pais__formName           = "autofocus";
            
        } elseif (empty($_POST["data_celular__formName"])) {
            $form_label_msg_error_data_celular__formName        = $formSend_msg_error_data_celular__formName;
            $form_span_errorClass_data_celular__formName      = "active";
            $form_input_errorClass_data_celular__formName     = "invalidField";
            $form_input_autofocus_data_celular__formName       = "autofocus";
            
        } elseif (empty($_POST["data_telefono__formName"])) {
            $form_label_msg_error_data_telefono__formName        = $formSend_msg_error_data_telefono__formName;
            $form_span_errorClass_data_telefono__formName      = "active";
            $form_input_errorClass_data_telefono__formName     = "invalidField";
            $form_input_autofocus_data_telefono__formName       = "autofocus";
            
        } elseif (empty($_POST["data_email__formName"])) {
            $form_label_msg_error_data_email__formName           = $formSend_msg_error_data_email__formName;
            $form_span_errorClass_data_email__formName         = "active";
            $form_input_errorClass_data_email__formName        = "invalidField";
            $form_input_autofocus_data_email__formName          = "autofocus";
            
        } elseif (empty($_POST["data_webSite__formName"])) {
            $form_label_msg_error_data_webSite__formName         = $formSend_msg_error_data_webSite__formName;
            $form_span_errorClass_data_webSite__formName       = "active";
            $form_input_errorClass_data_webSite__formName      = "invalidField";
            $form_input_autofocus_data_webSite__formName        = "autofocus";
            
        } elseif (empty($_POST["data_facebook__formName"])) {
            $form_label_msg_error_data_facebook__formName        = $formSend_msg_error_data_facebook__formName;
            $form_span_errorClass_data_facebook__formName      = "active";
            $form_input_errorClass_data_facebook__formName     = "invalidField";
            $form_input_autofocus_data_facebook__formName       = "autofocus";
            
        } elseif (empty($_POST["data_empresa__formName"])) {
            $form_label_msg_error_data_empresa__formName         = $formSend_msg_error_data_empresa__formName;
            $form_span_errorClass_data_empresa__formName       = "active";
            $form_input_errorClass_data_empresa__formName      = "invalidField";
            $form_input_autofocus_data_empresa__formName        = "autofocus";
            
        } elseif (empty($_POST["data_razonSocial__formName"])) {
            $form_label_msg_error_data_razonSocial__formName     = $formSend_msg_error_data_razonSocial__formName;
            $form_span_errorClass_data_razonSocial__formName   = "active";
            $form_input_errorClass_data_razonSocial__formName  = "invalidField";
            $form_input_autofocus_data_razonSocial__formName    = "autofocus";
            
        } elseif (empty($_POST["data_cargo__formName"])) {
            $form_label_msg_error_data_cargo__formName           = $formSend_msg_error_data_cargo__formName;
            $form_span_errorClass_data_cargo__formName         = "active";
            $form_input_errorClass_data_cargo__formName        = "invalidField";
            $form_input_autofocus_data_cargo__formName          = "autofocus";
            
        } elseif (empty($_POST["data_fecha__formName"])) {
            $form_label_msg_error_data_fecha__formName           = $formSend_msg_error_data_fecha__formName;
            $form_span_errorClass_data_fecha__formName         = "active";
            $form_input_errorClass_data_fecha__formName        = "invalidField";
            $form_input_autofocus_data_fecha__formName          = "autofocus";
            
        } elseif (empty($_POST["data_cantidad__formName"])) {
            $form_label_msg_error_data_cantidad__formName        = $formSend_msg_error_data_cantidad__formName;
            $form_span_errorClass_data_cantidad__formName      = "active";
            $form_input_errorClass_data_cantidad__formName     = "invalidField";
            $form_input_autofocus_data_cantidad__formName       = "autofocus";
            
        } elseif (empty($_POST["data_rubro__formName"])) {
            $form_label_msg_error_data_rubro__formName           = $formSend_msg_error_data_rubro__formName;
            $form_span_errorClass_data_rubro__formName         = "active";
            $form_input_errorClass_data_rubro__formName        = "invalidField";
            $form_input_autofocus_data_rubro__formName          = "autofocus";
            
        } elseif (empty($_POST["data_comoQueres__formName"])) {
            $form_label_msg_error_data_comoQueres__formName      = $formSend_msg_error_data_comoQueres__formName;
            $form_span_errorClass_data_comoQueres__formName    = "active";
            $form_input_errorClass_data_comoQueres__formName   = "invalidField";
            $form_input_autofocus_data_comoQueres__formName     = "autofocus";
            
        } elseif (empty($_POST["data_asunto__formName"])) {
            $form_label_msg_error_data_asunto__formName          = $formSend_msg_error_data_asunto__formName;
            $form_span_errorClass_data_asunto__formName        = "active";
            $form_input_errorClass_data_asunto__formName       = "invalidField";
            $form_input_autofocus_data_asunto__formName         = "autofocus";
            
        } elseif (empty($_POST["data_area__formName"])) {
            $form_label_msg_error_data_area__formName            = $formSend_msg_error_data_area__formName;
            $form_span_errorClass_data_area__formName          = "active";
            $form_input_errorClass_data_area__formName         = "invalidField";
            // $form_input_autofocus_data_area__formName          = "autofocus";
            
        } elseif (empty($_POST["data_mensaje__formName"])) {
            $form_label_msg_error_data_mensaje__formName         = $formSend_msg_error_data_mensaje__formName;
            $form_span_errorClass_data_mensaje__formName       = "active";
            $form_input_errorClass_data_mensaje__formName      = "invalidField";
            $form_input_autofocus_data_mensaje__formName        = "autofocus";
//FIN de validacion debajo de cada input
            
            
                        
        } else {
    //--------------------------------------------------------------------------
    // Si todos los campos validan se env&iacute;a el correo
            if(mail($formMail_recipient, $formMail_asunto, $formMail_texto, $formMail_headers)){

            //Redirect
            //echo '<META HTTP-EQUIV="Refresh" Content="0;URL=http://www.sitioweb.com/gracias.php">';
                
//INICIA MENSAJE OK EN $form_status_msg_
                $form_status_msg__formName = '<p class="status ok" role="alert">'._("$form_status_msg_OK_globalA__formName").' '._("$form_status_msg_OK_globalB__formName").'</p>';
                $form_msg_mandatory_classes__formName = 'displayNone';
//FIN mensaje ok en $form_status_msg_
                
//INICIA MENSAJE OK EN POPUP
                $form_status_msg_pop__formName = '<div class="pop_general pop_warning pop_formStatus borderBox pal" role="alertdialog" aria-labelledby="formOK">'
                        . '<div role="document" tabindex="0">'
                        . '<button type="submit" class="button_pop_close pAbs hover_grow_S_ani indentedText">'._("Cerrar").'</button>'
                        . '<h2 id="formOK" class="'. $formPop_h2_ok_classes__formName .'">'._("$form_status_msg_OK_globalA__formName").'</h2>'
                        . '<p>'._("$form_status_msg_OK_globalB__formName").'</p>'
                        . '<button type="submit" class="button_pop_submit bgWhite mtl mha arial bold black alignCenter upperCase">'._("OK").'</button>'
                        . '</div>'
                        . '</div>'
                        . '<div class="modal_bg_global modal_formStatus"></div>';
                $form_msg_mandatory_classes__formName = 'displayNone';
                $form_status_msg__formName = '';
//FIN mensaje ok en popup
                
    //--------------------------------------------------------------------------
    // Si el envio fue exitoso reseteamos lo que el usuario escribi&oacute;:
                $_POST['data_nombre__formName']       = '';
                $_POST['data_apellido__formName']     = '';
                $_POST['data_nombreAp__formName']    = '';     
                $_POST['data_nombreCo__formName']   = '';               
                $_POST['data_genero__formName']       = '';
                $_POST['data_direccion__formName']    = '';
                $_POST['data_domicilio__formName']    = '';
                $_POST['data_localidad__formName']    = '';
                $_POST['data_codigoPostal__formName'] = '';
                $_POST['data_provincia__formName']    = '';
                $_POST['data_pais__formName']         = '';
                $_POST['data_fecha__formName']        = '';
                $_POST['data_email__formName']        = '';
                $_POST['data_webSite__formName']      = '';
                $_POST['data_facebook__formName']     = '';
                $_POST['data_telefono__formName']     = '';
                $_POST['data_celular__formName']      = '';
                $_POST['data_empresa__formName']      = '';
                $_POST['data_razonSocial__formName']  = '';
                $_POST['data_cargo__formName']        = '';
                $_POST['data_rubro__formName']        = '';
                $_POST['data_comoQueres__formName']   = '';
                $_POST['data_asunto__formName']       = '';
                $_POST['data_mensaje__formName']      = '';

            } else {
//INICIA MENSAJE ERROR EN $form_status_msg_
                $form_status_msg__formName = '<p class="status error" role="alert">'._("$form_status_msg_error_globalA__formName").' <span class="displayBlock">'._("$form_status_msg_error_globalB__formName").'</span></p>';
                $form_msg_mandatory_classes__formName = 'displayNone';
//FIN mensaje error en $form_status_msg_
                
//INICIA MENSAJE ERROR EN POPUP
                $form_status_msg_pop__formName = '<div class="pop_general pop_warning pop_formStatus borderBox pal" role="alertdialog" aria-labelledby="formError">'
                        . '<div role="document" tabindex="0">'
                        . '<button type="submit" class="button_pop_close pAbs hover_grow_S_ani indentedText">'._("Cerrar").'</button>'
                        . '<h2 id="formError" class="'. $formPop_h2_error_classes__formName .'">'._("$form_status_msg_error_globalA__formName").'</h2>'
                        . '<p>'._("$form_status_msg_error_globalB__formName").'</p>'
                        . '<p>'._("$form_status_msg_error_globalC__formName").'</p>'
                        . '<button type="submit" class="button_pop_submit bgWhite mtl mha arial bold black alignCenter upperCase">'._("OK").'</button>'
                        . '</div>'
                        . '</div>'
                        . '<div class="modal_bg_global modal_formStatus"></div>';
                $form_msg_mandatory_classes__formName = 'displayNone';
                $form_status_msg__formName = '';
//FIN mensaje error en popup
            }
        }
    }
?>