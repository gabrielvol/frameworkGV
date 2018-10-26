<?php
    //Variables de Mandatory Message al inicio
    $mandatoryMsg        = '';
    $mandatoryMsgClasses = 'displayNone';
    
    //Variables Globlales de Status
    $statusIniGlobal     = _('Complete el formulario. Nos comunicaremos con Ud. a la brevedad.');
    $statusIniGlobalA    = _('Complete el formulario.');
    $statusIniGlobalB    = _('Nos comunicaremos con Ud. a la brevedad.');
    
    $statusOKGlobalA      = _('Env&iacute;o exitoso.');
    $statusOKGlobalB      = _('Los datos se han enviado correctamente, nos comunicaremos a la brevedad. Muchas Gracias.');
    $statusErrorGlobalA  = _('Hubo un error al enviar el mensaje.');
    $statusErrorGlobalB  = _('Intente nuevamente m&aacute;s tarde.');

    //Status Ini
    //$status = '<p class="status ini">'.$statusIniGlobal.'</p>';
        
    //Inicia proceso de form
    if (isset($_POST['enviarForm_FormName'])){
        //ini_set('sendmail_from','tampas@gmail.com');
        //ini_set('SMTP','mail.gabrielvolonte.com.ar');

        //Asignamos datos de campos a variables
        $nombre_FormName         = $_POST['nombre_FormName'];
        $apellido_FormName       = $_POST['apellido_FormName'];
        $nombreApe_FormName      = $_POST['nombreApe_FormName'];
        $genero_FormName         = $_POST['genero_FormName'];
        $dni_FormName            = $_POST['dni_FormName'];
        $direccion_FormName      = $_POST['direccion_FormName'];
        $domicilio_FormName      = $_POST['domicilio_FormName'];
        $localidad_FormName      = $_POST['localidad_FormName'];
        $codigopostal_FormName   = $_POST['codigopostal_FormName'];
        $provincia_FormName      = $_POST['provincia_FormName'];
        $pais_FormName           = $_POST['pais_FormName'];
        $fecha_FormName          = $_POST['fecha_FormName'];
        $email_FormName          = $_POST['email_FormName'];
        $website_FormName        = $_POST['website_FormName'];
        $facebook_FormName       = $_POST['facebook_FormName'];
        $telefono_FormName       = $_POST['telefono_FormName'];
        $empresa_FormName        = $_POST['empresa_FormName'];
        $razonSocial_FormName    = $_POST['razonSocial_FormName'];
        $cargo_FormName          = $_POST['cargo_FormName'];
        $rubro_FormName          = $_POST['rubro_FormName'];
        $asuntoSubject_FormName  = $_POST['asunto_FormName'];
        $mensaje_FormName        = $_POST['mensaje_FormName'];

        //Cabeceras del correo
        $destino  = "tampas@gmail.com";
        $asunto   = "Contacto Web de $nombre_FormName - $empresa_FormName";
        $headers  = "From: $nombre_FormName <$email_FormName>\r\n";
        //$headers .= "Reply-To: $email_FormName \r\n";
        $headers .= "Content-type: text/html\r\n";
        $headers .= "X-Mailer: PHP5\n";
        $headers .= 'MIME-Version: 1.0' . "\n";
        //$headers .= "CC: tampas@gmail.com\r\n";
        //$headers .= "BCC: ggvv@hotmail.com.ar\r\n";
        $texto    = "<strong>Nombre:</strong> ".$nombre_FormName."<br />";
        $texto   .= "<strong>Apellido:</strong> ".$apellido_FormName."<br />";
        $texto   .= "<strong>Nombre y Apellido:</strong> ".$nombreApe_FormName."<br />";
        $texto   .= "<strong>Direcci&oacute;n:</strong> ".$direccion_FormName."<br />";
        $texto   .= "<strong>Domicilio:</strong> ".$domicilio_FormName."<br />";
        $texto   .= "<strong>Sexo:</strong> ".$genero_FormName."<br />";
        $texto   .= "<strong>DNI:</strong> ".·dni_FormName."<br />";
        $texto   .= "<strong>C&oacute;digo postal:</strong> ".$codigopostal_FormName."<br />";
        $texto   .= "<strong>Localidad:</strong> ".$localidad_FormName."<br />";
        $texto   .= "<strong>Provincia:</strong> ".$provincia_FormName."<br />";
        $texto   .= "<strong>Pa&iacute;s:</strong> ".$pais_FormName."<br />";
        $texto   .= "<strong>Fecha:</strong> ".$fecha_FormName."<br />";
        $texto   .= "<strong>Correo electr&oacute;nico:</strong> ".$email_FormName."<br />";
        $texto   .= "<strong>Sitio web:</strong> ".$website_FormName."<br />";
        $texto   .= "<strong>Perfil de Facebook:</strong> ".$facebook_FormName."<br />";
        $texto   .= "<strong>Tel&eacute;fono:</strong> ".$telefono_FormName."<br />";
        $texto   .= "<strong>Empresa:</strong> ".$empresa_FormName."<br />";
        $texto   .= "<strong>Raz&oacute;n Social:</strong> ".$razonSocial_FormName."<br />";
        $texto   .= "<strong>Cargo:</strong> ".$cargo_FormName."<br />";
        $texto   .= "<strong>Asunto:</strong> ".$asuntoSubject_FormName."<br />";
        $texto   .= "<strong>Rubro:</strong> ".$rubro_FormName."<br />";
        $texto   .= "<strong>Mensaje:</strong> <br />".$_FormNamemensaje."<br />_ _ _<br />Fin del mensaje";
        
        //Variables Globales de Error
        $mandatoryMsgErrorClass = " invalidmandatoryMsg";
        $errorMsgNombre_FormName         = _("Por favor, ingrese su nombre.");
        $errorMsgApellido_FormName       = _("Por favor, ingrese su apellido.");
        $errorMsgNombreApe_FormName      = _("Por favor, ingrese su nombre y apellido.");
        $errorMsgDireccion_FormName      = _("Por favor, ingrese su direcci&oacute;n.");
        $errorMsgDomicilio_FormName      = _("Por favor, ingrese su domicilio.");
        $errorMsgLocalidad_FormName      = _("Por favor, ingrese su localidad.");
        $errorMsgCodigoPostal_FormName   = _("Por favor, ingrese su c&oacute;digo postal."); 
        $errorMsgProvincia_FormName      = _("Por favor, ingrese su provincia.");
        $errorMsgPais_FormName           = _("Por favor, ingrese su pa&iacute;s.");
        $errorMsgFecha_FormName          = _("Por favor, indique la fecha deseada.");
        $errorMsgDNI_FormName            = _("Por favor, ingrese su n&uacute;mero de DNI.");
        $errorMsgEmail_FormName          = _("Por favor, ingrese su direcci&oacute;n de correo."); 
        $errorMsgWebsite_FormName        = _("Por favor, ingrese su sitio web.");
        $errorMsgFacebook_FormName       = _("Por favor, ingrese su perfil de Facebook.");
        $errorMsgTelefono_FormName       = _("Por favor, ingrese su n&uacute;mero de tel&eacute;fono."); 
        $errorMsgEmpresa_FormName        = _("Por favor, ingrese el nombre de su empresa.");
        $errorMsgRazonSocial_FormName    = _("Por favor, ingrese su raz&oacute;n social.");
        $errorMsgCargo_FormName          = _("Por favor, ingrese su cargo.");
        $errorMsgRubro_FormName          = _("Por favor, ingrese un rubro.");
        $errorMsgAsunto_FormName         = _("Por favor, ingrese un asunto.");
        $errorMsgNewsletter_FormName     = _("Por favor, elija una opci&oacute;n.");
        $errorMsgMensaje_FormName        = _("Por favor, complete su mensaje.");

        
            
//INICIA VALIDACIÓN EN div.mandatoryMsg
        if (empty($_POST["nombre_FormName"])) {
            $mandatoryMsg = $errorMsgNombre_FormName;
            $mandatoryMsgClasses = $mandatoryMsgErrorClass;
            $invalidFieldNombre_FormName = "invalidField";
            $autofocusNombre_FormName = "autofocus";
            
        } elseif (empty($_POST["apellido_FormName"])) {
            $mandatoryMsg = $errorMsgApellido_FormName;
            $mandatoryMsgClasses = $mandatoryMsgErrorClass;
            $invalidFieldApellido_FormName = "invalidField";
            $autofocusApellido_FormName = "autofocus";
            
        } elseif (empty($_POST["nombreApe_FormName"])) {
            $mandatoryMsg = $errorMsgNombreApe_FormName;
            $mandatoryMsgClasses = $mandatoryMsgErrorClass;
            $invalidFieldNombreApe_FormName = "invalidField";
            $autofocusNombreApe_FormName = "autofocus";
            
        } elseif (empty($_POST["dni_FormName"])) {
            $mandatoryMsg = $errorMsgDNI_FormName;
            $mandatoryMsgClasses = $mandatoryMsgErrorClass;
            $invalidFieldDNI_FormName = "invalidField";
            $autofocusDNI_FormName = "autofocus";
            
        } elseif (empty($_POST["direccion_FormName"])) {
            $mandatoryMsg = $errorMsgDireccion_FormName;
            $mandatoryMsgClasses = $mandatoryMsgErrorClass;
            $invalidFieldDireccion_FormName = "invalidField";
            $autofocusDireccion_FormName = "autofocus";
            
        } elseif (empty($_POST["domicilio_FormName"])) {
            $mandatoryMsg = $errorMsgDomicilio_FormName;
            $mandatoryMsgClasses = $mandatoryMsgErrorClass;
            $invalidFieldDomicilio_FormName = "invalidField";
            $autofocusDomicilio_FormName = "autofocus";
            
        } elseif (empty($_POST["localidad_FormName"])) {
            $mandatoryMsg = $errorMsgLocalidad_FormName;
            $mandatoryMsgClasses = $mandatoryMsgErrorClass;
            $invalidFieldLocalidad_FormName = "invalidField";
            $autofocusLocalidad_FormName = "autofocus";
            
        } elseif (empty($_POST["codigopostal_FormName"])) {
            $mandatoryMsg = $errorMsgCodigoPostal_FormName;
            $mandatoryMsgClasses = $mandatoryMsgErrorClass;
            $invalidFieldCodigoPostal_FormName = "invalidField";
            $autofocusCodigoPostal_FormName = "autofocus";
            
        } elseif (empty($_POST["provincia_FormName"])) {
            $mandatoryMsg = $errorMsgProvincia_FormName;
            $mandatoryMsgClasses = $mandatoryMsgErrorClass;
            $invalidFieldProvincia_FormName = "invalidField";
            $autofocusProvincia_FormName = "autofocus";
            
        } elseif (empty($_POST["pais_FormName"])) {
            $mandatoryMsg = $errorMsgPais_FormName;
            $mandatoryMsgClasses = $mandatoryMsgErrorClass;
            $invalidFieldPais_FormName = "invalidField";
            $autofocusPais_FormName = "autofocus";
            
        } elseif (empty($_POST["telefono_FormName"])) {
            $mandatoryMsg = $errorMsgTelefono_FormName;
            $mandatoryMsgClasses = $mandatoryMsgErrorClass;
            $invalidFieldTelefono_FormName = "invalidField";
            $autofocusTelefono_FormName = "autofocus";
            
        } elseif (empty($_POST["email_FormName"])) {
            $mandatoryMsg = $errorMsgEmail_FormName;
            $mandatoryMsgClasses = $mandatoryMsgErrorClass;
            $invalidFieldEmail_FormName = "invalidField";
            $autofocusEmail_FormName = "autofocus";
            
        } elseif (empty($_POST["website_FormName"])) {
            $mandatoryMsg = $errorMsgWebsite_FormName;
            $mandatoryMsgClasses = $mandatoryMsgErrorClass;
            $invalidFieldWebsite_FormName = "invalidField";
            $autofocusWebsite_FormName = "autofocus";
            
        } elseif (empty($_POST["facebook_FormName"])) {
            $mandatoryMsg = $errorMsgFacebook_FormName;
            $mandatoryMsgClasses = $mandatoryMsgErrorClass;
            $invalidFieldFacebook_FormName = "invalidField";
            $autofocusFacebook_FormName = "autofocus";
            
        } elseif (empty($_POST["empresa_FormName"])) {
            $mandatoryMsg = $errorMsgEmpresa_FormName;
            $mandatoryMsgClasses = $mandatoryMsgErrorClass;
            $invalidFieldEmpresa_FormName = "invalidField";
            $autofocusEmpresa_FormName = "autofocus";
            
        } elseif (empty($_POST["razonSocial_FormName"])) {
            $mandatoryMsg = $errorMsgRazonSocial_FormName;
            $mandatoryMsgClasses = $mandatoryMsgErrorClass;
            $invalidFieldRazonSocial_FormName = "invalidField";
            $autofocusRazonSocial_FormName = "autofocus";
            
        } elseif (empty($_POST["cargo_FormName"])) {
            $mandatoryMsg = $errorMsgCargo_FormName;
            $mandatoryMsgClasses = $mandatoryMsgErrorClass;
            $invalidFieldCargo_FormName = "invalidField";
            $autofocusCargo_FormName = "autofocus";
            
        } elseif (empty($_POST["asunto_FormName"])) {
            $mandatoryMsg = $errorMsgAsunto_FormName;
            $mandatoryMsgClasses = $mandatoryMsgErrorClass;
            $invalidFieldCargo_FormName = "invalidField";
            $autofocusCargo_FormName = "autofocus";
            
        } elseif (empty($_POST["fecha_FormName"])) {
            $mandatoryMsg = $errorMsgFecha_FormName;
            $mandatoryMsgClasses = $mandatoryMsgErrorClass;
            $invalidFieldFecha_FormName = "invalidField";
            $autofocusFecha_FormName = "autofocus";
            
        } elseif (empty($_POST["rubro_FormName"])) {
            $mandatoryMsg = $errorMsgRubro_FormName;
            $mandatoryMsgClasses = $mandatoryMsgErrorClass;
            $invalidFieldRubro_FormName = "invalidField";
            $autofocusRubro_FormName = "autofocus";
            
        } elseif (empty($_POST["newsletter_FormName"])) {
            $mandatoryMsg = $errorNewsletter_FormName;
            $mandatoryMsgClasses = $mandatoryMsgErrorClass;
            $invalidFieldNewsletter_FormName = "invalidField";
            $autofocusNewsletter_FormName = "autofocus";
            
        } elseif (empty($_POST["mensaje_FormName"])) {
            $mandatoryMsg = $errorMensaje_FormName;
            $mandatoryMsgClasses = $mandatoryMsgErrorClass;
            $invalidFieldMensaje_FormName = "invalidField";
            $autofocusMensaje_FormName = "autofocus";
//FIN de validacion en div.mandatoryMsg
                      
            
            
//INICIA VALIDACIÓN DEBAJO DE CADA INPUT
        if (empty($_POST["nombre_FormName"])) {
            $errorBelowInputNombre = $errorMsgNombre_FormName;
            $errorFormClassNombre = "active";
            $invalidFieldNombre_FormName = "invalidField";
            $autofocusNombre_FormName = "autofocus";
                       
        } elseif (empty($_POST["apellido_FormName"])) {
            $errorBelowInputApellido = $errorMsgApellido_FormName;
            $errorFormClassApellido = "active";
            $invalidFieldApellido_FormName = "invalidField";
            $autofocusApellido_FormName = "autofocus";
                       
        } elseif (empty($_POST["nombreApe_FormName"])) {
            $errorBelowInputNombreApe = $errorMsgNombreApe_FormName;
            $errorFormClassNombreApe = "active";
            $invalidFieldNombreApe_FormName = "invalidField";
            $autofocusNombreApe_FormName = "autofocus";
                       
        } elseif (empty($_POST["dni_FormName"])) {
            $errorBelowInputDNI = $errorMsgDNI_FormName;
            $errorFormClassDNI = "active";
            $invalidFieldDNI_FormName = "invalidField";
            $autofocusDNI_FormName = "autofocus";
            
        } elseif (empty($_POST["direccion_FormName"])) {
            $errorBelowInputDireccion = $errorMsgDireccion_FormName;
            $errorFormClassDireccion = "active";
            $invalidFieldDireccion_FormName = "invalidField";
            $autofocusDireccion_FormName = "autofocus";
            
        } elseif (empty($_POST["domicilio_FormName"])) {
            $errorBelowInputDomicilio = $errorMsgDomicilio_FormName;
            $errorFormClassDomicilio = "active";
            $invalidFieldDomicilio_FormName = "invalidField";
            $autofocusDomicilio_FormName = "autofocus";
            
        } elseif (empty($_POST["localidad_FormName"])) {
            $errorBelowInputLocalidad = $errorMsgLocalidad_FormName;
            $errorFormClassLocalidad = "active";
            $invalidFieldLocalidad_FormName = "invalidField";
            $autofocusLocalidad_FormName = "autofocus";
            
        } elseif (empty($_POST["codigopostal_FormName"])) {
            $errorBelowInputCodigoPostal = $errorMsgCodigoPostal_FormName;
            $invalidFieldCodigoPostal_FormName = "invalidField";
            $autofocusCodigoPostal_FormName = "autofocus";
            
        } elseif (empty($_POST["provincia_FormName"])) {
            $errorBelowInputProvincia = $errorMsgProvincia_FormName;
            $errorFormClassProvincia = "active";
            $invalidFieldProvincia_FormName = "invalidField";
            $autofocusProvincia_FormName = "autofocus";
            
        } elseif (empty($_POST["pais_FormName"])) {
            $errorBelowInputPais = $errorMsgPais_FormName;
            $errorFormClassPais = "active";
            $invalidFieldPais_FormName = "invalidField";
            $autofocusPais_FormName = "autofocus";
            
        } elseif (empty($_POST["telefono_FormName"])) {
            $errorBelowInputTelefono = $errorMsgTelefono_FormName;
            $errorFormClassTelefono = "active";
            $invalidFieldTelefono_FormName = "invalidField";
            $autofocusTelefono_FormName = "autofocus";
            
        } elseif (empty($_POST["email_FormName"])) {
            $errorBelowInputEmail = $errorMsgEmail_FormName;
            $errorFormClassEmail = "active";
            $invalidFieldEmail_FormName = "invalidField";
            $autofocusEmail_FormName = "autofocus";
            
        } elseif (empty($_POST["website_FormName"])) {
            $errorBelowInputWebsite = $errorMsgWebsite_FormName;
            $errorFormClassWebsite = "active";
            $invalidFieldWebsite_FormName = "invalidField";
            $autofocusWebsite_FormName = "autofocus";
            
        } elseif (empty($_POST["facebook_FormName"])) {
            $errorBelowInputFacebook = $errorMsgFacebook_FormName;
            $errorFormClassFacebook = "active";
            $invalidFieldFacebook_FormName = "invalidField";
            $autofocusFacebook_FormName = "autofocus";
            
        } elseif (empty($_POST["empresa_FormName"])) {
            $errorBelowInputEmpresa = $errorMsgEmpresa_FormName;
            $errorFormClassEmpresa = "active";
            $invalidFieldEmpresa_FormName = "invalidField";
            $autofocusEmpresa_FormName = "autofocus";
            
        } elseif (empty($_POST["razonSocial_FormName"])) {
            $errorBelowInputRazonSocial = $errorMsgRazonSocial_FormName;
            $errorFormClassRazonSocial = "active";
            $invalidFieldRazonSocial_FormName = "invalidField";
            $autofocusRazonSocial_FormName = "autofocus";
            
        } elseif (empty($_POST["cargo_FormName"])) {
            $errorBelowInputCargo = $errorMsgCargo_FormName;
            $errorFormClassCargo = "active";
            $invalidFieldCargo_FormName = "invalidField";
            $autofocusCargo_FormName = "autofocus";
            
        } elseif (empty($_POST["asunto_FormName"])) {
            $errorBelowInputAsunto = $errorMsgAsunto_FormName;
            $errorFormClassAsunto = "active";
            $invalidFieldAsunto_FormName = "invalidField";
            $autofocusCargo_FormName = "autofocus";
            
        } elseif (empty($_POST["fecha_FormName"])) {
            $errorBelowInputFecha = $errorMsgFecha_FormName;
            $errorFormClassFecha = "active";
            $invalidFieldFecha_FormName = "invalidField";
            $autofocusFecha_FormName = "autofocus";
            
        } elseif (empty($_POST["rubro_FormName"])) {
            $errorBelowInputRubro = $errorMsgRubro_FormName;
            $errorFormClassRubro = "active";
            $invalidFieldRubro_FormName = "invalidField";
            $autofocusRubro_FormName = "autofocus";
            
        } elseif (empty($_POST["mensaje_FormName"])) {
            $errorBelowInputMensaje = $errorMsgMensaje_FormName;
            $errorFormClassMensaje = "active";
            $invalidFieldMensaje_FormName = "invalidField";
            $autofocusMensaje_FormName = "autofocus";
//FIN de validacion debajo de cada input
            
            
                        
        } else {
        // Si todos los campos validan se env&iacute;a el correo
            if(mail($destino, $asunto, $texto, $headers)){

            //Redirect
            //echo '<META HTTP-EQUIV="Refresh" Content="0;URL=http://www.gabrielvolonte.com.ar/nuevo/contacto-gracias.php">';
                
//INICIA MENSAJE OK EN $status
                $status = '<p class="status ok" role="alert">'._("$statusOKGlobalA").' '._("$statusOKGlobalB").'</p>';
                $mandatoryMsgClasses = 'displayNone';
//FIN mensaje ok en $status
                
//INICIA MENSAJE OK EN POPUP
                $status = '<div class="popup statusDiv borderBox pal" role="alertdialog" aria-labelledby="formOK">'
                        . '<div role="document" tabindex="0">'
                        . '<button type="submit" class="closePop pAbs hoverGrow indentedText">'._("Cerrar").'</button>'
                        . '<h2 id="formOK" class="mbm green alignCenter">'._("$statusOKGlobalA").'</h2>'
                        . '<p class="status ok">'._("$statusOKGlobalB").'</p>'
                        . '<button type="submit" class="popOKdialog bgWhite mtl mha arial bold black alignCenter upperCase">'._("OK").'</button>'
                        . '</div>'
                        . '</div>'
                        . '<div class="modalBG"></div>';
                $mandatoryMsgClasses = 'displayNone';
//FIN mensaje ok en popup
                
                // Si el envio fue exitoso reseteamos lo que el usuario escribi&oacute;:
                $_POST['nombre_FormName']       = '';
                $_POST['apellido_FormName']     = '';
                $_POST['nombreApe_FormName']    = '';               
                $_POST['genero_FormName']       = '';
                $_POST['direccion_FormName']    = '';
                $_POST['domicilio_FormName']    = '';
                $_POST['localidad_FormName']    = '';
                $_POST['codigopostal_FormName'] = '';
                $_POST['provincia_FormName']    = '';
                $_POST['pais_FormName']         = '';
                $_POST['fecha_FormName']        = '';
                $_POST['email_FormName']        = '';
                $_POST['website_FormName']      = '';
                $_POST['facebook_FormName']     = '';
                $_POST['telefono_FormName']     = '';
                $_POST['empresa_FormName']      = '';
                $_POST['razonSocial_FormName']  = '';
                $_POST['cargo_FormName']        = '';
                $_POST['rubro_FormName']        = '';
                $_POST['asunto_FormName']       = '';
                $_POST['mensaje_FormName']      = '';

            } else {
//INICIA MENSAJE ERROR EN $status
                $status = '<p class="status error" role="alert">'._("$statusErrorGlobalA").' <span class="displayBlock">'._("$statusErrorGlobalB").'</span></p>';
                $mandatoryMsgClasses = 'displayNone';
//FIN mensaje error en $status
                
//INICIA MENSAJE ERROR EN POPUP
                $status = '<div class="popup statusDiv borderBox pal" role="alertdialog" aria-labelledby="formError">'
                        . '<div role="document" tabindex="0">'
                        . '<button type="submit" class="closePop pAbs hoverGrow indentedText">'._("Cerrar").'</button>'
                        . '<h2 id="formError" class="mbm errorColour alignCenter">'._("$statusErrorGlobalA").'</h2>'
                        . '<p class="status error">'._("$statusErrorGlobalB").'</p>'
                        . '<button type="submit" class="popOKdialog bgWhite mtl mha arial bold black alignCenter upperCase">'._("OK").'</button>'
                        . '</div>'
                        . '</div>'
                        . '<div class="modalBG"></div>';
                $mandatoryMsgClasses = 'displayNone';
//FIN mensaje error en popup
            }
        }
    }
?>