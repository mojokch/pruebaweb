<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="description" content="Esta página fue echa solo como practica por Héctor García.">
		<meta name="keywords" content="Mojokch,developer,Aguascalientes,hector,garcia,pagina,web,crear,ags">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>
			Plantilla de pagina muestra
		</title>
		<link rel="shortcut icon" href="img/logo1.png">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/style1.css">
		<script src="https://kit.fontawesome.com/37ef4fca07.js" crossorigin="anonymous"></script>
	</head>
	<body>
		<header>
			<div class="container">
				<a href="index.html">
					<img src="img/logo1.png" class="logo">
				</a>
				<nav class="nav1">
					<a href="#inicio">Inicio</a>
					<a href="#nosotros">Nosotros</a>
					<a href="#servicios">Servicios</a>
					<a href="#galeria">Galería</a>
					<a href="#contactenos">Contáctenos</a>
				</nav>
				<a href="#" class="hamb"><i class="fas fa-bars"></i></a>
			</div>
		</header>
		<main>
			<section id="inicio">
				<img src=https://a.travel-assets.com/findyours-php/viewfinder/images/res40/200000/200533-Aguascalientes.jpg>
				<div class="bloque-inicio">
					<h1>Gobierno Del Estado</h1>
					<p>Esta es una página de muestra hecha por Héctor García 
					</p>
					<a href="#nosotros" class="boton boton-1">Ver más</a>
				</div>
			</section>
			<section id="nosotros">
				<div class="container-fluid">
					<p class="textop">Esta pagina es solo para uso interno ya que es para probar lo aprendido hasta el dia de hoy en html,css y js por Hector Garcia (novato en diseño web).</p> 
				</div>
			</section>
			<section id="servicios"  class="seccion">
				<div class="container">
					<div class="row">
						<div class="columna columna-33 columna-mobile-100">
							<div class="bloque-servicio">
								<div class="bloque-img-servicio cuadrado-perfecto">
									<img src="img/servicio (1).jpg">
								</div>
								<div class="bloque-contenido-servicio">
									<h3>Servicio 1</h3>
									<p>Esta imagen es de referencia para un posible servicio de su empresa.</p>
									<a href="#" class="boton boton-2">Ver más</a>
								</div>
							</div>
						</div>
						<div class="columna columna-33 columna-mobile-100">
							<div class="bloque-servicio">
								<div class="bloque-img-servicio cuadrado-perfecto">
									<img src="img/servicio (2).jpg">
								</div>
								<div class="bloque-contenido-servicio">
									<h3>Servicio 2</h3>
									<p>Esta imagen es de referencia para un posible servicio de su empresa.</p>
									<a href="#" class="boton boton-2">Ver más</a>
								</div>
							</div>
						</div>
						<div class="columna columna-33 columna-mobile-100">
							<div class="bloque-servicio">
								<div class="bloque-img-servicio cuadrado-perfecto">
									<img src="img/servicio (3).jpg">
								</div>
								<div class="bloque-contenido-servicio">
									<h3>Servicio 3</h3>
									<p>Esta imagen es de referencia para un posible servicio de su empresa.</p>
									<a href="#" class="boton boton-2">Ver más</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="galeria">
				<div class="container-fluid">
					<div class="row">
						<div class=" columna-33 columna-mobile-50">
							<div class="cuadrado-perfecto">
								<img src="img/galeria (1).jpg">
							<h4>Museo Aguascalientes</h4>
							</div>
						</div>
						<div class=" columna-33   columna-mobile-50">
							<div class="cuadrado-perfecto">
								<img src="img/galeria (2).jpg">
							<h4>Arte</h4>
							</div>	
						</div>
						<div class=" columna-33  columna-mobile-50">
							<div class="cuadrado-perfecto">
								<img src="img/galeria (3).jpg">
							<h4>Hacienda</h4>
							</div>		
						</div>
						<div class=" columna-33  columna-mobile-50">
							<div class="cuadrado-perfecto">
								<img src="img/galeria (4).jpg">
							<h4>Ciencia</h4>
							</div>	
						</div>
						<div class=" columna-33  columna-mobile-50">
							<div class="cuadrado-perfecto">
								<img src="img/galeria (5).jpg">
							<h4>Acapulco (imagen de muestra)</h4>
							</div>	
						</div>
						<div class=" columna-33  columna-mobile-50">
							<div class="cuadrado-perfecto">
								<img src="img/galeria (6).jpg">
							<h4>Tulum (imagen de muestra)</h4>
							</div>	
						</div>
					</div>
				</div>
			</section>
			<section id="contactenos" class="seccion">
				<iframe width="844" height="603" id="gmap_canvas" src="https://maps.google.com/maps?q=aguascalientes&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
				<div class="container-fluid">
					<div class="row">
						<div class="columna columna-33 columna-mobile-100 empujar-65 empujar-mobile-0 sinpadding-mobile">
							<form action="#contactenos" method="post">
								<div class="form-block">
									<input type="text" name="nombre" class="form-control" placeholder="Nombre" required>
								</div>
								<div class="form-block">
									<input type="email" name="email" class="form-control"  placeholder="Email" required>
								</div>
								<div class="form-block">
									<textarea name="mensaje"  placeholder="Mensaje"></textarea>
								</div>
								<div class="form-block bloque-ultimo">
									<input type="submit" onclick="confirma()" class="boton boton-form" value="Enviar">
								</div>
								<?php

									if($_SERVER["REQUEST_METHOD"] == "POST")
									{
										$nombre = $_POST["nombre"] ;
										$email = $_POST["email"] ;
										$mensaje = $_POST["mensaje"] ;

										if(isset($nombre))
										{
											if(isset($email))
											{
												if(isset($mensaje))
												{
													$para = "mojokch2@gmail.com"; 
													$asunto = "Esto es una prueba";
													$cuerpo = $nombre."\n".$email."\n".$mensaje;
													$adicional = "From: noreply@hgarcia.com";

													mail($para,$asunto,$cuerpo,$adicional);
												?>
													
												<?php
												}
											}
										}
									}
								?>
							</form>

						</div>
					</div>
				</div>

			</section>
		</main>
		<footer>
			<div class="container">
				<div class="row">
					<div class="columna columna-25 columna-mobile-100">
						<img src="img/logo1.png" class="logo-footer">
						<p>
							Aqui podriamos poner el texto que guste.
						</p>
					</div>
					<div class="columna columna-25 columna-mobile-100">
						<h3>
							Temas relacionados
						</h3>
						<ul>
							<li><a href="#">Tema Relacionado 1</a></li>
							<li><a href="#">Tema Relacionado 2</a></li>
							<li><a href="#">Tema Relacionado 3</a></li>
						</ul>
					</div>
					<div class="columna columna-25 columna-mobile-100">
						<h3>
							Datos de contcto
						</h3>
						<ul>
							<li>tucorreo@tudominio.com</li>
							<li>+524491234567</li>
							<li>Av. Aguascalientes #1234<br>Aguascalientes Ags - Mexico</li>
						</ul>
					</div>
					<div class="columna columna-25 columna-mobile-100">
						<h3>
							Redes Sociales
						</h3>
						<ul class="redes">
							<li>
								<a href="https://es-la.facebook.com/mojokch" target="_blank" class="face">
									<i class="fab fa-facebook-square"></i>
								</a>
							</li>
							<li>
								<a href="https://twitter.com/mojokch" target="_blank" class="twit">
									<i class="fab fa-twitter-square"></i>
								</a>
							</li>
							<li>
								<a href="https://api.whatsapp.com/send?phone=524499083119&text=Hola%20este%20mensaje%20es%20de%20prueba%20" target="_blank" class="whats">
									<i class="fab fa-whatsapp-square"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="barra-footer">
				&copy; Hector Garcia <br>Todos Los Derechos Reservados - 2021
			</div>
		</footer>
		<script src="js/jquery.js"></script>
		<script src="js/funciones.js"></script>

	</body>
</html>