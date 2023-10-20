<?php
include 'controllers/EmpleadoController.php';
include 'config/config.php';

$controller = new EmpleadoController($conn);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Se ha enviado un formulario para agregar un empleado
    $controller->agregarEmpleado();
} else {
    // No se ha enviado un formulario POST, lista a los empleados
    $controller->listarEmpleados();
}



