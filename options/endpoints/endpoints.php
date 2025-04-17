<?php

class Endpoints
{
    private $allowed_methods;
    public function __construct()
    {
        $this->allowed_methods = ['add_new_offer'];
        $this->routh();
        $this->routh_pdf();
       
    }
    public function routh()
    {
        add_action( 'rest_api_init', function () {
            register_rest_route( 'panel/v1', '/api', [
                'methods' => 'POST',
                  'callback' => [$this, 'request'],
                  'permission_callback' => '__return_true'
                ] );
        } );
    }
    public function routh_pdf()
    {
        add_action( 'rest_api_init', function () {
            register_rest_route( 'panel/v1', '/pdf', [
                'methods' => 'POST',
                  'callback' => [$this, 'make_pdf'],
                  'permission_callback' => '__return_true'
                ] );
        } );
    }

    public function request($request)
    {
        $data = $request->get_json_params();
        $return=array('error'=> 1, 'message'=> 'asdsd');
        
        if(isset($data['method']) && in_array($data['method'], $this->allowed_methods))
        {
            $method = htmlspecialchars($data['method']);
            
            
            if(method_exists($this, $method))
            {
                if(isset($data['token']) && $data['token'] == 'AboaijSAID89dD8DUhiDHS7a23ibBAIUbd787')
                {
                    $return = $this->$method($data);
                  
                }
                else
                {
                    $return = (array('error'=> 1, 'message'=> 'Zły token.'));
                }
            }
            else
            {
                $return = (array('error'=> 1, 'message'=> 'Złe wywołanie api możliwy atak hakerski.'));
            }
                
        }
        else
        {
            $return = (array('error'=> 1, 'message'=> 'Błąd serwera api '));
        }
            
        return rest_ensure_response(($return));
    }

    private function make_pdf()
    {
        $NinPdf = new NinPdf();
        $NinPdf->test();
        rest_ensure_response([]);
    }
    private function add_new_offer($data)
    {
        $return = (array('error'=> 1, 'message'=> 'Błąd serwera api '));
        
        if($data['curent_id'] > 0 && !empty($data['curent_name']) && !empty($data['curent_address']) && !empty($data['curent_email']) && !empty($data['curent_price']) && !empty($data['salary']) && !empty($data['code_number']))
        {
            $user_id = $data['user_id'];
            if($user_id > 0)
            {
                $curent_id = sanitize_text_field($data['curent_id']);
                $curent_name = sanitize_text_field($data['curent_name']);
                $curent_address = sanitize_text_field($data['curent_address']);
                $curent_email = sanitize_email($data['curent_email']);
                $curent_price = sanitize_text_field($data['curent_price']);
                $salary = sanitize_text_field($data['salary']);
                $code_number = sanitize_text_field($data['code_number']);
    
                $value = ['curent_id' => $curent_id,
                          'curent_name'=>$curent_name,
                            'curent_address'=>$curent_address,
                            'curent_email'=>$curent_email,
                            'curent_price'=>$curent_price,
                            'salary'=>$salary,
                            'code_number'=>$code_number
                        ];
                if(add_user_meta($user_id, 'user_offer_pro', serialize($value))!= false)
                {
                    $return = (array('error'=> 0, 'message'=> 'Dodano ofertę do Twojej listy ofert'));
                }
                else
                {
                    $return = (array('error'=> 1, 'message'=> 'Błąd przy dodawaniu oferty do Twojej listy ofert'));
                }
            }
            else
            {
                $return = (array('error'=> 1, 'message'=> 'Nie jestes zalogowany'.$user_id));
            }
        }
        else
        {
            $return = (array('error'=> 1, 'message'=> 'Brak wymaganych danych'));
        }
            
        return $return;
    }
}

new Endpoints();