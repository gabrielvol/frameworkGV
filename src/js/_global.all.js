/* * NombreDeProyecto * ========================================================
   Global javascript [/src/js/global.all.js]
   ========================================================================== */

/* // Site variables -------------------------------------------------------- */

$(document).ready(function () {
    // Get the viewport height and we multiple it by 1% to get a value for a vh unit
    let vh = window.innerHeight * 0.01;
    
    // Set the value in the --vh custom property to the root of the document
    document.documentElement.style.setProperty('--vh', `${vh}px`);
    
    // Listen to the resize event
    window.addEventListener('resize', () => {
    
        // Execute the same script as before
        let vh = window.innerHeight * 0.01;        
        document.documentElement.style.setProperty('--vh', `${vh}px`);
    });
    
/* // Separator ------------------------------------------------------------- */

});