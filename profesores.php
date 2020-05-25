<?php include_once 'includes/templates/header.php'; ?>

	<div class="contenedor cuerpo">
		<div class="contenido">
			<div class="encabezado-tabla">
				<h2>Profesores</h2>
				<div class="button registrar">
					<a href="#">Registrar</a>
				</div>

				<div class="buscador">
					<label for="buscar-estudiante" class="busqueda-estudiante">Buscar Profesor:</label>
					<input type="search" id="buscar-estudiante" name="buscar-estudiante" placeholder="Cedula">
				</div>
			</div>
			<table>
				<thead>
					<tr>
						<th>Cédula</th>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Sexo</th>
					</tr>
				</thead>

				<tbody>
					<?php
						try {
							require_once 'includes/functions/bd_conexion.php';
							$sql = 'SELECT * FROM `docente` ';
							$resultado = $conn->query($sql);
						} catch (Exception $e) {
							$error = $e->getMessage();
						}


						while ($docentes = $resultado->fetch_assoc()): //Inicio While?> 
							<tr>
								<td><?php echo $docentes['ci-d']; ?></td>
								<td><?php echo utf8_encode($docentes['nombre-d']); ?></td>
								<td><?php echo utf8_encode($docentes['apellido-d']); ?></td>
								<td><?php echo $docentes['sexo-d']; ?></td>
								<td><a href="editar.php" class="button editar">Editar</a></td>
								<td><a href="#" class="button eliminar">Eliminar</a></td>
							</tr>		 
					<?php  endwhile; //Fin While ?>				
				</tbody>
			</table>
			<div class="pagination">
				<a href="#">&laquo;</a>
				<a class="active" href="#">1</a>
				<a href="#">2</a>
				<a href="#">3</a>
				<a href="#">4</a>
				<a href="#">5</a>
				<a href="#">6</a>
				<a href="#">&raquo;</a>
			</div>
		</div>
	
		<?php include_once 'includes/templates/barra-menu.php'; ?>

<?php include_once 'includes/templates/footer.php'; ?>