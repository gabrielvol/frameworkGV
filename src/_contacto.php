<?php
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/variables.inc.php');
    
    $page_int                               = 1;
    $section_contacto                       = 1;
    $section_contacto_hasMandatoryMsg_act   = 0;
    
    $site_title     = "Contacto | ".$company_name_title;
  //$site_title_GB  = "Contact | ".$company_name_title;
    
    $site_desc      = $site_desc_global;
  //$site_desc_GB   = $site_desc_global_GB;
    
//---Open Graph Start
                        // Max 35 char
                        // 123456789-123456789-123456789-12345 
    $openGraph_title    = $site_title;
  //$openGraph_title_GB = "OGWebsiteTitle";
    
                        // Max 65 char                       ·
                        // 123456789-123456789-123456789-123456789-123456789-123456789-12345 
    $openGraph_desc     = $site_desc_global;
  //$openGraph_desc_GB  = "Descr.";
    
    $openGraph_url      = $url_global;  
    $openGraph_siteName = $openGraph_title;
//---Open Graph End
    
    $nav_pageCurrent = 0;
    
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/gettext.variableCheck.inc.php');    
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/head.inc.php');
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/gettext.locale.inc.php');
?>
<link href="/nuevo/_source/css/datepicker.css" rel="stylesheet">
<script src="/nuevo/_source/js/jquery-ui-datepicker.js"></script>
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/header.inc.php'); ?>
    <div id="main" class="page_int section_contacto" role="main">
        <div class="mobileForm tabletForm">
            <form method="post" class="mha">
                <?php
                    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/formSend.inc.php');
                    echo $formStatusMSG__formName;

                    if($section_contacto_hasMandatoryMsg_act == 1) {
                        echo '<div class="mandatoryMsg '.$formMandatoryMSG_classes__formName.'">'.$formMandatoryMSG__formName.'</div>';
                    }                
                ?>

                <label for="nombre__formName">
                    <span class="labelName"><?php echo _('Nombre'); ?></span>
                    <input type="text" name="nombre__formName" id="nombre__formName" class="nombre <?php echo $formInput_error_class_nombre__formName ?>" value="<?php echo $_POST['nombre__formName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $formInput_autofocus_nombre__formName ?>>
                    <span class="formInputErrorMsg <?php echo $formSpan_error_class_nombre__formName ?>"><?php echo $formSpan_error_MSG_nombre__formName ?></span>
                </label>

                <label for="apellido__formName">
                    <span class="labelName"><?php echo _('Apellido'); ?></span>
                    <input type="text" name="apellido__formName" id="apellido__formName" class="apellido <?php echo $formInput_error_class_apellido__formName ?>" value="<?php echo $_POST['apellido__formName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $formInput_autofocus_apellido__formName ?>>
                    <span class="formInputErrorMsg <?php echo $formSpan_error_class_apellido__formName ?>"><?php echo $formSpan_error_MSG_apellido__formName ?></span>             
                </label>

                <label for="nombreApe__formName">
                    <span class="labelName"><?php echo _('Nombre y Apellido'); ?></span>
                    <input type="text" name="nombreApe__formName" id="nombreApe__formName" class="nombreApe <?php echo $formInput_error_class_nombreApe__formName ?>" value="<?php echo $_POST['nombreApe__formName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $formInput_autofocus_nombreApe__formName ?>>
                    <span class="formInputErrorMsg <?php echo $formSpan_error_class_nombreApe__formName ?>"><?php echo $formSpan_error_MSG_nombreApe__formName ?></span>             
                </label>

                <label for="nombreComp__formName">
                    <span class="labelName"><?php echo _('Nombre Completo'); ?></span>
                    <input type="text" name="nombreComp__formName" id="nombreComp__formName" class="nombreComp <?php echo $formInput_error_class_nombreComp__formName ?>" value="<?php echo $_POST['nombreComp__formName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $formInput_autofocus_nombreComp__formName ?>>
                    <span class="formInputErrorMsg <?php echo $formSpan_error_class_nombreComp__formName ?>"><?php echo $formSpan_error_MSG_nombreComp__formName ?></span>             
                </label>

                <label for="username__formName">
                    <span class="labelName"><?php echo _('Nombre de usuario'); ?></span>
                    <input type="text" name="username__formName" id="username__formName" class="username <?php echo $formInput_error_class_username__formName ?>" value="<?php echo $_POST['username__formName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $formInput_autofocus_username__formName ?>>
                    <span class="formInputErrorMsg <?php echo $formSpan_error_class_username__formName ?>"><?php echo $formSpan_error_MSG_username__formName ?></span>             
                </label>

                <label for="genero__formName">
                    <span class="labelName"><?php echo _('Género'); ?></span>
                    <select name="genero__formName" id="genero__formName" class="genero" >
                        <option value="<?php echo $_POST['genero__formName']; ?>" selected><?php echo _('Seleccione una opci&oacute;n'); ?></option>
                        <option value="Masculino"><?php echo _('Masculino'); ?></option>
                        <option value="Femenino"><?php echo _('Femenino'); ?></option>
                    </select>
                </label>

                <label for="genero__formName">
                    <span class="labelName"><?php echo _('Género'); ?></span>
                    <input type="text" name="genero__formName" id="genero__formName" class="genero <?php echo $formInput_error_class_genero__formName ?>" value="<?php echo $_POST['genero__formName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $formInput_autofocus_genero__formName ?>>
                    <span class="formInputErrorMsg <?php echo $formSpan_error_class_genero__formName ?>"><?php echo $formSpan_error_MSG_genero__formName ?></span>               
                </label>

                <label for="dni__formName">
                    <span class="labelName"><?php echo _('DNI'); ?></span>
                    <input type="tel" name="dni__formName" id="dni__formName" class="dni <?php echo $formInput_error_class_DNI__formName ?>" value="<?php echo $_POST['dni__formName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $formInput_autofocus_DNI__formName ?>>
                    <span class="formInputErrorMsg <?php echo $formSpan_error_class_DNI__formName ?>"><?php echo $formSpan_error_MSG_DNI__formName ?></span>               
                </label>

                <label for="password__formName">
                    <span class="labelName"><?php echo _('Contraseña'); ?></span>
                    <input type="password" name="contrasena__formName" id="contrasena__formName" class="contrasena <?php echo $formInput_error_class_password__formName ?>" value="<?php echo $_POST['contrasena__formName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $formInput_autofocus_password__formName ?>>
                    <span class="formInputErrorMsg <?php echo $formSpan_error_class_password__formName ?>"><?php echo $formSpan_error_MSG_password__formName ?></span>               
                </label>

                <label for="direccion__formName">
                    <span class="labelName"><?php echo _('Direcci&oacute;n'); ?></span>
                    <input type="text" name="direccion__formName" id="direccion__formName" class="direccion <?php echo $formInput_error_class_direccion__formName ?>" value="<?php echo $_POST['direccion__formName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $formInput_autofocus_direccion__formName ?>>
                    <span class="formInputErrorMsg <?php echo $formSpan_error_class_direccion__formName ?>"><?php echo $formSpan_error_MSG_direccion__formName ?></span>             
                </label>

                <label for="domicilio__formName">
                    <span class="labelName"><?php echo _('Domicilio'); ?></span>
                    <input type="text" name="domicilio__formName" id="domicilio__formName" class="domicilio <?php echo $formInput_error_class_Domicilio__formName ?>" value="<?php echo $_POST['domicilio__formName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $formInput_autofocus_Domicilio__formName ?>>
                    <span class="formInputErrorMsg <?php echo $formSpan_error_class_Domicilio__formName ?>"><?php echo $formSpan_error_MSG_Domicilio__formName ?></span>             
                </label>

                <label for="localidad__formName">
                    <span class="labelName"><?php echo _('Localidad'); ?></span>
                    <input type="text" name="localidad__formName" id="localidad__formName" class="localidad <?php echo $formInput_error_class_Localidad__formName ?>" value="<?php echo $_POST['localidad__formName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $formInput_autofocus_Localidad__formName ?>>
                    <span class="formInputErrorMsg <?php echo $formSpan_error_class_Localidad__formName ?>"><?php echo $formSpan_error_MSG_Localidad__formName ?></span>             
                </label>

                <label for="codigopostal__formName">
                    <span class="labelName"><?php echo _('C&oacute;digo postal'); ?></span>
                    <input type="tel" name="codigopostal__formName" id="codigopostal__formName" class="codigopostal <?php echo $formInput_error_class_CodigoPostal__formName ?>" value="<?php echo $_POST['codigopostal__formName']; ?>" placeholder="<?php echo _('Ej.:'); ?> B1846DWF, 1832" <?php echo $formInput_autofocus_CodigoPostal__formName ?>>
                    <span class="formInputErrorMsg <?php echo $formSpan_error_class_CodigoPostal__formName ?>"><?php echo $formSpan_error_MSG_CodigoPostal__formName ?></span>             
                </label>

                <label for="provincia__formName">
                    <span class="labelName"><?php echo _('Provincia'); ?></span>
                    <input type="text" name="provincia__formName" id="provincia__formName" class="provincia <?php echo $formInput_error_class_Provincia__formName ?>" value="<?php echo $_POST['provincia__formName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $formInput_autofocus_Provincia__formName ?>>
                    <span class="formInputErrorMsg <?php echo $formSpan_error_class_Provincia__formName ?>"><?php echo $formSpan_error_MSG_Provincia__formName ?></span>             
                </label>  

                <label for="provincia__formName">
                    <span class="labelName"><?php echo _('Provincia'); ?></span>
                    <select id="provincia" name="provincia__formName" class="provincia <?php echo $formInput_error_class_Provincia__formName ?>">
                        <option value="<?php echo $_POST['provincia']; ?>" selected><?php echo $_POST['provincia']; ?></option>

                        <option value="<?php echo $_POST['provincia']; ?>" selected><?php if(isset($_POST['provincia'])) { echo $_POST['provincia']; } else { echo _('Seleccione su provincia'); } ?></option>
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
                    <span class="formInputErrorMsg <?php echo $formSpan_error_class_Provincia__formName ?>"><?php echo $formSpan_error_MSG_Provincia__formName ?></span>  
                </label>

                <label for="genericSelect__formName">
                    <span class="labelName"><?php echo _('genericSelect'); ?></span>
                    <select id="provincia" name="genericSelect__formName" class="genericSelect <?php echo $formInput_error_class_GenericSelect__formName ?>">
                        <option value="<?php echo $_POST['genericSelect']; ?>" selected><?php echo $_POST['genericSelect']; ?></option>

                        <option value="<?php echo $_POST['genericSelect']; ?>" selected><?php if(isset($_POST['genericSelect'])) { echo $_POST['genericSelect']; } else { echo _('Selecciona una opción por favor'); } ?></option>
                        <option value="AAAAAAAAAAAAA"><?php echo _('AAAAAAAAAAAAA'); ?></option>
                        <option value="BBBBBBBBBBBBB"><?php echo _('BBBBBBBBBBBBB'); ?></option>
                        <option value="CCCCCCCCCCCCC"><?php echo _('CCCCCCCCCCCCC'); ?></option>
                    </select>
                    <span class="formInputErrorMsg <?php echo $formSpan_error_class_GenericSelect__formName ?>"><?php echo $formSpan_error_MSG_GenericSelect__formName ?></span>  
                </label>

                <label for="pais__formName">
                    <span class="labelName"><?php echo _('Pa&iacute;s'); ?></span>
                    <input type="text" name="pais__formName" id="pais__formName" class="pais <?php echo $formInput_error_class_Pais__formName ?>" value="<?php echo $_POST['pais__formName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $formInput_autofocus_Pais__formName ?>>
                    <span class="formInputErrorMsg <?php echo $formSpan_error_class_Pais__formName ?>"><?php echo $formSpan_error_MSG_Pais__formName ?></span>             
                </label>

                <label for="telefono__formName">
                    <span class="labelName"><?php echo _('Tel&eacute;fono'); ?></span>
                    <input type="tel" name="telefono__formName" id="telefono__formName" class="telefono <?php echo $formInput_error_class_Telefono__formName ?>" value="<?php echo $_POST['telefono__formName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $formInput_autofocus_Telefono__formName ?>>
                    <span class="formInputErrorMsg <?php echo $formSpan_error_class_Telefono__formName ?>"><?php echo $formSpan_error_MSG_Telefono__formName ?></span>             
                </label>

                <label for="email__formName">
                    <span class="labelName"><?php echo _('Correo electr&oacute;nico'); ?></span>
                    <input type="email" name="email__formName" id="email__formName" class="email <?php echo $formInput_error_class_Email__formName ?>" value="<?php echo $_POST['email__formName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $formInput_autofocus_Email__formName ?>>
                    <span class="formInputErrorMsg <?php echo $formSpan_error_class_Email__formName ?>"><?php echo $formSpan_error_MSG_Email__formName ?></span>             
                </label> 

                <label for="email__formName">
                    <span class="labelName"><?php echo _('E-mail'); ?></span>
                    <input type="email" name="email__formName" id="email__formName" class="email <?php echo $formInput_error_class_Email__formName ?>" value="<?php echo $_POST['email__formName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $formInput_autofocus_Email__formName ?>>
                    <span class="formInputErrorMsg <?php echo $formSpan_error_class_Email__formName ?>"><?php echo $formSpan_error_MSG_Email__formName ?></span>             
                </label>               

                <label for="website__formName">
                    <span class="labelName"><?php echo _('Sitio web'); ?></span>
                    <input type="url" name="website__formName" id="website__formName" class="website <?php echo $formInput_error_class_Website__formName ?>" value="<?php echo $_POST['website__formName']; ?>" placeholder="<?php echo _('Debe comenzar con http://www'); ?>" <?php echo $formInput_autofocus_Website__formName ?>>
                    <span class="formInputErrorMsg <?php echo $formSpan_error_class_Website__formName ?>"><?php echo $formSpan_error_MSG_Website__formName ?></span>             
                </label>              

                <label for="website__formName">
                    <span class="labelName"><?php echo _('Sitio web'); ?></span>
                    <input type="text" name="website__formName" id="website__formName" class="website <?php echo $formInput_error_class_Website__formName ?>" value="<?php echo $_POST['website__formName']; ?>" placeholder="" <?php echo $formInput_autofocus_Website__formName ?>>
                    <span class="formInputErrorMsg <?php echo $formSpan_error_class_Website__formName ?>"><?php echo $formSpan_error_MSG_Website__formName ?></span>             
                </label>          

                <label for="facebook__formName">
                    <span class="labelName"><?php echo _('Perfil de Facebook'); ?></span>
                    <input type="url" name="facebook__formName" id="facebook__formName" class="facebook <?php echo $formInput_error_class_Facebook__formName ?>" value="<?php echo $_POST['facebook__formName']; ?>" placeholder="<?php echo _('Debe comenzar con http://www.facebook.com/'); ?>" <?php echo $formInput_autofocus_Facebook__formName ?>>
                    <span class="formInputErrorMsg <?php echo $formSpan_error_class_Facebook__formName ?>"><?php echo $formSpan_error_MSG_Facebook__formName ?></span>             
                </label>

                <label for="empresa__formName">
                    <span class="labelName"><?php echo _('Empresa'); ?></span>
                    <input type="text" name="empresa__formName" id="empresa__formName" class="empresa <?php echo $formInput_error_class_Empresa__formName ?>" value="<?php echo $_POST['empresa__formName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $formInput_autofocus_Empresa__formName ?>>
                    <span class="formInputErrorMsg <?php echo $formSpan_error_class_Empresa__formName ?>"><?php echo $formSpan_error_MSG_Empresa__formName ?></span>             
                </label>

                <label for="razonSocial__formName">
                    <span class="labelName"><?php echo _('Raz&oacute;n Social'); ?></span>
                    <input type="text" name="razonSocial__formName" id="razonSocial__formName" class="razonSocial <?php echo $formInput_error_class_RazonSocial__formName ?>" value="<?php echo $_POST['razonSocial__formName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $formInput_autofocus_RazonSocial__formName ?>>
                    <span class="formInputErrorMsg <?php echo $formSpan_error_class_RazonSocial__formName ?>"><?php echo $formSpan_error_MSG_RazonSocial__formName ?></span>             
                </label>

                <label for="rubro__formName">
                    <span class="labelName"><?php echo _('Rubro'); ?></span>
                    <input type="text" name="rubro__formName" id="rubro__formName" class="rubro <?php echo $formInput_error_class_Rubro__formName ?>" value="<?php echo $_POST['rubro__formName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $formInput_autofocus_Rubro__formName ?>>
                    <span class="formInputErrorMsg <?php echo $formSpan_error_class_Rubro__formName ?>"><?php echo $formSpan_error_MSG_Rubro__formName ?></span>             
                </label>

                <label for="cargo__formName">
                    <span class="labelName"><?php echo _('Cargo'); ?></span>
                    <input type="text" name="cargo__formName" id="cargo__formName" class="cargo <?php echo $formInput_error_class_Cargo__formName ?>" value="<?php echo $_POST['cargo__formName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $formInput_autofocus_Cargo__formName ?>>
                    <span class="formInputErrorMsg <?php echo $formSpan_error_class_Cargo__formName ?>"><?php echo $formSpan_error_MSG_Cargo__formName ?></span>             
                </label>

                <label for="fecha__formName">
                    <span class="labelName"><?php echo _('Fecha'); ?></span>
                    <input type="date" name="fecha__formName" id="fecha__formName" class="fecha <?php echo $formInput_error_class_Fecha__formName ?>" value="<?php echo $_POST['fecha__formName']; ?>" placeholder="<?php echo _('Seleccione una fecha en el calendario'); ?>" <?php echo $formInput_autofocus_Fecha__formName ?>>
                    <span class="formInputErrorMsg <?php echo $formSpan_error_class_Fecha__formName ?>"><?php echo $formSpan_error_MSG_Fecha__formName ?></span>             
                </label>

                <fieldset class="<?php echo $formInput_error_class_Newsletter ?>">
                    <legend class="labelName"><?php echo _('&iquest;Desea recibir el bolet&iacute;n de noticias?'); ?></legend>

                    <label for="radioSi__formName" class="radio prn pll mbn">
                        <input type="radio" name="newsletter__formName" id="radioSi__formName" value="<?php echo _('Si'); ?>" class="radio floatLeft mrs" <?php echo $formInput_autofocus_Newsletter__formName ?>>
                        <span><?php echo _('Newsletter S&iacute;'); ?></span>
                    </label>

                    <label for="radioNo__formName" class="radio prn pll mbn">
                        <input type="radio" name="newsletter__formName" id="radioNo__formName" value="<?php echo _('No'); ?>" class="radio floatLeft mrs">
                        <span><?php echo _('Newsletter No'); ?></span>
                    </label>

                    <label for="radioNoSe__formName" class="radio pan mbn">
                        <input type="radio" name="newsletter__formName" id="radioNoSe" value="<?php echo _('No Sé'); ?>" class="radio floatLeft mrs">
                        <span><?php echo _('Newsletter No S&eacute;'); ?></span>
                    </label>
                </fieldset>

                <label for="preciotilde__formName">
                    <?php echo _('Prefiero charlar el precio personalmente'); ?>
                    <input type="checkbox" name="preciotilde__formName" id="preciotilde__formName" class="check preciotilde" value="Si">
                </label>

                <label for="browsersInput__formName">
                    <?php echo _('Choose a browser from this list:'); ?>
                    <input type="text" list="browsersList" name="myBrowser__formName" id="browsersInput">
                    <datalist id="browsersList">
                        <option value="Chrome">
                        <option value="Firefox">
                        <option value="Internet Explorer">
                        <option value="Opera">
                        <option value="Safari">
                        <option value="Microsoft Edge">
                    </datalist>
                </label>

                <label for="asunto__formName">
                    <span class="labelName"><?php echo _('Asunto'); ?></span>
                    <input type="text" name="asunto__formName" id="asunto__formName" class="asunto <?php echo $formInput_error_class_Asunto__formName ?>" value="<?php echo $_POST['asunto__formName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $formInput_autofocus_Asunto__formName ?>>
                    <span class="formInputErrorMsg <?php echo $formSpan_error_class_Asunto__formName ?>"><?php echo $formSpan_error_MSG_Asunto__formName ?></span>               
                </label>

                <label for="mensaje__formName">
                    <span class="labelName"><?php echo _('Mensaje'); ?></span>
                    <textarea name="mensaje__formName" id="mensaje__formName" class="mensaje" placeholder="<?php echo _('Escriba aqu&iacute; su mensaje') ?>"><?php echo $_POST['mensaje__formName']; ?></textarea>
                </label>

                // Mensaje con validación
                <label for="mensaje__formName">
                    <span class="labelName"><?php echo _('Detalle del servicio que desea contratar'); ?></span>
                    <textarea name="mensaje__formName" id="mensaje__formName" class="mensaje <?php echo $formInput_error_class_Mensaje__formName ?>" placeholder="<?php echo _('Escriba aqu&iacute; su mensaje') ?>" <?php echo $formInput_autofocus_Mensaje__formName ?>><?php echo $_POST['mensaje__formName']; ?></textarea>
                    <span class="formInputErrorMsg <?php echo $formSpan_error_class_Mensaje__formName ?>"><?php echo $formSpan_error_MSG_Mensaje__formName ?></span>        
                </label>

                <input type="submit" value="<?php echo _('Enviar'); ?>" name="enviarForm__formName" id="enviar__formName" class="enviar mha upperCaseBT">
            </form>
        </div>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/footer.inc.php'); ?>
</body>
</html>