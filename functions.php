<?php
	//This site's functions are compatible with Wordpress 3.3
	
/**
 * Add Read More link to Display Posts Shortcode plugin
 * @author Bill Erickson
 * @link http://wordpress.org/extend/plugins/display-posts-shortcode/
 *
 * @param string $output the original markup for an individual post
 * @param array $atts all the attributes passed to the shortcode
 * @param string $image the image part of the output
 * @param string $title the title part of the output
 * @param string $date the date part of the output
 * @param string $excerpt the excerpt part of the output
 * @param string $inner_wrapper what html element to wrap each post in (default is li)
 * @return string $output the modified markup for an individual post
 */
 
add_filter( 'display_posts_shortcode_output', 'be_display_posts_read_more', 10, 9 );
function be_display_posts_read_more( $output, $atts, $image, $title, $date, $excerpt, $inner_wrapper, $content, $class ) {
 
	// First check if an excerpt is included by looking at the shortcode $atts
	if ( $atts['include_excerpt'] )
		// Now let's rebuild the excerpt to include read more
		$excerpt = '<span class="excerpt">' . get_the_excerpt() . '<br /><br /><a class="more-link" href="' . get_permalink() . '">Read More</a></span>';
	else $excerpt = '';
 
	// Now let's rebuild the output. Only the excerpt changed so we're using the original $image, $title, and $date
	$output = '<' . $inner_wrapper . ' class="' . implode( ' ', $class ) . '">' . $image . $title . $date . $excerpt . $content . '</' . $inner_wrapper . '>';
 
	// Finally we'll return the modified output
	return $output;
}


	/**
 * Register two widget areas.
 *
 * @since Twenty Thirteen 1.0
 */
