<?php

class Popular_products
{
    public function __construct()
    {
        $this->css_load();
        add_action('popular_rows', array($this, 'make_row'));

        include("template.php");
      
    }
    public function css_load(): void
    {
        wp_enqueue_style( 'css-popular-products', get_stylesheet_directory_uri() .'/options/main_site/popular_products/popular_products.css', array(), '1.0', false );
    }
    public function make_row(): void
    {
        $products_array = array();

        $args = array(
            'post_status' => 'publish',
            'stock_status' => 'instock',
            'meta_key' =>'product_visit_count',
            'orderby' => 'meta_value_num',
            'order' => 'DESC',
        );
        $products = wc_get_products( $args );

       // var_dump($products);

        foreach($products as $product)
        {
            $products_array[] = array(
                'id'=> $product->id,
                'name' => $product->name,
                'photo' =>wp_get_attachment_url( $product->image_id, 'thumbnail' ),
                'price' => $product->price,
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


add_action("popular_products", function(){$view_user = new Popular_products();});