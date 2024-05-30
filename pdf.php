<?php
// Incluir la biblioteca TCPDF
require_once(__DIR__ . '/vendor/tecnickcom/tcpdf/tcpdf.php');

// Conectar a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$database = "camilo";

$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consultar la tabla de motos
$sql = "SELECT * FROM motos";
$result = $conn->query($sql);

// Crear instancia de TCPDF
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// Establecer información del documento
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Autor');
$pdf->SetTitle('Tabla de Motos');
$pdf->SetSubject('Tabla de Motos');
$pdf->SetKeywords('TCPDF, PDF, tabla, motos');

// Establecer márgenes
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT, true);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// Establecer autores para encabezado y pie de página
$pdf->SetHeaderData('', PDF_HEADER_LOGO_WIDTH, 'Tabla de Motos', 'Juan Camilo Gomez Duarte');
$pdf->setFooterData(array(0,64,0), array(0,64,128));

// Establecer el espaciado de la página
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// Establecer fuente
$pdf->SetFont('helvetica', '', 10);

// Agregar una página
$pdf->AddPage();

// Crear tabla de motos
$html = '<h1>Tabla de Motos</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>CC</th>
            <th>Precio</th>
            <th>Marca</th>
        </tr>';
while($row = $result->fetch_assoc()) {
    $html .= '<tr>';
    $html .= '<td>' . $row['id'] . '</td>';
    $html .= '<td>' . $row['nombre'] . '</td>';
    $html .= '<td>' . $row['cc'] . '</td>';
    $html .= '<td>' . $row['precio'] . '</td>';
    $html .= '<td>' . (isset($row['marca']) ? $row['marca'] : '') . '</td>'; // Verificar si la clave 'marca' está definida
    $html .= '</tr>';
}
$html .= '</table>';

// Escribir HTML en PDF
$pdf->writeHTML($html, true, false, true, false, '');

// Cerrar y generar PDF
$pdf->Output('tabla_motos.pdf', 'D');

// Cerrar conexión a la base de datos
$conn->close();
?>
