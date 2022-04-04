<form method="post" class="mha" id="formID">
    <label for="data_busqueda__formMain">
        <span class="form_label_name"><?php echo _('B&uacute;squeda'); ?></span>
        <input type="search" name="data_busqueda__formMain" id="data_busqueda__formMain" class="busqueda <?php echo $form_validation_input_class_data_busqueda__formMain; ?>" value="<?php echo $_POST['data_busqueda__formMain']; ?>" form="formID" enterkeyhint="search" placeholder="<?php echo _(''); ?>" <?php echo $form_input_autofocus_data_busqueda__formMain; ?>>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_busqueda__formMain; ?>"><?php echo $form_validation_span_msg_data_busqueda__formMain; ?></span>
    </label>

    <input type="submit" value="<?php echo _('Buscar'); ?>" form="formID" enterkeyhint="search" name="button_form_submit__formMain" class="button_form_submit button_form_submit__formMain">
</form>