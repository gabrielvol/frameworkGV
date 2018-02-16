<footer id="footer" class="">
    <p class="copyright">
        &copy;
        <?php
            $fromYear = 2010;
            $thisYear = (int)date('Y');
            echo $fromYear . (($fromYear != $thisYear) ? ' - ' . $thisYear : ''); 
        ?> Company y Asociados
    </p>
        
    <img src="/nuevo/img/logo.svg" class="logoF displayBlock" alt="<?php echo _("Logo de"); ?>.">
    
    <?php include('social.inc.php'); ?>
</footer>

<!--Popup-->
<div class="modal popup displayNone">
    <button class="closePopup">Cerrar</button>
    <button class="closePopup"><?php echo _("Cerrar"); ?></button>
    <div class="modalWrap">
        
    </div>
</div>
<div class="modalBG displayNone"></div>

<script src="/nuevo/js/main.js" type="text/javascript"></script>
<script src="/nuevo/js/scrollKeep.js" type="text/javascript"></script>