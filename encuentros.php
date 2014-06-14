    <?php
    /*
    Template Name: Encuentros
    */
    ?>
    
<?php get_header(); ?>

			<div id="content" class="site-content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
					<header class="entry-header">
						<h1 class="entry-title"><?php the_title(); ?></h1>
					</header>
					<div class="entry-content">

						<?php the_content( __( 'Continue reading <span class="meta-nav">...</span>', 'flat' ) ); ?>

						<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'flat' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
					
					</div>
					
<?php
	$mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'menu_order',
        'sort_order' => 'ASC',) );

	foreach( $mypages as $page ) {		
		$content = $page->post_content;
		if ( ! $content ) // Check for empty page
			continue;

		$content = apply_filters( 'the_content', $content );
	?>
		<h2><a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo $page->post_title; ?></a></h2>
		<div class="entry"><?php echo $content; ?></div>
	<?php
	}	
?>
					
				</article>

				<?php comments_template(); ?>
	
				
			<?php endwhile; ?>

			</div>

<?php get_footer(); ?>

