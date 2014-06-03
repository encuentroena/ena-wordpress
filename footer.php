				<?php if ( apply_filters( 'show_flat_credits', true ) ) { ?>
					<div class="site-info">
						<div id="footer-image" style='background: url("wp-content/themes/ena-wordpress/images/footer02.png") no-repeat scroll 0 0 rgba(0, 0, 0, 0);'></div>
						<?php do_action( 'flat_credits' ); ?>
						<div id="footer-licence">
							Copyleft 2013/2014 - Encuentro de Nuestra América<br/><b>¿Quieres contactarnos? <a href="http://www.encuentrodenuestraamerica.org/contacto">Envíanos un correo electrónico</a></b><br />
													</div>
											</div><!-- .site-info -->
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<?php wp_footer(); ?>
</body>
</html>
