<?php
#-----------------------------------------------------------------#
# Theme constants
#-----------------------------------------------------------------#
define( 'THM_THEME_DIR', dirname( __FILE__ ) );
define( 'THM_THEME_VER', '0.01' );
define( 'THM_THEME_INC_DIR', dirname( __FILE__ ) . '/inc' );
define( 'THM_THEME_FRAMEWORK_DIR', dirname( __FILE__ ) . '/framework' );
define( 'THM_TEXT_DOMAIN', 'themeeo' );


#-----------------------------------------------------------------#
# Localization
#-----------------------------------------------------------------#
add_action( 'after_setup_theme', 'lang_setup' );
function lang_setup() {
    load_theme_textdomain( THM_TEXT_DOMAIN, get_template_directory() . '/lang' );
}

#-----------------------------------------------------------------#
# Add Theme supports
#-----------------------------------------------------------------#

if ( ! function_exists( 'themeeo_after_setup' ) ):
    function themeeo_after_setup() {
        if ( ! isset( $content_width ) ) $content_width = 1170; // default content width

        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'title-tag' );
        add_editor_style();

        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );
        add_theme_support( "post-thumbnails" );

        //register custom image sizes
        //add_image_size( 'thumbnail', 150, 125, true );

        add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link',
        ) );

    }
endif;
add_action( 'after_setup_theme', 'themeeo_after_setup' );


#-----------------------------------------------------------------#
# Menu
#-----------------------------------------------------------------#
if(!function_exists('published_main_menu')):
    function published_main_menu() {
        register_nav_menu('primary', __('Primary Navigation','published'));
    }
endif;
add_action('init', 'published_main_menu');
require_once (THM_THEME_INC_DIR.'/bootstrap-wp-navwalker.php');