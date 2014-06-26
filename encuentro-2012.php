    <?php
    /*
    Template Name: Encuentro-2012
    */
    ?>
    
<?php get_header(); ?>

			<div id="content" class="site-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<div id="post-<?php the_ID(); ?> encuentro" <?php post_class(); ?>>
				
					<div class="encuentro-header">
						<div class="wrapper">
							<div class="encuentro-titulo">
								<div class="titulo-bf"><?php $key="titulo-bf"; echo get_post_meta($post->ID, $key, true); ?></div>
								<h1 class="encuentro-title"><?php the_title(); ?></h1>
								<div class="titulo-af"><?php $key="titulo-af"; echo get_post_meta($post->ID, $key, true); ?></div>
							</div>
							<div class="encuentro-logo">
								<img src="<?php $key="logo"; echo get_post_meta($post->ID, $key, true); ?>" alt="Smiley face" height="160" width="160"> 
							</div>
						</div>
					</div>
					<div class="encuentro-menu">
						<div class="wrapper">
							<ul>
								<li><a href="#info">Info</a></li>
								<?php
									$mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'menu_order', 'sort_order' => 'ASC',) );

									foreach( $mypages as $page ) {		
										$content = $page->post_content;
										if ( ! $content ) // Check for empty page
											continue;

										$content = apply_filters( 'the_content', $content );
									?>
										<li><a href="#<?php echo $page->ID; ?>"><?php echo $page->post_title; ?></a></li>
									<?php
									}	
									?>		
							</ul>
						</div>
					</div>
					<div class="encuentro-contenido">
						<div class="encuentro-principal">
							<div class="wrapper">
								<hr id="info" class="sections-id">
								<div class="entry-content encuentro-content">
									<?php the_content( __( 'Continue reading <span class="meta-nav">...</span>', 'flat' ) ); ?>
								</div>
								<div class="encuentro-news">
									<h2>Últimas Noticias</h2>
									<?php
										$args = array( 'numberposts' => '3', 'offset' => 0, 'category' => 15,);
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
								</div>
							</div>
						</div>
														<?php
									$mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'menu_order',
										'sort_order' => 'ASC',) );
									$vuelta = "par";
									foreach( $mypages as $page ) {	
										$content = $page->post_content;
										if ( ! $content ) // Check for empty page
											continue;

										$content = apply_filters( 'the_content', $content );
									?>
										<div class="encuentro-subpage <?php echo $vuelta ?>">
											<div class="wrapper">
												<hr id="<?php echo $page->ID; ?>" class="sections-id">
												<h2><?php echo $page->post_title; ?></h2>
												<div class="entry-content encuentro-content"><?php echo $content; ?></div>
											</div>
										</div>
									<?php
										if ($vuelta == "par") {
											$vuelta = "impar";
										} else {
											$vuelta = "par";
										}
									}
								?>
					</div>	
				</div>

				<?php comments_template(); ?>
	
				
			<?php endwhile; ?>

			</div>

<?php get_footer(); ?>

