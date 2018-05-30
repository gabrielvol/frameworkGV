<nav id="nav" class="navMain container pRel" aria-label="<?php echo _("Men&uacute; principal del sitio"); ?>.">
    <button type="button" class="hamb navOpen pAbs displayNone displayBlockBT alignCenter upperCase" aria-pressed="false"><?php echo _("Men&uacute;"); ?></button>
    <button type="button" class="hamb navClose pAbs indentedText"><?php echo _("Cerrar"); ?></button>
    <ul class="mainMenu displayNoneBT unstyled clearfix horizontalCenterAT">
        <?php include('nav.list.inc.php'); ?>
    </ul>
    
    <ul class="mainMenu displayNoneAT unstyled clearfix">
        <?php            
            if ($seccionConSub == 1) {
                echo '<li class="volver pRel hasSub hideAT">
                    <p id="volverNavItem" class="topLevelItem" aria-haspopup="true" aria-owns="volverSubMenu" aria-controls="volverSubMenu" role="button" aria-pressed="false">'. _("Menú principal").'</p>
                    <ul id="volverSubMenu" class="subMenu unstyled" aria-expanded="false" aria-labelledby="volverNavItem">';
                        include('nav.list.inc.php');
                    echo '</ul></li>';
            } else {
                include('nav.list.inc.php');
            }            
        ?>
    </ul>
    <div class="modalBG modalNav">&nbsp;</div>
</nav>