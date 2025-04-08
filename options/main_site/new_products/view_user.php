<?php

class New_products
{
    public function __construct()
    {
        $this->css_load();
        add_action('new_products_rows', array($this, 'make_row'));
        include("template.php");
    }
    public function css_load()
    {
        wp_enqueue_style( 'css-new-products', get_stylesheet_directory_uri() .'/options/main_site/new_products/new_products.css', array(), '1.0', false );
    }
    public function make_row(): void
    {
        $products_array = array();

        $args = array(
            'post_status' => 'publish',
            'stock_status' => 'instock',
        );
        $products = wc_get_products( $args );


        foreach($products as $product)
        {
            $price = 0;
            if(isset($product->price) && $product->price >-1)
            {
                $price = $product->price;
            }

            $products_array[] = array(
                'id'=> $product->id,
                'name' => $product->name,
                'photo' =>wp_get_attachment_url( $product->image_id, 'thumbnail' ),
                'price' => $price,
                'link' => get_permalink($product->id)
    
    );
        }



        for($i=0; $i<9; $i++)
        {
            if($i ==0)
                echo '<div class="row popular_row justify-content-center">';
                
            if(isset($products_array[$i]))
                $this->one_row($products_array[$i]);

            if($i == 2 || $i == 5)
            {
                echo "</div>";
                echo '<div class="row popular_row justify-content-center">';
            }

            
        }
        echo "</div>";

    }
    private function one_row(array $product): void
    {
        include("templates/one_row.php");
    }
}


add_action("new_products", function(){$view_user = new New_products();});