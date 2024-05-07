<?php
/*

include($_SERVER['DOCUMENT_ROOT'] . $dir_env . '/gettext/languageCheck.inc.php');
    
if(empty($_GET['l'])){
    $l = 'es';
} else {
    $l = $_GET['l'];
}

global $l;

*/

function my_custom_scripts() {
    wp_enqueue_style( 'parent', get_template_directory_uri() . '/style.css' );
    wp_enqueue_script( 'custom', get_stylesheet_directory_uri() . '/nav.js', array( 'jquery' ),'',true );
}
add_action( 'wp_enqueue_scripts', 'my_custom_scripts' );


/*
function add_custom_query_var( $l ){   
    $l[] = "l";

    $l = $_GET['l'];

    global $l; 

    return $l;
}
add_filter( 'query_vars', 'add_custom_query_var' );


function gv_lang() {
    if ( isset( $_GET['l'] ) ) {
        $l = $_GET['l'];
        global $l;
    }
}
add_action('wp_loaded','gv_lang');

function add_get_val() {
    $l = $_GET['l'];

    $l->add_query_var('l'); 
}
add_action('init','add_get_val');
*/

function wpb_change_search_url() {
    if ( is_search() && ! empty( $_GET['s'] ) ) {
    /*
    if ( is_search() && ! empty( $_GET['s'] ) && $l == 'en' ) {
    *
    if ( is_search() && ! empty( $_GET['s'] ) && ! empty( $_GET['s'] ) ) {
    */
        wp_redirect( home_url( "/search/" ) . urlencode( get_query_var( 's' ) ) );

        /*
        *
        wp_redirect( home_url( "/search/" ) . urlencode( get_query_var( 's' ) ) . '/?l=' . esc_url( $l ) );
        *
        *
        wp_redirect( home_url( "/search/" ) . urlencode( get_query_var( 's' ) ) . '/?l=' . $GLOBALS['l'] );
        *
        *
        wp_redirect( home_url( "/search/" ) . urlencode( get_query_var( 's' ) ) . '/' . $gettext_idioma_url );
        * 
        *
        wp_redirect( home_url( "/search/" ) . urlencode( get_query_var( 's' ) ) . '/?l=' . get_query_var( 'l' ) );

*/
        exit();
    }
}
add_action( 'template_redirect', 'wpb_change_search_url' );