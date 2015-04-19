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
?>