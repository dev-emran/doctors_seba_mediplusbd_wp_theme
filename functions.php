<?php

//Custom functions
require_once get_theme_file_path('inc/custom-functions.php');

//Register custom post type slider
require_once get_theme_file_path('inc/Slider-CPT/slider-CPT.php');
//Add slider custom fields
require_once get_theme_file_path('inc/Slider-CPT/slider_custom-fields.php');

//Register custom post type Schedule
require_once get_theme_file_path('inc/Schedule-CPT/schedule-cpt.php');
//Add Schedule custom fields
require_once get_theme_file_path('inc/Schedule-CPT/schedule_custom-fields.php');

//Register custom post type Features
require_once get_theme_file_path('inc/Features/features-cpt.php');
//Add Schedule custom fields
require_once get_theme_file_path('inc/Features/features_custom-fields.php');

//Register custom post type Features
require_once get_theme_file_path('inc/Fun-facts/funfacts-cpt.php');
//Add Schedule custom fields
require_once get_theme_file_path('inc/Fun-facts/funfacts_custom-fields.php');

//Register custom post type Portfolio
require_once get_theme_file_path('inc/Portfolio/portfolio-cpt.php');
//Add Portfolio custom fields
// require_once get_theme_file_path('inc/Portfolio/portfolio_custom-fields.php');

//Register custom post type Services
require_once get_theme_file_path('inc/Services/servides-cpt.php');
//Add Portfolio custom fields
require_once get_theme_file_path('inc/Services/services_custom-fields.php');

//customize API
require_once get_theme_file_path('inc/Customizer/mediplus_theme_customizer.php');

//Included cmb2 library
require_once get_theme_file_path('lib/CMB2/init.php');

//Codestar framework
require_once get_theme_file_path('lib/Codestar/codestar-framework.php');
require_once get_theme_file_path('inc/Codestar/theme-options.php');

/* This block of code in PHP is defining a function `dsmb_theme_setup_and_support` that sets up various
theme supports for a WordPress theme. */

if (! function_exists('dsmb_theme_setup_and_support')) {
    function dsmb_theme_setup_and_support()
    {
        load_theme_textdomain('dsmb');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails', ['post', 'slider', 'portfolio']);
        add_theme_support('html5', ['comment-list', 'comment-form', 'search-form', 'gallery', 'caption']);
        add_theme_support('post-formats', ['aside', 'image', 'video', 'quote', 'link', 'gallery', 'audio']);

        register_nav_menus([
            'nav_menu' => __('Main menu', 'dsmb'),
            'top_menu' => __('Top Menu', 'dsmb'),

        ]);
    }
}

add_action('after_setup_theme', 'dsmb_theme_setup_and_support');

//nav menu submenu
if (! function_exists('dsmb_nav_submenu_css_class')) {
    function dsmb_nav_submenu_css_class($classes, $args, $depth)
    {
        if ($args->theme_location = 'nav_menu') {
            if (in_array('sub-menu', $classes)) {
                $classes[] = 'dropdown';
            }
        }
        return $classes;
    }
}
add_filter('nav_menu_submenu_css_class', 'dsmb_nav_submenu_css_class', 10, 3);

//nav sub menu icon fixed
if (! function_exists('dsmb_sub_menu_icon')) {
    function dsmb_sub_menu_icon($items, $args)
    {
        foreach ($items as $item) {
            if (in_array('menu-item-has-children', $item->classes)) {
                $item->title .= '<i class="icofont-rounded-down"></i>';
            }
        }

        return $items;
    }
}
add_filter('wp_nav_menu_objects', 'dsmb_sub_menu_icon', 10, 2);

//nav menu active class fixed
if (! function_exists('dsmb_nav_menu_active_calss')) {

    function dsmb_nav_menu_active_calss($classes, $item, $args, $depth)
    {
        if ($args->theme_location === 'nav_menu') {
            if (in_array('current-menu-item', $classes) || in_array('current-menu-ancestor', $classes)) {
                $classes[] = 'active';
            }

            if ($item->url === home_url('/') && is_front_page()) {
                $classes[] = 'active';
            } else if ($item->url === home_url('/')) {
                $classes = array_diff($classes, ['active']);
            }
        }

        return array_unique($classes);
    }
}

add_filter('nav_menu_css_class', 'dsmb_nav_menu_active_calss', 10, 4);

/*
The below PHP code is defining a function `dsmb_enqueue_scripts` that is responsible for enqueueing
various stylesheets and scripts in a WordPress theme.
 */
