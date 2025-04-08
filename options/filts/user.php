<?php

namespace Filtrs\Nin;

use Polzoo\Nin\classDb;
if ( ! defined( 'ABSPATH' ) ) {
	exit; 
}
class User extends classDb
{
    public function __construct()
    {
        //add_filter( 'query_vars', array($this, 'add_query_vars_filter' ));
        add_action('wp_enqueue_scripts', array($this, 'load_css_js'));
        add_action('woocommerce_archive_description', array($this, 'product_filter_plugin_shortcode'), 10);
       // add_action('init', array($this, 'product_filter_plugin_shortcode'), 10);
        add_filter('pre_get_posts', array($this, 'filter_from_product_description'), 10, 1 );
    }

    public function product_filter_plugin_shortcode(): void {
    

        ?>
        <button type="button" id="filters_button" class="button-light-blue" style="margin-bottom:1rem;">Filtry</button>

        
        <?php
        $filters_names = $this->get_filtrs();
       // $filters_names = array();
        $url = $_SERVER['REQUEST_URI'];
        $url = explode('?', $url);
        $url = $url[0];
       
        include('templates/filt_template.php');
    
    }
    public function load_css_js(): void {
        wp_enqueue_script('product-filter-script-nin', get_stylesheet_directory_uri().'/options/filts/templates/js/ss.js', array('jquery'), '1.0.0', true);
        wp_enqueue_style('product-filter-style-nin', get_stylesheet_directory_uri().'/options/filts/templates/css/css.css', array(), '1.0.0');
    }

    public function filter_from_product_description($query ): void {

        if(isset($_GET['filtrs_nin']) && $_GET['filtrs_nin'] == 'yes')
        {
            $filtered_product_ids = array();
            $filters_names = $this->get_filtrs(); //lista filtrow
            $stop=true;
            $obj = $this->my_products_loop('product');//lista produktow

            foreach($obj as $product)
            {
                $id = $product->ID;
                $product_ok = 0;
                $attrybuts = $this->get_one_records('postmeta', 'meta_value', "WHERE post_id = %d AND meta_key = %s", array($id, '_product_attributes'));
                $attrybuts =unserialize($attrybuts);
                $i =0;
                foreach($filters_names as $f_name)
                {
                    if( $i== 0)
                    {
                        $filtered_product_ids[]=0;
                    }

                    $atr_index ='';
                    if(isset($f_name['name']))
                        $atr_index = $f_name['name'];
                
                    if( (isset($_GET[$atr_index]) && ! empty($_GET[$atr_index])) || (isset($_GET['waga_od']) && ! empty($_GET['waga_od'])) || (isset($_GET['waga_do']) && ! empty($_GET['waga_do'])))
                    {
                        $od =0;
                        $do =0;
                        if(isset($_GET['waga_od']) || isset($_GET['waga_do']))
                        {
                            $od =$_GET['waga_od'];
                            $do =$_GET['waga_do'];
                        }
                        else
                        {
                            $string = esc_attr($_GET[$atr_index]);
                        }
                        
                        
                        if(is_array($attrybuts))
                        {
                            foreach($attrybuts as $value)
                            {
                                foreach($value as $row)
                                {
                                    
                                    if(isset($_GET['waga_od']) || isset($_GET['waga_do']))
                                    {
                                        if($f_name['label'] == 'waga')
                                        {
                                            $term_slug1 = get_the_terms($id, 'pa_waga');
                                            if($term_slug1)
                                            {
                                                $term_slug1 = $term_slug1[0]->slug;
                                                $nie=false;
                                                if($od > 0)
                                                {
                                                    if($od > $term_slug1)
                                                    {
                                                        $stop = false;
                                                        $product_ok++;
                                                        $nie=true;
                                                    }
                                                }
                                                if($do > 0)
                                                {
                                                    if($do <$term_slug1)
                                                    {
                                                        $stop = false;
                                                        $product_ok++;
                                                        $nie=true;
                                                    }
                                                }
                                            if(!$nie)
                                            {
                                                $filtered_product_ids[] = $id;
                                            }
                                            }

                                        }

                
                                    }
                                    else
                                    {
                                        $term_slug = get_the_terms($id, $row['name'])[0]->slug;
                                        if($term_slug == $string && $row['name'] == $f_name['name'])
                                        {
                                            $stop = false;
                                            $product_ok++;
                                        }
                                    }
                                    

                                }
                            }
                        }
                    }
                    else
                    {
                        $stop = false;
                        $product_ok++;
                    }
                    $i++;
                }

                
                if($product_ok == count($filters_names))
                {
                    $filtered_product_ids[] = $id;
                }
                
            }

            if($stop)
            {
                $filtered_product_ids = array(0);
            }
            if(count($filtered_product_ids) > 0)
            {
                $navy = $this->my_products_loop('nav_menu_item');

                foreach($navy as $nav)
                {
                    $filtered_product_ids[] = $nav->ID;
                }
            }
            if(isset($_GET['filtrs_nin']) && $_GET['filtrs_nin'] == 'yes')
            { 
                $query->set('post__in', $filtered_product_ids);
            }
        }
    }

    public function add_query_vars_filter( $vars ){
        $tab = $this->get_filtrs();

        foreach($tab as $row)
        {
            $vars[] = $row['name'];
        }
        
        return $vars;
   }
   
    private function get_filtrs(): array
    {
        $attrybuts_tables =  $this->get_many_records('woocommerce_attribute_taxonomies', '', '');
        $attrybuts_table = array();
        
        foreach($attrybuts_tables as $attrybut)
        {
            
            $terms = get_terms( array(
                'taxonomy'   => 'pa_'.$attrybut->attribute_name,
                'hide_empty' => false,
            ) );
            $options = array();
            foreach($terms as $term)
            {
                $options[] = array($term->name, $term->slug);
            }
           
           $attrybuts_table[] = array('name'=> $attrybut->attribute_label, 'label'=> $attrybut->attribute_name, 'options'=> $options);
        }
        return $attrybuts_table;
    }




    public function my_products_loop($post_type): array|object|null
    {
        global $wpdb;

        $table_name = $wpdb->prefix.'posts';
    
        return $wpdb->get_results(
            $wpdb->prepare(
                "SELECT * FROM `".$table_name."` WHERE `post_type` = %s AND `post_status` = %s",
                $post_type, 'publish'
                )
                );
    }
}

new User();