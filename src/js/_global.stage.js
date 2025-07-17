/* * NombreDeProyecto * ========================================================
   Global javascript [/src/js/global.stage.js]
   ========================================================================== */

/* // Site variables -------------------------------------------------------- */
// Variables globales para el entorno stage

// REF [48] Dev window width

var dir_env_js = '/stage';

// Se anulan peticiones de captcha fuera del entorno produccion
let captcha_key_site = 'sinclave';



$(document).ready(function () {
/* // REF [48] Dev window width --------------------------------------------- */
    let deviceWindowWidth = $(window).width();
    document.getElementById("dev_window_width").innerHTML = deviceWindowWidth;
});

document.addEventListener("DOMContentLoaded", () => {
/* // Separator ------------------------------------------------------------- */
});