if (! function_exists('dsmb_enqueue_scripts')) {
    function dsmb_enqueue_scripts()
    {
        // $version = wp_get_theme()->get('Version');
        $version = time();

        /*
        Enqueue the all styles
         */

        //Bootstrap CSS
        wp_enqueue_style('dsmb-bootstrap', get_theme_file_uri('assets/css/bootstrap.min.css'), [], $version, 'all');
        //Nice Select CSS
        wp_enqueue_style('dsmb-fontawesome', get_theme_file_uri('assets/css/nice-select.css'), [], $version, 'all');
        //Font Awesome CSS
        wp_enqueue_style('dsmb-nice-select', get_theme_file_uri('assets/css/font-awesome.min.css'), [], $version, 'all');
        //icofont CSS
        wp_enqueue_style('dsmb-icofont', get_theme_file_uri('assets/css/icofont.css'), [], $version, 'all');
        //Slicknav
        wp_enqueue_style('dsmb-slicknav', get_theme_file_uri('assets/css/slicknav.min.css'), [], $version, 'all');
        //Owl Carousel CSS
        wp_enqueue_style('dsmb-owl-carousel', get_theme_file_uri('assets/css/owl-carousel.css'), [], $version, 'all');
        //Datepicker CSS
        wp_enqueue_style('dsmb-date-picker', get_theme_file_uri('assets/css/datepicker.css'), [], $version, 'all');
        //Animate CSS
        wp_enqueue_style('dsmb-animate', get_theme_file_uri('assets/css/animate.min.css'), [], $version, 'all');
        //Magnific Popup CSS
        wp_enqueue_style('dsmb-magnific', get_theme_file_uri('assets/css/magnific-popup.css'), [], $version, 'all');

        /*
        Doctors Seba Mediplusbd Styles
         */

        //Normalize CSS
        wp_enqueue_style('dsmb-normalize', get_theme_file_uri('assets/css/normalize.css'), [], $version, 'all');
        //Normalize CSS
        wp_enqueue_style('dsmb-style', get_theme_file_uri('assets/style.css'), [], $version, 'all');

        //Responsive CSS
        wp_enqueue_style('dsmb-responsive', get_theme_file_uri('assets/css/responsive.css'), [], $version, 'all');

        //Theme main style
        wp_enqueue_style('dsmb-main', get_stylesheet_uri());

        /*
        Enqueue the all Scripts
         */

        //query Min JS
        wp_enqueue_script('dsmb-jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', [], $version, true);
        //jquery Migrate JS
        wp_enqueue_script('dsmb-jquery-migrate', get_theme_file_uri('assets/js/jquery-migrate-3.0.0.js'), ['dsmb-jquery'], $version, true);
        //jquery Ui JS
        wp_enqueue_script('dsmb-jquery-ui', get_theme_file_uri('assets/js/jquery-ui.min.js'), ['dsmb-jquery'], $version, true);
        //Easing JS
        wp_enqueue_script('dsmb-easing', get_theme_file_uri('assets/js/easing.js'), [], $version, true);
        //Color JS
        wp_enqueue_script('dsmb-color', get_theme_file_uri('assets/js/colors.js'), [], $version, true);
        //Popper JS
        wp_enqueue_script('dsmb-propper', get_theme_file_uri('assets/js/popper.min.js'), [], $version, true);
        //Bootstrap Datepicker JS
        wp_enqueue_script('dsmb-bs-datepicker', get_theme_file_uri('assets/js/bootstrap-datepicker.js'), [], $version, true);
        //Jquery Nav JS
        wp_enqueue_script('dsmb-jq-nav', get_theme_file_uri('assets/js/jquery.nav.js'), ['dsmb-jquery'], $version, true);
        //Slicknav JS
        wp_enqueue_script('dsmb-silkynav', get_theme_file_uri('assets/js/slicknav.min.js'), [], $version, true);
        //ScrollUp JS
        wp_enqueue_script('dsmb-scrollup', get_theme_file_uri('assets/js/jquery.scrollUp.min.js'), ['dsmb-jquery'], $version, true);
        //Niceselect JS
        wp_enqueue_script('dsmb-niceselect', get_theme_file_uri('assets/js/niceselect.js'), [], $version, true);
        //Tilt Jquery JS
        wp_enqueue_script('dsmb-tilt', get_theme_file_uri('assets/js/tilt.jquery.min.js'), ['dsmb-jquery'], $version, true);
        //Owl Carousel JS
        wp_enqueue_script('dsmb-owl-carousel-js', get_theme_file_uri('assets/js/owl-carousel.js'), [], $version, true);
        //counterup JS
        wp_enqueue_script('dsmb-counterup', get_theme_file_uri('assets/js/jquery.counterup.min.js'), ['dsmb-jquery'], $version, true);
        //Steller JS
        wp_enqueue_script('dsmb-steller', get_theme_file_uri('assets/js/steller.js'), [], $version, true);
        //Wow JS
        wp_enqueue_script('dsmb-wow', get_theme_file_uri('assets/js/wow.min.js'), [], $version, true);
        //Magnific Popup JS
        wp_enqueue_script('dsmb-magnific-popup', get_theme_file_uri('assets/js/jquery.magnific-popup.min.js'), [], $version, true);
        //Waypoints CDN
        wp_enqueue_script('dsmb-waypoints', '//cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js', [], $version, true);
        //Bootstrap JS
        wp_enqueue_script('dsmb-bootstrap-js', get_theme_file_uri('assets/js/bootstrap.min.js'), [], $version, true);
        //main JS
        wp_enqueue_script('dsmb-main-js', get_theme_file_uri('assets/js/main.js'), ['dsmb-jquery'], $version, true);
    }
}

