<?php
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/variables.inc.php');
    
    $int = 1;
    $copyright = 1;
    
    $title = "PáginaSinTítulo";
    //$titleGB = "UntitledPage";
    $mdesc = "";
    //$mdescGB = "";
    
    $navCurrent = 0;
    
    //Gettext variable, debe ir antes del head
    if(isset($l)) {
        $idiomaElegido = $_GET['l'];        
    } else {
        $idiomaElegido = 'es_AR';
    }        
    $idioma = $idiomaElegido;
    
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/head.inc.php');
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/gettext.inc.php');
?>
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/header.inc.php'); ?>
    <div id="main" class="copyright bgWhite" role="main">
        <section class="container">
            <h1 class="black alignCenter">Licencia</h1>
            <p class="nota black">El contenido de este sitio web se encuentra bajo la siguiente licencia:</p>
            <p class="lic black alignCenter">Atribución-NoComercial-SinDerivadas 4.0 Internacional (CC BY-NC-ND 4.0)</p>
            <p class="hDos bold black">Usted es libre de:</p>
            <p class="black"><span class="bold">Compartir</span> — copiar y redistribuir el material en cualquier medio o formato.</p>
            <p class="nota black">La licenciante no puede revocar estas libertades en tanto usted siga los términos de la licencia</p>
            <p class="hDos bold black">Bajo los siguientes términos:</p>
            <ul>
                <li><span class="bold">Atribución</span> Usted debe dar crédito de manera adecuada, brindar un enlace a la licencia, e indicar si se han realizado cambios. Puede hacerlo en cualquier forma razonable, pero no de forma tal que sugiera que usted o su uso tienen el apoyo de la licenciante. </li>
                <li><span class="bold">NoComercial</span> Usted no puede hacer uso del material con propósitos comerciales. </li>
                <li><span class="bold">SinDerivadas</span> Si remezcla, transforma o crea a partir de el material, no podrá distribuir el material modificado.</li>
            </ul>
            <ul class="mtl ptl">
                <li><a href="https://creativecommons.org/licenses/by-nc-nd/4.0/deed.es#" class="nota black">Ver Resumen</a></li>
                <li><a href="https://creativecommons.org/licenses/by-nc-nd/4.0/legalcode" class="nota black">Ver Liencia</a></li>
            </ul>
        </section>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/footer.inc.php'); ?>
</body>
</html>
