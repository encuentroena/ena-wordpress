<?php 
if ( ! isset( $content_width ) )
	$content_width = 720;

function flat_setup() {
    load_theme_textdomain( 'flat', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'structured-post-formats', array( 'link', 'video' ) );
	add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'image', 'quote', 'status' ) );
	register_nav_menu( 'primary', __( 'Navigation Menu', 'flat' ) );
	add_theme_support( 'post-thumbnails' );
	add_filter( 'use_default_gallery_style', '__return_false' );

	// This theme styles the visual editor to resemble the theme style.
	add_editor_style( array( 'assets/css/editor-style.css' ) );

	$custom_background_support = array(
		'default-color'          => '',
		'default-image'          => get_template_directory_uri() . '/assets/img/default-background.jpg',
		'wp-head-callback'       => '_custom_background_cb',
		'admin-head-callback'    => '',
		'admin-preview-callback' => ''
	);
	add_theme_support( 'custom-background', $custom_background_support );
}
add_action( 'after_setup_theme', 'flat_setup' );

function flat_scripts_styles() {
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
	wp_enqueue_style( 'flat-template', get_template_directory_uri() . '/assets/css/template.css', array(), '1.3.4' );
	wp_enqueue_style( 'flat-style', get_stylesheet_uri(), array(), '1.3.4' );
	wp_enqueue_script( 'flat-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap-3.1.1.min.js', array( 'jquery' ), '3.1.1', true );
    wp_enqueue_script( 'flat-functions', get_template_directory_uri() . '/assets/js/functions.js', array( 'jquery', 'flat-bootstrap' ), '1.3.4', true );
}
add_action( 'wp_enqueue_scripts', 'flat_scripts_styles' );

function flat_ie_support_header() {
    echo '<!--[if lt IE 9]>'. "\n";
    echo '<script src="' . esc_url( get_template_directory_uri() . '/assets/js/html5shiv.js' ) . '"></script>'. "\n";
    echo '<script src="' . esc_url( get_template_directory_uri() . '/assets/js/respond.min.js' ) . '"></script>'. "\n";
    echo '<![endif]-->'. "\n";
}
add_action( 'wp_head', 'flat_ie_support_header' );

function flat_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Main Widget Area', 'flat' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Appears in the sidebar section of the site', 'flat' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'flat_widgets_init' );

