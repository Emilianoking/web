<?php
// Conectar con la base de datos
$servername = "localhost"; // Cambia esto si tu servidor MySQL no está en localhost
$username = "root"; // Cambia esto por tu nombre de usuario de MySQL
$password = ""; // Cambia esto por tu contraseña de MySQL
$database = "camilo"; // Nombre de la base de datos

$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña']; // NOTA: NO es seguro almacenar contraseñas en texto plano, considera utilizar métodos de hash para almacenarlas de forma segura

// Definir el rol
if (strpos($nombre, 'adm') === 0) {
    $rol = 'empleado';
} else {
    $rol = 'cliente';
}

// Insertar los datos en la tabla registro
$sql = "INSERT INTO registro (nombre, telefono, correo, contraseña, rol) VALUES ('$nombre', '$telefono', '$correo', '$contraseña', '$rol')";

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error al registrar datos: " . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
