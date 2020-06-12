<?php
    if (isset($_GET['ci'])) {
        $ci = $_GET['ci'];
    }

    try {
        require_once 'includes/functions/bd_conexion.php';
        $sql = "SELECT * FROM `alumno` WHERE `ci` = {$ci};";
        $resultado = $conn->query($sql); 
    } catch (Exception $e) {
        $error = $e->getMessage();
    }

?>

<?php include_once 'includes/templates/header.php'; ?>

    <div class="contenedor">
        <div class="contenido" id="registro">
            <!--Cuestionario para Estudiantes-->
            <div class="" id="cuestionario_estudiante">
                    <form action="modificarEstudiantes.php" id="registrar_estudiantes" method="get">
                        <h2>Modificar Estudiantes</h2>

                        <p>Seleccione un campo que desee modificar:</p>
                        
                        <div class="campo">
                            <label for="cedula">Cédula:</label>
                            <input type="text" name="cedula" id="cedula"  placeholder="Cedula...">
                        </div>

                        <div class="campo">
                            <label for="nombre">Nombre:</label>
                            <input type="text" name="nombre" id="nombre"  placeholder="Nombre...">
                        </div>    
                        
                        <div class="campo">
                            <label for="apellido">Apellido:</label>
                            <input type="text" name="apellido" id="apellido"  placeholder="Apellido...">
                        </div>
                        
                        <div class="campo">
                            <label for="edad">Edad:</label>
                            <input type="text" name="edad" id="edad" placeholder="Edad.." >
                        </div>

                        <div class="campo">
                            <label for="genero">Género:</label>
                            <p>Masculino<input type="radio" id="genero" name="genero" value="masculino"></p>
                            <p>Femenino<input type="radio" id="genero" name="genero" value="femenino"></p>
                            <p>Otro<input type="radio" id="genero" name="genero" value="otro"></p>
                        </div>    

                        <div class="campo">
                            <label for="carrera">Carrera:</label>
                            <select name="carreras" id="carrera">
                                <option value="">Seleccion</option>
                                <option value="Computacion">Computacion</option>
                                <option value="Quimicia">Quimica</option>
                                <option value="Biologia">Biologia</option>
                                <option value="Matematica">Matematica</option>
                                <option value="Fisica">Fisica</option>
                            </select>
                        </div>

                        <div class="campo">
                            <label for="semestre">Semestre:</label>
                            <input type="number" name="semestre" id="semestre" min="1" max="10" placeholder="Semestre...">
                        </div>

                        <input type="submit" name="modificar" value="Modificar">
                    </form>
                    <?php
                        if (isset($_GET['modificar'])) {
                            if (isset($_GET['ci'])) {
                                $ci = $_GET['ci'];
                            }
                            
                            if (isset($_GET['cedula'])) {
                                $cedulaModificada = $_GET['cedula'];
                            }
                            if (isset($_GET['nombre'])) {
                                $nombreModificada = $_GET['nombre'];
                            }
                            if (isset($_GET['apellido'])) {
                                $apellidoModificada = $_GET['apellido'];
                            }
                            if (isset($_GET['edad'])) {
                                $edadModificada = $_GET['edad'];
                            }
                            if (isset($_GET['genero'])) {
                                $generoModificada = $_GET['genero'];
                            }
                            if (isset($_GET['carreras'])) {
                                $carrerasModificada = $_GET['carreras'];
                            }
                            if (isset($_GET['semestre'])) {
                                $semestreModificada = $_GET['semestre'];
                            }     

                            try {
                                require_once 'includes/functions/bd_conexion.php';
                                $sql = "UPDATE `alumno` SET ";
                                $sql .= "`ci` = '{$cedulaModificada}', ";
                                $sql .= "`nombre` = '{$nombreModificada}', ";
                                $sql .= "`apellido` = '{$apellidoModificada}', ";
                                $sql .= "`edad` = '{$edadModificada}', ";
                                $sql .= "`sexo` = '{$generoModificada}', ";
                                $sql .= "`carrera` = '{$carrerasModificada}', ";
                                $sql .= "`semestre` = '{$semestreModificada}' ";
                                $sql .= "WHERE `ci` = '{$ci}'";
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


<?php 

/**
 * 
 */