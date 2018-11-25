<?php 
require_once get_theme_file_path("/inc/metaboxes/section.php");
require_once get_theme_file_path("/inc/metaboxes/page.php");
require_once get_theme_file_path("/inc/metaboxes/section-slider.php");
require_once get_theme_file_path("/inc/metaboxes/section-feature-services.php");
require_once get_theme_file_path("/inc/metaboxes/section-about.php");
require_once get_theme_file_path("/inc/metaboxes/section-services.php");
require_once get_theme_file_path("/inc/metaboxes/section-call-to-action.php");
require_once get_theme_file_path("/inc/metaboxes/section-skills.php");
require_once get_theme_file_path("/inc/metaboxes/section-facts.php");
require_once get_theme_file_path("/inc/metaboxes/section-clients.php");
require_once get_theme_file_path("/inc/metaboxes/section-testimonials.php");
require_once get_theme_file_path("/inc/metaboxes/section-portfolio.php");
require_once get_theme_file_path("/inc/metaboxes/section-team.php");
require_once get_theme_file_path("/inc/metaboxes/section-contact.php");

function bizpage_theme_setup()
{
    load_theme_textdomain('bizpage', get_template_directory() . '/languages');
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ));
    add_theme_support('post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ));
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'bizpage')
    ));
    add_theme_support('custom-logo', array(
        'height' => '',
        'width' => '',
        'flex-height' => true,
        'flex-width' => true,
        'header-text' => array('site-title', 'site-description'),
    ));
}
add_action('after_setup_theme', 'bizpage_theme_setup');

function bizpage_assets()
{
    wp_enqueue_style('fonts-sans-pro', '//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700');
    wp_enqueue_style('bootstrap', get_theme_file_uri('/lib/bootstrap/css/bootstrap.min.css'));
    wp_enqueue_style('font-awesome', get_theme_file_uri('/lib/font-awesome/css/font-awesome.min.css'));
    wp_enqueue_style('animate-min', get_theme_file_uri('/lib/animate/animate.min.css'));
    wp_enqueue_style('ionicons', get_theme_file_uri('/lib/ionicons/css/ionicons.min.css'));
    wp_enqueue_style('owl-carousel', get_theme_file_uri('/lib/owlcarousel/assets/owl.carousel.min.css'));
    wp_enqueue_style('lightbox', get_theme_file_uri('/lib/lightbox/css/lightbox.min.css'));
    wp_enqueue_style('style', get_theme_file_uri('/css/style.css'));
    wp_enqueue_style('main', get_stylesheet_uri());

    wp_enqueue_script('jquery-migrate-js', get_theme_file_uri('/lib/jquery/jquery-migrate.min.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('bootstrap-bundle-js', get_theme_file_uri('/lib/bootstrap/js/bootstrap.bundle.min.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('easing-min-js', get_theme_file_uri('/lib/easing/easing.min.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('hoverIntent-js', get_theme_file_uri('/lib/superfish/hoverIntent.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('superfish-js', get_theme_file_uri('/lib/superfish/superfish.min.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('wow-min-js', get_theme_file_uri('/lib/wow/wow.min.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('waypoints-js', get_theme_file_uri('/lib/waypoints/waypoints.min.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('counterup-js', get_theme_file_uri('/lib/counterup/counterup.min.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('owl-carousel-js', get_theme_file_uri('/lib/owlcarousel/owl.carousel.min.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('isotope-pkgd-js', get_theme_file_uri('/lib/isotope/isotope.pkgd.min.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('lightbox-js', get_theme_file_uri('/lib/lightbox/js/lightbox.min.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('jquery-touchSwipe-js', get_theme_file_uri('/lib/touchSwipe/jquery.touchSwipe.min.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('contactform-js', get_theme_file_uri('/contactform/contactform.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('main-js', get_theme_file_uri('/js/main.js'), array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'bizpage_assets');

function bizpage_widgets_init()
{
    register_sidebar(array(
        'name' => __('Footer Sidebar 1', 'theme-slug'),
        'id' => 'footer-sidebar-1',
        'description' => __('Widgets in this area will be shown on Footer Area One', 'bizpage'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => __('Footer Sidebar 2', 'theme-slug'),
        'id' => 'footer-sidebar-2',
        'description' => __('Widgets in this area will be shown on Footer Area Two', 'bizpage'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));
    register_sidebar(array(
        'name' => __('Footer Sidebar 3', 'theme-slug'),
        'id' => 'footer-sidebar-3',
        'description' => __('Widgets in this area will be shown on Footer Area Three', 'bizpage'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));
    register_sidebar(array(
        'name' => __('Footer Social Icon', 'theme-slug'),
        'id' => 'footer-sidebar-4',
        'description' => __('Widgets in this area will be shown on Footer Area Social Icon', 'bizpage'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));
    register_sidebar(array(
        'name' => __('Footer Sidebar 5', 'theme-slug'),
        'id' => 'footer-sidebar-5',
        'description' => __('Widgets in this area will be shown on Footer Area Five', 'bizpage'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));
    register_sidebar(array(
        'name' => __('Footer Copyright', 'theme-slug'),
        'id' => 'footer-copyright',
        'description' => __('Widgets in this area will be shown on Footer Copyright', 'bizpage'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));
}
add_action('widgets_init', 'bizpage_widgets_init');

function bizpage_onepage_nav_menu($menus)
{
    $string_to_replace = home_url('/') . 'section/';
    if (is_front_page()) {
        foreach ($menus as $menu) {
            $new_url = str_replace($string_to_replace, '#', $menu->url);
            if ($new_url != $menu->url) {
                $new_url = rtrim($new_url, '/');
            }
            $menu->url = $new_url;
        }
    }
    return $menus;
}
add_filter('wp_nav_menu_objects', 'bizpage_onepage_nav_menu');

