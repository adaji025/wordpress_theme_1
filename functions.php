<?php
    /*
    * Function definition for adaji theme
    */
?>
<?php

    if(! isset($content_width)){
        $content_width = 660;
    }

    function adajiwp_setup() {
        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');

        // Register Custom Navigation
        require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
        register_nav_menus( array(
            'primary' => __( 'Main header Menu', 'adajiwp' ),
            'footer' => __( 'Footer Menu', 'adajiwp' )
        ) );
    }
    add_action('after_setup_theme', 'adajiwp_setup');

    function adajiwp_scripts(){
        /* Add styles */
        wp_enqueue_style('bootstrap-core', get_template_directory_uri() .'/css/bootstrap.min.css', array(), "1.0", 'all');
        wp_enqueue_style('fontawesome-core', get_template_directory_uri() .'/fontawesome/css/all.min.css', array(), "1.0", 'all');
        wp_enqueue_style('custom-style', get_template_directory_uri() .'/style.css', array(), "1.0", 'all');

        /* add javascript */
        wp_enqueue_script('bootstrap-js', get_template_directory_uri() .'/js/bootstrap.min.js', array('jquery'), null, true);

        /* make comment reply directly on that particular comment */
        if(is_single() 
            && comments_open()
            && get_option('thread_comments')
            ) {
                wp_enqueue_script('comment-reply');
            }

    }
    add_action('wp_enqueue_scripts', 'adajiwp_scripts');

    /** this create a custom excerpt */
    function new_excerpt_text() {
        return '...';
    }
    add_filter('excerpt_more', 'new_excerpt_text');

    /* this displays the feature text for the specific page we currently at */
    function featurText() {
        if(is_front_page()) {
           the_field('header_text_front_page');
        }elseif(is_home() || is_single()) {
            _e("Adaji fashion <br />Oficial Blog. <br />Truely Home of fashion");
        }elseif(is_search()){
            _e("Adaji Official Blog");
            _e("<br>");
            printf(__('Search results for: %s'), get_search_query());
        }elseif (is_404()) {
            _e('Whoops! Page not Found <br>
           <em>Let get back on track</em>');
        }
        else {
            _e("Looking fo a Products?<br> Look no further anymore <br> Cos we've got you covered");
        }
        
    }

    /* Register our sidebars and widgetized areas. */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div class="py-3">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="font-italic">',
		'after_title'   => '</h4>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

/** custom footer css class*/
function add_footer_menu_class($classes, $item, $args) {
    if($args -> theme_location === 'footer') {
        $classes[] = 'list-group-item';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_footer_menu_class', 10, 3);


/* Custom Header */
$args = array(
    'width' => 2600,
    'height' => 600,
    'default-image' => get_template_directory_uri() . '/img/bg/bg-1.jpg',
    'upload' => true
);
add_theme_support('custom-header', $args);

register_default_headers(array(
  'watch' => array(
        'url' => get_template_directory_uri() . '/img/bg/bg-1.jpg',
        'thumbnails' => get_template_directory_uri() . '/img/bg/bg-1.jpg',
        'description' => __('picture of a watch on a dark background')
  ),
  'girl' => array(
    'url' => get_template_directory_uri() . '/img/bg/bg-3.jpg',
    'thumbnails' => get_template_directory_uri() . '/img/bg/bg-1.jpg',
    'description' =>  __('picture of a girl on a sunglass'),
),
'watck' => array(
    'url' => get_template_directory_uri() . '/img/bg/bg-2.jpg',
    'thumbnails' => get_template_directory_uri() . '/img/bg/bg-2.jpg',
    'description' => __('picture of a bracelet')
),
));
?>
