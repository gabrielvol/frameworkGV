<nav id="nav" class="nav_main" aria-label="<?php if($gettext_idioma == 'en_GB'){ echo 'Site main menu.'; } else { echo 'Men&uacute; principal del sitio.'; } ?>">
    <button type="button" class="button_hamb button_hamb_open" aria-pressed="false"><span class="visuallyHidden"><?php if($gettext_idioma == 'en_GB'){ echo 'Open'; } else { echo 'Abrir'; } ?></span> <?php if($gettext_idioma == 'en_GB'){ echo 'Menu'; } else { echo 'Men&uacute;'; } ?></button>
    <button type="button" class="button_hamb button_hamb_close" aria-pressed="false"><?php if($gettext_idioma == 'en_GB'){ echo 'Close'; } else { echo 'Cerrar'; } ?><?php echo _("Cerrar"); ?> <span class="visuallyHidden"><?php if($gettext_idioma == 'en_GB'){ echo 'Menu'; } else { echo 'Men&uacute;'; } ?></span></button>
    
    <?php
        // REF [05] `[/src/var/act/nav.act.inc.php]`
        // REF [05] `[/etc/css/custom/act/classes_useful_act.scss]`
        if($nav_double_A768_act == 1): ?>
        <div class="navs_container_AT displayFlexAT">
    <?php endif; ?>
        
        <ul class="nav_main_ul navAT unstyled" uk-scrollspy-nav="closest: li; scroll: true; offset: 80">
            <?php include('nav.main.list.inc.php'); ?>
        </ul>
    
    <?php
        // REF [05] `[/src/var/act/nav.act.inc.php]`, `[/etc/css/custom/act/classes_useful_act.scss]`
        if($nav_double_A768_act == 1): ?>
        </div>
    <?php endif; ?>
    
    <?php
        // REF [06] `[/src/var/act/nav.act.inc.php]`
        if($nav_drawer_act == 1){
            echo '<ul class="nav_main_ul nav_main_ul_drawer unstyled clearfix" uk-scrollspy-nav="closest: li; scroll: true; offset: 80">';
            
            // REF [07] `[/src/var/act/nav.act.inc.php]`
            if ($nav_SECTION_hasSub_act == 1) {
                echo '<li class="nav_item_back nav_item_hasSubNav nav_item_hasSubNav_level1 displayNoneAT">
                    <p id="nav_TLI_back" class="nav_TLI" aria-haspopup="true" aria-owns="nav_item_back_subNav" aria-controls="nav_item_back_subNav" role="button" aria-pressed="false">'. _("Men&uacute; principal del sitio").'</p>
                    <ul id="nav_item_back_subNav" class="nav_subNav nav_subNav_level1 nav_item_back_subNav unstyled" aria-expanded="false" aria-labelledby="nav_TLI_back">';
                        include('nav.main.list.inc.php');
                    echo '</ul></li>';
            } else {
                include('nav.main.list.inc.php');
                
                /* // REF [37]
                if($gettext_idioma == 'en_GB'):
                include ('nav.language.sq.item.es.inc.php');

                endif; if($gettext_idioma == 'es_AR'):        
                include ('nav.language.sq.item.en.inc.php');

                endif;
                */
            }    
            
            echo '</ul>
            <div class="modal_global modal_nav">&nbsp;</div>';
        }
    ?>
</nav>