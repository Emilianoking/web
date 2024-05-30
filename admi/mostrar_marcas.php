<?php
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

// Consulta SQL para obtener las marcas
$sql = "SELECT id, marca FROM marcas";
$result = $conn->query($sql);
?>

<!-- Mostrar la tabla de marcas -->
<div class="container">
    <h2>Tabla de Marcas</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Marca</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                // Mostrar datos de cada fila
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["marca"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='2'>No hay marcas registradas</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<?php
// Cerrar la conexión
$conn->close();
?>
