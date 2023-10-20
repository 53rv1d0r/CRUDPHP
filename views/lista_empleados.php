<!DOCTYPE html>
<html>
<head>
    <title>Lista de Empleados</title>
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
</head>
<body>
    <h1>Lista de Empleados</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Edadf</th>
            <th>Fecha de Ingreso</th>
            <th>Comentarios</th>
            <th>Género</th>
            <th>Departamento</th>

        </tr>
        
            <?php foreach ($empleados as $empleado): ?>
                <tr>
                    <td><?php echo $empleado['id']; ?></td>
                    <td><?php echo $empleado['nombres']; ?></td>
                    <td><?php echo $empleado['apellidos']; ?></td>
                    <td><?php echo $empleado['edad']; ?></td>
                    <td><?php echo $empleado['fecha_ingreso']; ?></td>
                    <td><?php echo $empleado['comentarios']; ?></td>
                    <td><?php echo $empleado['genero_id']; ?></td>
                    <td><?php echo $empleado['departamento_id']; ?></td>

                </tr>
            <?php endforeach; ?>
        

    </table>
    <script src="assets/js/script.js"></script>
</body>
</html>



