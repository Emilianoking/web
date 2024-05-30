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

            // Consulta SQL para obtener las motos con el nombre de la marca en lugar del ID
            $sql = "SELECT motos.id, motos.nombre, marcas.marca AS marca_nombre, motos.precio FROM motos 
                    INNER JOIN marcas ON motos.marca_id = marcas.id";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Mostrar datos de cada fila
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["nombre"] . "</td>";
                    echo "<td>" . $row["marca_nombre"] . "</td>"; // Mostrar el nombre de la marca en lugar del ID
                    echo "<td>" . $row["precio"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No hay motos registradas</td></tr>";
            }

            // Cerrar la conexión
            $conn->close();
            ?>