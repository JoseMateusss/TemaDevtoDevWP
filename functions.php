<?php
//includes
require get_template_directory(). "/include/setup.php";	
require get_template_directory(). "/include/ajax.php";	
require get_template_directory(). "/include/customizer/theme-customizer.php";

//hooks
add_action('wp_enqueue_scripts', 'mt_theme_styles');
add_action('after_setup_theme', 'mt_after_setup');
add_action('widgets_init', 'mt_widgets');
add_action('customize_register', 'mt_customizer_register');
add_filter('excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
