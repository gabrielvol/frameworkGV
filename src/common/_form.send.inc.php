<?php
    //--------------------------------------------------------------------------
    // Fuentes de título de pop
    $formPop_h2_ok_classes__formMain    = 'mbm greenSystem alignCenter';
    $formPop_h2_error_classes__formMain = 'mbm errorColour alignCenter';
    $formPop_anchor_classes__formMain   = 'mbm alignCenter';
    
    
    //--------------------------------------------------------------------------
    // Mandatory message
    $form_msg_mandatory__formMain           = '';
    $form_msg_mandatory_classes__formMain   = 'displayNone';
    
    
    //--------------------------------------------------------------------------
    // Status global
    $form_status_msg_ini_globalA__formMain     = _('Complete el formulario por favor.');
    $form_status_msg_ini_globalB__formMain     = _('Nos comunicaremos con Ud. a la brevedad.');
    $form_status_msg_ini_global__formMain      = $form_status_msg_ini_globalA__formMain ." ". $form_status_msg_ini_globalB__formMain;
    
    $form_status_msg_OK_globalA__formMain      = _('Env&iacute;o exitoso.');
    $form_status_msg_OK_globalB__formMain      = _('Los datos se han enviado correctamente, nos comunicaremos a la brevedad. Muchas Gracias.');
    
    $form_status_msg_error_globalA__formMain   = _('Hubo un error al enviar el mensaje.');
    $form_status_msg_error_globalB__formMain   = _('Intente nuevamente m&aacute;s tarde.');
    $form_status_msg_error_globalC__formMain   = _('Puede comunicarse enviando un mensaje por correo electr&oacute;nico a') . ' <a href="'. $form_status_msg_error_recipient_mailto__formMain .'" class="'. $formPop_anchor_classes__formMain .'">'. $form_status_msg_error_recipient__formMain .'</a>.';
    
    
    //--------------------------------------------------------------------------
    // Status ini
