<footer id="footer" class="">
    &copy; <?php
        $fromYear = 2008;
        $thisYear = (int)date('Y');
        echo $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '');?> Company.

    <?php echo date("Y"); ?>
        
    <img src="/nuevo/img/logo.svg" class="logoFooter displayBlock" alt="<?php echo _("Cerrar"); ?>">
    <?php include('social.inc.php'); ?>
</footer>

<!--Popup-->
<div class="modal popup displayNone">
    <a href="javascript:void(0)" class="close">Cerrar</a>
    <div class="modalWrap pAbs coverAll">
        
    </div>
</div>

<div class="modal popup displayNone">
    <a href="javascript:void(0)" class="close"><?php echo _("Cerrar"); ?></a>
    <div class="modalWrap pAbs coverAll">
        
    </div>
</div>

<div class="modalBG displayNone"></div>

<script type="text/javascript" src="/nuevo/_snippets/js/navResponsive.js"></script>
<!--<script type="text/javascript" src="/nuevo/js/plugins.js"></script>-->