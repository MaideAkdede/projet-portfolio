<?php
/* *****
 * Return a Menu Structure
 * *****/

function p_menu($location)
{
    $locations = get_nav_menu_locations();
    $menu = $locations[$location];
    $links = wp_get_nav_menu_items($menu);
    $links = array_map(function($post){
        $link = new \stdClass();

        $link->url = $post->url;
        $link->label = $post->title;

        return $link;
    }, $links);

    return $links;

}
/* *****
 * Register navigation menus
 * *****/
add_action('init', 'p_custom_navigation_menus');

function p_custom_navigation_menus()
{
    register_nav_menus([
        'main' => 'Navigation principale',
        'footer' => 'Navigation en pied de page',
    ]);
}


/* *****
 * Register a custom post type
 * *****/
add_action('init', 'p_custom_post_type');

function p_custom_post_type()
{
    register_post_type('project', [
        'label' => 'Mes Projets',
        'labels' => [
            'singular_name' => 'projet',
            'add_new' => 'Nouveau projet',
            'add_new_item' => 'Ajouter un nouveau projet',
        ],
        'description' => 'Liste de tous mes projets.',
        'public' => true,
        'menu_position' => 2,
        'menu_icon' => 'dashicons-editor-code',
        'supports' => ['title', 'excerpt', 'editor'],
        'rewrite' => [
            'slug' => 'projets'
        ]
    ]);
}

/* * * disable the wordpress gutenberg editor * * */
add_filter("use_block_editor_for_post_type", "disable_gutenberg_editor");
function disable_gutenberg_editor()
{
    return false;
}

/* *****
 * Return a compiled asset's URI
 * *****/
function p_assets($path)
{
    return rtrim(get_template_directory_uri(), '/') . '/public/' . ltrim($path, '/');
}
