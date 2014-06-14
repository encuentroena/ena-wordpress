<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="col-23">
	<header class="entry-header">
		 <?php $single_metadata = flat_get_theme_option('single_metadata'); if ( empty( $single_metadata ) ) : ?>
      <div class="entry-meta"><?php the_time('j') ?><br/><?php the_time('M') ?></div>
    <?php endif; ?>
	<h1 class="entry-title"><?php the_title(); ?></h1>
	</header>
	<?php $single_featured_image = flat_get_theme_option('single_featured_image'); ?>
<div class="entry-excerpt">
<?php the_excerpt(); ?>
</div>
	<div class="entry-content">
		<?php the_content( __( 'Continue reading', 'flat' ) ); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'flat' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
	</div>

	<?php
	$tag_list = get_the_tag_list( '', __( ' ', 'flat' ) );
	if ( $tag_list && is_single() ) {
		echo '<div class="tags-links">' . $tag_list . '</div>';
	} ?>
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
</article>
