<?php include_once 'includes/templates/header.php'; ?>
	
	<div class="contenedor">
		<div class="contenido" id="registro">
			<!--Cuestionario para asignatura-->
	            <div class="" id="cuestionario_asignatura">
	                <form action="../index.php" id="registrar_asignatura" method="post">
	                    <h2>Asignaturas</h2>

	                    <div class="campo">
	                        <label for="asignatura">Asignatura:</label>
	                        <input type="text" name="Asignatura" id="asignatura" required placeholder="Asignatura...">
	                    </div>    
	                    
	                    <div class="campo">
	                        <label for="codigo">Código:</label>
	                        <input type="text" name="Codigo" id="codigo" required placeholder="Codigo...">
	                    </div>

	                    <div class="campo">
	                        <label for="semestre">Semestre:</label>
	                        <input type="number" name="Semestre" id="semestre" min="1" max="10" required placeholder="Semestre...">
	                    </div>


	                    <input type="submit" value="Enviar">
	                </form>
	            </div>
		</div>
	</div>

    <?php include_once 'tablas.php'; ?>
    
    <?php include_once 'includes/templates/navegacion-vertical.php'; ?>

<?php include_once 'includes/templates/footer.php'; ?>