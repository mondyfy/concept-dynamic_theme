<?php 
/* Link CSS and JS files function */
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
 add_theme_support( "custom-header");
 add_theme_support( "custom-background");
 add_editor_style();
include('customizer.php');
function concept_scripts(){
	wp_enqueue_style('animate',get_template_directory_uri(). '/css/animate.css');
	
	wp_enqueue_style('icomoon',get_template_directory_uri(). '/css/icomoon.css');
	
	wp_enqueue_style('bootstrap',get_template_directory_uri(). '/css/bootstrap.css');
	
	wp_enqueue_style('magnific-popup',get_template_directory_uri(). '/css/magnific-popup.css');
	
	wp_enqueue_style('style',get_template_directory_uri(). '/css/style.css');

wp_enqueue_script('jquery.min',get_theme_file_uri('/js/jquery.min.js'),array());

wp_enqueue_script('bootstrap.min',get_theme_file_uri('/js/bootstrap.min.js'),array());
	
	wp_enqueue_script('modernizr-2.6.2.min',get_theme_file_uri('/js/modernizr-2.6.2.min.js'),array(),true);

wp_enqueue_script('jquery.easing.1.3',get_theme_file_uri('/js/jquery.easing.1.3.js'),array(),true);


wp_enqueue_script('jquery.waypoints.min',get_theme_file_uri('/js/jquery.waypoints.min.js'),array(),true);

wp_enqueue_script('jquery.countTo',get_theme_file_uri('/js/jquery.countTo.js'),array(),true);

wp_enqueue_script('jquery.magnific-popup.min',get_theme_file_uri('/js/jquery.magnific-popup.min.js'),array(),true);

wp_enqueue_script('magnific-popup-options',get_theme_file_uri('/js/magnific-popup-options.js'),array(),true);

wp_enqueue_script('jquery.stellar.min',get_theme_file_uri('/js/jquery.stellar.min.js'),array(),true);

	wp_enqueue_script('main',get_theme_file_uri('/js/main.js'),array(),true);
    if ( is_singular() ) wp_enqueue_script( "comment-reply" );
}
add_action('wp_enqueue_scripts','concept_scripts');


require get_template_directory().'/inc/walker-nav.php'; 

  function register_header_menu() {
  register_nav_menu('header-menu',__( 'Header Menu', 'concept'));
}
add_action( 'init', 'register_header_menu' );

 
function concept_content_width() {
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters( 'concept_content_width', 640 );
}
add_action( 'after_setup_theme', 'concept_content_width', 0 );



