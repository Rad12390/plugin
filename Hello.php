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

class Hello{

	public function __construct(){
		
		$this->load_dependencies();
	}
	public function load_dependencies() {

        require_once plugin_dir_path( __FILE__ ) . 'includes/MenuClass.php';
    }
	
}
new Hello();
?>

