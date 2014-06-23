<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?php wp_title( '|', true, 'right' ); ?> <?php echo get_bloginfo( 'name' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_head(); ?>
	<?php $template = str_replace(".php", "", get_page_template_slug()); 
	if (strpos($template,'encuentro') !== false) {
		echo '<link rel="stylesheet" href="/wp-content/themes/ena-wordpress/'.$template.'.css" type="text/css" media="all" />';
		};
	?>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
	$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
</script>

</head>

<body <?php body_class(); ?>>
<div id="page">
	<div class="container">
		<div class="row row-offcanvas row-offcanvas-left">
			<div id="secondary" class="col-lg-3">
				<header id="masthead" class="site-header" role="banner">
					<div class="hgroup">
						<?php flat_logo(); ?>
					</div>
					<button type="button" class="btn btn-link hidden-lg toggle-sidebar" data-toggle="offcanvas"><?php _e('<i class="fa fa-gear"></i>', 'flat'); ?></button>
					<button type="button" class="btn btn-link hidden-lg toggle-navigation"><?php _e('<i class="fa fa-bars"></i>', 'flat'); ?></button>
					<nav id="site-navigation" class="navigation main-navigation" role="navigation">
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'container' => false ) ); ?>
					</nav>
				</header>
				
				<div class="sidebar-offcanvas">
					<?php get_sidebar(); ?>
				</div>
				<div id="barra-social">
<a href="https://www.facebook.com/encuentrode.nuestraamerica"><div class="logo-social" id="facebook"></div></a>
<a href="https://twitter.com/encuentroena"><div class="logo-social" id="twitter"></div></a>
<a href="http://www.encuentrodenuestraamerica.org/feed/"><div class="logo-social" id="feed"></div></a>
</div>
			</div>
			<div id="primary" class="content-area col-lg-9">
