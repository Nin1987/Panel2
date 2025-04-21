<?php

class Oferty
{
    private $user_id;
    public function __construct()
    {
        $this->user_id = wp_get_current_user()->ID;
    }

    public function get_my_offers()
    {
        if($this->user_id > 0)
        {
            global $wpdb;

            $table_name = $wpdb->prefix.'usermeta';

            $usermeta_table = $wpdb->get_results(
                $wpdb->prepare(
                    "SELECT * 
                    FROM ".$table_name." 
                    WHERE user_id = %d AND meta_key = %s
                    ",
                    $this->user_id, 'user_offer_pro',
                    OBJECT
                    )
                );

                if(is_array($usermeta_table))
                {
                    $i = 1;
                    foreach($usermeta_table as $usermeta)
                    {
                        $value = unserialize($usermeta->meta_value);
                        $lp = $i;

                        $status = 'Niezidentyfikowany';
                        switch ($value["status"]) {
                            case 2:
                                $status = 'Otwarta';
                                break;
                            case 3:
                                $status = 'Zamknięta';
                                break;
                            case 4:
                                $status = 'Usunięta';
                                break;
                        }

                        $current_name = $value['curent_name'];
                        $current_adrres = $value['curent_address'];
                        $current_mail = $value['curent_email'];
                        $current_price = $value['curent_price'];
                        $yor_salary = $value['salary'];
                        $offert_id = $value['code_number'];
                        $status = $status;
                        include(get_template_directory().'/template/panel/oferty_lista.php');
                        $i++;
                        
                    }
                }
                
        }
    }
}