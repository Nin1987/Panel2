<?php

namespace PdfFiles\Nin;
if ( ! defined( 'ABSPATH' ) ) {
	exit; 
}
class Admin
{
    public function __construct()
    {
        add_action( 'admin_init', array($this, 'init_box' ));
        add_action( 'save_post', array($this, 'save_pdf' ));
        
        
    }
    public function init_box()
    {
        add_meta_box(
            'pdf_files_nin',
             'Pliki PDF',
            array($this, 'init_new_bar'),
            'product', 
            'normal',
            'core'
        );
        wp_enqueue_script('pdf_file_nin_admin', get_stylesheet_directory_uri().'/pdf_files/dist/js/js_admin.js');
    }    

    public function save_pdf($post_id): void
    {
           if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
                return;
            }
           
            $this->save_one_post_meta('hidden_pdf_id','pdf_file_nin', $post_id);
    }
    private function save_one_post_meta($post_value, $meta_key, $post_id)
    {
        if(isset($_POST[$post_value]))
        {
            update_post_meta( $post_id, $meta_key, $_POST[$post_value] );
        }
    }
    public function init_new_bar()
        {
            
            $id = $_GET['post'];
            $pdf_id = 0;
            $pdf_value = 'Brak pliku';

            $get_post_meta = get_post_meta( $id, 'pdf_file_nin', true );
            if(isset($get_post_meta) && $get_post_meta > 0)
            {
                $pdf_id = $get_post_meta;
                $url = wp_get_attachment_url( $pdf_id, 'thumbnail' );
                $pdf_value = 'Dodano plik <a href="'.$url.'" target="_blank">Plik</a>';
            }
        
            ?>
                    <div class="row" style="margin-top: 0.5rem;">
                        <div class="col">
                            
                        <button type="button" onclick="open_media_uploader_image_plus(this);" name = "pdf_button" id="pdf_button">Wybierz plik</button>
                            <label for="pdf_button"><strong id="label_pdf_button"><?=$pdf_value;?></strong></label>
                            <input type = "hidden" id="hidden_pdf_id" name="hidden_pdf_id" value="<?=$pdf_id;?>"/>
                        </div>
                    </div>


                <?php
        }
}