<?php
    $test = 1;
    $int = 1;
    $navSelected= 0;
    $title = "Lazy Load | GV";
    $mdesc = "";
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/head.inc.php');
?>
<script type="text/javascript" src="/nuevo/oldframework/js/jquery.lazy.min.js"></script>
<link href="/nuevo/oldframework/css/main.css" rel="stylesheet">
<link href="/nuevo/oldframework/css/lazy.css" rel="stylesheet">
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/header.inc.php'); ?>
    <div id="main" class="container lazy" role="main">
        <ol>
            <li><img data-src="/nuevo/oldframework/img/lazyload/img01.jpg" class="displayBlock lazy" src="" /></li>
            <li><img data-src="/nuevo/oldframework/img/lazyload/img02.jpg" class="displayBlock lazy" src="" /></li>
            <li><img data-src="/nuevo/oldframework/img/lazyload/img03.jpg" class="displayBlock lazy" src="" /></li>
            <li><img data-src="/nuevo/oldframework/img/lazyload/img04.jpg" class="displayBlock lazy" src="" /></li>
            <li><img data-src="/nuevo/oldframework/img/lazyload/img05.jpg" class="displayBlock lazy" src="" /></li>
            <li><img data-src="/nuevo/oldframework/img/lazyload/img06.jpg" class="displayBlock lazy" src="" /></li>
            <li><img data-src="/nuevo/oldframework/img/lazyload/img07.jpg" class="displayBlock lazy" src="" /></li>
            <li><img data-src="/nuevo/oldframework/img/lazyload/img08.jpg" class="displayBlock lazy" src="" /></li>
            <li><img data-src="/nuevo/oldframework/img/lazyload/img09.jpg" class="displayBlock lazy" src="" /></li>
            <li><img data-src="/nuevo/oldframework/img/lazyload/img10.jpg" class="displayBlock lazy" src="" /></li>
            <li><img data-src="/nuevo/oldframework/img/lazyload/img11.jpg" class="displayBlock lazy" src="" /></li>
            <li><img data-src="/nuevo/oldframework/img/lazyload/img12.jpg" class="displayBlock lazy" src="" /></li>
            <li><img data-src="/nuevo/oldframework/img/lazyload/img13.jpg" class="displayBlock lazy" src="" /></li>
            <li><img data-src="/nuevo/oldframework/img/lazyload/img14.jpg" class="displayBlock lazy" src="" /></li>
            <li><img data-src="/nuevo/oldframework/img/lazyload/img15.jpg" class="displayBlock lazy" src="" /></li>
            <li><img data-src="/nuevo/oldframework/img/lazyload/img16.jpg" class="displayBlock lazy" src="" /></li>
            <li><img data-src="/nuevo/oldframework/img/lazyload/img17.jpg" class="displayBlock lazy" src="" /></li>
            <li><img data-src="/nuevo/oldframework/img/lazyload/img18.jpg" class="displayBlock lazy" src="" /></li>
            <li><img data-src="/nuevo/oldframework/img/lazyload/img19.jpg" class="displayBlock lazy" src="" /></li>
            <li><img data-src="/nuevo/oldframework/img/lazyload/img20.jpg" class="displayBlock lazy" src="" /></li>
            <li><img data-src="/nuevo/oldframework/img/lazyload/img21.jpg" class="displayBlock lazy" src="" /></li>
            <li><img data-src="/nuevo/oldframework/img/lazyload/img22.jpg" class="displayBlock lazy" src="" /></li>
            <li><img data-src="/nuevo/oldframework/img/lazyload/img23.jpg" class="displayBlock lazy" src="" /></li>
            <li><img data-src="/nuevo/oldframework/img/lazyload/img24.jpg" class="displayBlock lazy" src="" /></li>
            <li><img data-src="/nuevo/oldframework/img/lazyload/img25.jpg" class="displayBlock lazy" src="" /></li>
            <li><img data-src="/nuevo/oldframework/img/lazyload/img26.jpg" class="displayBlock lazy" src="" /></li>
            <li><img data-src="/nuevo/oldframework/img/lazyload/img27.jpg" class="displayBlock lazy" src="" /></li>
            <li><img data-src="/nuevo/oldframework/img/lazyload/img28.jpg" class="displayBlock lazy" src="" /></li>
            <li><img data-src="/nuevo/oldframework/img/lazyload/img29.jpg" class="displayBlock lazy" src="" /></li>
        </ol>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/footer.inc.php'); ?>
    <script type="text/javascript">
        $(document).ready(function () {
            jQuery("img.lazy").lazy();
        });
    </script>
</body>
</html>