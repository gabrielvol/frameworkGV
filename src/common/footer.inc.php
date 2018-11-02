<footer id="footer" class="">        
    <img src="/nuevo/img/logo.svg" class="logoF displayBlock" alt="<?php echo _("Company"); ?>.">
    
    <nav class="navFooter pRel" aria-label="<?php echo _("Men&uacute; principal del sitio"); ?>.">
        <ul class="mainMenu unstyled clearfix">
            <?php include('nav.list.inc.php'); ?>                
        </ul>
    </nav>
    
    <?php include('social.inc.php'); ?>
    
    <p class="googleAddress">
        <a href="https://goo.gl/maps/" target="_blank"><?php echo _("Direccion"); ?></a>
    </p>
    
    <p class="footerCopy">
        &copy;
        <?php
            $fromYear = 2010;
            $thisYear = (int)date('Y');
            echo $fromYear . (($fromYear != $thisYear) ? ' - ' . $thisYear : ''); 
        ?> Company y Asociados
    </p>
    
    <div class="footerLegal">
        <ul class="horizontal clearfix containerAT">
            <li class="copy">&copy; 2018 Company</li>
            <li class="tos"><a href="/legal/" class="displayBlock"><?php echo _("Privacidad y Condiciones"); ?></a></li>
        </ul>
    </div> 
</footer>

<!--Popup-->
<div class="modal popup displayNone">
    <button type="button" class="closePop">Cerrar</button>
    <button type="button" class="closePop"><?php echo _("Cerrar"); ?></button>
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

<script src="/nuevo/js/slick.js"></script>
<!--<script src="/nuevo/js/lightbox.min.js"></script>-->
<script src="/nuevo/js/scrollKeep.js"></script>
<script src="/nuevo/js/_main.js"></script>
<!--<script src="/nuevo/js/_slick.js"></script>-->