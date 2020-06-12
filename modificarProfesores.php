<?php
    if (isset($_GET['ci-d'])) {
        $ci = $_GET['ci-d'];
    }

    try {
        require_once 'includes/functions/bd_conexion.php';
        $sql = "SELECT * FROM `alumno` WHERE `ci-d` = {$ci};";
        $resultado = $conn->query($sql); 
    } catch (Exception $e) {
        $error = $e->getMessage();
    }

?>

<?php include_once 'includes/templates/header.php'; ?>

    <div class="contenedor">
        <div class="contenido" id="registro">
    		<!--Cuestionario para profesores-->
            <div class="" id="cuestionario_profesores">
                <form action="index.php" id="registrar_profesores">
                    <h2>Modificar Profesores</h2>

                    <p>Seleccione un campo que desee modificar:</p>
                    <div class="campo">
                        <label for="cedula">Cédula:</label>
                        <input type="text" name="Cedula" id="cedula" placeholder="Cedula...">
                    </div>
                    
                    <div class="campo">
                        <label for="nombre">Nombre:</label>
                        <input type="text" name="Nombre" id="nombre" placeholder="Nombre...">
                    </div>    
                    
                    <div class="campo">
                        <label for="apellido">Apellido:</label>
                        <input type="text" name="Apellido" id="apellido" placeholder="Apellido...">
                    </div>
             
                    <div class="campo">
                        <label for="genero">Género:</label>
                        <p>Masculino<input type="radio" id="genero" name="Genero" value="masculino"></p>
                        <p>Femenino<input type="radio" id="genero" name="Genero" value="femenino"></p>
                        <p>Otro<input type="radio" id="genero" name="Genero" value="otro"></p>
                    </div>    
                               
                    <input type="submit" value="Enviar">
                </form>
                <?php
                        if (isset($_GET['modificar'])) {
                            if (isset($_GET['ci-d'])) {
                                $ci = $_GET['ci-d'];
                            }
                            
                            if (isset($_GET['cedula-d'])) {
                                $cedulaModificada = $_GET['cedula-d'];
                            }
                            if (isset($_GET['nombre-d'])) {
                                $nombreModificada = $_GET['nombre'];
                            }
                            if (isset($_GET['apellido-d'])) {
                                $apellidoModificada = $_GET['apellido-d'];
                            }
                            if (isset($_GET['genero-d'])) {
                                $generoModificada = $_GET['genero-d'];
                            }     

                            try {
                                require_once 'includes/functions/bd_conexion.php';
                                $sql = "UPDATE `alumno` SET ";
                                $sql .= "`ci-d` = '{$cedulaModificada}', ";
                                $sql .= "`nombre-d` = '{$nombreModificada}', ";
                                $sql .= "`apellido-d` = '{$apellidoModificada}', ";
                                $sql .= "WHERE `ci-d` = '{$ci}'";
                                $resultado = $conn->query($sql); 
                                $conn->close();
                            } catch (Exception $e) {
                                $error = $e->getMessage();
                            }

                            if ($resultado) {
                                echo "<div class='mensaje'>";
                                echo "<h3>✅ Se ha subido correctamente</h3><br>";
                                echo "</div>";
                            }
                        }


                    ?>


            </div>
        </div>
    </div>

        <?php include_once 'tablas.php'; ?>
    
    <?php include_once 'includes/templates/navegacion-vertical.php'; ?>

<?php include_once 'includes/templates/footer.php'; ?>