<div id="contenido-tabla" class="ocultar">
	<!--Encabezado de la tabla-->
	<div class="encabezado-tabla">
		<h2 id="nombre_tabla" class="nombre-tabla">Estudiantes</h2>
	</div>
	
	<!--Boton de registro-->
	<a id="registrar" class="button">Registrar</a>
		
	<div class="buscador">
		<label for="buscar-estudiante" class="busqueda-estudiante">Buscar:</label>
		<input type="search" id="buscar-estudiante" name="buscar-estudiante" placeholder="Buscar...">
	</div>

	<!--Tabla estudiantes-->
	<table id="estudiantes" class="tabla_datos ocultar">
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
						<td><a id="editar" class="button">Editar</a></td>
						<td><a id="eliminar" class="button">Eliminar</a></td>
					</tr>		 
			<?php endwhile; //Fin While ?>				
		</tbody>
	</table><!--Tabla estudiantes-->

	<!--Tabla profesores-->
	<table id="profesores" class="tabla_datos ocultar">
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
						<td><a id="editar" class="button">Editar</a></td>
						<td><a id="eliminar" class="button">Eliminar</a></td>
					</tr>		 
			<?php  endwhile; //Fin While ?>				
		</tbody>
	</table><!--Tabla profesores-->

	<!--Tabla asignaturas-->
	<table id="asignaturas" class="tabla_datos ocultar">
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
	</table><!--Tabla asignaturas-->

	<!--Tabla notas-->
	<table id="notas" class="tabla_datos ocultar">
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
	</table><!--Tabla notas-->

	<div class="pagination">
		<a href="#">&laquo;</a>
		<a href="#">1</a>
		<a href="#">2</a>
		<a href="#">3</a>
		<a href="#">4</a>
		<a href="#">5</a>
		<a href="#">6</a>
		<a href="#">&raquo;</a>
	</div>
</div>