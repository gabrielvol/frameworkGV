<?php
    $test = 1;
    $int = 1;
    $navSelected= 0;
    $title = "Parallax Scroll | GV";
    $mdesc = "";
    include($_SERVER['DOCUMENT_ROOT'] . '/framework/common/head.inc.php');
?>
<link href="/framework/css/main.css" rel="stylesheet">
<link href="/framework/css/parallax.css" rel="stylesheet">
<script type="text/javascript" src="/framework/etc/js/smoothScroll.js"></script>
</head>
<body>
    <header id="header" class="container parallaxHeader">
        <nav>
            <ul class="horizontal clearfix noFilter pRel">
                <li><a data-scroll href="#sectionUno" class="uno mrm white" id="aa">uno</a></li>
                <li><a data-scroll href="#sectionDos" class="dos mrm white" id="bb">dos</a></li>
                <li><a data-scroll href="#sectionTre" class="tre mrm white" id="cc">tres</a></li>
                <li><a data-scroll href="#sectionCua" class="cua mrm white" id="dd">cuatro</a></li>
                <li><a data-scroll href="#sectionCin" class="cin mrm white" id="ee">cinco</a></li>
            </ul>
        </nav>
    </header>
    <div id="main" class="parallax pRel" role="main">
        <section id="sectionUno" class="pRel">
            <div class="container">
                <p>Lorem ipsum ad his scripta blandit partiendo, eum fastidii accumsan euripidis in, eum liber hendrerit an. Qui ut wisi vocibus suscipiantur, quo dicit ridens inciderint id. Quo mundi lobortis reformidans eu, legimus senserit definiebas an eos. Eu sit tincidunt incorrupte definitionem, vis mutat affert percipit cu, eirmod consectetuer signiferumque eu per. In usu latine equidem dolores. Quo no falli viris intellegam, ut fugit veritus placerat per.</p>
            </div>
        </section>
        <section id="sectionDos">
            <div class="container">
                <p>Lorem ipsum ad his scripta blandit partiendo, eum fastidii accumsan euripidis in, eum liber hendrerit an. Qui ut wisi vocibus suscipiantur, quo dicit ridens inciderint id. Quo mundi lobortis reformidans eu, legimus senserit definiebas an eos. Eu sit tincidunt incorrupte definitionem, vis mutat affert percipit cu, eirmod consectetuer signiferumque eu per. In usu latine equidem dolores. Quo no falli viris intellegam, ut fugit veritus placerat per.</p>
            </div>
        </section>
        <section id="sectionTre">
            <div class="container">
                <p>Lorem ipsum ad his scripta blandit partiendo, eum fastidii accumsan euripidis in, eum liber hendrerit an. Qui ut wisi vocibus suscipiantur, quo dicit ridens inciderint id. Quo mundi lobortis reformidans eu, legimus senserit definiebas an eos. Eu sit tincidunt incorrupte definitionem, vis mutat affert percipit cu, eirmod consectetuer signiferumque eu per. In usu latine equidem dolores. Quo no falli viris intellegam, ut fugit veritus placerat per.</p>
            </div>
        </section>
        <section id="sectionCua">
            <div class="container">
                <p>Lorem ipsum ad his scripta blandit partiendo, eum fastidii accumsan euripidis in, eum liber hendrerit an. Qui ut wisi vocibus suscipiantur, quo dicit ridens inciderint id. Quo mundi lobortis reformidans eu, legimus senserit definiebas an eos. Eu sit tincidunt incorrupte definitionem, vis mutat affert percipit cu, eirmod consectetuer signiferumque eu per. In usu latine equidem dolores. Quo no falli viris intellegam, ut fugit veritus placerat per.</p>
            </div>
        </section>
        <section id="sectionCin">
            <div class="container">
                <p>Lorem ipsum ad his scripta blandit partiendo, eum fastidii accumsan euripidis in, eum liber hendrerit an. Qui ut wisi vocibus suscipiantur, quo dicit ridens inciderint id. Quo mundi lobortis reformidans eu, legimus senserit definiebas an eos. Eu sit tincidunt incorrupte definitionem, vis mutat affert percipit cu, eirmod consectetuer signiferumque eu per. In usu latine equidem dolores. Quo no falli viris intellegam, ut fugit veritus placerat per.</p>
            </div>
        </section>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/framework/common/footer.inc.php'); ?>
    <script type="text/javascript">
        smoothScroll.init({
            speed: 2000,
            easing: 'easeOutQuint'
        });
    </script>
</body>
</html>