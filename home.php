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
					<div class="news-item news-item-focus encuentro" style='background: url("http://graduados.uprrp.edu/inventio/vol3_2/img/regresar_escuela04.jpg");'>
						<div class="news-info">
							<div class="news-fecha">10<br/>JUN</div>
							<div class="news-h">
								<a href="">Pre-encuentro de ENA  en Puerto</a>
							</div>
						</div>
					</div>
					<div class="news-item ena" style='background: url("http://www.80grados.net/wp-content/uploads/2013/07/Justo-M%C3%A9ndez-Ar%C3%A1mburu1.jpg");'>
						<div class="news-info">
							<div class="news-fecha">10<br/>JUN</div>
							<div class="news-h">
								<a href="">Pre-encuentro de ENA  en Puerto</a>
							</div>
						</div>
					</div>	
					<div class="news-item ideas" style='background: url("http://3blmedia.com/media/images/Photo_6_-_Aflatoun_Students.JPG");'>
						<div class="news-info">
							<div class="news-fecha">10<br/>JUN</div>
							<div class="news-h">
								<a href="">Pre-encuentro de ENA  en Puerto</a>
							</div>
						</div>
					</div>	
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
