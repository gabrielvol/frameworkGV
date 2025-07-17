
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/common/header.inc.php'); ?>
    <div id="main" class="container" role="main">
        <div>            
            <button type="button" class="js-copy-bob-btn">Set clipboard to BOB</button>
            
            <button type="button" class="js-copy-jane-btn">Set clipboard to JANE</button>
        </div>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/common/footer.inc.php'); ?>
    <script src="<?php echo $dir_env; ?>/js/_clipboard.js"></script>
</body>
