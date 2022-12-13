<?php
function ui_scripts_and_styles() {

	global $wp_query;

 	/******************
        SCRIPTS
  	*******************/
	wp_enqueue_script( 'global_js', get_template_directory_uri() . '/public/frontend-bundle.js', null , null , true );	

	/******************
        STYLES
  	*******************/
	wp_dequeue_style( 'wp-block-library' );
	wp_deregister_script( 'wp-embed' );
	

	/******************
        CDATA
	*******************/

	$post_obj = $wp_query->get_queried_object();
	$post_name = isset($post_obj->post_name) ? $post_obj->post_name : '';

	$the_theme = array(
		"url" => get_bloginfo('wpurl'),
		"ajax_url" => get_bloginfo('wpurl') . '/wp-admin/admin-ajax.php',
		"theme_path" => get_template_directory_uri() ,
		"page" => $post_name,
		"ajax_nonce" => wp_create_nonce('form_validation_name'),
	);
	
	wp_localize_script( 'global_js', 'the_theme', $the_theme );

}

add_action( 'wp_enqueue_scripts', 'ui_scripts_and_styles',0 );
//Remove Gutenberg Block Library CSS from loading on the frontend
function smartwp_remove_wp_block_library_css(){
	if (is_front_page()) {
		wp_dequeue_style( 'wp-block-library' );
		wp_dequeue_style( 'wp-block-library-theme' );
	}
   }
   add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css' );


   
?>