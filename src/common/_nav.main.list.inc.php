<li class="nav_item-PAGINA <?php if($nav_pageCurrent == 1) { echo 'visuallyHidden nav_item_current'; } ?>">
    <a <?php echo $href_index; ?> <?php if($nav_pageCurrent == 1) { echo 'aria-current="page"'; } ?>>
        <?php echo _("Inicio"); ?>
    </a>
</li>
<li class="nav_item-PAGINA <?php if($nav_pageCurrent == 2) { echo 'nav_item_current'; } ?>">
    <a <?php echo $href_PAGINA; ?> <?php if($nav_pageCurrent == 2) { echo 'aria-current="page"'; } ?>>
        <?php echo _("pagina"); ?>
    </a>
</li>
<li class="nav_item-PAGINA nav_item_noLink_js">
    <a href="<?php if($page_int == 1) { echo $url_index; } ?>#seccion">
        <?php echo _("pagina"); ?>
    </a>
</li>

<!--Con gettext--> 
<li class="nav_item-PAGINA <?php if($nav_pageCurrent == 1) { echo 'nav_item_current'; } ?>">
    <a <?php echo $href_PAGINA; ?> <?php if($gettext_idioma == 'en_GB') { echo '?l=en_GB'; } ?> <?php if($nav_pageCurrent == 1) { echo 'aria-current="page"'; } ?>>
        <?php echo _("pagina"); ?>
    </a>
</li>
<li class="nav_item-PAGINA nav_item_noLink_js">
    <a <?php if($page_int == 1) { echo 'href="'. $url_PAGINA_full_gettext .'"'; } else { echo $href_PAGINA_gettext; } ?>>
        <?php echo _("pagina"); ?>
    </a>
</li>


// Sub Level 1
<li class="nav_item_nosotros nav_item_hasSubNav nav_item_hasSubNav_level1 pRel <?php if($nav_pageCurrent == 2) { echo 'nav_item_current'; } ?>">
    <p id="nav_TLI_nosotros" class="nav_TLI nav_TLI_level1" aria-haspopup="true" aria-owns="nav_item_nosotros_subNav" aria-controls="nav_item_nosotros_subNav" role="button" aria-pressed="false">
        <?php echo _("Nosotros"); ?>
    </p>
    <ul id="nav_item_nosotros_subNav" class="nav_subNav nav_subNav_level1 unstyled" role="group" aria-expanded="false" aria-labelledby="nav_TLI_nosotros">
        <li class="<?php if($nav_pageCurrent_int == 201) { echo 'nav_item_current'; } ?>">
            <a <?php echo $href_PAGINA; ?> <?php if($nav_pageCurrent_int == 201) { echo 'aria-current="page"'; } ?>>
                <?php echo _("Historia"); ?>
            </a>
        </li>
    </ul>
</li>


// Sub Level 2
<li class="nav_item_nosotros nav_item_hasSubNav nav_item_hasSubNav_level1 pRel <?php if($nav_pageCurrent == 200) { echo 'nav_item_current'; }?>">
    <p id="nav_TLI_nosotros" class="nav_TLI nav_TLI_level1" aria-haspopup="true" aria-owns="nav_item_nosotros_subNav" aria-controls="nav_item_nosotros_subNav" role="button" aria-pressed="false">
        <?php echo _("Nosotros"); ?>
    </p>
    <ul id="nav_item_nosotros_subNav" class="nav_subNav nav_subNav_level1 unstyled" role="group" aria-expanded="false" aria-labelledby="nav_TLI_nosotros">
        <li class="nav_item_historia nav_item_hasSubNav nav_item_hasSubNav_level2 <?php if($nav_pageCurrent_int == 210) { echo 'nav_item_current'; } ?>">
            <p id="nav_TLI_historia" class="nav_TLI nav_TLI_level2" aria-haspopup="true" aria-owns="nav_item_historia_subNav" aria-controls="nav_item_historia_subNav" role="button" aria-pressed="false">
                <?php echo _("Historia"); ?>
            </p>
            <ul id="nav_item_historia_subNav" class="nav_subNav nav_subNav_level2 unstyled" role="group" aria-expanded="false" aria-labelledby="nav_TLI_historia">
                <li class="<?php if($nav_pageCurrent_int == 211) { echo 'nav_item_current'; } ?>">
                    <a <?php echo $href_PAGINA; ?> <?php if($nav_pageCurrent_int == 211) { echo 'aria-current="page"'; } ?>>
                        <?php echo _("Comienzos"); ?>
                    </a>
                </li>
            </ul>    
        </li>
    </ul>
</li>