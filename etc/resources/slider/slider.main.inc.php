<?php
    $classes_slider_main  = 'slider_main ';
        
    if($nav_pageCurrent == 'page_index'):
        $classes_slider_main  .= 'slider_main_index ';       
        $slider_main_item_AA  = 'AA'; 
    else:
        $classes_slider_main  .= 'slider_main_int ';
        $slider_main_item_BB  = 'BB';
    endif;
    
    if($nav_pageCurrent == 'page_contacto'):
        // $classes_slider_main  .= 'slider_main_contacto ';
        $slider_main_item_CC    = 'CC';
    
    endif;

        $slider_main_item_01  = '01';
        $slider_main_item_02  = '02';
        $slider_main_item_03  = '03';
        $slider_main_item_04  = '04';
        $slider_main_item_05  = '05';
        $slider_main_item_06  = '06';
        $slider_main_item_07  = '07';
        $slider_main_item_08  = '08';
        $slider_main_item_09  = '09';
        $slider_main_item_10  = '10';
        $slider_main_item_11  = '11';
        $slider_main_item_12  = '12';
        $slider_main_item_13  = '13';
        $slider_main_item_14  = '14';
        $slider_main_item_15  = '15';
        $slider_main_item_16  = '16';
        $slider_main_item_17  = '17';
        $slider_main_item_18  = '18';
        $slider_main_item_19  = '19';
        $slider_main_item_20  = '20';
        /*
        */
    
    include($_SERVER['DOCUMENT_ROOT'] . $dir_env .'/common/slider.header.inc.php');
?>                

<ul class="slick slick_carousel unstyled <?php echo $classes_slider_main; ?>">
    <?php        if(isset($slider_main_item_01)): // Section ?>
    <li><img src="<?php echo $dir_env; ?>/img/slide_main_<?php echo $slider_main_item_01; ?>.jpg" alt="" aria-hidden="true" /></li>
    
    <?php endif; if(isset($slider_main_item_02)): // Section ?>
    <li><img src="<?php echo $dir_env; ?>/img/slide_main_<?php echo $slider_main_item_02; ?>.jpg" alt="" aria-hidden="true" /></li>
    
    <?php endif; if(isset($slider_main_item_03)): // Section ?>
    <li><img src="<?php echo $dir_env; ?>/img/slide_main_<?php echo $slider_main_item_03; ?>.jpg" alt="" aria-hidden="true" /></li>
    
    <?php endif; if(isset($slider_main_item_04)): // Section ?>
    <li><img src="<?php echo $dir_env; ?>/img/slide_main_<?php echo $slider_main_item_04; ?>.jpg" alt="" aria-hidden="true" /></li>
    
    <?php endif; if(isset($slider_main_item_05)): // Section ?>
    <li><img src="<?php echo $dir_env; ?>/img/slide_main_<?php echo $slider_main_item_05; ?>.jpg" alt="" aria-hidden="true" /></li>
    
    <?php endif; if(isset($slider_main_item_06)): // Section ?>
    <li><img src="<?php echo $dir_env; ?>/img/slide_main_<?php echo $slider_main_item_06; ?>.jpg" alt="" aria-hidden="true" /></li>
    
    <?php endif; if(isset($slider_main_item_07)): // Section ?>
    <li><img src="<?php echo $dir_env; ?>/img/slide_main_<?php echo $slider_main_item_07; ?>.jpg" alt="" aria-hidden="true" /></li>
    
    <?php endif; if(isset($slider_main_item_08)): // Section ?>
    <li><img src="<?php echo $dir_env; ?>/img/slide_main_<?php echo $slider_main_item_08; ?>.jpg" alt="" aria-hidden="true" /></li>
    
    <?php endif; if(isset($slider_main_item_09)): // Section ?>
    <li><img src="<?php echo $dir_env; ?>/img/slide_main_<?php echo $slider_main_item_09; ?>.jpg" alt="" aria-hidden="true" /></li>
    
    <?php endif; if(isset($slider_main_item_10)): // Section ?>
    <li><img src="<?php echo $dir_env; ?>/img/slide_main_<?php echo $slider_main_item_10; ?>.jpg" alt="" aria-hidden="true" /></li>
    
    <?php endif; if(isset($slider_main_item_11)): // Section ?>
    <li><img src="<?php echo $dir_env; ?>/img/slide_main_<?php echo $slider_main_item_11; ?>.jpg" alt="" aria-hidden="true" /></li>
    
    <?php endif; if(isset($slider_main_item_12)): // Section ?>
    <li><img src="<?php echo $dir_env; ?>/img/slide_main_<?php echo $slider_main_item_12; ?>.jpg" alt="" aria-hidden="true" /></li>
    
    <?php endif; if(isset($slider_main_item_13)): // Section ?>
    <li><img src="<?php echo $dir_env; ?>/img/slide_main_<?php echo $slider_main_item_13; ?>.jpg" alt="" aria-hidden="true" /></li>
    
    <?php endif; if(isset($slider_main_item_14)): // Section ?>
    <li><img src="<?php echo $dir_env; ?>/img/slide_main_<?php echo $slider_main_item_14; ?>.jpg" alt="" aria-hidden="true" /></li>
    
    <?php endif; if(isset($slider_main_item_15)): // Section ?>
    <li><img src="<?php echo $dir_env; ?>/img/slide_main_<?php echo $slider_main_item_15; ?>.jpg" alt="" aria-hidden="true" /></li>
    
    <?php endif; if(isset($slider_main_item_16)): // Section ?>
    <li><img src="<?php echo $dir_env; ?>/img/slide_main_<?php echo $slider_main_item_16; ?>.jpg" alt="" aria-hidden="true" /></li>
    
    <?php endif; if(isset($slider_main_item_17)): // Section ?>
    <li><img src="<?php echo $dir_env; ?>/img/slide_main_<?php echo $slider_main_item_17; ?>.jpg" alt="" aria-hidden="true" /></li>
    
    <?php endif; if(isset($slider_main_item_18)): // Section ?>
    <li><img src="<?php echo $dir_env; ?>/img/slide_main_<?php echo $slider_main_item_18; ?>.jpg" alt="" aria-hidden="true" /></li>
    
    <?php endif; if(isset($slider_main_item_19)): // Section ?>
    <li><img src="<?php echo $dir_env; ?>/img/slide_main_<?php echo $slider_main_item_19; ?>.jpg" alt="" aria-hidden="true" /></li>
    
    <?php endif; if(isset($slider_main_item_20)): // Section ?>
    <li><img src="<?php echo $dir_env; ?>/img/slide_main_<?php echo $slider_main_item_20; ?>.jpg" alt="" aria-hidden="true" /></li>
    <?php endif; ?>
</ul>