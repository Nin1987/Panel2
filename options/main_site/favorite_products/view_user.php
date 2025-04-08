<?php

class Favorite_products
{
    public function __construct()
    {
        $this->css_load();
        add_action('favorite_roows', array($this, 'make_row'));
        include("templates/template.php");
    }
    public function css_load()
    {
        wp_enqueue_style( 'css-favorite', get_stylesheet_directory_uri() .'/options/main_site/favorite_products/favorite.css', array(), '1.0', false );
    }

    public function make_row(): void
    {
        global $wpdb;
        $table_name = $wpdb->prefix.'favorite_offers';

        $table = $wpdb->get_results(
            $wpdb->prepare(
                "SELECT * 
                FROM ".$table_name." 
                
                ",
                array()
                )
                );

        $i=0;
        $color= 'fc-light-green';

        foreach($table as $row)
        {
            switch ($i) {
                case '0':
                    $color = 'fc-light-green';
                    break;
                    case '1':
                        $color = 'fc-light-blue';
                        break;
                        case '2':
                            $color = 'fc-light-draft';
                            break;                
            }
            $data = array(
                'link' => $row->link,
                'line_1' => $row->line_1,
                'line_2' => $row->line_2,
                'photo' => wp_get_attachment_url( $row->photo, 'thumbnail' ),
                'color'=>$color
            );

            $this->one_row($data);
            $i++;
        }
    }
    private function one_row(array $data): void
    {
        include("templates/one_row.php");
    }

}


add_action("favorite_products", function(){$view_user = new Favorite_products();});