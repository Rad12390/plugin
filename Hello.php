<?php  
/**
 * Plugin Name: Hello
 * Plugin URI: 
 * Description: 
 * Version: 0.0.1
 * Author: PhpProjests
 * Author URI: 
 * Text Domain: 
 * Domain Path: 
 *
 * @package PhpProjests
 */

defined( 'ABSPATH' ) || exit;

// Define WC_PLUGIN_FILE.
if ( ! defined( 'WC_PLUGIN_FILE' ) ) {
	define( 'WC_PLUGIN_FILE', __FILE__ );
}
class Hello{
	public function __construct(){
	//	add_action( 'admin_menu', 'adminSetting' );
		add_action( 'admin_menu', array( $this, 'adminSetting' ) );
	}
	/*menues*/
	public function adminSetting(){

		 add_menu_page( __( 'Custom Menu Title', 'textdomain' ),'custom menu','manage_options','custompage',array($this , 'my_custom_menu_page'),plugins_url( 'myplugin/images/icon.png' ),
        5
    ); 
     }
     /*content on the menu pages*/
	public function my_custom_menu_page(){
		?>
		 <h3>Menues</h3>
  <ul class="list-inline">
    <li><a href="#">Home</a></li>
    <li><a href="#">Menu 1</a></li>
    <li><a href="#">Menu 2</a></li>
    <li><a href="#">Menu 3</a></li>
  </ul>
		<?php
	}
	
}
new Hello();
?>

