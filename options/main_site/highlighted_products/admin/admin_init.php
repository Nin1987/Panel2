<?php

class AdminHighlighted
{
    public function __construct()
    {
        $this->save_highlighted_products();
        add_action('admin_menu', array($this, 'add_page'));
    }

    public function add_page(): void 
    {
        add_menu_page(
            'Sekcja wyróżnione kategorie',
            'Sekcja wyróżnione kategorie', 
            'manage_options', 
            'highlighted_products_nin', 
            array($this, 'base_setings')
        );
    }


    public function base_setings(): void
    {
        $Dbinstall = new Dbinstall();
        $Dbinstall->MakeTables();
        add_action('highlighted_admin_loop', array($this, 'GetRows'));
        include("templates/base_setings.php");
        
    
    }

    public function GetRows()
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
                $categories = get_categories(array('taxonomy' => 'product_cat'));
                
                for($i = 0; $i< 3; $i++)
                {
                    $main_array = array(
                        'id'=> 0,
                        'li' => $i,
                        'cat_name' => '',
                        'cat_id' => 0,
                        'categories' => $categories
                    );

                    if(isset($table[$i]))
                    {
                        $main_array = array(
                            'id'=> $table[$i]->id,
                            'li' => $i,
                            'cat_name' => $table[$i]->cat_name,
                            'cat_id' => $table[$i]->cat_id,
                            'categories' => $categories
                        );
                    }
                    $this->GetOneRow($main_array);
                }
    }
    private function GetOneRow(array $data)
    {
        include('templates/one_row.php');
    }
    private function save_highlighted_products()
    {
        if(isset($_POST['save_highlighted_products']))
        {
            global $wpdb;
            $table_name = $wpdb->prefix.'highlighted_products';

            $prepare = array('%s', '%s');



            for($i = 0; $i< 3; $i++)
            {
                $rows = array(
                    'cat_name' => $_POST['cat_name_'.$i],
                    'cat_id' => $_POST['cat_id_'.$i]
                );

                if($_POST['id_'.$i] == 0)
                {
                    $wpdb->insert(
                        $table_name,
                        $rows,
                        $prepare
                    );
                }
                else
                {
                        $wpdb->update(
                        $table_name,
                        $rows,
                        array('id' => $_POST['id_'.$i]),
                        $prepare,
                        array('%d')
                    );
                }
            }
        }
    }
    
}

add_action('init', function(){$AdminHighlighted = new AdminHighlighted();});