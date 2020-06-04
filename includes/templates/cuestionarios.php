<div class="cuestionario" id="cuestionario">
    <form action="../index.php" id="registro-1" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required placeholder="Nombre...">
        
        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" id="apellido" required placeholder="Apellido...">
        
        <label for="cedula">Cédula:</label>
        <input type="number" name="cedula" id="cedula" required placeholder="Cedula...">
        
        <label for="edad">Edad:</label>
        <input type="number" name="edad" id="edad" placeholder="Edad.." required>
        
        <label for="genero">Género:</label>
        <input type="radio" name="" id="genero" required value="Masculino"> Masculino  
        <input type="radio" name="" id="genero" required value="Femenino"> Femenino  
        <input type="radio" name="" id="genero" required value="Otros"> Otros
        
        <label for="carrera">Carrera:</label>
        <select name="carreras" id="carrera">
            <option value="">Seleccion</option>
            <option value="Computacion">Computacion</option>
            <option value="Quimicia">Quimica</option>
            <option value="Biologia">Biologia</option>
            <option value="Matematica">Matematica</option>
            <option value="Fisica">Fisica</option>
        </select>
        
        <label for="semestre">Semestre:</label>
        <input type="number" id="semestre" min="1" max="10" required>

        <input type="submit" value="Enviar">
    </form>
</div>