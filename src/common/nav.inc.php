<nav id="nav" class="navMain pRel" aria-label="<?php echo _("Men&uacute; principal del sitio"); ?>.">
    <button type="button" class="hamb navOpen pAbs displayNone displayBlockBT alignCenter upperCase" aria-pressed="false"><?php echo _("Men&uacute;"); ?></button>
    <button type="button" class="hamb navClose pAbs indentedText"><?php echo _("Cerrar"); ?></button>
    <ul class="mainMenu displayNoneBT unstyled clearfix horizontalCenterAT">
        <?php include('nav.list.inc.php'); ?>
    </ul>   
    
    <?php
        if($navDrawer == 1){
            echo '<ul class="mainMenu displayNoneAT unstyled clearfix">';

            if ($seccionConSub == 1) {
                echo '<li class="backMenu pRel hasSub hideAT">
                    <p id="backMenuNavItem" class="topLevelItem" aria-haspopup="true" aria-owns="backMenuSubMenu" aria-controls="backMenuSubMenu" role="button" aria-pressed="false">'. _("Menú principal").'</p>
                    <ul id="backMenuSubMenu" class="subMenu unstyled" aria-expanded="false" aria-labelledby="backMenuNavItem">';
                        include('nav.list.inc.php');
                    echo '</ul></li>';
            } else {
                include('nav.list.inc.php');
            }    
            
            echo '</ul>
            <div class="modalBG modalNav">&nbsp;</div>';
        }
    ?>
</nav>