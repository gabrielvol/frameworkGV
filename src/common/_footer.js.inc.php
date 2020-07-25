<?php
//<script src="/nuevo/js/smoothScroll.jQuery.js"></script>
?>

<script src="/nuevo/js/_global.js"></script>

<?php
//<script src="/nuevo/js/_topper.js"></script>
?>

<?php        if($nav_accordion_act == 1): // nav `[/var/nav.act.inc.php]` ?>
<script src="/nuevo/js/_nav_accordion.js"></script>

<?php endif; if($nav_drawer_act == 1): // nav `[/var/nav.act.inc.php]` ?>
<script src="/nuevo/js/_nav_drawer.js"></script>

<?php
//<script src="/nuevo/js/slick.js"></script>
//<script src="/nuevo/js/_slick.js"></script>
?>


<?php endif; if($nav_pageCurrent == 0):
    // Home
//<script src="/nuevo/js/aaaaaa.js"></script>
//<script src="/nuevo/js/_aaaaaa.js"></script>
?>

<?php endif; if($nav_pageCurrent == 000):
    // SECTIONNAME
//<script src="/nuevo/js/aaaaaa.js"></script>
//<script src="/nuevo/js/_aaaaaa.js"></script>
?>

<?php endif; if($nav_pageCurrent == 000):
    // Contacto 
//<script src="/nuevo/js/scrollKeep.js"></script>
//<script src="/nuevo/js/_contacto.js"></script>
?>

<?php endif; if($nav_pageCurrent == 000 || $nav_pageCurrent == 000):
    // SECTIONNAME / SECTIONNAME
//<script src="/nuevo/js/scrollKeep.js"></script>
//<script src="/nuevo/js/_contacto.js"></script>
?>

<?php endif; if($load_lightbox == 1):
//<script src="/js/lightbox.min.js"></script>
//<script src="/js/_lightbox.js"></script>
 ?>
<?php endif; ?>