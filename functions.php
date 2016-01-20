<?php
/** retira a barra de ferramentas admin do WP. **/
show_admin_bar(false);
/** Basta inserir esse código no functions.php que já vai aparecer a opção Menu no Admin **/
add_theme_support('menus');
/** Setando o tamanho da thumbs e crop **/
add_image_size( 'post-thumb', 540, 266, true );
add_theme_support( 'post-thumbnails' );

/** Widgets **/
if (function_exists('register_sidebar')) {
	register_sidebar(array());
}

	// Copyryght
	function comicpress_copyright() {
		global $wpdb;
		$copyright_dates = $wpdb->get_results("
		SELECT
		YEAR(min(post_date_gmt)) AS firstdate,
		YEAR(max(post_date_gmt)) AS lastdate
		FROM
		$wpdb->posts
		WHERE
		post_status = 'publish'
		");
		$output = '';
		if($copyright_dates) {
			$copyright = "&copy; " . $copyright_dates[0]->firstdate;
			if($copyright_dates[0]->firstdate != $copyright_dates[0]->lastdate) {
				$copyright .= '-' . $copyright_dates[0]->lastdate;
			}
			$output = $copyright;
		}
		return $output;
	}

	// Adicionando Campos Contatos

	function my_new_contactmethods( $contactmethods ) {
	// Add Twitter
	$contactmethods['twitter']   = 'Twitter';
	// Add Facebook
	$contactmethods['facebook']  = 'Facebook';
	// Add Instagram
	$contactmethods['instagram'] = 'Instagram';
	// Add YouTube
	$contactmethods['youtube']   = 'YouTube';
	return $contactmethods;
	}
	add_filter('user_contactmethods','my_new_contactmethods',10,1);

	// Custom Excerpt
	function custom_excerpt_more($more) {
	return '...';
	}
	add_filter('excerpt_more', 'custom_excerpt_more');
	function new_excerpt_length($length) {
	return 30;
	}
	add_filter('excerpt_length', 'new_excerpt_length');


/*add_action('wp_enqueue_scripts' , 'softwolf_enqueue_scripts');

function softwolf_enqueue_scripts(){

	wp_enqueue_scripts('style_css', get_template_directory_uri() . '/css/style.css');

	wp_enqueue_scripts('bootstrap_css', get_template_directory_uri() . 'bootstrap/css/bootstrap.css');

	wp_enqueue_scripts('bootstrap-theme_css', get_template_directory_uri() . 'bootstrap/css/bootstrap-theme.css');

	wp_enqueue_scripts('icons_css', get_template_directory_uri() . 'bootstrap/css/icons.css');

	wp_enqueue_scripts('bootstrap-thema_flat_php', get_template_directory_uri() . 'bootstrap/css/bootstrap-thema_flat.php');



	wp_enqueue_scripts('bootstrap_js', get_template_directory_uri() . 'bootstrap/js/bootstrap.js',array('jquery'));

	wp_enqueue_scripts('npm_js', get_template_directory_uri() . 'bootstrap/js/npm.js');

}*/

add_action( 'init', 'softwolf_init' );

function softwolf_init(){
	softwolf_register_menus();
}

function softwolf_register_menus(){
	register_nav_menu( 'nav-header-menu', "Menu Principal ( Topo )" );
}

add_action('pre_get_posts' , 'alterar_query');

function alterar_query( $query )
{
	if ( $query->is_main_query() && ! is_admin() ) :
		$query->set('category_name', 'noticias');
	endif;
}
?>

<?php /** Google Analytics **/
add_action('wp_footer', 'add_googleanalytics');
function add_googleanalytics() { ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66004413-2', 'auto');
  ga('send', 'pageview');

</script>
<?php } ?>