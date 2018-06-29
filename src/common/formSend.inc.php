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
    
    
    
// reCAPTCHA validation
    require_once('/lib/recaptchalib.php');
    $privatekey = "your_private_key";
    $resp = recaptcha_check_answer ($privatekey,
        $_SERVER["REMOTE_ADDR"],
        $_POST["recaptcha_challenge_field"],
        $_POST["recaptcha_response_field"]);

    if (!$resp->is_valid) {
      // What happens when the CAPTCHA was entered incorrectly
      die ("Valide la casilla &quot;No soy un robot&quot;, por favor." .
           "(reCAPTCHA said: " . $resp->error . ")");
    } else {
// fin reCAPTCHA validation

        
        
    //Inicia proceso de form
    if (isset($_POST['enviarForm'])){
        //ini_set('sendmail_from','tampas@gmail.com');
        //ini_set('SMTP','mail.gabrielvolonte.com.ar');

        //Asignamos datos de campos a variables
        $nombre         = $_POST['nombre'];
        $apellido       = $_POST['apellido'];
        $nombreApe      = $_POST['nombreApe'];
        $genero         = $_POST['genero'];
        $dni            = $_POST['dni'];
        $direccion      = $_POST['direccion'];
        $domicilio      = $_POST['domicilio'];
        $localidad      = $_POST['localidad'];
        $codigopostal   = $_POST['codigopostal'];
        $provincia      = $_POST['provincia'];
        $pais           = $_POST['pais'];
        $fecha          = $_POST['fecha'];
        $email          = $_POST['email'];
        $website        = $_POST['website'];
        $facebook       = $_POST['facebook'];
        $telefono       = $_POST['telefono'];
        $empresa        = $_POST['empresa'];
        $cargo          = $_POST['cargo'];
        $rubro          = $_POST['rubro'];
        $asuntoSubject  = $_POST['asunto'];
        $mensaje        = $_POST['mensaje'];

        //Cabeceras del correo
        $destino  = "tampas@gmail.com";
        $asunto   = "Contacto Web de $nombre - $empresa";
        $headers  = "From: $nombre <$email>\r\n";
        //$headers .= "Reply-To: $email \r\n";
        $headers .= "Content-type: text/html\r\n";
        $headers .= "X-Mailer: PHP5\n";
        $headers .= 'MIME-Version: 1.0' . "\n";
        //$headers .= "CC: tampas@gmail.com\r\n";
        //$headers .= "BCC: ggvv@hotmail.com.ar\r\n";
        $texto    = "<strong>Nombre:</strong> ".$nombre."<br />";
        $texto   .= "<strong>Apellido:</strong> ".$apellido."<br />";
        $texto   .= "<strong>Nombre y Apellido:</strong> ".$nombreApe."<br />";
        $texto   .= "<strong>Direcci&oacute;n:</strong> ".$direccion."<br />";
        $texto   .= "<strong>Domicilio:</strong> ".$domicilio."<br />";
        $texto   .= "<strong>Sexo:</strong> ".$genero."<br />";
        $texto   .= "<strong>DNI:</strong> ".·dni."<br />";
        $texto   .= "<strong>C&oacute;digo postal:</strong> ".$codigopostal."<br />";
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
        $texto   .= "<strong>Asunto:</strong> ".$asuntoSubject."<br />";
        $texto   .= "<strong>Rubro:</strong> ".$rubro."<br />";
        $texto   .= "<strong>Mensaje:</strong> <br />".$mensaje."<br />_ _ _<br />Fin del mensaje";
        
        //Variables Globales de Error
        $mandatoryMsgErrorClass = " invalidmandatoryMsg";
        $errorMsgNombre         = _("Por favor, ingrese su nombre.");
        $errorMsgApellido       = _("Por favor, ingrese su apellido.");
        $errorMsgNombreApe      = _("Por favor, ingrese su nombre y apellido.");
        $errorMsgDireccion      = _("Por favor, ingrese su direcci&oacute;n.");
        $errorMsgDomicilio      = _("Por favor, ingrese su domicilio.");
        $errorMsgLocalidad      = _("Por favor, ingrese su localidad.");
        $errorMsgCodigoPostal   = _("Por favor, ingrese su c&oacute;digo postal."); 
        $errorMsgProvincia      = _("Por favor, ingrese su provincia.");
        $errorMsgPais           = _("Por favor, ingrese su pa&iacute;s.");
        $errorMsgFecha          = _("Por favor, indique la fecha deseada.");
        $errorMsgEmail          = _("Por favor, ingrese su direcci&oacute;n de correo."); 
        $errorMsgWebsite        = _("Por favor, ingrese su sitio web.");
        $errorMsgFacebook       = _("Por favor, ingrese su perfil de Facebook.");
        $errorMsgTelefono       = _("Por favor, ingrese su n&uacute;mero de tel&eacute;fono."); 
        $errorMsgEmpresa        = _("Por favor, ingrese el nombre de su empresa.");
        $errorMsgCargo          = _("Por favor, ingrese su cargo.");
        $errorMsgRubro          = _("Por favor, ingrese un rubro.");
        $errorMsgAsunto         = _("Por favor, ingrese un asunto.");
        $errorMsgNewsletter     = _("Por favor, elija una opci&oacute;n.");

        
        
//INICIA VALIDACIÓN EN div.mandatoryMsg
        if (empty($_POST["nombre"])) {
            $mandatoryMsg = $errorMsgNombre;
            $mandatoryMsgClasses = $mandatoryMsgErrorClass;
            $invalidFieldNombre = "invalidField";
            $autofocusNombre = "autofocus";
            
        } elseif (empty($_POST["apellido"])) {
            $mandatoryMsg = $errorMsgApellido;
            $mandatoryMsgClasses = $mandatoryMsgErrorClass;
            $invalidFieldApellido = "invalidField";
            $autofocusApellido = "autofocus";
            
        } elseif (empty($_POST["nombreApe"])) {
            $mandatoryMsg = $errorMsgNombreApe;
            $mandatoryMsgClasses = $mandatoryMsgErrorClass;
            $invalidFieldNombreApe = "invalidField";
            $autofocusNombreApe = "autofocus";
            
        } elseif (empty($_POST["dni"])) {
            $mandatoryMsg = $errorMsgDNI;
            $mandatoryMsgClasses = $mandatoryMsgErrorClass;
            $invalidFieldDNI = "invalidField";
            $autofocusDNI = "autofocus";
            
        } elseif (empty($_POST["direccion"])) {
            $mandatoryMsg = $errorMsgDireccion;
            $mandatoryMsgClasses = $mandatoryMsgErrorClass;
            $invalidFieldDireccion = "invalidField";
            $autofocusDireccion = "autofocus";
            
        } elseif (empty($_POST["domicilio"])) {
            $mandatoryMsg = $errorMsgDomicilio;
            $mandatoryMsgClasses = $mandatoryMsgErrorClass;
            $invalidFieldDomicilio = "invalidField";
            $autofocusDomicilio = "autofocus";
            
        } elseif (empty($_POST["localidad"])) {
            $mandatoryMsg = $errorMsgLocalidad;
            $mandatoryMsgClasses = $mandatoryMsgErrorClass;
            $invalidFieldLocalidad = "invalidField";
            $autofocusLocalidad = "autofocus";
            
        } elseif (empty($_POST["codigopostal"])) {
            $mandatoryMsg = $errorMsgCodigoPostal;
            $mandatoryMsgClasses = $mandatoryMsgErrorClass;
            $invalidFieldCodigoPostal = "invalidField";
            $autofocusCodigoPostal = "autofocus";
            
        } elseif (empty($_POST["provincia"])) {
            $mandatoryMsg = $errorMsgProvincia;
            $mandatoryMsgClasses = $mandatoryMsgErrorClass;
            $invalidFieldProvincia = "invalidField";
            $autofocusProvincia = "autofocus";
            
        } elseif (empty($_POST["pais"])) {
            $mandatoryMsg = $errorMsgPais;
            $mandatoryMsgClasses = $mandatoryMsgErrorClass;
            $invalidFieldPais = "invalidField";
            $autofocusPais = "autofocus";
            
        } elseif (empty($_POST["telefono"])) {
            $mandatoryMsg = $errorMsgTelefono;
            $mandatoryMsgClasses = $mandatoryMsgErrorClass;
            $invalidFieldTelefono = "invalidField";
            $autofocusTelefono = "autofocus";
            
        } elseif (empty($_POST["email"])) {
            $mandatoryMsg = $errorMsgEmail;
            $mandatoryMsgClasses = $mandatoryMsgErrorClass;
            $invalidFieldEmail = "invalidField";
            $autofocusEmail = "autofocus";
            
        } elseif (empty($_POST["website"])) {
            $mandatoryMsg = $errorMsgWebsite;
            $mandatoryMsgClasses = $mandatoryMsgErrorClass;
            $invalidFieldWebsite = "invalidField";
            $autofocusWebsite = "autofocus";
            
        } elseif (empty($_POST["facebook"])) {
            $mandatoryMsg = $errorMsgFacebook;
            $mandatoryMsgClasses = $mandatoryMsgErrorClass;
            $invalidFieldFacebook = "invalidField";
            $autofocusFacebook = "autofocus";
            
        } elseif (empty($_POST["empresa"])) {
            $mandatoryMsg = $errorMsgEmpresa;
            $mandatoryMsgClasses = $mandatoryMsgErrorClass;
            $invalidFieldEmpresa = "invalidField";
            $autofocusEmpresa = "autofocus";
            
        } elseif (empty($_POST["cargo"])) {
            $mandatoryMsg = $errorMsgCargo;
            $mandatoryMsgClasses = $mandatoryMsgErrorClass;
            $invalidFieldCargo = "invalidField";
            $autofocusCargo = "autofocus";
            
        } elseif (empty($_POST["asunto"])) {
            $mandatoryMsg = $errorMsgAsunto;
            $mandatoryMsgClasses = $mandatoryMsgErrorClass;
            $invalidFieldCargo = "invalidField";
            $autofocusCargo = "autofocus";
            
        } elseif (empty($_POST["fecha"])) {
            $mandatoryMsg = $errorMsgFecha;
            $mandatoryMsgClasses = $mandatoryMsgErrorClass;
            $invalidFieldFecha = "invalidField";
            $autofocusFecha = "autofocus";
            
        } elseif (empty($_POST["rubro"])) {
            $mandatoryMsg = $errorMsgRubro;
            $mandatoryMsgClasses = $mandatoryMsgErrorClass;
            $invalidFieldRubro = "invalidField";
            $autofocusRubro = "autofocus";
            
        } elseif (empty($_POST["newsletter"])) {
            $mandatoryMsg = $errorNewsletter;
            $mandatoryMsgClasses = $mandatoryMsgErrorClass;
            $invalidFieldNewsletter = "invalidField";
            $autofocusNewsletter = "autofocus";
//FIN de validacion en div.mandatoryMsg
                        
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
                       
        } elseif (empty($_POST["dni"])) {
            $errorBelowInputDNI = $errorMsgDNI;
            $errorFormClassDNI = "active";
            $invalidFieldDNI = "invalidField";
            $autofocusDNI = "autofocus";
            
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
            
        } elseif (empty($_POST["asunto"])) {
            $errorBelowInputAsunto = $errorMsgAsunto;
            $errorFormClassAsunto = "active";
            $invalidFieldAsunto = "invalidField";
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
                        . '<button type="button" class="closePop pAbs hoverGrow indentedText">'._("Cerrar").'</button>'
                        . '<h2 id="formOK" class="mbm green alignCenter">'._("$statusOKGlobalA").'</h2>'
                        . '<p class="status ok">'._("$statusOKGlobalB").'</p>'
                        . '<button type="button" class="popOKdialog bgWhite mtl mha arial bold black alignCenter upperCase">'._("OK").'</button>'
                        . '</div>'
                        . '</div>'
                        . '<div class="modalBG"></div>';
                $mandatoryMsgClasses = 'displayNone';
//FIN mensaje ok en popup
                
                // Si el envio fue exitoso reseteamos lo que el usuario escribi&oacute;:
                $_POST['nombre']       = '';
                $_POST['apellido']     = '';
                $_POST['nombreApe']    = '';
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
                $_POST['asunto']       = '';
                $_POST['mensaje']      = '';

            } else {
//INICIA MENSAJE ERROR EN $status
                $status = '<p class="status error" role="alert">'._("$statusErrorGlobalA").' <span class="displayBlock">'._("$statusErrorGlobalB").'</span></p>';
                $mandatoryMsgClasses = 'displayNone';
//FIN mensaje error en $status
                
//INICIA MENSAJE ERROR EN POPUP
                $status = '<div class="popup statusDiv borderBox pal" role="alertdialog" aria-labelledby="formError">'
                        . '<div role="document" tabindex="0">'
                        . '<button type="button" class="closePop pAbs hoverGrow indentedText">'._("Cerrar").'</button>'
                        . '<h2 id="formError" class="mbm errorColour alignCenter">'._("$statusErrorGlobalA").'</h2>'
                        . '<p class="status error">'._("$statusErrorGlobalB").'</p>'
                        . '<button type="button" class="popOKdialog bgWhite mtl mha arial bold black alignCenter upperCase">'._("OK").'</button>'
                        . '</div>'
                        . '</div>'
                        . '<div class="modalBG"></div>';
                $mandatoryMsgClasses = 'displayNone';
//FIN mensaje error en popup
            }
        }
    }
    }
?>