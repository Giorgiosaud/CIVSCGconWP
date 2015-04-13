<?php
/**
 * Created by jorgelsaud.
 * User: jorgelsaud
 * Date: 3/4/15
 * Time: 11:46
 */
add_action('init','crearFundacions');
function crearFundacions(){
    $labels=array(
        'name'=>'Fundaciones',
        'singular_name'=>'Fundacion',
        'menu_name'=>'Fundaciones',
        'all_items'=>' Todas las Fundaciones',
        'add_new'=>'Añadir Fundacion',
        'add_new_item'=>'Nueva Fundacion',
        'edit_item'=>'Editar Fundacion',
        'new_item'=>'Nueva Fundacion',
        'view_item'=>'Ver Fundacion',
        'search_items'=>'Buscar Fundaciones',
        'not_found'=>'Fundacion No Encontrada',
        'not_found_in_trash'=>'No se encontraron Fundaciones en la papelera',
        'parent_item_colon'=>'Fundacion Superior'
    );
    $supportarg=array('title','thumbnail','excerpt','editor','slug');
    $postarg=array(
        'labels'=>$labels,
        'description'=>'Fundaciones del CIVSCG',
        'public'=>true,
        'exclude_from_search'=>false,
        'publicly_queryable'=>true,
        'show_ui'=>true,
        'query_var'=>true,
        'rewrite'=>true,
        'capability_type'=>'post',
        'has_archive'=>true,
        'menu_position'=>5,        // 5 - below Posts 10 - below Media 15 - below Links 20 - below Pages 25 - below comments 60 - below first separator 65 - below Plugins 70 - below Users 75 - below Tools 80 - below Settings 100 - below second separator
        'hierarchical'=>true,
        'supports'=>$supportarg,
    );
    register_post_type(	'Fundaciones',	$postarg);
}
add_action('admin_head','Fundacions_header');
function Fundacions_header(){
    global $post_type;
    ?>
    <style>
        <?php if (($_GET['post_type'] == 'Fundaciones') || ($post_type == 'Fundaciones')) : ?>
        #icon-edit { background:transparent url('<?php echo plugins_url('filecolor36px');?>') no-repeat; }
        <?php endif; ?>
        #adminmenu #menu-posts-noticias div.wp-menu-image{background:transparent url("<?php echo plugins_url('filegray16px');?>") no-repeat center center;}
        #adminmenu #menu-posts-noticias:hover div.wp-menu-image,#adminmenu #menu-posts-noticias.wp-has-current-submenu div.wp-menu-image{background:transparent url("<?php echo plugins_url('filecolor16px');?>") no-repeat center center;}
    </style>
<?php
}