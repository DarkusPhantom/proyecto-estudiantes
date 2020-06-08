<?php include_once 'includes/templates/header.php'; ?>
	
	<div class="contenedor">
		<div class="contenido" id="registro">
			<!--cuestionario notas-->
	            <div id="cuestionario_notas">
	                <form action="registrarNotas" id="registrar_notas" method="post">
	                    <h2>Registrar Notas</h2>

	                   <div class="campo">
	                        <label for="codigo">Código:</label>
	                        <input type="text" name="Codigo" id="codigo" required placeholder="Codigo...">
	                    </div>

	                   <div class="campo">
	                        <label for="cedula">Cédula:</label>
	                        <input type="text" name="Cedula" id="cedula" required placeholder="Cedula...">
	                    </div>

	                    <div class="campo">
	                        <label for="nota">Calificación:  </label>
	                        <input type="number" name="Calificacion" id="nota" min="0" max="20" required>
	                    </div>

	                    <input type="submit" value="Enviar">
	                </form>
	            </div>
		</div>
	</div>

    <?php include_once 'tablas.php'; ?>
    
    <?php include_once 'includes/templates/navegacion-vertical.php'; ?>

<?php include_once 'includes/templates/footer.php'; ?>