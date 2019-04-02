<footer id="footer" class="">        
    <img src="/nuevo/img/logo.svg" class="logoF displayBlock" alt="<?php echo _("Company"); ?>.">
    
    <nav class="navFooter pRel" aria-label="<?php echo _("Men&uacute; principal del sitio"); ?>.">
        <ul class="mainMenu unstyled clearfix">
            <?php include('nav.list.inc.php'); ?>                
        </ul>
    </nav>
    
    <?php include('social.inc.php'); ?>
    
    <p class="googleAddress">
        <a href="<?php echo $urlGM ?>" target="_blank"><?php echo _("Direccion"); ?></a>
    </p>
    
    <p class="footerCopy">&copy; <?php echo $dateThisYear; ?> CompanyAsociados</p>
    
    <p class="footerCopy">
        &copy;
        <?php
            $fromYear = 2010;
            echo $fromYear . (($fromYear != $dateThisYear) ? ' - ' . $dateThisYear : ''); 
        ?> Company y Asociados
    </p>
    
    <div class="footerLegal">
        <ul class="horizontal clearfix containerAT">
            <li class="copy">&copy; <?php echo $dateThisYear; ?> Company</li>
            <li class="tos"><a href="/legal/" class="displayBlock"><?php echo _("Privacidad y Condiciones"); ?></a></li>
        </ul>
    </div> 
</footer>
    
<?php include('popups.inc.php'); ?>

<script src="/nuevo/js/scrollKeep.js"></script>
<!--<script src="/nuevo/js/slick.js"></script>-->
<!--<script src="/nuevo/js/lightbox.min.js"></script>-->

<script src="/nuevo/js/_navDrawer.js"></script>
<script src="/nuevo/js/_scrollKeep.js"></script>
<!--<script src="/nuevo/js/_topper.js"></script>-->
<!--<script src="/nuevo/js/_slick.js"></script>-->