function flat_entry_meta( $show_sep = true ) {
    // Set up and print post meta information.
	printf( __('<span class="entry-date"><a href="%1$s" rel="bookmark"><time class="entry-date" datetime="%2$s">%3$s</time></a></span> by <span class="byline"><span class="author vcard"><a class="url fn n" href="%4$s" rel="author">%5$s</a></span></span>', 'flat'),
		esc_url( get_permalink() ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		get_the_author()
	);

    if( $show_sep == true ) echo '<span class="sep">&middot;</span>';
    echo '<span class="comments-link">'.comments_popup_link( __( '0 Comment', 'flat' ), __( '1 Comment', 'flat' ), __( '% Comments', 'flat' ) ) . '</span>';
}

function flat_paging_nav() {
	global $wp_query, $paged;

	if ( $wp_query->max_num_pages < 2 && ( is_home() || is_archive() || is_search() ) )
		return; ?>
	<nav class="navigation paging-navigation" role="navigation">
		<div class="nav-links">

			<?php if ( get_next_posts_link() ) : ?>
				<div class="nav-next"><?php next_posts_link( __( '<i class="fa fa-chevron-right"></i>', 'flat' ) ); ?></div>
			<?php endif; ?>

			<?php if ( get_previous_posts_link() ) : ?>
				<div class="nav-previous"><?php previous_posts_link( __( '<i class="fa fa-chevron-left"></i>', 'flat' ) ); ?></div>
			<?php endif; ?>

			<div class="nav-current-page"><?php echo sprintf( __( 'Page %1$s of %2$s', 'flat' ), $paged, $wp_query->max_num_pages ) ?></div>
		
		</div>
	</nav>
	<?php
}

if ( ! function_exists( 'flat_post_nav' ) ) :
function flat_post_nav() {
    global $post;
    $previous = ( is_attachment() ) ? get_post( $post->post_parent ) : get_adjacent_post( false, '', true );
    $next     = get_adjacent_post( false, '', false );

    if ( ! $next && ! $previous )
        return;
    ?>
    <nav class="navigation post-navigation" role="navigation">
        <h1 class="screen-reader-text"><?php _e( 'Post navigation', 'flat' ); ?></h1>
        <div class="nav-links">

            <?php previous_post_link( '%link', _x( '<span class="meta-nav">&larr;</span> %title', 'Previous post link', 'flat' ) ); ?>
            <?php next_post_link( '%link', _x( '%title <span class="meta-nav">&rarr;</span>', 'Next post link', 'flat' ) ); ?>

        </div>
    </nav>
    <?php
}
endif;




// Add Theme Customizer functionality.
require get_template_directory() . '/inc/customizer.php';





//register settings
function theme_settings_init(){
    register_setting( 'theme_settings', 'theme_settings' );
}

//add settings page to menu
function add_settings_page() {
add_menu_page( __( 'Opciones de ENA' ), __( 'Opciones de ENA' ), 'manage_options', 'settings', 'theme_settings_page');
}

//add actions
add_action( 'admin_init', 'theme_settings_init' );
add_action( 'admin_menu', 'add_settings_page' );

//define your variables
$color_scheme = array('default','blue','green',);

//start settings page
function theme_settings_page() {

if ( ! isset( $_REQUEST['updated'] ) )
$_REQUEST['updated'] = false;

//get variables outside scope
global $color_scheme;
?>

<div>

	<div id="icon-options-general"></div>
	<h2><?php _e( 'Opciones del sitio de ENA' ) //your admin panel title ?></h2>

	<?php
	//show saved options message
	if ( false !== $_REQUEST['updated'] ) : ?>
	<div><p><strong><?php _e( 'Opciones guardadas' ); ?></strong></p></div>
	<?php endif; ?>

	<form method="post" action="options.php">

	<?php settings_fields( 'theme_settings' ); ?>
	<?php $options = get_option( 'theme_settings' ); ?>

	<table>

		<tr valign="top">
		<th scope="row"><?php _e( 'Titulo de la caja de la portada' ); ?></th>
		<td><input id="theme_settings[portada:titulo]" type="text" size="36" name="theme_settings[portada:titulo]" value="<?php esc_attr_e( $options['portada:titulo'] ); ?>" />
		<label for="theme_settings[portada:titulo]"><?php _e( '' ); ?></label></td>
		</tr>

		<tr valign="top">
		<th scope="row"><?php _e( 'Bajada de la caja de la portada' ); ?></th>
		<td><input id="theme_settings[portada:bajada]" type="text" size="90" name="theme_settings[portada:bajada]" value="<?php esc_attr_e( $options['portada:bajada'] ); ?>" />
		<label for="theme_settings[portada:bajada]"><?php _e( 'Una descripción que va debajo del titulo' ); ?></label></td>
		</tr>
		
		<tr valign="top">
		<th scope="row"><?php _e( 'Palabras que circulan:' ); ?></th>
		<td><input id="theme_settings[portada:palabra1]" type="text" size="10" name="theme_settings[portada:palabra1]" value="<?php esc_attr_e( $options['portada:palabra1'] ); ?>" />
		<label for="theme_settings[portada:palabra1]"><?php _e( 'Palabra 1' ); ?></label></td>
		</tr><tr><th></th>
		<td><input id="theme_settings[portada:palabra2]" type="text" size="10" name="theme_settings[portada:palabra2]" value="<?php esc_attr_e( $options['portada:palabra2'] ); ?>" />
		<label for="theme_settings[portada:palabra2]"><?php _e( 'Palabra 2' ); ?></label></td>
		</tr><tr><th></th>
		<td><input id="theme_settings[portada:palabra3]" type="text" size="10" name="theme_settings[portada:palabra3]" value="<?php esc_attr_e( $options['portada:palabra3'] ); ?>" />
		<label for="theme_settings[portada:palabra3]"><?php _e( 'Palabra 3' ); ?></label></td>
		</tr><tr><th></th>
		<td><input id="theme_settings[portada:palabra4]" type="text" size="10" name="theme_settings[portada:palabra4]" value="<?php esc_attr_e( $options['portada:palabra4'] ); ?>" />
		<label for="theme_settings[portada:palabra4]"><?php _e( 'Palabra 4' ); ?></label></td>
		</tr><tr><th></th>
		<td><input id="theme_settings[portada:palabra5]" type="text" size="10" name="theme_settings[portada:palabra5]" value="<?php esc_attr_e( $options['portada:palabra5'] ); ?>" />
		<label for="theme_settings[portada:palabra5]"><?php _e( 'Palabra 5' ); ?></label></td>
		</tr><tr><th></th>
		<td><input id="theme_settings[portada:palabra6]" type="text" size="10" name="theme_settings[portada:palabra6]" value="<?php esc_attr_e( $options['portada:palabra6'] ); ?>" />
		<label for="theme_settings[portada:palabra6]"><?php _e( 'Palabra 6' ); ?></label></td>
		</tr>

		<tr valign="top">
		<th scope="row"><?php _e( 'Deshabilitar Banner de Evento' ); ?></th>
		<td><input id="theme_settings[portada:verbanner]" type="checkbox" name="theme_settings[portada:verbanner]" value="display: none;" <?php checked( $options['portada:verbanner']); ?> />
		<label for="theme_settings[portada:verbanner]"><?php _e( 'Haga click si desea ocultar el banner' ); ?></label></td>
		</tr>
		
		<tr valign="top">
		<th scope="row"><?php _e( 'URL del la imagen del Banner de Eventos' ); ?></th>
		<td><input id="theme_settings[portada:banner]" type="text" size="36" name="theme_settings[portada:banner]" value="<?php esc_attr_e( $options['portada:banner'] ); ?>" />
		<label for="theme_settings[portada:banner]"><?php _e( 'Imagen en PNG: 277x274px' ); ?></label></td>
		</tr>

		<tr valign="top">
		<th scope="row"><?php _e( 'Fecha del próximo encuentro' ); ?></th>
		<td><input id="theme_settings[portada:fecha]" type="datetime" name="theme_settings[portada:fecha]" value="<?php esc_attr_e( $options['portada:fecha'] ); ?>" />
		<label for="theme_settings[portada:fecha]"><?php _e( 'Ej: 2011-01-13' ); ?></label></td>
		</tr>
		
		<tr valign="top">
		<th scope="row"><?php _e( 'Deshabilitar Video' ); ?></th>
		<td><input id="theme_settings[portada:vervideo]" type="checkbox" name="theme_settings[portada:vervideo]" value="display: none;" <?php checked( $options['portada:vervideo']); ?> />
		<label for="theme_settings[portada:vervideo]"><?php _e( 'Haga click si desea ocultar el video' ); ?></label></td>
		</tr>
		
		
		<tr valign="top">
		<th scope="row"><?php _e( 'URL del video de la portada' ); ?></th>
		<td><input id="theme_settings[portada:video]" type="text" size="36" name="theme_settings[portada:video]" value="<?php esc_attr_e( $options['portada:video'] ); ?>" />
		<label for="theme_settings[portada:video]"><?php _e( 'Video de YouTube' ); ?></label></td>
		</tr>
		
		<tr valign="top">
		<th scope="row"><?php _e( 'Deshabilitar Novedades' ); ?></th>
		<td><input id="theme_settings[portada:vernovedades]" type="checkbox" name="theme_settings[portada:vernovedades]" value="display: none;" <?php checked( $options['portada:vernovedades']); ?> />
		<label for="theme_settings[portada:vernovedades]"><?php _e( 'Haga click si desea ocultar el recuadro de novedades' ); ?></label></td>
		</tr>
		
				<tr valign="top">
		<th scope="row"><?php _e( 'Deshabilitar Noticias de Miembros' ); ?></th>
		<td><input id="theme_settings[portada:vernoticias]" type="checkbox" name="theme_settings[portada:vernoticias]" value="display: none;" <?php checked( $options['portada:vernoticias']); ?> />
		<label for="theme_settings[portada:vernoticias]"><?php _e( 'Haga click si desea ocultar el recuadro de noticias de miembros' ); ?></label></td>
		</tr>
	</table>

	<h2>Conexion con ELGG</h2>
	<table>
		<tr valign="top">
		<th scope="row"><?php _e( 'Ruta absoluta a la instalación de ELGG' ); ?></th>
		<td><input id="theme_settings[elgg:path]" type="text" name="theme_settings[elgg:path]" value="<?php esc_attr_e( $options['elgg:path'] ); ?>" />
		<label for="theme_settings[elgg:path]"><?php _e( '/srv/reevo-web/www/red/' ); ?></label></td>
		</tr>

		<tr valign="top">
		<th scope="row"><?php _e( 'Nombre del grupo en ELGG' ); ?></th>
		<td><input id="theme_settings[elgg:group]" type="text" name="theme_settings[elgg:group]" value="<?php esc_attr_e( $options['elgg:group'] ); ?>" />
		<label for="theme_settings[elgg:group]"><?php _e( 'nodocordoba' ); ?></label></td>
		</tr>
	</table>

	

	<p><input name="submit" id="submit" value="Guardar" type="submit"></p>
	</form>

</div><!-- END wrap -->

<?php
}
//sanitize and validate
function options_validate( $input ) {
    global $select_options, $radio_options;
    if ( ! isset( $input['option1'] ) )
        $input['option1'] = null;
    $input['option1'] = ( $input['option1'] == 1 ? 1 : 0 );
    $input['sometext'] = wp_filter_nohtml_kses( $input['sometext'] );
    if ( ! isset( $input['radioinput'] ) )
        $input['radioinput'] = null;
    if ( ! array_key_exists( $input['radioinput'], $radio_options ) )
        $input['radioinput'] = null;
    $input['sometextarea'] = wp_filter_post_kses( $input['sometextarea'] );
    return $input;
}
?>


<?php

/**
 * Agregamos la columna derecha del home
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name' => 'Portada - columna derecha',
		'id' => 'portada_columna_derecha',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
		register_sidebar( array(
		'name' => 'Entrada - columna derecha',
		'id' => 'entrada_columna_derecha',
		'before_widget' => '<div id="entrada_columna_derecha">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
			register_sidebar( array(
		'name' => 'Pagina - columna derecha',
		'id' => 'pagina_columna_derecha',
		'before_widget' => '<div id="pagina_columna_derecha">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );


function add_body_class( $classes )
{

    global $post;
  $post_data = get_post($post->post_parent);
    if ( isset( $post ) ) {
        $classes[] = $post->post_type . '-' . $post_data->post_name;
    }
    return $classes;
}
add_filter( 'body_class', 'add_body_class' );




?>
