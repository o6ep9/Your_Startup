<?php

function yourstartup_assets() {
	wp_enqueue_style('ico', get_template_directory_uri() . '/assets/images/Group 35.ico');
	
    wp_enqueue_style('maincss', get_template_directory_uri() . '/assets/css/styles.css',  array(), rand(111,9999), 'all');

    wp_enqueue_script('mainjs', get_template_directory_uri() . '/assets/JavaScript/script.js', array(), '20151215', true);

    
}
add_action( 'wp_enqueue_scripts', 'yourstartup_assets');

show_admin_bar(false);