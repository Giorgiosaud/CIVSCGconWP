<?php

    $role = 'Coordinador_de_Cursos';
    $display_name = 'Coordinador de Cursos';
    $capabilities = array(
        'read'          => true,
        'edit_posts'    => false,
        'delete_posts'  => false,
        'publish_posts' => false,
        'upload_files'  => true,
    );
    add_role($role, $display_name, $capabilities);



add_action('admin_init', 'cursos_add_role_caps', 999);
function cursos_add_role_caps()
{

    // Add the roles you'd like to administer the custom post types
    $roles = array( 'editor', 'administrator');

    // Loop through each role and assign capabilities
    foreach ($roles as $the_role)
    {

        $role = get_role($the_role);

        $role->add_cap('read');
        $role->add_cap('read_curso');
        $role->add_cap('read_private_cursos');
        $role->add_cap('edit_curso');
        $role->add_cap('edit_cursos');
        $role->add_cap('edit_others_cursos');
        $role->add_cap('edit_published_cursos');
        $role->add_cap('publish_cursos');
        $role->add_cap('delete_others_cursos');
        $role->add_cap('delete_private_cursos');
        $role->add_cap('delete_published_cursos');

    }
}


?>