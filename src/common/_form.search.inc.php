<form method="post" class="mha" id="formSearch">
    <label lang="<?php echo $site_lang_HTML_attr; ?>" for="data_busqueda__formSearch">
        <span class="form_label_name" lang="<?php echo $site_lang_HTML_attr; ?>"><?php echo _('B&uacute;squeda'); ?></span>
        <input type="search" name="data_busqueda__formSearch" id="data_busqueda__formSearch" class="busqueda <?php echo $form_validation_input_class_data_busqueda__formSearch; ?>" value="<?php echo $_POST['data_busqueda__formSearch']; ?>" form="formSearch" enterkeyhint="search" lang="<?php echo $site_lang_HTML_attr; ?>" <?php echo $form_input_autofocus_data_busqueda__formSearch; ?>>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_busqueda__formSearch; ?>" lang="<?php echo $site_lang_HTML_attr; ?>"><?php echo $form_validation_span_msg_data_busqueda__formSearch; ?></span>
    </label>

    <input type="submit" value="<?php echo _('Buscar'); ?>" form="formSearch" enterkeyhint="search" name="button_form_submit__formSearch" class="button_form_submit button_form_submit__formSearch" lang="<?php echo $site_lang_HTML_attr; ?>">
</form>