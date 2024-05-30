<?php
// Conectar con la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$database = "camilo";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener los datos del formulario de inicio de sesión
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];

// Consulta para verificar si el usuario es empleado o cliente
$sql = "SELECT * FROM registro WHERE correo = '$correo' AND contraseña = '$contraseña'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if ($row['rol'] === 'empleado') {
        // Usuario válido: empleado
        // Redirigir a la página principal de empleados
        header("Location: prinemp.php");
        exit();
    } elseif ($row['rol'] === 'cliente') {
        // Usuario válido: cliente
        // Redirigir a la página principal de clientes
        header("Location: princlie.php");
        exit();
    } else {
        // Rol desconocido
        echo "Rol de usuario desconocido";
    }
} else {
    // Usuario no encontrado en la base de datos o credenciales incorrectas
    echo "Correo electrónico o contraseña incorrectos";
}

$conn->close();
?>
