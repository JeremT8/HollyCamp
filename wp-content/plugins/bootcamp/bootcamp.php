<?php 
/**
 * Plugin Name: BootCamp Plugin
 * Author: JeremT8
 */
add_action('init', function() {
	register_post_type('bootcamp', [
		'label' => __('BootCamp', 'bootcamp'),
		'menu_icon' => 'dashicons-location-alt',
		'labels' => [
		'name'                     => __('Bootcamp', 'bootcamp'),
        'singular_name'            => __('Bootcamp', 'bootcamp'),
        'edit_item'                => __('Edit Bootcamp', 'bootcamp'),
        'new_item'                 => __('New Bootcamp', 'bootcamp'),
        'view_item'                => __('View Bootcamp', 'bootcamp'),
        'view_items'               => __('View Bootcamps', 'bootcamp'),
        'search_items'             => __('Search Bootcamps', 'bootcamp'),
        'not_found'                => __('No Bootcamps found.', 'bootcamp'),
        'not_found_in_trash'       		=> __('No Bootcamps found in Trash', 'bootcamp'),
        'all_items'                => __('All Bootcamps', 'bootcamp'),
        'archives'                 => __('Bootcamp archive', 'bootcamp'),
        'attributes'               => __('Bootcamp attributes', 'bootcamp'),
        'insert_into_item'         => __('Insert into Bootcamp', 'bootcamp'),
        'uploaded_to_this_item'    => __('Upload to this Bootcamp', 'bootcamp'),
        'filter_items_list'        => __('Filter Bootcamps list', 'bootcamp'),
        'items_list_navigation'    => __('Bootcamps list navigation', 'bootcamp'),
        'items_list'               => __('Bootcamps list', 'bootcamp'),
        'item_published'           => __('Bootcamp published.', 'bootcamp'),
        'item_published_privately' => __('Bootcamp published privately.', 'bootcamp'),
        'item_reverted_to_draft'   => __('Bootcamp reverted to draft.', 'bootcamp'),
        'item_scheduled'           => __('Bootcamp scheduled.', 'bootcamp'),
        'item_updated'             => __('Bootcamp updated.', 'bootcamp'),
		],
        'has_archive' => true,
		'public' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'taxonomies' => ['bootcamp_type', 'bootcamp_locate', 'bootcamp_option'],
		'supports' => ['title', 'editor', 'excerpt', 'thumbnail']

	]);
	register_taxonomy('bootcamp_type', 'bootcamp', [
		'meta_box_cb' => 'post_categories_meta_box',
		'labels' => [
		'name'                       => __( 'Types', 'bootcamp' ),
        'singular_name'              => __( 'Type', 'bootcamp' ),
        'search_items'               => __( 'Search Types', 'bootcamp' ),
        'popular_items'              => __( 'Popular Types', 'bootcamp' ),
        'all_items'                  => __( 'All Types', 'bootcamp' ),
        'parent_item'                => __( 'Parent Category', 'bootcamp' ),
        'parent_item_colon'          => __( 'Parent Category:', 'bootcamp' ),
        'edit_item'                  => __( 'Edit Type', 'bootcamp' ),
        'view_item'                  => __( 'View Type', 'bootcamp' ),
        'update_item'                => __( 'Update Type', 'bootcamp' ),
        'add_new_item'               => __( 'Add New Type', 'bootcamp' ),
        'new_item_name'              => __( 'New Type Name', 'bootcamp' ),
        'separate_items_with_commas' => __( 'Separate Types with commas', 'bootcamp' ),
        'add_or_remove_items'        => __( 'Add or remove Types', 'bootcamp' ),
        'choose_from_most_used'      => __( 'Choose from the most used Types', 'bootcamp' ),
        'not_found'                  => __( 'No Types found.', 'bootcamp' ),
        'no_terms'                   => __( 'No Types', 'bootcamp' ),
        'items_list_navigation'      => __( 'Types list navigation', 'bootcamp' ),
        'items_list'                 => __( 'Types list', 'bootcamp' ),
        'most_used'                  => __( 'Most used', 'bootcamp' ),
        'back_to_items'              => __( '&larr; Back to Types', 'bootcamp' ),
		]
	]);
	register_taxonomy('bootcamp_locate', 'bootcamp', [
		'meta_box_cb' => 'post_categories_meta_box',
		'labels' => [
		'name'                       => __( 'Locates', 'bootcamp' ),
        'singular_name'              => __( 'Locate', 'bootcamp' ),
        'search_items'               => __( 'Search Locates', 'bootcamp' ),
        'popular_items'              => __( 'Popular Locates', 'bootcamp' ),
        'all_items'                  => __( 'All Locates', 'bootcamp' ),
        'edit_item'                  => __( 'Edit Locate', 'bootcamp' ),
        'view_item'                  => __( 'View Locate', 'bootcamp' ),
        'update_item'                => __( 'Update Locate', 'bootcamp' ),
        'add_new_item'               => __( 'Add New Locate', 'bootcamp' ),
        'new_item_name'              => __( 'New Locate Name', 'bootcamp' ),
        'separate_items_with_commas' => __( 'Separate Locates with commas', 'bootcamp' ),
        'add_or_remove_items'        => __( 'Add or remove Locates', 'bootcamp' ),
        'choose_from_most_used'      => __( 'Choose from the most used Locates', 'bootcamp' ),
        'not_found'                  => __( 'No Locates found.', 'bootcamp' ),
        'no_terms'                   => __( 'No Locates', 'bootcamp' ),
        'items_list_navigation'      => __( 'Locates list navigation', 'bootcamp' ),
        'items_list'                 => __( 'Locates list', 'bootcamp' ),
        'back_to_items'              => __( '&larr; Back to Locates', 'bootcamp' ),
		]
	]);
	register_taxonomy('bootcamp_option', 'bootcamp', [
		'labels' => [
		'name'                       => __( 'Options', 'bootcamp' ),
        'singular_name'              => __( 'Option', 'bootcamp' ),
        'search_items'               => __( 'Search Options', 'bootcamp' ),
        'popular_items'              => __( 'Popular Options', 'bootcamp' ),
        'all_items'                  => __( 'All Options', 'bootcamp' ),
        'edit_item'                  => __( 'Edit Option', 'bootcamp' ),
        'view_item'                  => __( 'View Option', 'bootcamp' ),
        'update_item'                => __( 'Update Option', 'bootcamp' ),
        'add_new_item'               => __( 'Add New Option', 'bootcamp' ),
        'new_item_name'              => __( 'New Option Name', 'bootcamp' ),
        'separate_items_with_commas' => __( 'Separate Options with commas', 'bootcamp' ),
        'add_or_remove_items'        => __( 'Add or remove Options', 'bootcamp' ),
        'choose_from_most_used'      => __( 'Choose from the most used Options', 'bootcamp' ),
        'not_found'                  => __( 'No Options found.', 'bootcamp' ),
        'no_terms'                   => __( 'No Options', 'bootcamp' ),
        'items_list_navigation'      => __( 'Options list navigation', 'bootcamp' ),
        'items_list'                 => __( 'Options list', 'bootcamp' ),
        'back_to_items'              => __( '&larr; Back to Options', 'bootcamp' ),
		]
	]);
});

register_activation_hook(__FILE__, 'flush_rewrite_rules');
register_deactivation_hook(__FILE__, 'flush_rewrite_rules');

/**
 * @param WP_Post | int|null $post 
 */

function bootcamp_city($post = null): void {
    if ($post === null) {
        $post = get_post();
    }
    $cities = get_the_terms($post, 'bootcamp_locate');
    if (empty($cities)) {
        return;
    }
    $city= $cities[0];
    echo $city->name;
    $postalCode =get_field('postal_code', $city);
    if ($postalCode) {
        echo ' (' . $postalCode . ')';
    }
}

function bootcamp_price($post = null): void {

    if (get_field('bootcamp_category', $post) === 'buy'){
        echo sprintf(__('%s $', 'bootcamp'), number_format_i18n(get_field('price', $post)));
    } else {
        echo sprintf(__('%s $/day', 'bootcamp'), number_format_i18n(get_field('price', $post)));
    }
}