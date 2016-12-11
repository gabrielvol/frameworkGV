<?php
    //Variables de Mandatory Message al inicio
    $mandatoryMessage        = '';
    $mandatoryMessageClasses = '';
    
    //Variables Globlales de Status
    $statusIniGlobal    = _('Por favor, ingrese sus datos. Nos comunicaremos con Ud. a la brevedad');
    $statusOKGlobal     = _('Los datos se han enviado correctamente, nos comunicaremos a la brevedad. Muchas Gracias');
    $statusErrorGlobalA = _('Hubo un error al enviar el mensaje');
    $statusErrorGlobalB = _('Intente nuevamente m&aacute;s tarde');

    //Status Ini
    //$status = '<p class="status ok">'.$statusIniGlobal.'</p>';

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
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $mensaje = $_POST['mensaje'];

        //Cabeceras del correo
        $destino = "tampas@gmail.com";
        $asunto = "Contacto GV.com.ar de $nombre - $empresa";
        $headers = "From: $nombre <$email>\r\n";
        $headers .= "Content-type: text/html\r\n";
        $headers .= "X-Mailer: PHP5\n";
        $headers .= 'MIME-Version: 1.0' . "\n";
        //$headers .= "CC: tampas@gmail.com\r\n";
        //$headers .= "BCC: ggvv@hotmail.com.ar\r\n";
        $texto = "<strong>Nombre:</strong> ".$nombre."<br />";
        $texto .= "<strong>Correo:</strong> ".$email."<br />";
        $texto .= "<strong>Mensaje:</strong> <br />".$mensaje."<br />_ _ _<br />Fin del mensaje";
        
        //Variables Globales de Error
        $mandatoryMessageClassesGlobal = " invalidMandatoryMessage";
        $errorNombre     = '<p>'._("Por favor, ingrese su nombre").'</p>';
        $errorEmail      = '<p>'._("Por favor, ingrese un n&uacute;mero de tel&eacute;fono").'</p>';

        
        
//INICIA VALIDACIÓN EN div.mandatoryMessage
        if (empty($_POST["nombre"])) {
            $mandatoryMessage = $errorNombre;
            $mandatoryMessageClasses = $mandatoryMessageClassesGlobal;
            //Clase de error en el input
            $invalidFieldNombre = "invalidField";
            
        } elseif (empty($_POST["email"])) {
            $mandatoryMessage = $errorEmail;
            $mandatoryMessageClasses = $mandatoryMessageClassesGlobal;
            //Clase de error en el input
            $invalidFieldMail = "invalidField";
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
//FIN mensaje ok en $status
                
//INICIA MENSAJE OK EN POPUP
                $status = '<div class="popup statusDiv"><a href="javascript:void(0)" class="close displayBlock pAbs sprites indentedText">'._("Cerrar").'</a><p class="status ok">'._("$statusOKGlobal").'</p></div><div class="modalBG"></div>';
//FIN mensaje ok en popup
                
                // Si el envio fue exitoso reseteamos lo que el usuario escribi&oacute;:
                $_POST['nombre'] = '';
                $_POST['email'] = '';
                $_POST['mensaje'] = '';

            } else {
//INICIA MENSAJE ERROR EN $status
                $status = '<p class="status error">'._("$statusErrorGlobalA").' <span class="displayBlock">'._("$statusErrorGlobalB").'</span></p>';
//FIN mensaje error en $status
                
//INICIA MENSAJE ERROR EN POPUP
                $status = '<div class="popup statusDiv"><a href="javascript:void(0)" class="close displayBlock pAbs sprites indentedText">'._("Cerrar").'</a><p class="status error">'._("$statusErrorGlobalA").' <span class="displayBlock">'._("$statusErrorGlobalB").'</span></p></div><div class="modalBG"></div>';
//FIN mensaje error en popup
            }
        }
    }