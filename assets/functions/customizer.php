<?php

function cml_customize_register( $wp_customize ) {


$wp_customize->add_section(
    'social_media_section',
    array(
        'title' => 'Налаштування соцмереж Сайту',
        'description' => "Тут можно налаштувати кнопки соц мереж"
    )
);

$wp_customize->add_setting(
    'behance_text',
    array(
        'default' => '',
        'type' => 'option'
    )
);

$wp_customize->add_control(
    'behance_text',
    array(
        'type' => 'text',
        'label' => "Назва мережі 1",
        'section' => 'social_media_section',
        'settings' => 'behance_text'
    )
);

$wp_customize->add_setting('behance_img', array(
    'default'           => '',
    'capability'        => 'edit_theme_options',
    'type'           => 'option',
));
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'behance_img', array(
    'label'    => 'Зображення мережі 1',
    'section'  => 'social_media_section',
    'settings' => 'behance_img',
)));

$wp_customize->add_setting(
    'behance',
    array(
        'default' => '',
        'type' => 'option'
    )
);

$wp_customize->add_control(
    'behance',
    array(
        'type' => 'text',
        'label' => "Адреса мережі 1",
        'section' => 'social_media_section',
        'settings' => 'behance'
    )
);

$wp_customize->add_setting(
    'instagram_text',
    array(
        'default' => '',
        'type' => 'option'
    )
);

$wp_customize->add_control(
    'instagram_text',
    array(
        'type' => 'text',
        'label' => "Назва мережі 2",
        'section' => 'social_media_section',
        'settings' => 'instagram_text'
    )
);

$wp_customize->add_setting('instagram_img', array(
    'default'           => '',
    'capability'        => 'edit_theme_options',
    'type'           => 'option',
));
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'instagram_img', array(
    'label'    => 'Зображення мережі 2',
    'section'  => 'social_media_section',
    'settings' => 'instagram_img',
)));

$wp_customize->add_setting(
    'instagram',
    array(
        'default' => '',
        'type' => 'option'
    )
);

$wp_customize->add_control(
    'instagram',
    array(
        'type' => 'text',
        'label' => "Адреса мережі 2",
        'section' => 'social_media_section',
        'settings' => 'instagram'
    )
);

$wp_customize->add_setting(
    'facebook_text',
    array(
        'default' => '',
        'type' => 'option'
    )
);

$wp_customize->add_control(
    'facebook_text',
    array(
        'type' => 'text',
        'label' => "Назва мережі 2",
        'section' => 'social_media_section',
        'settings' => 'facebook_text'
    )
);

$wp_customize->add_setting('facebook_img', array(
    'default'           => '',
    'capability'        => 'edit_theme_options',
    'type'           => 'option',
));
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'facebook_img', array(
    'label'    => 'Зображення мережі 3',
    'section'  => 'social_media_section',
    'settings' => 'facebook_img',
)));

$wp_customize->add_setting(
    'facebook',
    array(
        'default' => '',
        'type' => 'option'
    )
);

$wp_customize->add_control(
    'facebook',
    array(
        'type' => 'text',
        'label' => "Адреса мережі 3",
        'section' => 'social_media_section',
        'settings' => 'facebook'
    )
);

// phone

$wp_customize->add_section(
    'phone_section',
    array(
        'title' => 'Налаштування Номерів Телефону',
        'description' => "Тут можно налаштувати номери телефонів"
    )
);

$wp_customize->add_setting(
    'number1',
    array(
        'default' => '',
        'type' => 'option'
    )
);

$wp_customize->add_control(
    'number1',
    array(
        'type' => 'text',
        'label' => "Номер + номер у футері",
        'section' => 'phone_section',
        'settings' => 'number1'
    )
);

$wp_customize->add_setting(
    'number2',
    array(
        'default' => '',
        'type' => 'option'
    )
);

$wp_customize->add_control(
    'number2',
    array(
        'type' => 'text',
        'label' => "Номер2",
        'section' => 'phone_section',
        'settings' => 'number2'
    )
);

$wp_customize->add_setting(
    'number3',
    array(
        'default' => '',
        'type' => 'option'
    )
);

$wp_customize->add_control(
    'number3',
    array(
        'type' => 'text',
        'label' => "Номер3",
        'section' => 'phone_section',
        'settings' => 'number3'
    )
);

// email

$wp_customize->add_section(
    'email_section',
    array(
        'title' => 'Налаштування електронної пошти',
        'description' => "Тут можно налаштувати адресу скриньки"
    )
);

$wp_customize->add_setting( 'email' , array(

    'default'     => '',
    'type' => 'option'
) );

$wp_customize->add_control( 'email', array(
    'type' => 'text',
    'label'        => 'Email',
    'section'    => 'email_section',
    'settings'   => 'email',
));

}

add_action( 'customize_register', 'cml_customize_register' );