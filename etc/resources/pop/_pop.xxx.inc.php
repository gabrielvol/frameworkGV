<div class="pop_global pop_xxx displayNone">
    <button type="button" class="button_pop_close button_close" aria-pressed="false"><?php echo _("Cerrar Ventana"); ?></button>
    <div class="pop_innerContainer">

    </div>
</div>
<div class="modal_global modal_xxx displayNone"></div>


<div class="pop_global pop_warning pop_xxx" role="alertdialog" aria-labelledby="idlabelledby">
    <div role="document" tabindex="0">
        <button type="button" class="button_pop_close button_close" aria-pressed="false"><?php echo _("Cerrar Ventana"); ?></button>
        <h2 id="idlabelledby"><?php echo _("titulooooooo"); ?></h2>
        <p class=""><?php echo _("textooo"); ?>.</p>
        <p class=""><?php echo _("textooo"); ?> <a href="#"><?php echo _("clicaqui"); ?></a>.</p>
        <button type="button" class="button_pop_submit" aria-pressed="false"><?php echo _("OK"); ?></button>
    </div>
</div>
<div class="modal_global modal_warning modal_xxx displayNone"></div>


<div class="pop_global pop_video pop_xxx displayNone">
    <button type="button" class="button_pop_close button_close" aria-pressed="false"><?php echo _("Cerrar Ventana"); ?></button>
    <div class="pop_innerContainer">
        <div class="iframe_video_mask">
            <iframe src="<?php echo $media__NOMBRE_src_iframe ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" class="displayBlock mha" allowfullscreen></iframe>
        </div>
    </div>
</div>

<div class="modal_global modal_video modal_xxx displayNone"></div>