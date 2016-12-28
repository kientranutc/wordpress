<?php 
// cai dat hỗ trợ theme
if ( ! function_exists( 'demowp_theme_setup' ) ) {

    function themewp_setup() {

        add_theme_support( 'post-thumbnails', array( 'post' ) );
        set_post_thumbnail_size( 672, 372, true );
        add_image_size( 'themewp', 1038, 576, true );
    }
    add_action ( 'init', 'themewp_setup' );

}
  //
if ( ! isset( $content_width ) ) {
	$content_width = 660;
}

//regester menu
register_nav_menus( array(
  'primary' => __( 'Primary Menu','themewp' ),
  'social'  => __( 'Social Links Menu', 'themewp' ),
  ) );
//load css
if(!function_exists('load_theme_styles')){
    function load_theme_styles(){
        if (!is_admin()) {
            $stylesheet_url_css = get_template_directory_uri().'/css/';
            wp_enqueue_style( 'bootstrap',get_template_directory_uri().'/bootstrap/css/bootstrap.css' );
            wp_enqueue_style( 'reset',get_template_directory_uri().'/css/reset.css' );
            wp_enqueue_style( 'style', get_template_directory_uri().'/style.css' );
            wp_enqueue_style( 'responsive',get_template_directory_uri().'/css/responsive.css' );
        }
    }
}
add_action( 'wp_enqueue_scripts', 'load_theme_styles' );
//load js
if(!function_exists('load_theme_js')){
    function load_theme_js(){
        if (!is_admin()) {
            $stylesheet_url = get_template_directory_uri().'/js/';
            wp_enqueue_script( 'jquery','http://code.jquery.com/jquery-1.9.1.min.js' );
            wp_enqueue_script( 'slideshow',get_template_directory_uri().'/js/slideshow.js' );
            wp_enqueue_script( 'bootstrap.js',get_template_directory_uri().'/bootstrap/js/bootstrap.js');
            wp_enqueue_script( 'slideshow',get_template_directory_uri().'/js/main.js' );


        }
    }
}
add_action( 'wp_enqueue_scripts', 'load_theme_js' );


/**
 * Add HTML5 theme support.
 */
function wpdocs_after_setup_theme() {
    add_theme_support( 'html5', array( 'search-form' ) );
}
add_action( 'after_setup_theme', 'wpdocs_after_setup_theme' );
add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'audio', 'quote', 'link', 'gallery',
    ) );

    // This theme allows users to set a custom background.
    add_theme_support( 'custom-background', apply_filters( 'twentyfourteen_custom_background_args', array(
        'default-color' => 'f5f5f5',
    ) ) );

    // Add support for featured content.
    add_theme_support( 'featured-content', array(
        'featured_content_filter' => 'twentyfourteen_get_featured_posts',
        'max_posts' => 6,
    ) );

//sub string

if(! function_exists(cuttitle))
{
    function cuttitle($text) {

        $huy_text = strip_tags($text);
        $blah = explode(' ', $huy_text);
        if (count($blah) > 1) {
            $k = 1;
            $use_dotdotdot = 1;
        } else {
            $k = count($blah);
            $use_dotdotdot = 0;
        }

        $ihuy = '';
        for ($i=0; $i<$k; $i++) {
            $ihuy .= $blah[$i] . ' ';
        }
        $ihuy .= ($use_dotdotdot) ? '&hellip;' : '';

        return $ihuy;


    }
}

//create _get_op
function theme_settings_page(){

?>
        <div class="wrap">
        <h1>Theme Panel</h1>
        <form method="post" action="options.php">
            <?php
                settings_fields("section");
                do_settings_sections("theme-options");      
                submit_button(); 
            ?>          
        </form>
        </div>
    <?php


}

function add_theme_menu_item()
{
    add_menu_page("Theme Panel", "Theme Panel", "manage_options", "theme-panel", "theme_settings_page", null, 99);
}

add_action("admin_menu", "add_theme_menu_item");
function display_twitter_element()
{
    ?>
        <input type="text" name="twitter_url" id="twitter_url" value="<?php echo get_option('twitter_url'); ?>" />
    <?php

}

function display_facebook_element()
{
    ?>
        <input type="text" name="facebook_url" id="facebook_url" value="<?php echo get_option('facebook_url'); ?>" />
    <?php
}

function display_theme_panel_fields()
{
    add_settings_section("section", "All Settings", null, "theme-options");
    
    add_settings_field("twitter_url", "Twitter Profile Url", "display_twitter_element", "theme-options", "section");
    add_settings_field("facebook_url", "Facebook Profile Url", "display_facebook_element", "theme-options", "section");

    register_setting("section", "twitter_url");
    register_setting("section", "facebook_url");
}

add_action("admin_init", "display_theme_panel_fields");

?>
      




