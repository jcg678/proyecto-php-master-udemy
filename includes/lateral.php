<?php require_once 'includes/helpers.php'; ?>			
			<!--BARRA LATERAL -->
			<aside id="sidebar">
				<?php if(isset($_SESSION['usuario'])):?>
					<div id="usuario-logueado" class="bloque">
						<h3> Bienvenido, <?=$_SESSION['usuario']['nombre'].' '.$_SESSION['usuario']['apellidos']; ?></h3>
						<!--botones-->
						<a href="cerrar.php" class="boton boton-verde">Crear Entradas</a>
						<a href="cerrar.php" class="boton boton-naranja">Mis Datos</a>
						<a href="cerrar.php" class="boton">Cerrar sesión</a>
					</div>
				<?php endif; ?>		

				<div id="login" class="bloque">
					<h3>Identificate</h3>
					<?php if(isset($_SESSION['error_login'])):?>
						<div class="alerta alerta-error">
							<h3><?=$_SESSION['error_login']; ?></h3>
						</div>
					<?php endif; ?>		
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
					<!-- Mostrar Errores -->
					<?php if(isset($_SESSION['completado'])):?>
						<div class="alerta alerta-exito">
							<?=$_SESSION['completado']?>
						</div>
					<?php elseif(isset($_SESSION['errores']['general'])): ?>
						<div class="alerta alerta-error">
							<?=$_SESSION['errores']['general']?>
						</div>
					<?php endif; ?>
					<form action="registro.php" method="POST">
						
						<label for="nombre">Nombre</label>
						<input type="text" name="nombre">
						<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : ""; ?>						
						
						<label for="apellidos">Apellidos</label>
						<input type="text" name="apellidos">
						<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos') : ""; ?>
						
						<label for="email">Email</label>
						<input type="email" name="email">
						<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ""; ?>

						<label for="password">Password</label>
						<input type="password" name="password">
						<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password') : ""; ?>

						<input type="submit" name="Registrar" value="Registrar">		
					</form>
					<?php borrarErrores(); ?>
				</div>
			</aside>