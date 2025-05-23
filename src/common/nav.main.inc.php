<nav id="nav" class="nav_main" aria-label="<?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB'): ?>Site main menu.<?php else: ?>Men&uacute; principal del sitio.<?php endif; ?>">
    
    <button type="button" class="button_hamb button_hamb_open" aria-pressed="false">
        <span class="visuallyHidden"><?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB'): ?>Open<?php else: ?>Abrir<?php endif; ?></span> <?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB'): ?>Menu<?php else: ?>Men&uacute;<?php endif; ?></button>
    
    <button type="button" class="button_hamb button_hamb_close" aria-pressed="false"><?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB'): ?>Close<?php else: ?>Cerrar<?php endif; ?> <span class="visuallyHidden"><?php if(isset($gettext_idioma) && $gettext_idioma == 'en_GB'): ?>Menu<?php else: ?>Men&uacute;<?php endif; ?></span>
    </button>
    
    <?php
        // REF [05] `[/src/var/act/nav.act.inc.php]`
        // REF [05] `[/etc/css/custom/act/classes_useful_act.scss]`
        if(!empty($nav_double_A768_act)): ?>
        <div class="navs_container_AT displayFlexAT">
    <?php endif; ?>
        
        <ul class="nav_main_ul navAT unstyled" uk-scrollspy-nav="closest: li; scroll: true; offset: 80">
            <?php include('nav.main.list.inc.php'); ?>
        </ul>

        <?php // REF 05 include('nav.lang.ul.inc.php'); ?>
    
    <?php
        // REF [05] `[/src/var/act/nav.act.inc.php]`
        // REF [05] `[/etc/css/custom/act/classes_useful_act.scss]`
        if(!empty($nav_double_A768_act)): ?>
        </div>
    <?php endif; ?>
    
    <?php
        // REF [06] `[/src/var/act/nav.act.inc.php]`
        if($nav_drawer_act){
            echo '<ul class="nav_main_ul nav_main_ul_drawer unstyled clearfix" uk-scrollspy-nav="closest: li; scroll: true; offset: 80">';
            
            // REF [07] `[/src/var/act/nav.act.inc.php]`
            if($nav_SECTION_hasSub_act){
                echo '<li class="nav_item_back nav_item_hasSubNav nav_item_hasSubNav_level1 displayNoneAT">
                    <p id="nav_TLI_back" class="nav_TLI" aria-haspopup="true" aria-owns="nav_item_back_subNav" aria-controls="nav_item_back_subNav" role="button" aria-pressed="false">'. _("Men&uacute; principal del sitio").'</p>
                    <ul id="nav_item_back_subNav" class="nav_subNav nav_subNav_level1 nav_item_back_subNav unstyled" aria-expanded="false" aria-labelledby="nav_TLI_back">';
                        include('nav.main.list.inc.php');
                    echo '</ul></li>';
            } else {
                include('nav.main.list.inc.php');
                
                /* // REF [37]
                if($gettext_idioma == 'en_GB'):
                include ('nav.lang.item.sq.es.inc.php');

                endif; if($gettext_idioma == 'es_AR'):        
                include ('nav.lang.item.sq.en.inc.php');

                endif;
                */
            }    
            
            echo '</ul>
            <div class="modal_global modal_nav">&nbsp;</div>';
        }
    ?>
</nav>