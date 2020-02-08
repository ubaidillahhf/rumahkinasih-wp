<?php

if( ! class_exists( 'Themebeez_Toolkit_Orchid_Store_Setup' ) ) {

	class Themebeez_Toolkit_Orchid_Store_Setup {

		public function __construct() {

			add_filter( 'wp_nav_menu_args', array( $this, 'navwalker_menu_args' ) );
		}

		public function navwalker_menu_args( $args ) {

			return array_merge( $args, array(

		        'walker' => new Simple_Mega_Menu_Nav_Walker(),
		    ) );
		}
	}
}

$osInit = new Themebeez_Toolkit_Orchid_Store_Setup();