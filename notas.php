<?php include_once 'includes/templates/header.php'; ?>

	<div class="contenedor cuerpo">
		<div class="contenido">
			<div class="encabezado-tabla">
				<h2>Notas</h2>
				<div class="buscador">
					<label for="buscar-estudiante" class="busqueda-estudiante">Buscar Estudiante:</label>
					<input type="search" id="buscar-estudiante" name="buscar-estudiante" placeholder="Cedula">
				</div>
			</div>
			<table>
				<thead>
					<tr>
						<th>Cédula</th>
						<th>Código</th>
						<th>Calificacion</th>
					</tr>
				</thead>

				<tbody>
					<?php
						try {
							require_once 'includes/functions/bd_conexion.php';
							$sql = 'SELECT * FROM `nota` ';
							$resultado = $conn->query($sql);
						} catch (Exception $e) {
							$error = $e->getMessage();
						}


						while ($notas = $resultado->fetch_assoc()): //Inicio While?> 
							<tr>
								<td><?php echo $notas['ci-a']; ?></td>
								<td><?php echo $notas['codigo-c']; ?></td>
								<td><?php echo $notas['calificacion']; ?></td>
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