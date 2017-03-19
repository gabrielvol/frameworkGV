<footer id="footer" class="">
    &copy; <?php
        $fromYear = 2008;
        $thisYear = (int)date('Y');
        echo $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '');?> Company.

    <?php echo date("Y"); ?>
        
    <img src="/nuevo/img/logo.svg" class="logoFooter displayBlock" alt="<?php echo _("Logo de"); ?>">
    <?php include('social.inc.php'); ?>
</footer>

<!--Popup-->
<div class="modal popup displayNone">
    <a href="javascript:void(0)" class="closePopup">Cerrar</a>
    <a href="javascript:void(0)" class="closePopup"><?php echo _("Cerrar"); ?></a>
    <div class="modalWrap">
        
    </div>
</div>
<div class="modalBG displayNone"></div>

<script type="text/javascript" src="/nuevo/js/plugins.js"></script>