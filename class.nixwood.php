<?php

class NixwoodClass
{

    public  $price = 190;

    public $price_page = 100;

    public $total;

    public $quantity = 1;

    /**
     * @var bool
     */

    public function __construct() {
        add_action( 'wp_enqueue_scripts',  array($this, 'enqueue'));
        add_action ('header_nixwood_hook' , array($this, 'addHeader'), 10);

    }

    public static function activatedPlugin(){
      flush_rewrite_rules();
    }

    public static function deactivationPlugin(){
        flush_rewrite_rules();
    }


    public function enqueue() {
        wp_enqueue_script( 'nixwood-menu-js', plugins_url( '_inc/nixwood.js',__FILE__), array( 'jquery' ));
        wp_enqueue_style( 'nixwood-menu-css', plugins_url( '_inc/nixwood.css',__FILE__) , false );
    }




}
