<footer id="footer" class="">
    <nav class="navFooter pRel" aria-label="<?php echo _("Men&uacute; principal del sitio"); ?>.">
        <ul class="mainMenu unstyled clearfix">
            <?php include('nav.list.inc.php'); ?>                
        </ul>
    </nav>
    
    <p class="googleAddress">
        <a href="https://goo.gl/maps/" target="_blank"><?php echo _("Direccion"); ?></a>
    </p>
    
    <a href="https://api.whatsapp.com/send?phone=5491128356489">11 2835 6489</a> 
    
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
    <button type="button" class="closePopup">Cerrar</button>
    <button type="button" class="closePopup"><?php echo _("Cerrar"); ?></button>
    <div class="modalWrap">
        
    </div>
</div>

<div class="popup statusDiv borderBox pal" role="alertdialog" aria-labelledby="alertOK">
    <div role="document" tabindex="0">
        <button type="button" class="closePop pAbs hoverGrow indentedText">Cerrar</button>
        <h2 id="alertOK" class="mbm alignCenter"></h2>
        <p class="">Textoooooo.</p>
        <p class="">Textoooooo <a href="#">aquí</a>.</p>
        <button type="button" class="popOKdialog bgWhite mtl mha arial bold black alignCenter upperCase">OK</button>
    </div>
</div>
<div class="modalBG displayNone"></div>

<script src="/nuevo/js/_main.js"></script>