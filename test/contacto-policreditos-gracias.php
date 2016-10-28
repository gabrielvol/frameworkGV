<?php
    if (isset($_POST['ema'])){
        $asunto = "Contacto de Policrédito de ".$_POST['nom'];
        $headers = "From: ".$_POST['nom']." <comercial>\r\n";
        $headers .= "Content-type: text/html\r\n";
        $headers .= "X-Mailer: PHP5\n";
        $headers .= 'MIME-Version: 1.0' . "\n"; 
        $texto = "<strong>Nombre:</strong> ".$_POST['nom']."<br />";
        $texto .= "<strong>Sexo:</strong> ".$_POST['sex']."<br />";
        $texto .= "<strong>DNI:</strong> ".$_POST['dni']."<br />";
        $texto .= "<strong>C&oacute;digo Postal:</strong> ".$_POST['cop']."<br />";
        $texto .= "<strong>Correo electr&oacute;nico:</strong> ".$_POST['ema']."<br />";
        $texto .= "<strong>Consulta:</strong> ".$_POST['con']."<br />";

        mail( "comercial@policreditos.com.ar", $asunto, $mensaje,  $cabeceras );
    }
    
    $snippets=1;
    $int=1;
    $header="1";
    $contactanos="1";
    $title="Contactanos | Policréditos";
    $mdesc="";
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/head.inc.php');
?>
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/common/header.inc.php'); ?>
    <div id="main" class="container clearfix form contactanos conHeader conFooter" role="main">
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
        <div class="formContactanos floatLeft pRel">
            <h2 class="sprites mbn bold blue">Los datos fueron enviados <span class="displayBlock">con éxito.</span></h2>
            <p class="breve mbn blue">A la brevedad será contactado, muchas gracias.</p>
        </div>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/footer.inc.php'); ?>
</body>
</html>
