<?php get_header(); ?>

			<div id="content" class="site-content miembros" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

<article id="location-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="col-23">
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<div class="entry-meta">
			<?php
if(get_field('web'))
{
	echo '<a class="logo web" href="' . get_field('web') . '" target="a_blank">' . get_field('web') . '</a>';
}
?>
			<?php
if(get_field('email'))
{
	echo '<a class="logo mail" href="mailto:' . get_field('email') . '" target="a_blank">' . get_field('email') . '</a>';
}
?>		
			<?php
if(get_field('facebook'))
{
	echo '<a class="logo facebook" href="' . get_field('facebook') . '" target="a_blank"></a>';
}
?>	

			<?php
if(get_field('twitter'))
{
	echo '<a class="logo twitter" href="' . get_field('twitter') . '" target="a_blank"></a>';
}
?>	
			
		</div>
	</header>
<?php $single_featured_image = flat_get_theme_option('single_featured_image'); ?>
	<div class="entry-content">
							<?php
if(get_field('logo'))
{
	echo '<div class="logo-member" style="background: url(' . get_field('logo') . ') no-repeat"></div>';
}
?>
		<?php the_content( __( 'Continue reading', 'flat' ) ); ?>
		
					<?php
if(get_field('foto'))
{
	echo '<div class="foto-box">
			<div class="foto" style="background: url(' . get_field('foto') . ') no-repeat"></div>
			<div class="epigrafe">' . get_field('epigrafe') . '</div>
		</div>';
}
?>
		
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
	


				
					<?php   
					if(get_field('feed')) {
							include_once(ABSPATH . WPINC . '/rss.php');
						    $feed = get_field('feed');
						    $rss = fetch_feed($feed);
						    if (!is_wp_error( $rss ) ) :
						    $maxitems = $rss->get_item_quantity(3);
						    $rss_items = $rss->get_items(0, $maxitems);
						    if ($rss_items):
						    echo '<div class="news-member">	
					<div id="news-members" class="tbox"> Sus últimas noticias
					</div>';
						    foreach ( $rss_items as $item ) :
						    //instead of a bunch of string concatenation or echoes, I prefer the terseness of printf
						    //(http://php.net/manual/en/function.printf.php)
						    printf('<a href="%s" target="a_blank">
						    						    <div class="news-memb-item">
							<div class="news-memb-fecha">%s<br/>%s</div>
							<div class="news-memb-info">
								<div class="news-memb-h">
									%s
								</div>
							</div>
						</div>
						   </a>',$item->get_permalink(),$item->get_date('j'),$item->get_date('M'),$item->get_title() );
						    endforeach;
							echo '</div>';
						    endif;
						    endif;
						    }
						    ?>

						
</div> 
				<?php flat_post_nav(); ?>

			<?php comments_template(); ?>
				
			<?php endwhile; ?>

			</div>

<?php get_footer(); ?>
