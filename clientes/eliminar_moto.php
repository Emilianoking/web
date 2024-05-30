<?php
// Verificar si se ha recibido un ID de moto para eliminar
if(isset($_POST['id_moto']) && !empty($_POST['id_moto'])) {
    // Conexión a la base de datos

$servername = "localhost";
$username = "cliente";
$password = "contraseña_cliente";
$database = "camilo";

    $conn = new mysqli($servername, $username, $password, $database);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Obtener el ID de la moto a eliminar
    $id = $_POST['id_moto'];

    // Consulta SQL para eliminar la moto con el ID especificado
    $sql = "DELETE FROM motos WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Moto eliminada correctamente";
    } else {
        echo "Error al eliminar la moto: " . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
} else {
    echo "ID de moto no proporcionado";
}
?>
