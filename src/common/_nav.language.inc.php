<?php
/* * NombreDeProyecto * ========================================================
   Nav Language [/src/var/nav.language.inc.php]
   ========================================================================== */

// Nav para cambiar idioma del sitio
//
// REF [14a] // Idioma Chino ZH, MingLiu font
// REF [33] // Activador, nav_language
// REF [37] // Nav language square


        
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
    <ul class="nav_language_ul unstyled displayFlex <?php if(isset($gettext_idioma)){ if($gettext_idioma == 'de_DE') {
            // REF [33]
            echo ' lang_DE'; }
            
        elseif($gettext_idioma == 'en_GB') {
            echo ' lang_GB'; }
            
        elseif($gettext_idioma == 'pt_BR') {
            echo ' lang_BR'; }
            
        else { echo ' lang_AR'; } } ?>">
        <li>
            <a href="<?php echo $dir_env; ?>/?l=es_AR" hreflang="es" class="hover_grow_M_ani">
                <img src="<?php echo $dir_env; ?>/img/flag_ar.svg" alt="<?php echo $gettext_switchMsg_AR; ?>." />
                <span class="visuallyHidden" lang="es"><?php echo $gettext_languageName_AR; ?></span>
            </a>
        </li>
        <li>
            <a href="<?php echo $dir_env; ?>/?l=pt_BR" hreflang="pt" class="hover_grow_M_ani">
                <img src="<?php echo $dir_env; ?>/img/flag_br.svg" alt="<?php echo $gettext_switchMsg_BR; ?>." />
                <span class="visuallyHidden" lang="pt"><?php echo $gettext_languageName_BR; ?></span>
            </a>
        </li>
        <li>
            <a href="<?php echo $dir_env; ?>/?l=de_DE" hreflang="de" class="hover_grow_M_ani">
                <img src="<?php echo $dir_env; ?>/img/flag_de.svg" alt="<?php echo $gettext_switchMsg_DE; ?>." />
                <span class="visuallyHidden" lang="de"><?php echo $gettext_languageName_DE; ?></span>
            </a>
        </li>
        <li class="flag_alignedLeft">
            <a href="<?php echo $dir_env; ?>/?l=es_ES" hreflang="es" class="hover_grow_M_ani">
                <img src="<?php echo $dir_env; ?>/img/flag_es.svg" alt="<?php echo $gettext_switchMsg_ES; ?>." />
                <span class="visuallyHidden" lang="es"><?php echo $gettext_languageName_ES; ?></span>
            </a>
        </li>
        <li>
            <a href="<?php echo $dir_env; ?>/?l=fr_FR" hreflang="fr" class="hover_grow_M_ani">
                <img src="<?php echo $dir_env; ?>/img/flag_fr.svg" alt="<?php echo $gettext_switchMsg_FR; ?>." />
                <span class="visuallyHidden" lang="fr"><?php echo $gettext_languageName_FR; ?></span>
            </a>
        </li>
        <li>
            <a href="<?php echo $dir_env; ?>/?l=en_GB" hreflang="en" class="hover_grow_M_ani">
                <img src="<?php echo $dir_env; ?>/img/flag_gb.svg" alt="<?php echo $gettext_switchMsg_GB; ?>." />
                <span class="visuallyHidden" lang="en"><?php echo $gettext_languageName_GB; ?></span>
            </a>
        </li>
        <li>
            <a href="<?php echo $dir_env; ?>/?l=ja_JP" hreflang="ja" class="hover_grow_M_ani">
                <img src="<?php echo $dir_env; ?>/img/flag_jp.svg" alt="<?php echo $gettext_switchMsg_JP; ?>." />
                <span class="visuallyHidden" lang="ja"><?php echo $gettext_languageName_JP; ?></span>
            </a>
        </li>
        <li class="flag_alignedLeft">
            <a href="<?php echo $dir_env; ?>/?l=en_US" hreflang="en" class="hover_grow_M_ani">
                <img src="<?php echo $dir_env; ?>/img/flag_us.svg" alt="<?php echo $gettext_switchMsg_US; ?>." />
                <span class="visuallyHidden" lang="en"><?php echo $gettext_languageName_US; ?></span>
            </a>
        </li>
        <li class="flag_alignedLeft"> <?php /* gettext_alt */ ?>
            <a href="<?php echo $dir_env; ?>/?l=en" hreflang="en" class="hover_grow_M_ani">
                <img src="<?php echo $dir_env; ?>/img/flag_us.svg" alt="<?php echo $gettext_switchMsg_US; ?>." />
                <span class="visuallyHidden" lang="en"><?php echo $gettext_languageName_US; ?></span>
            </a>
        </li>
        <li class="flag_alignedLeft">
            <a href="<?php echo $dir_env; ?>/?l=es_UY" hreflang="es" class="hover_grow_M_ani">
                <img src="<?php echo $dir_env; ?>/img/flag_uy.svg" alt="<?php echo $gettext_switchMsg_UY; ?>." />
                <span class="visuallyHidden" lang="es"><?php echo $gettext_languageName_UY; ?></span>
            </a>
        </li>
        <li class="flag_alignedLeft"><?php /* // REF [14a] */ ?>
            <a href="<?php echo $dir_env; ?>/zh" hreflang="zh" class="hover_grow_M_ani">
                <img src="<?php echo $dir_env; ?>/img/flag_zh.svg" alt="<?php echo $gettext_switchMsg_ZH; ?>." />
                <span class="visuallyHidden" lang="zh"><?php echo $gettext_languageName_ZH; ?></span>
            </a>
        </li>
        <li class="flag_alignedLeft"><?php /* // REF [14a] */ ?>
            <a href="<?php echo $dir_env; ?>/?l=zh_CN" hreflang="zh" class="hover_grow_M_ani">
                <img src="<?php echo $dir_env; ?>/img/flag_zh.svg" alt="<?php echo $gettext_switchMsg_ZH; ?>." />
                <span class="visuallyHidden" lang="zh"><?php echo $gettext_languageName_ZH; ?></span>
            </a>
        </li>
        
        <?php /* // REF [37]
        if($gettext_idioma == 'en_GB'):
            include ('nav.language.sq.item.es.inc.php');
        
        elseif($gettext_idioma == 'es_AR'):        
            include ('nav.language.sq.item.en.inc.php');
        
        endif; */ ?>
    </ul>
</nav>