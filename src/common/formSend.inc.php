<?php
    //Variables de Mandatory Message al inicio
    $mandatoryMessage        = '';
    $mandatoryMessageClasses = 'displayNone';
    
    //Variables Globlales de Status
    $statusIniGlobal     = _('Complete el formulario. Nos comunicaremos con Ud. a la brevedad.');
    $statusIniGlobalA    = _('Complete el formulario.');
    $statusIniGlobalB    = _('Nos comunicaremos con Ud. a la brevedad.');
    
    $statusOKGlobal      = _('Los datos se han enviado correctamente, nos comunicaremos a la brevedad. Muchas Gracias.');
    $statusErrorGlobalA  = _('Hubo un error al enviar el mensaje.');
    $statusErrorGlobalB  = _('Intente nuevamente m&aacute;s tarde.');

    //Status Ini
    //$status = '<p class="status ini">'.$statusIniGlobal;

    //Inicia proceso de form
    if (isset($_POST['enviarForm'])){
        //ini_set('sendmail_from','tampas@gmail.com');
        //ini_set('SMTP','mail.gabrielvolonte.com.ar');

        //Asignamos datos de campos a variables
        $nombre       = $_POST['nombre'];
        $apellido     = $_POST['apellido'];
        $nombreApe    = $_POST['nombreApe'];
        $direccion    = $_POST['direccion'];
        $domicilio    = $_POST['domicilio'];
        $localidad    = $_POST['localidad'];
        $codigopostal = $_POST['codigopostal'];
        $provincia    = $_POST['provincia'];
        $pais         = $_POST['pais'];
        $fecha        = $_POST['fecha'];
        $email        = $_POST['email'];
        $website      = $_POST['website'];
        $facebook     = $_POST['facebook'];
        $telefono     = $_POST['telefono'];
        $empresa      = $_POST['empresa'];
        $cargo        = $_POST['cargo'];
        $rubro        = $_POST['rubro'];
        $mensaje      = $_POST['mensaje'];

        //Cabeceras del correo
        $destino  = "tampas@gmail.com";
        $asunto   = "Contacto Web de $nombre - $empresa";
        $headers  = "From: $nombre <$email>\r\n";
        $headers .= "Content-type: text/html\r\n";
        $headers .= "X-Mailer: PHP5\n";
        $headers .= 'MIME-Version: 1.0' . "\n";
        //$headers .= "CC: tampas@gmail.com\r\n";
        //$headers .= "BCC: ggvv@hotmail.com.ar\r\n";
        $texto    = "<strong>Nombre:</strong> ".$nombre."<br />";
        $texto    = "<strong>Apellido:</strong> ".$apellido."<br />";
        $texto    = "<strong>Nombre y Apellido:</strong> ".$nombreApe."<br />";
        $texto   .= "<strong>Direcci&oacute;n:</strong> ".$direccion."<br />";
        $texto   .= "<strong>Domicilio:</strong> ".$domicilio."<br />";
        $texto   .= "<strong>Localidad:</strong> ".$localidad."<br />";
        $texto   .= "<strong>Provincia:</strong> ".$provincia."<br />";
        $texto   .= "<strong>Pa&iacute;s:</strong> ".$pais."<br />";
        $texto   .= "<strong>Fecha:</strong> ".$fecha."<br />";
        $texto   .= "<strong>Correo electr&oacute;nico:</strong> ".$email."<br />";
        $texto   .= "<strong>Sitio web:</strong> ".$website."<br />";
        $texto   .= "<strong>Perfil de Facebook:</strong> ".$facebook."<br />";
        $texto   .= "<strong>Tel&eacute;fono:</strong> ".$telefono."<br />";
        $texto   .= "<strong>Empresa:</strong> ".$empresa."<br />";
        $texto   .= "<strong>Cargo:</strong> ".$cargo."<br />";
        $texto   .= "<strong>Rubro:</strong> ".$rubro."<br />";
        $texto   .= "<strong>Mensaje:</strong> <br />".$mensaje."<br />_ _ _<br />Fin del mensaje";
        
        //Variables Globales de Error
        $mandatoryMessageClassesGlobal = " invalidMandatoryMessage";
        $errorMsgNombre        = _("Por favor, ingrese su nombre.");
        $errorMsgApellido      = _("Por favor, ingrese su apellido.");
        $errorMsgNombreApe     = _("Por favor, ingrese su nombre y apellido.");
        $errorMsgDireccion     = _("Por favor, ingrese su direcci&oacute;n.");
        $errorMsgDomicilio  = _("Por favor, ingrese su domicilio.");
        $errorMsgLocalidad     = _("Por favor, ingrese su localidad.");
        $errorMsgCodigoPostal  = _("Por favor, ingrese su c&oacute;digo postal.");
        $errorMsgProvincia     = _("Por favor, ingrese su provincia.");
        $errorMsgPais          = _("Por favor, ingrese su pa&iacute;s.");
        $errorMsgFecha         = _("Por favor, indique la fecha deseada.");
        $errorMsgEmail         = _("Por favor, ingrese su direcci&oacute;n de correo.");
        $errorMsgWebsite       = _("Por favor, ingrese su sitio web.");
        $errorMsgFacebook      = _("Por favor, ingrese su perfil de Facebook.");
        $errorMsgTelefono      = _("Por favor, ingrese su n&uacute;mero de tel&eacute;fono.");
        $errorMsgEmpresa       = _("Por favor, ingrese el nombre de su empresa.");
        $errorMsgCargo         = _("Por favor, ingrese su cargo.");
        $errorMsgRubro         = _("Por favor, ingrese un rubro.");
        $errorMsgNewsletter    = _("Por favor, elija una opci&oacute;n.");

        
        
//INICIA VALIDACIÓN EN div.mandatoryMessage
        if (empty($_POST["nombre"])) {
            $mandatoryMessage = $errorMsgNombre;
            $mandatoryMessageClasses = $mandatoryMessageClassesGlobal;
            $invalidFieldNombre = "invalidField";
            $autofocusNombre = "autofocus";
            
        } elseif (empty($_POST["apellido"])) {
            $mandatoryMessage = $errorMsgApellido;
            $mandatoryMessageClasses = $mandatoryMessageClassesGlobal;
            $invalidFieldApellido = "invalidField";
            $autofocusApellido = "autofocus";
            
        } elseif (empty($_POST["nombreApe"])) {
            $mandatoryMessage = $errorMsgNombreApe;
            $mandatoryMessageClasses = $mandatoryMessageClassesGlobal;
            $invalidFieldNombreApe = "invalidField";
            $autofocusNombreApe = "autofocus";
            
        } elseif (empty($_POST["direccion"])) {
            $mandatoryMessage = $errorMsgDireccion;
            $mandatoryMessageClasses = $mandatoryMessageClassesGlobal;
            $invalidFieldDireccion = "invalidField";
            $autofocusDireccion = "autofocus";
            
        } elseif (empty($_POST["domicilio"])) {
            $mandatoryMessage = $errorMsgDomicilio;
            $mandatoryMessageClasses = $mandatoryMessageClassesGlobal;
            $invalidFieldDomicilio = "invalidField";
            $autofocusDomicilio = "autofocus";
            
        } elseif (empty($_POST["localidad"])) {
            $mandatoryMessage = $errorMsgLocalidad;
            $mandatoryMessageClasses = $mandatoryMessageClassesGlobal;
            $invalidFieldLocalidad = "invalidField";
            $autofocusLocalidad = "autofocus";
            
        } elseif (empty($_POST["codigopostal"])) {
            $mandatoryMessage = $errorMsgCodigoPostal;
            $mandatoryMessageClasses = $mandatoryMessageClassesGlobal;
            $invalidFieldCodigoPostal = "invalidField";
            $autofocusCodigoPostal = "autofocus";
            
        } elseif (empty($_POST["provincia"])) {
            $mandatoryMessage = $errorMsgProvincia;
            $mandatoryMessageClasses = $mandatoryMessageClassesGlobal;
            $invalidFieldProvincia = "invalidField";
            $autofocusProvincia = "autofocus";
            
        } elseif (empty($_POST["pais"])) {
            $mandatoryMessage = $errorMsgPais;
            $mandatoryMessageClasses = $mandatoryMessageClassesGlobal;
            $invalidFieldPais = "invalidField";
            $autofocusPais = "autofocus";
            
        } elseif (empty($_POST["telefono"])) {
            $mandatoryMessage = $errorMsgTelefono;
            $mandatoryMessageClasses = $mandatoryMessageClassesGlobal;
            $invalidFieldTelefono = "invalidField";
            $autofocusTelefono = "autofocus";
            
        } elseif (empty($_POST["email"])) {
            $mandatoryMessage = $errorMsgEmail;
            $mandatoryMessageClasses = $mandatoryMessageClassesGlobal;
            $invalidFieldEmail = "invalidField";
            $autofocusEmail = "autofocus";
            
        } elseif (empty($_POST["website"])) {
            $mandatoryMessage = $errorMsgWebsite;
            $mandatoryMessageClasses = $mandatoryMessageClassesGlobal;
            $invalidFieldWebsite = "invalidField";
            $autofocusWebsite = "autofocus";
            
        } elseif (empty($_POST["facebook"])) {
            $mandatoryMessage = $errorMsgFacebook;
            $mandatoryMessageClasses = $mandatoryMessageClassesGlobal;
            $invalidFieldFacebook = "invalidField";
            $autofocusFacebook = "autofocus";
            
        } elseif (empty($_POST["empresa"])) {
            $mandatoryMessage = $errorMsgEmpresa;
            $mandatoryMessageClasses = $mandatoryMessageClassesGlobal;
            $invalidFieldEmpresa = "invalidField";
            $autofocusEmpresa = "autofocus";
            
        } elseif (empty($_POST["cargo"])) {
            $mandatoryMessage = $errorMsgCargo;
            $mandatoryMessageClasses = $mandatoryMessageClassesGlobal;
            $invalidFieldCargo = "invalidField";
            $autofocusCargo = "autofocus";
            
        } elseif (empty($_POST["fecha"])) {
            $mandatoryMessage = $errorMsgFecha;
            $mandatoryMessageClasses = $mandatoryMessageClassesGlobal;
            $invalidFieldFecha = "invalidField";
            $autofocusFecha = "autofocus";
            
        } elseif (empty($_POST["rubro"])) {
            $mandatoryMessage = $errorMsgRubro;
            $mandatoryMessageClasses = $mandatoryMessageClassesGlobal;
            $invalidFieldRubro = "invalidField";
            $autofocusRubro = "autofocus";
            
        } elseif (empty($_POST["newsletter"])) {
            $mandatoryMessage = $errorMsgNewsletter;
            $mandatoryMessageClasses = $mandatoryMessageClassesGlobal;
//FIN de validacion en div.mandatoryMessage
                        
//INICIA VALIDACIÓN DEBAJO DE CADA INPUT
        if (empty($_POST["nombre"])) {
            $errorBelowInputNombre = $errorMsgNombre;
            $errorFormClassNombre = "active";
            $invalidFieldNombre = "invalidField";
            $autofocusNombre = "autofocus";
                       
        } elseif (empty($_POST["apellido"])) {
            $errorBelowInputApellido = $errorMsgApellido;
            $errorFormClassApellido = "active";
            $invalidFieldApellido = "invalidField";
            $autofocusApellido = "autofocus";
                       
        } elseif (empty($_POST["nombreApe"])) {
            $errorBelowInputNombreApe = $errorMsgNombreApe;
            $errorFormClassNombreApe = "active";
            $invalidFieldNombreApe = "invalidField";
            $autofocusNombreApe = "autofocus";
            
        } elseif (empty($_POST["direccion"])) {
            $errorBelowInputDireccion = $errorMsgDireccion;
            $errorFormClassDireccion = "active";
            $invalidFieldDireccion = "invalidField";
            $autofocusDireccion = "autofocus";
            
        } elseif (empty($_POST["domicilio"])) {
            $errorBelowInputDomicilio = $errorMsgDomicilio;
            $errorFormClassDomicilio = "active";
            $invalidFieldDomicilio = "invalidField";
            $autofocusDomicilio = "autofocus";
            
        } elseif (empty($_POST["localidad"])) {
            $errorBelowInputLocalidad = $errorMsgLocalidad;
            $errorFormClassLocalidad = "active";
            $invalidFieldLocalidad = "invalidField";
            $autofocusLocalidad = "autofocus";
            
        } elseif (empty($_POST["codigopostal"])) {
            $errorBelowInputCodigoPostal = $errorMsgCodigoPostal;
            $invalidFieldCodigoPostal = "invalidField";
            $autofocusCodigoPostal = "autofocus";
            
        } elseif (empty($_POST["provincia"])) {
            $errorBelowInputProvincia = $errorMsgProvincia;
            $errorFormClassProvincia = "active";
            $invalidFieldProvincia = "invalidField";
            $autofocusProvincia = "autofocus";
            
        } elseif (empty($_POST["pais"])) {
            $errorBelowInputPais = $errorMsgPais;
            $errorFormClassPais = "active";
            $invalidFieldPais = "invalidField";
            $autofocusPais = "autofocus";
            
        } elseif (empty($_POST["telefono"])) {
            $errorBelowInputTelefono = $errorMsgTelefono;
            $errorFormClassTelefono = "active";
            $invalidFieldTelefono = "invalidField";
            $autofocusTelefono = "autofocus";
            
        } elseif (empty($_POST["email"])) {
            $errorBelowInputEmail = $errorMsgEmail;
            $errorFormClassEmail = "active";
            $invalidFieldEmail = "invalidField";
            $autofocusEmail = "autofocus";
            
        } elseif (empty($_POST["website"])) {
            $errorBelowInputWebsite = $errorMsgWebsite;
            $errorFormClassWebsite = "active";
            $invalidFieldWebsite = "invalidField";
            $autofocusWebsite = "autofocus";
            
        } elseif (empty($_POST["facebook"])) {
            $errorBelowInputFacebook = $errorMsgFacebook;
            $errorFormClassFacebook = "active";
            $invalidFieldFacebook = "invalidField";
            $autofocusFacebook = "autofocus";
            
        } elseif (empty($_POST["empresa"])) {
            $errorBelowInputEmpresa = $errorMsgEmpresa;
            $errorFormClassEmpresa = "active";
            $invalidFieldEmpresa = "invalidField";
            $autofocusEmpresa = "autofocus";
            
        } elseif (empty($_POST["cargo"])) {
            $errorBelowInputCargo = $errorMsgCargo;
            $errorFormClassCargo = "active";
            $invalidFieldCargo = "invalidField";
            $autofocusCargo = "autofocus";
            
        } elseif (empty($_POST["fecha"])) {
            $errorBelowInputFecha = $errorMsgFecha;
            $errorFormClassFecha = "active";
            $invalidFieldFecha = "invalidField";
            $autofocusFecha = "autofocus";
            
        } elseif (empty($_POST["rubro"])) {
            $errorBelowInputRubro = $errorMsgRubro;
            $errorFormClassRubro = "active";
            $invalidFieldRubro = "invalidField";
            $autofocusRubro = "autofocus";
//FIN de validacion debajo de cada input
            
            
                        
        // Si todos los campos validan se env&iacute;a el correo
        } else {
            if(mail($destino,$asunto,$texto,$headers)){

            //Redirect
            echo '<META HTTP-EQUIV="Refresh" Content="0;URL=http://www.gabrielvolonte.com.ar/nuevo/contacto-gracias.php">';
                
//INICIA MENSAJE OK EN $status
                $status = '<p class="status ok">'._("$statusOKGlobal");
                $mandatoryMessageClasses = 'displayNone';
//FIN mensaje ok en $status
                
//INICIA MENSAJE OK EN POPUP
                $status = '<div class="popup statusDiv"><a href="javascript:void(0)" class="close displayBlock pAbs sprites indentedText">'._("Cerrar").'</a><p class="status ok">'._("$statusOKGlobal").'</p></div><div class="modalBG"></div>';
                $mandatoryMessageClasses = 'displayNone';
//FIN mensaje ok en popup
                
                // Si el envio fue exitoso reseteamos lo que el usuario escribi&oacute;:
                $_POST['nombre']       = '';
                $_POST['nombreApe']       = '';
                $_POST['direccion']    = '';
                $_POST['domicilio']    = '';
                $_POST['localidad']    = '';
                $_POST['codigopostal'] = '';
                $_POST['provincia']    = '';
                $_POST['pais']         = '';
                $_POST['fecha']        = '';
                $_POST['email']        = '';
                $_POST['website']      = '';
                $_POST['facebook']     = '';
                $_POST['telefono']     = '';
                $_POST['empresa']      = '';
                $_POST['cargo']        = '';
                $_POST['rubro']        = '';
                $_POST['mensaje']      = '';

            } else {
//INICIA MENSAJE ERROR EN $status
                $status = '<p class="status error">'._("$statusErrorGlobalA").' <span class="displayBlock">'._("$statusErrorGlobalB").'</span></p>';
                $mandatoryMessageClasses = 'displayNone';
//FIN mensaje error en $status
                
//INICIA MENSAJE ERROR EN POPUP
                $status = '<div class="popup statusDiv"><a href="javascript:void(0)" class="close displayBlock pAbs sprites indentedText">'._("Cerrar").'</a><p class="status error">'._("$statusErrorGlobalA").' <span class="displayBlock">'._("$statusErrorGlobalB").'</span></p></div><div class="modalBG"></div>';
                $mandatoryMessageClasses = 'displayNone';
//FIN mensaje error en popup
            }
        }
    }