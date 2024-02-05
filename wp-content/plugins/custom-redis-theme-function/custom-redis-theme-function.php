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
     * Redis
     *
     * @var Redis
     */
    protected $redis;

    /**
     * Host
     *
     * @var string
     */
    protected $host;

    /**
     * Port
     *
     * @var int
     */
    protected $port;

    /**
     * Database
     *
     * @var int
     */
    protected $database;

    private function __construct() {
        $this->redis    = new Redis();
        $this->host     = WP_REDIS_CONFIG['host'];
        $this->port     = WP_REDIS_CONFIG['port'];
        $this->database = WP_REDIS_CONFIG['database'];
    }

    public static function get_instance() {
        if ( ! isset( self::$instance ) ) {
            self::$instance = new self();
        }
        return self::$instance;
    }



    public function get_cars( $brand ) {

        $cars = $this->get_cars_from_redis( $brand );
        if ( ! $cars ) {
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
        if (class_exists('Redis')) {
            $this->redis->connect($this->host, $this->port);
            $this->redis->select($this->database);
            $cars = $this->redis->hget( 'cache-cars-info','cars-'.$brand_str );
        }
        if ( $cars ) {
            $cars = json_decode( $cars );
        }
        return $cars;
    }

    //get_cars_from_database function
    public function get_cars_from_database( $brand ) {
        global $wpdb;
        if ($brand) {
            $brand_str = implode( "','", $brand );
            $brand_str_redis = implode( ',', $brand );  
        }
        $query = "SELECT *
        FROM wp_posts as p
        INNER JOIN wp_term_relationships as tr ON p.ID = tr.object_id
        INNER JOIN wp_term_taxonomy as tt ON tr.term_taxonomy_id = tt.term_taxonomy_id
        INNER JOIN wp_terms as t ON tt.term_id = t.term_id
        INNER JOIN wp_term_relationships as tr2 ON p.ID = tr2.object_id
        INNER JOIN wp_term_taxonomy as tt2 ON tr2.term_taxonomy_id = tt2.term_taxonomy_id
        INNER JOIN wp_terms as t2 ON tt2.term_id = t2.term_id
        WHERE p.post_type LIKE 'product'
        AND p.post_status LIKE 'publish'
        " ;
        if ($brand) {
            $query .= "        AND tt2.taxonomy LIKE 'pa_brand'
            AND t.name IN( '$brand_str');";
        }else{
            $query .= ";";
            $brand_str_redis = "all";
        }
        $cars = $wpdb->get_results($query);
        $this->redis->hset( 'cache-cars-info','cars-'.$brand_str_redis, json_encode( $cars ) );
        return $cars;
    }


    public function del_cache_cars_info() {
        if (class_exists('Redis')) {
            $this->redis->connect($this->host, $this->port);
            $this->redis->select($this->database);
            $this->redis->del('cache-cars-info');
        }
    }
    
    public function run_del_cache_cars_info() {
        add_action( 'save_post', array( $this, 'del_cache_cars_info' ) );
        add_action( 'delete_post', array( $this, 'del_cache_cars_info' ) );
    }


}


