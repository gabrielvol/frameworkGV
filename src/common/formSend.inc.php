<?php
    //Variables de Mandatory Message al inicio
    $mandatoryMessage        = '';
    $mandatoryMessageClasses = 'displayNone';
    
    //Variables Globlales de Status
    $statusIniGlobal    = _('Complete el formulario. Nos comunicaremos con Ud. a la brevedad.');
    $statusIniGlobalA    = _('Complete el formulario.');
    $statusIniGlobalB    = _('Nos comunicaremos con Ud. a la brevedad.');
    
    $statusOKGlobal     = _('Los datos se han enviado correctamente, nos comunicaremos a la brevedad. Muchas Gracias.');
    $statusErrorGlobalA = _('Hubo un error al enviar el mensaje.');
    $statusErrorGlobalB = _('Intente nuevamente m&aacute;s tarde.');

    //Status Ini
    //$status = '<p class="status">'.$statusIniGlobal.'</p>';

    //Inicia proceso de form
    if (isset($_POST['enviarForm'])){
        //ini_set('sendmail_from','tampas@gmail.com');
        //ini_set('SMTP','mail.gabrielvolonte.com.ar');

//VALIDACION DEBAJO DE INPUT
        //Seteamos variables de los mensajes de validación abajo del input
        $errorNombre = "";  
        $errorEmail = "";
//FIN validación debajo de input

        //Asignamos datos de campos a variables
        $nombre    = $_POST['nombre'];
        $direccion = $_POST['direccion'];
        $localidad = $_POST['localidad'];
        $provincia = $_POST['provincia'];
        $pais      = $_POST['pais'];
        $fecha     = $_POST['fecha'];
        $email     = $_POST['email'];
        $website   = $_POST['website'];
        $facebook  = $_POST['facebook'];
        $telefono  = $_POST['telefono'];
        $empresa   = $_POST['empresa'];
        $cargo     = $_POST['cargo'];
        $rubro     = $_POST['rubro'];
        $mensaje   = $_POST['mensaje'];

        //Cabeceras del correo
        $destino = "tampas@gmail.com";
        $asunto = "Contacto Web de $nombre - $empresa";
        $headers = "From: $nombre <$email>\r\n";
        $headers .= "Content-type: text/html\r\n";
        $headers .= "X-Mailer: PHP5\n";
        $headers .= 'MIME-Version: 1.0' . "\n";
        //$headers .= "CC: tampas@gmail.com\r\n";
        //$headers .= "BCC: ggvv@hotmail.com.ar\r\n";
        $texto = "<strong>Nombre:</strong> ".$nombre."<br />";
        $texto .= "<strong>Direcci&oacute;n:</strong> ".$direccion."<br />";
        $texto .= "<strong>Localidad:</strong> ".$localidad."<br />";
        $texto .= "<strong>Provincia:</strong> ".$provincia."<br />";
        $texto .= "<strong>Pa&iacute;s:</strong> ".$pais."<br />";
        $texto .= "<strong>Fecha:</strong> ".$fecha."<br />";
        $texto .= "<strong>Correo electr&oacute;nico:</strong> ".$email."<br />";
        $texto .= "<strong>Sitio web:</strong> ".$website."<br />";
        $texto .= "<strong>Perfil de Facebook:</strong> ".$facebook."<br />";
        $texto .= "<strong>Tel&eacute;fono:</strong> ".$telefono."<br />";
        $texto .= "<strong>Empresa:</strong> ".$empresa."<br />";
        $texto .= "<strong>Cargo:</strong> ".$cargo."<br />";
        $texto .= "<strong>Rubro:</strong> ".$rubro."<br />";
        $texto .= "<strong>Mensaje:</strong> <br />".$mensaje."<br />_ _ _<br />Fin del mensaje";
        
        //Variables Globales de Error
        $mandatoryMessageClassesGlobal = " invalidMandatoryMessage";
        $errorNombre     = '<p>'._("Por favor, ingrese su nombre.").'</p>';
        $errorDireccion  = '<p>'._("Por favor, ingrese su direcci&oacute;n.").'</p>';
        $errorLocalidad  = '<p>'._("Por favor, ingrese su localidad.").'</p>';
        $errorProvincia  = '<p>'._("Por favor, ingrese su provincia.").'</p>';
        $errorPais       = '<p>'._("Por favor, ingrese su pa&iacute;s.").'</p>';
        $errorFecha      = '<p>'._("Por favor, indique la fecha deseada.").'</p>';
        $errorEmail      = '<p>'._("Por favor, ingrese su direcci&oacute;n de correo.").'</p>';
        $errorWebsite    = '<p>'._("Por favor, ingrese su sitio web.").'</p>';
        $errorFacebook   = '<p>'._("Por favor, ingrese su perfil de Facebook.").'</p>';        
        $errorTelefono   = '<p>'._("Por favor, ingrese su n&uacute;mero de tel&eacute;fono.").'</p>';
        $errorEmpresa    = '<p>'._("Por favor, ingrese el nombre de su empresa.").'</p>';
        $errorCargo      = '<p>'._("Por favor, ingrese su cargo.").'</p>';
        $errorRubro      = '<p>'._("Por favor, ingrese un rubro.").'</p>';
        $errorNewsletter = '<p>'._("Por favor, elija una opci&oacute;n.").'</p>';

        
        
//INICIA VALIDACIÓN EN div.mandatoryMessage
        if (empty($_POST["nombre"])) {
            $mandatoryMessage = $errorNombre;
            $mandatoryMessageClasses = $mandatoryMessageClassesGlobal;
            //Clase de error en el input
            $invalidFieldNombre = "invalidField";
            $autofocusNombre = "autofocus";
            
        } elseif (empty($_POST["apellido"])) {
            $mandatoryMessage = $errorApellido;
            $mandatoryMessageClasses = $mandatoryMessageClassesGlobal;
            //Clase de error en el input
            $invalidFieldApellido = "invalidField";
            $autofocusApellido = "autofocus";
            
        } elseif (empty($_POST["direccion"])) {
            $mandatoryMessage = $errorDireccion;
            $mandatoryMessageClasses = $mandatoryMessageClassesGlobal;
            //Clase de error en el input
            $invalidFieldDireccion = "invalidField";
            $autofocusDireccion = "autofocus";
            
        } elseif (empty($_POST["localidad"])) {
            $mandatoryMessage = $errorLocalidad;
            $mandatoryMessageClasses = $mandatoryMessageClassesGlobal;
            //Clase de error en el input
            $invalidFieldLocalidad = "invalidField";
            $autofocusLocalidad = "autofocus";
            
        } elseif (empty($_POST["provincia"])) {
            $mandatoryMessage = $errorProvincia;
            $mandatoryMessageClasses = $mandatoryMessageClassesGlobal;
            //Clase de error en el input
            $invalidFieldProvincia = "invalidField";
            $autofocusProvincia = "autofocus";
            
        } elseif (empty($_POST["pais"])) {
            $mandatoryMessage = $errorPais;
            $mandatoryMessageClasses = $mandatoryMessageClassesGlobal;
            //Clase de error en el input
            $invalidFieldPais = "invalidField";
            $autofocusPais = "autofocus";
            
        } elseif (empty($_POST["telefono"])) {
            $mandatoryMessage = $errorTelefono;
            $mandatoryMessageClasses = $mandatoryMessageClassesGlobal;
            //Clase de error en el input
            $invalidFieldTelefono = "invalidField";
            $autofocusTelefono = "autofocus";
            
        } elseif (empty($_POST["email"])) {
            $mandatoryMessage = $errorEmail;
            $mandatoryMessageClasses = $mandatoryMessageClassesGlobal;
            //Clase de error en el input
            $invalidFieldEmail = "invalidField";
            $autofocusEmail = "autofocus";
            
        } elseif (empty($_POST["website"])) {
            $mandatoryMessage = $errorWebsite;
            $mandatoryMessageClasses = $mandatoryMessageClassesGlobal;
            //Clase de error en el input
            $invalidFieldWebsite = "invalidField";
            $autofocusWebsite = "autofocus";
            
        } elseif (empty($_POST["facebook"])) {
            $mandatoryMessage = $errorFacebook;
            $mandatoryMessageClasses = $mandatoryMessageClassesGlobal;
            //Clase de error en el input
            $invalidFieldFacebook = "invalidField";
            $autofocusFacebook = "autofocus";
            
        } elseif (empty($_POST["empresa"])) {
            $mandatoryMessage = $errorEmpresa;
            $mandatoryMessageClasses = $mandatoryMessageClassesGlobal;
            //Clase de error en el input
            $invalidFieldEmpresa = "invalidField";
            $autofocusEmpresa = "autofocus";
            
        } elseif (empty($_POST["cargo"])) {
            $mandatoryMessage = $errorCargo;
            $mandatoryMessageClasses = $mandatoryMessageClassesGlobal;
            //Clase de error en el input
            $invalidFieldCargo = "invalidField";
            $autofocusCargo = "autofocus";
            
        } elseif (empty($_POST["fecha"])) {
            $mandatoryMessage = $errorFecha;
            $mandatoryMessageClasses = $mandatoryMessageClassesGlobal;
            //Clase de error en el input
            $invalidFieldFecha = "invalidField";
            $autofocusFecha = "autofocus";
            
        } elseif (empty($_POST["rubro"])) {
            $mandatoryMessage = $errorRubro;
            $mandatoryMessageClasses = $mandatoryMessageClassesGlobal;
            //Clase de error en el input
            $invalidFieldRubro = "invalidField";
            $autofocusRubro = "autofocus";
            
        } elseif (empty($_POST["newsletter"])) {
            $mandatoryMessage = $errorNewsletter;
            $mandatoryMessageClasses = $mandatoryMessageClassesGlobal;
//FIN de validacion en div.mandatoryMessage
                        
//INICIA VALIDACIÓN DEBAJO DE CADA INPUT
        if (empty($_POST["nombre"])) {
            $errorNombre = $errorNombreGlobal;            
            //Clase de error en el input
            $invalidFieldNombre = "invalidField";

        } elseif (empty($_POST["email"])) {
            $errorEmail = $errorEmailGlobal;            
            //Clase de error en el input
            $invalidFieldEmail = "invalidField";
//FIN de validacion debajo de cada input
            
            
                        
        // Si todos los campos validan se env&iacute;a el correo
        } else {
            if(mail($destino,$asunto,$texto,$headers)){

            //Redirect
            echo '<META HTTP-EQUIV="Refresh" Content="0; URL=http://www.gabrielvolonte.com.ar/nuevo/contacto-gracias.php">';                
                
//INICIA MENSAJE OK EN $status
                $status = '<p class="status ok">'._("$statusOKGlobal").'</p>';
                $mandatoryMessageClasses = 'displayNone';
//FIN mensaje ok en $status
                
//INICIA MENSAJE OK EN POPUP
                $status = '<div class="popup statusDiv"><a href="javascript:void(0)" class="close displayBlock pAbs sprites indentedText">'._("Cerrar").'</a><p class="status ok">'._("$statusOKGlobal").'</p></div><div class="modalBG"></div>';
                $mandatoryMessageClasses = 'displayNone';
//FIN mensaje ok en popup
                
                // Si el envio fue exitoso reseteamos lo que el usuario escribi&oacute;:
                $_POST['nombre'] = '';
                $_POST['direccion'] = '';
                $_POST['localidad'] = '';
                $_POST['provincia'] = '';
                $_POST['pais'] = '';
                $_POST['fecha'] = '';
                $_POST['email'] = '';
                $_POST['website'] = '';
                $_POST['facebook'] = '';
                $_POST['telefono'] = '';
                $_POST['empresa'] = '';                
                $_POST['cargo'] = '';
                $_POST['rubro'] = '';
                $_POST['mensaje'] = '';

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