<?php
function mairiegranddakar_enqueue_scripts() {
    // Enqueue styles
    wp_enqueue_style('bootstrap-css', 'https://mairiegranddakar.com/public/css/bootstrap.css', array(), null);
    wp_enqueue_style('style-css', get_template_directory_uri() . '/style.css', array('bootstrap-css'), null);
    wp_enqueue_style('custom-style-css', 'https://mairiegranddakar.com/public/css/style.css', array('style-css'), null);
    wp_enqueue_style('responsive-css', 'https://mairiegranddakar.com/public/css/responsive.css', array('custom-style-css'), null);
    wp_enqueue_style('color-switcher-css', 'https://mairiegranddakar.com/public/css/color-switcher-design.css', array('responsive-css'), null);

    // Enqueue scripts
    wp_enqueue_script('jquery');
    wp_enqueue_script('popper-js', 'https://mairiegranddakar.com/public/js/popper.min.js', array('jquery'), null, true);
    wp_enqueue_script('bootstrap-js', 'https://mairiegranddakar.com/public/js/bootstrap.min.js', array('popper-js'), null, true);
    wp_enqueue_script('custom-scrollbar-js', 'https://mairiegranddakar.com/public/js/jquery.mCustomScrollbar.concat.min.js', array('jquery'), null, true);
    wp_enqueue_script('fancybox-js', 'https://mairiegranddakar.com/public/js/jquery.fancybox.js', array('jquery'), null, true);
    wp_enqueue_script('appear-js', 'https://mairiegranddakar.com/public/js/appear.js', array('jquery'), null, true);
    wp_enqueue_script('nav-tool-js', 'https://mairiegranddakar.com/public/js/nav-tool.js', array('jquery'), null, true);
    wp_enqueue_script('mixitup-js', 'https://mairiegranddakar.com/public/js/mixitup.js', array('jquery'), null, true);
    wp_enqueue_script('owl-js', 'https://mairiegranddakar.com/public/js/owl.js', array('jquery'), null, true);
    wp_enqueue_script('wow-js', 'https://mairiegranddakar.com/public/js/wow.js', array('jquery'), null, true);
    wp_enqueue_script('isotope-js', 'https://mairiegranddakar.com/public/js/isotope.js', array('jquery'), null, true);
    wp_enqueue_script('jquery-ui-js', 'https://mairiegranddakar.com/public/js/jquery-ui.js', array('jquery'), null, true);
    wp_enqueue_script('custom-script-js', 'https://mairiegranddakar.com/public/js/script.js', array('jquery'), null, true);
    wp_enqueue_script('color-settings-js', 'https://mairiegranddakar.com/public/js/color-settings.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'mairiegranddakar_enqueue_scripts');
?>
