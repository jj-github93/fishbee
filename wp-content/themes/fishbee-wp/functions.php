<?php
/**
 * tailwindcss functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package tailwindcss
 */


//  Include walker class
//require get_template_directory() . '/inc/walker.php';


function index_display()
{

    if (have_posts()) {

        $args = array(
            'numberposts' => 4,
            'orderby' => 'date',
        );
        $posts_array = get_posts($args);

        if (!empty($posts_array)) {
            $count = 1;
            foreach ($posts_array as $_post) {
                global $post;
                $post = get_post($_post);

                if ($count == 1) {

                    get_template_part('template-parts/lead-card', setup_postdata($post));

                } elseif ($count == 2) {
                    echo '<div class="flex flex-wrap justify-between pt-12 -mx-6">';

                    get_template_part('template-parts/minor-card', setup_postdata($post));

                } else {
                    get_template_part('template-parts/minor-card', setup_postdata($post));
                }
                $count += 1;
            }
            echo '</div>';

        }
    }
    else{
        get_template_part('template-parts/content', 'none');
    }
}


add_theme_support('menus');

if (!function_exists('tailwindcss_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function tailwindcss_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on tailwindcss, use a find and replace
         * to change 'tailwindcss' to the name of your theme in all the template files.
         */
        load_theme_textdomain('tailwindcss', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'Primary' => esc_html__('Primary', 'tailwindcss'),
            'Footer' => esc_html__('Footer', 'tailwindcss'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('tailwindcss_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support('custom-logo', array(
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        ));
    }
endif;
add_action('after_setup_theme', 'tailwindcss_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function tailwindcss_content_width()
{
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters('tailwindcss_content_width', 640);
}

add_action('after_setup_theme', 'tailwindcss_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function tailwindcss_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'tailwindcss'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'tailwindcss'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'tailwindcss_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function tailwindcss_scripts()
{

    wp_enqueue_style('tailwindcss-framework', get_template_directory_uri() . '/tailwind.clrs.css');

    wp_enqueue_style('tailwindcss-style', get_stylesheet_uri());

    wp_enqueue_script('tailwindcss-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true);

    wp_enqueue_script('tailwindcss-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'tailwindcss_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if (class_exists('WooCommerce')) {
    require get_template_directory() . '/inc/woocommerce.php';
}

/**
 * Add function to add classes to in post elements
 */
require get_template_directory() . '/inc/add-classes.php';
