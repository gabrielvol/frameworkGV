<?php
    $int = 1;
    
    $title = "Contacto | PáginaSinTítulo";
    //$titleEN = "Contact | UntitledPage";
    $mdesc = "";
    
    $navSelected = 0;
    
    //Gettext variable, debe ir antes del head
    $idioma = $_GET['l'];
    
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/head.inc.php');
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/gettext.inc.php');
?>
<link href="/nuevo/_source/css/datepicker.css" rel="stylesheet">
<script type="text/javascript" src="/nuevo/_source/js/jquery-ui-datepicker.js"></script>
</head>
<body>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/header.inc.php'); ?>
	<div id="main" class="int contacto" role="main">
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/contactoSend.inc.php'); ?>
            <form method="post" name="" action="">
                <div class="mandatoryMessage <?php echo $mandatoryMessageClasses ?>">
                    <?php echo $mandatoryMessage ?>
                </div>
                
                <label for="nombre">Nombre <span class="redColour">*</span></label>
                <input type="text" name="nombre" id="nombre" class="nombre <?php echo $invalidFieldNombre ?>" value="<?php echo $_POST['nombre']; ?>" placeholder="Nombre">
                <span class="errorForm errorColour"><?php echo $errorNombre ?></span>
                
                <label for="direccion">Dirección <span class="redColour">*</span></label>
                <input type="text" name="direccion" id="direccion" class="direccion <?php echo $invalidFieldDireccion ?>" value="<?php echo $_POST['direccion']; ?>" placeholder="Dirección">
                <span class="errorForm errorColour"><?php echo $errorDireccion ?></span>
                
                <label for="localidad"><?php echo _("Localidad"); ?></label>
                <input type="text" name="localidad" id="localidad" class="localidad <?php echo $invalidFieldLocalidad ?>" value="<?php echo $_POST['localidad']; ?>" placeholder="Localidad">
                <span class="errorForm errorColour"><?php echo $errorLocalidad ?></span>

                <label for="provincia"><?php echo _("Provincia"); ?></label>
                <input type="text" name="provincia" id="provincia" class="provincia <?php echo $invalidFieldProvincia ?>" value="<?php echo $_POST['provincia']; ?>" placeholder="Provincia">
                <span class="errorForm errorColour"><?php echo $errorProvincia ?></span>

                <label for="empresa">Empresa <span class="redColour">*</span></label>
                <input type="text" name="empresa" id="empresa" class="empresa <?php echo $invalidFieldEmpresa ?>" value="<?php echo $_POST['empresa']; ?>" placeholder="Empresa">
                <span class="errorForm errorColour"><?php echo $errorEmpresa ?></span>

                <label for="email">E-mail <span class="redColour">*</span></label>
                <input type="email" name="email" id="email" class="email <?php echo $invalidFieldEmail ?>" value="<?php echo $_POST['email']; ?>" placeholder="E-mail">
                <span class="errorForm errorColour"><?php echo $errorEmail ?></span>

                <label for="telefono">Teléfono <span class="redColour">*</span></label>
                <input type="text" name="telefono" id="telefono" class="telefono <?php echo $invalidFieldTelefono ?>" value="<?php echo $_POST['telefono']; ?>" placeholder="Teléfono">
                <span class="errorForm errorColour"><?php echo $errorTelefono ?></span>

                <label for="fecha">Fecha <span class="redColour">*</span></label>
                <input type="text" name="fecha" id="fecha" class="fecha <?php echo $invalidFieldFecha ?>" value="<?php echo $_POST['fecha']; ?>" placeholder="Fecha">
                <span class="errorForm errorColour"><?php echo $errorFecha ?></span>

                <fieldset>
                    <legend>¿Desea recibir el boletín de noticias? <span class="redColour">*</span></legend>

                    <label for="radioSi" class="radio">Newsletter Sí</label>
                    <input type="radio" name="newsletter" id="radioSi" value="Si" class="radio" >

                    <label for="radioNo" class="radio">Newsletter No</label>
                    <input type="radio" name="newsletter" id="radioNo" value="No" class="radio" >

                    <label for="radioNoSe" class="radio">Newsletter No Sé</label>
                    <input type="radio" name="newsletter" id="radioNoSe" value="No Sé" class="radio" >
                </fieldset>

                <label for="preciotilde">Prefiero charlar el precio personalmente <span class="redColour">*</span></label>
                <input type="checkbox" name="preciotilde" id="preciotilde" class="check preciotilde" value="Si">
                
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
                <select id="habitacion" name="habitacion" class="habitacion" >
                    <option value="<?php echo $_POST['habitacion']; ?>" selected>Seleccione una opción</option>
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
                <textarea name="mensaje" id="mensaje" class="mensaje" placeholder="Mensaje"><?php echo $_POST['mensaje']; ?></textarea>

                <input type="submit" value="Enviar" id="enviar" name="enviarForm" class="enviar">
            </form>
	</div>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/footer.inc.php'); ?>
        <script type="text/javascript" src="/nuevo/_source/js/plugins_form.js"></script>
</body>
</html>