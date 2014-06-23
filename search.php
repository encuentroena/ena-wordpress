<?php get_header(); ?>
	<div id="content" class="site-content search" role="main">
	<?php if ( have_posts() ) : ?>
		<div class="col-23">
				<header class="entry-header">
					<div class="entry-meta"></div>
					<h1 class="entry-title"><?php printf( __( 'Search Results for: %s', 'flat' ), get_search_query() ); ?></h1>
				</header>
		</div>
		<div class="col-13">
			<div class="entry-featured">
				<div class="entry-social">
				</div>
			</div>
		</div>
	

		
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', get_post_format() ); ?>
		<?php endwhile; ?>
		<?php flat_paging_nav(); ?>
	<?php else : ?>
		<?php get_template_part( 'content', 'none' ); ?>
	<?php endif; ?>
	</div>
<?php get_footer(); ?>
