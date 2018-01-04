<?php
    $int = 1;
    
    $title = "Contacto | PáginaSinTítulo";
    //$titleEN = "Contact | UntitledPage";
    $mdesc = "";
    
    $navCurrent = 0;
    
    //Gettext variable, debe ir antes del head
    $idioma = $_GET['l'];
    
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/head.inc.php');
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/gettext.inc.php');
?>
<link href="/nuevo/_source/css/datepicker.css" rel="stylesheet">
<script src="/nuevo/_source/js/jquery-ui-datepicker.js" type="text/javascript"></script>
</head>
<body>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/header.inc.php'); ?>
	<div id="main" class="int contacto" role="main">
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/contactoSend.inc.php'); ?>
            <div class="mobileForm tabletForm">
            <form method="post" name="" action="">
                <div class="mandatoryMessage <?php echo $mandatoryMessageClasses ?>">
                    <?php echo $mandatoryMessage ?>
                </div>
                
                <label for="nombre"><?php echo _("Nombre"); ?> <span class="redColour">*</span></label>
                <input type="text" name="nombre" id="nombre" class="nombre <?php echo $invalidFieldNombre ?>" value="<?php echo $_POST['nombre']; ?>" placeholder="<?php echo _("Ingrese su nombre"); ?>" <?php echo $autofocusNombre ?>>
                <span class="errorForm errorColour"><?php echo $errorNombre ?></span>                
                
                <label for="apellido"><?php echo _("Apellido"); ?> <span class="redColour">*</span></label>
                <input type="text" name="apellido" id="apellido" class="apellido <?php echo $invalidFieldApellido ?>" value="<?php echo $_POST['apellido']; ?>" placeholder="<?php echo _("Ingrese su apellido"); ?>" <?php echo $autofocusApellido ?>>
                <span class="errorForm errorColour"><?php echo $errorApellido ?></span>              
                
                <label for="nombre"><?php echo _("Nombre y Apellido"); ?> <span class="redColour">*</span></label>
                <input type="text" name="nombre" id="nombre" class="nombre <?php echo $invalidFieldNombre ?>" value="<?php echo $_POST['nombre']; ?>" placeholder="<?php echo _("Ingrese su nombre y apellido"); ?>" <?php echo $autofocusNombre ?>>
                <span class="errorForm errorColour"><?php echo $errorNombre ?></span> 
                
                <label for="direccion"><?php echo _("Direcci&oacute;n"); ?> <span class="redColour">*</span></label>
                <input type="text" name="direccion" id="direccion" class="direccion <?php echo $invalidFieldDireccion ?>" value="<?php echo $_POST['direccion']; ?>" placeholder="<?php echo _("Ingrese su direcci&oacute;n"); ?>" <?php echo $autofocusDireccion ?>>
                <span class="errorForm errorColour"><?php echo $errorDireccion ?></span>
                
                <label for="direccion"><?php echo _("Domicilio"); ?> <span class="redColour">*</span></label>
                <input type="text" name="direccion" id="direccion" class="direccion <?php echo $invalidFieldDireccion ?>" value="<?php echo $_POST['direccion']; ?>" placeholder="<?php echo _("Ingrese su domicilio"); ?>" <?php echo $autofocusDireccion ?>>
                <span class="errorForm errorColour"><?php echo $errorDireccion ?></span>
                
                <label for="localidad"><?php echo _("Localidad"); ?></label>
                <input type="text" name="localidad" id="localidad" class="localidad <?php echo $invalidFieldLocalidad ?>" value="<?php echo $_POST['localidad']; ?>" placeholder="<?php echo _("Ingrese su localidad"); ?>" <?php echo $autofocusLocalidad ?>>
                <span class="errorForm errorColour"><?php echo $errorLocalidad ?></span>

                <label for="provincia"><?php echo _("Provincia"); ?></label>
                <input type="text" name="provincia" id="provincia" class="provincia <?php echo $invalidFieldProvincia ?>" value="<?php echo $_POST['provincia']; ?>" placeholder="<?php echo _("Ingrese su provincia"); ?>" <?php echo $autofocusProvincia ?>>
                <span class="errorForm errorColour"><?php echo $errorProvincia ?></span>

                <label for="telefono"><?php echo _("Tel&eacute;fono"); ?> <span class="redColour">*</span></label>
                <input type="text" name="telefono" id="telefono" class="telefono <?php echo $invalidFieldTelefono ?>" value="<?php echo $_POST['telefono']; ?>" placeholder="<?php echo _("Ingrese su n&uacute;mero de tel&eacute;fono"); ?>" <?php echo $autofocusTelefono ?>>
                <span class="errorForm errorColour"><?php echo $errorTelefono ?></span>

                <label for="email"><?php echo _("E-mail"); ?> <span class="redColour">*</span></label>
                <input type="email" name="email" id="email" class="email <?php echo $invalidFieldEmail ?>" value="<?php echo $_POST['email']; ?>" placeholder="<?php echo _("Ingrese su e-mail"); ?>" <?php echo $autofocusEmail ?>>
                <span class="errorForm errorColour"><?php echo $errorEmail ?></span>

                <label for="email"><?php echo _("Correo electr&oacute;nico"); ?> <span class="redColour">*</span></label>
                <input type="email" name="email" id="email" class="email <?php echo $invalidFieldEmail ?>" value="<?php echo $_POST['email']; ?>" placeholder="<?php echo _("Ingrese su correo electr&oacute;nico"); ?>" <?php echo $autofocusEmail ?>>
                <span class="errorForm errorColour"><?php echo $errorEmail ?></span>

                <label for="website">Sitio web</label>
                <span class="sug helveticaMC grey">Debe ingresar su sitio web comenzando con <span>http://www</span></span>
                <input type="url" name="website" id="website" class="website <?php echo $invalidFieldWebsite ?>" value="<?php echo $_POST['website']; ?>" placeholder="http://www" <?php echo $autofocusWebsite ?>>

                <label for="facebook">Perfil de Facebook</label>
                <span class="sug helveticaMC grey">Debe ingresar su perfil comenzando con <span>http://www.facebook.com/</span></span>
                <input type="url" name="facebook" id="facebook" class="facebook <?php echo $invalidFieldFacebook ?>" value="<?php echo $_POST['facebook']; ?>" placeholder="http://www.facebook.com/" <?php echo $autofocusFacebook ?>>

                <label for="empresa"><?php echo _("Empresa"); ?> <span class="redColour">*</span></label>
                <input type="text" name="empresa" id="empresa" class="empresa <?php echo $invalidFieldEmpresa ?>" value="<?php echo $_POST['empresa']; ?>" placeholder="<?php echo _("Ingrese el nombre de su empresa"); ?>" <?php echo $autofocusEmpresa ?>>
                <span class="errorForm errorColour"><?php echo $errorEmpresa ?></span>

                <label for="cargo"><?php echo _("Cargo"); ?> <span class="redColour">*</span></label>
                <input type="text" name="cargo" id="cargo" class="cargo <?php echo $invalidFieldCargo ?>" value="<?php echo $_POST['cargo']; ?>" placeholder="<?php echo _("Ingrese su cargo"); ?>" <?php echo $autofocusCargo ?>>
                <span class="errorForm errorColour"><?php echo $errorCargo ?></span>

                <label for="rubro"><?php echo _("Rubro"); ?> <span class="redColour">*</span></label>
                <input type="text" name="rubro" id="rubro" class="rubro <?php echo $invalidFieldRubro ?>" value="<?php echo $_POST['rubro']; ?>" placeholder="<?php echo _('Ingrese un rubro'); ?>" <?php echo $autofocusRubro ?>>
                <span class="errorForm errorColour"><?php echo $errorRubro ?></span>

                <label for="fecha"><?php echo _("Fecha"); ?> <span class="redColour">*</span></label>
                <input type="text" name="fecha" id="fecha" class="fecha <?php echo $invalidFieldFecha ?>" value="<?php echo $_POST['fecha']; ?>" placeholder="<?php echo _("Indique la fecha deseada"); ?>" <?php echo $autofocusFecha ?>>
                <span class="errorForm errorColour"><?php echo $errorFecha ?></span>

                <fieldset>
                    <legend><?php echo _("&iquest;Desea recibir el bolet&iacute;n de noticias?"); ?> <span class="redColour">*</span></legend>

                    <label for="radioSi" class="radio"><?php echo _("Newsletter S&iacute;"); ?></label>
                    <input type="radio" name="newsletter" id="radioSi" value="<?php echo _('Si'); ?>" class="radio" >

                    <label for="radioNo" class="radio"><?php echo _("Newsletter No"); ?></label>
                    <input type="radio" name="newsletter" id="radioNo" value="<?php echo _('No'); ?>" class="radio" >

                    <label for="radioNoSe" class="radio"><?php echo _("Newsletter No Sé"); ?></label>
                    <input type="radio" name="newsletter" id="radioNoSe" value="<?php echo _('No Sé'); ?>" class="radio" >
                </fieldset>

                <label for="preciotilde"><?php echo _("Prefiero charlar el precio personalmente"); ?> <span class="redColour">*</span></label>
                <input type="checkbox" name="preciotilde" id="preciotilde" class="check preciotilde" value="Si">
                
                <label for="browsersInput"><?php echo _("Choose a browser from this list:"); ?></label>
                <input type="text" list="browsersList" name="myBrowser" id="browsersInput">
                <datalist id="browsersList">
                    <option value="Chrome">
                    <option value="Firefox">
                    <option value="Internet Explorer">
                    <option value="Opera">
                    <option value="Safari">
                    <option value="Microsoft Edge">
                </datalist>

                <label for="habitacion"><?php echo _("Habitaci&oacute;n"); ?> <span class="redColour">*</span></label>
                <select id="habitacion" name="habitacion" class="habitacion" >
                    <option value="<?php echo $_POST['habitacion']; ?>" selected><?php echo _("Seleccione una opci&oacute;n"); ?></option>
                    <option value="a"><?php echo _("a"); ?></option>
                    <option value="b">b</option>
                    
                    
                    <option value="Buenos Aires">Buenos Aires</option>
                    <option value="CABA">Ciudad Autonoma de Buenos Aires</option>
                    <option value="Catamarca">Catamarca</option>
                    <option value="Chaco">Chaco</option>
                    <option value="Chubut">Chubut</option>
                    <option value="Cordoba">Córdoba</option>
                    <option value="Corrientes">Corrientes</option>
                    <option value="EntreRios">Entre Ríos</option>
                    <option value="Formosa">Formosa</option>
                    <option value="Jujuy">Jujuy</option>
                    <option value="LaPampa">La Pampa</option>
                    <option value="LaRioja">La Rioja</option>
                    <option value="Mendoza">Mendoza</option>
                    <option value="Misiones">Misiones</option>
                    <option value="Neuquen">Neuquén</option>
                    <option value="RioNegro">Río Negro</option>
                    <option value="Salta">Salta</option>
                    <option value="SanJuan">San Juan</option>
                    <option value="SanLuis">San Luis</option>
                    <option value="SantaCruz">Santa Cruz</option>
                    <option value="SantaFe">Santa Fe</option>
                    <option value="SantiagoDelEstero">Santiago del Estero</option>
                    <option value="TierraDelFuego">Tierra del Fuego, Antártida e Islas del Atlántico Sur</option>
                    <option value="Tucuman">Tucumán</option>
                </select>

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

                <label for="mensaje"><?php echo _("Mensaje"); ?> <span class="redColour">*</span></label>
                <textarea name="mensaje" id="mensaje" class="mensaje" placeholder="<?php echo _("Escriba aqu&iacute; su mensaje"); ?>"><?php echo $_POST['mensaje']; ?></textarea>

                <input type="submit" value="<?php echo _('Enviar'); ?>" id="enviar" name="enviarForm" class="enviar">
            </form>                
            </div>
	</div>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/footer.inc.php'); ?>
        <script src="/nuevo/_source/js/plugins_form.js" type="text/javascript"></script>
</body>
</html>