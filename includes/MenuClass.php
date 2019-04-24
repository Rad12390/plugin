<?php  

Class MenuClass{

	public function __construct(){
		add_action( 'admin_menu', array( $this, 'adminSetting' ) );
			}
	
	public function adminSetting(){
       add_menu_page( __( 'Custom Menu Title', 'textdomain' ),'custom menu','manage_options','custompage',array($this , 'my_custom_menu_page'),'',5 ); 
     }
     public function my_custom_menu_page(){
       require_once plugin_dir_path( __FILE__ ) . 'admin/dashboard.php';
	}

}
new MenuClass();
?>