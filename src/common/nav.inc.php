<nav id="nav" class="mainNav container pRel" role="navigation" aria-label="<?php echo _("Men&uacute; principal del sitio"); ?>">
    <button class="hamb pAbs displayNone displayBlockBT alignCenter upperCase"><?php echo _("Men&uacute;"); ?></button>
    <ul class="mainMenu displayNoneBT unstyled horizontalAT clearfix">
        <li class="<?php if($navSelected == 1) echo "selected" ?>"><a href="/nuevo/" class="displayBlockBT"><?php echo _("Inicio"); ?></a></li>
        
        <li class="nos hasSub <?php if($navSelected == 1) echo "selected" ?>">
            <a href="/nuevo/nosotros/" id="nosoNavItem" aria-haspopup="true" aria-owns="nosSubMenu" aria-controls="nosSubMenu" aria-expanded="false" class="displayBlock upperCase alignCenter">
                <?php echo _("Nosotros"); ?>
            </a>
            <ul id="nosSubMenu" role="group" aria-expanded="false" aria-labelledby="nosNavItem" class="subMenu unstyled">
                <li><a href="/nuevo/nosotros/historia.php" class="displayBlock"><?php echo _("Historia"); ?></a></li>
            </ul>
        </li>
        
        <li class="nos hasSub <?php if($navSelected == 1) echo "selected" ?>">
            <p href="/nuevo/nosotros/" id="nosoNavItem" aria-haspopup="true" aria-owns="nosSubMenu" aria-controls="nosSubMenu" aria-expanded="false" class="topLevelItem upperCase alignCenter">
                <?php echo _("Nosotros"); ?>
            </p>
            <ul id="nosSubMenu" role="group" aria-expanded="false" aria-labelledby="nosNavItem" class="subMenu unstyled">
                <li><a href="/nuevo/nosotros/historia.php" class="displayBlock"><?php echo _("Historia"); ?></a></li>
            </ul>
        </li>
    </ul>
</nav>