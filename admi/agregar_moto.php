<?php
// Conectar con la base de datos
$servername = "localhost";
        $username = "empleado";
        $password = "contraseña_empleado";
        $database = "camilo";

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$marca_id = $_POST['marca_id'];
$cc = $_POST['cc'];
$precio = $_POST['precio'];

$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Insertar los datos en la tabla motos
$sql = "INSERT INTO motos (nombre, cc, precio, marca_id) VALUES ('$nombre', '$cc', '$precio', '$marca_id')";

if ($conn->query($sql) === TRUE) {
    echo "Moto agregada exitosamente";
} else {
    echo "Error al agregar la moto: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
