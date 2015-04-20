<?php

    $role = 'Periodista';
    $display_name = 'Periodista';
    $capabilities = array(
        'read'          => true,
        'edit_posts'    => false,
        'delete_posts'  => false,
        'publish_posts' => false,
        'upload_files'  => true,
    );
    add_role($role, $display_name, $capabilities);
?>