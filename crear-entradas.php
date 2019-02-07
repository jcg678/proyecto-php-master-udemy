<?php require_once 'includes/redireccion.php'; ?>
<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php'; ?>


			<!--CAJA PRINCIPAL-->
			<div id="principal">
				<h1>Crear entradas</h1>
				<p>
					Añade nuevas entradas al blog para su publicación.
				</p>
				<br>
				<form action="guardar-entrada.php" method="POST">
					<label for="titulo">Titulo de la entrada:</label>
					<input type="text" name="titulo" />
					<label for="descripcion">Descripción de la entrada:</label>
					<textarea type="text" name="descripcion" /></textarea>
					<label for="categoria">Categoria:</label>
					<select name="categoria">
						<?php echo 'ok';
						$categorias=conseguirCategorias($db);
							if(!empty($categorias)):
							while($categoria = mysqli_fetch_assoc($categorias)):
						?>
							<option value="<?=$categoria['id']?>">
								<?=$categoria['nombre']?>
							</option>	
						<?php
							endwhile;
							endif;
						?>
					</select>

					<input type="submit" value="Guardar Entrada" >	
				</form>	
			</div>	
			
<?php require_once 'includes/pie.php' ?>