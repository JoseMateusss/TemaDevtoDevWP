<?php
function mt_social_customizer( $wp_customizer )
{
    //Settings
    $wp_customizer->add_setting('mt_facebook', array(
        'default' => ''
    ));
    $wp_customizer->add_setting('mt_youtube', array(
        'default' => ''
    ));
    $wp_customizer->add_setting('mt_instagram', array(
        'default' => ''
    ));

    //Sections
    $wp_customizer->add_section('mt_social_section', array(
        'title' => 'Redes Sociais',
        'priority' => '1'
    ));

    //Controllers
    $wp_customizer->add_control(
        new WP_Customize_Control(
            $wp_customizer,
            'mt_facebook',
            array(
                'label' => 'Link do Facebook',
                'section' => 'mt_social_section',
                'settings' => 'mt_facebook',
                'type' => 'text'
            )
        )
    );

    $wp_customizer->add_control(
        new WP_Customize_Control(
            $wp_customizer,
            'mt_youtube',
            array(
                'label' => 'Link do Youtube',
                'section' => 'mt_social_section',
                'settings' => 'mt_youtube',
                'type' => 'text'
            )
        )
    );

    $wp_customizer->add_control(
        new WP_Customize_Control(
            $wp_customizer,
            'mt_instagram',
            array(
                'label' => 'Link do Instagram',
                'section' => 'mt_social_section',
                'settings' => 'mt_instagram',
                'type' => 'text'
            )
        )
    );
}