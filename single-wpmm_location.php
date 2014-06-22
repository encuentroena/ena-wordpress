<?php get_header(); ?>

			<div id="content" class="site-content locations" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

<article id="location-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="col-23">
	<header class="entry-header">
	<h1 class="entry-title"><?php the_title(); ?></h1>
	</header>
<?php $single_featured_image = flat_get_theme_option('single_featured_image'); ?>
	<div class="entry-content">
		<?php the_content( __( 'Continue reading', 'flat' ) ); ?>
		<?php if ( has_post_thumbnail() && !post_password_required() && empty( $single_featured_image )) : ?>
		<?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
			<div class="entry-thumbnail" style="background: url('<?php echo $featuredImage; ?>')"></div>
		<?php endif; ?>
		
		<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'flat' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
	</div>

</div>
<div class="col-13">
	<div class="entry-featured">
		<?php if ( has_post_thumbnail() && !post_password_required() && empty( $single_featured_image )) : ?>
		<?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
			<div class="entry-thumbnail" style="background: url('<?php echo $featuredImage; ?>')"></div>
		<?php endif; ?>
		<div class="entry-social"><?php include('social-icons.php');?></div>
	</div>
	<?php if ( dynamic_sidebar('entrada_columna_derecha') ) : else : endif; ?>
</div> 
				<?php flat_post_nav(); ?>

			<?php comments_template(); ?>
				
			<?php endwhile; ?>

			</div>

<?php get_footer(); ?>
