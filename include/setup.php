<?php
function mt_theme_styles()
{
 	//styles
 	wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/styles.css');
 	wp_enqueue_style('mainStyles', get_template_directory_uri().'/assets/css/main.css');
 	wp_enqueue_style('icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css');
 	wp_enqueue_style('fontawsome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
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

function clean_custom_menus() {
	$menu_name = 'primary'; // specify custom menu slug
	if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
		$menu = wp_get_nav_menu_object($locations[$menu_name]);
		$menu_items = wp_get_nav_menu_items($menu->term_id);


		$menu_list = '<div class="collapse navbar-collapse" id="navbarSupportedContent">' ."\n";
		$menu_list .= "\t\t\t\t". '<ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">' ."\n";
		foreach ((array) $menu_items as $key => $menu_item) {
			$current =( $_SERVER['REQUEST_URI'] == parse_url( $menu_item->url, PHP_URL_PATH ) ) ? 'active' : '';
			$title = $menu_item->title;
			$url = $menu_item->url;
			$menu_list .= "\t\t\t\t\t". '<li class="nav-item"><a class="nav-link '. $current .'" href="'. $url .'">'. $title .'</a></li>' ."\n";
		}

		if( isset($_COOKIE["theme"]) and $_COOKIE["theme"] == "dark"){ 
			$check = "checked"; 
		}else{
			$check = "";
		}
		$menu_list .= "\t\t\t\t".'<li class=""><label><input type="checkbox" class="check-dark-mode" id="switch"'. $check .'><span class="check"></span></label></li>' ."\n";
		$menu_list .= "\t\t\t\t". '</ul>' ."\n";
		$menu_list .= "\t\t\t". '</nav>' ."\n";
	} else {
		 $menu_list = '<!-- no list defined -->';
	}
	echo $menu_list;
}