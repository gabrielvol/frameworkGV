<li class="nav_item_home <?php if($nav_pageCurrent == 'page_index') { echo ' visuallyHidden nav_item_current'; } ?>">
    <a <?php echo $href_index; if($nav_pageCurrent == 'page_index') { echo ' aria-current="page"'; } ?>>
        <?php echo _("Home"); ?>
    </a>
</li>
<li class="nav_item_contacto <?php if($nav_pageCurrent == 'page_contacto') { echo ' nav_item_current'; } ?>">
    <a <?php echo $href_contacto; if($nav_pageCurrent == 'page_contacto') { echo ' aria-current="page"'; } ?>>
        <?php echo $page_title_home_contacto; ?>
    </a>
</li>
<li class="nav_item_PAGEINT <?php if($nav_pageCurrent == 'PAGE_PAGEINT') { echo ' nav_item_current'; } ?>">
    <a <?php echo $href_PAGINA; if($nav_pageCurrent == 'PAGE_PAGEINT') { echo ' aria-current="page"'; } ?>>
        <?php echo $page_title_home_PAGEINT; ?>
    </a>
</li>

<li class="nav_item_home nav_item_noLink_js">
    <a href="<?php if($page_int == 1) { echo $url_top_hs_INICIO; } else { echo $hash_top; } ?>">
        Inicio
    </a>
</li>
<li class="nav_item_PAGEINT nav_item_noLink_js">
    <a href="<?php if($page_int == 1) { echo $url_SECCION_hs_INICIO; } else { echo $hash_SECCION; } ?>">
        <?php echo $page_title_home_PAGEINT; ?>
    </a>
</li>

<!--Con gettext--> 
<li class="nav_item_PAGEINT nav_item_noLink_js">
    <a <?php if($page_int == 1) { echo 'href="'. $url_PAGINA_full_gettext .'"'; } else { echo $href_PAGINA_gettext; } ?>>
        <?php echo _("pagina"); ?>
    </a>
</li>


// Sub Level 1
<li class="nav_item_nosotros nav_item_hasSubNav nav_item_hasSubNav_level1 pRel <?php if($nav_pageCurrent == 'PAGE_PAGEINT') { echo ' nav_item_current'; } ?>">
    <p id="nav_TLI_nosotros" class="nav_TLI nav_TLI_level1" aria-haspopup="true" aria-owns="nav_item_nosotros_subNav" aria-controls="nav_item_nosotros_subNav" role="button" aria-pressed="false">
        <?php echo $page_title_home_PAGEINT; ?>
    </p>
    <ul id="nav_item_nosotros_subNav" class="nav_subNav nav_subNav_level1 unstyled" role="group" aria-expanded="false" aria-labelledby="nav_TLI_nosotros">
        <li class="<?php if($nav_pageCurrent_int == 'PAGE_PAGEINT_sub') { echo ' nav_item_current'; } ?>">
            <a <?php echo $href_PAGINA; if($nav_pageCurrent_int == 'PAGE_PAGEINT_sub') { echo ' aria-current="page"'; } ?>>
                <?php echo $page_title_home_PAGEINT_sub; ?>
            </a>
        </li>
    </ul>
</li>


// Sub Level 2
<li class="nav_item_nosotros nav_item_hasSubNav nav_item_hasSubNav_level1 pRel <?php if($nav_pageCurrent == 'PAGE_PAGEINT') { echo ' nav_item_current'; }?>">
    <p id="nav_TLI_nosotros" class="nav_TLI nav_TLI_level1" aria-haspopup="true" aria-owns="nav_item_nosotros_subNav" aria-controls="nav_item_nosotros_subNav" role="button" aria-pressed="false">
        <?php echo $page_title_home_PAGEINT; ?>
    </p>
    <ul id="nav_item_nosotros_subNav" class="nav_subNav nav_subNav_level1 unstyled" role="group" aria-expanded="false" aria-labelledby="nav_TLI_nosotros">
        <li class="nav_item_historia nav_item_hasSubNav nav_item_hasSubNav_level2 <?php if($nav_pageCurrent_int == 'PAGE_PAGEINT_sub') { echo ' nav_item_current'; } ?>">
            <p id="nav_TLI_historia" class="nav_TLI nav_TLI_level2" aria-haspopup="true" aria-owns="nav_item_historia_subNav" aria-controls="nav_item_historia_subNav" role="button" aria-pressed="false">
                <?php echo $page_title_home_PAGEINT_sub; ?>
            </p>
            <ul id="nav_item_historia_subNav" class="nav_subNav nav_subNav_level2 unstyled" role="group" aria-expanded="false" aria-labelledby="nav_TLI_historia">
                <li class="<?php if($nav_pageCurrent_int == 'PAGE_PAGEINT_sub') { echo ' nav_item_current'; } ?>">
                    <a <?php echo $href_PAGINA; if($nav_pageCurrent_int == 'PAGE_PAGEINT_sub') { echo ' aria-current="page"'; } ?>>
                        <?php echo $page_title_home_PAGEINT_sub; ?>
                    </a>
                </li>
            </ul>    
        </li>
    </ul>
</li>