<?php
    //gettext file

    $gettext_switchMsg_ES = "Navegar el sitio en idioma castellano";
    $gettext_switchMsg_GB = "Switch to English version";
    $gettext_switchMsg_US = "Switch to English version";
    $gettext_switchMsg_PT = "Navegar no site em Portugu&ecirc;s";
    $gettext_switchMsg_JP = "sinTraduccion";
    $gettext_switchMsg_DE = "Durchsuchen Sie die Website in deutscher Sprache";
    $gettext_switchMsg_FR = "Parcourir le site en langue française";
?>

<ul class="nav_language_ul horizontal clearfix">
    <li>
        <a href="/nuevo/?l=es_AR" class="displayBlock borderBox mask hoverGrowM">
            <img src="/nuevo/img/flag_ar.svg" alt="<?php echo $gettext_switchMsg_ES; ?>.">
        </a>
    </li>
    <li>
        <a href="/clientes/?l=en_US" class="displayBlock borderBox mask hoverGrowM">
            <img src="/clientes/img/flag_us.svg" alt="<?php echo $gettext_switchMsg_US; ?>.">
        </a>
    </li>
    <li> <!-- gettext_alt -->
        <a href="/nuevo/?l=en" class="displayBlock borderBox mask hoverGrowM">
            <img src="/nuevo/img/flag_us.svg" alt="<?php echo $gettext_switchMsg_US; ?>.">
        </a>
    </li>
    <li>
        <a href="/nuevo/?l=en_GB" class="displayBlock borderBox mask hoverGrowM">
            <img src="/nuevo/img/flag_gb.svg" alt="<?php echo $gettext_switchMsg_GB; ?>.">
        </a>
    </li>
    <li>
        <a href="/nuevo/?l=pt_BR" class="displayBlock borderBox mask hoverGrowM">
            <img src="/nuevo/img/flag_br.svg" alt="<?php echo $gettext_switchMsg_PT; ?>.">
        </a>
    </li>
    <li>
        <a href="/nuevo/?l=ja_JP" class="displayBlock borderBox mask hoverGrowM">
            <img src="/nuevo/img/flag_jp.svg" alt="<?php echo $gettext_switchMsg_JP; ?>.">
        </a>
    </li>
    <li>
        <a href="/nuevo/?l=de_DE" class="displayBlock borderBox mask hoverGrowM">
            <img src="/nuevo/img/flag_de.svg" alt="<?php echo $gettext_switchMsg_DE; ?>.">
        </a>
    </li>
    <li>
        <a href="/nuevo/?l=fr_FR" class="displayBlock borderBox mask hoverGrowM">
            <img src="/nuevo/img/flag_fr.svg" alt="<?php echo $gettext_switchMsg_FR; ?>.">
        </a>
    </li>
</ul>