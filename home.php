    <?php
    /*
    Template Name: Home
    */
    ?>
    
<?php get_header(); 

$options = get_option( 'theme_settings' ); ?>


			<div id="content" class="site-content home" role="main">
				<div class="col-23">
					<div id="banner01" class="rw-wrapper">
						<h1 class="rw-sentence"><?php echo $options['portada:titulo'];?><div class="rw-words rw-words-1">
						<span style="color:white">nuestroamericana</span>
						<span style="color:#FFFF70">emancipadora</span>
						<span style="color:#E5B65C">decolonial</span>
						<span style="color:#D64747">alternativa</span>
						<span style="color:#A26DD8">popular</span>
						<span style="color:#6699CC">transformadora</span>
					</div></h1>
						<h2><?php echo $options['portada:bajada'];?></h2>
					</div>			
					<div id="videobox">
						<iframe class="iframe" src="<?php echo $options['portada:video'];?>" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					</div>
					<div id="news-ena" class="tbox">
					</div>
					
					<?php
	$args = array( 'numberposts' => '1', 'offset' => 0, );
	$recent_posts = wp_get_recent_posts( $args );
	
	foreach( $recent_posts as $recent ){
		$cat = get_the_category( $recent["ID"] );
		echo '
		<a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >
				<div class="news-item news-item-focus ' . $cat[0]->category_nicename  . '" style="background: url(' . wp_get_attachment_url( get_post_thumbnail_id($recent["ID"]) ) . ');">
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
	$args = array( 'numberposts' => '2', 'offset' => 1, );
	$recent_posts = wp_get_recent_posts( $args );
	
	foreach( $recent_posts as $recent ){
		$cat = get_the_category( $recent["ID"] );
		echo '
		<a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >
				<div class="news-item ' . $cat[0]->category_nicename  . '" style="background: url(' . wp_get_attachment_url( get_post_thumbnail_id($recent["ID"]) ) . ');">
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
					
					

					<div id="news-members" class="tbox">
					</div>	
					<div class="news-memb-item">
						<div class="news-memb-fecha">10<br/>JUN</div>
						<div class="news-memb-info">
							<div class="news-memb-f">
							</div>
							<div class="news-memb-s">
								<a href="">COlegio del Sol</a>
							</div>
							<div class="news-memb-h">
								<a href="">Pre-encuentro de ENA  en Puerto</a>
							</div>
						</div>
					</div>
					<div class="news-memb-item">
						<div class="news-memb-fecha">10<br/>JUN</div>
						<div class="news-memb-info">
							<div class="news-memb-f">
							</div>
							<div class="news-memb-s">
								<a href="">Reevo</a>
							</div>
							<div class="news-memb-h">
								<a href="">La transformación educativa en marcha</a>
							</div>
						</div>
					</div>	
					<div class="news-memb-item">
						<div class="news-memb-fecha">10<br/>JUN</div>
						<div class="news-memb-info">
							<div class="news-memb-f">
							</div>
							<div class="news-memb-s">
								<a href="">Reevo</a>
							</div>
							<div class="news-memb-h">
								<a href="">Pedagogía del Acontecimiento</a>
							</div>
						</div>
					</div>	
					<div class="news-memb-item">
						<div class="news-memb-fecha">10<br/>JUN</div>
						<div class="news-memb-info">
							<div class="news-memb-f">
							</div>
							<div class="news-memb-s">
								<a href="">Nuestra Escuela PR</a>
							</div>
							<div class="news-memb-h">
								<a href="">Nuevo espacio para Eloisa</a>
							</div>
						</div>
					</div>	
				</div>
				<div class="col-13">
					<?php if ( dynamic_sidebar('portada_columna_derecha') ) : else : endif; ?>
				</div>

			</div>

<?php get_footer(); ?>
