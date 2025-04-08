<?php

namespace PdfFiles\Nin;
if ( ! defined( 'ABSPATH' ) ) {
	exit; 
}

class User
{
    public function __construct()
    {
        wp_enqueue_style('pdf_file_nin_css', get_stylesheet_directory_uri().'/pdf_files/dist/css/user_css.css');
        add_action('woocommerce_product_meta_end', array($this, 'init_view'));
        
    }
    
    public function init_view()
    {
        global $post;
        $get_post_meta = get_post_meta( $post->ID, 'pdf_file_nin', true );

        if(isset($get_post_meta) && $get_post_meta > 0)
        {
            $pdf_id = $get_post_meta;
            $url = wp_get_attachment_url( $pdf_id, 'thumbnail' );
            ?>
            <div style="margin-top:2rem;"><a href="<?=$url;?>" target="_blank"><span class="pdf_svg"></span>Specyfikacja PDF</a></div>
            <?php
        }
    }
}