<?php
/** - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
*
* Add a menu location
*/
register_nav_menu('main', 'The Main menu' );


/** - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
*
* Add theme support for automatic title tags and featured images
*/
add_theme_support('title-tag');
add_theme_support('post-thumbnails');


/** - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
*
* add a custom image resize upon upload
*/
add_image_size('grid_thumb', 100, 100, true);


/** - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
*
* add a custom post type for cars
*/
$car_args = array(
        'public'              => true, // bool (default is FALSE)
        'menu_position'       => 5, // int (defaults to 25 - below comments)
        'menu_icon'           => 'dashicons-carrot', // string (defaults to use the post icon)
        'hierarchical'        => false, // bool (defaults to FALSE)
        'has_archive'         => 'cars', // bool|string (defaults to FALSE)
        'capability_type'     => 'post', // string|array (defaults to 'post')
        'map_meta_cap'        => true, // bool (defaults to FALSE)
        'rewrite' => TRUE,
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
        ),
        'taxonomies'            => array( 'brand', ' feature' ),
        'label'                 => 'car'
    );

register_post_type( 'car', $car_args );


/** - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
*
* add custom taxonomies for the cars: brand and features
*/
 $brand_args = array(
   'label'                     => 'Brand',
   'hierarchical'               => true,
   'public'                     => true,
   'show_ui'                    => true,
   'show_admin_column'          => true,
   'show_in_nav_menus'          => true,
 );
 register_taxonomy( 'brand', 'car', $brand_args );
 // register_taxonomy( taxonomy_name, available_for_which_post_type, Settings )
 $feature_args = array(
   'label'                     => 'Feature',
   'hierarchical'               => false,
   'public'                     => true,
   'show_ui'                    => true,
   'show_admin_column'          => true,
   'show_in_nav_menus'          => true,
 );
 register_taxonomy( 'feature', 'car', $feature_args );
 // register_taxonomy( taxonomy_name, available_for_which_post_type, Settings )


 /** - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
 *
 * add a widget area to dashboard - Appearance - Widgets
 */
 $widget_args = array(
   'id'            => 'singular-widget',
   'name'          => 'Page or Single widgets',
 );
 register_sidebar( $widget_args );


add_action('init', )


?>
