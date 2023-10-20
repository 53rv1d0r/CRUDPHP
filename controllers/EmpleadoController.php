<?php
include 'models/EmpleadoModel.php';
include 'config/config.php';



class EmpleadoController {
    private $model;

    public function __construct($conn) {
        $this->model = new EmpleadoModel($conn);
    }
    //Método listar empleados
    public function listarEmpleados() {
        // Llama al método del modelo para obtener la lista de empleados
        $empleados = $this->model->obtenerEmpleados();

        // Carga vista para mostrar la lista de empleados
        include 'views/lista_empleados.php';
    }

    //Método agregar empleado
    public function agregarEmpleado() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Verificar si se ha enviado un formulario POST
    
            // Recuperando los datos del formulario
            $nombres = $_POST['nombres'];
            $apellidos = $_POST['apellidos'];
            $edad = $_POST['edad'];
            $fechaIngreso = $_POST['fechaIngreso'];
            $comentarios = $_POST['comentarios'];
            $generoId = $_POST['generoId'];
            $departamentoId = $_POST['departamentoId'];
    
            // Llma al método del modelo para agregar el empleado
            $exito = $this->model->crearEmpleado($nombres, $apellidos, $edad, $fechaIngreso, $comentarios, $generoId, $departamentoId);
    
            if ($exito) {
                // a una página de éxito
                header("Location: views/exito_agregar.php");
                exit();
            } else {
                // Mostrar una vista de error
                include 'views/error_agregar.php';
            }
        } else {
            // Si no se ha enviado un formulario POST, muestra el formulario de ingreso
            include 'views/formulario_agregar.php';
        }
    }
    
    

    public function editarEmpleado($id) {

        include 'views/exito_editar.php';
    }

    public function eliminarEmpleado($id) {

        include 'views/exito_eliminar.php';
    }
}
?>
