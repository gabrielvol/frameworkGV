/* * NombreDeProyecto * ========================================================
   Captcha Get Token [/src/js/_capctha_formRecuperarContrasena.js]
   ========================================================================== */

/* // Descripcion ----------------------------------------------------------- 
Funcion captchaGetToken para obtener el token de reCatpcha V3 y asignarlo al
campo hidden `data_captchaResponseToken__formRecuperarContrasena`
 
1. Hay que reemplazar `formRecuperarContrasena` por el ID correspondiente en:
- action
- campo hidden `data_captchaResponseToken__ ... `

2. Hay que crear el condicional en `[/src/common/footer.js.inc.php]`

// REF [50] Google captcha
*/



function captchaGetToken(form) {
    grecaptcha.ready(function() {
        
// Request captcha token
        grecaptcha.execute(captcha_key_site, {action: 'formRecuperarContrasena'}).then(function(token) {
            
// Set token as the value of `data_captchaResponseToken__formRecuperarContrasena` hidden field
            data_captchaResponseToken__formRecuperarContrasena.value = token;
            
// Submit the form            
            form.submit();
        });
    });
}