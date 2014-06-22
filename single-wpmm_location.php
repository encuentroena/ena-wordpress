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
		<?php the_content( __( 'Continue reading', 'flat' ) ); ?>
		<div class="foto-box">
			<div class="foto" style="background: url(<?php the_field('foto'); ?>) no-repeat"></div>
			<div class="epigrafe"><?php the_field('epigrafe'); ?></div>
		</div>
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
