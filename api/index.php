<?php
function srizon_instagram_test() {
	return [ 'a', 'b', 'c' ];
}

add_action( 'rest_api_init', function () {
	register_rest_route( 'srizon-instagram/v1', '/test/', [
		'methods'  => 'GET',
		'callback' => 'srizon_instagram_test',
	] );
} );

class SrizonTest extends WP_REST_Controller{
	
}