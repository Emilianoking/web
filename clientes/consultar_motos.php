<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$database = "camilo";

$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consulta SQL para obtener las motos de la marca "Yamaha"
$sql = "SELECT motos.nombre, motos.cc, motos.precio
        FROM motos
        INNER JOIN marcas ON motos.marca_id = marcas.id
        WHERE marcas.marca = 'Yamaha'";

$result = $conn->query($sql);

// Cerrar la conexión
$conn->close();
?>
