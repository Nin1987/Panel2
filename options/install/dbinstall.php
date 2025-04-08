<?php

class Dbinstall
{

    public function MakeTables(): void
    {
        $rows = array(
            'photo INT(32)',
            'link VARCHAR(128)',
            'line_1 VARCHAR(128)',
            'line_2 VARCHAR(128)'
        );
    
        $this->CreateTable('favorite_offers', $rows);

        $rows = array(
            'photo INT(32)',
            'link VARCHAR(128)',
            'line_1 VARCHAR(128)',
            'line_2 VARCHAR(128)',
            'line_3 VARCHAR(128)',
            'line_4 VARCHAR(128)'
        );

        $this->CreateTable('baner_bar', $rows);

        $rows = array(
            'cat_name VARCHAR(128)',
            'cat_id VARCHAR(128)'
        );

        $this->CreateTable('highlighted_products', $rows);

        $rows = array(
            'ip VARCHAR(20)',
            'total_cost VARCHAR(128)',
            'data_cart DATE'
        );

        $this->CreateTable('carts_story', $rows);
    }
    private function CreateTable(string $table_name, array $rows = array()): void
    {
        
        global $wpdb;
        $table_name = $wpdb->prefix.$table_name;
        if(is_array($rows))
        {
            $count = count($rows);
            if($count>0)
            {
                $make_rows ='';
                $i=0;
                foreach ($rows as $row) {
                    $i++;
                    if($count == $i)
                    {
                        $make_rows .= $row;
                    }
                    else
                    {
                        $make_rows .= $row.',';
                    }
                    
                }
                $wpdb->query(
                    $wpdb->prepare(
                        "CREATE TABLE if not exists ".$table_name." (
                            id BIGINT(64) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                            ".$make_rows."
                            );"
                            ,)
                        );
            }
        }
    }
}