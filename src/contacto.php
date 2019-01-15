<?php
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/variables.inc.php');
    
    $int = 1;
    $hasMandatoryMsg = 1;
    
    $title = "Contacto | PáginaSinTítulo";
    //$titleGB = "Contact | UntitledPage";
    
//Open Graph Start
             // Max 35 char
             // 123456789-123456789-123456789-12345 
    $ogTitle = "OGWebsiteTitle";
    //$ogTitleGB = "OGWebsiteTitle";
    
            // Max 65 char
            // 123456789-123456789-123456789-123456789-123456789-123456789-12345 
    $ogDesc = "Descr.";
    //$ogDescGB = "Descr.";
    
    $ogURL = $url;  
    $ogSiteName = $ogTitle;
//Open Graph End
    
    $navCurrent = 0;
    
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/gettext.variableCheck.inc.php');    
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/head.inc.php');
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/gettext.locale.php');
?>
<link href="/nuevo/_source/css/datepicker.css" rel="stylesheet">
<script src="/nuevo/_source/js/jquery-ui-datepicker.js"></script>
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/header.inc.php'); ?>
    <div id="main" class="int contacto" role="main">
        <div class="mobileForm tabletForm">
        <?php // include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/formSend.inc.php'); ?>
        <form method="post">
            <?php
                echo $status;

                if($hasMandatoryMsg == 1) {
                    echo '<div class="mandatoryMsg '.$mandatoryMsgClasses.'">'.$mandatoryMsg.'</div>';
                }
            ?>

            <label for="nombre_FormName">
                <span class="labelName"><?php echo _('Nombre'); ?></span>
                <input type="text" name="nombre_FormName" id="nombre_FormName" class="nombre <?php echo $invalidFieldNombre_FormName ?>" value="<?php echo $_POST['nombre_FormName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $autofocusNombre_FormName ?>>
                <span class="formInputErrorMsg <?php echo $errorFormClassNombre_FormName ?>"><?php echo $errorBelowInputNombre_FormName ?></span>               
            </label>

            <label for="apellido_FormName">
                <span class="labelName"><?php echo _('Apellido'); ?></span>
                <input type="text" name="apellido_FormName" id="apellido_FormName" class="apellido <?php echo $invalidFieldApellido_FormName ?>" value="<?php echo $_POST['apellido_FormName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $autofocusApellido_FormName ?>>
                <span class="formInputErrorMsg <?php echo $errorFormClassApellido_FormName ?>"><?php echo $errorBelowInputApellido_FormName ?></span>             
            </label>

            <label for="nombreApe_FormName">
                <span class="labelName"><?php echo _('Nombre y Apellido'); ?></span>
                <input type="text" name="nombreApe_FormName" id="nombreApe_FormName" class="nombreApe <?php echo $invalidFieldNombreApe_FormName ?>" value="<?php echo $_POST['nombreApe_FormName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $autofocusNombreApe_FormName ?>>
                <span class="formInputErrorMsg <?php echo $errorFormClassNombreApe_FormName ?>"><?php echo $errorBelowInputNombreApe_FormName ?></span>             
            </label>

            <label for="nombreComp_FormName">
                <span class="labelName"><?php echo _('Nombre Completo'); ?></span>
                <input type="text" name="nombreComp_FormName" id="nombreComp_FormName" class="nombreComp <?php echo $invalidFieldNombreComp_FormName ?>" value="<?php echo $_POST['nombreComp_FormName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $autofocusNombreComp_FormName ?>>
                <span class="formInputErrorMsg <?php echo $errorFormClassNombreComp_FormName ?>"><?php echo $errorBelowInputNombreComp_FormName ?></span>             
            </label>

            <label for="genero_FormName">
                <span class="labelName"><?php echo _('Género'); ?></span>
                <select name="genero_FormName" id="genero_FormName" class="genero" >
                    <option value="<?php echo $_POST['genero_FormName']; ?>" selected><?php echo _('Seleccione una opci&oacute;n'); ?></option>
                    <option value="Masculino"><?php echo _('Masculino'); ?></option>
                    <option value="Femenino"><?php echo _('Femenino'); ?></option>
                </select>
            </label>

            <label for="genero_FormName">
                <span class="labelName"><?php echo _('Género'); ?></span>
                <input type="text" name="genero_FormName" id="genero_FormName" class="genero <?php echo $invalidFieldGenero_FormName ?>" value="<?php echo $_POST['genero_FormName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $autofocusGenero_FormName ?>>
                <span class="formInputErrorMsg <?php echo $errorFormClassGenero_FormName ?>"><?php echo $errorBelowInputGenero_FormName ?></span>               
            </label>

            <label for="dni_FormName">
                <span class="labelName"><?php echo _('DNI'); ?></span>
                <input type="tel" name="dni_FormName" id="dni_FormName" class="dni <?php echo $invalidFieldDNI_FormName ?>" value="<?php echo $_POST['dni_FormName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $autofocusDNI_FormName ?>>
                <span class="formInputErrorMsg <?php echo $errorFormClassDNI_FormName ?>"><?php echo $errorBelowInputDNI_FormName ?></span>               
            </label>
            
            <label for="password_FormName">
                <span class="labelName"><?php echo _('Contraseña'); ?></span>
                <input type="password" name="contrasena_FormName" id="contrasena_FormName" class="contrasena <?php echo $invalidFieldContrasena_FormName ?>" value="<?php echo $_POST['contrasena_FormName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $autofocusContrasena_FormName ?>>
                <span class="formInputErrorMsg <?php echo $errorFormClassContrasena_FormName ?>"><?php echo $errorBelowInputContrasena_FormName ?></span>               
            </label>

            <label for="direccion_FormName">
                <span class="labelName"><?php echo _('Direcci&oacute;n'); ?></span>
                <input type="text" name="direccion_FormName" id="direccion_FormName" class="direccion <?php echo $invalidFieldDireccion_FormName ?>" value="<?php echo $_POST['direccion_FormName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $autofocusDireccion_FormName ?>>
                <span class="formInputErrorMsg <?php echo $errorFormClassDireccion_FormName ?>"><?php echo $errorBelowInputDireccion_FormName ?></span>             
            </label>

            <label for="domicilio_FormName">
                <span class="labelName"><?php echo _('Domicilio'); ?></span>
                <input type="text" name="domicilio_FormName" id="domicilio_FormName" class="domicilio <?php echo $invalidFieldDomicilio_FormName ?>" value="<?php echo $_POST['domicilio_FormName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $autofocusDomicilio_FormName ?>>
                <span class="formInputErrorMsg <?php echo $errorFormClassDomicilio_FormName ?>"><?php echo $errorBelowInputDomicilio_FormName ?></span>             
            </label>

            <label for="localidad_FormName">
                <span class="labelName"><?php echo _('Localidad'); ?></span>
                <input type="text" name="localidad_FormName" id="localidad_FormName" class="localidad <?php echo $invalidFieldLocalidad_FormName ?>" value="<?php echo $_POST['localidad_FormName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $autofocusLocalidad_FormName ?>>
                <span class="formInputErrorMsg <?php echo $errorFormClassLocalidad_FormName ?>"><?php echo $errorBelowInputLocalidad_FormName ?></span>             
            </label>

            <label for="codigopostal_FormName">
                <span class="labelName"><?php echo _('C&oacute;digo postal'); ?></span>
                <input type="tel" name="codigopostal_FormName" id="codigopostal_FormName" class="codigopostal <?php echo $invalidFieldCodigoPostal_FormName ?>" value="<?php echo $_POST['codigopostal_FormName']; ?>" placeholder="<?php echo _('Ej.:'); ?> B1846DWF, 1832" <?php echo $autofocusCodigoPostal_FormName ?>>
                <span class="formInputErrorMsg <?php echo $errorFormClassCodigoPostal_FormName ?>"><?php echo $errorBelowInputCodigoPostal_FormName ?></span>             
            </label>

            <label for="provincia_FormName">
                <span class="labelName"><?php echo _('Provincia'); ?></span>
                <input type="text" name="provincia_FormName" id="provincia_FormName" class="provincia <?php echo $invalidFieldProvincia_FormName ?>" value="<?php echo $_POST['provincia_FormName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $autofocusProvincia_FormName ?>>
                <span class="formInputErrorMsg <?php echo $errorFormClassProvincia_FormName ?>"><?php echo $errorBelowInputProvincia_FormName ?></span>             
            </label>

            <label for="pais_FormName">
                <span class="labelName"><?php echo _('Pa&iacute;s'); ?></span>
                <input type="text" name="pais_FormName" id="pais_FormName" class="pais <?php echo $invalidFieldPais_FormName ?>" value="<?php echo $_POST['pais_FormName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $autofocusPais_FormName ?>>
                <span class="formInputErrorMsg <?php echo $errorFormClassPais_FormName ?>"><?php echo $errorBelowInputPais_FormName ?></span>             
            </label>

            <label for="telefono_FormName">
                <span class="labelName"><?php echo _('Tel&eacute;fono'); ?></span>
                <input type="tel" name="telefono_FormName" id="telefono_FormName" class="telefono <?php echo $invalidFieldTelefono_FormName ?>" value="<?php echo $_POST['telefono_FormName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $autofocusTelefono_FormName ?>>
                <span class="formInputErrorMsg <?php echo $errorFormClassTelefono_FormName ?>"><?php echo $errorBelowInputTelefono_FormName ?></span>             
            </label>

            <label for="email_FormName">
                <span class="labelName"><?php echo _('Correo electr&oacute;nico'); ?></span>
                <input type="email" name="email_FormName" id="email_FormName" class="email <?php echo $invalidFieldEmail_FormName ?>" value="<?php echo $_POST['email_FormName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $autofocusEmail_FormName ?>>
                <span class="formInputErrorMsg <?php echo $errorFormClassEmail_FormName ?>"><?php echo $errorBelowInputEmail_FormName ?></span>             
            </label> 

            <label for="email_FormName">
                <span class="labelName"><?php echo _('E-mail'); ?></span>
                <input type="email" name="email_FormName" id="email_FormName" class="email <?php echo $invalidFieldEmail_FormName ?>" value="<?php echo $_POST['email_FormName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $autofocusEmail_FormName ?>>
                <span class="formInputErrorMsg <?php echo $errorFormClassEmail_FormName ?>"><?php echo $errorBelowInputEmail_FormName ?></span>             
            </label>               

            <label for="website_FormName">
                <span class="labelName"><?php echo _('Sitio web'); ?></span>
                <input type="url" name="website_FormName" id="website_FormName" class="website <?php echo $invalidFieldWebsite_FormName ?>" value="<?php echo $_POST['website_FormName']; ?>" placeholder="<?php echo _('Debe comenzar con http://www'); ?>" <?php echo $autofocusWebsite_FormName ?>>
                <span class="formInputErrorMsg <?php echo $errorFormClassWebsite_FormName ?>"><?php echo $errorBelowInputWebsite_FormName ?></span>             
            </label>          

            <label for="facebook_FormName">
                <span class="labelName"><?php echo _('Perfil de Facebook'); ?></span>
                <input type="url" name="facebook_FormName" id="facebook_FormName" class="facebook <?php echo $invalidFieldFacebook_FormName ?>" value="<?php echo $_POST['facebook_FormName']; ?>" placeholder="<?php echo _('Debe comenzar con http://www.facebook.com/'); ?>" <?php echo $autofocusFacebook_FormName ?>>
                <span class="formInputErrorMsg <?php echo $errorFormClassFacebook_FormName ?>"><?php echo $errorBelowInputFacebook_FormName ?></span>             
            </label>

            <label for="empresa_FormName">
                <span class="labelName"><?php echo _('Empresa'); ?></span>
                <input type="text" name="empresa_FormName" id="empresa_FormName" class="empresa <?php echo $invalidFieldEmpresa_FormName ?>" value="<?php echo $_POST['empresa_FormName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $autofocusEmpresa_FormName ?>>
                <span class="formInputErrorMsg <?php echo $errorFormClassEmpresa_FormName ?>"><?php echo $errorBelowInputEmpresa_FormName ?></span>             
            </label>

            <label for="razonSocial_FormName">
                <span class="labelName"><?php echo _('Raz&oacute;n Social'); ?></span>
                <input type="text" name="razonSocial_FormName" id="razonSocial_FormName" class="razonSocial <?php echo $invalidFieldRazonSocial_FormName ?>" value="<?php echo $_POST['razonSocial_FormName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $autofocusRazonSocial_FormName ?>>
                <span class="formInputErrorMsg <?php echo $errorFormClassRazonSocial_FormName ?>"><?php echo $errorBelowInputRazonSocial_FormName ?></span>             
            </label>

            <label for="rubro_FormName">
                <span class="labelName"><?php echo _('Rubro'); ?></span>
                <input type="text" name="rubro_FormName" id="rubro_FormName" class="rubro <?php echo $invalidFieldRubro_FormName ?>" value="<?php echo $_POST['rubro_FormName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $autofocusRubro_FormName ?>>
                <span class="formInputErrorMsg <?php echo $errorFormClassRubro_FormName ?>"><?php echo $errorBelowInputRubro_FormName ?></span>             
            </label>

            <label for="cargo_FormName">
                <span class="labelName"><?php echo _('Cargo'); ?></span>
                <input type="text" name="cargo_FormName" id="cargo_FormName" class="cargo <?php echo $invalidFieldCargo_FormName ?>" value="<?php echo $_POST['cargo_FormName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $autofocusCargo_FormName ?>>
                <span class="formInputErrorMsg <?php echo $errorFormClassCargo_FormName ?>"><?php echo $errorBelowInputCargo_FormName ?></span>             
            </label>

            <label for="fecha_FormName">
                <span class="labelName"><?php echo _('Fecha'); ?></span>
                <input type="date" name="fecha_FormName" id="fecha_FormName" class="fecha <?php echo $invalidFieldFecha_FormName ?>" value="<?php echo $_POST['fecha_FormName']; ?>" placeholder="<?php echo _('Seleccione una fecha en el calendario'); ?>" <?php echo $autofocusFecha_FormName ?>>
                <span class="formInputErrorMsg <?php echo $errorFormClassFecha_FormName ?>"><?php echo $errorBelowInputFecha_FormName ?></span>             
            </label>

            <fieldset class="<?php echo $invalidFieldNewsletter ?>">
                <legend class="labelName"><?php echo _('&iquest;Desea recibir el bolet&iacute;n de noticias?'); ?></legend>

                <label for="radioSi_FormName" class="radio prn pll mbn">
                    <input type="radio" name="newsletter_FormName" id="radioSi_FormName" value="<?php echo _('Si'); ?>" class="radio floatLeft mrs" <?php echo $autofocusNewsletter_FormName ?>>
                    <span><?php echo _('Newsletter S&iacute;'); ?></span>
                </label>

                <label for="radioNo_FormName" class="radio prn pll mbn">
                    <input type="radio" name="newsletter_FormName" id="radioNo_FormName" value="<?php echo _('No'); ?>" class="radio floatLeft mrs">
                    <span><?php echo _('Newsletter No'); ?></span>
                </label>

                <label for="radioNoSe_FormName" class="radio pan mbn">
                    <input type="radio" name="newsletter_FormName" id="radioNoSe" value="<?php echo _('No Sé'); ?>" class="radio floatLeft mrs">
                    <span><?php echo _('Newsletter No S&eacute;'); ?></span>
                </label>
            </fieldset>

            <label for="preciotilde_FormName">
                <?php echo _('Prefiero charlar el precio personalmente'); ?>
                <input type="checkbox" name="preciotilde_FormName" id="preciotilde_FormName" class="check preciotilde" value="Si">
            </label>

            <label for="browsersInput_FormName">
                <?php echo _('Choose a browser from this list:'); ?>
                <input type="text" list="browsersList" name="myBrowser_FormName" id="browsersInput">
                <datalist id="browsersList">
                    <option value="Chrome">
                    <option value="Firefox">
                    <option value="Internet Explorer">
                    <option value="Opera">
                    <option value="Safari">
                    <option value="Microsoft Edge">
                </datalist>
            </label>


            <label for="habitacion_FormName">
                <span class="labelName"><?php echo _('Habitaci&oacute;n'); ?></span>
                <select id="habitacion" name="habitacion_FormName" class="habitacion" >
                    <option value="<?php echo $_POST['habitacion_FormName']; ?>" selected><?php echo _('Seleccione una opci&oacute;n'); ?></option>
                    <option value="a"><?php echo _('a'); ?></option>
                    <option value="b">b</option>
                </select>
            </label>

