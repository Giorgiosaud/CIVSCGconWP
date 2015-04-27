<?php
add_action('init','crearcursos');
function crearcursos(){
    $labels=array(
        'name'=>'Curso',
        'singular_name'=>'Curso',
        'menu_name'=>'Cursos',
        'all_items'=>' Todos Los Cursos',
        'add_new'=>'Nuevo Curso',
        'add_new_item'=>'Nuevo Curso',
        'edit_item'=>'Editar Curso',
        'new_item'=>'Nuevo Curso',
        'view_item'=>'Ver Curso',
        'search_items'=>'Buscar Curso',
        'not_found'=>'No hay Cursos Disponibles',
        'not_found_in_trash'=>'No se encontraron Curso en la papelera',
        'parent_item_colon'=>'Curso Superior'
    );
    $supportarg=array('title','thumbnail','excerpt','editor','slug');
    $postarg=array(
        'labels'=>$labels,
        'description'=>'Cursos Dictados Por el CIVSCG',
        'public'=>true,
        'exclude_from_search'=>false,
        'publicly_queryable'=>true,
        'show_ui'=>true,
        'query_var'=>true,
        'rewrite'=>true,
        'menu_icon'=>'dashicons-book',
        'capability_type'=>array('Curso','cursos'),
        'map_meta_cap'    => true,
        'has_archive'=>true,
        'menu_position'=>5,        // 5 - below Posts 10 - below Media 15 - below Links 20 - below Pages 25 - below comments 60 - below first separator 65 - below Plugins 70 - below Users 75 - below Tools 80 - below Settings 100 - below second separator
        'hierarchical'=>false,
        'supports'=>$supportarg,
    );
    register_post_type(	'Curso',	$postarg);
}

add_filter( 'manage_edit-curso_columns', 'my_edit_cursos_columns' ) ;

function my_edit_cursos_columns( $columns ) {

    $columns = array(
        'cb'=>'cb',
        'title'=>'Titulo',
        'date'=>'date',
        'tipo_de_curso'=>'Tipo de Curso',
        'Fecha_de_Curso' => __( 'Fecha de Curso' )
    );

    return $columns;
}
add_action('manage_curso_posts_custom_column',  'my_show_columns', 10, 2);
function my_show_columns($name,$post_id) {
    global $post;
    switch ($name) {
        case 'tipo_de_curso':
            $views = get_the_term_list( $post_id , 'tipo_de_curso' , '' , ',' , '' );
            echo $views;
            break;
        case 'Fecha_de_Curso':
            $views = get_post_meta( $post_id , 'fecha_evento' , true );
            echo $views;
            break;
    }
}
function Fecha_de_Curso_column_register_sortable( $columns ) {
    $columns['Fecha_de_Curso'] = 'fecha_del_curso';
    $columns['tipo_de_curso'] = 'tipo_de_curso';

    return $columns;
}
add_filter( 'manage_edit-curso_sortable_columns', 'Fecha_de_Curso_column_register_sortable' );