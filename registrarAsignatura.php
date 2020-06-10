<?php include_once 'includes/templates/header.php'; ?>
	
	<div class="contenedor">
		<div class="contenido" id="registro">
			<!--Cuestionario para asignatura-->
	            <div class="" id="cuestionario_asignatura">
	                <form action="registrarAsignatura.php" id="registrar_asignatura" method="post">
	                    <h2>Registrar Asignaturas</h2>

	                    <div class="campo">
	                        <label for="asignatura">Asignatura:</label>
	                        <input type="text" name="asignatura" id="asignatura" required placeholder="Asignatura...">
	                    </div>    
	                    
	                    <div class="campo">
	                        <label for="codigo">Código:</label>
	                        <input type="text" name="codigo" id="codigo" required placeholder="Codigo...">
	                    </div>

	                    <div class="campo">
	                        <label for="semestre">Semestre:</label>
	                        <input type="number" name="semestre" id="semestre" min="1" max="10" required placeholder="Semestre...">
	                    </div>

	                    <input type="submit" name="submit" value="Enviar">
	                </form>

					<?php 
						if(isset($_POST['submit'])): 
							$asignatura = $_POST['asignatura'];
							$codigo = $_POST['codigo'];
							$semestre = $_POST['semestre']; 

							try {
						        require_once 'includes/functions/bd_conexion.php';
						        $stmt = $conn->prepare("INSERT INTO `curso` (`codigo`, `nombre-c`, `nivel`) VALUES (?,?,?)");
						        $stmt->bind_param("ssi", $asignatura, $codigo, $semestre);
						        if ($stmt->error) {
						          echo "<div class='mensaje error'>";
						          echo "❌Error❌";
						          echo "</div>";
						        }else{
						    		echo "<div class='mensaje'>";
						    		echo "<h3>✅ Se ha subido correctamente</h3><br>";
						    		echo "<p>Asignatura: " . $asignatura . ", Código: " . $codigo . ", Semestre: " . $semestre . "</p>";
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