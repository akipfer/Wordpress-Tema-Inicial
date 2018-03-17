<?php
if ( ! function_exists( 'Houtlyn_setup' ) ) : /* TROCAR O NOME HOUTLYN PELO TEMA QUE SERÁ FEIOT */

function Houtlyn_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'Houtlyn', get_template_directory() . '/languages' );
    /* Pinegrow generated Load Text Domain End */

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );

    /*
     * ATIVANDO SUPORTE PARA THUMBNAILS EM PAGINAS E POST, DEIXANDO O SITE COM MODIFICAÇÕES EM PAGES.
     */
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 825, 510, true );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'Houtlyn' ),
        'social'  => __( 'Social Links Menu', 'Houtlyn' ),
    ) );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );
}
endif; // Houtlyn_setup

add_action( 'after_setup_theme', 'Houtlyn_setup' );


if ( ! function_exists( 'Houtlyn_init' ) ) :

function Houtlyn_init() {


    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );


}
endif;

add_action( 'init', 'Houtlyn_init' );


if ( ! function_exists( 'Houtlyn_widgets_init' ) ) :

function Houtlyn_widgets_init() {


}
add_action( 'widgets_init', 'Houtlyn_widgets_init' );
endif;



if ( ! function_exists( 'Houtlyn_customize_register' ) ) :

function Houtlyn_customize_register( $wp_customize ) {


}
add_action( 'customize_register', 'Houtlyn_customize_register' );
endif;


if ( ! function_exists( 'Houtlyn_enqueue_scripts' ) ) :
    function Houtlyn_enqueue_scripts() {

    wp_deregister_script( 'popper' );
    wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.js', false, null, true);

    wp_deregister_script( 'bootstrap' );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', false, null, true);

    wp_deregister_script( 'ieviewportbugworkaround' );
    wp_enqueue_script( 'ieviewportbugworkaround', get_template_directory_uri() . '/assets/js/ie10-viewport-bug-workaround.js', false, null, true);


    wp_deregister_style( 'bootstrap' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.css', false, null, 'all');

    wp_deregister_style( 'style' );
    wp_enqueue_style( 'style', get_bloginfo('stylesheet_url'), false, null, 'all');


    }
    add_action( 'wp_enqueue_scripts', 'Houtlyn_enqueue_scripts' );
endif;


    /* SISTEMA DE LOGIN DO WORDPRESS, ADICIONADO SEGURANÇA */
    function custom_login_css() {
    echo '<link rel="stylesheet" type="text/css" href="'.get_stylesheet_directory_uri().'/login.css"/>';
    }
    add_action('login_head', 'custom_login_css');

function my_login_logo_url() {
return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
return 'Desenvolvido por Houtlyn';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

function login_error_override()
{
    return 'Ops... Ocorreu algum erro... Tente novamente!';
}
add_filter('login_errors', 'login_error_override');

function my_login_head() {
remove_action('login_head', 'wp_shake_js', 12);
}
add_action('login_head', 'my_login_head');

function admin_login_redirect( $redirect_to, $request, $user )
{
global $user;
if( isset( $user->roles ) && is_array( $user->roles ) ) {
if( in_array( "administrator", $user->roles ) ) {
return $redirect_to;
} else {
return home_url();
}
}
else
{
return $redirect_to;
}
}

/* BOTÃO LEMBRAR-ME */
add_filter("login_redirect", "admin_login_redirect", 10, 3);

function login_checked_remember_me() {
add_filter( 'login_footer', 'rememberme_checked' );
}
add_action( 'init', 'login_checked_remember_me' );

function rememberme_checked() {
echo "<script>document.getElementById('rememberme').checked = true;</script>";
}


// MEUS POSTS TYPES
  function meus_posts_types(){
  //Habilidades
  register_post_type('habilidades',array(
    'labels'          => array(
      'name'          => __('Hablidades'),
      'singular_name' => __('Habilidade')),
    'public'      => true,
    'has_archive' => true,
    'menu_icon'   => 'dashicons-welcome-learn-more',
    'supports'    => array('title', 'editor', 'thumbnail', 'page-attributes'),


    )

  );
}
add_action('init', 'meus_posts_types');


?>
