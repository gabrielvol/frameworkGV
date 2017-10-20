<a href="#main" id="go-main-content"><?php echo _("Ir al contenido principal de esta p&aacute;gina"); ?>.</a>
<header id="header" class="">
    <?php if($index == 1){ echo '<h1 class="logoHeader">'; } ?>
    <a href="/nuevo/" class="pRel displayBlock <?php if($int == 1){ echo 'logoHeader'; } else { echo ''; } ?>">
        <img src="/nuevo/img/logo.svg" alt="<?php echo _('Logo de'); ?>" />
    </a>
    <?php if($index == 1){ echo '</h1>'; } ?>    
    
    <?php include('nav.inc.php'); ?>
</header>
