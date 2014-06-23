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
					<a href="/archivo" >
						<div id="news-ena" class="tbox">
						</div>
					</a>
					<?php
	$args = array( 'numberposts' => '1', 'offset' => 0, );
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
	$args = array( 'numberposts' => '2', 'offset' => 1, );
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
					
					
					<div style="display:;">
						<div id="news-members" class="tbox">
						</div>	
						<?php include('miembros_feeds.php');?>
					</div>
				</div>
				<div class="col-13">
					<a href="/encuentros/guatemala-2014/" class="banner-portada" id="banner02">
<div class="counter"> 
<?php
$fecha = $options['portada:fecha'];
$dt_end = new DateTime($fecha);
$remain = $dt_end->diff(new DateTime());
$anos = $remain->y;
$meses = $remain->m;
$dias = $remain->d;
if ($dt_end>new DateTime())
	{
print("Faltan ");
if ($anos>'1') echo $remain->y . ' años, ';
if ($anos=='1') echo $remain->y . ' año, ';
if ($meses>'1') echo $remain->m . ' meses y ';
if ($meses=='1') echo $remain->m . ' mes y ';
if ($dias>'1') echo $remain->d . ' días ';
if ($dias=='1') echo $remain->d . ' día ';
if ($dias=='0') echo $remain->d . ' días ';
print("para el próximo encuentro.");
} else {
print("Ya comenzó.");
}
?>
</div>
</a>
					<?php if ( dynamic_sidebar('portada_columna_derecha') ) : else : endif; ?>
				</div>

			</div>

<?php get_footer(); ?>