//    $form_status_msg__formMain = '<p class="form_status ini">'. $form_status_msg_ini_global__formMain .'</p>';
        
        
    //--------------------------------------------------------------------------
    // Inicia proceso de form
    if (isset($_POST['button_form_submit__formMain'])){
//        ini_set('sendmail_from', 'tampas@gmail.com');
//        ini_set('SMTP','mail.dominio.com');
        
//        ini_set('sendmail_from', $form_recipient__formMain);
//        ini_set('SMTP','mail.'. $domain_global);

        // Asignamos datos de campos a variables
        $data_nombre__formMain          = $_POST['data_nombre__formMain'];
        $data_apellido__formMain        = $_POST['data_apellido__formMain'];
        $data_nombreAp__formMain        = $_POST['data_nombreAp__formMain'];
        $data_nombreCo__formMain        = $_POST['data_nombreCo__formMain'];
        $data_username__formMain        = $_POST['data_username__formMain'];
        $data_cantidad__formMain        = $_POST['data_cantidad__formMain'];
        
        $data_genero__formMain          = $_POST['data_genero__formMain'];
        $data_dni__formMain             = $_POST['data_dni__formMain'];
        $data_fecha__formMain           = $_POST['data_fecha__formMain'];
        
        $data_direccion__formMain       = $_POST['data_direccion__formMain'];
        $data_domicilio__formMain       = $_POST['data_domicilio__formMain'];
        $data_localidad__formMain       = $_POST['data_localidad__formMain'];
        $data_codigoPostal__formMain    = $_POST['data_codigoPostal__formMain'];
        $data_provincia__formMain       = $_POST['data_provincia__formMain'];
        $data_pais__formMain            = $_POST['data_pais__formMain'];
        
        $data_email__formMain           = $_POST['data_email__formMain'];
        $data_telefono__formMain        = $_POST['data_telefono__formMain'];
        $data_celular__formMain         = $_POST['data_celular__formMain'];
        
        $data_webSite__formMain         = $_POST['data_webSite__formMain'];
        $data_facebook__formMain        = $_POST['data_facebook__formMain'];
        $data_instagram__formMain       = $_POST['data_instagram__formMain'];  
        $data_comoQueres__formMain      = $_POST['data_comoQueres__formMain'];        
        
        $data_empresa__formMain         = $_POST['data_empresa__formMain'];
        $data_razonSocial__formMain     = $_POST['data_razonSocial__formMain'];
        $data_cargo__formMain           = $_POST['data_cargo__formMain'];
        $data_rubro__formMain           = $_POST['data_rubro__formMain'];
        
        $data_asunto__formMain          = $_POST['data_asunto__formMain'];
        $data_area__formMain            = $_POST['data_area__formMain'];
        $data_mensaje__formMain         = $_POST['data_mensaje__formMain'];

        // Cabeceras del correo
        $formMail_recipient  = $form_recipient__formMain;
        // $formMail_recipient  = $data_area__formMain;
        $formMail_asunto   = "Contacto Web de ". $data_nombre__formMain ." - ". $data_empresa__formMain;
        $formMail_headers  = "From: $data_nombre__formMain <$data_email__formMain>\r\n";
        //$formMail_headers .= "Reply-To: $data_email__formMain \r\n";
        $formMail_headers .= "Content-type: text/html\r\n";
        $formMail_headers .= "X-Mailer: PHP5\n";
        $formMail_headers .= 'MIME-Version: 1.0' . "\n";
        //$formMail_headers .= "CC: ". $form_recipient_CC__formMain ."\r\n";
        //$formMail_headers .= "BCC: ". $form_recipient_BCC__formMain ."\r\n";
        $formMail_texto  = '<small style="color:#666">Este mensaje fue enviado desde el formulario que se encuentra en '. $url_contacto_full .'</small><br /><br />';
        $formMail_texto .= "<strong>Nombre:</strong> ". $data_nombre__formMain ."<br />";
        $formMail_texto .= "<strong>Apellido:</strong> ". $data_apellido__formMain ."<br />";
        $formMail_texto .= "<strong>Nombre y apellido:</strong> ". $data_nombreAp__formMain ."<br />";
        $formMail_texto .= "<strong>Nombre completo:</strong> ". $data_nombreCo__formMain ."<br />";
        $formMail_texto .= "<strong>Nombre de usuario:</strong> ". $data_username__formMain ."<br />";
        $formMail_texto .= "<strong>Direcci&oacute;n:</strong> ". $data_direccion__formMain ."<br />";
        $formMail_texto .= "<strong>Domicilio:</strong> ". $data_domicilio__formMain ."<br />";
        $formMail_texto .= "<strong>Sexo:</strong> ". $data_genero__formMain ."<br />";
        $formMail_texto .= "<strong>Cantidad:</strong> ". $data_cantidad__formMain ."<br />";
        $formMail_texto .= "<strong>DNI:</strong> ". $data_dni__formMain ."<br />";
        $formMail_texto .= "<strong>C&oacute;digo postal:</strong> ". $data_codigoPostal__formMain ."<br />";
        $formMail_texto .= "<strong>Localidad:</strong> ". $data_localidad__formMain ."<br />";
        $formMail_texto .= "<strong>Provincia:</strong> ". $data_provincia__formMain ."<br />";
        $formMail_texto .= "<strong>Pa&iacute;s:</strong> ". $data_pais__formMain ."<br />";
        $formMail_texto .= "<strong>Fecha:</strong> ". $data_fecha__formMain ."<br />";
        $formMail_texto .= '<strong>Correo electr&oacute;nico:</strong> '. $data_email__formMain ."<br />";
        $formMail_texto .= '<strong>Correo electr&oacute;nico:</strong> <a mailto="'. $data_email__formMain .'">'. $data_email__formMain ."</a><br />";
        $formMail_texto .= "<strong>Sitio web:</strong> ". $data_webSite__formMain ."<br />";
        $formMail_texto .= "<strong>Perfil de Facebook:</strong> ". $data_facebook__formMain ."<br />";
        $formMail_texto .= '<strong>Perfil de Instagram:</strong> <a href="https://www.instagram.com/'. $data_instagram__formMain .'">'. $data_instagram__formMain ."</a><br />";
        $formMail_texto .= "<strong>Tel&eacute;fono:</strong> ". $data_telefono__formMain ."<br />";
        $formMail_texto .= "<strong>Celular:</strong> ". $data_celular ."<br />";
        $formMail_texto .= "<strong>Empresa:</strong> ". $data_empresa__formMain ."<br />";
        $formMail_texto .= "<strong>Raz&oacute;n Social:</strong> ". $data_razonSocial__formMain ."<br />";
        $formMail_texto .= "<strong>Cargo:</strong> ". $data_cargo__formMain ."<br />";
        $formMail_texto .= "<strong>Asunto:</strong> ". $data_asunto__formMain ."<br />";
        $formMail_texto .= "<strong>&iquest;C&oacute;mo quer&eacute;s que te contactemos?:</strong> ". $data_comoQueres__formMain ."<br />";
        $formMail_texto .= "<strong>Rubro:</strong> ". $data_rubro__formMain ."<br />";
        $formMail_texto .= "<br /><strong>Mensaje:</strong><br />". $data_mensaje__formMain;
        $formMail_texto .= '<br /><br />______<br /><small style="color:#666">Fin del mensaje</small>';
        
        
    //--------------------------------------------------------------------------
    // Variables Globales de Error
        $form_msg_mandatory_errorClass__formMain        = " msg_mandatory_invalid";
        $formSend_msg_error_data_nombre__formMain       = _("Por favor, ingrese su nombre.");
        $formSend_msg_error_data_apellido__formMain     = _("Por favor, ingrese su apellido.");
        $formSend_msg_error_data_nombreAp__formMain     = _("Por favor, ingrese su nombre y apellido.");
        $formSend_msg_error_data_nombreCo__formMain     = _("Por favor, ingrese su nombre completo.");
        $formSend_msg_error_data_username__formMain     = _("Por favor, ingrese un nombre de usuario.");
        $formSend_msg_error_data_cantidad__formMain     = _("Por favor, ingrese una cantidad.");
        
        $formSend_msg_error_data_direccion__formMain    = _("Por favor, ingrese su direcci&oacute;n.");
        $formSend_msg_error_data_domicilio__formMain    = _("Por favor, ingrese su domicilio.");
        $formSend_msg_error_data_localidad__formMain    = _("Por favor, ingrese su localidad.");
        $formSend_msg_error_data_codigoPostal__formMain = _("Por favor, ingrese su c&oacute;digo postal."); 
        $formSend_msg_error_data_provincia__formMain    = _("Por favor, ingrese su provincia.");
        $formSend_msg_error_data_pais__formMain         = _("Por favor, ingrese su pa&iacute;s.");
        
        $formSend_msg_error_data_fecha__formMain        = _("Por favor, indique la fecha deseada.");
        $formSend_msg_error_data_dni__formMain          = _("Por favor, ingrese su n&uacute;mero de DNI.");
        
        $formSend_msg_error_data_email__formMain        = _("Por favor, ingrese una direcci&oacute;n de correo v&aacute;lida."); 
        $formSend_msg_error_data_telefono__formMain     = _("Por favor, ingrese su n&uacute;mero de tel&eacute;fono."); 
        $formSend_msg_error_data_celular__formMain      = _("Por favor, ingrese su n&uacute;mero de celular."); 
        
        $formSend_msg_error_data_webSite__formMain      = _("Por favor, ingrese su sitio web.");
        $formSend_msg_error_data_facebook__formMain     = _("Por favor, ingrese su perfil de Facebook.");
        $formSend_msg_error_data_instagram__formMain    = _("Por favor, ingrese su perfil de Instagram.");
        $formSend_msg_error_data_comoQueres__formMain   = _("Por favor, indique un medio de contacto.");
        
        $formSend_msg_error_data_empresa__formMain      = _("Por favor, ingrese el nombre de su empresa.");
        $formSend_msg_error_data_razonSocial__formMain  = _("Por favor, ingrese su raz&oacute;n social.");
        $formSend_msg_error_data_cargo__formMain        = _("Por favor, ingrese su cargo.");
        $formSend_msg_error_data_rubro__formMain        = _("Por favor, ingrese un rubro.");
        $formSend_msg_error_data_asunto__formMain       = _("Por favor, ingrese un asunto.");
        
        $formSend_msg_error_data_area__formMain         = _("Por favor, elija un área de contacto.");        
        $formSend_msg_error_data_newsletter__formMain   = _("Por favor, elija una opci&oacute;n.");
        $formSend_msg_error_data_mensaje__formMain      = _("Por favor, complete su mensaje.");

        
            
//INICIA VALIDACIÓN EN div.msg_mandatory
        if (empty($_POST["data_nombre__formMain"])) {
            $form_msg_mandatory__formMain                 = $formSend_msg_error_data_nombre__formMain;
            $form_msg_mandatory_classes__formMain         = $form_msg_mandatory_errorClass__formMain;
            $form_input_errorClass_data_nombre__formMain  = "invalidField";
            $form_input_autofocus_data_nombre__formMain   = "autofocus";
            
        } elseif (empty($_POST["data_apellido__formMain"])) {
            $form_msg_mandatory__formMain                   = $formSend_msg_error_data_apellido__formMain;
            $form_msg_mandatory_classes__formMain           = $form_msg_mandatory_errorClass__formMain;
            $form_input_errorClass_data_apellido__formMain  = "invalidField";
            $form_input_autofocus_data_apellido__formMain   = "autofocus";
            
        } elseif (empty($_POST["data_nombreAp__formMain"])) {
            $form_msg_mandatory__formMain                   = $formSend_msg_error_data_nombreAp__formMain;
            $form_msg_mandatory_classes__formMain           = $form_msg_mandatory_errorClass__formMain;
            $form_input_errorClass_data_nombreAp__formMain  = "invalidField";
            $form_input_autofocus_data_nombreAp__formMain   = "autofocus";
            
        } elseif (empty($_POST["data_nombreCo__formMain"])) {
            $form_msg_mandatory__formMain                   = $formSend_msg_error_data_nombreCo__formMain;
            $form_msg_mandatory_classes__formMain           = $form_msg_mandatory_errorClass__formMain;
            $form_input_errorClass_data_nombreCo__formMain  = "invalidField";
            $form_input_autofocus_data_nombreCo__formMain   = "autofocus";
            
        } elseif (empty($_POST["data_username__formMain"])) {
            $form_msg_mandatory__formMain                   = $formSend_msg_error_data_username__formMain;
            $form_msg_mandatory_classes__formMain           = $form_msg_mandatory_errorClass__formMain;
            $form_input_errorClass_data_username__formMain  = "invalidField";
            $form_input_autofocus_data_username__formMain   = "autofocus";
            
        } elseif (empty($_POST["data_dni__formMain"])) {
            $form_msg_mandatory__formMain                   = $formSend_msg_error_data_dni__formMain;
            $form_msg_mandatory_classes__formMain           = $form_msg_mandatory_errorClass__formMain;
            $form_input_errorClass_data_dni__formMain       = "invalidField";
            $form_input_autofocus_data_dni__formMain        = "autofocus";
            
        } elseif (empty($_POST["data_direccion__formMain"])) {
            $form_msg_mandatory__formMain                   = $formSend_msg_error_data_direccion__formMain;
            $form_msg_mandatory_classes__formMain           = $form_msg_mandatory_errorClass__formMain;
            $form_input_errorClass_data_direccion__formMain = "invalidField";
            $form_input_autofocus_data_direccion__formMain  = "autofocus";
            
        } elseif (empty($_POST["data_domicilio__formMain"])) {
            $form_msg_mandatory__formMain                   = $formSend_msg_error_data_domicilio__formMain;
            $form_msg_mandatory_classes__formMain           = $form_msg_mandatory_errorClass__formMain;
            $form_input_errorClass_data_domicilio__formMain = "invalidField";
            $form_input_autofocus_data_domicilio__formMain  = "autofocus";
            
        } elseif (empty($_POST["data_localidad__formMain"])) {
            $form_msg_mandatory__formMain                   = $formSend_msg_error_data_localidad__formMain;
            $form_msg_mandatory_classes__formMain           = $form_msg_mandatory_errorClass__formMain;
            $form_input_errorClass_data_localidad__formMain = "invalidField";
            $form_input_autofocus_data_localidad__formMain  = "autofocus";
            
        } elseif (empty($_POST["data_codigoPostal__formMain"])) {
            $form_msg_mandatory__formMain                       = $formSend_msg_error_data_codigoPostal__formMain;
            $form_msg_mandatory_classes__formMain               = $form_msg_mandatory_errorClass__formMain;
            $form_input_errorClass_data_codigoPostal__formMain  = "invalidField";
            $form_input_autofocus_data_codigoPostal__formMain   = "autofocus";
            
        } elseif (empty($_POST["data_provincia__formMain"])) {
            $form_msg_mandatory__formMain                   = $formSend_msg_error_data_provincia__formMain;
            $form_msg_mandatory_classes__formMain           = $form_msg_mandatory_errorClass__formMain;
            $form_input_errorClass_data_provincia__formMain = "invalidField";
            $form_input_autofocus_data_provincia__formMain  = "autofocus";
            
        } elseif (empty($_POST["data_pais__formMain"])) {
            $form_msg_mandatory__formMain                   = $formSend_msg_error_data_pais__formMain;
            $form_msg_mandatory_classes__formMain           = $form_msg_mandatory_errorClass__formMain;
            $form_input_errorClass_data_pais__formMain      = "invalidField";
            $form_input_autofocus_data_pais__formMain       = "autofocus";
            
        } elseif (empty($_POST["data_telefono__formMain"])) {
            $form_msg_mandatory__formMain                   = $formSend_msg_error_data_telefono__formMain;
            $form_msg_mandatory_classes__formMain           = $form_msg_mandatory_errorClass__formMain;
            $form_input_errorClass_data_telefono__formMain  = "invalidField";
            $form_input_autofocus_data_telefono__formMain   = "autofocus";
            
        } elseif (empty($_POST["data_celular__formMain"])) {
            $form_msg_mandatory__formMain                   = $formSend_msg_error_data_celular__formMain;
            $form_msg_mandatory_classes__formMain           = $form_msg_mandatory_errorClass__formMain;
            $form_input_errorClass_data_celular__formMain   = "invalidField";
            $form_input_autofocus_data_celular__formMain    = "autofocus";
            
        } elseif (empty($_POST["data_email__formMain"])) {
            $form_msg_mandatory__formMain                   = $formSend_msg_error_data_email__formMain;
            $form_msg_mandatory_classes__formMain           = $form_msg_mandatory_errorClass__formMain;
            $form_input_errorClass_data_email__formMain     = "invalidField";
            $form_input_autofocus_data_email__formMain      = "autofocus";
            
        } elseif (empty($_POST["data_webSite__formMain"])) {
            $form_msg_mandatory__formMain                   = $formSend_msg_error_data_webSite__formMain;
            $form_msg_mandatory_classes__formMain           = $form_msg_mandatory_errorClass__formMain;
            $form_input_errorClass_data_webSite__formMain   = "invalidField";
            $form_input_autofocus_data_webSite__formMain    = "autofocus";
            
        } elseif (empty($_POST["data_facebook__formMain"])) {
            $form_msg_mandatory__formMain                   = $formSend_msg_error_data_facebook__formMain;
            $form_msg_mandatory_classes__formMain           = $form_msg_mandatory_errorClass__formMain;
            $form_input_errorClass_data_facebook__formMain  = "invalidField";
            $form_input_autofocus_data_facebook__formMain   = "autofocus";
            
        } elseif (empty($_POST["data_comoQueres__formMain"])) {
            $form_msg_mandatory__formMain                   = $formSend_msg_error_data_comoQueres__formMain;
            $form_msg_mandatory_classes__formMain           = $form_msg_mandatory_errorClass__formMain;
            $form_input_errorClass_data_comoQueres__formMain   = "invalidField";
            $form_input_autofocus_data_comoQueres__formMain     = "autofocus";
            
        } elseif (empty($_POST["data_empresa__formMain"])) {
            $form_msg_mandatory__formMain                   = $formSend_msg_error_data_empresa__formMain;
            $form_msg_mandatory_classes__formMain           = $form_msg_mandatory_errorClass__formMain;
            $form_input_errorClass_data_empresa__formMain      = "invalidField";
            $form_input_autofocus_data_empresa__formMain        = "autofocus";
            
        } elseif (empty($_POST["data_razonSocial__formMain"])) {
            $form_msg_mandatory__formMain                   = $formSend_msg_error_data_razonSocial__formMain;
            $form_msg_mandatory_classes__formMain           = $form_msg_mandatory_errorClass__formMain;
            $form_input_errorClass_data_razonSocial__formMain  = "invalidField";
            $form_input_autofocus_data_razonSocial__formMain    = "autofocus";
            
        } elseif (empty($_POST["data_cargo__formMain"])) {
            $form_msg_mandatory__formMain                   = $formSend_msg_error_data_cargo__formMain;
            $form_msg_mandatory_classes__formMain           = $form_msg_mandatory_errorClass__formMain;
            $form_input_errorClass_data_cargo__formMain        = "invalidField";
            $form_input_autofocus_data_cargo__formMain          = "autofocus";
            
        } elseif (empty($_POST["data_asunto__formMain"])) {
            $form_msg_mandatory__formMain                   = $formSend_msg_error_data_asunto__formMain;
            $form_msg_mandatory_classes__formMain           = $form_msg_mandatory_errorClass__formMain;
            $form_input_errorClass_data_cargo__formMain        = "invalidField";
            $form_input_autofocus_data_cargo__formMain          = "autofocus";
            
        } elseif (empty($_POST["data_fecha__formMain"])) {
            $form_msg_mandatory__formMain                   = $formSend_msg_error_data_fecha__formMain;
            $form_msg_mandatory_classes__formMain           = $form_msg_mandatory_errorClass__formMain;
            $form_input_errorClass_data_fecha__formMain        = "invalidField";
            $form_input_autofocus_data_fecha__formMain          = "autofocus";
            
        } elseif (empty($_POST["data_rubro__formMain"])) {
            $form_msg_mandatory__formMain                   = $formSend_msg_error_data_rubro__formMain;
            $form_msg_mandatory_classes__formMain           = $form_msg_mandatory_errorClass__formMain;
            $form_input_errorClass_data_rubro__formMain        = "invalidField";
            $form_input_autofocus_data_rubro__formMain          = "autofocus";
            
        } elseif (empty($_POST["data_newsletter__formMain"])) {
            $form_msg_mandatory__formMain                   = $formSend_msg_error_data_newsletter__formMain;
            $form_msg_mandatory_classes__formMain           = $form_msg_mandatory_errorClass__formMain;
            $form_input_errorClass_data_newsletter__formMain   = "invalidField";
            $form_input_autofocus_data_newsletter__formMain     = "autofocus";
            
        } elseif (empty($_POST["data_mensaje__formMain"])) {
            $form_msg_mandatory__formMain                   = $errordata_mensaje__formMain;
            $form_msg_mandatory_classes__formMain           = $form_msg_mandatory_errorClass__formMain;
            $form_input_errorClass_data_mensaje__formMain      = "invalidField";
            $form_input_autofocus_data_mensaje__formMain        = "autofocus";
//FIN de validacion en div.msg_mandatory
                      
            
            
//INICIA VALIDACIÓN DEBAJO DE CADA INPUT
        if (empty($_POST["data_nombre__formMain"])) {
            $form_label_msg_error_data_nombre__formMain          = $formSend_msg_error_data_nombre__formMain;
            $form_span_errorClass_data_nombre__formMain        = "active";
            $form_input_errorClass_data_nombre__formMain       = "invalidField";
            $form_input_autofocus_data_nombre__formMain         = "autofocus";
                       
        } elseif (empty($_POST["data_apellido__formMain"])) {
            $form_label_msg_error_data_apellido__formMain        = $formSend_msg_error_data_apellido__formMain;
            $form_span_errorClass_data_apellido__formMain      = "active";
            $form_input_errorClass_data_apellido__formMain     = "invalidField";
            $form_input_autofocus_data_apellido__formMain       = "autofocus";
                       
        } elseif (empty($_POST["data_nombreAp__formMain"])) {
            $form_label_msg_error_data_nombreAp__formMain       = $formSend_msg_error_data_nombreAp__formMain;
            $form_span_errorClass_data_nombreAp__formMain     = "active";
            $form_input_errorClass_data_nombreAp__formMain    = "invalidField";
            $form_input_autofocus_data_nombreAp__formMain      = "autofocus";
                       
        } elseif (empty($_POST["data_nombreCo__formMain"])) {
            $form_label_msg_error_data_nombreCo__formMain      = $formSend_msg_error_data_nombreCo__formMain;
            $form_span_errorClass_data_nombreCo__formMain    = "active";
            $form_input_errorClass_data_nombreCo__formMain   = "invalidField";
            $form_input_autofocus_data_nombreCo__formMain     = "autofocus";
                       
        } elseif (empty($_POST["data_username__formMain"])) {
            $form_label_msg_error_data_username__formMain        = $formSend_msg_error_data_username__formMain;
            $form_span_errorClass_data_username__formMain      = "active";
            $form_input_errorClass_data_username__formMain     = "invalidField";
            $form_input_autofocus_data_username__formMain       = "autofocus";
                       
        } elseif (empty($_POST["data_dni__formMain"])) {
            $form_label_msg_error_data_dni__formMain             = $formSend_msg_error_data_dni__formMain;
            $form_span_errorClass_data_dni__formMain           = "active";
            $form_input_errorClass_data_dni__formMain          = "invalidField";
            $form_input_autofocus_data_dni__formMain            = "autofocus";
            
        } elseif (empty($_POST["data_direccion__formMain"])) {
            $form_label_msg_error_data_direccion__formMain       = $formSend_msg_error_data_direccion__formMain;
            $form_span_errorClass_data_direccion__formMain     = "active";
            $form_input_errorClass_data_direccion__formMain    = "invalidField";
            $form_input_autofocus_data_direccion__formMain      = "autofocus";
            
        } elseif (empty($_POST["data_domicilio__formMain"])) {
            $form_label_msg_error_data_domicilio__formMain       = $formSend_msg_error_data_domicilio__formMain;
            $form_span_errorClass_data_domicilio__formMain     = "active";
            $form_input_errorClass_data_domicilio__formMain    = "invalidField";
            $form_input_autofocus_data_domicilio__formMain      = "autofocus";
            
        } elseif (empty($_POST["data_localidad__formMain"])) {
            $form_label_msg_error_data_localidad__formMain       = $formSend_msg_error_data_localidad__formMain;
            $form_span_errorClass_data_localidad__formMain     = "active";
            $form_input_errorClass_data_localidad__formMain    = "invalidField";
            $form_input_autofocus_data_localidad__formMain      = "autofocus";
            
        } elseif (empty($_POST["data_codigoPostal__formMain"])) {
            $form_label_msg_error_data_codigoPostal__formMain    = $formSend_msg_error_data_codigoPostal__formMain;
            $form_span_errorClass_data_codigoPostal__formMain  = "active";
            $form_input_errorClass_data_codigoPostal__formMain = "invalidField";
            $form_input_autofocus_data_codigoPostal__formMain   = "autofocus";
            
        } elseif (empty($_POST["data_provincia__formMain"])) {
            $form_label_msg_error_data_provincia__formMain       = $formSend_msg_error_data_provincia__formMain;
            $form_span_errorClass_data_provincia__formMain     = "active";
            $form_input_errorClass_data_provincia__formMain    = "invalidField";
            $form_input_autofocus_data_provincia__formMain      = "autofocus";
            
        } elseif (empty($_POST["data_pais__formMain"])) {
            $form_label_msg_error_data_pais__formMain            = $formSend_msg_error_data_pais__formMain;
            $form_span_errorClass_data_pais__formMain          = "active";
            $form_input_errorClass_data_pais__formMain         = "invalidField";
            $form_input_autofocus_data_pais__formMain           = "autofocus";
            
        } elseif (empty($_POST["data_celular__formMain"])) {
            $form_label_msg_error_data_celular__formMain        = $formSend_msg_error_data_celular__formMain;
            $form_span_errorClass_data_celular__formMain      = "active";
            $form_input_errorClass_data_celular__formMain     = "invalidField";
            $form_input_autofocus_data_celular__formMain       = "autofocus";
            
        } elseif (empty($_POST["data_telefono__formMain"])) {
            $form_label_msg_error_data_telefono__formMain        = $formSend_msg_error_data_telefono__formMain;
            $form_span_errorClass_data_telefono__formMain      = "active";
            $form_input_errorClass_data_telefono__formMain     = "invalidField";
            $form_input_autofocus_data_telefono__formMain       = "autofocus";
            
        } elseif (empty($_POST["data_email__formMain"])) {
            $form_label_msg_error_data_email__formMain           = $formSend_msg_error_data_email__formMain;
            $form_span_errorClass_data_email__formMain         = "active";
            $form_input_errorClass_data_email__formMain        = "invalidField";
            $form_input_autofocus_data_email__formMain          = "autofocus";
            
        } elseif (empty($_POST["data_webSite__formMain"])) {
            $form_label_msg_error_data_webSite__formMain         = $formSend_msg_error_data_webSite__formMain;
            $form_span_errorClass_data_webSite__formMain       = "active";
            $form_input_errorClass_data_webSite__formMain      = "invalidField";
            $form_input_autofocus_data_webSite__formMain        = "autofocus";
            
        } elseif (empty($_POST["data_facebook__formMain"])) {
            $form_label_msg_error_data_facebook__formMain        = $formSend_msg_error_data_facebook__formMain;
            $form_span_errorClass_data_facebook__formMain      = "active";
            $form_input_errorClass_data_facebook__formMain     = "invalidField";
            $form_input_autofocus_data_facebook__formMain       = "autofocus";
            
        } elseif (empty($_POST["data_empresa__formMain"])) {
            $form_label_msg_error_data_empresa__formMain         = $formSend_msg_error_data_empresa__formMain;
            $form_span_errorClass_data_empresa__formMain       = "active";
            $form_input_errorClass_data_empresa__formMain      = "invalidField";
            $form_input_autofocus_data_empresa__formMain        = "autofocus";
            
        } elseif (empty($_POST["data_razonSocial__formMain"])) {
            $form_label_msg_error_data_razonSocial__formMain     = $formSend_msg_error_data_razonSocial__formMain;
            $form_span_errorClass_data_razonSocial__formMain   = "active";
            $form_input_errorClass_data_razonSocial__formMain  = "invalidField";
            $form_input_autofocus_data_razonSocial__formMain    = "autofocus";
            
        } elseif (empty($_POST["data_cargo__formMain"])) {
            $form_label_msg_error_data_cargo__formMain           = $formSend_msg_error_data_cargo__formMain;
            $form_span_errorClass_data_cargo__formMain         = "active";
            $form_input_errorClass_data_cargo__formMain        = "invalidField";
            $form_input_autofocus_data_cargo__formMain          = "autofocus";
            
        } elseif (empty($_POST["data_fecha__formMain"])) {
            $form_label_msg_error_data_fecha__formMain           = $formSend_msg_error_data_fecha__formMain;
            $form_span_errorClass_data_fecha__formMain         = "active";
            $form_input_errorClass_data_fecha__formMain        = "invalidField";
            $form_input_autofocus_data_fecha__formMain          = "autofocus";
            
        } elseif (empty($_POST["data_cantidad__formMain"])) {
            $form_label_msg_error_data_cantidad__formMain        = $formSend_msg_error_data_cantidad__formMain;
            $form_span_errorClass_data_cantidad__formMain      = "active";
            $form_input_errorClass_data_cantidad__formMain     = "invalidField";
            $form_input_autofocus_data_cantidad__formMain       = "autofocus";
            
        } elseif (empty($_POST["data_rubro__formMain"])) {
            $form_label_msg_error_data_rubro__formMain           = $formSend_msg_error_data_rubro__formMain;
            $form_span_errorClass_data_rubro__formMain         = "active";
            $form_input_errorClass_data_rubro__formMain        = "invalidField";
            $form_input_autofocus_data_rubro__formMain          = "autofocus";
            
        } elseif (empty($_POST["data_comoQueres__formMain"])) {
            $form_label_msg_error_data_comoQueres__formMain      = $formSend_msg_error_data_comoQueres__formMain;
            $form_span_errorClass_data_comoQueres__formMain    = "active";
            $form_input_errorClass_data_comoQueres__formMain   = "invalidField";
            $form_input_autofocus_data_comoQueres__formMain     = "autofocus";
            
        } elseif (empty($_POST["data_asunto__formMain"])) {
            $form_label_msg_error_data_asunto__formMain          = $formSend_msg_error_data_asunto__formMain;
            $form_span_errorClass_data_asunto__formMain        = "active";
            $form_input_errorClass_data_asunto__formMain       = "invalidField";
            $form_input_autofocus_data_asunto__formMain         = "autofocus";
            
        } elseif (empty($_POST["data_area__formMain"])) {
            $form_label_msg_error_data_area__formMain            = $formSend_msg_error_data_area__formMain;
            $form_span_errorClass_data_area__formMain          = "active";
            $form_input_errorClass_data_area__formMain         = "invalidField";
            // $form_input_autofocus_data_area__formMain          = "autofocus";
            
        } elseif (empty($_POST["data_mensaje__formMain"])) {
            $form_label_msg_error_data_mensaje__formMain         = $formSend_msg_error_data_mensaje__formMain;
            $form_span_errorClass_data_mensaje__formMain       = "active";
            $form_input_errorClass_data_mensaje__formMain      = "invalidField";
            $form_input_autofocus_data_mensaje__formMain        = "autofocus";
//FIN de validacion debajo de cada input
            
            
                        
        } else {
    //--------------------------------------------------------------------------
    // Si todos los campos validan se env&iacute;a el correo
            if(mail($formMail_recipient, $formMail_asunto, $formMail_texto, $formMail_headers)){

            //Redirect
//            echo '<META HTTP-EQUIV="Refresh" Content="0;URL='. $url_global .'/gracias.php">';
                
//INICIA MENSAJE OK EN $form_status_msg_
                $form_status_msg__formMain = '<p class="status ok" role="alert">'. _("$form_status_msg_OK_globalA__formMain") .' '. _("$form_status_msg_OK_globalB__formMain") .'</p>';
                $form_msg_mandatory_classes__formMain = 'displayNone';
//FIN mensaje ok en $form_status_msg_
                
//INICIA MENSAJE OK EN POPUP
                $form_status_msg_pop__formMain = '<div class="pop_global pop_warning pop_formStatus" role="alertdialog" aria-labelledby="formOK">'
                        . '<div role="document" tabindex="0">'
                        . '<button type="submit" class="button_pop_close hover_grow_S_ani">'._("Cerrar").'</button>'
                        . '<h2 id="formOK" class="'. $formPop_h2_ok_classes__formMain .'">'._("$form_status_msg_OK_globalA__formMain").'</h2>'
                        . '<p>'. _("$form_status_msg_OK_globalB__formMain") .'</p>'
                        . '<button type="submit" class="button_pop_submit">'. _("OK") .'</button>'
                        . '</div>'
                        . '</div>'
                        . '<div class="modal_global modal_formStatus"></div>';
                $form_msg_mandatory_classes__formMain = 'displayNone';
                $form_status_msg__formMain = '';
//FIN mensaje ok en popup
                
    //--------------------------------------------------------------------------
    // Si el envio fue exitoso reseteamos lo que el usuario escribi&oacute;:
                $_POST['data_nombre__formMain']       = '';
                $_POST['data_apellido__formMain']     = '';
                $_POST['data_nombreAp__formMain']    = '';     
                $_POST['data_nombreCo__formMain']   = '';               
                $_POST['data_genero__formMain']       = '';
                $_POST['data_direccion__formMain']    = '';
                $_POST['data_domicilio__formMain']    = '';
                $_POST['data_localidad__formMain']    = '';
                $_POST['data_codigoPostal__formMain'] = '';
                $_POST['data_provincia__formMain']    = '';
                $_POST['data_pais__formMain']         = '';
                $_POST['data_fecha__formMain']        = '';
                $_POST['data_email__formMain']        = '';
                $_POST['data_webSite__formMain']      = '';
                $_POST['data_facebook__formMain']     = '';
                $_POST['data_telefono__formMain']     = '';
                $_POST['data_celular__formMain']      = '';
                $_POST['data_empresa__formMain']      = '';
                $_POST['data_razonSocial__formMain']  = '';
                $_POST['data_cargo__formMain']        = '';
                $_POST['data_rubro__formMain']        = '';
                $_POST['data_comoQueres__formMain']   = '';
                $_POST['data_asunto__formMain']       = '';
                $_POST['data_mensaje__formMain']      = '';

            } else {
//INICIA MENSAJE ERROR EN $form_status_msg_
                $form_status_msg__formMain = '<p class="status error" role="alert">'. _("$form_status_msg_error_globalA__formMain") .' <span class="displayBlock">'. _("$form_status_msg_error_globalB__formMain") .'</span></p>';
                $form_msg_mandatory_classes__formMain = 'displayNone';
//FIN mensaje error en $form_status_msg_
                
//INICIA MENSAJE ERROR EN POPUP
                $form_status_msg_pop__formMain = '<div class="pop_global pop_warning pop_formStatus" role="alertdialog" aria-labelledby="formError">'
                        . '<div role="document" tabindex="0">'
                        . '<button type="submit" class="button_pop_close hover_grow_S_ani">'. _("Cerrar") .'</button>'
                        . '<h2 id="formError" class="'. $formPop_h2_error_classes__formMain .'">'. _("$form_status_msg_error_globalA__formMain") .'</h2>'
                        . '<p>'. _("$form_status_msg_error_globalB__formMain") .'</p>'
                        . '<p>'. _("$form_status_msg_error_globalC__formMain") .'</p>'
                        . '<button type="submit" class="button_pop_submit">'. _("OK") .'</button>'
                        . '</div>'
                        . '</div>'
                        . '<div class="modal_global modal_formStatus"></div>';
                $form_msg_mandatory_classes__formMain = 'displayNone';
                $form_status_msg__formMain = '';
//FIN mensaje error en popup
            }
        }
    }
?>