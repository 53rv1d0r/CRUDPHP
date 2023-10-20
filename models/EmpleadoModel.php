<?php
include 'config/config.php';

class EmpleadoModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }
    //Read empleado
    public function obtenerEmpleados() {
        $query = "SELECT * FROM empleados";
        ////$result = $this->conn->query($query);
        $result = mysqli_query($this->conn, $query);
        return $result;

    }
    //Create empleado
    public function crearEmpleado($nombres, $apellidos, $edad, $fechaIngreso, $comentarios, $generoId, $departamentoId) {
        $query = "INSERT INTO empleados (nombres, apellidos, edad, fecha_ingreso, comentarios, genero_id, departamento_id) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("ssissii", $nombres, $apellidos, $edad, $fechaIngreso, $comentarios, $generoId, $departamentoId);
    
        if ($stmt->execute()) {
            mysqli_close($this->conn); // Cerrar la conexión a la base de datos
            return true;
        } else {
            mysqli_close($this->conn); // Cerrar la conexión a la base de datos
            return false;
        }
    }
    //Update empleado
    public function actualizarEmpleado($id, $nombres, $apellidos, $edad, $fechaIngreso, $comentarios, $generoId, $departamentoId) {
        $query = "UPDATE empleados SET nombres = ?, apellidos = ?, edad = ?, fecha_ingreso = ?, comentarios = ?, genero_id = ?, departamento_id = ? WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("ssissiii", $nombres, $apellidos, $edad, $fechaIngreso, $comentarios, $generoId, $departamentoId, $id);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
    //Delete empleado
    public function eliminarEmpleado($id) {
        $query = "DELETE FROM empleados WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    ///////////////////////// Opcional para obtener generos y departamentos /////////////////////////

    //Read generos
    public function obtenerGeneros() {
        $query = "SELECT * FROM generos";
        $result = $this->conn->query($query);

        return $result;
    }
    //Read departamentos
    public function obtenerDepartamentos() {
        $query = "SELECT * FROM departamento";
        $result = $this->conn->query($query);

        return $result;
    }
}
?>
