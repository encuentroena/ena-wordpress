<?php
/* Merge multiple RSS feeds with SimplePie
 *
 * Just modify the path to SimplePie and 
 * modify the $feeds array with the feeds you want
 *
 * You should probably also change the channel title, link and description,
 * plus I added a CC license you may not want
 *
 * Help from: http://www.webmaster-source.com/2007/08/06/merging-rss-feeds-with-simplepie/ 
 *
*/

// Your path to simplepie
include_once('simplepie/autoloader.php');
include_once('simplepie/idn/idna_convert.class.php');
//

?>

<?php global $wp_query;
$feeds = array();
$vuelta = 0;
$wp_query = new WP_Query("post_type=wpmm_location&post_status=publish");

while ($wp_query->have_posts()) : $wp_query->the_post(); 

$miembros[$vuelta] = htmlspecialchars(get_field('feed'));
$miembros2[$vuelta] = get_the_title();
array_push($feeds, get_field('feed'));

?>

<?php 
$vuelta = $vuelta + 1;
endwhile; 
?>


<?php
date_default_timezone_set('America/Chicago');
$feed = new SimplePie(); // Create a new instance of SimplePie
// Load the feeds
$feed->set_feed_url($feeds);
$feed->set_cache_duration (10000); // Set the cache time
$feed->set_cache_location ('./cache'); // Set the cache location
$feed->enable_xml_dump(isset($_GET['xmldump']) ? true : false);
$success = $feed->init(); // Initialize SimplePie
$feed->handle_content_type(); // Take care of the character encoding
?>

<?php if ($success) {
$itemlimit=0;
foreach($feed->get_items() as $item) {
if ($itemlimit==4) { break; }
?>

<a target="_blank" href="<?php echo $item->get_permalink(); ?>" class="news-memb-item">
		<div class="news-memb-fecha"><?php echo $item->get_date('d M'); ?></div>
		<div class="news-memb-info">
			<div class="news-memb-f"></div>
			<div class="news-memb-s">
				<?php 
				
				$fuente = $item->get_feed()->subscribe_url();
				$clave = array_search($fuente,$miembros);
				echo $miembros2[$clave];
				?>
			</div>
			<div class="news-memb-h">
				<?php echo $item->get_title(); ?>
			</div>
		</div>
</a>


<?
$itemlimit = $itemlimit + 1;
}
}
?>
