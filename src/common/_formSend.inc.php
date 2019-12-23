<?php
    //--------------------------------------------------------------------------
    // Fuentes de título de pop
    $formPop_h2_ok_classes__formName      = 'mbm green alignCenter';
    $formPop_h2_error_classes__formName   = 'mbm errorColour alignCenter';
    
    
    //--------------------------------------------------------------------------
    // Mandatory message
    $formMandatory_MSG__formName           = '';
    $formMandatory_MSG_classes__formName   = 'displayNone';
    
    
    //--------------------------------------------------------------------------
    // Status global
    $formStatus_MSG_ini_globalA__formName     = _('Complete el formulario.');
    $formStatus_MSG_ini_globalB__formName     = _('Nos comunicaremos con Ud. a la brevedad.');
    $formStatus_MSG_ini_global__formName      = $formStatus_MSG_ini_globalA__formName ." ". $formStatus_MSG_ini_globalB__formName;
    
    $formStatus_MSG_OK_globalA__formName      = _('Env&iacute;o exitoso.');
    $formStatus_MSG_OK_globalB__formName      = _('Los datos se han enviado correctamente, nos comunicaremos a la brevedad. Muchas Gracias.');
    $formStatus_MSG_error_globalA__formName   = _('Hubo un error al enviar el mensaje.');
    $formStatus_MSG_error_globalB__formName   = _('Intente nuevamente m&aacute;s tarde.');
    
    
    //--------------------------------------------------------------------------
    // Status ini
    //$formStatus_MSG__formName = '<p class="status ini">'.$formStatus_MSG_ini_global__formName.'</p>';
        
        
    //--------------------------------------------------------------------------
    // Inicia proceso de form
    if (isset($_POST['enviarForm__formName'])){
        ini_set('sendmail_from', $form_contacto_recipient);
        ini_set('SMTP','mail.'. $domain_global);

        // Asignamos datos de campos a variables
        $nombre__formName         = $_POST['nombre__formName'];
        $apellido__formName       = $_POST['apellido__formName'];
        $nombreApe__formName      = $_POST['nombreApe__formName'];
        $nombreComp__formName     = $_POST['nombreComp__formName'];
        $username__formName       = $_POST['username__formName'];
        $cantidad__formName       = $_POST['cantidad__formName'];
        
        $genero__formName         = $_POST['genero__formName'];
        $dni__formName            = $_POST['dni__formName'];
        $fecha__formName          = $_POST['fecha__formName'];
        
        $direccion__formName      = $_POST['direccion__formName'];
        $domicilio__formName      = $_POST['domicilio__formName'];
        $localidad__formName      = $_POST['localidad__formName'];
        $codigopostal__formName   = $_POST['codigopostal__formName'];
        $provincia__formName      = $_POST['provincia__formName'];
        $pais__formName           = $_POST['pais__formName'];
        
        $email__formName          = $_POST['email__formName'];
        $telefono__formName       = $_POST['telefono__formName'];
        
        $website__formName        = $_POST['website__formName'];
        $facebook__formName       = $_POST['facebook__formName'];
        $instagram__formName      = $_POST['instagram__formName'];  
        $comoQueres__formName     = $_POST['comoQueres__formName'];        
        
        $empresa__formName        = $_POST['empresa__formName'];
        $razonSocial__formName    = $_POST['razonSocial__formName'];
        $cargo__formName          = $_POST['cargo__formName'];
        $rubro__formName          = $_POST['rubro__formName'];
        
        $asuntoSubject__formName  = $_POST['asunto__formName'];
        $area__formName           = $_POST['$area__formName'];
        $mensaje__formName        = $_POST['mensaje__formName'];

        // Cabeceras del correo
        $destino  = $form_contacto_recipient;
        // $destino  = $area__formName;
        $asunto   = "Contacto Web de ". $nombre__formName ." - ". $empresa__formName;
        $headers  = "From: $nombre__formName <$email__formName>\r\n";
        //$headers .= "Reply-To: $email__formName \r\n";
        $headers .= "Content-type: text/html\r\n";
        $headers .= "X-Mailer: PHP5\n";
        $headers .= 'MIME-Version: 1.0' . "\n";
        //$headers .= "CC: ".$form_contacto_recipient_CC."\r\n";
        //$headers .= "BCC: ".$form_contacto_recipient_BCC."\r\n";
        $texto    = '<small style="color:#666">Este mensaje fue enviado desde el formulario que se encuentra en '. $url_contacto_full .'</small><br /><br />';
        $texto   .= "<strong>Nombre:</strong> ". $nombre__formName ."<br />";
        $texto   .= "<strong>Apellido:</strong> ". $apellido__formName ."<br />";
        $texto   .= "<strong>Nombre y Apellido:</strong> ". $nombreApe__formName ."<br />";
        $texto   .= "<strong>Nombre completo:</strong> ". $nombreComp__formName ."<br />";
        $texto   .= "<strong>Nombre de usuario:</strong> ". $username__formName ."<br />";
        $texto   .= "<strong>Direcci&oacute;n:</strong> ". $direccion__formName ."<br />";
        $texto   .= "<strong>Domicilio:</strong> ". $domicilio__formName ."<br />";
        $texto   .= "<strong>Sexo:</strong> ". $genero__formName ."<br />";
        $texto   .= "<strong>Cantidad:</strong> ". $cantidad__formName ."<br />";
        $texto   .= "<strong>DNI:</strong> ". $dni__formName ."<br />";
        $texto   .= "<strong>C&oacute;digo postal:</strong> ". $codigopostal__formName ."<br />";
        $texto   .= "<strong>Localidad:</strong> ". $localidad__formName ."<br />";
        $texto   .= "<strong>Provincia:</strong> ". $provincia__formName ."<br />";
        $texto   .= "<strong>Pa&iacute;s:</strong> ". $pais__formName ."<br />";
        $texto   .= "<strong>Fecha:</strong> ". $fecha__formName ."<br />";
        $texto   .= "<strong>Correo electr&oacute;nico:</strong> ". $email__formName ."<br />";
        $texto   .= "<strong>Sitio web:</strong> ". $website__formName ."<br />";
        $texto   .= "<strong>Perfil de Facebook:</strong> ". $facebook__formName ."<br />";
        $texto   .= "<strong>Perfil de Instagram:</strong> ". $instagram__formName ."<br />";
        $texto   .= "<strong>Tel&eacute;fono:</strong> ". $telefono__formName ."<br />";
        $texto   .= "<strong>Empresa:</strong> ". $empresa__formName ."<br />";
        $texto   .= "<strong>Raz&oacute;n Social:</strong> ". $razonSocial__formName ."<br />";
        $texto   .= "<strong>Cargo:</strong> ". $cargo__formName ."<br />";
        $texto   .= "<strong>Asunto:</strong> ". $asuntoSubject__formName ."<br />";
        $texto   .= "<strong>&iquest;C&oacute;mo quer&eacute;s que te contactemos?:</strong> ". $comoQueres__formName ."<br />";
        $texto   .= "<strong>Rubro:</strong> ". $rubro__formName ."<br />";
        $texto   .= "<br /><strong>Mensaje:</strong><br />". $mensaje;
        $texto   .= '<br /><br />______<br /><small style="color:#666">Fin del mensaje</small>';
        
        
    //--------------------------------------------------------------------------
    // Variables Globales de Error
        $formMandatory_MSG_error_class__formName = " invalidmandatoryMsg";
        $formSend_error_MSG_Nombre__formName         = _("Por favor, ingrese su nombre.");
        $formSend_error_MSG_Apellido__formName       = _("Por favor, ingrese su apellido.");
        $formSend_error_MSG_NombreApe__formName      = _("Por favor, ingrese su nombre y apellido.");
        $formSend_error_MSG_NombreComp__formName     = _("Por favor, ingrese su nombre completo.");
        $formSend_error_MSG_Username__formName       = _("Por favor, ingrese un nombre de usuario.");
        $formSend_error_MSG_Cantidad__formName       = _("Por favor, ingrese una cantidad.");
        
        $formSend_error_MSG_Direccion__formName      = _("Por favor, ingrese su direcci&oacute;n.");
        $formSend_error_MSG_Domicilio__formName      = _("Por favor, ingrese su domicilio.");
        $formSend_error_MSG_Localidad__formName      = _("Por favor, ingrese su localidad.");
        $formSend_error_MSG_CodigoPostal__formName   = _("Por favor, ingrese su c&oacute;digo postal."); 
        $formSend_error_MSG_Provincia__formName      = _("Por favor, ingrese su provincia.");
        $formSend_error_MSG_Pais__formName           = _("Por favor, ingrese su pa&iacute;s.");
        
        $formSend_error_MSG_Fecha__formName          = _("Por favor, indique la fecha deseada.");
        $formSend_error_MSG_DNI__formName            = _("Por favor, ingrese su n&uacute;mero de DNI.");
        
        $formSend_error_MSG_Email__formName          = _("Por favor, ingrese su direcci&oacute;n de correo."); 
        $formSend_error_MSG_Telefono__formName       = _("Por favor, ingrese su n&uacute;mero de tel&eacute;fono."); 
        
        $formSend_error_MSG_Website__formName        = _("Por favor, ingrese su sitio web.");
        $formSend_error_MSG_Facebook__formName       = _("Por favor, ingrese su perfil de Facebook.");
        $formSend_error_MSG_Instagram__formName      = _("Por favor, ingrese su perfil de Instagram.");
        $formSend_error_MSG_ComoQueres__formName     = _("Por favor, indique un medio de contacto.");
        
        $formSend_error_MSG_Empresa__formName        = _("Por favor, ingrese el nombre de su empresa.");
        $formSend_error_MSG_RazonSocial__formName    = _("Por favor, ingrese su raz&oacute;n social.");
        $formSend_error_MSG_Cargo__formName          = _("Por favor, ingrese su cargo.");
        $formSend_error_MSG_Rubro__formName          = _("Por favor, ingrese un rubro.");
        $formSend_error_MSG_Asunto__formName         = _("Por favor, ingrese un asunto.");
        
        $formSend_error_MSG_Area__formName           = _("Por favor, elija un área de contacto.");        
        $formSend_error_MSG_Newsletter__formName     = _("Por favor, elija una opci&oacute;n.");
        $formSend_error_MSG_Mensaje__formName        = _("Por favor, complete su mensaje.");

        
            
//INICIA VALIDACIÓN EN div.mandatoryMsg
        if (empty($_POST["nombre__formName"])) {
            $formMandatory_MSG__formName                   = $formSend_error_MSG_Nombre__formName;
            $formMandatory_MSG_classes__formName           = $formMandatory_MSG_error_class__formName;
            $formInput_error_class_nombre__formName       = "invalidField";
            $formInput_autofocus_nombre__formName         = "autofocus";
            
        } elseif (empty($_POST["apellido__formName"])) {
            $formMandatory_MSG__formName                   = $formSend_error_MSG_Apellido__formName;
            $formMandatory_MSG_classes__formName           = $formMandatory_MSG_error_class__formName;
            $formInput_error_class_apellido__formName     = "invalidField";
            $formInput_autofocus_apellido__formName       = "autofocus";
            
        } elseif (empty($_POST["nombreApe__formName"])) {
            $formMandatory_MSG__formName                   = $formSend_error_MSG_NombreApe__formName;
            $formMandatory_MSG_classes__formName           = $formMandatory_MSG_error_class__formName;
            $formInput_error_class_nombreApe__formName    = "invalidField";
            $formInput_autofocus_nombreApe__formName      = "autofocus";
            
        } elseif (empty($_POST["nombreComp__formName"])) {
            $formMandatory_MSG__formName                   = $formSend_error_MSG_NombreComp__formName;
            $formMandatory_MSG_classes__formName           = $formMandatory_MSG_error_class__formName;
            $formInput_error_class_nombreComp__formName   = "invalidField";
            $formInput_autofocus_nombreComp__formName     = "autofocus";
            
        } elseif (empty($_POST["username__formName"])) {
            $formMandatory_MSG__formName                   = $formSend_error_MSG_Username__formName;
            $formMandatory_MSG_classes__formName           = $formMandatory_MSG_error_class__formName;
            $formInput_error_class_username__formName     = "invalidField";
            $formInput_autofocus_username__formName       = "autofocus";
            
        } elseif (empty($_POST["dni__formName"])) {
            $formMandatory_MSG__formName                   = $formSend_error_MSG_DNI__formName;
            $formMandatory_MSG_classes__formName           = $formMandatory_MSG_error_class__formName;
            $formInput_error_class_DNI__formName          = "invalidField";
            $formInput_autofocus_DNI__formName            = "autofocus";
            
        } elseif (empty($_POST["direccion__formName"])) {
            $formMandatory_MSG__formName                   = $formSend_error_MSG_Direccion__formName;
            $formMandatory_MSG_classes__formName           = $formMandatory_MSG_error_class__formName;
            $formInput_error_class_direccion__formName    = "invalidField";
            $formInput_autofocus_direccion__formName      = "autofocus";
            
        } elseif (empty($_POST["domicilio__formName"])) {
            $formMandatory_MSG__formName                   = $formSend_error_MSG_Domicilio__formName;
            $formMandatory_MSG_classes__formName           = $formMandatory_MSG_error_class__formName;
            $formInput_error_class_domicilio__formName    = "invalidField";
            $formInput_autofocus_domicilio__formName      = "autofocus";
            
        } elseif (empty($_POST["localidad__formName"])) {
            $formMandatory_MSG__formName                   = $formSend_error_MSG_Localidad__formName;
            $formMandatory_MSG_classes__formName           = $formMandatory_MSG_error_class__formName;
            $formInput_error_class_localidad__formName    = "invalidField";
            $formInput_autofocus_localidad__formName      = "autofocus";
            
        } elseif (empty($_POST["codigopostal__formName"])) {
            $formMandatory_MSG__formName                   = $formSend_error_MSG_CodigoPostal__formName;
            $formMandatory_MSG_classes__formName           = $formMandatory_MSG_error_class__formName;
            $formInput_error_class_codigoPostal__formName = "invalidField";
            $formInput_autofocus_codigoPostal__formName   = "autofocus";
            
        } elseif (empty($_POST["provincia__formName"])) {
            $formMandatory_MSG__formName                   = $formSend_error_MSG_Provincia__formName;
            $formMandatory_MSG_classes__formName           = $formMandatory_MSG_error_class__formName;
            $formInput_error_class_provincia__formName    = "invalidField";
            $formInput_autofocus_provincia__formName      = "autofocus";
            
        } elseif (empty($_POST["pais__formName"])) {
            $formMandatory_MSG__formName                   = $formSend_error_MSG_Pais__formName;
            $formMandatory_MSG_classes__formName           = $formMandatory_MSG_error_class__formName;
            $formInput_error_class_Pais__formName         = "invalidField";
            $formInput_autofocus_Pais__formName           = "autofocus";
            
        } elseif (empty($_POST["telefono__formName"])) {
            $formMandatory_MSG__formName                   = $formSend_error_MSG_Telefono__formName;
            $formMandatory_MSG_classes__formName           = $formMandatory_MSG_error_class__formName;
            $formInput_error_class_Telefono__formName     = "invalidField";
            $formInput_autofocus_Telefono__formName       = "autofocus";
            
        } elseif (empty($_POST["email__formName"])) {
            $formMandatory_MSG__formName                   = $formSend_error_MSG_Email__formName;
            $formMandatory_MSG_classes__formName           = $formMandatory_MSG_error_class__formName;
            $formInput_error_class_Email__formName        = "invalidField";
            $formInput_autofocus_Email__formName          = "autofocus";
            
        } elseif (empty($_POST["website__formName"])) {
            $formMandatory_MSG__formName                   = $formSend_error_MSG_Website__formName;
            $formMandatory_MSG_classes__formName           = $formMandatory_MSG_error_class__formName;
            $formInput_error_class_Website__formName      = "invalidField";
            $formInput_autofocus_Website__formName        = "autofocus";
            
        } elseif (empty($_POST["facebook__formName"])) {
            $formMandatory_MSG__formName                   = $formSend_error_MSG_Facebook__formName;
            $formMandatory_MSG_classes__formName           = $formMandatory_MSG_error_class__formName;
            $formInput_error_class_Facebook__formName     = "invalidField";
            $formInput_autofocus_Facebook__formName       = "autofocus";
            
        } elseif (empty($_POST["comoQueres__formName"])) {
            $formMandatory_MSG__formName                   = $formSend_error_MSG_ComoQueres__formName;
            $formMandatory_MSG_classes__formName           = $formMandatory_MSG_error_class__formName;
            $formInput_error_class_ComoQueres__formName   = "invalidField";
            $formInput_autofocus_ComoQueres__formName     = "autofocus";
            
        } elseif (empty($_POST["empresa__formName"])) {
            $formMandatory_MSG__formName                   = $formSend_error_MSG_Empresa__formName;
            $formMandatory_MSG_classes__formName           = $formMandatory_MSG_error_class__formName;
            $formInput_error_class_Empresa__formName      = "invalidField";
            $formInput_autofocus_Empresa__formName        = "autofocus";
            
        } elseif (empty($_POST["razonSocial__formName"])) {
            $formMandatory_MSG__formName                   = $formSend_error_MSG_RazonSocial__formName;
            $formMandatory_MSG_classes__formName           = $formMandatory_MSG_error_class__formName;
            $formInput_error_class_RazonSocial__formName  = "invalidField";
            $formInput_autofocus_RazonSocial__formName    = "autofocus";
            
        } elseif (empty($_POST["cargo__formName"])) {
            $formMandatory_MSG__formName                   = $formSend_error_MSG_Cargo__formName;
            $formMandatory_MSG_classes__formName           = $formMandatory_MSG_error_class__formName;
            $formInput_error_class_Cargo__formName        = "invalidField";
            $formInput_autofocus_Cargo__formName          = "autofocus";
            
        } elseif (empty($_POST["asunto__formName"])) {
            $formMandatory_MSG__formName                   = $formSend_error_MSG_Asunto__formName;
            $formMandatory_MSG_classes__formName           = $formMandatory_MSG_error_class__formName;
            $formInput_error_class_Cargo__formName        = "invalidField";
            $formInput_autofocus_Cargo__formName          = "autofocus";
            
        } elseif (empty($_POST["fecha__formName"])) {
            $formMandatory_MSG__formName                   = $formSend_error_MSG_Fecha__formName;
            $formMandatory_MSG_classes__formName           = $formMandatory_MSG_error_class__formName;
            $formInput_error_class_Fecha__formName        = "invalidField";
            $formInput_autofocus_Fecha__formName          = "autofocus";
            
        } elseif (empty($_POST["rubro__formName"])) {
            $formMandatory_MSG__formName                   = $formSend_error_MSG_Rubro__formName;
            $formMandatory_MSG_classes__formName           = $formMandatory_MSG_error_class__formName;
            $formInput_error_class_Rubro__formName        = "invalidField";
            $formInput_autofocus_Rubro__formName          = "autofocus";
            
        } elseif (empty($_POST["newsletter__formName"])) {
            $formMandatory_MSG__formName                   = $erroNewsletter__formName;
            $formMandatory_MSG_classes__formName           = $formMandatory_MSG_error_class__formName;
            $formInput_error_class_Newsletter__formName   = "invalidField";
            $formInput_autofocus_Newsletter__formName     = "autofocus";
            
        } elseif (empty($_POST["mensaje__formName"])) {
            $formMandatory_MSG__formName                   = $errorMensaje__formName;
            $formMandatory_MSG_classes__formName           = $formMandatory_MSG_error_class__formName;
            $formInput_error_class_Mensaje__formName      = "invalidField";
            $formInput_autofocus_Mensaje__formName        = "autofocus";
//FIN de validacion en div.mandatoryMsg
                      
            
            
//INICIA VALIDACIÓN DEBAJO DE CADA INPUT
        if (empty($_POST["nombre__formName"])) {
            $formSpan_error_MSG_nombre__formName          = $formSend_error_MSG_Nombre__formName;
            $formSpan_error_class_nombre__formName        = "active";
            $formInput_error_class_nombre__formName       = "invalidField";
            $formInput_autofocus_nombre__formName         = "autofocus";
                       
        } elseif (empty($_POST["apellido__formName"])) {
            $formSpan_error_MSG_apellido__formName        = $formSend_error_MSG_Apellido__formName;
            $formSpan_error_class_apellido__formName      = "active";
            $formInput_error_class_apellido__formName     = "invalidField";
            $formInput_autofocus_apellido__formName       = "autofocus";
                       
        } elseif (empty($_POST["nombreApe__formName"])) {
            $formSpan_error_MSG_nombreApe__formName       = $formSend_error_MSG_NombreApe__formName;
            $formSpan_error_class_nombreApe__formName     = "active";
            $formInput_error_class_nombreApe__formName    = "invalidField";
            $formInput_autofocus_nombreApe__formName      = "autofocus";
                       
        } elseif (empty($_POST["nombreComp__formName"])) {
            $formSpan_error_MSG_nombreComp__formName      = $formSend_error_MSG_NombreComp__formName;
            $formSpan_error_class_nombreComp__formName    = "active";
            $formInput_error_class_nombreComp__formName   = "invalidField";
            $formInput_autofocus_nombreComp__formName     = "autofocus";
                       
        } elseif (empty($_POST["username__formName"])) {
            $formSpan_error_MSG_username__formName        = $formSend_error_MSG_Username__formName;
            $formSpan_error_class_username__formName      = "active";
            $formInput_error_class_username__formName     = "invalidField";
            $formInput_autofocus_username__formName       = "autofocus";
                       
        } elseif (empty($_POST["dni__formName"])) {
            $formSpan_error_MSG_DNI__formName             = $formSend_error_MSG_DNI__formName;
            $formSpan_error_class_DNI__formName           = "active";
            $formInput_error_class_DNI__formName          = "invalidField";
            $formInput_autofocus_DNI__formName            = "autofocus";
            
        } elseif (empty($_POST["direccion__formName"])) {
            $formSpan_error_MSG_direccion__formName       = $formSend_error_MSG_Direccion__formName;
            $formSpan_error_class_direccion__formName     = "active";
            $formInput_error_class_direccion__formName    = "invalidField";
            $formInput_autofocus_direccion__formName      = "autofocus";
            
        } elseif (empty($_POST["domicilio__formName"])) {
            $formSpan_error_MSG_domicilio__formName       = $formSend_error_MSG_Domicilio__formName;
            $formSpan_error_class_domicilio__formName     = "active";
            $formInput_error_class_domicilio__formName    = "invalidField";
            $formInput_autofocus_domicilio__formName      = "autofocus";
            
        } elseif (empty($_POST["localidad__formName"])) {
            $formSpan_error_MSG_localidad__formName       = $formSend_error_MSG_Localidad__formName;
            $formSpan_error_class_localidad__formName     = "active";
            $formInput_error_class_localidad__formName    = "invalidField";
            $formInput_autofocus_localidad__formName      = "autofocus";
            
        } elseif (empty($_POST["codigopostal__formName"])) {
            $formSpan_error_MSG_codigoPostal__formName    = $formSend_error_MSG_CodigoPostal__formName;
            $formSpan_error_class_codigoPostal__formName  = "active";
            $formInput_error_class_codigoPostal__formName = "invalidField";
            $formInput_autofocus_codigoPostal__formName   = "autofocus";
            
        } elseif (empty($_POST["provincia__formName"])) {
            $formSpan_error_MSG_provincia__formName       = $formSend_error_MSG_Provincia__formName;
            $formSpan_error_class_provincia__formName     = "active";
            $formInput_error_class_provincia__formName    = "invalidField";
            $formInput_autofocus_provincia__formName      = "autofocus";
            
        } elseif (empty($_POST["pais__formName"])) {
            $formSpan_error_MSG_Pais__formName            = $formSend_error_MSG_Pais__formName;
            $formSpan_error_class_Pais__formName          = "active";
            $formInput_error_class_Pais__formName         = "invalidField";
            $formInput_autofocus_Pais__formName           = "autofocus";
            
        } elseif (empty($_POST["telefono__formName"])) {
            $formSpan_error_MSG_Telefono__formName        = $formSend_error_MSG_Telefono__formName;
            $formSpan_error_class_Telefono__formName      = "active";
            $formInput_error_class_Telefono__formName     = "invalidField";
            $formInput_autofocus_Telefono__formName       = "autofocus";
            
        } elseif (empty($_POST["email__formName"])) {
            $formSpan_error_MSG_Email__formName           = $formSend_error_MSG_Email__formName;
            $formSpan_error_class_Email__formName         = "active";
            $formInput_error_class_Email__formName        = "invalidField";
            $formInput_autofocus_Email__formName          = "autofocus";
            
        } elseif (empty($_POST["website__formName"])) {
            $formSpan_error_MSG_Website__formName         = $formSend_error_MSG_Website__formName;
            $formSpan_error_class_Website__formName       = "active";
            $formInput_error_class_Website__formName      = "invalidField";
            $formInput_autofocus_Website__formName        = "autofocus";
            
        } elseif (empty($_POST["facebook__formName"])) {
            $formSpan_error_MSG_Facebook__formName        = $formSend_error_MSG_Facebook__formName;
            $formSpan_error_class_Facebook__formName      = "active";
            $formInput_error_class_Facebook__formName     = "invalidField";
            $formInput_autofocus_Facebook__formName       = "autofocus";
            
        } elseif (empty($_POST["empresa__formName"])) {
            $formSpan_error_MSG_Empresa__formName         = $formSend_error_MSG_Empresa__formName;
            $formSpan_error_class_Empresa__formName       = "active";
            $formInput_error_class_Empresa__formName      = "invalidField";
            $formInput_autofocus_Empresa__formName        = "autofocus";
            
        } elseif (empty($_POST["razonSocial__formName"])) {
            $formSpan_error_MSG_RazonSocial__formName     = $formSend_error_MSG_RazonSocial__formName;
            $formSpan_error_class_RazonSocial__formName   = "active";
            $formInput_error_class_RazonSocial__formName  = "invalidField";
            $formInput_autofocus_RazonSocial__formName    = "autofocus";
            
        } elseif (empty($_POST["cargo__formName"])) {
            $formSpan_error_MSG_Cargo__formName           = $formSend_error_MSG_Cargo__formName;
            $formSpan_error_class_Cargo__formName         = "active";
            $formInput_error_class_Cargo__formName        = "invalidField";
            $formInput_autofocus_Cargo__formName          = "autofocus";
            
        } elseif (empty($_POST["asunto__formName"])) {
            $formSpan_error_MSG_Asunto__formName          = $formSend_error_MSG_Asunto__formName;
            $formSpan_error_class_Asunto__formName        = "active";
            $formInput_error_class_Asunto__formName       = "invalidField";
            $formInput_autofocus_Asunto__formName          = "autofocus";
            
        } elseif (empty($_POST["fecha__formName"])) {
            $formSpan_error_MSG_Fecha__formName           = $formSend_error_MSG_Fecha__formName;
            $formSpan_error_class_Fecha__formName         = "active";
            $formInput_error_class_Fecha__formName        = "invalidField";
            $formInput_autofocus_Fecha__formName          = "autofocus";
            
        } elseif (empty($_POST["rubro__formName"])) {
            $formSpan_error_MSG_Rubro__formName           = $formSend_error_MSG_Rubro__formName;
            $formSpan_error_class_Rubro__formName         = "active";
            $formInput_error_class_Rubro__formName        = "invalidField";
            $formInput_autofocus_Rubro__formName          = "autofocus";
            
        } elseif (empty($_POST["comoQueres__formName"])) {
            $formSpan_error_MSG_ComoQueres__formName      = $formSend_error_MSG_ComoQueres__formName;
            $formSpan_error_class_ComoQueres__formName    = "active";
            $formInput_error_class_ComoQueres__formName   = "invalidField";
            $formInput_autofocus_ComoQueres__formName     = "autofocus";
            
        } elseif (empty($_POST["asunto__formName"])) {
            $formSpan_error_MSG_Asunto__formName          = $formSend_error_MSG_Asunto__formName;
            $formSpan_error_class_Asunto__formName        = "active";
            $formInput_error_class_Asunto__formName       = "invalidField";
            $formInput_autofocus_Asunto__formName         = "autofocus";
            
        } elseif (empty($_POST["area__formName"])) {
            $formSpan_error_MSG_area__formName            = $formSend_error_MSG_Area__formName;
            $formSpan_error_class_area__formName          = "active";
            $formInput_error_class_area__formName         = "invalidField";
            // $formInput_autofocus_area__formName          = "autofocus";
            
        } elseif (empty($_POST["mensaje__formName"])) {
            $formSpan_error_MSG_Mensaje__formName         = $formSend_error_MSG_Mensaje__formName;
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
                
//INICIA MENSAJE OK EN $formStatus_MSG_
                $formStatus_MSG__formName = '<p class="status ok" role="alert">'._("$formStatus_MSG_OK_globalA__formName").' '._("$formStatus_MSG_OK_globalB__formName").'</p>';
                $formMandatory_MSG_classes__formName = 'displayNone';
//FIN mensaje ok en $formStatus_MSG_
                
//INICIA MENSAJE OK EN POPUP
                $formStatus_MSG_pop__formName = '<div class="pop_main pop_warning pop_formStatus borderBox pal" role="alertdialog" aria-labelledby="formOK">'
                        . '<div role="document" tabindex="0">'
                        . '<button type="submit" class="pop_close pAbs hoverGrowS indentedText">'._("Cerrar").'</button>'
                        . '<h2 id="formOK" class="'. $formPop_h2_ok_classes__formName .'">'._("$formStatus_MSG_OK_globalA__formName").'</h2>'
                        . '<p class="status ok">'._("$formStatus_MSG_OK_globalB__formName").'</p>'
                        . '<button type="submit" class="pop_submit bgWhite mtl mha arial bold black alignCenter upperCase">'._("OK").'</button>'
                        . '</div>'
                        . '</div>'
                        . '<div class="modalBG"></div>';
                $formMandatory_MSG_classes__formName = 'displayNone';
                $formStatus_MSG__formName = '';
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
                $_POST['comoQueres__formName']   = '';
                $_POST['asunto__formName']       = '';
                $_POST['mensaje__formName']      = '';

            } else {
//INICIA MENSAJE ERROR EN $formStatus_MSG_
                $formStatus_MSG__formName = '<p class="status error" role="alert">'._("$formStatus_MSG_error_globalA__formName").' <span class="displayBlock">'._("$formStatus_MSG_error_globalB__formName").'</span></p>';
                $formMandatory_MSG_classes__formName = 'displayNone';
//FIN mensaje error en $formStatus_MSG_
                
//INICIA MENSAJE ERROR EN POPUP
                $formStatus_MSG_pop__formName = '<div class="pop_main pop_warning pop_formStatus borderBox pal" role="alertdialog" aria-labelledby="formError">'
                        . '<div role="document" tabindex="0">'
                        . '<button type="submit" class="pop_close pAbs hoverGrowS indentedText">'._("Cerrar").'</button>'
                        . '<h2 id="formError" class="'. $formPop_h2_error_classes__formName .'">'._("$formStatus_MSG_error_globalA__formName").'</h2>'
                        . '<p class="status error">'._("$formStatus_MSG_error_globalB__formName").'</p>'
                        . '<button type="submit" class="pop_submit bgWhite mtl mha arial bold black alignCenter upperCase">'._("OK").'</button>'
                        . '</div>'
                        . '</div>'
                        . '<div class="modalBG"></div>';
                $formMandatory_MSG_classes__formName = 'displayNone';
                $formStatus_MSG__formName = '';
//FIN mensaje error en popup
            }
        }
    }
?>