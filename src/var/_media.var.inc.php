<?php
/* * NombreDeProyecto * ========================================================
   Media Variables [/src/var/media.var.inc.php]
   ========================================================================== */

/* // Descripcion ----------------------------------------------------------- */



/* // Referencias globales de nombres de variables y mixins ----------------- */
///-- Inicio del nombre
// bd                   = borde
// bg                   = fondo / background
// bx                   = box
// ft                   = fuente
// mq                   = media query @media
// tx                   = texto

///-- Fin del nombre
// _mx                  = mixin
// _act                 = activacion
// _ani                 = animacion
// _hs                  = hash
// _hover               = se usa con pseudoclases :focus y :hover
// _before              = se usa con pseudoelementos ::before
// _after               = se usa con pseudoelementos ::after

///-- Espaciado
// P, M                 = padding, margin
// T, R, B, L           = top, right, bottom, left
// H, V, A, X           = horizontal, vertical, all, custom defined

///-- Tamanos de Pantalla
// M, T, D, DL          = mobile, tablet, desktop, desktop large
// B, A, O, L           = before, after, only, landscape

///-- Colores
// X, L, D              = extra, light, dark
// De, S, B             = desaturated, semi, bright

///-- Fuentes
// T, L, M, R, B, BK    = thin, light, medium, regular, bold, black
// X, S, U, C, I        = extra, semi, ultra, condensed, italic



/* // YouTube iframe &amp; Thumbnail URLS ----------------------------------- */
    $media__NOMBREVIDEO_id             = 'aaaaaaaaaaa';
    $media__NOMBREVIDEO_src_iframe     = 'https://www.youtube-nocookie.com/embed/'. $media__NOMBREVIDEO_id .'?&amp;autoplay=1&amp;controls=0&amp;showinfo=0&amp;rel=0&amp;loop=1&amp;mute=1&amp;playlist='. $media__NOMBREVIDEO_id; 
    $media__NOMBREVIDEO_src_full       = 'https://img.youtube.com/vi/'. $media__NOMBREVIDEO_id .'/0.jpg';
    $media__NOMBREVIDEO_src_th01       = 'https://img.youtube.com/vi/'. $media__NOMBREVIDEO_id .'/1.jpg';
    $media__NOMBREVIDEO_src_th02       = 'https://img.youtube.com/vi/'. $media__NOMBREVIDEO_id .'/2.jpg';
    $media__NOMBREVIDEO_src_th03       = 'https://img.youtube.com/vi/'. $media__NOMBREVIDEO_id .'/3.jpg';
    
    $media__NOMBREVIDEO_src_th_default = 'https://img.youtube.com/vi/'. $media__NOMBREVIDEO_id .'/default.jpg';
    $media__NOMBREVIDEO_src_th_hq      = 'https://img.youtube.com/vi/'. $media__NOMBREVIDEO_id .'/hqdefault.jpg';
    $media__NOMBREVIDEO_src_th_mq      = 'https://img.youtube.com/vi/'. $media__NOMBREVIDEO_id .'/mqdefault.jpg';
    $media__NOMBREVIDEO_src_th_sd      = 'https://img.youtube.com/vi/'. $media__NOMBREVIDEO_id .'/sddefault.jpg';
    $media__NOMBREVIDEO_src_th_max     = 'https://img.youtube.com/vi/'. $media__NOMBREVIDEO_id .'/maxresdefault.jpg';
    
    
