$(document).ready(function () {
    $('.button_form_submit').scrollPosReload(); // REF [25]
    
    // REF [39] $form_label_floating_act
    // REF [39a] $form_label_floating_act
    $('#data_nombre__formMain').blur(function() {
        $(this).closest('label').removeClass('input_has_focus_js');   
      })
      .focus(function() {
        $(this).closest('label').addClass('input_has_focus_js');   
      });

    $('#data_telefono__formMain').blur(function() {
        $(this).closest('label').removeClass('input_has_focus_js');   
      })
      .focus(function() {
        $(this).closest('label').addClass('input_has_focus_js');   
      });

    $('#data_email__formMain').blur(function() {
        $(this).closest('label').removeClass('input_has_focus_js');   
      })
      .focus(function() {
        $(this).closest('label').addClass('input_has_focus_js');   
      });

    $('#data_mensaje__formMain').blur(function() {
        $(this).closest('label').removeClass('input_has_focus_js');   
      })
      .focus(function() {
        $(this).closest('label').addClass('input_has_focus_js');   
      });
    
/*     
    $('.pop_global button').click(function () {
        $('#formID').submit();
    });
*/
    
/* // REF [23] jQuery Datepicker --------------------------------------------
    $("input.fecha").datepicker({
        numberOfMonths: 2,
        showButtonPanel: true
    });
*/
});

jQuery(document).ready(function($) {
    // REF [39] $form_label_floating_act
    var $data_nombre__formMain      = $('#data_nombre__formMain');  
    var $data_telefono__formMain    = $('#data_telefono__formMain');  
    var $data_email__formMain       = $('#data_email__formMain');  
    var $data_mensaje__formMain     = $('#data_mensaje__formMain'); 
    
    $data_nombre__formMain.on('change', function() {
        var data_nombre_value__formMain = $data_nombre__formMain.val(); 
            
        if (!$(data_nombre_value__formMain).val() ){
            $(this).closest('label').addClass('input_has_value_js');       
        } else {
            $(this).closest('label').removeClass('input_has_value_js');         
        }
    }); 
  
    $data_telefono__formMain.on('change', function() {
        var data_telefono_value__formMain = $data_telefono__formMain.val(); 
            
        if (!$(data_telefono_value__formMain).val() ){
            $(this).closest('label').addClass('input_has_value_js');       
        } else {
            $(this).closest('label').removeClass('input_has_value_js');         
        }
    }); 
  
    $data_email__formMain.on('change', function() {
        var data_email_value__formMain = $data_email__formMain.val(); 
            
        if (!$(data_email_value__formMain).val() ){
            $(this).closest('label').addClass('input_has_value_js');       
        } else {
            $(this).closest('label').removeClass('input_has_value_js');         
        }
    }); 
  
    $data_mensaje__formMain.on('change', function() {
        var data_mensaje_value__formMain = $data_mensaje__formMain.val(); 
            
        if (!$(data_mensaje_value__formMain).val() ){
            $(this).closest('label').addClass('input_has_value_js');       
        } else {
            $(this).closest('label').removeClass('input_has_value_js');         
        } 
    });   
});