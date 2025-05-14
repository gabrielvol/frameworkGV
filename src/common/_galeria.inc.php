<?php
    $has_lightbox = 1; /* // REF [26] */
    
    $galeria_generic_dir = '/img/section/2025'; 
    $galeria_generic_ext = 'jpg'; 
    $galeria_generic_img_start = 1;
    $galeria_generic_img_total = 17;

    include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/common/galeria.inc.php');
?>

<ul class="galeria unstyled">
    <?php for ($galeria_generic_img_n = $galeria_generic_img_start; $galeria_generic_img_n <= $galeria_generic_img_total; $galeria_generic_img_n++): ?>
        <li>
            <a href="<?php echo $dir_env . $galeria_generic_dir; ?>/<?php echo sprintf('%02d', $galeria_generic_img_n); ?>.<?php echo $galeria_generic_ext; ?>" data-lightbox="galeria" data-title="Galería">
                <img src="<?php echo $dir_env . $galeria_generic_dir; ?>/<?php echo sprintf('%02d', $galeria_generic_img_n); ?>_.<?php echo $galeria_generic_ext; ?>" alt="" />
            </a>
        </li>
    <?php endfor; ?>
</ul>