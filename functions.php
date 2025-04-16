<?php

require('options/init.php');
function add_js()
{
    wp_enqueue_script( 'jquery-nin', 'https://code.jquery.com/jquery-3.7.0.min.js', array(), '3.7', false );
    wp_enqueue_script( 'js-bootstrap', get_stylesheet_directory_uri() . '/dist/bootstrap/js/bootstrap.min.js', array(), '5.0', false );
    wp_enqueue_script("popper", "https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js", array(), '2.9.2', false);
    wp_enqueue_script("menu-js", get_stylesheet_directory_uri() . '/dist/js/menu.js', array(), '1.0', false);

}
add_action('wp_enqueue_scripts', 'add_js', 25);

function add_css()
{
    wp_enqueue_style( 'css-bootstrap', get_stylesheet_directory_uri() . '/dist/bootstrap/css/bootstrap.min.css', array(), '5.0', false );
    wp_enqueue_style( 'css-style', get_stylesheet_directory_uri() . '/style.css', array(), '1.0', false );
    wp_enqueue_style( 'css-body', get_stylesheet_directory_uri() . '/dist/css/body.css', array(), '1.0', false );
    wp_enqueue_style( 'css-fonts', get_stylesheet_directory_uri() . '/dist/css/fonts.css', array(), '1.0', false );
}
add_action( 'wp_enqueue_scripts', 'add_css', 10 );

add_action('init', function()
{   
    add_rewrite_rule( 'panel/([a-zA-Z0-9-]+)/([a-zA-Z0-9-]+)?$', 'index.php?panel=$matches[1]&sub_panel=$matches[2]', 'top' );
    add_rewrite_rule( 'panel/([a-zA-Z0-9-]+)?$', 'index.php?panel=$matches[1]', 'top' );
});
add_filter( 'query_vars', function( $query_vars ) {
    $query_vars[] = 'panel';
    $query_vars[] = 'sub_panel';
    return $query_vars;
} );

add_filter( 'template_include', function( $template ) {
    $templ='portfel';

    if ( get_query_var( 'panel' ) == false || get_query_var( 'panel' ) == '' ) {
        
        return $template;
    }
    else
    {
        $templ = get_query_var( 'panel' );
    }
    if ( get_query_var( 'sub_panel' ) != false || get_query_var( 'sub_panel' ) != '' ) {
        
        $templ = get_query_var( 'panel' ).'_'.get_query_var( 'sub_panel' );
    }


    return get_template_directory() . '/template/panel/'.$templ.'.php';
} );

define('SITE', '/panel');

function my_login_form()
{
    include(get_template_directory() . "/template/panel/form_login.php");
}

add_action('my_login_form', 'my_login_form');

function instal_cookie($user_login, $user)
{ 
    $get_login_key = new get_login_key();
    $auth =$get_login_key ->get_login_key($user->ID);
    $json = json_decode($auth);
       
    if($json->error == 0)
    {
        setcookie( 'auth_key', $json->auth, time() + 3600, COOKIEPATH, COOKIE_DOMAIN   );
        setcookie( 'myid', wp_get_current_user()->ID, time() + 3600, COOKIEPATH, COOKIE_DOMAIN   );
    }
}
add_action('wp_login', 'instal_cookie', 50, 2);

$ip =0;
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}

define("IP_USER", $ip);