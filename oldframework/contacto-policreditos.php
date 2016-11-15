<?php
    $test = 1;
    $int = 1;
    $header="1";
    $contactanos="1";
    $title = "Contactanos | Policréditos";
    $mdesc = "";
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/head.inc.php');
?>
<link href="/nuevo/_test/css/main.css" rel="stylesheet">
<script type="text/javascript">
    function comprobar(){
        var mal=false; 

        numero=1;
        val_form = new Array();
        val_form[0]=4;
        //val_form[1]=1;
        //val_form[2]=5;

        for(a=0;a<numero;a++){
            if (document.formcontacto.elements[val_form[a]].value==""){
                document.formcontacto.elements[val_form[a]].style.backgroundColor="";mal=true;
            } else {
                document.formcontacto.elements[val_form[a]].style.backgroundColor="";
            } 
        } 
        if(mal){
            document.getElementById("reqFields").style.display="none";
            document.getElementById("noEmail").style.display="none";
            document.getElementById("reqMail").style.display="block";
            document.getElementById("contactanosEmail").className="alertaEmail";
            document.formcontacto.ema.focus();
        } else { 
            if (document.formcontacto.ema.value.indexOf('@') == -1) {
                //alert ('Debe cargar un email valido');
                document.getElementById("reqFields").style.display="none";
                document.getElementById("noEmail").style.display="block";
                document.getElementById("reqMail").style.display="none";
                document.getElementById("contactanosEmail").className="alertaEmail";
                document.formcontacto.ema.focus();
            } else {
                document.formcontacto.submit();
            }
        }
    } 
</script>
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/common/header.inc.php'); ?>
    <div id="main" class="container clearfix form contactanos conHeader conFooter" role="main">
        <?php $status = '<p class="status ini blue" id="reqFields">* Campos obligatorios.</p>'; ?>                  
        <h1 class="pAbs hDos blue mbn">Contactanos</h1>
        <ul class="unstyled comoContactanos floatLeft">
            <li class="a sprites blue">
                <span class="bold">Por teléfono</span> 
                <span class="x displayBlock">(011) 4292-4040 o 0800-666-7873</span>
            </li>
            <li class="b sprites blue">
                <a href="mailto:comercial@policreditos.com.ar">
                    <span class="bold">Por e-mail</span> 
                    <span class="x displayBlock">comercial@policreditos.com.ar</span>
                </a>
            </li>
            <li class="c sprites blue">
                <span class="bold">Personalmente</span> 
                <span class="x displayBlock">Gorriti 209.</span>
                <span class="x displayBlock">(1832) Lomas de Zamora. Pcia. De Bs. As.</span>
            </li>
            <li class="d sprites blue">
                <a href="http://policreditos.com.ar/donde-obtener-tarjeta_IX.php">
                    <span class="bold">En Comercios Adheridos</span> 
                    <span class="x displayBlock">Averiguá cuál</span>
                </a>
            </li>
        </ul>
        <form class="formContactanos floatLeft pRel" action="contacto-policreditos-gracias.php" method="post" name="formcontacto">
            <h2 class="sprites mbn bold blue">También podés enviarnos <span class="displayBlock">tu consulta:</span></h2>
            <?php echo $status; ?>
            <p class="status required displayNone" id="noEmail">Ingrese una dirección de correo válida, por favor.</p>
            <p class="status required displayNone" id="reqMail">Ingrese su correo electrónico, por favor.</p>
            <label for="contactanosNombre" class="displayBlock floatLeft pls blue">Nombre</label>
            <input type="text" id="contactanos" class="displayBlock floatLeft bg bas" name="nom">

            <label for="contactanosSexo" class="displayBlock floatLeft pls blue">Sexo</label>
            <select id="contactanosSexo" class="displayBlock FloatLeft bg bas" name="sex">
                <option value="" selected>Seleccione una opción</option>
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
            </select>
            <label for="contactanosDNI" class="displayBlock floatLeft pls blue">Documento</label>
            <input type="text" id="contactanosDNI" class="displayBlock floatLeft bg bas" name="dni">
            <label for="contactanosCP" class="displayBlock floatLeft pls blue">Código Postal</label>
            <input type="text" id="contactanosCP" class="displayBlock floatLeft bg bas" name="cop">
            <label for="contactanosEmail" class="displayBlock floatLeft pls blue">E-mail <span class="req">*</span></label>
            <input type="email" id="contactanosEmail" class="displayBlock floatLeft bg bas" name="ema">
            <label for="contactanosConsulta" class="displayBlock floatLeft pls blue">Consulta</label>
            <textarea id="contactanos" class="contactanosConsulta bg bas" name="con"></textarea>
            <input type="button" value="Consultar" onclick="comprobar();" id="enviar" name="enviar" class="enviar sprites ptn phn pbs ban white bold upperCase alignCenter">
        </form>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/footer.inc.php'); ?>
</body>
</html>
