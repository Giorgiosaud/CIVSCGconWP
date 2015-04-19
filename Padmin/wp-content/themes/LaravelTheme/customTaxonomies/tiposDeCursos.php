<?php
add_action('init', 'create_tipo_de_curso_tax');

function create_tipo_de_curso_tax()
{
    $capabilities = [
        'manage_terms'               => 'manage_tipos_de_cursos',
        'edit_terms'                 => 'manage_tipos_de_cursos',
        'delete_terms'               => 'manage_tipos_de_cursos',
        'assign_terms'               => 'edit_curso',
    ];
    $labels=[
        'name'              => 'Tipos De Cursos',
        'singular_name'     => 'Tipo de Curso',
        'menu_name'         => 'Tipos de Cursos',
        'all_items'         => 'Todos los Tipos',
        'edit_item'         => 'Editar Tipo',
        'view_item'         => 'Ver Tipo',
        'update_item'       => 'Actualizar Tipo',
        'add_new_item'      => 'Nuevo Tipo',
        'new_item_name'     => 'Nuevo Nombre de Tipo',
        'parent_item'       => 'Tipo de Curso Padre',
        'parent_item_colon' => 'Tipo de Curso Padre:',
        'search_items'      => 'Buscar Tipo de Curso',
        'popular_items'     => 'Tipos Populares',
    ];
    $args = [
        'label'             => 'Tipos De Cursos',
        'labels' => $labels,
        'public'            => true,
        'show_ui'           => true,
        'show_in_nav_menus' => true,
        'show_tagcloud'     => true,
        'show_admin_column' => true,
        'hierarchical'      => false,
        'sort'              => true,
        'capabilities'               => $capabilities,
    ];

    register_taxonomy(
        'tipo_de_curso',
        'curso',
        $args
    );
}