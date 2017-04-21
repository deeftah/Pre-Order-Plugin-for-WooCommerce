<?php
/**
 * @package Presale
 * @version 1.6
 */
/*
Plugin Name: WooCommerce PreSale Plugin
Plugin URI: 
Description: Pre-Sale Plugin for WooCommerce
Author: derweili
Version: 1.0
Author URI: http://derweili.de
*/


/**
* Packstation Plugin Class
*/
class DerweiliWooCommercePreSalePlugin
{
	
	/**
	* Load dependencies
	* Load init functions
	*/
	function __construct()
	{
		/*add_action( 'init', array(&$this, 'load_textdomain' ) );
		
		define('PACKSTATION_DIR_URI', plugin_dir_url( __FILE__ ) );*/
		$this->load_other_dependencies();
	//	$this->enqueue_scripts();*/
	}
	private function load_other_dependencies(){
		include "inc/product-field.php";
		include "inc/add-to-cart.php";
		

	}
	public function load_textdomain() {
	//	load_plugin_textdomain( 'packstation', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' ); 
	}
	public function enqueue_scripts() {
	/*	add_action( 'wp_enqueue_scripts', function(){
    		//wp_register_script('packstation-conditional-fields', plugins_url('assets/js/conditional-fields.js', __FILE__), array('jquery'));

	}
}
new DerweiliWooCommercePreSalePlugin();

?>
