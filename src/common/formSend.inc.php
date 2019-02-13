<?php
    //Variables de Mandatory Message al inicio
    $mandatoryMsg_FormName        = '';
    $mandatoryMsgClasses_FormName = 'displayNone';
    
    //Variables Globlales de Status
    $statusIniGlobal_FormName     = _('Complete el formulario. Nos comunicaremos con Ud. a la brevedad.');
    $statusIniGlobalA_FormName    = _('Complete el formulario.');
    $statusIniGlobalB_FormName    = _('Nos comunicaremos con Ud. a la brevedad.');
    
    $statusOKGlobalA_FormName      = _('Env&iacute;o exitoso.');
    $statusOKGlobalB_FormName      = _('Los datos se han enviado correctamente, nos comunicaremos a la brevedad. Muchas Gracias.');
    $statusErrorGlobalA_FormName  = _('Hubo un error al enviar el mensaje.');
    $statusErrorGlobalB_FormName  = _('Intente nuevamente m&aacute;s tarde.');

    //Variables de fuente de título de pop
    $PopOKFontFamily_FormName    = '';
    $PopErrorFontFamily_FormName = '';
    
    //Status Ini
    //$status_FormName = '<p class="status ini">'.$statusIniGlobal_FormName.'</p>';
        
    //Inicia proceso de form
    if (isset($_POST['enviarForm_FormName'])){
        //ini_set('sendmail_from','tampas@gmail.com');
        //ini_set('SMTP','mail.gabrielvolonte.com.ar');

        //Asignamos datos de campos a variables
        $nombre_FormName         = $_POST['nombre_FormName'];
        $apellido_FormName       = $_POST['apellido_FormName'];
        $nombreApe_FormName      = $_POST['nombreApe_FormName'];
        $nombreComp_FormName     = $_POST['nombreComp_FormName'];
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
        $texto   .= "<strong>Nombre completo:</strong> ".$nombreComp_FormName."<br />";
        $texto   .= "<strong>Direcci&oacute;n:</strong> ".$direccion_FormName."<br />";
        $texto   .= "<strong>Domicilio:</strong> ".$domicilio_FormName."<br />";
        $texto   .= "<strong>Sexo:</strong> ".$genero_FormName."<br />";
        $texto   .= "<strong>DNI:</strong> ".$dni_FormName."<br />";
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
        $errorMsgNombreComp_FormName     = _("Por favor, ingrese su nombre completo.");
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
            $mandatoryMsg_FormName = $errorMsgNombre_FormName;
            $mandatoryMsgClasses_FormName = $mandatoryMsgErrorClass;
            $invalidFieldNombre_FormName = "invalidField";
            $autofocusNombre_FormName = "autofocus";
            
        } elseif (empty($_POST["apellido_FormName"])) {
            $mandatoryMsg_FormName = $errorMsgApellido_FormName;
            $mandatoryMsgClasses_FormName = $mandatoryMsgErrorClass;
            $invalidFieldApellido_FormName = "invalidField";
            $autofocusApellido_FormName = "autofocus";
            
        } elseif (empty($_POST["nombreApe_FormName"])) {
            $mandatoryMsg_FormName = $errorMsgNombreApe_FormName;
            $mandatoryMsgClasses_FormName = $mandatoryMsgErrorClass;
            $invalidFieldNombreApe_FormName = "invalidField";
            $autofocusNombreApe_FormName = "autofocus";
            
        } elseif (empty($_POST["nombreComp_FormName"])) {
            $mandatoryMsg_FormName = $errorMsgNombreComp_FormName;
            $mandatoryMsgClasses_FormName = $mandatoryMsgErrorClass;
            $invalidFieldNombreComp_FormName = "invalidField";
            $autofocusNombreComp_FormName = "autofocus";
            
        } elseif (empty($_POST["dni_FormName"])) {
            $mandatoryMsg_FormName = $errorMsgDNI_FormName;
            $mandatoryMsgClasses_FormName = $mandatoryMsgErrorClass;
            $invalidFieldDNI_FormName = "invalidField";
            $autofocusDNI_FormName = "autofocus";
            
        } elseif (empty($_POST["direccion_FormName"])) {
            $mandatoryMsg_FormName = $errorMsgDireccion_FormName;
            $mandatoryMsgClasses_FormName = $mandatoryMsgErrorClass;
            $invalidFieldDireccion_FormName = "invalidField";
            $autofocusDireccion_FormName = "autofocus";
            
        } elseif (empty($_POST["domicilio_FormName"])) {
            $mandatoryMsg_FormName = $errorMsgDomicilio_FormName;
            $mandatoryMsgClasses_FormName = $mandatoryMsgErrorClass;
            $invalidFieldDomicilio_FormName = "invalidField";
            $autofocusDomicilio_FormName = "autofocus";
            
        } elseif (empty($_POST["localidad_FormName"])) {
            $mandatoryMsg_FormName = $errorMsgLocalidad_FormName;
            $mandatoryMsgClasses_FormName = $mandatoryMsgErrorClass;
            $invalidFieldLocalidad_FormName = "invalidField";
            $autofocusLocalidad_FormName = "autofocus";
            
        } elseif (empty($_POST["codigopostal_FormName"])) {
            $mandatoryMsg_FormName = $errorMsgCodigoPostal_FormName;
            $mandatoryMsgClasses_FormName = $mandatoryMsgErrorClass;
            $invalidFieldCodigoPostal_FormName = "invalidField";
            $autofocusCodigoPostal_FormName = "autofocus";
            
        } elseif (empty($_POST["provincia_FormName"])) {
            $mandatoryMsg_FormName = $errorMsgProvincia_FormName;
            $mandatoryMsgClasses_FormName = $mandatoryMsgErrorClass;
            $invalidFieldProvincia_FormName = "invalidField";
            $autofocusProvincia_FormName = "autofocus";
            
        } elseif (empty($_POST["pais_FormName"])) {
            $mandatoryMsg_FormName = $errorMsgPais_FormName;
            $mandatoryMsgClasses_FormName = $mandatoryMsgErrorClass;
            $invalidFieldPais_FormName = "invalidField";
            $autofocusPais_FormName = "autofocus";
            
        } elseif (empty($_POST["telefono_FormName"])) {
            $mandatoryMsg_FormName = $errorMsgTelefono_FormName;
            $mandatoryMsgClasses_FormName = $mandatoryMsgErrorClass;
            $invalidFieldTelefono_FormName = "invalidField";
            $autofocusTelefono_FormName = "autofocus";
            
        } elseif (empty($_POST["email_FormName"])) {
            $mandatoryMsg_FormName = $errorMsgEmail_FormName;
            $mandatoryMsgClasses_FormName = $mandatoryMsgErrorClass;
            $invalidFieldEmail_FormName = "invalidField";
            $autofocusEmail_FormName = "autofocus";
            
        } elseif (empty($_POST["website_FormName"])) {
            $mandatoryMsg_FormName = $errorMsgWebsite_FormName;
            $mandatoryMsgClasses_FormName = $mandatoryMsgErrorClass;
            $invalidFieldWebsite_FormName = "invalidField";
            $autofocusWebsite_FormName = "autofocus";
            
        } elseif (empty($_POST["facebook_FormName"])) {
            $mandatoryMsg_FormName = $errorMsgFacebook_FormName;
            $mandatoryMsgClasses_FormName = $mandatoryMsgErrorClass;
            $invalidFieldFacebook_FormName = "invalidField";
            $autofocusFacebook_FormName = "autofocus";
            
        } elseif (empty($_POST["empresa_FormName"])) {
            $mandatoryMsg_FormName = $errorMsgEmpresa_FormName;
            $mandatoryMsgClasses_FormName = $mandatoryMsgErrorClass;
            $invalidFieldEmpresa_FormName = "invalidField";
            $autofocusEmpresa_FormName = "autofocus";
            
        } elseif (empty($_POST["razonSocial_FormName"])) {
            $mandatoryMsg_FormName = $errorMsgRazonSocial_FormName;
            $mandatoryMsgClasses_FormName = $mandatoryMsgErrorClass;
            $invalidFieldRazonSocial_FormName = "invalidField";
            $autofocusRazonSocial_FormName = "autofocus";
            
        } elseif (empty($_POST["cargo_FormName"])) {
            $mandatoryMsg_FormName = $errorMsgCargo_FormName;
            $mandatoryMsgClasses_FormName = $mandatoryMsgErrorClass;
            $invalidFieldCargo_FormName = "invalidField";
            $autofocusCargo_FormName = "autofocus";
            
        } elseif (empty($_POST["asunto_FormName"])) {
            $mandatoryMsg_FormName = $errorMsgAsunto_FormName;
            $mandatoryMsgClasses_FormName = $mandatoryMsgErrorClass;
            $invalidFieldCargo_FormName = "invalidField";
            $autofocusCargo_FormName = "autofocus";
            
        } elseif (empty($_POST["fecha_FormName"])) {
            $mandatoryMsg_FormName = $errorMsgFecha_FormName;
            $mandatoryMsgClasses_FormName = $mandatoryMsgErrorClass;
            $invalidFieldFecha_FormName = "invalidField";
            $autofocusFecha_FormName = "autofocus";
            
        } elseif (empty($_POST["rubro_FormName"])) {
            $mandatoryMsg_FormName = $errorMsgRubro_FormName;
            $mandatoryMsgClasses_FormName = $mandatoryMsgErrorClass;
            $invalidFieldRubro_FormName = "invalidField";
            $autofocusRubro_FormName = "autofocus";
            
        } elseif (empty($_POST["newsletter_FormName"])) {
            $mandatoryMsg_FormName = $errorNewsletter_FormName;
            $mandatoryMsgClasses_FormName = $mandatoryMsgErrorClass;
            $invalidFieldNewsletter_FormName = "invalidField";
            $autofocusNewsletter_FormName = "autofocus";
            
        } elseif (empty($_POST["mensaje_FormName"])) {
            $mandatoryMsg_FormName = $errorMensaje_FormName;
            $mandatoryMsgClasses_FormName = $mandatoryMsgErrorClass;
            $invalidFieldMensaje_FormName = "invalidField";
            $autofocusMensaje_FormName = "autofocus";
//FIN de validacion en div.mandatoryMsg
                      
            
            
//INICIA VALIDACIÓN DEBAJO DE CADA INPUT
        if (empty($_POST["nombre_FormName"])) {
            $errorBelowInputNombre = $errorMsgNombre_FormName;
            $errorFormClassNombre_FormName = "active";
            $invalidFieldNombre_FormName = "invalidField";
            $autofocusNombre_FormName = "autofocus";
                       
        } elseif (empty($_POST["apellido_FormName"])) {
            $errorBelowInputApellido = $errorMsgApellido_FormName;
            $errorFormClassApellido_FormName = "active";
            $invalidFieldApellido_FormName = "invalidField";
            $autofocusApellido_FormName = "autofocus";
                       
        } elseif (empty($_POST["nombreApe_FormName"])) {
            $errorBelowInputNombreApe = $errorMsgNombreApe_FormName;
            $errorFormClassNombreApe_FormName = "active";
            $invalidFieldNombreApe_FormName = "invalidField";
            $autofocusNombreApe_FormName = "autofocus";
                       
        } elseif (empty($_POST["nombreComp_FormName"])) {
            $errorBelowInputNombreComp = $errorMsgNombreComp_FormName;
            $errorFormClassNombreComp_FormName = "active";
            $invalidFieldNombreComp_FormName = "invalidField";
            $autofocusNombreComp_FormName = "autofocus";
                       
        } elseif (empty($_POST["dni_FormName"])) {
            $errorBelowInputDNI = $errorMsgDNI_FormName;
            $errorFormClassDNI_FormName = "active";
            $invalidFieldDNI_FormName = "invalidField";
            $autofocusDNI_FormName = "autofocus";
            
        } elseif (empty($_POST["direccion_FormName"])) {
            $errorBelowInputDireccion = $errorMsgDireccion_FormName;
            $errorFormClassDireccion_FormName = "active";
            $invalidFieldDireccion_FormName = "invalidField";
            $autofocusDireccion_FormName = "autofocus";
            
        } elseif (empty($_POST["domicilio_FormName"])) {
            $errorBelowInputDomicilio = $errorMsgDomicilio_FormName;
            $errorFormClassDomicilio_FormName = "active";
            $invalidFieldDomicilio_FormName = "invalidField";
            $autofocusDomicilio_FormName = "autofocus";
            
        } elseif (empty($_POST["localidad_FormName"])) {
            $errorBelowInputLocalidad = $errorMsgLocalidad_FormName;
            $errorFormClassLocalidad_FormName = "active";
            $invalidFieldLocalidad_FormName = "invalidField";
            $autofocusLocalidad_FormName = "autofocus";
            
        } elseif (empty($_POST["codigopostal_FormName"])) {
            $errorBelowInputCodigoPostal = $errorMsgCodigoPostal_FormName;
            $invalidFieldCodigoPostal_FormName = "invalidField";
            $autofocusCodigoPostal_FormName = "autofocus";
            
        } elseif (empty($_POST["provincia_FormName"])) {
            $errorBelowInputProvincia = $errorMsgProvincia_FormName;
            $errorFormClassProvincia_FormName = "active";
            $invalidFieldProvincia_FormName = "invalidField";
            $autofocusProvincia_FormName = "autofocus";
            
        } elseif (empty($_POST["pais_FormName"])) {
            $errorBelowInputPais = $errorMsgPais_FormName;
            $errorFormClassPais_FormName = "active";
            $invalidFieldPais_FormName = "invalidField";
            $autofocusPais_FormName = "autofocus";
            
        } elseif (empty($_POST["telefono_FormName"])) {
            $errorBelowInputTelefono = $errorMsgTelefono_FormName;
            $errorFormClassTelefono_FormName = "active";
            $invalidFieldTelefono_FormName = "invalidField";
            $autofocusTelefono_FormName = "autofocus";
            
        } elseif (empty($_POST["email_FormName"])) {
            $errorBelowInputEmail = $errorMsgEmail_FormName;
            $errorFormClassEmail_FormName = "active";
            $invalidFieldEmail_FormName = "invalidField";
            $autofocusEmail_FormName = "autofocus";
            
        } elseif (empty($_POST["website_FormName"])) {
            $errorBelowInputWebsite = $errorMsgWebsite_FormName;
            $errorFormClassWebsite_FormName = "active";
            $invalidFieldWebsite_FormName = "invalidField";
            $autofocusWebsite_FormName = "autofocus";
            
        } elseif (empty($_POST["facebook_FormName"])) {
            $errorBelowInputFacebook = $errorMsgFacebook_FormName;
            $errorFormClassFacebook_FormName = "active";
            $invalidFieldFacebook_FormName = "invalidField";
            $autofocusFacebook_FormName = "autofocus";
            
        } elseif (empty($_POST["empresa_FormName"])) {
            $errorBelowInputEmpresa = $errorMsgEmpresa_FormName;
            $errorFormClassEmpresa_FormName = "active";
            $invalidFieldEmpresa_FormName = "invalidField";
            $autofocusEmpresa_FormName = "autofocus";
            
        } elseif (empty($_POST["razonSocial_FormName"])) {
            $errorBelowInputRazonSocial = $errorMsgRazonSocial_FormName;
            $errorFormClassRazonSocial_FormName = "active";
            $invalidFieldRazonSocial_FormName = "invalidField";
            $autofocusRazonSocial_FormName = "autofocus";
            
        } elseif (empty($_POST["cargo_FormName"])) {
            $errorBelowInputCargo = $errorMsgCargo_FormName;
            $errorFormClassCargo_FormName = "active";
            $invalidFieldCargo_FormName = "invalidField";
            $autofocusCargo_FormName = "autofocus";
            
        } elseif (empty($_POST["asunto_FormName"])) {
            $errorBelowInputAsunto = $errorMsgAsunto_FormName;
            $errorFormClassAsunto_FormName = "active";
            $invalidFieldAsunto_FormName = "invalidField";
            $autofocusCargo_FormName = "autofocus";
            
        } elseif (empty($_POST["fecha_FormName"])) {
            $errorBelowInputFecha = $errorMsgFecha_FormName;
            $errorFormClassFecha_FormName = "active";
            $invalidFieldFecha_FormName = "invalidField";
            $autofocusFecha_FormName = "autofocus";
            
        } elseif (empty($_POST["rubro_FormName"])) {
            $errorBelowInputRubro = $errorMsgRubro_FormName;
            $errorFormClassRubro_FormName = "active";
            $invalidFieldRubro_FormName = "invalidField";
            $autofocusRubro_FormName = "autofocus";
            
        } elseif (empty($_POST["mensaje_FormName"])) {
            $errorBelowInputMensaje = $errorMsgMensaje_FormName;
            $errorFormClassMensaje_FormName = "active";
            $invalidFieldMensaje_FormName = "invalidField";
            $autofocusMensaje_FormName = "autofocus";
//FIN de validacion debajo de cada input
            
            
                        
        } else {
        // Si todos los campos validan se env&iacute;a el correo
            if(mail($destino, $asunto, $texto, $headers)){

            //Redirect
            //echo '<META HTTP-EQUIV="Refresh" Content="0;URL=http://www.gabrielvolonte.com.ar/nuevo/contacto-gracias.php">';
                
//INICIA MENSAJE OK EN $status
                $status_FormName = '<p class="status ok" role="alert">'._("$statusOKGlobalA_FormName").' '._("$statusOKGlobalB_FormName").'</p>';
                $mandatoryMsgClasses_FormName = 'displayNone';
//FIN mensaje ok en $status
                
//INICIA MENSAJE OK EN POPUP
                $status_FormName = '<div class="popup statusDiv borderBox pal" role="alertdialog" aria-labelledby="formOK">'
                        . '<div role="document" tabindex="0">'
                        . '<button type="submit" class="closePop pAbs hoverGrow indentedText">'._("Cerrar").'</button>'
                        . '<h2 id="formOK" class="mbm '. $PopOKFontFamily_FormName .' green alignCenter">'._("$statusOKGlobalA_FormName").'</h2>'
                        . '<p class="status ok">'._("$statusOKGlobalB_FormName").'</p>'
                        . '<button type="submit" class="popOKdialog bgWhite mtl mha arial bold black alignCenter upperCase">'._("OK").'</button>'
                        . '</div>'
                        . '</div>'
                        . '<div class="modalBG"></div>';
                $mandatoryMsgClasses_FormName = 'displayNone';
//FIN mensaje ok en popup
                
                // Si el envio fue exitoso reseteamos lo que el usuario escribi&oacute;:
                $_POST['nombre_FormName']       = '';
                $_POST['apellido_FormName']     = '';
                $_POST['nombreApe_FormName']    = '';     
                $_POST['nombreComp_FormName']    = '';               
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
                $status_FormName = '<p class="status error" role="alert">'._("$statusErrorGlobalA_FormName").' <span class="displayBlock">'._("$statusErrorGlobalB_FormName").'</span></p>';
                $mandatoryMsgClasses_FormName = 'displayNone';
//FIN mensaje error en $status
                
//INICIA MENSAJE ERROR EN POPUP
                $status_FormName = '<div class="popup statusDiv borderBox pal" role="alertdialog" aria-labelledby="formError">'
                        . '<div role="document" tabindex="0">'
                        . '<button type="submit" class="closePop pAbs hoverGrow indentedText">'._("Cerrar").'</button>'
                        . '<h2 id="formError" class="mbm '. $PopErrorFontFamily_FormName .' errorColour alignCenter">'._("$statusErrorGlobalA_FormName").'</h2>'
                        . '<p class="status error">'._("$statusErrorGlobalB_FormName").'</p>'
                        . '<button type="submit" class="popOKdialog bgWhite mtl mha arial bold black alignCenter upperCase">'._("OK").'</button>'
                        . '</div>'
                        . '</div>'
                        . '<div class="modalBG"></div>';
                $mandatoryMsgClasses_FormName = 'displayNone';
//FIN mensaje error en popup
            }
        }
    }
?>