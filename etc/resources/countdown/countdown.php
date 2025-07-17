
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/common/header.inc.php'); ?>
    <div id="main" class="container" role="main">
<div id="countdown">
    <div class="countdown-item countdown-item-days">
        <div class="countdown-number"></div>
        <div class="countdown-item-label">Días</div>
    </div>

    <div class="countdown-item countdown-item-hours">
        <div class="countdown-number"></div>
        <div class="countdown-item-label countdown-item-label-desktop">Horas</div>
        <div class="countdown-item-label countdown-item-label-mobile">Hs</div>
    </div>

    <div class="countdown-item countdown-item-minutes">
        <div class="countdown-number"></div>
        <div class="countdown-item-label countdown-item-label-desktop">Minutos</div>
        <div class="countdown-item-label countdown-item-label-mobile">Min</div>
    </div>

    <div class="countdown-item countdown-item-seconds">
        <div class="countdown-number"></div>
        <div class="countdown-item-label countdown-item-label-desktop">Segundos</div>
        <div class="countdown-item-label countdown-item-label-mobile">Seg</div>
    </div>
</div>


    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/common/footer.inc.php'); ?>
    <script src="<?php echo $dir_env; ?>/js/_countdown.js"></script>
</body>
