<?php
    $url = "http://www.site.com.ar";
?>
<a href="#main" id="go-main-content"><?php echo _("Ir al contenido principal de esta p&aacute;gina"); ?>.</a>
<header id="header" class="">
    
    <!--Normal-->
    <?php if($index == 1){ echo '<h1 class="logoH">'; } ?>
    <a href="/nuevo/" class="pRel displayBlock <?php if($int == 1){ echo 'logoH'; } else { echo ''; } ?>">
        <img src="/nuevo/img/logo.svg" alt="<?php echo _('Company'); ?>."  class="displayBlock">
    </a>
    <?php if($index == 1){ echo '</h1>'; } ?>    
    
    <!--Con Gettext-->
    <?php if($index == 1){ echo '<h1 class="logoH">'; } ?>
    <a href="/nuevo/<?php if($idioma == 'pt_BR'){ echo '?l=pt_BR';
        } else if($idioma == 'en_GB') {
            echo '?l=en_GB';
        } else {
            echo '?l=es_AR';
        } ?>" class="pRel displayBlock <?php if($int == 1){ echo 'logoH'; } else { echo ''; } ?>">
        <img src="/nuevo/img/logo.svg" alt="<?php echo _('Company'); ?>." class="displayBlock">
    </a>
    <?php if($index == 1){ echo '</h1>'; } ?>
    
    <?php include('nav.inc.php'); ?>
</header>
