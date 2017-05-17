<a href="#main" id="go-main-content"><?php echo _("Ir al contenido principal de esta pagina"); ?>.</a>
<div class="pAbs" id="topGlobal"></div>
<header id="header" class="">
    // Normal
    <?php if($index == 1){ echo '<h1 class="logoHeader man">'; } ?>
    <a href="/clientes/anibal/" class="pRel displayBlock <?php if($int == 1){ echo 'logoHeader man'; } else { echo 'man'; } ?>">
        <img src="/clientes/anibal/img/logo.svg" alt="<?php echo _('Logo de'); ?>" />
    </a>
    <?php if($index == 1){ echo '</h1>'; } ?>    
    
    // Con Gettext
    <?php if($index == 1){ echo '<h1 class="logoHeader">'; } ?>
    <a href="/clientes/anibal/
        <?php if($idioma == 'pt_BR'){
            echo '?l=pt_BR';
        } else if($idioma == 'en_GB') {
            echo '?l=en_GB';
        } else {
            echo '?l=es_AR';
        } ?>
    " class="pRel displayBlock man <?php if($int == 1){ echo 'logoHeader'; } ?>">
        <img src="/clientes/anibal/img/logo.svg" alt="<?php echo _('Logo de'); ?>" />
    </a>
    <?php if($index == 1){ echo '</h1>'; } ?>
        
    
    
    // Framework
    <?php if($test == 1) {
            echo '<h1 class="logoHeader"><a href="/nuevo/oldframework/" class="pRel displayBlock man"><img src="/nuevo/img/logo.svg" alt="'._("Logo de ").'" /></a></h1>';
            
        //Sección
        } else if($seccion == 1) {
            echo '<a href="/nuevo/" class="logoHeader displayBlock"><img src="/nuevo/img/logo.svg" alt="'._("Logo de ").'" /></a>';
        }
    ?>
    
    <?php
        if($index == 1){
            include('nav.inc.php');
        } else if ($test == 1){
            include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/oldframework/common/nav.inc.php');
        } else {
            include('nav.inc.php');
        }
    ?>
</header>
