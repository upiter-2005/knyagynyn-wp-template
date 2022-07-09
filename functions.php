<?php

function remove_wordpress_version_number() {
    return '';
}
add_filter('the_generator', 'remove_wordpress_version_number');
function remove_version_from_scripts( $src ) {
   if ( strpos( $src, '?ver=' ) )
       $src = remove_query_arg( 'ver', $src );
   return $src;
}
add_filter( 'style_loader_src', 'remove_version_from_scripts');
add_filter( 'script_loader_src', 'remove_version_from_scripts');
/**
 * Enqueue scripts and styles.
 */
function ex_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'agrotech-css', get_template_directory_uri() . '/css/main.min.css' );
	wp_enqueue_style( 'agrotech-ui', get_template_directory_uri() . '/css/jquery-ui.css' );
	wp_enqueue_style( 'agrotech-scroll', get_template_directory_uri() . '/css/scroll.css' );
	wp_enqueue_style( 'agrotech-media', get_template_directory_uri() . '/css/jk-media.css' );
	wp_enqueue_style( 'agrotech-jk-media', get_template_directory_uri() . '/css/slick.css' );
	wp_enqueue_style( 'jk-animate', get_template_directory_uri() . '/css/animate.css' );
	
	wp_enqueue_script( 'agrotech-js', get_template_directory_uri() . '/js/scripts.min.js', array(), '', true );
	wp_enqueue_script( 'agrotech-slick', get_template_directory_uri() . '/js/slick.min.js', array(), '', true );
	wp_enqueue_script( 'wow-js', get_template_directory_uri() . '/js/WOW-master/dist/wow.js', array(), '', false );
}

add_action( 'wp_enqueue_scripts', 'ex_scripts' );

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');

//show_admin_bar(false);

require_once ( get_stylesheet_directory() . '/theme-options.php' );

add_theme_support('post-thumbnails');
add_theme_support( 'custom-logo' );
remove_filter( 'the_content', 'wpautop' );

function new_excerpt_length($length) {
	return 20;
}

add_filter('excerpt_length', 'new_excerpt_length');
add_filter('excerpt_more', function($more) {
	return '...';
});

## Отключаем Emojis в WordPress
if(1){
	## отключаем DNS prefetch
	add_filter('emoji_svg_url', '__return_empty_string');

	/**
	 * Disable the emoji's
	 */
	add_action( 'init', 'disable_emojis' );
	function disable_emojis() {
		remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
		remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
		remove_action( 'wp_print_styles', 'print_emoji_styles' );
		remove_action( 'admin_print_styles', 'print_emoji_styles' );
		remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
		remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
		remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
		add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
	}

	/**
	 * Filter function used to remove the tinymce emoji plugin.
	 *
	 * @param    array  $plugins
	 * @return   array             Difference betwen the two arrays
	 */
	function disable_emojis_tinymce( $plugins ) {
		if ( is_array( $plugins ) ) {
			return array_diff( $plugins, array( 'wpemoji' ) );
		} else {
			return array();
		}
	}
}

add_action( 'after_setup_theme', 'theme_register_nav_menu' );
function theme_register_nav_menu() {
	register_nav_menu( 'main-top', 'main-top' );
	
}

add_action( 'widgets_init', 'metrica_widjet' );
function metrica_widjet(){
	register_sidebar( array(
		'name'          => 'metrica_widjet',
		'id'            => "metrica_widjet",
		'description'   => 'Виджет для счетчиков FB Google Яндекс и т.д.',
		'before_widget' => '',
		'after_widget'  => "",
		'before_title'  => '',
		'after_title'   => "",
	) );
}

//add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'chat', 'audio') );

add_filter( 'widget_title', 'hide_widget_title' );
function hide_widget_title( $title ) {
    if ( empty( $title ) ) return '';
    if ( $title[0] == '!' ) return '';
    return $title;
}
add_filter('how_dolar', 'count_dolar');
function count_dolar($grn){
	$options = get_option('sample_theme_options');
	$kurs = $options['kurs'];
	$grn = round($grn / $kurs);
	$grn = $grn . ' USD/м2';
	return $grn;
}

$labels_video = array(
    'name' => __( 'Прогрес' ),
    'singular_name' => __( 'Всi етапи' ),
    'add_new' => __( 'Додати етап' ),
    'add_new_item' => __( 'Додати новий етап' ),
    'edit_item' => __( 'Редагувати етап' ),
    'new_item' => __( 'новий етап' ),
    'view_item' => __( 'Дивитись етап' ),
    'search_items' => __( 'Пошук етапу' ),
    'not_found' =>  __( 'Не знайдено етап' ),
    'not_found_in_trash' => __( 'No Articles found in Trash' ),
    );
  $args_progress = array(
    'labels' => $labels_video,
    'has_archive' => true,
    'public' => true,
    'hierarchical' => false,
    'menu_position' => 5,
    'supports' => array(
      'title',
      'custom-fields',
      'thumbnail', 
      ),
    );
  register_post_type( 'progress', $args_progress );




  
$labels_gal = array(
    'name' => __( 'Галерея' ),
    'singular_name' => __( 'Всi фото' ),
    'add_new' => __( 'Додати фото' ),
    'add_new_item' => __( 'Додати нове фото' ),
    'edit_item' => __( 'Редагувати фото' ),
    'new_item' => __( 'новий фото' ),
    'view_item' => __( 'Дивитись фото' ),
    'search_items' => __( 'Пошук фото' ),
    'not_found' =>  __( 'Не знайдено фото' ),
    'not_found_in_trash' => __( 'No Articles found in Trash' ),
    );
  $args_gal = array(
    'labels' => $labels_gal,
    'has_archive' => true,
    'public' => true,
    'hierarchical' => false,
    'menu_position' => 5,
    'supports' => array(
      'title',
      'custom-fields',
      'thumbnail', 
      ),
    );
  register_post_type( 'photosgal', $args_gal );





  function my_feed_rss2( $for_comments ) {
	$rss_template = get_template_directory() . '/feed/myfeed-rss2.php';
	if( file_exists( $rss_template ) )
	   load_template( $rss_template );
	else
	   do_feed_rss2( $for_comments ); // вызов функции по умолчанию
 }
 remove_all_actions( 'do_feed_rss2' );
 add_action( 'do_feed_rss2', 'my_feed_rss2', 10, 1 );

 function getCatsCustom(){
     echo 'qweqweqwe';
 }