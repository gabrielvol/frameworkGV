<?php
/* * NombreDeProyecto * ========================================================
   <footer> Popup [/src/common/footer.pop.inc.php]
   ========================================================================== */

/* // Descripcion -----------------------------------------------------------
 * Archivo de carga de popup luego de <footer>
 * Este archivo se carga en `[/src/common/footer.inc.php]`
 * El modelo está en `[/etc/resources/pop]`
 * 
*/

    $popup_date_start = new DateTime('2025-03-13 00:00:01', $timezone);
    $popup_date_end = new DateTime('2025-03-20 23:59:59', $timezone);

/*    
if($nav_pageCurrent == 'page_PAGINA'):
    if($date_now_actual->getTimestamp() >= $popup_date_start->getTimestamp() && $date_now_actual->getTimestamp() <= $popup_date_end->getTimestamp()) {
        include('pop.inc.php');
    }
endif;

if($nav_pageCurrent_int == 'page_PAGINA_INT'):
    include('pop.inc.php');
endif;

if($nav_pageCurrent == 'page_PAGINA' || $nav_pageCurrent_int == 'page_PAGINA_INT'):
    include('pop.inc.php');
endif;

if($has_pop_video):
    include('pop.video.inc.php');
endif;
*/
?>