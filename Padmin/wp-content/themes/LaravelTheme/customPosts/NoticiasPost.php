<?php
/**
 * Created by jorgelsaud.
 * User: jorgelsaud
 * Date: 3/4/15
 * Time: 11:46
 */
add_action('init','crearNoticias');
function crearNoticias(){
    $labels=array(
        'name'=>'Noticias',
        'singular_name'=>'Noticia',
        'menu_name'=>'Noticias',
        'all_items'=>' Todas las Noticias',
        'add_new'=>'Añadir Noticia',
        'add_new_item'=>'Nueva Noticia',
        'edit_item'=>'Editar Noticia',
        'new_item'=>'Nueva Noticia',
        'view_item'=>'Ver Noticia',
        'search_items'=>'Buscar Noticias',
        'not_found'=>'Noticia No Encontrada',
        'not_found_in_trash'=>'No se encontraron Noticias en la papelera',
        'parent_item_colon'=>'Noticia Superior'
    );
    $supportarg=array('title','thumbnail','excerpt','editor','slug');
    $postarg=array(
        'labels'=>$labels,
        'description'=>'Noticias del CIVSCG',
        'public'=>true,
        'exclude_from_search'=>false,
        'publicly_queryable'=>true,
        'show_ui'=>true,
        'query_var'=>true,
        'rewrite'=>true,
        'capability_type'=>array('Noticia','Noticias'),
        'map_meta_cap'    => true,
        'menu_icon'=>'dashicons-id-alt',
        'has_archive'=>true,
        'menu_position'=>5,        // 5 - below Posts 10 - below Media 15 - below Links 20 - below Pages 25 - below comments 60 - below first separator 65 - below Plugins 70 - below Users 75 - below Tools 80 - below Settings 100 - below second separator
        'hierarchical'=>true,
        'supports'=>$supportarg,
    );
    register_post_type(	'Noticias',	$postarg);
}
add_action('admin_head','Noticias_header');
function Noticias_header(){
    global $post_type;
    ?>
    <style>
        <?php if (($_GET['post_type'] == 'Noticias') || ($post_type == 'Noticias')) : ?>
        #icon-edit { background:transparent url('<?php echo plugins_url('filecolor36px');?>') no-repeat; }
        <?php endif; ?>
        #adminmenu #menu-posts-noticias div.wp-menu-image{background:transparent url("<?php echo plugins_url('filegray16px');?>") no-repeat center center;}
        #adminmenu #menu-posts-noticias:hover div.wp-menu-image,#adminmenu #menu-posts-noticias.wp-has-current-submenu div.wp-menu-image{background:transparent url("<?php echo plugins_url('filecolor16px');?>") no-repeat center center;}
    </style>
<?php
}