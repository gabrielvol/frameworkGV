<?php
    $test = 1;
    $int = 1;
    $navSelected= 0;
    $title = "Contacto | GV";
    $mdesc = "";
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/head.inc.php');
?>
<link href="/nuevo/_test/css/main.css" rel="stylesheet">
<link href="/nuevo/_etc/css/datepicker.css" rel="stylesheet">
<script type="text/javascript" src="/nuevo/_etc/js/scrollKeep.js"></script>
<script type="text/javascript" src="/nuevo/_etc/js/jquery-ui-datepicker.js"></script>
</head>
<body>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/header.inc.php'); ?>
	<div id="main" class="container" role="main">
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/_test/common/contactoSend.inc.php'); ?>
            <form method="post" name="" action="">
                <div class="mandatoryMessage <?php echo $mandatoryMessageClasses ?>">
                    <p><?php echo $mandatoryMessage ?></p>
                </div>
                
                <label for="nombre">Nombre <span class="redColour">*</span></label>
                <input type="text" name="nombre" id="nombre" class="nombre <?php echo $invalidFieldNombre ?>" tabindex="" value="<?php echo $_POST['nombre']; ?>">
                <span class="errorForm errorColour"><?php echo $errorNombre ?></span>

                <label for="empresa">Empresa <span class="redColour">*</span></label>
                <input type="text" name="empresa" id="empresa" class="empresa <?php echo $invalidFieldEmpresa ?>" tabindex="" value="<?php echo $_POST['empresa']; ?>">
                <span class="errorForm errorColour"><?php echo $errorEmpresa ?></span>

                <label for="email">E-mail <span class="redColour">*</span></label>
                <input type="email" name="email" id="email" class="email <?php echo $invalidFieldEmail ?>" tabindex="" value="<?php echo $_POST['email']; ?>">
                <span class="errorForm errorColour"><?php echo $errorEmail ?></span>

                <label for="telefono">Teléfono <span class="redColour">*</span></label>
                <input type="text" name="telefono" id="telefono" class="telefono <?php echo $invalidFieldTelefono ?>" tabindex="" value="<?php echo $_POST['telefono']; ?>">
                <span class="errorForm errorColour"><?php echo $errorTelefono ?></span>

                <label for="fecha">Fecha <span class="redColour">*</span></label>
                <input type="text" name="fecha" id="fecha" class="fecha <?php echo $invalidFieldFecha ?>" tabindex="" value="<?php echo $_POST['fecha']; ?>">
                <span class="errorForm errorColour"><?php echo $errorFecha ?></span>

                <fieldset>
                    <legend>¿Desea recibir el boletín de noticias? <span class="redColour">*</span></legend>

                    <label for="radioSi" class="radio">Newsletter Sí</label>
                    <input type="radio" name="newsletter" id="radioSi" value="Si" class="radio" tabindex="">

                    <label for="radioNo" class="radio">Newsletter No</label>
                    <input type="radio" name="newsletter" id="radioNo" value="No" class="radio" tabindex="">

                    <label for="radioNoSe" class="radio">Newsletter No Sé</label>
                    <input type="radio" name="newsletter" id="radioNoSe" value="No Sé" class="radio" tabindex="">
                </fieldset>

                <label for="preciotilde">Prefiero charlar el precio personalmente <span class="redColour">*</span></label>
                <input type="checkbox" name="preciotilde" id="preciotilde" class="check preciotilde" tabindex="" value="Si">
                
                <label for="browsersInput">Choose a browser from this list:</label>
                <input type="text" list="browsersList" name="myBrowser" id="browsersInput">
                <datalist id="browsersList">
                    <option value="Chrome">
                    <option value="Firefox">
                    <option value="Internet Explorer">
                    <option value="Opera">
                    <option value="Safari">
                    <option value="Microsoft Edge">
                </datalist>

                <label for="habitacion">Habitación <span class="redColour">*</span></label>
                <select id="habitacion" name="habitacion" class="habitacion" tabindex="">
                    <option value="" selected>Seleccione una opción</option>
                    <option value="a">a</option>
                    <option value="b">b</option>
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

                <label for="mensaje">Mensaje <span class="redColour">*</span></label>
                <textarea name="mensaje" id="mensaje" class="mensaje" tabindex=""><?php echo $_POST['mensaje']; ?></textarea>

                <input type="submit" value="Enviar" id="enviar" name="enviarForm" class="enviar" tabindex="">
            </form>
	</div>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/footer.inc.php'); ?>
        <script type="text/javascript" src="/nuevo/_test/js/form.js"></script>
</body>
</html>


<?php
#Gettext
/*

msgid "Los campos marcados con * son obligatorios"
msgstr "Los campos marcados con * son obligatorios"

msgid "Por favor, ingrese su nombre"
msgstr "Por favor, ingrese su nombre""

msgid "Por favor, ingrese el nombre de su empresa"
msgstr "Por favor, ingrese el nombre de su empresa"

msgid "Por favor, ingrese una direcci&oacute;n de correo"
msgstr "Por favor, ingrese una direcci&oacute;n de correo"

msgid "Por favor, ingrese un n&uacute;mero de tel&eacute;fono"
msgstr "Por favor, ingrese un n&uacute;mero de tel&eacute;fono"

msgid "Por favor, indique la fecha deseada"
msgstr "Por favor, indique la fecha deseada"

msgid "Por favor, ingrese sus datos. Nos comunicaremos con Ud. a la brevedad"
msgstr "Por favor, ingrese sus datos. Nos comunicaremos con Ud. a la brevedad"

msgid "Los datos se han enviado correctamente, nos comunicaremos a la brevedad. Muchas Gracias"
msgstr "Los datos se han enviado correctamente, nos comunicaremos a la brevedad. Muchas Gracias"

msgid "Hubo un error al enviar el mensaje"
msgstr "Hubo un error al enviar el mensaje"

msgid "Intente nuevamente m&aacute;s tarde"
msgstr "Intente nuevamente m&aacute;s tarde"

msgid "Enviar"
msgstr "Enviar"

msgid "Los campos marcados con * son obligatorios"
msgstr "* Marked fields are mandatory"

msgid "Por favor, ingrese su nombre"
msgstr "Please complete your name"

msgid "Por favor, ingrese el nombre de su empresa"
msgstr "Please complete your company name"

msgid "Por favor, ingrese una direcci&oacute;n de correo"
msgstr "Please enter a valid e-mail address"

msgid "Por favor, ingrese un n&uacute;mero de tel&eacute;fono"
msgstr "Please enter a phone number"

msgid "Por favor, indique la fecha deseada"
msgstr "Please state a date"

msgid "Por favor, ingrese sus datos. Nos comunicaremos con Ud. a la brevedad"
msgstr "Please complete the form, we'll get in touch with you as soon as possible"

msgid "Los datos se han enviado correctamente, nos comunicaremos a la brevedad. Muchas Gracias"
msgstr "Thank you. Your message has been successfully delivered, we'll be in touch shorly"

msgid "Hubo un error al enviar el mensaje"
msgstr "There was an error delivering your message"

msgid "Intente nuevamente m&aacute;s tarde"
msgstr "Please try again later"

msgid "Enviar"
msgstr "Send"

*/