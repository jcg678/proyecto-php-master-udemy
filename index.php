
<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Blog de Videjuegos</title>
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	</head>
	<body>
		<!--CABECERA-->
		<header id="cabecera">
			<!--LOGO-->
			<div id="logo">
				<a href="index.php">
					Blog de Videojuegos	
				</a>
			</div>
			<!--MENU-->
			<nav id="menu">
				<ul>
					<li>
						<a href="index.php">Inicio</a>
					</li>
						<li>
						<a href="index.php">Inicio</a>
					</li>
						<li>
						<a href="index.php">Inicio</a>
					</li>
						<li>
						<a href="index.php">Inicio</a>
					</li>
						<li>
						<a href="index.php">Inicio</a>
					</li>
					<li>
						<a href="index.php">Sobre mí</a>
					</li>
					<li>
						<a href="index.php">Contacto</a>
					</li>
				</ul>	
			</nav>
			<div class="clearfix"></div>	
		</header>
		<div id="contenedor">
			<!--BARRA LATERAL -->
			<aside id="sidebar">
				<div id="login" class="bloque">
					<h3>Identificate</h3>
					<form action="login.php" method="POST">
						<label for="email">Email</label>
						<input type="email" name="email">
						<label for="password">Password</label>
						<input type="password" name="password">
						<input type="submit" name="Entrar">		
					</form>
				</div>

				<div id="register" class="bloque">
					<h3>Registrate</h3>
					<form action="registro.php" method="POST">
						<label for="nombre">Nombre</label>
						<input type="text" name="nombre">						
						<label for="apellidos">Apellidos</label>
						<input type="text" name="apellidos">
						<label for="email">Email</label>
						<input type="email" name="email">
						<label for="password">Password</label>
						<input type="password" name="password">
						<input type="submit" name="Registrar" value="Registrar">		
					</form>
				</div>
			</aside>
			<!--CAJA PRINCIPAL-->
			<div id="principal">
				<h1>Últimas Entradas</h1>
				<article class="entrada">
					<a href="">
					<h2>Titulo de mi entrada</h2>
						<p>
							"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem"
						</p>
					</a>
				</article>
				<article class="entrada">
					<a href="">
					<h2>Titulo de mi entrada</h2>
						<p>
							"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
						</p>
					</a>
				</article>
				<article class="entrada">
					<a href="">
					<h2>Titulo de mi entrada</h2>
						<p>
							"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
						</p>
					</a>
				</article>
				<article class="entrada">
					<a href="">
					<h2>Titulo de mi entrada</h2>
						<p>
							"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem"
						</p>
					</a>
				</article>
				<div id="ver-todas"><a href="">Ver Todas  las entradas</a></div>												
			</div>	
			
			<div class="clearfix"></div>
		</div>	

		<!--PIE DE PAGINA-->
		<footer id="pie">
			<p>Desarrollado por Javier-dev &copy; 2019<p>
		</footer>
	</body>

</html>