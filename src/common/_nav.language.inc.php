<?php
    //gettext file
        
    $gettext_switchMsg_AR       = "Naveg&aacute; el sitio en idioma castellano";
    $gettext_languageName_AR    = "Castellano";
    
    $gettext_switchMsg_BR       = "Navegar no site em Portugu&ecirc;s";
    $gettext_languageName_BR    = "Portugu&ecirc;s";
    
    $gettext_switchMsg_DE       = "Durchsuchen Sie die Website in deutscher Sprache";
    $gettext_languageName_DE    = "Deustche";
    
    $gettext_switchMsg_ES       = "Navegar el sitio en idioma espa&ntilde;ol";
    $gettext_languageName_ES    = "Espa&ntilde;ol";
    
    $gettext_switchMsg_FR       = "Parcourir le site en langue fran&ccedil;aise";
    $gettext_languageName_FR    = "Fran&ccedil;aise";
    
    $gettext_switchMsg_GB       = "Switch to English version";
    $gettext_languageName_GB    = "English";
    
    $gettext_switchMsg_JP       = "sinTraduccion";
    $gettext_languageName_JP    = "sinTraduccion";
    
    $gettext_switchMsg_US       = "Switch to English version";
    $gettext_languageName_US    = "English";
    
    $gettext_switchMsg_UY       = "Naveg&aacute; el sitio en idioma castellano";
    $gettext_languageName_UY    = "Castellano";
    
    $gettext_switchMsg_ZH       = "sinTraduccion";
    $gettext_languageName_ZH    = "sinTraduccion";
?>
<nav class="nav_language">
    <ul class="nav_language_ul unstyled displayFlex <?php if($l == 'en_GB'){ echo ' lang_EN'; } ?>">
        <li>
            <a href="<?php echo $url_entorno; ?>/?l=es_AR" hreflang="es" class="hover_grow_M_ani">
                <img src="<?php echo $url_entorno; ?>/img/flag_ar.svg" alt="<?php echo $gettext_switchMsg_AR; ?>." />
                <span class="visuallyHidden" lang="es"><?php echo $gettext_languageName_AR; ?></span>
            </a>
        </li>
        <li>
            <a href="<?php echo $url_entorno; ?>/?l=pt_BR" hreflang="pt" class="hover_grow_M_ani">
                <img src="<?php echo $url_entorno; ?>/img/flag_br.svg" alt="<?php echo $gettext_switchMsg_BR; ?>." />
                <span class="visuallyHidden" lang="pt"><?php echo $gettext_languageName_BR; ?></span>
            </a>
        </li>
        <li>
            <a href="<?php echo $url_entorno; ?>/?l=de_DE" hreflang="de" class="hover_grow_M_ani">
                <img src="<?php echo $url_entorno; ?>/img/flag_de.svg" alt="<?php echo $gettext_switchMsg_DE; ?>." />
                <span class="visuallyHidden" lang="de"><?php echo $gettext_languageName_DE; ?></span>
            </a>
        </li>
        <li class="flag_alignedLeft">
            <a href="<?php echo $url_entorno; ?>/?l=es_ES" hreflang="es" class="hover_grow_M_ani">
                <img src="<?php echo $url_entorno; ?>/img/flag_es.svg" alt="<?php echo $gettext_switchMsg_ES; ?>." />
                <span class="visuallyHidden" lang="es"><?php echo $gettext_languageName_ES; ?></span>
            </a>
        </li>
        <li>
            <a href="<?php echo $url_entorno; ?>/?l=fr_FR" hreflang="fr" class="hover_grow_M_ani">
                <img src="<?php echo $url_entorno; ?>/img/flag_fr.svg" alt="<?php echo $gettext_switchMsg_FR; ?>." />
                <span class="visuallyHidden" lang="fr"><?php echo $gettext_languageName_FR; ?></span>
            </a>
        </li>
        <li>
            <a href="<?php echo $url_entorno; ?>/?l=en_GB" hreflang="en" class="hover_grow_M_ani">
                <img src="<?php echo $url_entorno; ?>/img/flag_gb.svg" alt="<?php echo $gettext_switchMsg_GB; ?>." />
                <span class="visuallyHidden" lang="en"><?php echo $gettext_languageName_GB; ?></span>
            </a>
        </li>
        <li>
            <a href="<?php echo $url_entorno; ?>/?l=ja_JP" hreflang="ja" class="hover_grow_M_ani">
                <img src="<?php echo $url_entorno; ?>/img/flag_jp.svg" alt="<?php echo $gettext_switchMsg_JP; ?>." />
                <span class="visuallyHidden" lang="ja"><?php echo $gettext_languageName_JP; ?></span>
            </a>
        </li>
        <li class="flag_alignedLeft">
            <a href="<?php echo $url_entorno; ?>/?l=en_US" hreflang="en" class="hover_grow_M_ani">
                <img src="<?php echo $url_entorno; ?>/img/flag_us.svg" alt="<?php echo $gettext_switchMsg_US; ?>." />
                <span class="visuallyHidden" lang="en"><?php echo $gettext_languageName_US; ?></span>
            </a>
        </li>
        <li class="flag_alignedLeft"> <!-- gettext_alt -->
            <a href="<?php echo $url_entorno; ?>/?l=en" hreflang="en" class="hover_grow_M_ani">
                <img src="<?php echo $url_entorno; ?>/img/flag_us.svg" alt="<?php echo $gettext_switchMsg_US; ?>." />
                <span class="visuallyHidden" lang="en"><?php echo $gettext_languageName_US; ?></span>
            </a>
        </li>
        <li class="flag_alignedLeft">
            <a href="<?php echo $url_entorno; ?>/?l=es_UY" hreflang="es" class="hover_grow_M_ani">
                <img src="<?php echo $url_entorno; ?>/img/flag_uy.svg" alt="<?php echo $gettext_switchMsg_UY; ?>." />
                <span class="visuallyHidden" lang="es"><?php echo $gettext_languageName_UY; ?></span>
            </a>
        </li>
        <li class="flag_alignedLeft"><?php /* // REF [14a] */ ?>
            <a href="<?php echo $url_entorno; ?>/zh" hreflang="zh" class="hover_grow_M_ani">
                <img src="<?php echo $url_entorno; ?>/img/flag_zh.svg" alt="<?php echo $gettext_switchMsg_ZH; ?>." />
                <span class="visuallyHidden" lang="zh"><?php echo $gettext_languageName_ZH; ?></span>
            </a>
        </li>
        <li class="flag_alignedLeft"><?php /* // REF [14a] */ ?>
            <a href="<?php echo $url_entorno; ?>/?l=zh_CN" hreflang="zh" class="hover_grow_M_ani">
                <img src="<?php echo $url_entorno; ?>/img/flag_zh.svg" alt="<?php echo $gettext_switchMsg_ZH; ?>." />
                <span class="visuallyHidden" lang="zh"><?php echo $gettext_languageName_ZH; ?></span>
            </a>
        </li>
    </ul>
</nav>