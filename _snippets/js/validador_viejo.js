$(function() { 
	var emailreg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;	
	$(".enviar").click(function(){  
		$(".error").fadeOut().remove();
		
        if ($(".nombre").val() == "") {  
			$(".nombre").focus().after('<span class="form-error">Por favor, ingrese su nombre</span>');  
			return false;  
	}  		
        if ($(".cargo").val() == "") {  
			$(".cargo").focus().after('<span class="form-error">Por favor, ingrese un cargo</span>');  
			return false;  
	}  
        if ($(".empresa").val() == "") {  
			$(".empresa").focus().after('<span class="form-error">Por favor, indique su empresa</span>');  
			return false;  
	}   
        if ($(".email").val() == "" || !emailreg.test($(".email").val())) {
			$(".email").focus().after('<span class="form-error">Por favor, ingrese una dirección de correo válida</span>');  
			return false;  
	}  
        if ($(".telefono").val() == "") {  
			$(".telefono").focus().after('<span class="form-error">Por favor, ingrese un teléfono</span>');  
			return false;  
	}  
        if ($(".rubro").val() == "") {  
			$(".rubro").focus().after('<span class="form-error">Por favor, ingrese un rubro</span>');  
			return false;  
	}   
        if ($(".producto").val() == "") {  
			$(".producto").focus().after('<span class="form-error">Por favor, ingrese su producto</span>');  
			return false;  
	}    
        if ($(".cantidad").val() == "") {  
			$(".cantidad").focus().after('<span class="form-error">Por favor, ingrese una cantidad</span>');  
			return false;  
	}     
        if ($(".habitacion").val() == "") {  
			$(".habitacion").focus().after('<span class="form-error">Por favor, seleccione una habitación</span>');  
			return false;  
	} 
    });  
	$(".nombre, .cargo, .empresa, .email, .telefono, .rubro, .producto, .cantidad").bind('blur keyup', function(){  
        if ($(this).val() != "") {  			
			$('.form-error').fadeOut();
			return false;  
	}  
});	
	$(".email").bind('blur keyup', function(){  
        if ($(".email").val() != "" && emailreg.test($(".email").val())) {	
			$('.form-error').fadeOut();  
			return false;  
	}  
});
});