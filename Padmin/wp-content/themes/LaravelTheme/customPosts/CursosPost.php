<?php
add_action('init','crearcursos');
function crearcursos(){
    $labels=array(
        'name'=>'curso',
        'singular_name'=>'curso',
        'menu_name'=>'Cursos',
        'all_items'=>' Todos Los Cursos',
        'add_new'=>'Nuevo Curso',
        'add_new_item'=>'Nuevo Curso',
        'edit_item'=>'Editar Curso',
        'new_item'=>'Nuevo Curso',
        'view_item'=>'Ver Curso',
        'search_items'=>'Buscar curso',
        'not_found'=>'No hay Cursos Disponibles',
        'not_found_in_trash'=>'No se encontraron curso en la papelera',
        'parent_item_colon'=>'curso Superior'
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
        'capability_type'=>array('curso','cursos'),
        'map_meta_cap'    => true,
        'has_archive'=>true,
        'menu_position'=>5,        // 5 - below Posts 10 - below Media 15 - below Links 20 - below Pages 25 - below comments 60 - below first separator 65 - below Plugins 70 - below Users 75 - below Tools 80 - below Settings 100 - below second separator
        'hierarchical'=>false,
        'supports'=>$supportarg,
    );
    register_post_type(	'curso',	$postarg);
}
add_action('admin_head','curso_header');
function curso_header(){
    global $post_type;
    ?>
    <style>
        <?php if (($_GET['post_type'] == 'curso') || ($post_type == 'curso')) : ?>
        #icon-edit { background:transparent url('<?php echo plugins_url('filecolor36px');?>') no-repeat; }
        <?php endif; ?>
        #adminmenu #menu-posts-Curso div.wp-menu-image{background:transparent url("<?php echo plugins_url('filegray16px');?>") no-repeat center center;}
        #adminmenu #menu-posts-Curso:hover div.wp-menu-image,#adminmenu #menu-posts-Curso.wp-has-current-submenu div.wp-menu-image{background:transparent url("<?php echo plugins_url('filecolor16px');?>") no-repeat center center;}
    </style>
<?php
}
add_filter( 'manage_edit-curso_columns', 'my_edit_movie_columns' ) ;

function my_edit_movie_columns( $columns ) {

    $columns = array(
        'title'=>'Titulo',
        'date'=>'date',
        'tipo_de_curso'=>'Tipo de Curso',
        'Fecha_de_Curso' => __( 'Fecha de Curso' )
    );

    return $columns;
}
add_action('manage_curso_posts_custom_column',  'my_show_columns', 10, 2);
function my_show_columns($name,$post_id) {
    switch ($name) {
        case 'tipo_de_curso':
            $views = get_the_term_list( $post_id , 'tipo_de_curso' , '' , ',' , '' );
            echo $views;
            break;
        case 'Fecha_de_Curso':
            $views = get_post_meta( $post_id , 'fecha_del_curso' , true );
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