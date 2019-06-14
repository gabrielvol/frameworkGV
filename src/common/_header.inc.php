<a href="#main" id="go-main-content"><?php echo _("Ir al contenido principal de esta p&aacute;gina"); ?>.</a>
<header id="header" class="borderBox">
    
    <!--Normal-->
    <?php if($index == 1){ echo '<h1 class="logoH">'; } else if($logoImgBgBefore == 1) { echo '<div class="logoBefore">'; }?>
    <a href="/nuevo/" class="pRel displayBlock <?php if($int == 1){ echo 'logoH'; } else { echo ''; } ?>">
        <img src="/nuevo/img/logo.svg" alt="<?php echo $companyNameFull ?>."  class="displayBlock">
    </a>
    <?php if($index == 1){ echo '</h1>'; } else if($logoImgBgBefore == 1) { echo '</div>'; } ?>    
    
    <!--Con Gettext-->
    <?php if($index == 1){ echo '<h1 class="logoH">'; } else if($logoImgBgBefore == 1) { echo '<div class="logoBefore">'; }?>
    <a href="/nuevo/<?php if($idioma == 'pt_BR'){ echo '?l=pt_BR';
        } else if($idioma == 'en_GB') {
            echo '?l=en_GB';
        } else {
            echo '?l=es_AR';
        } ?>" class="pRel displayBlock <?php if($int == 1){ echo 'logoH'; } else { echo ''; } ?>">
        <img src="/nuevo/img/logo.svg" alt="<?php echo $companyNameFull ?>." class="displayBlock">
    </a>
    <?php if($index == 1){ echo '</h1>'; } else if($logoImgBgBefore == 1) { echo '</div>'; } ?>  
    
    <?php include('nav.inc.php'); ?>
</header>
