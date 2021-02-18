<?php
    /* // Site language ----------------------------------------------------- */
    $site_lang_code             = 'es';
    $site_lang_code_country     = 'AR';
    $site_lang_locale           = $site_lang_code .'_'. $site_lang_code_country;
    $site_lang_HTML_attr        = $site_lang_code .'-'. $site_lang_code_country;
    
    
    /* // Site titles ------------------------------------------------------- */
    $site_name_full             = 'SiteNameFull';
    $site_name_short            = 'SiteNameShort';
    $site_name_title            = 'SiteNameTitle';
    $site_name_tag              = 'SiteNameTag';
    
    $site_name_full_GB          = 'SiteNameFull';
    $site_name_short_GB         = 'SiteNameShort';
    $site_name_title_GB         = 'SiteNameTitle';
    $site_name_tag_GB           = 'SiteNameTag';
    

    /* // Site descriptions ------------------------------------------------- */
    $site_desc_global           = '';
    $site_desc_global_GB        = '';
    

    /* // Open Graph meta --------------------------------------------------- */        
    // Max 35 char                                                   ·
    //                                 123456789-123456789-123456789-12345 
    $openGraph_title_global         = '';
    $openGraph_title_global_GB      = '';
    
    $openGraph_siteName_global      = $openGraph_title_global;    
    $openGraph_siteName_global_GB   = $openGraph_title_global_GB;
    
    // Max 65 char                                                                                 ·
    //                             123456789-123456789-123456789-123456789-123456789-123456789-12345 
    $openGraph_desc_global      = '';
    $openGraph_desc_global_GB   = '';
    
    $openGraph_url              = $url_openGraph_global;
    $openGraph_type             = 'website';
    
    $openGraph_url_img_sq           = $url_openGraph_global .'/og_img_sq.jpg';
    $openGraph_url_img_sq_secure    = $openGraph_url_img_sq;
    $openGraph_img_sq_width         = '1000';
    $openGraph_img_sq_height        = '1000';
    
    $openGraph_url_img_big          = $url_openGraph_global .'/og_img_big.jpg';
    $openGraph_url_img_big_secure   = $openGraph_url_img_big;
    $openGraph_img_big_width        = '1200';
    $openGraph_img_big_height       = '630';
?>