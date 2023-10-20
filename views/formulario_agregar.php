<!DOCTYPE html>
<html>
<head>
    <title>Formulario para Agregar Empleado</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/styles.css">
</head>
<body>
    <h1>Formulario para Agregar Empleado</h1>
    
    <form method="POST" action="../empleados.php">
        <label for="nombres">Nombres:</label>
        <input type="text" name="nombres" required><br>

        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" required><br>

        <label for="edad">Edad:</label>
        <input type="number" name="edad" required><br>

        <label for="fechaIngreso">Fecha de Ingreso:</label>
        <input type="date" name="fechaIngreso" required value="<?php echo date('Y-m-d'); ?>"><br>


        <label for="comentarios">Comentarios:</label>
        <textarea name="comentarios" rows="4" cols="50"></textarea><br>

        <label for="generoId">Género:</label>
        <select name="generoId">
            <!-- Opciones del menú desplegable para los géneros -->
            <option value="1">Masculino</option>
            <option value="2">Femenino</option>
            
        </select><br>

        <label for="departamentoId">Departamento:</label>
        <select name="departamentoId">
            <!-- Opciones del menú desplegable para los departamentos -->
            <option value="1">TI</option>
            <option value="2">Servicio al Cliente</option>
            <option value="3">Ventas</option>
            
        </select><br>

        <input type="submit" value="Agregar Empleado">
    </form>
    <script src="../assets/js/script.js"></script>
</body>
</html>
