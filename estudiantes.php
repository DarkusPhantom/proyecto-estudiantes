<?php
	try {
		require_once 'includes/functions/bd_conexion.php';
		$sql = 'SELECT * FROM `alumno` ';
		$resultado = $conn->query($sql);
	} catch (Exception $e) {
		$error = $e->getMessage();
	}
?>

<?php include_once 'includes/templates/header.php'; ?>

	<div class="contenedor cuerpo">
		<div class="contenido">
			<div class="encabezado-tabla">
				<h2>Estudiantes</h2>
				<div class="button registrar">
					<a href="#">Registrar</a>
				</div>

				<div class="buscador">
					<label for="buscar-estudiante" class="busqueda-estudiante">Buscar Estudiante:</label>
					<input type="search" id="buscar-estudiante" name="buscar-estudiante" placeholder="Cedula">
				</div>
			</div>
			<table>
				<thead>
					<tr>
						<th>Cédula</th>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Edad</th>
						<th>Sexo</th>
						<th>Carrera</th>
						<th>Semestre</th>
					</tr>
				</thead>

				<tbody>
					<?php
						while ($estudiantes = $resultado->fetch_assoc()): //Inicio While?> 
							<tr>
								<td><?php echo $estudiantes['ci']; ?></td>
								<td><?php echo $estudiantes['nombre']; ?></td>
								<td><?php echo $estudiantes['apellido']; ?></td>
								<td><?php echo $estudiantes['edad']; ?></td>
								<td><?php echo $estudiantes['sexo']; ?></td>
								<td><?php echo $estudiantes['carrera']; ?></td>
								<td><?php echo $estudiantes['semestre']; ?></td>
								<td><a href="#" class="button editar">Editar</a></td>
								<td><a href="#" class="button eliminar">Eliminar</a></td>
							</tr>
					<?php endwhile; //Fin While ?>				
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