//    $media__NOMBREVIDEO_id             = 'aaaaaaaaaaaa';
//    $media__NOMBREVIDEO_src_iframe     = 'https://www.youtube-nocookie.com/embed/'. $media__NOMBREVIDEO_id . '?&amp;autoplay=1&amp;controls=0&amp;showinfo=0&amp;rel=0&amp;loop=1&amp;mute=1&amp;playlist='. $media__NOMBREVIDEO_id;
//    $media__NOMBREVIDEO_src_full       = 'https://img.youtube.com/vi/'. $media__NOMBREVIDEO_id .'/0.jpg';
//    $media__NOMBREVIDEO_src_th01       = 'https://img.youtube.com/vi/'. $media__NOMBREVIDEO_id .'/1.jpg';
//    $media__NOMBREVIDEO_src_th02       = 'https://img.youtube.com/vi/'. $media__NOMBREVIDEO_id .'/2.jpg';
//    $media__NOMBREVIDEO_src_th03       = 'https://img.youtube.com/vi/'. $media__NOMBREVIDEO_id .'/3.jpg';
    
//    $media__NOMBREVIDEO_src_th_default = 'https://img.youtube.com/vi/'. $media__NOMBREVIDEO_id .'/default.jpg';
//    $media__NOMBREVIDEO_src_th_hq      = 'https://img.youtube.com/vi/'. $media__NOMBREVIDEO_id .'/hqdefault.jpg';
//    $media__NOMBREVIDEO_src_th_mq      = 'https://img.youtube.com/vi/'. $media__NOMBREVIDEO_id .'/mqdefault.jpg';
//    $media__NOMBREVIDEO_src_th_sd      = 'https://img.youtube.com/vi/'. $media__NOMBREVIDEO_id .'/sddefault.jpg';
//    $media__NOMBREVIDEO_src_th_max     = 'https://img.youtube.com/vi/'. $media__NOMBREVIDEO_id .'/maxresdefault.jpg';
    
    

/* // Explanation --------------------------------------------------------------

Each YouTube video has 4 generated images. They are predictably formatted as follows:

https://img.youtube.com/vi/aaaaaaaaaaaaaaaaaa/0.jpg
https://img.youtube.com/vi/aaaaaaaaaaaaaaaaaa/1.jpg
https://img.youtube.com/vi/aaaaaaaaaaaaaaaaaa/2.jpg
https://img.youtube.com/vi/aaaaaaaaaaaaaaaaaa/3.jpg

The first one in the list is a full size image and others are thumbnail images.
The default thumbnail image (ie. one of 1.jpg, 2.jpg, 3.jpg) is:
https://img.youtube.com/vi/<insert-youtube-video-id-here>/default.jpg

For the high quality version of the thumbnail use a url similar to this:
https://img.youtube.com/vi/<insert-youtube-video-id-here>/hqdefault.jpg

There is also a medium quality version of the thumbnail, using a url similar to the HQ:
https://img.youtube.com/vi/<insert-youtube-video-id-here>/mqdefault.jpg

For the standard definition version of the thumbnail, use a url similar to this:
https://img.youtube.com/vi/<insert-youtube-video-id-here>/sddefault.jpg

For the maximum resolution version of the thumbnail use a url similar to this:
https://img.youtube.com/vi/<insert-youtube-video-id-here>/maxresdefault.jpg

All of the above urls are available over http too.
Additionally, the slightly shorter hostname i3.ytimg.com works in place of img.youtube.com in the example urls above.



https://img.youtube.com/vi/aaaaaaaaaaaaaaaaaa/0.jpg
https://img.youtube.com/vi/aaaaaaaaaaaaaaaaaa/1.jpg
https://img.youtube.com/vi/aaaaaaaaaaaaaaaaaa/2.jpg
https://img.youtube.com/vi/aaaaaaaaaaaaaaaaaa/3.jpg
https://img.youtube.com/vi/aaaaaaaaaaaaaaaaaa/default.jpg
https://img.youtube.com/vi/aaaaaaaaaaaaaaaaaa/hqdefault.jpg
https://img.youtube.com/vi/aaaaaaaaaaaaaaaaaa/mqdefault.jpg
https://img.youtube.com/vi/aaaaaaaaaaaaaaaaaa/sddefault.jpg
https://img.youtube.com/vi/aaaaaaaaaaaaaaaaaa/maxresdefault.jpg

----------------------------------------------------------------------------- */
?>