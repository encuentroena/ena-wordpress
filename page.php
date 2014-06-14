<?php get_header(); ?>

			<div id="content" class="site-content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
<div class="col-23">
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
				<div class="col-23">
					<header class="entry-header">
						<h1 class="entry-title"><?php the_title(); ?></h1>
					</header>
					<div class="entry-content">

						<?php the_content( __( 'Continue reading <span class="meta-nav">...</span>', 'flat' ) ); ?>

						<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'flat' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
					
					</div>
				</article>

				<?php comments_template(); ?>
</div>

				<div class="col-13">
						<div class="entry-featured">
		<?php if ( has_post_thumbnail() && !post_password_required() && empty( $single_featured_image )) : ?>
		<?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
			<div class="entry-thumbnail" style="background: url('<?php echo $featuredImage; ?>')"></div>
		<?php endif; ?>
		<div class="entry-social"><?php include('social-icons.php');?></div>
	</div>
					<?php if ( dynamic_sidebar('pagina_columna_derecha') ) : else : endif; ?>
				</div>
				
				
			<?php endwhile; ?>

			</div>

<?php get_footer(); ?>
