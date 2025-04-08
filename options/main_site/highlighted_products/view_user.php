<?php

class Highlighted_products
{
    private $data_h;
    public function __construct()
    {
        $this->css_load();
        $this->get_title();
        $data_h = array();
        $data_h = $this->data_h;
        add_action('highlighted_products_user', array($this, 'make_row'));

        include("templates/template.php");
    }
    public function css_load()
    {
        wp_enqueue_style( 'css-highlighted_products', get_stylesheet_directory_uri() .'/options/main_site/highlighted_products/highlighted_products.css', array(), '1.0', false );
    }

    private function get_title()
    {
        global $wpdb;
        $table_name = $wpdb->prefix.'highlighted_products';

        $table = $wpdb->get_results(
            $wpdb->prepare(
                "SELECT * 
                FROM ".$table_name." 
                
                ",
                array()
                )
                );

            $i =0;
            $this->data_h = array();
            foreach($table as $cat)
            {
                
                $this->data_h[$i] = $cat->cat_name;
                $i++;
            }
    }
    public function make_row(): void
    {
        $products_array = array();

        global $wpdb;
        $table_name = $wpdb->prefix.'highlighted_products';

        $table = $wpdb->get_results(
            $wpdb->prepare(
                "SELECT * 
                FROM ".$table_name." 
                
                ",
                array()
                )
                );

            $i =0;
            foreach($table as $cat)
            {
                $this->data_h = array();
                $this->data_h[$i] = $cat->cat_name;

                $args = array(
                    'post_status' => 'publish',
                    'stock_status' => 'instock',
                    'category' => array($cat->cat_id),
                );
                $products = wc_get_products( $args );
                foreach($products as $product)
                {
                    $price = 0;
                    if(isset($product->price) && $product->price >-1)
                    {
                        $price = $product->price;
                    }

                    
                    $products_array[$i][] = array(
                        'id'=> $product->id,
                        'name' => $product->name,
                        'photo' =>wp_get_attachment_url( $product->image_id, 'thumbnail' ),
                        'price' => $price,
                        'link' => get_permalink($product->id)
                    );
                }
                $i++;
            }


                if(isset($products_array[0]) && is_array($products_array[0]))
                shuffle($products_array[0]);
    
                if(isset($products_array[1]) && is_array($products_array[1]))
                shuffle($products_array[1]);
    
                if(isset($products_array[2]) && is_array($products_array[2]))
                shuffle($products_array[2]);





        echo '<div class="col-11 col-lg-4 text-center highlighted_products_row">';

        for($i=0; $i<3; $i++)
        {
   
            if(isset($products_array[0][$i]))
                $this->one_row($products_array[0][$i]);
        }
        echo "</div>";

        echo '<div class="col-11 col-lg-4 text-center highlighted_products_row">';

        for($i=0; $i<3; $i++)
        {
   
            if(isset($products_array[1][$i]))
                $this->one_row($products_array[1][$i]);
        }
        echo "</div>";

        echo '<div class="col-11 col-lg-4 text-center highlighted_products_row">';

        for($i=0; $i<3; $i++)
        {
   
            if(isset($products_array[2][$i]))
                $this->one_row($products_array[2][$i]);
        }
        echo "</div>";

    }
    private function one_row(array $product): void
    {
        include("templates/one_row.php");
    }
}


add_action("highlighted_products", function(){$view_user = new Highlighted_products();});