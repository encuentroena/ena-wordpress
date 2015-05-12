    <?php
    error_reporting(-1);
	ini_set('display_errors', 'On');
    /*
    Template Name: Red Comunidad ENA
    */
    
    $options = get_option( 'theme_settings' ); 
    $elgg_path = $options['elgg:path'].'/engine/start.php';
    
    // Conecta con ELGG
    require_once ( $elgg_path );

    ?>

<?php get_header(); ?>

			<div id="content" class="site-content fullwidth" role="main">
			
			<?php echo $options['elgg:path'];?>
			<?php echo $options['elgg:group'];?>

			<?php while ( have_posts() ) : the_post(); ?>
<div class="col-23">
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
				<div class="col-23">
					<header class="entry-header">
						 <div class="entry-meta"></div>
						<h1 class="entry-title"><?php the_title(); ?></h1>
					</header>
					
		</div>			
</div>

				<div class="col-13">
						<div class="entry-featured">
							<div class="entry-social"><?php include('social-icons.php');?></div>
						</div>
					<?php if ( dynamic_sidebar('pagina_columna_derecha') ) : else : endif; ?>
				</div>
					<div class="entry-content">

						<?php the_content( __( 'Continue reading <span class="meta-nav">...</span>', 'flat' ) ); ?>

						<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'flat' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
					
					</div>
				</article>

				<?php comments_template(); ?>

				
				
			<?php endwhile; ?>

			</div>

<?php get_footer(); ?>