/*function create_posttype() {*/
 
    /*//Custom Post type for the recent products
    register_post_type( 'recent_products',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Recent Products' ),
                'singular_name' => __( 'Recent Product' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'recent_products'),
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

/*
* Creating a function to create our CPT
*/

 
function custom_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Recent Products', 'Post Type General Name', 'concept' ),
        'singular_name'       => _x( 'Recent Product', 'Post Type Singular Name', 'concept' ),
        'menu_name'           => __( 'Recent Products', 'concept' ),
        'parent_item_colon'   => __( 'Parent Recent Product', 'concept' ),
        'all_items'           => __( 'All Recent Products', 'concept' ),
        'view_item'           => __( 'View Recent Product', 'concept' ),
        'add_new_item'        => __( 'Add New Recent Product', 'concept' ),
        'add_new'             => __( 'Add New', 'concept' ),
        'edit_item'           => __( 'Edit Recent Product', 'concept' ),
        'update_item'         => __( 'Update Recent Product', 'concept' ),
        'search_items'        => __( 'Search Recent Product', 'concept' ),
        'not_found'           => __( 'Not Found', 'concept' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'concept' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'recent_products', 'concept' ),
        'description'         => __( 'Recent Product news and reviews', 'concept' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres','category' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
     
    // Registering your Custom Post Type
    register_post_type( 'recent_products', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 add_theme_support( 'post-thumbnails' );
add_action( 'init', 'custom_post_type', 0 );


//Display CPT as a regular post 

/*add_action( 'pre_get_posts', 'add_recent_products_to_query' );
 
function add_recent_products_to_query( $query ) {
    if ( is_home() && $query->is_main_query() )
        $query->set( 'post_type', array( 'post', 'movies' ) );
    return $query;
}*/


function service_cpt() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Services', 'Post Type General Name', 'concept' ),
        'singular_name'       => _x( 'Service', 'Post Type Singular Name', 'concept' ),
        'menu_name'           => __( 'Services', 'concept' ),
        'parent_item_colon'   => __( 'Parent Service', 'concept' ),
        'all_items'           => __( 'All Services', 'concept' ),
        'view_item'           => __( 'View Service', 'concept' ),
        'add_new_item'        => __( 'Add New Service', 'concept' ),
        'add_new'             => __( 'Add New', 'concept' ),
        'edit_item'           => __( 'Edit Service', 'concept' ),
        'update_item'         => __( 'Update Service', 'concept' ),
        'search_items'        => __( 'Search Service', 'concept' ),
        'not_found'           => __( 'Not Found', 'concept' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'concept' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'services', 'concept' ),
        'description'         => __( 'Service news and reviews', 'concept' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
     
    // Registering your Custom Post Type
    register_post_type( 'services', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'service_cpt', 0 );


function client_cpt() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Happy Clients', 'Post Type General Name', 'concept' ),
        'singular_name'       => _x( 'Happy Client', 'Post Type Singular Name', 'concept' ),
        'menu_name'           => __( 'Happy Clients', 'concept' ),
        'parent_item_colon'   => __( 'Parent Happy Client', 'concept' ),
        'all_items'           => __( 'All Happy Clients', 'concept' ),
        'view_item'           => __( 'View Happy Client', 'concept' ),
        'add_new_item'        => __( 'Add New Happy Client', 'concept' ),
        'add_new'             => __( 'Add New', 'concept' ),
        'edit_item'           => __( 'Edit Happy Client', 'concept' ),
        'update_item'         => __( 'Update Happy Client', 'concept' ),
        'search_items'        => __( 'Search Happy Client', 'concept' ),
        'not_found'           => __( 'Not Found', 'concept' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'concept' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'happyclients', 'concept' ),
        'description'         => __( 'Happy Client news and reviews', 'concept' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
     
    // Registering your Custom Post Type
    register_post_type( 'happyclients', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'client_cpt', 0 );

// CPT For Staffs

function staff_cpt() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Staffs', 'Post Type General Name', 'concept' ),
        'singular_name'       => _x( 'Staff', 'Post Type Singular Name', 'concept' ),
        'menu_name'           => __( 'Staffs', 'concept' ),
        'parent_item_colon'   => __( 'Parent Staff', 'concept' ),
        'all_items'           => __( 'All Staffs', 'concept' ),
        'view_item'           => __( 'View Staff', 'concept' ),
        'add_new_item'        => __( 'Add New Staff', 'concept' ),
        'add_new'             => __( 'Add New', 'concept' ),
        'edit_item'           => __( 'Edit Staff', 'concept' ),
        'update_item'         => __( 'Update Staff', 'concept' ),
        'search_items'        => __( 'Search Staff', 'concept' ),
        'not_found'           => __( 'Not Found', 'concept' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'concept' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'staffs', 'concept' ),
        'description'         => __( 'Staff news and reviews', 'concept' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
     
    // Registering your Custom Post Type
    register_post_type( 'staffs', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'staff_cpt', 0 );


/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

    register_sidebar( array(
        'name'          => 'Home right sidebar',
        'id'            => 'home_right_1',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="rounded">',
        'after_title'   => '</h2>',
    ) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );
?>
<?php  
//Footer Menus
function register_footer_menu_1() {
  register_nav_menu('footer_menu_1',__( 'Footer Menu 1' , 'concept' ));
}
add_action( 'init', 'register_footer_menu_1' );


  function register_footer_menu_2() {
  register_nav_menu('footer_menu_2',__( 'Footer Menu 2', 'concept' ));
}
add_action( 'init', 'register_footer_menu_2' );

function register_footer_menu_3() {
  register_nav_menu('footer_menu_3',__( 'Footer Menu 3','concept'));
}
add_action( 'init', 'register_footer_menu_3' );

//adding social icons
function concept_tribes_social_array() {

    $social_sites = array(
        'twitter'       => 'tribes_twitter_profile',
        'facebook'      => 'tribes_facebook_profile',
        'google-plus'   => 'tribes_googleplus_profile',
        'pinterest'     => 'tribes_pinterest_profile',
        'linkedin'      => 'tribes_linkedin_profile',
        'youtube'       => 'tribes_youtube_profile',
        'vimeo'         => 'tribes_vimeo_profile',
        'tumblr'        => 'tribes_tumblr_profile',
        'instagram'     => 'tribes_instagram_profile',
        'flickr'        => 'tribes_flickr_profile',
        'dribbble'      => 'tribes_dribbble_profile',
        'rss'           => 'tribes_rss_profile',
        'reddit'        => 'tribes_reddit_profile',
        'soundcloud'    => 'tribes_soundcloud_profile',
        'spotify'       => 'tribes_spotify_profile',
        'vine'          => 'tribes_vine_profile',
        'yahoo'         => 'tribes_yahoo_profile',
        'behance'       => 'tribes_behance_profile',
        'codepen'       => 'tribes_codepen_profile',
        'delicious'     => 'tribes_delicious_profile',
        'stumbleupon'   => 'tribes_stumbleupon_profile',
        'deviantart'    => 'tribes_deviantart_profile',
        'digg'          => 'tribes_digg_profile',
        'github'        => 'tribes_github_profile',
        'hacker-news'   => 'tribes_hacker-news_profile',
        'steam'         => 'tribes_steam_profile',
        'vk'            => 'tribes_vk_profile',
        'weibo'         => 'tribes_weibo_profile',
        'tencent-weibo' => 'tribes_tencent_weibo_profile',
        '500px'         => 'tribes_500px_profile',
        'foursquare'    => 'tribes_foursquare_profile',
        'slack'         => 'tribes_slack_profile',
        'slideshare'    => 'tribes_slideshare_profile',
        'qq'            => 'tribes_qq_profile',
        'whatsapp'      => 'tribes_whatsapp_profile',
        'skype'         => 'tribes_skype_profile',
        'wechat'        => 'tribes_wechat_profile',
        'xing'          => 'tribes_xing_profile',
        'paypal'        => 'tribes_paypal_profile',
        'email-form'    => 'tribes_email_form_profile'
    );

    return apply_filters( 'concept_tribes_social_array_filter', $social_sites );
}

//enqueeing the fonts
function my_load_scripts_styles() {
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/font-awesome/css/font-awesome.min.css' );
}
add_action( 'wp_enqueue_scripts', 'my_load_scripts_styles' );

//adding the function for display
function my_social_icons_output() {

    $social_sites = concept_tribes_social_array();

    foreach ( $social_sites as $social_site => $profile ) {

        if ( strlen( get_theme_mod( $social_site ) ) > 0 ) {
            $active_sites[ $social_site ] = $social_site;
        }
    }

    if ( ! empty( $active_sites ) ) {

        echo '<ul class="social-media-icons">';
        foreach ( $active_sites as $key => $active_site ) { 
            $class = 'fa fa-' . $active_site; ?>
            <li>
                <a class="<?php echo esc_attr( $active_site ); ?>" target="_blank" href="<?php echo esc_url( get_theme_mod( $key ) ); ?>">
                    <i class="<?php echo esc_attr( $class ); ?>" title="<?php echo esc_attr( $active_site ); ?>"></i>
                </a>
            </li>
        <?php } 
        echo "</ul>";
    }
}

//for numeric pagination


function pagination_bar( $query_wp ) 
{
    $pages = $query_wp->max_num_pages;
    $big = 999999999; // need an unlikely integer
    if ($pages > 1)
    {
        $page_current = max(1, get_query_var('paged'));
           $pl = paginate_links(array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => $page_current,
            'total' => $pages,
            'type'          => 'list',
            'prev_text'          => __('&laquo;' , 'concept'),
            'next_text'          => __('&raquo;','concept'),

        ));

           echo str_replace( "<ul class='page-numbers'>", '<ul class="pagination">', $pl );

    }
}