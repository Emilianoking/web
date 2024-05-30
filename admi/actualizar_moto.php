<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si se ha recibido un ID de moto y los nuevos datos para actualizar
    if(isset($_POST['id_moto']) && !empty($_POST['id_moto']) && isset($_POST['nombre']) && isset($_POST['cc']) && isset($_POST['precio']) && isset($_POST['marca_id'])) {
        // Conexión a la base de datos
        $servername = "localhost";
        $username = "empleado";
        $password = "contraseña_empleado";
        $database = "camilo";

        $conn = new mysqli($servername, $username, $password, $database);

        // Verificar la conexión
        if ($conn->connect_error) {
            die("Error de conexión: " . $conn->connect_error);
        }

        // Obtener los datos de la moto a actualizar
        $id = $_POST['id_moto'];
        $nombre = $_POST['nombre'];
        $cc = $_POST['cc'];
        $precio = $_POST['precio'];
        $marca_id = $_POST['marca_id'];

        // Consulta SQL para actualizar la moto con el ID especificado
        $sql = "UPDATE motos SET nombre='$nombre', cc='$cc', precio='$precio', marca_id='$marca_id' WHERE id='$id'";

        if ($conn->query($sql) === TRUE) {
            echo "Moto actualizada correctamente";
        } else {
            echo "Error al actualizar la moto: " . $conn->error;
        }

        // Cerrar la conexión
        $conn->close();
    } else {
        echo "Por favor, proporciona todos los datos necesarios para actualizar la moto";
    }
}
?>
