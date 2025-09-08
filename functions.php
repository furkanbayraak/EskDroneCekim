
<?php
// functions.php içine ekle
function drone_tema_scripts() {
    // CSS Dosyaları
    wp_enqueue_style(
        'bootstrap-css',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css',
        array(),
        '5.3.0',
        'all'
    );
    
    // Font Awesome CSS
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css',
        array(),
        '6.4.0',
        'all'
    );
    
    // Fancybox CSS
    wp_enqueue_style(
        'fancybox-css',
        'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css',
        array(),
        '5.0',
        'all'
    );
    // bootstrap icons
    wp_enqueue_style(
        'bootstrap-icons',
        'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css',
        array(),
        '5.0',
        'all'
    );

    wp_enqueue_style(
        'main-css',
        get_stylesheet_uri(), // style.css dosyan
        array('bootstrap-css', 'font-awesome', 'fancybox-css') // Tüm CSS'lerden sonra yüklensin
        
    );

    // JS Dosyaları
    // WordPress'in jQuery'sini kullan
    wp_enqueue_script('jquery');
    
    wp_enqueue_script(
        'bootstrap-js',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js',
        array(),
        '5.3.0',
        true
    );
    
    // Fancybox JS
    wp_enqueue_script(
        'fancybox-js',
        'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js',
        array(),
        '5.0',
        true
    );
    

    wp_enqueue_script(
        'main-js',
        get_template_directory_uri() . '/main.js',
        array('bootstrap-js', 'fancybox-js'), // Tüm kütüphanelerden sonra yüklensin
        true
    );
}
add_action('wp_enqueue_scripts', 'drone_tema_scripts');

// Tema desteği ekle
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));








// Menü desteği ekle
/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'DroneCekim' ),
) );
?>