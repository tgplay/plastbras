<?php 
	 add_action( 'wp_enqueue_scripts', 'private_tutor_child_enqueue_styles' );
	 function private_tutor_child_enqueue_styles() {
 		  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
 		  } 
 ?>