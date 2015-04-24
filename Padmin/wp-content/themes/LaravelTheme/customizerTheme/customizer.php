<?php
function example_customizer_menu( $wp_customize ) {
    add_theme_page( 'Editar Tema', 'Editar Tema', 'edit_theme_options', 'customize.php' );
}
add_action( 'admin_menu', 'example_customizer_menu' );


function example_customizer( $wp_customize ) {
    $wp_customize->add_section(
        'extraSection',
        array(
            'title' => 'Configuraciones Extra',
            'description' => 'Es una seccion de Configuraciones Extras.',
            'priority' => 200,
        )
    );
    $wp_customize->add_section(
        'cursos',
        array(
            'title' => 'Configuraciones de Cursos',
            'description' => 'Es una seccion de Configuraciones de los cursos.',
            'priority' => 200,
        )
    );
    $wp_customize->add_setting(
        'Leer_mas',
        array(
            'default' => 'Boton Leer Mas',
        )
    );
    $wp_customize->add_setting(
        'volver_a_noticias',
        array(
            'default' => 'Boton volver a Noticias',
        )
    );
    $wp_customize->add_setting(
        'imagen_area_cursos',
        array(
            'default' => 'Imagen area cursos',
        )
    );
    $wp_customize->add_setting(
        'email_cursos',
        array(
            'default' => 'fundacioncursos@civscg.com.ve',
        )
    );
    $wp_customize->add_control(
        'email_de_cursos',
        array(
            'label'    => __( 'Email de Cursos', 'LaravelTheme' ),
            'section'  => 'cursos',
            'settings' => 'email_cursos',
            'type'     => 'text',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'Leer_mas',
            array(
                'label'      => __( 'Sube tu Imagen', 'LaravelTheme' ),
                'section'    => 'extraSection',
                'settings'   => 'Leer_mas',
                'context'    => 'Imagen de Leer Mas'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'volver_a_noticias',
            array(
                'label'      => __( 'Sube tu Imagen', 'LaravelTheme' ),
                'section'    => 'extraSection',
                'settings'   => 'volver_a_noticias',
                'context'    => 'Imagen de Leer Mas'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'imagen_area_cursos',
            array(
                'label'      => __( 'Sube tu Imagen', 'LaravelTheme' ),
                'section'    => 'extraSection',
                'settings'   => 'imagen_area_cursos',
                'context'    => 'Imagen de Cursos'
            )
        )
    );
}
add_action( 'customize_register', 'example_customizer' );
?>