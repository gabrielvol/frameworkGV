<?php        
    // -------------------------------------------------------------------------
        //-- YouTube
    $youTubeV__videoA_id             = 'aaaaaaaaaaaa';
    $youTubeV__videoA_src_iframe     = 'https://www.youtube.com/embed/'. $youTubeV__videoA_id;
    $youTubeV__videoA_src_full       = 'https://img.youtube.com/vi/'. $youTubeV__videoA_id .'/0.jpg';
    $youTubeV__videoA_src_th01       = 'https://img.youtube.com/vi/'. $youTubeV__videoA_id .'/1.jpg';
    $youTubeV__videoA_src_th02       = 'https://img.youtube.com/vi/'. $youTubeV__videoA_id .'/2.jpg';
    $youTubeV__videoA_src_th03       = 'https://img.youtube.com/vi/'. $youTubeV__videoA_id .'/3.jpg';
    
    $youTubeV__videoA_src_th_default = 'https://img.youtube.com/vi/'. $youTubeV__videoA_id .'/default.jpg';
    $youTubeV__videoA_src_th_hq      = 'https://img.youtube.com/vi/'. $youTubeV__videoA_id .'/hqdefault.jpg';
    $youTubeV__videoA_src_th_mq      = 'https://img.youtube.com/vi/'. $youTubeV__videoA_id .'/mqdefault.jpg';
    $youTubeV__videoA_src_th_sd      = 'https://img.youtube.com/vi/'. $youTubeV__videoA_id .'/sddefault.jpg';
    $youTubeV__videoA_src_th_max     = 'https://img.youtube.com/vi/'. $youTubeV__videoA_id .'/maxresdefault.jpg';
    
    
    $youTubeV__videoB_id             = 'aaaaaaaaaaaa';
    $youTubeV__videoB_src_iframe     = 'https://www.youtube.com/embed/'. $youTubeV__videoB_id;
    $youTubeV__videoB_src_full       = 'https://img.youtube.com/vi/'. $youTubeV__videoB_id .'/0.jpg';
    $youTubeV__videoB_src_th01       = 'https://img.youtube.com/vi/'. $youTubeV__videoB_id .'/1.jpg';
    $youTubeV__videoB_src_th02       = 'https://img.youtube.com/vi/'. $youTubeV__videoB_id .'/2.jpg';
    $youTubeV__videoB_src_th03       = 'https://img.youtube.com/vi/'. $youTubeV__videoB_id .'/3.jpg';
    
    $youTubeV__videoB_src_th_default = 'https://img.youtube.com/vi/'. $youTubeV__videoB_id .'/default.jpg';
    $youTubeV__videoB_src_th_hq      = 'https://img.youtube.com/vi/'. $youTubeV__videoB_id .'/hqdefault.jpg';
    $youTubeV__videoB_src_th_mq      = 'https://img.youtube.com/vi/'. $youTubeV__videoB_id .'/mqdefault.jpg';
    $youTubeV__videoB_src_th_sd      = 'https://img.youtube.com/vi/'. $youTubeV__videoB_id .'/sddefault.jpg';
    $youTubeV__videoB_src_th_max     = 'https://img.youtube.com/vi/'. $youTubeV__videoB_id .'/maxresdefault.jpg';
    
    
/* =============================================================================
   YouTube thumbnails

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

============================================================================= */
?>