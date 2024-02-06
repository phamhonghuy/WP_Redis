<?php
/**
 * Plugin Name: Custom Redis theme functions
 * Description: Add custom custom redis theme function.
 * Version: 1.0
 * Author: Your Name
 */
 class Redis_Theme_Handler {

    private static $instance;
    

    /**
     * Database
     *
     * wpdb
     */
    protected $db;

    /**
     * prefix
     *
     * @var string
     */
    protected $prefix;

    /**
     * terms table
     *
     * @var string
     */
    protected $terms;

    /**
     * term_taxonomy table
     *
     * @var string
     */
    protected $term_taxonomy;


    private function __construct() {
        global $wpdb;
        $this->db = $wpdb;
        $this->prefix = 'wp_';
        $this->terms = $this->prefix.'terms';
        $this->term_taxonomy = $this->prefix.'term_taxonomy';
    }

    public static function get_instance() {
        if ( ! isset( self::$instance ) ) {
            self::$instance = new self();
        }
        return self::$instance;
    }



    public function get_cars( $brand ) {

        $cars = $this->get_cars_from_redis( $brand );
        if ( $cars == [] ) {
            $cars = $this->get_cars_from_database( $brand );
        }
    
        return $cars;
    }

    //get_cars_from_redis function
    public function get_cars_from_redis( $brand ) {
        if ($brand) {
            $brand_str = implode( ',', $brand );
        }else {
            $brand_str = 'all';
        }
        $cars = [];
        $cars = wp_cache_get( 'cars-'.$brand_str , 'cache-cars-info');
        if ( $cars != [] ) {
            $cars = json_decode( $cars );
        }
        return $cars;
    }

    //get_cars_from_database function
    public function get_cars_from_database( $brand ) {
        
        if ($brand) {
            $brand_str = implode( "','", $brand );
            $brand_str_redis = implode( ',', $brand );  
        }
        $query = "SELECT *
        FROM wp_posts as p
        INNER JOIN ".$this->prefix."term_relationships as tr ON p.ID = tr.object_id
        INNER JOIN ".$this->prefix."term_taxonomy as tt ON tr.term_taxonomy_id = tt.term_taxonomy_id
        INNER JOIN ".$this->prefix."terms as t ON tt.term_id = t.term_id
        INNER JOIN ".$this->prefix."term_relationships as tr2 ON p.ID = tr2.object_id
        INNER JOIN ".$this->prefix."term_taxonomy as tt2 ON tr2.term_taxonomy_id = tt2.term_taxonomy_id
        INNER JOIN ".$this->prefix."terms as t2 ON tt2.term_id = t2.term_id
        WHERE p.post_type = 'product'
        AND p.post_status = 'publish'
        " ;
        if ($brand) {
            $query .= "        AND tt2.taxonomy = 'pa_brand'
                                AND t.name IN( '$brand_str')
                                GROUP BY ID;";
        }else{
            $query .= "GROUP BY ID;";
            $brand_str_redis = "all";
        }
        $cars = $this->db->get_results($query);
        wp_cache_set( 'cars-'.$brand_str_redis, json_encode( $cars ), 'cache-cars-info');
        return $cars;
    }


    public function del_cache_cars_info($post_id) {
        //if ('product' == get_post_type($post_id)) {
            wp_cache_delete('cache-cars-info');
        //}
    }
    
    public function run_del_cache_cars_info() {
        add_action( 'save_post', array( $this, 'del_cache_cars_info' ) );
        add_action( 'delete_post', array( $this, 'del_cache_cars_info' ) );
    }

    public function get_all_brands (){
        $brands = [];
        $query = "SELECT t.name, t.slug
                FROM $this->terms t
                JOIN $this->term_taxonomy tt ON t.term_id = tt.term_id
                WHERE tt.taxonomy = 'pa_brand';";
        $brands = $this->db->get_results($query);
        return $brands;
    }
}


