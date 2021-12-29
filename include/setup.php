<?php
function mt_theme_styles()
{
 	//styles
 	wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/styles.css');
 	wp_enqueue_style('mainStyles', get_template_directory_uri().'/assets/css/main.css');
 	wp_enqueue_style('icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css');
 	
    //scripsts
    wp_enqueue_script('jquery', get_template_directory_uri().'/assets/js/jQuery.js');
 	
 	wp_enqueue_script('bootstrapjs', get_template_directory_uri().'/assets/js/bootstrap.bundle.min.js');
 	
 	wp_enqueue_script('mainscripts', get_template_directory_uri().'/assets/js/scripts.js', '', '',true);


 	
 }

 function mt_after_setup()
 {
    add_theme_support("title-tag"); //Adcionando suporte ao título 
    add_theme_support("custom-logo"); //Custumização de logo dinâmica
    add_theme_support("post-thumbnails"); // Habilitando imagem destacada no post
    register_nav_menu("primary", __('Primary Menu', 'tema')); //Registrando menu
}

//Configurando tamanho do resumo no post
function wpdocs_custom_excerpt_length( $length ) 
{
    return 20;
}

//Configurando widgets
function mt_widgets()
{
	register_sidebar(array(
		'name' => __('Meu primeiro Sidebar', 'code-me'),
		'id' => 'mt_sidebar',
		'description' => __('Sidebar lateral para o blog', 'code-me'),
		'before_widget' => '<div class="card-body">',
		'after_widget' => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));

}