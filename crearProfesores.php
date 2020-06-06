<?php include_once 'includes/templates/header.php'; ?>

    <div class="contenedor">
        <div class="contenido" id="registro">
    		<!--Cuestionario para profesores-->
            <div class="" id="cuestionario_profesores">
                <form action="index.php" id="registrar_profesores">
                    <h2>Profesores</h2>

                    <div class="campo">
                        <label for="nombre">Nombre:</label>
                        <input type="text" name="Nombre" id="nombre" required placeholder="Nombre...">
                    </div>    
                    
                    <div class="campo">
                        <label for="apellido">Apellido:</label>
                        <input type="text" name="Apellido" id="apellido" required placeholder="Apellido...">
                    </div>
             
                    <div class="campo">
                        <label for="cedula">Cédula:</label>
                        <input type="text" name="Cedula" id="cedula" required placeholder="Cedula...">
                    </div>

                    <div class="campo">
                        <label for="genero">Género:</label>
                        <p>Masculino<input type="radio" id="genero" name="Genero" value="masculino"></p>
                        <p>Femenino<input type="radio" id="genero" name="Genero" value="femenino"></p>
                        <p>Otro<input type="radio" id="genero" name="Genero" value="otro"></p>
                    </div>    
                               
                    <input type="submit" value="Enviar">
                </form>
            </div>
        </div>
    </div>

        <?php include_once 'tablas.php'; ?>
    
    <?php include_once 'includes/templates/navegacion-vertical.php'; ?>

<?php include_once 'includes/templates/footer.php'; ?>