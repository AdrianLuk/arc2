<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

/**
 * Initialize theme default settings
 */
require get_template_directory() . '/inc/theme-settings.php';

/**
 * Theme setup and custom theme supports.
 */
require get_template_directory() . '/inc/setup.php';

/**
 * Register widget area.
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom pagination for this theme.
 */
require get_template_directory() . '/inc/pagination.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Custom Comments file.
 */
require get_template_directory() . '/inc/custom-comments.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load custom WordPress nav walker.
 */
require get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

/**
 * Load WooCommerce functions.
 */
require get_template_directory() . '/inc/woocommerce.php';

/**
 * Load Editor functions.
 */
require get_template_directory() . '/inc/editor.php';
add_action( 'init', function(){
    new cpt_register;
} );
class cpt_register {
    public function __construct(){
        $this->cpt_register('Homeschool Program', 'homeschool-programs', 'dashicons-admin-home', array());
        $this->cpt_register('Program', 'programs', 'dashicons-book', array());
        $this->cpt_register('Camp', 'camps', 'dashicons-palmtree', array());
        $this->cpt_register('Classe', 'classes', 'dashicons-welcome-learn-more', array());
		$this->cpt_register('Staff', 'staff', 'dashicons-groups', array());
    }

    public function cpt_register($cpt, $cpt_name, $icon = 'dashicons-businessman', $supports = array()){
        $labels = array(
            'name'               => _x( $cpt . 's', $cpt . 's', 'Arc' ),
            'singular_name'      => _x( $cpt, $cpt, 'Arc' ),
            'menu_name'          => _x( $cpt . 's', 'admin menu', 'Arc' ),
            'name_admin_bar'     => _x( $cpt, 'add new on admin bar', 'Arc' ),
            'add_new'            => _x( 'Add New', $cpt, 'Arc' ),
            'add_new_item'       => __( 'Add New ' . $cpt, 'Arc' ),
            'new_item'           => __( 'New '. $cpt, 'Arc' ),
            'edit_item'          => __( 'Edit '.$cpt, 'Arc' ),
            'view_item'          => __( 'View '.$cpt, 'Arc' ),
            'all_items'          => __( 'All ' . $cpt . 's', 'Arc' ),
            'search_items'       => __( 'Search ' .$cpt . 's', 'Arc' ),
            'parent_item_colon'  => __( 'Parent ' .$cpt . 's:', 'Arc' ),
            'not_found'          => __( 'No ' .$cpt . 's found.', 'Arc' ),
            'not_found_in_trash' => __( 'No ' .$cpt . 's found in Trash.', 'Arc' )
        );
        $supports = array('title', 'editor', 'thumbnail','revisions');

        $args = array(
            'labels'              => $labels,
            'hierarchical'        => false,
            'description'         => __( 'You can add '.$cpt.' here!.', 'Arc' ),
            'taxonomies'          => array(),
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
			'show_in_rest'		  => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => null,
            'menu_icon'           => $icon,
            'show_in_nav_menus'   => true,
            'publicly_queryable'  => true,
            'exclude_from_search' => false,
            'has_archive'         => true,
            'query_var'           => true,
            'can_export'          => true,
            'rewrite'             => true,
            'capability_type'     => 'post',
            'supports'            => $supports 
        );
        register_post_type($cpt_name,$args);
    }
}