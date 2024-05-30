<?php
$servername = "localhost";
$username = "cliente";
$password = "contraseña_cliente";
$database = "camilo";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Marca</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["marca"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 resultados";
}
// Consultar la tabla de marcas
$sql = "SELECT * FROM marcas";
$result = $conn->query($sql);

// Cerrar conexión
$conn->close();
?>
