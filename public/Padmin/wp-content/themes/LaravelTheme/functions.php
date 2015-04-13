<?php
/**
 * Created by jorgelsaud.
 * User: jorgelsaud
 * Date: 3/4/15
 * Time: 11:40
 */
require __DIR__.'/customPosts/CustomPost.php';
require __DIR__.'/customSizes/customSizes.php';
require __DIR__.'/customizerTheme/customizer.php';
require __DIR__.'/customTaxonomies/customTax.php';

$args = array(
    // Text color and image (empty to use none).
    'default-text-color'     => '1B1256',

    // Set height and width, with a maximum value for the width.
    'height'                 => 97,
    'width'                  => 71,

);117-

add_theme_support( 'custom-header', $args );
