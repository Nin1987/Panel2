<?php

class AdminBanerBar
{
    public function __construct()
    {
        $this->save_baner_bar();
        add_action('admin_menu', array($this, 'add_page'));
    }

    public function add_page(): void 
    {
        add_menu_page(
            'Pasek baner',
            'Pasek baner', 
            'manage_options', 
            'baner_bar_nin', 
            array($this, 'base_setings')
        );
    }


    public function base_setings(): void
    {
        $Dbinstall = new Dbinstall();
        $Dbinstall->MakeTables();
        add_action('baner_bar_loop', array($this, 'GetRows'));
        include("templates/base_setings.php");
        
    
    }

    public function GetRows()
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

                for($i = 0; $i< 1; $i++)
                {
                    $main_array = array(
                        'id'=> 0,
                        'li' => $i,
                        'link' => '',
                        'line_1' => '',
                        'line_2' => '',
                        'line_3' => '',
                        'line_4' => '',
                        'photo_url' => wp_get_attachment_url( 6, 'thumbnail' ),
                        'photo_id' => 6
                    );

                    if(isset($table[$i]))
                    {
                        $main_array = array(
                            'id' => $table[$i]->id,
                            'li' => $i,
                            'link' => $table[$i]->link,
                            'line_1' => $table[$i]->line_1,
                            'line_2' => $table[$i]->line_2,
                            'line_3' => $table[$i]->line_3,
                            'line_4' => $table[$i]->line_4,
                            'photo_url' => wp_get_attachment_url( $table[$i]->photo, 'thumbnail' ),
                            'photo_id' => $table[$i]->photo
                        );
                    }
                    $this->GetOneRow($main_array);
                }
    }
    private function GetOneRow(array $data)
    {
        include('templates/one_row.php');
    }
    private function save_baner_bar()
    {
        if(isset($_POST['save_baner_bar']))
        {
            global $wpdb;
            $table_name = $wpdb->prefix.'baner_bar';

            $prepare = array('%d', '%s', '%s', '%s', '%s', '%s');



            for($i = 0; $i< 1; $i++)
            {
                $rows = array(
                    'photo' => $_POST['photo_id_'.$i],
                    'link' => $_POST['url_'.$i],
                    'line_1' => $_POST['line_'.$i.'_1'],
                    'line_2' => $_POST['line_'.$i.'_2'],
                    'line_3' => $_POST['line_'.$i.'_3'],
                    'line_4' => $_POST['line_'.$i.'_4'],
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

add_action('init', function(){$AdminBanerBar = new AdminBanerBar();});