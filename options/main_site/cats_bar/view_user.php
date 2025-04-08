<?php

class CatsBar
{
    public function __construct()
    {
        $this->load_css();
        include("template.php");
    }

    public function load_css()
    { 
        wp_enqueue_style( 'css-cats_bar', get_stylesheet_directory_uri() .'/options/main_site/cats_bar/cats.css', array(), '1.0', false );
    }
}

add_action("cats_bar", function(){$view_user = new CatsBar();});