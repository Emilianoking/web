<?php
// Conexión a la base de datos
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

// Consultar la tabla de marcas
$sql = "SELECT * FROM marcas";
$result = $conn->query($sql);

// Mostrar la tabla de marcas
if ($result->num_rows > 0) {
    // Mostrar los resultados en una tabla HTML
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Marca</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["marca"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron resultados.";
}

// Cerrar conexión
$conn->close();
?>