<!--            <select name="habitaciones[]" size="4" multiple="">
            <?php
//                $options = array("a", "b", "c", "d", "e", "f");
//                foreach ($options as $option) {
//                    echo '<option value="' . $option . '"';
//                    if (in_array($option, $habitaciones)) {
//                        echo " selected";
//                    }
//                    echo ">" . ucfirst($option) . "</option>";
//                }
            ?>
            </select>-->

            <label for="asunto_FormName">
                <span class="labelName"><?php echo _('Asunto'); ?></span>
                <input type="text" name="asunto_FormName" id="asunto_FormName" class="asunto <?php echo $invalidFieldAsunto_FormName ?>" value="<?php echo $_POST['asunto_FormName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $autofocusAsunto_FormName ?>>
                <span class="formInputErrorMsg <?php echo $errorFormClassAsunto_FormName ?>"><?php echo $errorBelowInputAsunto_FormName ?></span>               
            </label>

            <label for="mensaje_FormName">
                <span class="labelName"><?php echo _('Mensaje'); ?></span>
                <textarea name="mensaje_FormName" id="mensaje_FormName" class="mensaje" placeholder="<?php echo _('Escriba aqu&iacute; su mensaje') ?>"><?php echo $_POST['mensaje_FormName']; ?></textarea>
            </label>

            // Mensaje con validación

            <label for="mensaje_FormName">
                <span class="labelName"><?php echo _('Detalle del servicio que desea contratar'); ?></span>
                <textarea name="mensaje_FormName" id="mensaje_FormName" class="mensaje <?php echo $invalidFieldMensaje_FormName ?>" placeholder="<?php echo _('Escriba aqu&iacute; su mensaje') ?>" <?php echo $autofocusMensaje_FormName ?>><?php echo $_POST['mensaje_FormName']; ?></textarea>
                <span class="formInputErrorMsg <?php echo $errorFormClassMensaje_FormName ?>"><?php echo $errorBelowInputMensaje_FormName ?></span>        
            </label>

            <input type="submit" value="<?php echo _('Enviar'); ?>" name="enviarForm_FormName" id="enviar_FormName" class="enviar mha upperCaseBT">
        </form>
        </div>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/footer.inc.php'); ?>
    <script src="/nuevo/etc/js/_contacto.js"></script>
    <script src="/nuevo/etc/js/_form.js"></script>
</body>
</html>