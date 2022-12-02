<?php
/**
 * Plugin Name: Nixwood Menu
 * Plugin URI:  nixwood.com
 * Description: Nmixwood  Menu
 * Version:     1.0
 * Author:      Nixwood team
 * License:     GPL-2.0
 * Text Domain: nixwodomenu
 */
if ( !function_exists( 'add_action' ) ) {
    die();
}

define( 'NIXWOOD__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );


register_activation_hook( __FILE__, array( 'NixwoodClass', 'activatedPlugin' ) );
register_deactivation_hook( __FILE__, array( 'NixwoodClass', 'deactivationPlugin' ) );

require_once( NIXWOOD__PLUGIN_DIR . 'class.nixwood.php' );

$nixwood = new NixwoodClass();