    <?php
    /*
    Template Name: Archivos
    */
    ?>

<?php get_header(); ?>

			<div id="content" class="site-content archive" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="col-23">
				<header class="entry-header">
					<div class="entry-meta"></div>
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</header>
	</div>
	<div class="col-13">
		<div class="entry-featured">
			<div class="entry-social"><?php include('social-icons.php');?>
			</div>
		</div>
	</div>
	<div class="col-13">
		<div class="archive-post-title news-item ena"><h2>Noticias de ENA</h2></div>
		<div class="archivo-listados">
<?php
	$args = array( 'numberposts' => '1', 'offset' => 0,  'category' => 3,);
	$recent_posts = wp_get_recent_posts( $args );
	
	foreach( $recent_posts as $recent ){
		$cat = get_the_category( $recent["ID"] );
		$categorias="";
		foreach( $cat as $cat2 ){
			$categorias .= ' '.$cat2->category_nicename;
			}		
		echo '
		<a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >
				<div class="news-item news-item-focus ' . $categorias  . '" style="background: url(' . wp_get_attachment_url( get_post_thumbnail_id($recent["ID"]) ) . ');">
						<div class="news-info">
							<div class="news-fecha">' . get_the_time('j', $recent["ID"]) . ' <br/>' . get_the_time('M', $recent["ID"]) . ' </div>
							<div class="news-h">
					' .   $recent["post_title"].'					

							</div>
						</div>
					</div>
				</a>
				
				
				
			';
	}
?>

					<?php
	$args = array( 'numberposts' => '2', 'offset' => 1,  'category' => 3,);
	$recent_posts = wp_get_recent_posts( $args );
	
	foreach( $recent_posts as $recent ){
		$cat = get_the_category( $recent["ID"] );
		$categorias="";
		foreach( $cat as $cat2 ){
		$categorias .= ' '.$cat2->category_nicename;
		}	
		echo '
		<a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >
				<div class="news-item ' . $categorias  . '" style="background: url(' . wp_get_attachment_url( get_post_thumbnail_id($recent["ID"]) ) . ');">
						<div class="news-info">
							<div class="news-fecha">' . get_the_time('j', $recent["ID"]) . ' <br/>' . get_the_time('M', $recent["ID"]) . ' </div>
							<div class="news-h">
					' .   $recent["post_title"].'					

							</div>
						</div>
					</div>
				</a>
				
				
				
			';
	}
?>
</div>
</div>
	<div class="col-13">
		<div class="archive-post-title news-item ideas"><h2>Ideas</h2></div>
		<div class="archivo-listados">
<?php
	$args = array( 'numberposts' => '1', 'offset' => 0,  'category' => 2,);
	$recent_posts = wp_get_recent_posts( $args );
	
	foreach( $recent_posts as $recent ){
		$cat = get_the_category( $recent["ID"] );
		$categorias="";
		foreach( $cat as $cat2 ){
			$categorias .= ' '.$cat2->category_nicename;
			}		
		echo '
		<a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >
				<div class="news-item news-item-focus ' . $categorias  . '" style="background: url(' . wp_get_attachment_url( get_post_thumbnail_id($recent["ID"]) ) . ');">
						<div class="news-info">
							<div class="news-fecha">' . get_the_time('j', $recent["ID"]) . ' <br/>' . get_the_time('M', $recent["ID"]) . ' </div>
							<div class="news-h">
					' .   $recent["post_title"].'					

							</div>
						</div>
					</div>
				</a>
				
				
				
			';
	}
?>

					<?php
	$args = array( 'numberposts' => '2', 'offset' => 1,  'category' => 2,);
	$recent_posts = wp_get_recent_posts( $args );
	
	foreach( $recent_posts as $recent ){
		$cat = get_the_category( $recent["ID"] );
		$categorias="";
		foreach( $cat as $cat2 ){
		$categorias .= ' '.$cat2->category_nicename;
		}	
		echo '
		<a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >
				<div class="news-item ' . $categorias  . '" style="background: url(' . wp_get_attachment_url( get_post_thumbnail_id($recent["ID"]) ) . ');">
						<div class="news-info">
							<div class="news-fecha">' . get_the_time('j', $recent["ID"]) . ' <br/>' . get_the_time('M', $recent["ID"]) . ' </div>
							<div class="news-h">
					' .   $recent["post_title"].'					

							</div>
						</div>
					</div>
				</a>
				
				
				
			';
	}
?>
</div>
</div>
	<div class="col-13">
		<div class="archive-post-title news-item encuentros"><h2>Encuentros</h2></div>
		<div class="archivo-listados">

<?php
	$args = array( 'numberposts' => '1', 'offset' => 0,  'category' => 1,);
	$recent_posts = wp_get_recent_posts( $args );
	
	foreach( $recent_posts as $recent ){
		$cat = get_the_category( $recent["ID"] );
		$categorias="";
		foreach( $cat as $cat2 ){
			$categorias .= ' '.$cat2->category_nicename;
			}		
		echo '
		<a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >
				<div class="news-item news-item-focus ' . $categorias  . '" style="background: url(' . wp_get_attachment_url( get_post_thumbnail_id($recent["ID"]) ) . ');">
						<div class="news-info">
							<div class="news-fecha">' . get_the_time('j', $recent["ID"]) . ' <br/>' . get_the_time('M', $recent["ID"]) . ' </div>
							<div class="news-h">
					' .   $recent["post_title"].'					

							</div>
						</div>
					</div>
				</a>
				
				
				
			';
	}
?>

					<?php
	$args = array( 'numberposts' => '2', 'offset' => 1,  'category' => 1,);
	$recent_posts = wp_get_recent_posts( $args );
	
	foreach( $recent_posts as $recent ){
		$cat = get_the_category( $recent["ID"] );
		$categorias="";
		foreach( $cat as $cat2 ){
		$categorias .= ' '.$cat2->category_nicename;
		}	
		echo '
		<a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >
				<div class="news-item ' . $categorias  . '" style="background: url(' . wp_get_attachment_url( get_post_thumbnail_id($recent["ID"]) ) . ');">
						<div class="news-info">
							<div class="news-fecha">' . get_the_time('j', $recent["ID"]) . ' <br/>' . get_the_time('M', $recent["ID"]) . ' </div>
							<div class="news-h">
					' .   $recent["post_title"].'					

							</div>
						</div>
					</div>
				</a>
				
				
				
			';
	}
?>
</div>
</div>
	<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'flat' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
</article>


				
				
			<?php endwhile; ?>

</div>

<?php get_footer(); ?>
