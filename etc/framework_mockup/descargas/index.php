<?php
    $page_test = 1;
    $page_int = 1;
    $nav_pageCurrent= 0;
    $site_title = "Descargas  | GV";
    $site_desc = "";
    include($_SERVER['DOCUMENT_ROOT'] . '/framework/common/head.inc.php');
?>
<link href="/framework/css/main.css" rel="stylesheet">
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/framework/common/header.inc.php'); ?>
    <div id="main" class="descargas container clearfix" role="main">
        <section class="bgWhite">
            <h1>Downloads</h1>
            <div class="hide">
                <p class="bull">Acceso Autorizado</p>
                <p>A través de esta sección podrá acceder a la página de acceso autorizado.</p>
                <p>Por favor ingrese la contraseña correspondiente.</p>
                <form method="POST" name="contactform" action="" class="clearfix">
                    <label for="pass">Contraseña:</label>
                    <input type="password" class="" id="pass" name="pass">
                    <input type="submit" id="enviar" name="enviar" class="enviar upperCase" value="Entrar">
                </form>
            </div>
            <?php
                if(isset($_POST['enviar'])){
                    $pass = $_POST['pass'];
                    if($pass == logos){
                        include("logos.php");
                    }elseif($pass == novias){
                        include("novias.php");
                    }elseif($pass == propuestas){
                        include("propuestas.php");
                    }else{
                        $result = '<p>Contraseña incorrecta, ingrésela nuevamente por favor.</p>';
                    }
                }
            ?>
            <div class="resultado bold blue"><?php echo $result; ?></div>
        </section>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/framework/common/footer.inc.php'); ?>
</body>
</html>