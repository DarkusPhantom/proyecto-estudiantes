<?php include_once 'includes/templates/header.php'; ?>

    <div class="contenedor">
        <div class="contenido" id="registro">
    		<!--Cuestionario para profesores-->
            <div class="" id="cuestionario_profesores">
                <form action="registrarProfesores.php" id="registrar_profesores" method="post">
                    <h2>Registrar Profesores</h2>

                    <div class="campo">
                        <label for="nombre">Nombre:</label>
                        <input type="text" name="nombre" id="nombre" required placeholder="Nombre...">
                    </div>    
                    
                    <div class="campo">
                        <label for="apellido">Apellido:</label>
                        <input type="text" name="apellido" id="apellido" required placeholder="Apellido...">
                    </div>
             
                    <div class="campo">
                        <label for="cedula">Cédula:</label>
                        <input type="text" name="cedula" id="cedula" required placeholder="Cedula...">
                    </div>

                    <div class="campo">
                        <label for="genero">Género:</label>
                        <p>Masculino<input type="radio" id="genero" name="genero" value="masculino"></p>
                        <p>Femenino<input type="radio" id="genero" name="genero" value="femenino"></p>
                        <p>Otro<input type="radio" id="genero" name="genero" value="otro"></p>
                    </div>    
                               
                    <input type="submit" name="submit" value="Enviar">
                </form>
                
                    <?php 
                        if(isset($_POST['submit'])): 
                            $nombre = $_POST['nombre'];
                            $apellido = $_POST['apellido'];
                            $cedula = $_POST['cedula'];
                            $genero = $_POST['genero'];

                            try {
                                require_once 'includes/functions/bd_conexion.php';
                                $stmt = $conn->prepare("INSERT INTO `docente` (`ci-d`, `nombre-d`, `apellido-d`, `sexo-d`) VALUES (?,?,?,?)");
                                $stmt->bind_param("ssss", $cedula, $nombre, $apellido, $genero);
                                if ($stmt->error) {
                                  echo "<div class='mensaje error'>";
                                  echo "❌Error❌";
                                  echo "</div>";
                                }else{
                                    echo "<div class='mensaje'>";
                                    echo "<h3>✅ Se ha subido correctamente</h3><br>";
                                    echo "<p>Nombre: " . $nombre . ", Apellido: " . $apellido . ", Cedula: " . $cedula . ", Género: " . $genero . "</p>";
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