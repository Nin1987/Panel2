<?php

class Baner_bar
{
    public function __construct()
    {
        $this->css_load();
        add_action('baner_bar_roows', array($this, 'make_row'));
        include("templates/template.php");
    }
    public function css_load()
    {
        wp_enqueue_style( 'css-new-products', get_stylesheet_directory_uri() .'/options/main_site/baner_bar/baner_bar.css', array(), '1.0', false );
    }

    public function make_row(): void
    {
        global $wpdb;
        $table_name = $wpdb->prefix.'baner_bar';

        $table = $wpdb->get_results(
            $wpdb->prepare(
                "SELECT * 
                FROM ".$table_name." 
                
                ",
                array()
                )
                );

        foreach($table as $row)
        {
            $data = array(
                'link' => $row->link,
                'line_1' => $row->line_1,
                'line_2' => $row->line_2,
                'line_3' => $row->line_3,
                'line_4' => $row->line_4,
                'photo' => wp_get_attachment_url( $row->photo, 'thumbnail' )
            );

            $this->one_row($data);
        }
    }
    private function one_row(array $data): void
    {
        include("templates/one_row.php");
    }
}


add_action("baner_bar", function(){$view_user = new Baner_bar();});