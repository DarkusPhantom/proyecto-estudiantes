<?php include_once 'includes/templates/header.php'; ?>

	<div class="contenedor">
		<div class="contenido" id="info-principal">
			<h2>Bienvenido a la Universidad de Carabobo</h2>
			<p class="presentacion">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam neque non blanditiis at consectetur sint aspernatur consequuntur, sequi illo ex praesentium ullam similique quo distinctio earum autem, vel placeat architecto?</p>
			<p class="presentacion">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam neque non blanditiis at consectetur sint aspernatur consequuntur, sequi illo ex praesentium ullam similique quo distinctio earum autem, vel placeat architecto?</p>
			<p class="presentacion">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam neque non blanditiis at consectetur sint aspernatur consequuntur, sequi illo ex praesentium ullam similique quo distinctio earum autem, vel placeat architecto?</p>
		</div>

		<div class="contenido-tabla ocultar">
			<div class="encabezado-tabla">
				<h2 class="nombre-tabla">Estudiantes</h2>
			</div>
			<div class="button registrar">
					<a href="#">Registrar</a>
			</div>
			<div class="buscador">
				<label for="buscar-estudiante" class="busqueda-estudiante">Buscar:</label>
				<input type="search" id="buscar-estudiante" name="buscar-estudiante" placeholder="Buscar...">
			</div>
			<table id="estudiantes" class="tabla-datos">
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
						try {
							require_once 'includes/functions/bd_conexion.php';
							$sql = 'SELECT * FROM `alumno` ';
							$resultado = $conn->query($sql);
						} catch (Exception $e) {
							$error = $e->getMessage();
						}

						while ($estudiantes = $resultado->fetch_assoc()): //Inicio While?> 
							<tr>
								<td><?php echo $estudiantes['ci']; ?></td>
								<td><?php echo $estudiantes['nombre']; ?></td>
								<td><?php echo $estudiantes['apellido']; ?></td>
								<td><?php echo $estudiantes['edad']; ?></td>
								<td><?php echo $estudiantes['sexo']; ?></td>
								<td><?php echo $estudiantes['carrera']; ?></td>
								<td><?php echo $estudiantes['semestre']; ?></td>
								<td><a href="editar.php" class="button editar">Editar</a></td>
								<td><a href="#" class="button eliminar">Eliminar</a></td>
							</tr>		 
					<?php endwhile; //Fin While ?>				
				</tbody>
			</table>


			<table id="profesores" class="tabla-datos ocultar">
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


			<table id="asignaturas" class="tabla-datos ocultar">
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

			<table id="notas" class="tabla-datos ocultar">
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
			</div>-->
		</div>
	
		<?php include_once 'includes/templates/navegacion-vertical.php'; ?>

<?php include_once 'includes/templates/footer.php'; ?>