function twentythirteen_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Main Widget Area', 'onlywebsites' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Appears in the Left Sidebar section of the site.', 'onlywebsites' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Secondary Widget Area', 'onlywebsites' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Appears in the Right Sidebar.', 'onlywebsites' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Job Category Select Widget', 'onlywebsites' ),
		'id'            => 'jobcategory-select',
		'description'   => __( 'Appears in the Home page job search area.', 'onlywebsites' ),
		'before_widget' => '<div id="%1$s" class="widget jcategory-list %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Job Search Widget', 'onlywebsites' ),
		'id'            => 'job-search',
		'description'   => __( 'Appears in the Home page job search area.', 'onlywebsites' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Job Sidebar Widget', 'onlywebsites' ),
		'id'            => 'job-sidebar',
		'description'   => __( 'Appears in the Left side of Job page.', 'onlywebsites' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Contact Map Widget', 'onlywebsites' ),
		'id'            => 'contactmap-sidebar',
		'description'   => __( 'Appears in the right side of Contact page.', 'onlywebsites' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Employer Portal Siebar', 'onlywebsites' ),
		'id'            => 'employer-sidebar',
		'description'   => __( 'Appears in the right side of Employer page.', 'onlywebsites' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Advice & Resources Siebar', 'onlywebsites' ),
		'id'            => 'advice-sidebar',
		'description'   => __( 'Appears in the right side of Advice & Resources page.', 'onlywebsites' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Recent News Feed', 'onlywebsites' ),
		'id'            => 'recent-news',
		'description'   => __( 'Appears in the recent news section of Home page.', 'onlywebsites' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Quick Submit Job Alert', 'onlywebsites' ),
		'id'            => 'quick-submit-job-alert',
		'description'   => __( 'Appears in the Quick Submit page.', 'onlywebsites' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
}
add_action( 'widgets_init', 'twentythirteen_widgets_init' );

	//enqueue our custom scripts on the front end only
	add_action('get_header', 'add_myscripts');
	function add_myscripts(){
		//enqueues our script and ensures that jquery is also loaded
		wp_enqueue_script('scripts.js', get_bloginfo('template_directory') . "/scripts/scripts.js", array('jquery'));
		//send a variable to this script so that we can get the path to our ajax function
		$data = array(
			"ajaxpath" => admin_url("admin-ajax.php"),
			"themepath" => get_bloginfo("template_directory"),
		);
		wp_localize_script("scripts.js", "wpvars", $data);
		
		/* //uncomment if threaded comment javascript is needed
		if (is_singular() && get_option("thread_comments")) {
			wp_enqueue_script("comment-reply");
		}
		*/
	}

		// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'main-nav'   => __( 'Main Navigation', 'onlywebsites' ),
		'footer' => __( 'Footer', 'onlywebsites' ),
	) );
	
	//change excerpt length
	add_filter( "excerpt_length", "new_excerpt_length" );
	function new_excerpt_length( $length ) {
		return 40;
	}
	
	//modify the ending of excerpts
	add_filter("excerpt_more", "new_excerpt_more");
	function new_excerpt_more($more) {
		global $post;
		return ' &hellip;';
	}
	
	//add form access to editor
	function add_grav_forms(){
		$role = get_role('editor');
		$role->add_cap('gform_full_access');
	}
	add_action('admin_init','add_grav_forms');

//########## Begin Customized Admin Stuff##########	
		//use the editor style to customize the editor.
		add_editor_style();
		
	
		
		//add the custom post types
		//include("admin/.php");
		
		//add post thumbnail support and thumbnail sizes.
		//add_theme_support("post-thumbnails", array());
	//########## End Customized Admin Stuff##########
	
	/*##########USEFUL FUNCTIONS############
		//adds last-child and first-child classes to the menu
		add_filter("wp_nav_menu", "add_first_and_last");
		function add_first_and_last($output) {
			$output = preg_replace('/class="menu-item/', 'class="first-child menu-item', $output, 1);
			$output = substr_replace($output, 'class="last-child menu-item', strripos($output, 'class="menu-item'), strlen('class="menu-item'));
			return $output;
		}
		
		//create custom post types
		add_action("init", "add_custom_post_types");
		function add_custom_post_types() {
			//the practice area type
			$labels = array(
				"name" => _x("Practice Areas", "post type general name"),
				"singular_name" => _x("Practice Area", "post type singular name"),
				"add_new" => _x("Add New", "practice area"),
				"add_new_item" => __("Add New Practice Area"),
				"edit_item" => __("Edit Practice Area"),
				"new_item" => __("New Practice Area"),
				"all_items" => __("All Practice Areas"),
				"view_item" => __("View Practice Area"),
				"search_items" => __("Search Practice Areas"),
				"not_found" =>  __("No practice areas found"),
				"not_found_in_trash" => __("No practice areas found in Trash"), 
				"parent_item_colon" => "",
				"menu_name" => "Practice Areas"
			);
			$args = array(
				"labels" => $labels,
				"description" => "",
				"public" => true,
				"rewrite" => array("slug"=>"practice-areas"),
				"has_archive" => true, 
				"menu_position" => 5,
				"supports" => array("title","editor","revisions")
			); 
			register_post_type("practice-area",$args);
			register_taxonomy("practice-type","practice-area", array(
				"hierarchical" => true,
				"label" => __("Practice Type"),
				"query_var" => true,
				"rewrite" => array("slug" => "practice-type"),
			));
		}
		
		//rename posts to products
		add_action( 'init', 'change_post_object_label' );
		add_action( 'admin_menu', 'change_post_menu_label' );
		function change_post_menu_label() {
			global $menu;
			global $submenu;
			$menu[5][0] = 'Products';
			$submenu['edit.php'][5][0] = 'All Products';
			$submenu['edit.php'][10][0] = 'Add a Product';
			$submenu['edit.php'][15][0] = 'Categories'; // Change name for categories
			unset($submenu['edit.php'][16][0]); // Change name for tags
		}
		function change_post_object_label() {
			global $wp_post_types;
			$labels = &$wp_post_types['post']->labels;
			$labels->name = 'Products';
			$labels->singular_name = 'Product';
			$labels->add_new = 'Add Product';
			$labels->add_new_item = 'Add Product';
			$labels->edit_item = 'Edit Products';
			$labels->new_item = 'Product';
			$labels->view_item = 'View Product';
			$labels->search_items = 'Search Products';
			$labels->not_found = 'No Products found';
			$labels->not_found_in_trash = 'No Products found in Trash';
		}
	##########END USEFUL FUNCTIONS############*/
	
	//display comments function
	function twentyten_comment( $comment, $args, $depth ) {
		$GLOBALS["comment"] = $comment;
		switch ( $comment->comment_type ) :
			case '' :
		?>
		<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
			<div id="comment-<?php comment_ID(); ?>">
			<div class="comment-author vcard">
				<?php echo get_avatar( $comment, 40 ); ?>
				<?php printf( __( '%s <span class="says">says:</span>', 'twentyten' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?>
			</div><!-- .comment-author .vcard -->
			<?php if ( $comment->comment_approved == '0' ) : ?>
				<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'twentyten' ); ?></em>
				<br />
			<?php endif; ?>

			<div class="comment-meta commentmetadata"><a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
				<?php
					/* translators: 1: date, 2: time */
					printf( __( '%1$s at %2$s', 'twentyten' ), get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( __( '(Edit)', 'twentyten' ), ' ' );
				?>
			</div><!-- .comment-meta .commentmetadata -->

			<div class="comment-body"><?php comment_text(); ?></div>

			<div class="reply">
				<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
			</div><!-- .reply -->
		</div><!-- #comment-##  -->

		<?php
				break;
			case 'pingback'  :
			case 'trackback' :
		?>
		<li class="post pingback">
			<p><?php _e( 'Pingback:', 'twentyten' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( '(Edit)', 'twentyten' ), ' ' ); ?></p>
		<?php
				break;
		endswitch;
	}

	add_action("init", "remheadlink");
	function remheadlink() {
		remove_action("wp_head", "rsd_link"); //remove RSD link
		remove_action("wp_head", "wp_generator"); //removes generated by wordpress tag (aka "please hack me")
		remove_action("wp_head", "feed_links_extra", 3 ); // Removes the links to the extra feeds such as category feeds
		remove_action("wp_head", "feed_links", 2 ); // Removes links to the general feeds: Post and Comment Feed
		remove_action("wp_head", "rsd_link"); // Removes the link to the Really Simple Discovery service endpoint, EditURI
		remove_action("wp_head", "wlwmanifest_link"); // Removes the link to the Windows Live Writer manifest file.
	}
	
		
	function mySearchFilter($query) {
	$post_type = $_GET['type'];
	if (!$post_type) {
		$post_type = 'any';
	}
    if ($query->is_search) {
        $query->set('post_type', 'post');
    };
    return $query;
};

add_filter('pre_get_posts','mySearchFilter');

add_filter('show_admin_bar', '__return_false');
	
?>