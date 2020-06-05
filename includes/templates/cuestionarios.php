<!--Cuestionario para Estudiantes-->
<div class="contenido ocultar" id="cuestionario_estudiante">
    <form action="../index.php" id="registrar_estudiantes" method="post">
        <h2>Estudiantes</h2>

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
            <label for="edad">Edad:</label>
            <input type="text" name="Edad" id="edad" placeholder="Edad.." required>
        </div>

        <div class="campo">
            <label for="genero">Género:</label>
            <p>Masculino<input type="radio" id="genero" name="Genero" value="masculino"></p>
            <p>Femenino<input type="radio" id="genero" name="Genero" value="femenino"></p>
            <p>Otro<input type="radio" id="genero" name="Genero" value="otro"></p>
        </div>    

        <div class="campo">
            <label for="carrera">Carrera:</label>
            <select name="Carreras" id="carrera">
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
            <input type="number" name="Semestre" id="semestre" min="1" max="10" required placeholder="Semestre...">
        </div>    


        <input type="submit" value="Enviar">
    </form>
</div>

<!--Cuestionario para profesores-->
<div class="contenido ocultar" id="cuestionario_profesores">
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

<!--Cuestionario para asignatura-->
<div class="contenido ocultar" id="cuestionario_asignatura">
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

<!--cuestionario notas-->
<div class="contenido ocultar" id="cuestionario_notas">
    <form action="../index.php" id="registrar_notas" method="post">
        <h2>Notas</h2>

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