<?php
require get_template_directory().'/include/customizer/social.php';

function mt_customizer_register( $wp_customizer ){
    mt_social_customizer($wp_customizer);
}