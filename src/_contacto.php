<?php
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/var/__main.var.inc.php');
    
    $page_int                       = 1;
//  $section_hasForm                = 1;
    $section_hasMandatoryMsg_act    = 0;
    
    $nav_pageCurrent    = 0;
    
    $site_title         = "Contacto | ". $site_name_title;
//  $site_title_GB      = "Contact | ". $site_name_title;
    
    $site_desc          = $site_desc_global;
//  $site_desc_GB       = $site_desc_global_GB;
    
    $openGraph_title    = $openGraph_title_global;
//  $openGraph_title_GB = $openGraph_title_global_GB;
    $openGraph_desc     = $openGraph_desc_global;
//  $openGraph_desc_GB  = $openGraph_desc_global_GB;
//  $openGraph_url_img  = $url_global .'/nuevo'; 
    $openGraph_url_img  = $url_global;
    $openGraph_siteName = $openGraph_title;
    
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/gettext.languageCheck.inc.php');   
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/head.inc.php');
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/gettext.locale.inc.php');
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/var/gettext.var.inc.php');
?>
<link href="/nuevo/_source/css/datepicker.css" rel="stylesheet">
<script src="/nuevo/_source/js/jquery-ui-datepicker.js"></script>
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/header.inc.php'); ?>
    <div id="main" class="page_int page_contacto" role="main">
        <div class="mobileForm tabletForm">
            <form method="post" class="mha" id="formID">
                <?php
                    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/form_send.inc.php');
                    echo $formStatus_MSG__formName;
                    echo $formStatus_MSG_pop__formName;

                    if($section_hasMandatoryMsg_act == 1) {
                        echo '<div class="mandatoryMsg '.$formMandatory_MSG_classes__formName.'">'.$formMandatory_MSG__formName.'</div>';
                    }                
                ?>

                <label for="data_nombre__formName">
                    <span class="form_label_name"><?php echo _('Nombre'); ?></span>
                    <input type="text" name="data_nombre__formName" id="data_nombre__formName" class="nombre <?php echo $formInput_error_class_data_nombre__formName ?>" value="<?php echo $_POST['data_nombre__formName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $formInput_autofocus_data_nombre__formName ?>>
                    <span class="form_input_msg_error <?php echo $formSpan_error_class_data_nombre__formName ?>"><?php echo $formSpan_error_MSG_data_nombre__formName ?></span>
                </label>

                <label for="data_apellido__formName">
                    <span class="form_label_name"><?php echo _('Apellido'); ?></span>
                    <input type="text" name="data_apellido__formName" id="data_apellido__formName" class="apellido <?php echo $formInput_error_class_data_apellido__formName ?>" value="<?php echo $_POST['data_apellido__formName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $formInput_autofocus_data_apellido__formName ?>>
                    <span class="form_input_msg_error <?php echo $formSpan_error_class_data_apellido__formName ?>"><?php echo $formSpan_error_MSG_data_apellido__formName ?></span>
                </label>

                <label for="data_nombreAp__formName">
                    <span class="form_label_name"><?php echo _('Nombre y Apellido'); ?></span>
                    <input type="text" name="data_nombreAp__formName" id="data_nombreAp__formName" class="nombreApe <?php echo $formInput_error_class_data_nombreAp__formName ?>" value="<?php echo $_POST['data_nombreAp__formName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $formInput_autofocus_data_nombreAp__formName ?>>
                    <span class="form_input_msg_error <?php echo $formSpan_error_class_data_nombreAp__formName ?>"><?php echo $formSpan_error_MSG_data_nombreAp__formName ?></span>
                </label>

                <label for="data_nombreCo__formName">
                    <span class="form_label_name"><?php echo _('Nombre Completo'); ?></span>
                    <input type="text" name="data_nombreCo__formName" id="data_nombreCo__formName" class="nombreComp <?php echo $formInput_error_class_data_nombreCo__formName ?>" value="<?php echo $_POST['data_nombreCo__formName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $formInput_autofocus_data_nombreCo__formName ?>>
                    <span class="form_input_msg_error <?php echo $formSpan_error_class_data_nombreCo__formName ?>"><?php echo $formSpan_error_MSG_data_nombreCo__formName ?></span>
                </label>

                <label for="data_username__formName">
                    <span class="form_label_name"><?php echo _('Nombre de usuario'); ?></span>
                    <input type="text" name="data_username__formName" id="data_username__formName" class="username <?php echo $formInput_error_class_data_username__formName ?>" value="<?php echo $_POST['data_username__formName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $formInput_autofocus_data_username__formName ?>>
                    <span class="form_input_msg_error <?php echo $formSpan_error_class_data_username__formName ?>"><?php echo $formSpan_error_MSG_data_username__formName ?></span>
                </label>

                <label for="data_genero__formName">
                    <span class="form_label_name"><?php echo _('Género'); ?></span>
                    <select name="data_genero__formName" id="data_genero__formName" class="genero" >
                        <option value="<?php echo $_POST['data_genero__formName']; ?>" selected><?php echo _('Seleccione una opci&oacute;n'); ?></option>
                        <option value="Masculino"><?php echo _('Masculino'); ?></option>
                        <option value="Femenino"><?php echo _('Femenino'); ?></option>
                    </select>
                </label>

                <label for="data_genero__formName">
                    <span class="form_label_name"><?php echo _('Género'); ?></span>
                    <input type="text" name="data_genero__formName" id="data_genero__formName" class="genero <?php echo $formInput_error_class_data_genero__formName ?>" value="<?php echo $_POST['data_genero__formName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $formInput_autofocus_data_genero__formName ?>>
                    <span class="form_input_msg_error <?php echo $formSpan_error_class_data_genero__formName ?>"><?php echo $formSpan_error_MSG_data_genero__formName ?></span>
                </label>

                <label for="data_genero__formName">
                    <span class="form_label_name"><?php echo _('Género'); ?></span>                    
                    <input type="text" list="genero_listaTotal" name="data_genero__formName">
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
                    <span class="form_msg_sugg">La lista incluye sugerencias, pero podés completar libremente el campo.</span>
                </label>  

                <label for="data_dni__formName">
                    <span class="form_label_name"><?php echo _('DNI'); ?></span>
                    <input type="text" inputmode="numeric" name="data_dni__formName" id="data_dni__formName" class="dni <?php echo $formInput_error_class_data_dni__formName ?>" value="<?php echo $_POST['data_dni__formName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $formInput_autofocus_data_dni__formName ?>>
                    <span class="form_input_msg_error <?php echo $formSpan_error_class_data_dni__formName ?>"><?php echo $formSpan_error_MSG_data_dni__formName ?></span>
                </label>

                <label for="data_password__formName">
                    <span class="form_label_name"><?php echo _('Contraseña'); ?></span>
                    <input type="password" name="contrasena__formName" id="contrasena__formName" class="contrasena <?php echo $formInput_error_class_data_password__formName ?>" value="<?php echo $_POST['contrasena__formName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $formInput_autofocus_data_password__formName ?>>
                    <span class="form_input_msg_error <?php echo $formSpan_error_class_data_password__formName ?>"><?php echo $formSpan_error_MSG_data_password__formName ?></span>        
                    <span class="form_msg_sugg">Te enviaremos un correo a esta casilla para confirmar tu registro.</span>
                </label>

                <label for="data_direccion__formName">
                    <span class="form_label_name"><?php echo _('Direcci&oacute;n'); ?></span>
                    <input type="text" name="data_direccion__formName" id="data_direccion__formName" class="direccion <?php echo $formInput_error_class_data_direccion__formName ?>" value="<?php echo $_POST['data_direccion__formName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $formInput_autofocus_data_direccion__formName ?>>
                    <span class="form_input_msg_error <?php echo $formSpan_error_class_data_direccion__formName ?>"><?php echo $formSpan_error_MSG_data_direccion__formName ?></span>
                </label>

                <label for="data_domicilio__formName">
                    <span class="form_label_name"><?php echo _('Domicilio'); ?></span>
                    <input type="text" name="data_domicilio__formName" id="data_domicilio__formName" class="domicilio <?php echo $formInput_error_class_data_domicilio__formName ?>" value="<?php echo $_POST['data_domicilio__formName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $formInput_autofocus_data_domicilio__formName ?>>
                    <span class="form_input_msg_error <?php echo $formSpan_error_class_data_domicilio__formName ?>"><?php echo $formSpan_error_MSG_data_domicilio__formName ?></span>
                </label>

                <label for="data_localidad__formName">
                    <span class="form_label_name"><?php echo _('Localidad'); ?></span>
                    <input type="text" name="data_localidad__formName" id="data_localidad__formName" class="localidad <?php echo $formInput_error_class_data_localidad__formName ?>" value="<?php echo $_POST['data_localidad__formName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $formInput_autofocus_data_localidad__formName ?>>
                    <span class="form_input_msg_error <?php echo $formSpan_error_class_data_localidad__formName ?>"><?php echo $formSpan_error_MSG_data_localidad__formName ?></span>
                </label>

                <label for="data_codigoPostal__formName">
                    <span class="form_label_name"><?php echo _('C&oacute;digo postal'); ?></span>
                    <input type="text" name="data_codigoPostal__formName" id="data_codigoPostal__formName" class="codigopostal <?php echo $formInput_error_class_data_codigoPostal__formName ?>" value="<?php echo $_POST['data_codigoPostal__formName']; ?>" placeholder="<?php echo _('Ej.:'); ?> B1846DWF, 1832" <?php echo $formInput_autofocus_data_codigoPostal__formName ?>>
                    <span class="form_input_msg_error <?php echo $formSpan_error_class_data_codigoPostal__formName ?>"><?php echo $formSpan_error_MSG_data_codigoPostal__formName ?></span>
                </label>

                <label for="data_provincia__formName">
                    <span class="form_label_name"><?php echo _('Provincia'); ?></span>
                    <input type="text" name="data_provincia__formName" id="data_provincia__formName" class="provincia <?php echo $formInput_error_class_data_provincia__formName ?>" value="<?php echo $_POST['data_provincia__formName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $formInput_autofocus_data_provincia__formName ?>>
                    <span class="form_input_msg_error <?php echo $formSpan_error_class_data_provincia__formName ?>"><?php echo $formSpan_error_MSG_data_provincia__formName ?></span>
                </label>  

                <label for="data_provincia__formName">
                    <span class="form_label_name"><?php echo _('Provincia'); ?></span>
                    <select id="data_provincia__formName" name="data_provincia__formName" class="provincia <?php echo $formInput_error_class_data_provincia__formName ?>">
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
                    <span class="form_input_msg_error <?php echo $formSpan_error_class_data_provincia__formName ?>"><?php echo $formSpan_error_MSG_data_provincia__formName ?></span>
                </label>

                <label for="data_comoQueres__formName">
                    <span class="form_label_name"><?php echo _('¿Cómo querés que te contactemos?'); ?></span>
                    <select id="data_comoQueres__formName" name="data_comoQueres__formName" class="comoQueres <?php echo $formInput_error_class_data_comoQueres__formName ?>">
                        <option value="<?php echo $_POST['data_comoQueres']; ?>" selected><?php echo $_POST['data_comoQueres']; ?></option>

                        <option value="<?php echo $_POST['data_comoQueres']; ?>" selected><?php if(isset($_POST['data_comoQueres'])) { echo $_POST['data_comoQueres']; } else { echo _('Correo electr&oacute;nico, WhatsAspp o Instagram'); } ?></option>
                        <option value="Correo"><?php echo _('Correo electr&oacute;nico'); ?></option>
                        <option value="WhatsApp"><?php echo _('WhatsApp'); ?></option>
                        <option value="Instagram"><?php echo _('Instagram'); ?></option>
                    </select>
                    <span class="form_input_msg_error <?php echo $formSpan_error_class_data_comoQueres__formName ?>"><?php echo $formSpan_error_MSG_data_comoQueres__formName ?></span>
                </label>

                <label for="data_GENERICSELECT__formName">
                    <span class="form_label_name"><?php echo _('GENERICSELECT'); ?></span>
                    <select id="data_GENERICSELECT__formName" name="data_GENERICSELECT__formName" class="GENERICSELECT <?php echo $formInput_error_class_data_GENERICSELECT__formName ?>">
                        <option value="<?php echo $_POST['data_GENERICSELECT']; ?>" selected><?php echo $_POST['data_GENERICSELECT']; ?></option>

                        <option value="<?php echo $_POST['data_GENERICSELECT']; ?>" selected><?php if(isset($_POST['data_GENERICSELECT'])) { echo $_POST['data_GENERICSELECT']; } else { echo _('Selecciona una opci&oacute;n por favor'); } ?></option>
                        <option value="AAAAAAAAAAAAA"><?php echo _('AAAAAAAAAAAAA'); ?></option>
                        <option value="BBBBBBBBBBBBB"><?php echo _('BBBBBBBBBBBBB'); ?></option>
                        <option value="CCCCCCCCCCCCC"><?php echo _('CCCCCCCCCCCCC'); ?></option>
                    </select>
                    <span class="form_input_msg_error <?php echo $formSpan_error_class_data_GENERICSELECT__formName ?>"><?php echo $formSpan_error_MSG_data_GENERICSELECT__formName ?></span>
                </label>

                <label for="data_pais__formName">
                    <span class="form_label_name"><?php echo _('Pa&iacute;s'); ?></span>
                    <input type="text" name="data_pais__formName" id="data_pais__formName" class="pais <?php echo $formInput_error_class_data_pais__formName ?>" value="<?php echo $_POST['data_pais__formName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $formInput_autofocus_data_pais__formName ?>>
                    <span class="form_input_msg_error <?php echo $formSpan_error_class_data_pais__formName ?>"><?php echo $formSpan_error_MSG_data_pais__formName ?></span>
                </label>

                <label for="data_celular__formName">
                    <span class="form_label_name"><?php echo _('Celular'); ?></span>
                    <input type="tel" name="data_celular__formName" id="data_celular__formName" class="telefono <?php echo $formInput_error_class_data_celular__formName ?>" value="<?php echo $_POST['data_celular__formName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $formInput_autofocus_data_celular__formName ?>>
                    <span class="form_input_msg_error <?php echo $formSpan_error_class_data_celular__formName ?>"><?php echo $formSpan_error_MSG_data_celular__formName ?></span>
                </label>

                <label for="data_telefono__formName">
                    <span class="form_label_name"><?php echo _('Tel&eacute;fono'); ?></span>
                    <input type="tel" name="data_telefono__formName" id="data_telefono__formName" class="telefono <?php echo $formInput_error_class_data_telefono__formName ?>" value="<?php echo $_POST['data_telefono__formName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $formInput_autofocus_data_telefono__formName ?>>
                    <span class="form_input_msg_error <?php echo $formSpan_error_class_data_telefono__formName ?>"><?php echo $formSpan_error_MSG_data_telefono__formName ?></span>
                </label>

                <label for="data_email__formName">
                    <span class="form_label_name"><?php echo _('Correo electr&oacute;nico'); ?></span>
                    <input type="email" name="data_email__formName" id="data_email__formName" class="email <?php echo $formInput_error_class_data_email__formName ?>" value="<?php echo $_POST['data_email__formName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $formInput_autofocus_data_email__formName ?>>
                    <span class="form_input_msg_error <?php echo $formSpan_error_class_data_email__formName ?>"><?php echo $formSpan_error_MSG_data_email__formName ?></span>  
                    <span class="form_msg_sugg">Te enviaremos un correo a esta casilla para confirmar tu registro.</span>
                </label> 

                <label for="data_email__formName">
                    <span class="form_label_name"><?php echo _('E-mail'); ?></span>
                    <input type="email" name="data_email__formName" id="data_email__formName" class="email <?php echo $formInput_error_class_data_email__formName ?>" value="<?php echo $_POST['data_email__formName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $formInput_autofocus_data_email__formName ?>>
                    <span class="form_input_msg_error <?php echo $formSpan_error_class_data_email__formName ?>"><?php echo $formSpan_error_MSG_data_email__formName ?></span>  
                    <span class="form_msg_sugg">Te enviaremos un correo a esta casilla para confirmar tu registro.</span>
                </label>               

                <label for="data_webSite__formName">
                    <span class="form_label_name"><?php echo _('Sitio web'); ?></span>
                    <input type="url" name="data_webSite__formName" id="data_webSite__formName" class="website <?php echo $formInput_error_class_data_webSite__formName ?>" value="<?php echo $_POST['data_webSite__formName']; ?>" placeholder="<?php echo _('Debe comenzar con http://www'); ?>" <?php echo $formInput_autofocus_data_webSite__formName ?>>
                    <span class="form_input_msg_error <?php echo $formSpan_error_class_data_webSite__formName ?>"><?php echo $formSpan_error_MSG_data_webSite__formName ?></span>
                </label>              

                <label for="data_webSite__formName">
                    <span class="form_label_name"><?php echo _('Sitio web'); ?></span>
                    <input type="text" name="data_webSite__formName" id="data_webSite__formName" class="website <?php echo $formInput_error_class_data_webSite__formName ?>" value="<?php echo $_POST['data_webSite__formName']; ?>" placeholder="" <?php echo $formInput_autofocus_data_webSite__formName ?>>
                    <span class="form_input_msg_error <?php echo $formSpan_error_class_data_webSite__formName ?>"><?php echo $formSpan_error_MSG_data_webSite__formName ?></span>
                </label>          

                <label for="data_facebook__formName">
                    <span class="form_label_name"><?php echo _('Perfil de Facebook'); ?></span>
                    <input type="url" name="data_facebook__formName" id="data_facebook__formName" class="facebook <?php echo $formInput_error_class_data_facebook__formName ?>" value="<?php echo $_POST['data_facebook__formName']; ?>" placeholder="<?php echo _('Debe comenzar con http://www.facebook.com/'); ?>" <?php echo $formInput_autofocus_data_facebook__formName ?>>
                    <span class="form_input_msg_error <?php echo $formSpan_error_class_data_facebook__formName ?>"><?php echo $formSpan_error_MSG_data_facebook__formName ?></span>
                </label>       

                <label for="data_instagram__formName">
                    <span class="form_label_name"><?php echo _('Instagram'); ?></span>
                    <input type="text" name="data_instagram__formName" id="data_instagram__formName" class="instagram lowerCase <?php echo $formInput_error_class_data_instagram__formName ?>" value="<?php echo $_POST['data_instagram__formName']; ?>" placeholder="<?php echo _('Sólo escribí tu usuario'); ?>" <?php echo $formInput_autofocus_data_instagram__formName ?>>
                    <span class="form_input_msg_error <?php echo $formSpan_error_class_data_instagram__formName ?>"><?php echo $formSpan_error_MSG_data_instagram__formName ?></span>        
                    <span class="form_msg_sugg">Te enviaremos un correo a esta casilla para confirmar tu registro.</span>
                </label>

                <label for="data_empresa__formName">
                    <span class="form_label_name"><?php echo _('Empresa'); ?></span>
                    <input type="text" name="data_empresa__formName" id="data_empresa__formName" class="empresa <?php echo $formInput_error_class_data_empresa__formName ?>" value="<?php echo $_POST['data_empresa__formName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $formInput_autofocus_data_empresa__formName ?>>
                    <span class="form_input_msg_error <?php echo $formSpan_error_class_data_empresa__formName ?>"><?php echo $formSpan_error_MSG_data_empresa__formName ?></span>
                </label>

                <label for="data_razonSocial__formName">
                    <span class="form_label_name"><?php echo _('Raz&oacute;n Social'); ?></span>
                    <input type="text" name="data_razonSocial__formName" id="data_razonSocial__formName" class="razonSocial <?php echo $formInput_error_class_data_razonSocial__formName ?>" value="<?php echo $_POST['data_razonSocial__formName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $formInput_autofocus_data_razonSocial__formName ?>>
                    <span class="form_input_msg_error <?php echo $formSpan_error_class_data_razonSocial__formName ?>"><?php echo $formSpan_error_MSG_data_razonSocial__formName ?></span>
                </label>

                <label for="data_rubro__formName">
                    <span class="form_label_name"><?php echo _('Rubro'); ?></span>
                    <input type="text" name="data_rubro__formName" id="data_rubro__formName" class="rubro <?php echo $formInput_error_class_data_rubro__formName ?>" value="<?php echo $_POST['data_rubro__formName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $formInput_autofocus_data_rubro__formName ?>>
                    <span class="form_input_msg_error <?php echo $formSpan_error_class_data_rubro__formName ?>"><?php echo $formSpan_error_MSG_data_rubro__formName ?></span>
                </label>

                <label for="data_cargo__formName">
                    <span class="form_label_name"><?php echo _('Cargo'); ?></span>
                    <input type="text" name="data_cargo__formName" id="data_cargo__formName" class="cargo <?php echo $formInput_error_class_data_cargo__formName ?>" value="<?php echo $_POST['data_cargo__formName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $formInput_autofocus_data_cargo__formName ?>>
                    <span class="form_input_msg_error <?php echo $formSpan_error_class_data_cargo__formName ?>"><?php echo $formSpan_error_MSG_data_cargo__formName ?></span>
                </label>

                <label for="data_cantidad__formName">
                    <span class="form_label_name"><?php echo _('Cantidad'); ?></span>
                    <input type="text" inputmode="numeric" name="data_cantidad__formName" id="data_cantidad__formName" class="cantidad <?php echo $formInput_error_class_data_cantidad__formName ?>" value="<?php echo $_POST['data_cantidad__formName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $formInput_autofocus_data_cantidad__formName ?>>
                    <span class="form_input_msg_error <?php echo $formSpan_error_class_data_cantidad__formName ?>"><?php echo $formSpan_error_MSG_data_cantidad__formName ?></span>
                </label>

                <label for="data_fecha__formName">
                    <span class="form_label_name"><?php echo _('Fecha'); ?></span>
                    <input type="date" name="data_fecha__formName" id="data_fecha__formName" class="fecha <?php echo $formInput_error_class_data_fecha__formName ?>" value="<?php echo $_POST['data_fecha__formName']; ?>" placeholder="<?php echo _('Seleccione una fecha en el calendario'); ?>" <?php echo $formInput_autofocus_data_fecha__formName ?>>
                    <span class="form_input_msg_error <?php echo $formSpan_error_class_data_fecha__formName ?>"><?php echo $formSpan_error_MSG_data_fecha__formName ?></span>
                </label>

                <fieldset class="<?php echo $formInput_error_class_data_newsletter__formName ?>">
                    <legend class="form_label_name"><?php echo _('&iquest;Desea recibir el bolet&iacute;n de noticias?'); ?></legend>

                    <label for="radioSi__formName" class="radio prn pll mbn">
                        <input type="radio" name="data_newsletter__formName" id="radioSi__formName" value="<?php echo _('Si'); ?>" class="radio floatLeft mrs" <?php echo $formInput_autofocus_data_newsletter__formName ?>>
                        <span><?php echo _('Newsletter S&iacute;'); ?></span>
                    </label>

                    <label for="radioNo__formName" class="radio prn pll mbn">
                        <input type="radio" name="data_newsletter__formName" id="radioNo__formName" value="<?php echo _('No'); ?>" class="radio floatLeft mrs">
                        <span><?php echo _('Newsletter No'); ?></span>
                    </label>

                    <label for="radioNoSe__formName" class="radio pan mbn">
                        <input type="radio" name="data_newsletter__formName" id="radioNoSe" value="<?php echo _('No Se'); ?>" class="radio floatLeft mrs">
                        <span><?php echo _('Newsletter No S&eacute;'); ?></span>
                    </label>
                </fieldset>

                <label for="data_precioTilde__formName">
                    <?php echo _('Prefiero charlar el precio personalmente'); ?>
                    <input type="checkbox" name="data_precioTilde__formName" id="data_precioTilde__formName" class="check preciotilde" value="Si">
                </label>

                <label for="data_browser__formName">
                    <?php echo _('Choose a browser from this list:'); ?>
                    <input type="text" list="browser_dataList" name="data_browser__formName" id="data_browser__formName">
                    <datalist id="browser_dataList">
                        <option value="Chrome">
                        <option value="Firefox">
                        <option value="Internet Explorer">
                        <option value="Opera">
                        <option value="Safari">
                        <option value="Microsoft Edge">
                    </datalist>
                </label>

                <label for="data_asunto__formName">
                    <span class="form_label_name"><?php echo _('Asunto'); ?></span>
                    <input type="text" name="data_asunto__formName" id="data_asunto__formName" class="asunto <?php echo $formInput_error_class_data_asunto__formName ?>" value="<?php echo $_POST['data_asunto__formName']; ?>" placeholder="<?php echo _(''); ?>" <?php echo $formInput_autofocus_data_asunto__formName ?>>
                    <span class="form_input_msg_error <?php echo $formSpan_error_class_data_asunto__formName ?>"><?php echo $formSpan_error_MSG_data_asunto__formName ?></span>
                </label> 
                
                <label for="data_area__formName">
                    <span class="form_label_name"><?php echo _('&Aacute;rea a contactar'); ?></span>
                    <select id="data_area__formName" name="data_area__formName" class="area <?php echo $formInput_error_class_data_area__formName ?>">
                        <option value="<?php echo $_POST['data_area__formName']; ?>" selected><?php if(isset($_POST['data_area__formName'])) { echo $_POST['data_area__formName']; } else { echo _('Seleccione el &aacute;rea con la que quiere contactarse'); } ?></option>
                        <option value="<?php echo $site_email_address_EMAILA ?>"><?php echo _('aaaa'); ?> - <?php echo $site_email_address_EMAILA ?></option>
                        <option value="<?php echo $site_email_address_EMAILB ?>"><?php echo _('bbbb'); ?> - <?php echo $site_email_address_EMAILB ?></option>
                    </select>
                    <span class="form_input_msg_error <?php echo $formSpan_error_class_data_area__formName ?>"><?php echo $formSpan_error_MSG_data_area__formName ?></span>  
                </label>

                // Mensaje con validaci&oacute;n
                <label for="data_mensaje__formName">
                    <span class="form_label_name"><?php echo _('Detalle del servicio que desea contratar'); ?></span>
                    <textarea name="data_mensaje__formName" id="data_mensaje__formName" class="mensaje <?php echo $formInput_error_class_data_mensaje__formName ?>" placeholder="<?php echo _('Escriba aqu&iacute; su mensaje') ?>" <?php echo $formInput_autofocus_data_mensaje__formName ?>><?php echo $_POST['data_mensaje__formName']; ?></textarea>
                    <span class="form_input_msg_error <?php echo $formSpan_error_class_data_mensaje__formName ?>"><?php echo $formSpan_error_MSG_data_mensaje__formName ?></span>
                </label>

                <label for="data_mensaje__formName">
                    <span class="form_label_name"><?php echo _('Mensaje'); ?></span>
                    <textarea name="data_mensaje__formName" id="data_mensaje__formName" class="mensaje" placeholder="<?php echo _('Escriba aqu&iacute; su mensaje') ?>"><?php echo $_POST['data_mensaje__formName']; ?></textarea>
                </label>

                <input type="submit" value="<?php echo _('Enviar'); ?>" name="enviarForm__formName" id="enviar__formName" class="enviar mha upperCaseBT">
            </form>
        </div>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/footer.inc.php'); ?>
</body>
</html>