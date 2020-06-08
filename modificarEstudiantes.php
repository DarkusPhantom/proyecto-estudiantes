<?php include_once 'includes/templates/header.php'; ?>

    <div class="contenedor">
        <div class="contenido" id="registro">
            <!--Cuestionario para Estudiantes-->
            <div class="" id="cuestionario_estudiante">
                    <form action="crearEstudiantes.php" id="registrar_estudiantes" method="post">
                        <h2>Estudiantes</h2>

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
                            <label for="edad">Edad:</label>
                            <input type="text" name="edad" id="edad" placeholder="Edad.." required>
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
                            <input type="number" name="semestre" id="semestre" min="1" max="10" required placeholder="Semestre...">
                        </div>

                        <input type="submit" value="Enviar">
                    </form>
            </div>
        </div>
    </div>
    
    <?php include_once 'tablas.php'; ?>
    
    <?php include_once 'includes/templates/navegacion-vertical.php'; ?>

<?php include_once 'includes/templates/footer.php'; ?>