add_action('wp_enqueue_scripts', 'dsmb_enqueue_scripts');

//admin scripts enqueque

/*
The code block you provided is defining a function `dsmb_admin_enqueque` that is responsible for
enqueueing stylesheets and scripts specifically for the WordPress admin area.
 */
if (! function_exists('dsmb_admin_enqueque')) {
    function dsmb_admin_enqueque()
    {
        $version = wp_get_theme()->get('Version');
        
        //css enqueue
        wp_enqueue_style('dsmb-admin-css', get_theme_file_uri('assets/Admin/css/dsmb_admin.css'), [], time(), 'all');

        //js enqueue
        //wp_register_script('dsmb-admin-js', get_theme_file_uri('assets/Admin/js/dsmb_admin.js'), [], time(), true);
        wp_enqueue_script('dsmb-admin-js', get_theme_file_uri('assets/Admin/js/dsmb_admin.js'), ['jquery'], time(), true);

    }

}

add_action('admin_enqueue_scripts', 'dsmb_admin_enqueque');

//enqueque widgets scripts
/* The PHP code is defining a function `dsmb_widgets_scripts` that is hooked into the
`admin_enqueue_scripts` action. This function checks if the current admin page is 'widgets.php', and
if so, it enqueues the WordPress media library and a custom JavaScript file named 'widgets.js'
located in the theme's 'assets/Admin/js' directory. The JavaScript file is enqueued with a
dependency on jQuery and a version parameter set to `time()` to ensure it is not cached. */
if (! function_exists('dsmb_widgets_scripts')) {
    function dsmb_widgets_scripts($hook)
    {
        if ('widgets.php' === $hook) {
            wp_enqueue_media();
            wp_enqueue_script('dsmb-widgets-js', get_theme_file_uri('assets/Admin/js/widgets.js'), ['jquery'], time(), true);
        }
    }
}
add_action('admin_enqueue_scripts', 'dsmb_widgets_scripts');



//dsmb widgets
require_once get_theme_file_path('inc/widgets/dsmb-widgets.php');

//dsmb social icon widgets
require_once get_theme_file_path('inc/widgets/social-icon-widget.php');



if (! function_exists('dsmb_widgets_register')) {
    function dsmb_widgets_register()
    {
        register_sidebar([
            'name'          => __('Footer Left', 'dsmb'),
            'id'            => 'dsmb-footer-left',
            'description'   => __('Footer sidebar that appears on the left.', 'dsmb'),
            'before_widget' => '<div id="%1$s" class="%2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>',
        ]);

        register_sidebar([
            'name'          => __('Footer Right', 'dsmb'),
            'id'            => 'dsmb-footer-right',
            'description'   => __('Footer sidebar that appears on the right.', 'dsmb'),
            'before_widget' => '<div id="%1$s" class="%2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>',
        ]);

        register_sidebar([
            'name'          => __('Footer Open Hours', 'dsmb'),
            'id'            => 'dsmb-footer-right_open_hours',
            'description'   => __('Footer sidebar that appears on the right open hour section.', 'dsmb'),
            'before_widget' => '<div id="%1$s" class="%2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>',
        ]);

        register_sidebar([
            'name'          => __('Footer Quick Links Head', 'dsmb'),
            'id'            => 'dsmb-footer-right_quick_links_head',
            'description'   => __('Footer sidebar that appears on the right open hour section.', 'dsmb'),
            'before_widget' => '<div id="%1$s" class="%2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>',
        ]);

        register_widget('Widgets_dsmb');
    }
}
add_action('widgets_init', 'dsmb_widgets_register');
