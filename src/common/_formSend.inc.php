<?php
    //--------------------------------------------------------------------------
    // Fuentes de título de pop
    $formPop_fontFamily_OK__formName      = '';
    $formPop_fontFamily_error__formName   = '';
    
    
    //--------------------------------------------------------------------------
    // Mandatory message
    $formMandatoryMSG__formName           = '';
    $formMandatoryMSG_classes__formName   = 'displayNone';
    
    
    //--------------------------------------------------------------------------
    // Status global
    $formStatusMSG_ini_globalA__formName     = _('Complete el formulario.');
    $formStatusMSG_ini_globalB__formName     = _('Nos comunicaremos con Ud. a la brevedad.');
    $formStatusMSG_ini_global__formName      = $formStatusMSG_ini_globalA__formName." ".$formStatusMSG_ini_globalB__formName;
    
    $formStatusMSG_OK_globalA__formName      = _('Env&iacute;o exitoso.');
    $formStatusMSG_OK_globalB__formName      = _('Los datos se han enviado correctamente, nos comunicaremos a la brevedad. Muchas Gracias.');
    $formStatusMSG_error_globalA__formName   = _('Hubo un error al enviar el mensaje.');
    $formStatusMSG_error_globalB__formName   = _('Intente nuevamente m&aacute;s tarde.');
    
    
    //--------------------------------------------------------------------------
    // Status ini
    //$formStatusMSG__formName = '<p class="status ini">'.$formStatusMSG_ini_global__formName.'</p>';
        
        
    //--------------------------------------------------------------------------
    // Inicia proceso de form
    if (isset($_POST['enviarForm__formName'])){
        ini_set('sendmail_from', $form_email_recipient);
        ini_set('SMTP','mail.'.$domain_global);

        // Asignamos datos de campos a variables
        $nombre__formName         = $_POST['nombre__formName'];
        $apellido__formName       = $_POST['apellido__formName'];
        $nombreApe__formName      = $_POST['nombreApe__formName'];
        $nombreComp__formName     = $_POST['nombreComp__formName'];
        $username__formName       = $_POST['username__formName'];
        $genero__formName         = $_POST['genero__formName'];
        $dni__formName            = $_POST['dni__formName'];
        $direccion__formName      = $_POST['direccion__formName'];
        $domicilio__formName      = $_POST['domicilio__formName'];
        $localidad__formName      = $_POST['localidad__formName'];
        $codigopostal__formName   = $_POST['codigopostal__formName'];
        $provincia__formName      = $_POST['provincia__formName'];
        $pais__formName           = $_POST['pais__formName'];
        $fecha__formName          = $_POST['fecha__formName'];
        $email__formName          = $_POST['email__formName'];
        $website__formName        = $_POST['website__formName'];
        $facebook__formName       = $_POST['facebook__formName'];
        $telefono__formName       = $_POST['telefono__formName'];
        $empresa__formName        = $_POST['empresa__formName'];
        $razonSocial__formName    = $_POST['razonSocial__formName'];
        $cargo__formName          = $_POST['cargo__formName'];
        $rubro__formName          = $_POST['rubro__formName'];
        $asuntoSubject__formName  = $_POST['asunto__formName'];
        $area__formName           = $_POST['$area__formName'];
        $mensaje__formName        = $_POST['mensaje__formName'];

        // Cabeceras del correo
        $destino  = $form_email_recipient;
        // $destino  = $area__formName;
        $asunto   = "Contacto Web de $nombre__formName - $empresa__formName";
        $headers  = "From: $nombre__formName <$email__formName>\r\n";
        //$headers .= "Reply-To: $email__formName \r\n";
        $headers .= "Content-type: text/html\r\n";
        $headers .= "X-Mailer: PHP5\n";
        $headers .= 'MIME-Version: 1.0' . "\n";
        //$headers .= "CC: ".$form_email_recipient_CC."\r\n";
        //$headers .= "BCC: ".$form_email_recipient_BCC."\r\n";
        $texto    = '<small style="color:#666">Este mensaje fue enviado desde el formulario que se encuentra en '.$url_section_contacto.'</small><br /><br />';
        $texto   .= "<strong>Nombre:</strong> ".$nombre__formName."<br />";
        $texto   .= "<strong>Apellido:</strong> ".$apellido__formName."<br />";
        $texto   .= "<strong>Nombre y Apellido:</strong> ".$nombreApe__formName."<br />";
        $texto   .= "<strong>Nombre completo:</strong> ".$nombreComp__formName."<br />";
        $texto   .= "<strong>Nombre de usuario:</strong> ".$username__formName."<br />";
        $texto   .= "<strong>Direcci&oacute;n:</strong> ".$direccion__formName."<br />";
        $texto   .= "<strong>Domicilio:</strong> ".$domicilio__formName."<br />";
        $texto   .= "<strong>Sexo:</strong> ".$genero__formName."<br />";
        $texto   .= "<strong>DNI:</strong> ".$dni__formName."<br />";
        $texto   .= "<strong>C&oacute;digo postal:</strong> ".$codigopostal__formName."<br />";
        $texto   .= "<strong>Localidad:</strong> ".$localidad__formName."<br />";
        $texto   .= "<strong>Provincia:</strong> ".$provincia__formName."<br />";
        $texto   .= "<strong>Pa&iacute;s:</strong> ".$pais__formName."<br />";
        $texto   .= "<strong>Fecha:</strong> ".$fecha__formName."<br />";
        $texto   .= "<strong>Correo electr&oacute;nico:</strong> ".$email__formName."<br />";
        $texto   .= "<strong>Sitio web:</strong> ".$website__formName."<br />";
        $texto   .= "<strong>Perfil de Facebook:</strong> ".$facebook__formName."<br />";
        $texto   .= "<strong>Tel&eacute;fono:</strong> ".$telefono__formName."<br />";
        $texto   .= "<strong>Empresa:</strong> ".$empresa__formName."<br />";
        $texto   .= "<strong>Raz&oacute;n Social:</strong> ".$razonSocial__formName."<br />";
        $texto   .= "<strong>Cargo:</strong> ".$cargo__formName."<br />";
        $texto   .= "<strong>Asunto:</strong> ".$asuntoSubject__formName."<br />";
        $texto   .= "<strong>Rubro:</strong> ".$rubro__formName."<br />";
        $texto   .= "<br /><strong>Mensaje:</strong><br />".$mensaje;
        $texto   .= '<br /><br />______<br /><small style="color:#666">Fin del mensaje</small>';
        
        
    //--------------------------------------------------------------------------
    // Variables Globales de Error
        $formMandatoryMSGErrorClass__formName = " invalidmandatoryMsg";
        $errorMsgNombre__formName         = _("Por favor, ingrese su nombre.");
        $errorMsgApellido__formName       = _("Por favor, ingrese su apellido.");
        $errorMsgNombreApe__formName      = _("Por favor, ingrese su nombre y apellido.");
        $errorMsgNombreComp__formName     = _("Por favor, ingrese su nombre completo.");
        $errorMsgUsername__formName       = _("Por favor, ingrese un nombre de usuario.");
        $errorMsgDireccion__formName      = _("Por favor, ingrese su direcci&oacute;n.");
        $errorMsgDomicilio__formName      = _("Por favor, ingrese su domicilio.");
        $errorMsgLocalidad__formName      = _("Por favor, ingrese su localidad.");
        $errorMsgCodigoPostal__formName   = _("Por favor, ingrese su c&oacute;digo postal."); 
        $errorMsgProvincia__formName      = _("Por favor, ingrese su provincia.");
        $errorMsgPais__formName           = _("Por favor, ingrese su pa&iacute;s.");
        $errorMsgFecha__formName          = _("Por favor, indique la fecha deseada.");
        $errorMsgDNI__formName            = _("Por favor, ingrese su n&uacute;mero de DNI.");
        $errorMsgEmail__formName          = _("Por favor, ingrese su direcci&oacute;n de correo."); 
        $errorMsgWebsite__formName        = _("Por favor, ingrese su sitio web.");
        $errorMsgFacebook__formName       = _("Por favor, ingrese su perfil de Facebook.");
        $errorMsgTelefono__formName       = _("Por favor, ingrese su n&uacute;mero de tel&eacute;fono."); 
        $errorMsgEmpresa__formName        = _("Por favor, ingrese el nombre de su empresa.");
        $errorMsgRazonSocial__formName    = _("Por favor, ingrese su raz&oacute;n social.");
        $errorMsgCargo__formName          = _("Por favor, ingrese su cargo.");
        $errorMsgRubro__formName          = _("Por favor, ingrese un rubro.");
        $errorMsgAsunto__formName         = _("Por favor, ingrese un asunto.");
        $errorMsgArea__formName           = _("Por favor, elija un área de contacto.");        
        $errorMsgNewsletter__formName     = _("Por favor, elija una opci&oacute;n.");
        $errorMsgMensaje__formName        = _("Por favor, complete su mensaje.");

        
            
//INICIA VALIDACIÓN EN div.mandatoryMsg
        if (empty($_POST["nombre__formName"])) {
            $formMandatoryMSG__formName                   = $errorMsgNombre__formName;
            $formMandatoryMSG_classes__formName           = $formMandatoryMSGErrorClass__formName;
            $formInput_error_class_nombre__formName       = "invalidField";
            $formInput_autofocus_nombre__formName         = "autofocus";
            
        } elseif (empty($_POST["apellido__formName"])) {
            $formMandatoryMSG__formName                   = $errorMsgApellido__formName;
            $formMandatoryMSG_classes__formName           = $formMandatoryMSGErrorClass__formName;
            $formInput_error_class_apellido__formName     = "invalidField";
            $formInput_autofocus_apellido__formName       = "autofocus";
            
        } elseif (empty($_POST["nombreApe__formName"])) {
            $formMandatoryMSG__formName                   = $errorMsgNombreApe__formName;
            $formMandatoryMSG_classes__formName           = $formMandatoryMSGErrorClass__formName;
            $formInput_error_class_nombreApe__formName    = "invalidField";
            $formInput_autofocus_nombreApe__formName      = "autofocus";
            
        } elseif (empty($_POST["nombreComp__formName"])) {
            $formMandatoryMSG__formName                   = $errorMsgNombreComp__formName;
            $formMandatoryMSG_classes__formName           = $formMandatoryMSGErrorClass__formName;
            $formInput_error_class_nombreComp__formName   = "invalidField";
            $formInput_autofocus_nombreComp__formName     = "autofocus";
            
        } elseif (empty($_POST["username__formName"])) {
            $formMandatoryMSG__formName                   = $errorMsgUsername__formName;
            $formMandatoryMSG_classes__formName           = $formMandatoryMSGErrorClass__formName;
            $formInput_error_class_username__formName     = "invalidField";
            $formInput_autofocus_username__formName       = "autofocus";
            
        } elseif (empty($_POST["dni__formName"])) {
            $formMandatoryMSG__formName                   = $errorMsgDNI__formName;
            $formMandatoryMSG_classes__formName           = $formMandatoryMSGErrorClass__formName;
            $formInput_error_class_DNI__formName          = "invalidField";
            $formInput_autofocus_DNI__formName            = "autofocus";
            
        } elseif (empty($_POST["direccion__formName"])) {
            $formMandatoryMSG__formName                   = $errorMsgDireccion__formName;
            $formMandatoryMSG_classes__formName           = $formMandatoryMSGErrorClass__formName;
            $formInput_error_class_direccion__formName    = "invalidField";
            $formInput_autofocus_direccion__formName      = "autofocus";
            
        } elseif (empty($_POST["domicilio__formName"])) {
            $formMandatoryMSG__formName                   = $errorMsgDomicilio__formName;
            $formMandatoryMSG_classes__formName           = $formMandatoryMSGErrorClass__formName;
            $formInput_error_class_domicilio__formName    = "invalidField";
            $formInput_autofocus_domicilio__formName      = "autofocus";
            
        } elseif (empty($_POST["localidad__formName"])) {
            $formMandatoryMSG__formName                   = $errorMsgLocalidad__formName;
            $formMandatoryMSG_classes__formName           = $formMandatoryMSGErrorClass__formName;
            $formInput_error_class_localidad__formName    = "invalidField";
            $formInput_autofocus_localidad__formName      = "autofocus";
            
        } elseif (empty($_POST["codigopostal__formName"])) {
            $formMandatoryMSG__formName                   = $errorMsgCodigoPostal__formName;
            $formMandatoryMSG_classes__formName           = $formMandatoryMSGErrorClass__formName;
            $formInput_error_class_codigoPostal__formName = "invalidField";
            $formInput_autofocus_codigoPostal__formName   = "autofocus";
            
        } elseif (empty($_POST["provincia__formName"])) {
            $formMandatoryMSG__formName                   = $errorMsgProvincia__formName;
            $formMandatoryMSG_classes__formName           = $formMandatoryMSGErrorClass__formName;
            $formInput_error_class_provincia__formName    = "invalidField";
            $formInput_autofocus_provincia__formName      = "autofocus";
            
        } elseif (empty($_POST["pais__formName"])) {
            $formMandatoryMSG__formName                   = $errorMsgPais__formName;
            $formMandatoryMSG_classes__formName           = $formMandatoryMSGErrorClass__formName;
            $formInput_error_class_Pais__formName         = "invalidField";
            $formInput_autofocus_Pais__formName           = "autofocus";
            
        } elseif (empty($_POST["telefono__formName"])) {
            $formMandatoryMSG__formName                   = $errorMsgTelefono__formName;
            $formMandatoryMSG_classes__formName           = $formMandatoryMSGErrorClass__formName;
            $formInput_error_class_Telefono__formName     = "invalidField";
            $formInput_autofocus_Telefono__formName       = "autofocus";
            
        } elseif (empty($_POST["email__formName"])) {
            $formMandatoryMSG__formName                   = $errorMsgEmail__formName;
            $formMandatoryMSG_classes__formName           = $formMandatoryMSGErrorClass__formName;
            $formInput_error_class_email__formName        = "invalidField";
            $formInput_autofocus_email__formName          = "autofocus";
            
        } elseif (empty($_POST["website__formName"])) {
            $formMandatoryMSG__formName                   = $errorMsgWebsite__formName;
            $formMandatoryMSG_classes__formName           = $formMandatoryMSGErrorClass__formName;
            $formInput_error_class_Website__formName      = "invalidField";
            $formInput_autofocus_Website__formName        = "autofocus";
            
        } elseif (empty($_POST["facebook__formName"])) {
            $formMandatoryMSG__formName                   = $errorMsgFacebook__formName;
            $formMandatoryMSG_classes__formName           = $formMandatoryMSGErrorClass__formName;
            $formInput_error_class_Facebook__formName     = "invalidField";
            $formInput_autofocus_Facebook__formName       = "autofocus";
            
        } elseif (empty($_POST["empresa__formName"])) {
            $formMandatoryMSG__formName                   = $errorMsgEmpresa__formName;
            $formMandatoryMSG_classes__formName           = $formMandatoryMSGErrorClass__formName;
            $formInput_error_class_Empresa__formName      = "invalidField";
            $formInput_autofocus_Empresa__formName        = "autofocus";
            
        } elseif (empty($_POST["razonSocial__formName"])) {
            $formMandatoryMSG__formName                   = $errorMsgRazonSocial__formName;
            $formMandatoryMSG_classes__formName           = $formMandatoryMSGErrorClass__formName;
            $formInput_error_class_RazonSocial__formName  = "invalidField";
            $formInput_autofocus_RazonSocial__formName    = "autofocus";
            
        } elseif (empty($_POST["cargo__formName"])) {
            $formMandatoryMSG__formName                   = $errorMsgCargo__formName;
            $formMandatoryMSG_classes__formName           = $formMandatoryMSGErrorClass__formName;
            $formInput_error_class_Cargo__formName        = "invalidField";
            $formInput_autofocus_Cargo__formName          = "autofocus";
            
        } elseif (empty($_POST["asunto__formName"])) {
            $formMandatoryMSG__formName                   = $errorMsgAsunto__formName;
            $formMandatoryMSG_classes__formName           = $formMandatoryMSGErrorClass__formName;
            $formInput_error_class_Cargo__formName        = "invalidField";
            $formInput_autofocus_Cargo__formName          = "autofocus";
            
        } elseif (empty($_POST["fecha__formName"])) {
            $formMandatoryMSG__formName                   = $errorMsgFecha__formName;
            $formMandatoryMSG_classes__formName           = $formMandatoryMSGErrorClass__formName;
            $formInput_error_class_Fecha__formName        = "invalidField";
            $formInput_autofocus_Fecha__formName          = "autofocus";
            
        } elseif (empty($_POST["rubro__formName"])) {
            $formMandatoryMSG__formName                   = $errorMsgRubro__formName;
            $formMandatoryMSG_classes__formName           = $formMandatoryMSGErrorClass__formName;
            $formInput_error_class_Rubro__formName        = "invalidField";
            $formInput_autofocus_Rubro__formName          = "autofocus";
            
        } elseif (empty($_POST["newsletter__formName"])) {
            $formMandatoryMSG__formName                   = $erroNewsletter__formName;
            $formMandatoryMSG_classes__formName           = $formMandatoryMSGErrorClass__formName;
            $formInput_error_class_Newsletter__formName   = "invalidField";
            $formInput_autofocus_Newsletter__formName     = "autofocus";
            
        } elseif (empty($_POST["mensaje__formName"])) {
            $formMandatoryMSG__formName                   = $errorMensaje__formName;
            $formMandatoryMSG_classes__formName           = $formMandatoryMSGErrorClass__formName;
            $formInput_error_class_Mensaje__formName      = "invalidField";
            $formInput_autofocus_Mensaje__formName        = "autofocus";
//FIN de validacion en div.mandatoryMsg
                      
            
            
//INICIA VALIDACIÓN DEBAJO DE CADA INPUT
        if (empty($_POST["nombre__formName"])) {
            $formSpan_error_MSG_nombre__formName          = $errorMsgNombre__formName;
            $formSpan_error_class_nombre__formName        = "active";
            $formInput_error_class_nombre__formName       = "invalidField";
            $formInput_autofocus_nombre__formName         = "autofocus";
                       
        } elseif (empty($_POST["apellido__formName"])) {
            $formSpan_error_MSG_apellido__formName        = $errorMsgApellido__formName;
            $formSpan_error_class_apellido__formName      = "active";
            $formInput_error_class_apellido__formName     = "invalidField";
            $formInput_autofocus_apellido__formName       = "autofocus";
                       
        } elseif (empty($_POST["nombreApe__formName"])) {
            $formSpan_error_MSG_nombreApe__formName       = $errorMsgNombreApe__formName;
            $formSpan_error_class_nombreApe__formName     = "active";
            $formInput_error_class_nombreApe__formName    = "invalidField";
            $formInput_autofocus_nombreApe__formName      = "autofocus";
                       
        } elseif (empty($_POST["nombreComp__formName"])) {
            $formSpan_error_MSG_nombreComp__formName      = $errorMsgNombreComp__formName;
            $formSpan_error_class_nombreComp__formName    = "active";
            $formInput_error_class_nombreComp__formName   = "invalidField";
            $formInput_autofocus_nombreComp__formName     = "autofocus";
                       
        } elseif (empty($_POST["username__formName"])) {
            $formSpan_error_MSG_username__formName        = $errorMsgUsername__formName;
            $formSpan_error_class_username__formName      = "active";
            $formInput_error_class_username__formName     = "invalidField";
            $formInput_autofocus_username__formName       = "autofocus";
                       
        } elseif (empty($_POST["dni__formName"])) {
            $formSpan_error_MSG_DNI__formName             = $errorMsgDNI__formName;
            $formSpan_error_class_DNI__formName           = "active";
            $formInput_error_class_DNI__formName          = "invalidField";
            $formInput_autofocus_DNI__formName            = "autofocus";
            
        } elseif (empty($_POST["direccion__formName"])) {
            $formSpan_error_MSG_direccion__formName       = $errorMsgDireccion__formName;
            $formSpan_error_class_direccion__formName     = "active";
            $formInput_error_class_direccion__formName    = "invalidField";
            $formInput_autofocus_direccion__formName      = "autofocus";
            
        } elseif (empty($_POST["domicilio__formName"])) {
            $formSpan_error_MSG_domicilio__formName       = $errorMsgDomicilio__formName;
            $formSpan_error_class_domicilio__formName     = "active";
            $formInput_error_class_domicilio__formName    = "invalidField";
            $formInput_autofocus_domicilio__formName      = "autofocus";
            
        } elseif (empty($_POST["localidad__formName"])) {
            $formSpan_error_MSG_localidad__formName       = $errorMsgLocalidad__formName;
            $formSpan_error_class_localidad__formName     = "active";
            $formInput_error_class_localidad__formName    = "invalidField";
            $formInput_autofocus_localidad__formName      = "autofocus";
            
        } elseif (empty($_POST["codigopostal__formName"])) {
            $formSpan_error_MSG_codigoPostal__formName    = $errorMsgCodigoPostal__formName;
            $formSpan_error_class_codigoPostal__formName  = "active";
            $formInput_error_class_codigoPostal__formName = "invalidField";
            $formInput_autofocus_codigoPostal__formName   = "autofocus";
            
        } elseif (empty($_POST["provincia__formName"])) {
            $formSpan_error_MSG_provincia__formName       = $errorMsgProvincia__formName;
            $formSpan_error_class_provincia__formName     = "active";
            $formInput_error_class_provincia__formName    = "invalidField";
            $formInput_autofocus_provincia__formName      = "autofocus";
            
        } elseif (empty($_POST["pais__formName"])) {
            $formSpan_error_MSG_Pais__formName            = $errorMsgPais__formName;
            $formSpan_error_class_Pais__formName          = "active";
            $formInput_error_class_Pais__formName         = "invalidField";
            $formInput_autofocus_Pais__formName           = "autofocus";
            
        } elseif (empty($_POST["telefono__formName"])) {
            $formSpan_error_MSG_Telefono__formName        = $errorMsgTelefono__formName;
            $formSpan_error_class_Telefono__formName      = "active";
            $formInput_error_class_Telefono__formName     = "invalidField";
            $formInput_autofocus_Telefono__formName       = "autofocus";
            
        } elseif (empty($_POST["email__formName"])) {
            $formSpan_error_MSG_email__formName           = $errorMsgEmail__formName;
            $formSpan_error_class_email__formName         = "active";
            $formInput_error_class_email__formName        = "invalidField";
            $formInput_autofocus_email__formName          = "autofocus";
            
        } elseif (empty($_POST["website__formName"])) {
            $formSpan_error_MSG_Website__formName         = $errorMsgWebsite__formName;
            $formSpan_error_class_Website__formName       = "active";
            $formInput_error_class_Website__formName      = "invalidField";
            $formInput_autofocus_Website__formName        = "autofocus";
            
        } elseif (empty($_POST["facebook__formName"])) {
            $formSpan_error_MSG_Facebook__formName        = $errorMsgFacebook__formName;
            $formSpan_error_class_Facebook__formName      = "active";
            $formInput_error_class_Facebook__formName     = "invalidField";
            $formInput_autofocus_Facebook__formName       = "autofocus";
            
        } elseif (empty($_POST["empresa__formName"])) {
            $formSpan_error_MSG_Empresa__formName         = $errorMsgEmpresa__formName;
            $formSpan_error_class_Empresa__formName       = "active";
            $formInput_error_class_Empresa__formName      = "invalidField";
            $formInput_autofocus_Empresa__formName        = "autofocus";
            
        } elseif (empty($_POST["razonSocial__formName"])) {
            $formSpan_error_MSG_RazonSocial__formName     = $errorMsgRazonSocial__formName;
            $formSpan_error_class_RazonSocial__formName   = "active";
            $formInput_error_class_RazonSocial__formName  = "invalidField";
            $formInput_autofocus_RazonSocial__formName    = "autofocus";
            
        } elseif (empty($_POST["cargo__formName"])) {
            $formSpan_error_MSG_Cargo__formName           = $errorMsgCargo__formName;
            $formSpan_error_class_Cargo__formName         = "active";
            $formInput_error_class_Cargo__formName        = "invalidField";
            $formInput_autofocus_Cargo__formName          = "autofocus";
            
        } elseif (empty($_POST["asunto__formName"])) {
            $formSpan_error_MSG_Asunto__formName          = $errorMsgAsunto__formName;
            $formSpan_error_class_Asunto__formName        = "active";
            $formInput_error_class_Asunto__formName       = "invalidField";
            $formInput_autofocus_Cargo__formName          = "autofocus";
            
        } elseif (empty($_POST["fecha__formName"])) {
            $formSpan_error_MSG_Fecha__formName           = $errorMsgFecha__formName;
            $formSpan_error_class_Fecha__formName         = "active";
            $formInput_error_class_Fecha__formName        = "invalidField";
            $formInput_autofocus_Fecha__formName          = "autofocus";
            
        } elseif (empty($_POST["rubro__formName"])) {
            $formSpan_error_MSG_Rubro__formName           = $errorMsgRubro__formName;
            $formSpan_error_class_Rubro__formName         = "active";
            $formInput_error_class_Rubro__formName        = "invalidField";
            $formInput_autofocus_Rubro__formName          = "autofocus";
            
        } elseif (empty($_POST["asunto__formName"])) {
            $formSpan_error_MSG_Rubro__formName           = $errorMsgRubro__formName;
            $formSpan_error_class_Rubro__formName         = "active";
            $formInput_error_class_Rubro__formName        = "invalidField";
            $formInput_autofocus_Rubro__formName          = "autofocus";
            
        } elseif (empty($_POST["area__formName"])) {
            $formSpan_error_MSG_area__formName            = $errorMsgArea__formName;
            $formSpan_error_class_area__formName          = "active";
            $formInput_error_class_area__formName         = "invalidField";
            // $formInput_autofocus_Rubro__formName          = "autofocus";
            
        } elseif (empty($_POST["mensaje__formName"])) {
            $formSpan_error_MSG_Mensaje__formName         = $errorMsgMensaje__formName;
            $formSpan_error_class_Mensaje__formName       = "active";
            $formInput_error_class_Mensaje__formName      = "invalidField";
            $formInput_autofocus_Mensaje__formName        = "autofocus";
//FIN de validacion debajo de cada input
            
            
                        
        } else {
    //--------------------------------------------------------------------------
    // Si todos los campos validan se env&iacute;a el correo
            if(mail($destino, $asunto, $texto, $headers)){

            //Redirect
            //echo '<META HTTP-EQUIV="Refresh" Content="0;URL=http://www.gabrielvolonte.com.ar/nuevo/contacto-gracias.php">';
                
//INICIA MENSAJE OK EN $formStatusMSG_
                $formStatusMSG__formName = '<p class="status ok" role="alert">'._("$formStatusMSG_OK_globalA__formName").' '._("$formStatusMSG_OK_globalB__formName").'</p>';
                $formMandatoryMSG_classes__formName = 'displayNone';
//FIN mensaje ok en $formStatusMSG_
                
//INICIA MENSAJE OK EN POPUP
                $formStatusMSG_pop__formName = '<div class="pop_main pop_warning borderBox ptl phl" role="alertdialog" aria-labelledby="formOK">'
                        . '<div role="document" tabindex="0">'
                        . '<button type="submit" class="pop_close pAbs hoverGrowS indentedText">'._("Cerrar").'</button>'
                        . '<h2 id="formOK" class="mbm '. $formPop_fontFamily_OK__formName .' green alignCenter">'._("$formStatusMSG_OK_globalA__formName").'</h2>'
                        . '<p class="status ok">'._("$formStatusMSG_OK_globalB__formName").'</p>'
                        . '<button type="submit" class="pop_submit bgWhite mtl mha arial bold black alignCenter upperCase">'._("OK").'</button>'
                        . '</div>'
                        . '</div>'
                        . '<div class="modalBG"></div>';
                $formMandatoryMSG_classes__formName = 'displayNone';
                $formStatusMSG__formName = '';
//FIN mensaje ok en popup
                
    //--------------------------------------------------------------------------
    // Si el envio fue exitoso reseteamos lo que el usuario escribi&oacute;:
                $_POST['nombre__formName']       = '';
                $_POST['apellido__formName']     = '';
                $_POST['nombreApe__formName']    = '';     
                $_POST['nombreComp__formName']   = '';               
                $_POST['genero__formName']       = '';
                $_POST['direccion__formName']    = '';
                $_POST['domicilio__formName']    = '';
                $_POST['localidad__formName']    = '';
                $_POST['codigopostal__formName'] = '';
                $_POST['provincia__formName']    = '';
                $_POST['pais__formName']         = '';
                $_POST['fecha__formName']        = '';
                $_POST['email__formName']        = '';
                $_POST['website__formName']      = '';
                $_POST['facebook__formName']     = '';
                $_POST['telefono__formName']     = '';
                $_POST['empresa__formName']      = '';
                $_POST['razonSocial__formName']  = '';
                $_POST['cargo__formName']        = '';
                $_POST['rubro__formName']        = '';
                $_POST['asunto__formName']       = '';
                $_POST['mensaje__formName']      = '';

            } else {
//INICIA MENSAJE ERROR EN $formStatusMSG_
                $formStatusMSG__formName = '<p class="status error" role="alert">'._("$formStatusMSG_error_globalA__formName").' <span class="displayBlock">'._("$formStatusMSG_error_globalB__formName").'</span></p>';
                $formMandatoryMSG_classes__formName = 'displayNone';
//FIN mensaje error en $formStatusMSG_
                
//INICIA MENSAJE ERROR EN POPUP
                $formStatusMSG_pop__formName = '<div class="pop_main pop_warning borderBox ptl phl" role="alertdialog" aria-labelledby="formError">'
                        . '<div role="document" tabindex="0">'
                        . '<button type="submit" class="pop_close pAbs hoverGrowS indentedText">'._("Cerrar").'</button>'
                        . '<h2 id="formError" class="mbm '. $formPop_fontFamily_error__formName .' errorColour alignCenter">'._("$formStatusMSG_error_globalA__formName").'</h2>'
                        . '<p class="status error">'._("$formStatusMSG_error_globalB__formName").'</p>'
                        . '<button type="submit" class="pop_submit bgWhite mtl mha arial bold black alignCenter upperCase">'._("OK").'</button>'
                        . '</div>'
                        . '</div>'
                        . '<div class="modalBG"></div>';
                $formMandatoryMSG_classes__formName = 'displayNone';
                $formStatusMSG__formName = '';
//FIN mensaje error en popup
            }
        }
    }
?>