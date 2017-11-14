<footer id="footer" class="">
    <p class="copyright">
        &copy;
        <?php
            $fromYear = 2010;
            $thisYear = (int)date('Y');
            echo $fromYear . (($fromYear != $thisYear) ? ' - ' . $thisYear : ''); 
        ?> Company y Asociados
    </p>
        
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

<script src="/nuevo/js/main.js" type="text/javascript"></script>
<script src="/nuevo/js/scrollKeep.js" type="text/javascript"></script>