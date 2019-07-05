<?php 
add_theme_support( 'custom-logo', array(
	'height'      => 100,
	'width'       => 400,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );
add_theme_support( 'menus' );
register_nav_menu( 'menu', 'menuhead' );

//excerpt_length
add_filter( 'excerpt_length', function(){
	return 15;
} );
//excerpt_more
add_filter('excerpt_more', function($more) {
	return '...';
});

?>

