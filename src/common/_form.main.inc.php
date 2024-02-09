<form method="post" class="mha" id="formMainID">
    <?php
        $data_fullURL__formMain = $page_url_full;
        
        include('form.main.send.inc.php');        

        // echo $form_status__formMain;
        // echo $form_status_pop__formMain;
        // echo '<div class="form_validation_div '. $form_validation_div_class__formMain .'">'. $form_validation_div_msg__formMain .'</div>';               
    ?>
    
    <?php if (!empty($form_hidden_variable__formMain)): ?>
        <input type="hidden" name="data_form_hidden__formMain" id="data_form_hidden__formMain" value="Valor escondido"> 
    <?php endif; ?>
    
    <?php if(!empty($form_var)): ?>
    <label for="data_opcionSeleccionada__formMain" class="label_opcionSeleccionada__formMain">
        <span class="form_label_name"><?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB'): ?>
            Estoy consultando por el siguiente form_var:
        <?php else: ?>
            Subject: form_var
        <?php endif; ?></span>
        <input type="text" name="data_opcionSeleccionada__formMain" id="data_opcionSeleccionada__formMain" class="data_opcionSeleccionada__formMain" form="formMainID" value="<?php echo $form_var; ?>" readonly>
    </label>
    <?php endif; ?>

    <label for="data_nombre__formMain">
        <span class="form_label_name"><?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB'): ?>
            Name
        <?php else: ?>
            Nombre
        <?php endif; ?></span>
        <input type="text" name="data_nombre__formMain" id="data_nombre__formMain" class="data_nombre__formMain <?php echo $form_validation_input_class_data_nombre__formMain; ?>" value="<?php echo $_POST['data_nombre__formMain']; ?>" form="formMainID" enterkeyhint="next" placeholder="<?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB') { echo ''; } else { echo ''; } ?>" <?php echo $form_input_autofocus_data_nombre__formMain; ?>>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_nombre__formMain; ?>"><?php echo $form_validation_span_msg_data_nombre__formMain; ?></span>        
        <div class="input_data_holder" aria-hidden="true"><?php echo $_POST['data_nombre__formMain']; ?></div>
        <div class="input_data_holder" aria-hidden="true"><pre><?php var_dump($_POST); ?></pre></div>
        <div class="input_data_holder" aria-hidden="true"><pre><?php print_r($_POST); ?></pre></div>  
        
    </label>

    <label for="data_apellido__formMain">
        <span class="form_label_name"><?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB'): ?>
            Surname
        <?php else: ?>
            Apellido
        <?php endif; ?></span>
        <input type="text" name="data_apellido__formMain" id="data_apellido__formMain" class="data_apellido__formMain <?php echo $form_validation_input_class_data_apellido__formMain; ?>" value="<?php echo $_POST['data_apellido__formMain']; ?>" form="formMainID" enterkeyhint="next" placeholder="<?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB') { echo ''; } else { echo ''; } ?>" <?php echo $form_input_autofocus_data_apellido__formMain; ?>>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_apellido__formMain; ?>"><?php echo $form_validation_span_msg_data_apellido__formMain; ?></span>
    </label>

    <label for="data_nombreAp__formMain">
        <span class="form_label_name"><?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB'): ?>
            Full Name
        <?php else: ?>
            Nombre y Apellido
        <?php endif; ?></span>
        <input type="text" name="data_nombreAp__formMain" id="data_nombreAp__formMain" class="data_nombreAp__formMain <?php echo $form_validation_input_class_data_nombreAp__formMain; ?>" value="<?php echo $_POST['data_nombreAp__formMain']; ?>" form="formMainID" enterkeyhint="next" placeholder="<?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB') { echo ''; } else { echo ''; } ?>" <?php echo $form_input_autofocus_data_nombreAp__formMain; ?>>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_nombreAp__formMain; ?>"><?php echo $form_validation_span_msg_data_nombreAp__formMain; ?></span>
    </label>

    <label for="data_nombreCo__formMain">
        <span class="form_label_name"><?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB'): ?>
            Full Name
        <?php else: ?>
            Nombre Completo
        <?php endif; ?></span>
        <input type="text" name="data_nombreCo__formMain" id="data_nombreCo__formMain" class="data_nombreCo__formMain <?php echo $form_validation_input_class_data_nombreCo__formMain; ?>" value="<?php echo $_POST['data_nombreCo__formMain']; ?>" form="formMainID" enterkeyhint="next" placeholder="<?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB') { echo ''; } else { echo ''; } ?>" <?php echo $form_input_autofocus_data_nombreCo__formMain; ?>>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_nombreCo__formMain; ?>"><?php echo $form_validation_span_msg_data_nombreCo__formMain; ?></span>
    </label>

    <label for="data_username__formMain">
        <span class="form_label_name"><?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB'): ?>
            Username
        <?php else: ?>
            Nombre de usuario
        <?php endif; ?></span>
        <input type="text" name="data_username__formMain" id="data_username__formMain" class="data_username__formMain <?php echo $form_validation_input_class_data_username__formMain; ?>" value="<?php echo $_POST['data_username__formMain']; ?>" form="formMainID" enterkeyhint="next" placeholder="<?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB') { echo ''; } else { echo ''; } ?>" <?php echo $form_input_autofocus_data_username__formMain; ?>>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_username__formMain; ?>"><?php echo $form_validation_span_msg_data_username__formMain; ?></span>
    </label>

    <label for="data_genero__formMain">
        <span class="form_label_name"><?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB'): ?>
            Gender
        <?php else: ?>
            Género
        <?php endif; ?></span>
        <select name="data_genero__formMain" id="data_genero__formMain" class="data_genero__formMain" form="formMainID" enterkeyhint="next">
            <?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB'): ?>
                <option value="<?php echo $_POST['data_genero__formMain']; ?>" selected>Choose an option</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            <?php else: ?>
                <option value="<?php echo $_POST['data_genero__formMain']; ?>" selected>Seleccione una opci&oacute;n</option>
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
            <?php endif; ?>
        </select>
    </label>

    <label for="data_genero__formMain">
        <span class="form_label_name"><?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB'): ?>
            Gender
        <?php else: ?>
            Género
        <?php endif; ?></span>
        <input type="text" name="data_genero__formMain" id="data_genero__formMain" class="data_genero__formMain <?php echo $form_validation_input_class_data_genero__formMain; ?>" value="<?php echo $_POST['data_genero__formMain']; ?>" form="formMainID" enterkeyhint="next" placeholder="<?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB') { echo ''; } else { echo ''; } ?>" <?php echo $form_input_autofocus_data_genero__formMain; ?>>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_genero__formMain; ?>"><?php echo $form_validation_span_msg_data_genero__formMain; ?></span>
    </label>

    <label for="data_genero__formMain">
        <span class="form_label_name"><?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB'): ?>
            Gender
        <?php else: ?>
            Género
        <?php endif; ?></span>        
        <input type="text" name="data_genero__formMain" id="data_genero__formMain" class="data_genero__formMain" form="formMainID" enterkeyhint="next" list="genero_listaTotal">
        <datalist id="genero_listaTotal">
            <option value="Lesbiana">
            <option value="Gay">
            <option value="Bixesual">
            <option value="Transgénero">
            <option value="Transfemenino">
            <option value="Transmasculino">
            <option value="Travesti">
            <option value="Intersexual">
            <option value="Pansexual">
            <option value="Asexual">
            <option value="Prefiero no decirlo">
            <option value="Otre">
            <option value="Demisexual">
            <option value="Heterosexual">
            <option value="Andrógine">
            <option value="Polisexual">
            <option value="Poliamoroso">
            <option value="Poligénero">
            <option value="Queer">
            <option value="Lithsexual">
            <option value="Hombre trans">
            <option value="Mujer trans">
            <option value="Persona trans">
            <option value="Transexual">
            <option value="Sapiosexual">
            <option value="Hombre">
            <option value="Mujer">
            <option value="No binario">   
            <option value="Género neutral">  
            <option value="Género fluido">   
            <option value="Bigénero">                            
        </datalist>
        <span class="form_label_msg_sugg">La lista incluye sugerencias, pero podés completar libremente el campo.</span>
    </label>  

    <label for="data_dni__formMain">
        <span class="form_label_name"><?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB'): ?>
            ID number
        <?php else: ?>
            DNI
        <?php endif; ?></span>
        <input type="text" inputmode="numeric" name="data_dni__formMain" id="data_dni__formMain" class="data_dni__formMain <?php echo $form_validation_input_class_data_dni__formMain; ?>" value="<?php echo $_POST['data_dni__formMain']; ?>" form="formMainID" enterkeyhint="next" placeholder="<?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB') { echo ''; } else { echo ''; } ?>" <?php echo $form_input_autofocus_data_dni__formMain; ?>>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_dni__formMain; ?>"><?php echo $form_validation_span_msg_data_dni__formMain; ?></span>
    </label>

    <label for="data_password__formMain">
        <span class="form_label_name"><?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB'): ?>
            Password
        <?php else: ?>
            Contraseña
        <?php endif; ?></span>
        <input type="password" name="contrasena__formMain" id="data_contrasena__formMain" class="data_contrasena__formMain <?php echo $form_validation_input_class_data_password__formMain; ?>" value="<?php echo $_POST['contrasena__formMain']; ?>" form="formMainID" enterkeyhint="go" placeholder="<?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB') { echo ''; } else { echo ''; } ?>" <?php echo $form_input_autofocus_data_password__formMain; ?>>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_password__formMain; ?>"><?php echo $form_validation_span_msg_data_password__formMain; ?></span>        
        <span class="form_label_msg_sugg"><?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB'): ?>
            An email will be sent to confirm this address
        <?php else: ?>
            Te enviaremos un correo a esta casilla para confirmar tu registro
        <?php endif; ?>.</span>
    </label>

    <label for="data_direccion__formMain">
        <span class="form_label_name"><?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB'): ?>
            Adresss
        <?php else: ?>
            Dirección
        <?php endif; ?></span>
        <input type="text" name="data_direccion__formMain" id="data_direccion__formMain" class="data_direccion__formMain <?php echo $form_validation_input_class_data_direccion__formMain; ?>" value="<?php echo $_POST['data_direccion__formMain']; ?>" form="formMainID" enterkeyhint="next" placeholder="<?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB') { echo ''; } else { echo ''; } ?>" <?php echo $form_input_autofocus_data_direccion__formMain; ?>>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_direccion__formMain; ?>"><?php echo $form_validation_span_msg_data_direccion__formMain; ?></span>
    </label>

    <label for="data_domicilio__formMain">
        <span class="form_label_name"><?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB'): ?>
            Adresss
        <?php else: ?>
            Domicilio
        <?php endif; ?></span>
        <input type="text" name="data_domicilio__formMain" id="data_domicilio__formMain" class="data_domicilio__formMain <?php echo $form_validation_input_class_data_domicilio__formMain; ?>" value="<?php echo $_POST['data_domicilio__formMain']; ?>" form="formMainID" enterkeyhint="next" placeholder="<?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB') { echo ''; } else { echo ''; } ?>" <?php echo $form_input_autofocus_data_domicilio__formMain; ?>>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_domicilio__formMain; ?>"><?php echo $form_validation_span_msg_data_domicilio__formMain; ?></span>
    </label>

    <label for="data_localidad__formMain">
        <span class="form_label_name"><?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB'): ?>
            Locality
        <?php else: ?>
            Dirección
        <?php endif; ?></span>
        <input type="text" name="data_localidad__formMain" id="data_localidad__formMain" class="data_localidad__formMain <?php echo $form_validation_input_class_data_localidad__formMain; ?>" value="<?php echo $_POST['data_localidad__formMain']; ?>" form="formMainID" enterkeyhint="next" placeholder="<?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB') { echo ''; } else { echo ''; } ?>" <?php echo $form_input_autofocus_data_localidad__formMain; ?>>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_localidad__formMain; ?>"><?php echo $form_validation_span_msg_data_localidad__formMain; ?></span>
    </label>

    <label for="data_codigoPostal__formMain">
        <span class="form_label_name"><?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB'): ?>
            C&oacute;digo postal
        <?php else: ?>
            ZIP Code
        <?php endif; ?></span>
        <input type="text" name="data_codigoPostal__formMain" id="data_codigoPostal__formMain" class="data_codigoPostal__formMain <?php echo $form_validation_input_class_data_codigoPostal__formMain; ?>" value="<?php echo $_POST['data_codigoPostal__formMain']; ?>" form="formMainID" enterkeyhint="next" placeholder="<?php echo _('Ej.:'); ?> B1846DWF, 1832" <?php echo $form_input_autofocus_data_codigoPostal__formMain; ?>>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_codigoPostal__formMain; ?>"><?php echo $form_validation_span_msg_data_codigoPostal__formMain; ?></span>
    </label>

    <label for="data_ciudad__formMain">
        <span class="form_label_name"><?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB'): ?>
            City
        <?php else: ?>
            Ciudad
        <?php endif; ?></span>
        <input type="text" name="data_ciudad__formMain" id="data_ciudad__formMain" class="data_ciudad__formMain <?php echo $form_validation_input_class_data_ciudad__formMain; ?>" value="<?php echo $_POST['data_ciudad__formMain']; ?>" form="formMainID" enterkeyhint="next" placeholder="<?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB') { echo ''; } else { echo ''; } ?>" <?php echo $form_input_autofocus_data_ciudad__formMain; ?>>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_ciudad__formMain; ?>"><?php echo $form_validation_span_msg_data_ciudad__formMain; ?></span>
    </label> 

    <label for="data_provincia__formMain">
        <span class="form_label_name"><?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB'): ?>
            State/Province
        <?php else: ?>
            Provincia
        <?php endif; ?></span>
        <input type="text" name="data_provincia__formMain" id="data_provincia__formMain" class="data_provincia__formMain <?php echo $form_validation_input_class_data_provincia__formMain; ?>" value="<?php echo $_POST['data_provincia__formMain']; ?>" form="formMainID" enterkeyhint="next" placeholder="<?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB') { echo ''; } else { echo ''; } ?>" <?php echo $form_input_autofocus_data_provincia__formMain; ?>>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_provincia__formMain; ?>"><?php echo $form_validation_span_msg_data_provincia__formMain; ?></span>
    </label>  

    <label for="data_provincia__formMain">
        <span class="form_label_name"><?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB'): ?>
            State/Province
        <?php else: ?>
            Provincia
        <?php endif; ?></span>
        <select name="data_provincia__formMain" id="data_provincia__formMain" class="data_provincia__formMain <?php echo $form_validation_input_class_data_provincia__formMain; ?>" form="formMainID" enterkeyhint="next">
            <option value="<?php echo $_POST['data_provincia__formMain']; ?>" selected><?php echo $_POST['data_provincia__formMain']; ?></option>

            <option value="<?php echo $_POST['data_provincia__formMain']; ?>" selected><?php if(isset($_POST['data_provincia__formMain'])) { echo $_POST['data_provincia__formMain']; } else { echo _('Seleccione su provincia'); } ?></option>
            <option value="CABA"><?php echo _('Ciudad Aut&oacute;noma de Buenos Aires'); ?></option>
            <option value="Pcia. de Buenos Aires"><?php echo _('Pcia. de Buenos Aires'); ?></option>
            <option value="Catamarca"><?php echo _('Catamarca'); ?></option>
            <option value="Chaco"><?php echo _('Chaco'); ?></option>
            <option value="Chubut"><?php echo _('Chubut'); ?></option>
            <option value="C&oacute;rdoba"><?php echo _('C&oacute;rdoba'); ?></option>
            <option value="Corrientes"><?php echo _('Corrientes'); ?></option>
            <option value="Entre R&iacute;os"><?php echo _('Entre R&iacute;os'); ?></option>
            <option value="Formosa"><?php echo _('Formosa'); ?></option>
            <option value="Jujuy"><?php echo _('Jujuy'); ?></option>
            <option value="La Pampa"><?php echo _('La Pampa'); ?></option>
            <option value="La Rioja"><?php echo _('La Rioja'); ?></option>
            <option value="Mendoza"><?php echo _('Mendoza'); ?></option>
            <option value="Misiones"><?php echo _('Misiones'); ?></option>
            <option value="Neuqu&eacute;n"><?php echo _('Neuqu&eacute;n'); ?></option>
            <option value="R&iacute;o Negro"><?php echo _('R&iacute;o Negro'); ?></option>
            <option value="Salta"><?php echo _('Salta'); ?></option>
            <option value="San Juan"><?php echo _('San Juan'); ?></option>
            <option value="San Luis"><?php echo _('San Luis'); ?></option>
            <option value="Santa Cruz"><?php echo _('Santa Cruz'); ?></option>
            <option value="Santa Fe"><?php echo _('Santa Fe'); ?></option>
            <option value="Santiago Del Estero"><?php echo _('Santiago Del Estero'); ?></option>
            <option value="Tierra del Fuego, Ant&aacute;rtida e Islas del Atl&aacute;ntico Sur"><?php echo _('Tierra del Fuego, Ant&aacute;rtida e Islas del Atl&aacute;ntico Sur'); ?></option>
            <option value="Tucum&aacute;n"><?php echo _('Tucum&aacute;n'); ?></option>
        </select>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_provincia__formMain; ?>"><?php echo $form_validation_span_msg_data_provincia__formMain; ?></span>
    </label>

    <label for="data_comoQueres__formMain">
        <span class="form_label_name"><?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB'): ?>
            How do you want to be contacted?
        <?php else: ?>
            ¿Cómo querés que te contactemos?
        <?php endif; ?></span>
        <select name="data_comoQueres__formMain" id="data_comoQueres__formMain" class="data_comoQueres__formMain <?php echo $form_validation_input_class_data_comoQueres__formMain; ?>" form="formMainID" enterkeyhint="next">
            <option value="<?php echo $_POST['data_comoQueres__formMain']; ?>" selected><?php echo $_POST['data_comoQueres__formMain']; ?></option>

            <option value="<?php echo $_POST['data_comoQueres__formMain']; ?>" selected><?php if(isset($_POST['data_comoQueres__formMain'])) { echo $_POST['data_comoQueres__formMain']; } else { echo _('Correo electr&oacute;nico, WhatsAspp o Instagram'); } ?></option>
            <option value="Correo"><?php echo _('Correo electr&oacute;nico'); ?></option>
            <option value="WhatsApp"><?php echo _('WhatsApp'); ?></option>
            <option value="Instagram"><?php echo _('Instagram'); ?></option>
        </select>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_comoQueres__formMain; ?>"><?php echo $form_validation_span_msg_data_comoQueres__formMain; ?></span>
    </label>

    <label for="data_GENERICSELECT__formMain" class="form_required">
        <span class="form_label_name"><?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB'): ?>
            GENERICSELECT
        <?php else: ?>
            GENERICSELECT
        <?php endif; ?></span>
        <select name="data_GENERICSELECT__formMain" id="data_GENERICSELECT__formMain" class="data_GENERICSELECT__formMain <?php echo $form_validation_input_class_data_GENERICSELECT__formMain; ?>" form="formMainID" enterkeyhint="next" required>
            <option value="<?php echo $_POST['data_GENERICSELECT__formMain']; ?>" selected><?php echo $_POST['data_GENERICSELECT__formMain']; ?></option>

            <option value="<?php echo $_POST['data_GENERICSELECT__formMain']; ?>" selected><?php if(isset($_POST['data_GENERICSELECT__formMain'])) { echo $_POST['data_GENERICSELECT__formMain']; } else { echo 'Selecciona una opci&oacute;n por favor'; } ?></option>
            <option value="AAAAAAAAAAAAA"><?php echo _('AAAAAAAAAAAAA'); ?></option>
            <option value="BBBBBBBBBBBBB"><?php echo _('BBBBBBBBBBBBB'); ?></option>
            <option value="CCCCCCCCCCCCC"><?php echo _('CCCCCCCCCCCCC'); ?></option>
        </select>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_GENERICSELECT__formMain; ?>"><?php echo $form_validation_span_msg_data_GENERICSELECT__formMain; ?></span>
    </label>

    <label for="data_pais__formMain">
        <span class="form_label_name"><?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB'): ?>
            Country
        <?php else: ?>
            Pa&iacute;s
        <?php endif; ?></span>
        <input type="text" name="data_pais__formMain" id="data_pais__formMain" class="data_pais__formMain <?php echo $form_validation_input_class_data_pais__formMain; ?>" value="<?php echo $_POST['data_pais__formMain']; ?>" form="formMainID" enterkeyhint="next" placeholder="<?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB') { echo ''; } else { echo ''; } ?>" <?php echo $form_input_autofocus_data_pais__formMain; ?>>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_pais__formMain; ?>"><?php echo $form_validation_span_msg_data_pais__formMain; ?></span>
    </label>

    <label for="data_celular__formMain">
        <span class="form_label_name"><?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB'): ?>
            Cell phone
        <?php else: ?>
            Celular
        <?php endif; ?></span>
        <input type="tel" name="data_celular__formMain" id="data_celular__formMain" class="data_celular__formMain <?php echo $form_validation_input_class_data_celular__formMain; ?>" value="<?php echo $_POST['data_celular__formMain']; ?>" form="formMainID" enterkeyhint="next" placeholder="<?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB') { echo ''; } else { echo ''; } ?>" <?php echo $form_input_autofocus_data_celular__formMain; ?>>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_celular__formMain; ?>"><?php echo $form_validation_span_msg_data_celular__formMain; ?></span>
    </label>

    <label for="data_telefono__formMain">
        <span class="form_label_name"><?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB'): ?>
            Telephone
        <?php else: ?>
            Tel&eacute;fono
        <?php endif; ?></span>
        <input type="tel" name="data_telefono__formMain" id="data_telefono__formMain" class="data_telefono__formMain <?php echo $form_validation_input_class_data_telefono__formMain; ?>" value="<?php echo $_POST['data_telefono__formMain']; ?>" form="formMainID" enterkeyhint="next" placeholder="<?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB') { echo ''; } else { echo ''; } ?>" <?php echo $form_input_autofocus_data_telefono__formMain; ?>>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_telefono__formMain; ?>"><?php echo $form_validation_span_msg_data_telefono__formMain; ?></span>
    </label>

    <fieldset class="<?php echo $form_validation_input_class_data_whatsapp__formMain; ?>">
        <legend class="form_label_name"><?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB'): ?>
            WhatsApp contact
        <?php else: ?>
            Nº de WhatsApp
        <?php endif; ?></legend>

        <label for="data_whatsappAreaCode__formMain">
            <span class="form_label_name">Código de área</span>
            <input type="tel" name="data_whatsappAreaCode__formMain" id="data_whatsappAreaCode__formMain" class="data_whatsappAreaCode__formMain <?php echo $form_validation_input_class_data_whatsappAreaCode__formMain; ?>" value="<?php echo $_POST['data_whatsappAreaCode__formMain']; ?>" form="formMainID" enterkeyhint="next" <?php echo $form_input_autofocus_data_whatsappAreaCode__formMain; ?>>
            <span class="form_validation_span <?php echo $form_validation_span_class_data_whatsappAreaCode__formMain; ?>"><?php echo $form_validation_span_msg_data_whatsappAreaCode__formMain; ?></span>
            <span class="form_label_msg_sugg"><?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB'): ?>
                E.g. 11, 341, 2320.
            <?php else: ?>
                Por ej: 11, 341, 2320.
            <?php endif; ?>.</span>
        </label>

        <label for="data_whatsappNumber__formMain">
            <span class="form_label_name">Número</span>
            <input type="tel" name="data_whatsappNumber__formMain" id="data_whatsappNumber__formMain" class="data_whatsappNumber__formMain <?php echo $form_validation_input_class_data_whatsappNumber__formMain; ?>" value="<?php echo $_POST['data_whatsappNumber__formMain']; ?>" form="formMainID" enterkeyhint="next" <?php echo $form_input_autofocus_data_whatsappNumber__formMain; ?>>
            <span class="form_validation_span <?php echo $form_validation_span_class_data_whatsappNumber__formMain; ?>"><?php echo $form_validation_span_msg_data_whatsappNumber__formMain; ?></span>
            <span class="form_label_msg_sugg"><?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB'): ?>
                E.g. 1234567, 12345678.
            <?php else: ?>
                Por ej: 1234567, 12345678.
            <?php endif; ?>.</span>
        </label>        
    </fieldset>

    <label for="data_email__formMain" class="form_required">
        <span class="form_label_name"><?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB'): ?>
            E-mail
        <?php else: ?>
            Correo electr&oacute;nico
        <?php endif; ?></span>
        <input type="email" name="data_email__formMain" id="data_email__formMain" class="data_email__formMain <?php echo $form_validation_input_class_data_email__formMain; ?>" value="<?php echo $_POST['data_email__formMain']; ?>" form="formMainID" enterkeyhint="next" placeholder="<?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB') { echo ''; } else { echo ''; } ?>" <?php echo $form_input_autofocus_data_email__formMain; ?> required>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_email__formMain; ?>"><?php echo $form_validation_span_msg_data_email__formMain; ?></span>  
        <span class="form_label_msg_sugg"><?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB'): ?>
            An email will be sent to confirm this address
        <?php else: ?>
            Te enviaremos un correo a esta casilla para confirmar tu registro
        <?php endif; ?>.</span>
    </label> 

    <label for="data_email__formMain" class="form_required">
        <span class="form_label_name"><?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB'): ?>
            E-mail
        <?php else: ?>
            E-mail
        <?php endif; ?></span>
        <input type="email" name="data_email__formMain" id="data_email__formMain" class="data_email__formMain <?php echo $form_validation_input_class_data_email__formMain; ?>" value="<?php echo $_POST['data_email__formMain']; ?>" form="formMainID" enterkeyhint="next" placeholder="<?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB') { echo ''; } else { echo ''; } ?>" <?php echo $form_input_autofocus_data_email__formMain; ?> required>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_email__formMain; ?>"><?php echo $form_validation_span_msg_data_email__formMain; ?></span>  
        <span class="form_label_msg_sugg"><?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB'): ?>
            An email will be sent to confirm this address
        <?php else: ?>
            Te enviaremos un correo a esta casilla para confirmar tu registro
        <?php endif; ?>.</span>
    </label>               

    <label for="data_webSite__formMain">
        <span class="form_label_name"><?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB'): ?>
            Website
        <?php else: ?>
            Sitio Web
        <?php endif; ?></span>
        <input type="url" name="data_webSite__formMain" id="data_webSite__formMain" class="data_webSite__formMain <?php echo $form_validation_input_class_data_webSite__formMain; ?>" value="<?php echo $_POST['data_webSite__formMain']; ?>" form="formMainID" enterkeyhint="next" placeholder="<?php echo _('Debe comenzar con http://www'); ?>" <?php echo $form_input_autofocus_data_webSite__formMain; ?>>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_webSite__formMain; ?>"><?php echo $form_validation_span_msg_data_webSite__formMain; ?></span>
    </label>              

    <label for="data_facebook__formMain">
        <span class="form_label_name"><?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB'): ?>
            Facebook profile
        <?php else: ?>
            Perfil de Facebook
        <?php endif; ?></span>
        <input type="url" name="data_facebook__formMain" id="data_facebook__formMain" class="data_facebook__formMain <?php echo $form_validation_input_class_data_facebook__formMain; ?>" value="<?php echo $_POST['data_facebook__formMain']; ?>" form="formMainID" enterkeyhint="next" placeholder="" <?php echo $form_input_autofocus_data_facebook__formMain; ?>>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_facebook__formMain; ?>"><?php echo $form_validation_span_msg_data_facebook__formMain; ?></span>
    </label>       

    <label for="data_instagram__formMain">
        <span class="form_label_name"><?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB'): ?>
            Instagram
        <?php else: ?>
            Instagram
        <?php endif; ?></span>
        <input type="text" name="data_instagram__formMain" id="data_instagram__formMain" class="data_instagram__formMain <?php echo $form_validation_input_class_data_instagram__formMain; ?>" value="<?php echo $_POST['data_instagram__formMain']; ?>" form="formMainID" enterkeyhint="next" placeholder="<?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB') { echo 'Just write the username'; } else { echo 'Solamente escribir el usuario'; } ?>" <?php echo $form_input_autofocus_data_instagram__formMain; ?>>     
        <span class="form_label_msg_sugg"><?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB'): ?>
            An email will be sent to confirm this address
        <?php else: ?>
            Te enviaremos un correo a esta casilla para confirmar tu registro
        <?php endif; ?>.</span>
    </label>

    <label for="data_empresa__formMain">
        <span class="form_label_name"><?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB'): ?>
            Company
        <?php else: ?>
            Empresa
        <?php endif; ?></span>
        <span class="form_label_name"><?php echo _(''); ?></span>
        <input type="text" name="data_empresa__formMain" id="data_empresa__formMain" class="data_empresa__formMain <?php echo $form_validation_input_class_data_empresa__formMain; ?>" value="<?php echo $_POST['data_empresa__formMain']; ?>" form="formMainID" enterkeyhint="next" placeholder="<?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB') { echo ''; } else { echo ''; } ?>" <?php echo $form_input_autofocus_data_empresa__formMain; ?>>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_empresa__formMain; ?>"><?php echo $form_validation_span_msg_data_empresa__formMain; ?></span>
    </label>

    <label for="data_razonSocial__formMain">
        <span class="form_label_name"><?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB'): ?>
            Raz&oacute;n Social
        <?php else: ?>
            Raz&oacute;n Social
        <?php endif; ?></span>
        <input type="text" name="data_razonSocial__formMain" id="data_razonSocial__formMain" class="data_razonSocial__formMain <?php echo $form_validation_input_class_data_razonSocial__formMain; ?>" value="<?php echo $_POST['data_razonSocial__formMain']; ?>" form="formMainID" enterkeyhint="next" placeholder="<?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB') { echo ''; } else { echo ''; } ?>" <?php echo $form_input_autofocus_data_razonSocial__formMain; ?>>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_razonSocial__formMain; ?>"><?php echo $form_validation_span_msg_data_razonSocial__formMain; ?></span>
    </label>

    <label for="data_rubro__formMain">
        <span class="form_label_name"><?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB'): ?>
            Rubro
        <?php else: ?>
            Rubro
        <?php endif; ?></span>
        <input type="text" name="data_rubro__formMain" id="data_rubro__formMain" class="data_rubro__formMain <?php echo $form_validation_input_class_data_rubro__formMain; ?>" value="<?php echo $_POST['data_rubro__formMain']; ?>" form="formMainID" enterkeyhint="next" placeholder="<?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB') { echo ''; } else { echo ''; } ?>" <?php echo $form_input_autofocus_data_rubro__formMain; ?>>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_rubro__formMain; ?>"><?php echo $form_validation_span_msg_data_rubro__formMain; ?></span>
    </label>

    <label for="data_cargo__formMain">
        <span class="form_label_name"><?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB'): ?>
            Position
        <?php else: ?>
            Cargo
        <?php endif; ?></span>
        <input type="text" name="data_cargo__formMain" id="data_cargo__formMain" class="data_cargo__formMain <?php echo $form_validation_input_class_data_cargo__formMain; ?>" value="<?php echo $_POST['data_cargo__formMain']; ?>" form="formMainID" enterkeyhint="next" placeholder="<?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB') { echo ''; } else { echo ''; } ?>" <?php echo $form_input_autofocus_data_cargo__formMain; ?>>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_cargo__formMain; ?>"><?php echo $form_validation_span_msg_data_cargo__formMain; ?></span>
    </label>

    <label for="data_cantidad__formMain">
        <span class="form_label_name"><?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB'): ?>
            Quantity
        <?php else: ?>
            Cantidad
        <?php endif; ?></span>
        <input type="text" inputmode="numeric" pattern="[0-9]*" name="data_cantidad__formMain" id="data_cantidad__formMain" class="cantidad <?php echo $form_validation_input_class_data_cantidad__formMain; ?>" value="<?php echo $_POST['data_cantidad__formMain']; ?>" form="formMainID" enterkeyhint="next" placeholder="<?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB') { echo ''; } else { echo ''; } ?>" <?php echo $form_input_autofocus_data_cantidad__formMain; ?>>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_cantidad__formMain; ?>"><?php echo $form_validation_span_msg_data_cantidad__formMain; ?></span>
    </label>

    <label for="data_cantidad__formMain">
        <span class="form_label_name"><?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB'): ?>
            Cantidad de integrantes
        <?php else: ?>
            Cantidad de integrantes
        <?php endif; ?></span>
        <input type="number" min="0" inputmode="numeric" name="data_cantidad__formMain" id="data_cantidad__formMain" class="cantidad <?php echo $form_validation_input_class_data_cantidad__formMain; ?>" value="<?php echo $_POST['data_cantidad__formMain']; ?>" form="formMainID" enterkeyhint="next" <?php echo $form_input_autofocus_data_cantidad__formMain; ?>>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_cantidad__formMain; ?>"><?php echo $form_validation_span_msg_data_cantidad__formMain; ?></span>
    </label>

    <label for="data_fecha__formMain">
        <span class="form_label_name"><?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB'): ?>
            Date
        <?php else: ?>
            Fecha
        <?php endif; ?></span>
        <input type="date" name="data_fecha__formMain" id="data_fecha__formMain" class="data_fecha__formMain <?php echo $form_validation_input_class_data_fecha__formMain; ?>" value="<?php echo $_POST['data_fecha__formMain']; ?>" form="formMainID" enterkeyhint="next" placeholder="<?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB') { echo 'Please select a date'; } else { echo 'Seleccione una fecha en el calendario'; } ?>" <?php echo $form_input_autofocus_data_fecha__formMain; ?>>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_fecha__formMain; ?>"><?php echo $form_validation_span_msg_data_fecha__formMain; ?></span>
    </label>

    <fieldset class="<?php echo $form_validation_input_class_data_newsletter__formMain; ?>">
        <legend class="form_label_name"><?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB') { echo 'Subscribe Newsletter'; } else { echo '&iquest;Desea recibir el bolet&iacute;n de noticias?'; } ?></legend>

        <label for="data_newsletterSi__formMain" class="label_radio">
            <input type="radio" name="data_newsletter__formMain" id="data_newsletterSi__formMain" form="formMainID" value="<?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB') { echo 'Yes'; } else { echo 'Si'; } ?>" class="input_radio data_newsletter__formMain" <?php echo $form_input_autofocus_data_newsletter__formMain; ?>>
            <span><?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB'): ?>
            Yes
        <?php else: ?>
            Sí
        <?php endif; ?></span>
        </label>

        <label for="data_newsletterNo__formMain" class="label_radio">
            <input type="radio" name="data_newsletter__formMain" id="data_newsletterNo__formMain" form="formMainID" value="<?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB') { echo 'No'; } else { echo 'No'; } ?>" class="input_radio data_newsletter__formMain">
            <span><?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB'): ?>
            No
        <?php else: ?>
            No
        <?php endif; ?></span>
        </label>

        <label for="data_newsletterNoSe__formMain" class="label_radio">
            <input type="radio" name="data_newsletter__formMain" id="data_newsletterNoSe__formMain" form="formMainID" value="<?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB') { echo "I don't know"; } else { echo "No S&eacute;"; } ?>" class="input_radio data_newsletter__formMain">
            <span><?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB'): ?>
            I don't know
        <?php else: ?>
            No S&eacute;
        <?php endif; ?></span>
        </label>
    </fieldset>

    <label for="data_precioTilde__formMain">
        <?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB'): ?>
            I want a meeting
        <?php else: ?>
            Prefiero charlar personalmente
        <?php endif; ?>
        <input type="checkbox" name="data_precioTilde__formMain" id="data_precioTilde__formMain" class="data_precioTilde__formMain" form="formMainID" value="Si">
    </label>

    <label for="data_browser__formMain">
        <?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB'): ?>
            Choose a browser from this list
        <?php else: ?>
            Elija un explorador de la lista
        <?php endif; ?>:
        <input type="text" name="data_browser__formMain" id="data_browser__formMain" class="data_browser__formMain" form="formMainID" enterkeyhint="next" list="browser_dataList">
        <datalist id="browser_dataList">
            <option value="Chrome">
            <option value="Firefox">
            <option value="Internet Explorer">
            <option value="Opera">
            <option value="Safari">
            <option value="Microsoft Edge">
        </datalist>
    </label>

    <label for="data_asunto__formMain">
        <span class="form_label_name"><?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB'): ?>
            Subject
        <?php else: ?>
            Asunto
        <?php endif; ?></span>
        <input type="text" name="data_asunto__formMain" id="data_asunto__formMain" class="data_asunto__formMain <?php echo $form_validation_input_class_data_asunto__formMain; ?>" value="<?php echo $_POST['data_asunto__formMain']; ?>" form="formMainID" enterkeyhint="next" placeholder="<?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB') { echo ''; } else { echo ''; } ?>" <?php echo $form_input_autofocus_data_asunto__formMain; ?>>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_asunto__formMain; ?>"><?php echo $form_validation_span_msg_data_asunto__formMain; ?></span>
    </label> 
                  
    <label for="data_area__formMain">
        <span class="form_label_name"><?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB'): ?>
            Subject
        <?php else: ?>
            Asunto
        <?php endif; ?></span>
        <select name="data_area__formMain" id="data_area__formMain" class="data_area__formMain <?php echo $form_validation_input_class_data_area__formMain; ?>" form="formMainID" enterkeyhint="next">
            <option value="<?php echo $_POST['data_area__formMain']; ?>" selected><?php if($data_area__formMain == $site_email_contacto_address){
                if(isset($gettext_idioma) && $gettext_idioma == 'en_GB') { echo 'Subject: Technical'; } else { echo 'Asunto: Consulta técnica'; }
            } elseif($data_area__formMain == $site_email_EMAILB_address) {
                if(isset($gettext_idioma) && $gettext_idioma == 'en_GB') { echo 'Subject: Investment'; } else { echo 'Asunto: Inversión'; }
            } else {
                if(isset($gettext_idioma) && $gettext_idioma == 'en_GB') { echo 'Please select a subject'; } else { echo 'Por favor seleccione un asunto'; }
            } ?></option>
            <option value="<?php echo $site_email_contacto_address; ?>" <?php if($data_area__formMain == $site_email_contacto_address){ echo 'class="displayNone"'; } ?>><?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB') { echo 'Subject: Technical'; } else { echo 'Asunto: Consulta técnica'; } ?> - <?php echo $site_email_contacto_address ?></option>
            <option value="<?php echo $site_email_EMAILB_address; ?>" <?php if($data_area__formMain == $site_email_EMAILB_address){ echo 'class="displayNone"'; } ?>><?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB') { echo 'Subject: Investment'; } else { echo 'Asunto: Inversión'; } ?> - <?php echo $site_email_EMAILB_address ?></option>
        </select>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_area__formMain; ?>"><?php echo $form_validation_span_msg_data_area__formMain; ?></span>  
    </label>

    <label for="data_area__formMain">
        <span class="form_label_name"><?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB'): ?>
            Department
        <?php else: ?>
            &Aacute;rea a contactar
        <?php endif; ?></span>
        <select name="data_area__formMain" id="data_area__formMain" class="data_area__formMain <?php echo $form_validation_input_class_data_area__formMain; ?>" form="formMainID" enterkeyhint="next">
            <option value="<?php echo $_POST['data_area__formMain']; ?>" selected><?php if(isset($_POST['data_area__formMain'])) { echo $_POST['data_area__formMain']; } else {
                if(isset($gettext_idioma) && $gettext_idioma == 'en_GB') { echo 'Please select a department'; } else { echo 'Por favor seleccione un área a contactar'; }
            } ?></option>
            <option value="<?php echo $site_email_contacto_address; ?>"><?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB') { echo 'Address: a'; } else { echo 'Address: a'; } ?> - <?php echo $site_email_contacto_address; ?></option>
            <option value="<?php echo $site_email_EMAILB_address; ?>"><?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB') { echo 'Address: a'; } else { echo 'Address: a'; } ?> - <?php echo $site_email_EMAILB_address; ?></option>
        </select>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_area__formMain; ?>"><?php echo $form_validation_span_msg_data_area__formMain; ?></span>  
    </label>

    // Mensaje con validaci&oacute;n
    <label for="data_mensaje__formMain" class="form_required">
        <span class="form_label_name"><?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB'): ?>
            Details
        <?php else: ?>
            Detalle del servicio que desea contratar
        <?php endif; ?></span>
        <textarea name="data_mensaje__formMain" id="data_mensaje__formMain" class="data_mensaje__formMain <?php echo $form_validation_input_class_data_mensaje__formMain; ?>" form="formMainID" placeholder="<?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB') { echo 'Write your message here'; } else { echo 'Escriba aqu&iacute; su mensaje'; } ?>" <?php echo $form_input_autofocus_data_mensaje__formMain; ?> required><?php echo $_POST['data_mensaje__formMain']; ?></textarea>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_mensaje__formMain; ?>"><?php echo $form_validation_span_msg_data_mensaje__formMain; ?></span>
    </label>

    <label for="data_mensaje__formMain">
        <span class="form_label_name"><?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB'): ?>
            Message
        <?php else: ?>
            Mensaje
        <?php endif; ?></span>
        <textarea name="data_mensaje__formMain" id="data_mensaje__formMain" class="data_mensaje__formMain" form="formMainID" placeholder="<?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB') { echo 'Write your message here'; } else { echo 'Escriba aqu&iacute; su mensaje'; } ?>"><?php echo $_POST['data_mensaje__formMain']; ?></textarea>
    </label>

    <input type="submit" value="<?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB') { echo 'Send'; } else { echo 'Enviar'; } ?>" form="formMainID" enterkeyhint="done" name="button_form_submit__formMain" class="button_form_submit button_form_submit__formMain">
</form>