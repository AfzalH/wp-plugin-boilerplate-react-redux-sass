<?php

add_action( 'admin_menu', 'srizon_instagram_admin_menu' );

function srizon_instagram_admin_menu() {
	$srizon_instagram_menu_hook = add_menu_page( __( 'Srizon Instagram', 'srizon-instagram-album' ), __( 'Srizon Instagram', 'srizon-instagram-album' ), 'edit_posts', 'SrizonInstagram', 'srizon_instagram_admin_page', srizon_instagram_get_resource_url( 'resources/images/instagram-icon.png' ) );

	add_action( "admin_print_scripts-{$srizon_instagram_menu_hook}", 'srizon_instagram_load_admin_resources' );
}

function srizon_instagram_load_admin_resources() {

	wp_enqueue_script('wp-api');
	// add app.css and app.js here
	wp_enqueue_style( 'roboto', 'https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700', null, '1.0' );
	wp_enqueue_style( 'material-icons', 'https://fonts.googleapis.com/icon?family=Material+Icons', null, '1.0' );
	wp_enqueue_style( 'srizon-materialize', srizon_instagram_get_resource_url( 'admin/resources/materialize.css' ), null, '1.0' );
	wp_enqueue_script( 'srizon-materialize', srizon_instagram_get_resource_url( 'admin/resources/materialize.js' ), [ 'jquery' ], '1.0', true );
	wp_enqueue_style( 'srizon-instagram-admin', srizon_instagram_get_resource_url( 'admin/resources/app.css' ), null, '1.0' );
	wp_enqueue_script( 'srizon-instagram-admin', srizon_instagram_get_resource_url( 'admin/resources/app.js' ), null, '1.0', true );
}

function srizon_instagram_admin_page() {
	// render admin
	?>
	<div class="srizon" style="padding: 0 10px">
		<div class="row">
			<div class="col s12">
				<div class="center"><h5 class="thin">Srizon Instagram Album</h5></div>
				<div id="srizon-instagram-admin"></div>
			</div>
		</div>
	</div>

	<?php
}