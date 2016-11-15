<?php
    $test = 1;
    $int = 1;
    $navSelected= 0;
    $title = "Parallax Multilayer | GV";
    $mdesc = "";
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/head.inc.php');
?>
<link href="/nuevo/_test/css/main.css" rel="stylesheet">
<link href="/nuevo/_test/css/parallaxScroll.css" rel="stylesheet">
</head>
<body>
    <div id="main" role="main" class="paContainer">
        <div class="paGroup uno pRel">
          <div class="paLayer pAbs paDeep">
              <p>Group 01 Layer Deep</p>
          </div>
          <div class="paLayer pAbs paBehind">
              <p>Group 01 Layer Behind</p>
          </div>
          <div class="paLayer pAbs paBack">
              <p>Group 01 Layer Back</p>
          </div>
          <div class="paLayer pAbs paBase">
              <p>Group 01 Layer Base</p>
          </div>
        </div>
        <div class="paGroup dos pRel">
          <div class="paLayer pAbs paDeep">
              <p>Group 02 Layer Deep</p>
          </div>
          <div class="paLayer pAbs paBehind">
              <p>Group 02 Layer Behind</p>
          </div>
          <div class="paLayer pAbs paBack">
              <p>Group 02 Layer Back</p>
          </div>
          <div class="paLayer pAbs paBase">
              <p>Group 02 Layer Base</p>
          </div>
        </div>
        <div class="paGroup tre pRel">
          <div class="paLayer pAbs paDeep">
              <p>Group 03 Layer Deep</p>
          </div>
          <div class="paLayer pAbs paBehind">
              <p>Group 03 Layer Behind</p>
          </div>
          <div class="paLayer pAbs paBack">
              <p>Group 03 Layer Back</p>
          </div>
          <div class="paLayer pAbs paBase">
              <p>Group 03 Layer Base</p>
          </div>
        </div>
        <div class="paGroup cua pRel">
          <div class="paLayer pAbs paDeep">
              <p>Group 04 Layer Deep</p>
          </div>
          <div class="paLayer pAbs paBehind">
              <p>Group 04 Layer Behind</p>
          </div>
          <div class="paLayer pAbs paBack">
              <p>Group 04 Layer Back</p>
          </div>
          <div class="paLayer pAbs paBase">
              <p>Group 04 Layer Base</p>
          </div>
        </div>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/footer.inc.php'); ?>
</body>
</html>