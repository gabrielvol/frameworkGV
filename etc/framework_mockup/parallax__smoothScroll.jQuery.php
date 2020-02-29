<?php
    $page_test = 1;
    $page_int = 1;
    $nav_pageCurrent= 0;
    $site_title = "Parallax Scroll | GV";
    $site_desc = "";
    include($_SERVER['DOCUMENT_ROOT'] . '/framework/common/head.inc.php');
?>
<link href="/framework/css/main.css" rel="stylesheet">
<link href="/framework/css/smoothScrolljQuery.css" rel="stylesheet">
</head>
<body>
    <header id="header" class="container parallaxHeader">
        <nav>
            <ul class="horizontal clearfix noFilter pRel">
                <li><a href="#sectionUno" class="uno mrm white" id="aa">uno</a></li>
                <li><a href="#sectionDos" class="dos mrm white" id="bb">dos</a></li>
                <li><a href="#sectionTre" class="tre mrm white" id="cc">tres</a></li>
                <li><a href="#sectionCua" class="cua mrm white" id="dd">cuatro</a></li>
                <li><a href="#sectionCin" class="cin mrm white" id="ee">cinco</a></li>
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
    <script src="/framework/etc/js/src/smoothScroll.jQuery.js"></script>
</body>
</html>