<?php include_once 'includes/templates/header.php'; ?>

	<div class="contenedor cuerpo">
		<div class="contenido">
			<div class="encabezado-tabla">
				<h2>Asignaturas</h2>
				<div class="buscador">
					<label for="buscar-estudiante" class="busqueda-estudiante">Buscar Asignatura:</label>
					<input type="search" id="buscar-estudiante" name="buscar-estudiante" placeholder="'Codigo,nombre...'">
				</div>
			</div>
			<table id="asignaturas" class="ocultar">
				<thead>
					<tr>
						<th>Código</th>
						<th>Asignatura</th>
						<th>Semestre</th>
					</tr>
				</thead>

				<tbody>
					<?php
						try {
							require_once 'includes/functions/bd_conexion.php';
							$sql = 'SELECT * FROM `curso` ';
							$resultado = $conn->query($sql);
						} catch (Exception $e) {
							$error = $e->getMessage();
						}


						while ($cursos = $resultado->fetch_assoc()): //Inicio While?> 
							<tr>
								<td><?php echo $cursos['codigo']; ?></td>
								<td><?php echo utf8_encode($cursos['nombre-c']); ?></td>
								<td><?php echo $cursos['nivel']; ?></td>
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