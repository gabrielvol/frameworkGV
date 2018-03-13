<footer id="footer" class="">
    <p class="googleAddress">
        <a href="https://goo.gl/maps/" title="<?php echo _('Ir a la ubicaci&oacute;n en Google Maps'); ?>." target="_blank"><?php echo _("Direccion"); ?></a>
    </p>
    
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

<script src="/nuevo/js/_main.js" type="text/javascript"></script>