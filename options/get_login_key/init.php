<?php 

class get_login_key
{
    private $site_key, $url;
    public function __construct()
    {
        $this->site_key = 'hfuYt6Ygidwkl29Mmwi28839bb';
        $this->url="https://sklep.megawebsite.pl/wp-json/pro_api/v1/panel";
    }
    public function get_login_key()
    {
        $ip =0;
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }

        $post_data = array('method' => 'get_secret_key',
                        'site_key'=> $this->site_key,
                        'ip'=> $ip,
                        'user_id'=> wp_get_current_user()->ID
                        );


        $ch = curl_init($this->url);
        // return the response instead of sending it to stdout:
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        //curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        // set the POST data, corresponding method and headers:
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));
        // send the request and get the response
        $server_output = curl_exec($ch);

        return $server_output;
    }
}