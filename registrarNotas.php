<?php include_once 'includes/templates/header.php'; ?>
	
	<div class="contenedor">
		<div class="contenido" id="registro">
			<!--cuestionario notas-->
	            <div id="cuestionario_notas">
	                <form action="registrarNotas.php" id="registrar_notas" method="post">
	                    <h2>Registrar Notas</h2>

	                   <div class="campo">
	                        <label for="codigo">Código:</label>
	                        <input type="text" name="codigo" id="codigo" required placeholder="Codigo...">
	                    </div>

	                   <div class="campo">
	                        <label for="cedula">Cédula:</label>
	                        <input type="text" name="cedula" id="cedula" required placeholder="Cedula...">
	                    </div>

	                    <div class="campo">
	                        <label for="nota">Calificación:  </label>
	                        <input type="number" name="calificacion" id="nota" min="0" max="20" required>
	                    </div>

	                    <input type="submit" name="submit" value="Enviar">
	                </form>

					<?php 
						if(isset($_POST['submit'])): 
							$codigo = $_POST['codigo'];
							$cedula = $_POST['cedula'];
							$calificacion = $_POST['calificacion']; 

							try {
						        require_once 'includes/functions/bd_conexion.php';
						        $stmt = $conn->prepare("INSERT INTO `nota` (`ci-a`, `codigo-c`, `calificacion`) VALUES (?,?,?)");
						        $stmt->bind_param("ssi", $codigo, $cedula, $calificacion);
						        if ($stmt->error) {
						          echo "<div class='mensaje error'>";
						          echo "❌Error❌";
						          echo "</div>";
						        }else{
						    		echo "<div class='mensaje'>";
						    		echo "<h3>✅ Se ha subido correctamente</h3><br>";
						    		echo "<p>Codigo: " . $codigo . ", Cedula: " . $cedula . ", Calificación: " . $calificacion . "</p>";
						    		echo "</div>";  
						        }
						        $stmt->execute();
						        $stmt->close();
						        $conn->close(); 
						      } catch (Exception $e) {
						        echo "Error" . $e->getMessage();
						      }							
						endif;
					?>

	            </div>
		</div>
	</div>

    <?php include_once 'tablas.php'; ?>
    
    <?php include_once 'includes/templates/navegacion-vertical.php'; ?>

<?php include_once 'includes/templates/footer.php'; ?>