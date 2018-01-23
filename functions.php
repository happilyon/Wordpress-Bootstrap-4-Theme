<?php wp_list_comments( ); ?>

<?php wp_link_pages(); ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<html <?php language_attributes(); ?>


<?php

// wp required for theme check - above code required as well

load_theme_textdomain( 'happilyon' );

add_theme_support( 'automatic-feed-links' );

if ( ! isset( $content_width ) ) {
	$content_width = 900;
}

if ( is_singular() ) wp_enqueue_script( "comment-reply" );

paginate_comments_links();

the_post_thumbnail();

add_theme_support( 'custom-header' );

add_theme_support( 'custom-background' );

add_editor_style();


// Tags - wp required for theme check

function happilyon_post_tags() {
    $output = "";
    $terms = get_the_term_list(get_the_ID(), 'post_tag');
      if ($terms) {
        $termText = '<label>' . __("Tags:", "'happilyon'") . '</label>';
        $output .='<div class="term-list tags">';
        $output .=$termText . ' ';
      $output.= $terms;
        $output .= '</div>';
    }
    echo $output;
}

// Page Title - wp required for theme check

add_action( 'after_setup_theme', 'happilyon_theme_setup' );
function happilyon_theme_setup() {
    add_theme_support( 'title-tag' );
}


// CSS files

function happilyon_theme_styles() {
    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.css' );
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'happilyon_theme_styles' );

// JS files

function happilyon_theme_js() {
    wp_enqueue_script( 'popper_js', get_template_directory_uri() . '/js/popper.js', array('jquery'), '', true );
	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), '', true );
	wp_enqueue_script( 'theme_js', get_template_directory_uri() . '/js/theme.js', array('jquery', 'bootstrap_js'), '', true );
}

add_action( 'wp_enqueue_scripts', 'happilyon_theme_js' );

// Theme Suppot menu and post images 

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

// Navbar Menu

function happilyon_register_theme_menus() {
	register_nav_menus(
		array(
			'header-menu'	=> __( 'Header Menu', 'happilyon' )
		)
	);
}
add_action( 'init', 'happilyon_register_theme_menus' );


// Halt query if search box empty

add_filter( 'posts_search', function( $search, \WP_Query $q )
{
    if( ! is_admin() && empty( $search ) && $q->is_search() && $q->is_main_query() )
    $search .=" AND 0=1 ";
    return $search;
}, 10, 2 );


// If you dont want admin bar to show up for loged in user uncomment below line and adjust CSS style   

//add_filter( 'show_admin_bar', '__return_false' );

//Change admin bar color

add_action('wp_head', 'happilyon_change_bar_color');
add_action('admin_head', 'happilyon_change_bar_color');
function happilyon_change_bar_color() {
?>
<style>
#wpadminbar {
background: #343a40 !important;
height: 35px!important;
}
</style>
<?php
}


?>

<?php

//Sidebar widgets

function happilyon_init_sidebars( ) {

	register_sidebar(array(
		'name'          => __( 'Front Page Left', 'happilyon' ),
        'id'            => 'front-left',
        'description'   => __( 'Displays on the left of the homepage', 'happilyon' ),
        'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
    ));

    register_sidebar(array(
		'name'          => __( 'Front Page Center', 'happilyon' ),
        'id'            => 'front-center',
        'description'   => __( 'Displays in the center of the homepage', 'happilyon' ),
        'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
    ));

    register_sidebar(array(
		'name'          => __( 'Front Page Right', 'happilyon' ),
        'id'            => 'front-right',
        'description'   => __( 'Displays on the right of the homepage', 'happilyon' ),
        'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
    ));

    register_sidebar(array(
		'name'          => __( 'Front Page Right', 'happilyon' ),
        'id'            => 'front-right',
        'description'   => __( 'Displays on the right of the homepage', 'happilyon' ),
        'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
    ));

    register_sidebar(array(
		'name'          => __( 'Page Sidebar', 'happilyon' ),
        'id'            => 'page',
        'description'   => __( 'Displays on the side of pages with a sidebar', 'happilyon' ),
        'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
    ));
   
    register_sidebar(array(
		'name'          => __( 'Blog Sidebar', 'happilyon' ),
        'id'            => 'blog',
        'description'   => __( 'Displays on the side of pages in the blog section', 'happilyon' ),
        'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
    ));
    
    register_sidebar(array(
		'name'          => __( 'Search Sidebar', 'happilyon' ),
        'id'            => 'search',
        'description'   => __( 'Displays on the side of pages in the search section', 'happilyon' ),
        'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
    ));


}

add_action( 'widgets_init', 'happilyon_init_sidebars');

?>