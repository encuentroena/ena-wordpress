<?php
    /*
    Template Name: Contacto
    */
    ?>
    
<?php get_header(); ?>

			<div id="content" class="site-content" role="main">

<script>
jQuery(function() {
	var newOptionsHtml = "<option value='1002'>Albania</option> <option value='1082'>Alemania</option> <option value='1005'>Andorra</option> <option value='1006'>Angola</option> <option value='1007'>Anguilla</option> <option value='1009'>Antigua y Barbuda</option> <option value='1008'>Antártica</option> <option value='1187'>Arabia Saudí</option> <option value='1003'>Argelia</option> <option value='1010' selected='selected'>Argentina</option> <option value='1011'>Armenia</option> <option value='1012'>Aruba</option> <option value='1013'>Australia</option> <option value='1014'>Austria</option> <option value='1015'>Azerbayán</option> <option value='1212'>Bahamas</option> <option value='1016'>Bahrein</option> <option value='1017'>Bangladesh</option> <option value='1018'>Barbados</option> <option value='1021'>Belice</option> <option value='1022'>Benín</option> <option value='1023'>Bermuda</option> <option value='1019'>Bielorrusia</option> <option value='1025'>Bolivia</option> <option value='1250'>Bonaire, San Eustaquio y Saba</option> <option value='1026'>Bosnia Herzegovina</option> <option value='1027'>Botswana</option> <option value='1029'>Brasil</option> <option value='1032'>Brunei Darussalam</option> <option value='1033'>Bulgaria</option> <option value='1034'>Burkina Faso</option> <option value='1036'>Burundi</option> <option value='1024'>Bután</option> <option value='1020'>Bélgica</option> <option value='1040'>Cabo Verde</option> <option value='1037'>Camboya</option> <option value='1038'>Camerún</option> <option value='1039'>Canadá</option> <option value='1043'>Chad</option> <option value='1044'>Chile</option> <option value='1045'>China</option> <option value='1057'>Chipre</option> <option value='1048'>Colombia</option> <option value='1049'>Comores</option> <option value='1050'>Congo, Repúbica Democrática del</option> <option value='1114'>Corea, República Popular Democrática de</option> <option value='1115'>Corea, República de</option> <option value='1053'>Costa Rica</option> <option value='1055'>Croacia</option> <option value='1056'>Cuba</option> <option value='1248'>CuraÃ§ao</option> <option value='1054'>CÃ´te d'Ivoire</option> <option value='1059'>Dinamarca</option> <option value='1060'>Djibuti</option> <option value='1061'>Dominica</option> <option value='1064'>Ecuador</option> <option value='1065'>Egipto</option> <option value='1066'>El Salvador</option> <option value='1225'>Emiratos Árabes Unidos</option> <option value='1068'>Eritrea</option> <option value='1192'>Eslovaquia</option> <option value='1193'>Eslovenia</option> <option value='1198'>España</option> <option value='1228'>Estados Unidos</option> <option value='1069'>Estonia</option> <option value='1070'>Etiopía</option> <option value='1177'>Federación Rusa</option> <option value='1074'>Fidji</option> <option value='1170'>Filipinas</option> <option value='1075'>Finlandia</option> <option value='1076'>Francia</option> <option value='1080'>Gabón</option> <option value='1213'>Gambia</option> <option value='1081'>Georgia</option> <option value='1083'>Ghana</option> <option value='1084'>Gibraltar</option> <option value='1087'>Granada</option> <option value='1085'>Grecia</option> <option value='1086'>Groenlandia</option> <option value='1088'>Guadalupe</option> <option value='1089'>Guam</option> <option value='1090'>Guatemala</option> <option value='1077'>Guayana Francesa</option> <option value='1245'>Guernsey</option> <option value='1091'>Guinea</option> <option value='1067'>Guinea Ecuatorial</option> <option value='1092'>Guinea-Bissau</option> <option value='1093'>Guyana</option> <option value='1094'>Haití</option> <option value='1152'>Holanda</option> <option value='1097'>Honduras</option> <option value='1098'>Hong Kong</option> <option value='1099'>Hungría</option> <option value='1101'>India</option> <option value='1102'>Indonesia</option> <option value='1103'>Iran, República de </option> <option value='1104'>Iraq</option> <option value='1105'>Irlanda</option> <option value='1028'>Isla Bouvet</option> <option value='1046'>Isla Christmas</option> <option value='1159'>Isla Norfolk</option> <option value='1246'>Isla de Man</option> <option value='1100'>Islandia</option> <option value='1041'>Islas Caimán</option> <option value='1227'>Islas Circundantes Menores de los Estados Unidos</option> <option value='1047'>Islas Cocos (Keeling)</option> <option value='1052'>Islas Cook</option> <option value='1073'>Islas Feroe</option> <option value='1197'>Islas Georgias del Sur y Sandwich del Sur</option> <option value='1095'>Islas Heard y McDonald</option> <option value='1072'>Islas Malvinas</option> <option value='1160'>Islas Mariana del Norte</option> <option value='1135'>Islas Marshall</option> <option value='1194'>Islas Salomón</option> <option value='1221'>Islas Turcas y Caicos</option> <option value='1031'>Islas Vírgenes, Británicas</option> <option value='1234'>Islas Vírgenes, E.E.U.U.</option> <option value='1106'>Israel</option> <option value='1107'>Italia</option> <option value='1108'>Jamaica</option> <option value='1109'>Japón</option> <option value='1244'>Jersey</option> <option value='1110'>Jordania</option> <option value='1111'>Kazajistán</option> <option value='1112'>Kenia</option> <option value='1117'>Kirguistán</option> <option value='1113'>Kiribati</option> <option value='1251'>Kosovo</option> <option value='1116'>Kuwait</option> <option value='1118'>Laos, República Democrática Popular</option> <option value='1121'>Lesoto</option> <option value='1119'>Letonia</option> <option value='1122'>Liberia</option> <option value='1124'>Liechtenstein</option> <option value='1125'>Lituania</option> <option value='1126'>Luxemburgo</option> <option value='1120'>Líbano</option> <option value='1123'>Líbia</option> <option value='1127'>Macao</option> <option value='1128'>Macedonia, República de</option> <option value='1129'>Madagascar</option> <option value='1131'>Malasia</option> <option value='1130'>Malawi</option> <option value='1132'>Maldivas</option> <option value='1133'>Mali</option> <option value='1134'>Malta</option> <option value='1146'>Marruecos</option> <option value='1136'>Martinica</option> <option value='1138'>Mauricio</option> <option value='1137'>Mauritania</option> <option value='1139'>Mayotte</option> <option value='1141'>Micronesia, Estados Federados de</option> <option value='1142'>Moldavia</option> <option value='1144'>Mongolia</option> <option value='1243'>Montenegro</option> <option value='1145'>Montserrat</option> <option value='1147'>Mozambique</option> <option value='1035'>Myanmar</option> <option value='1140'>México</option> <option value='1143'>Mónaco</option> <option value='1148'>Namibia</option> <option value='1149'>Nauru</option> <option value='1150'>Nepal</option> <option value='1155'>Nicaragua</option> <option value='1157'>Nigeria</option> <option value='1158'>Niue</option> <option value='1161'>Noruega</option> <option value='1153'>Nueva Caledonia</option> <option value='1154'>Nueva Zelanda</option> <option value='1156'>Níger</option> <option value='1162'>Omán</option> <option value='1163'>Pakistán</option> <option value='1164'>Palau</option> <option value='1166'>Panamá</option> <option value='1167'>Papúa Nueva Guinea</option> <option value='1168'>Paraguay</option> <option value='1169'>Perú</option> <option value='1171'>Pitcairn</option> <option value='1078'>Polinesa Francesa</option> <option value='1172'>Polonia</option> <option value='1173'>Portugal</option> <option value='1174'>Puerto Rico</option> <option value='1175'>Qatar</option> <option value='1226'>Reino Unido</option> <option value='1042'>República Centroafricana</option> <option value='1058'>República Checa</option> <option value='1051'>República Democrática del Congo</option> <option value='1062'>República Dominicana</option> <option value='1179'>Reunión</option> <option value='1178'>Ruanda</option> <option value='1176'>Rumanía</option> <option value='1249'>Saint Maarten (parte holandesa)</option> <option value='1185'>Samoa</option> <option value='1004'>Samoa Americana</option> <option value='1181'>San Cristóbal y Nieves</option> <option value='1186'>San Marino</option> <option value='1183'>San Pedro y Miquelón</option> <option value='1184'>San Vicente y las Granadinas</option> <option value='1180'>Santa Helena</option> <option value='1182'>Santa Lucía</option> <option value='1096'>Santa Sede (Ciudad Estado del Vaticano)</option> <option value='1207'>Santo Tomé y Príncipe</option> <option value='1188'>Senegal</option> <option value='1242'>Serbia</option> <option value='1238'>Serbia y Montenegro</option> <option value='1189'>Seychelles</option> <option value='1190'>Sierra Leona</option> <option value='1191'>Singapur</option> <option value='1206'>Siria, República Árabe de</option> <option value='1195'>Somalia</option> <option value='1199'>Sri Lanka</option> <option value='1196'>Sudáfrica</option> <option value='1200'>Sudán</option> <option value='1204'>Suecia</option> <option value='1205'>Suiza</option> <option value='1247'>Sur de Sudán</option> <option value='1201'>Surinam</option> <option value='1202'>Svalbard y Jan Mayen</option> <option value='1203'>Swazilandia</option> <option value='1236'>Sáhara Occidental</option> <option value='1211'>Tailandia</option> <option value='1208'>Taiwan</option> <option value='1209'>Tajikistán</option> <option value='1210'>Tanzania, Republica de</option> <option value='1030'>Territorio Británico del Océano Índico</option> <option value='1165'>Territorio Palestino, Ocupado</option> <option value='1079'>Tierras Australes y Antárticas Francesas</option> <option value='1063'>Timor Oriental</option> <option value='1214'>Togo</option> <option value='1215'>Tokelau</option> <option value='1216'>Tonga</option> <option value='1217'>Trinidad y Tobago</option> <option value='1220'>Turkmenistán</option> <option value='1219'>Turquía</option> <option value='1222'>Tuvalu</option> <option value='1218'>Túnez</option> <option value='1224'>Ucrania</option> <option value='1223'>Uganda</option> <option value='1229'>Uruguay</option> <option value='1230'>Uzbekistán</option> <option value='1231'>Vanuatu</option> <option value='1232'>Venezuela</option> <option value='1233'>Vietnam</option> <option value='1235'>Wallis y Futuna</option> <option value='1237'>Yemen</option> <option value='1239'>Zambia</option> <option value='1240'>Zimbaue</option> <option value='1241'>Ã…land Islands</option>";

	jQuery("#pais").html(newOptionsHtml);
});
</script>

			<?php while ( have_posts() ) : the_post(); ?>
<div class="col-23">
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
				<div class="col-23">
					<header class="entry-header">
						 <div class="entry-meta"></div>
						<h1 class="entry-title"><?php the_title(); ?></h1>
					</header>
					<div class="entry-content">

						<?php the_content( __( 'Continue reading <span class="meta-nav">...</span>', 'flat' ) ); ?>

						<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'flat' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
					
					</div>
				</article>

				<?php comments_template(); ?>
</div>

				<div class="col-13">
						<div class="entry-featured">
		<div class="entry-social"><?php include('social-icons.php');?></div>
	</div>
					<?php if ( dynamic_sidebar('pagina_columna_derecha') ) : else : endif; ?>
				</div>
				
				
			<?php endwhile; ?>

			</div>

<?php get_footer(); ?>
