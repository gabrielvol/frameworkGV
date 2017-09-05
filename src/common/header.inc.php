<a href="#main" id="go-main-content"><?php echo _("Ir al contenido principal de esta pagina"); ?>.</a>
<div class="pAbs" id="topGlobal"></div>
<header id="header" class="">
    
    <!--Normal-->
    <?php if($index == 1){ echo '<h1 class="logoHeader">'; } ?>
    <a href="/nuevo/" class="pRel displayBlock <?php if($int == 1){ echo 'logoHeader'; } else { echo ''; } ?>">
        <img src="/nuevo/img/logo.svg" alt="<?php echo _('Logo de'); ?>" />
    </a>
    <?php if($index == 1){ echo '</h1>'; } ?>    
    
    <!--Con Gettext-->
    <?php if($index == 1){ echo '<h1 class="logoHeader">'; } ?>
    <a href="/nuevo/
        <?php if($idioma == 'pt_BR'){
            echo '?l=pt_BR';
        } else if($idioma == 'en_GB') {
            echo '?l=en_GB';
        } else {
            echo '?l=es_AR';
        } ?>
    " class="pRel displayBlock man <?php if($int == 1){ echo 'logoHeader'; } ?>">
        <img src="/nuevo/img/logo.svg" alt="<?php echo _('Logo de'); ?>" />
    </a>
    <?php if($index == 1){ echo '</h1>'; } ?>
    
    <?php include('nav.inc.php'); ?>
</header>
