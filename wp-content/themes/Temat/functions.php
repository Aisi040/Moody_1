<?php
/**
 * Theme's functions.php file
 *
 * @package YourTheme
 */

// Add theme support for WooCommerce (if you're using WooCommerce)
function yourtheme_add_woocommerce_support() {
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'yourtheme_add_woocommerce_support');

// Register and enqueue the theme's style.css with version control
function yourtheme_enqueue_styles() {
    // Get the theme's version number for cache-busting.
    $theme_version = wp_get_theme()->get('Version');
    
    wp_enqueue_style('yourtheme-style', get_stylesheet_uri(), array(), $theme_version);
    
    // If you have a separate stylesheet for the footer or other parts, enqueue them here as well
    wp_enqueue_style('yourtheme-footer-style', get_template_directory_uri() . '/footer-style.css', array(), $theme_version);
    // If you have a custom script, you can enqueue it here as well.
    // Just make sure to give it a unique handle and point it to the right script file.
    // Example:
    // wp_enqueue_script('yourtheme-custom-script', get_template_directory_uri() . '/js/custom-script.js', array(), $theme_version, true);
}
add_action('wp_enqueue_scripts', 'yourtheme_enqueue_styles');

// Add a JavaScript snippet in <head> to define window.locale
function yourtheme_define_window_locale() {
    ?>
    <script>
        if (typeof window.locale === 'undefined') {
            window.locale = 'en_US'; // Set your desired locale, e.g., 'en_US'.
        }
    </script>
    <?php
}
add_action('wp_head', 'yourtheme_define_window_locale');
