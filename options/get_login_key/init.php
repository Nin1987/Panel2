<?php 

class get_login_key
{
    private $site_key, $url;
    public function __construct()
    {
        $this->site_key = 'hfuYt6Ygidwkl29Mmwi28839bb';
        $this->url="https://sklep.megawebsite.pl/wp-json/pro_api/v1/panel";
    }
    public function get_login_key($user_id)
    {
        $ip =0;
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }

        $post_data = json_encode(array('method' => 'get_secret_key',
                        'site_key'=> $this->site_key,
                        'ip'=> $ip,
                        'user_id'=> $user_id
                        ));


        $ch = curl_init($this->url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST"); 
        curl_setopt($ch, CURLOPT_POSTFIELDS, ($post_data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json',
        'Content-Length: ' . strlen($post_data)));
        // set the POST data, corresponding method and headers:
        
        // send the request and get the response
        $server_output = curl_exec($ch);
        curl_close($ch);
        return $server_output;
    }
}