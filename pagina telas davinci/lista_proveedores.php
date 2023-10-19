<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Proveedores</title>
</head>
<body>
    <h1>Lista de Proveedores</h1>
    
    <?php
    // Conexión a la base de datos (reemplaza con tus propios datos)
    $servername = "localhost";
    $username = "tu_usuario";
    $dbname = "tu_base_de_datos";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Consulta SQL para obtener la lista de proveedores
    $sql = "SELECT * FROM proveedores";
    $result = $conn->query($sql);

    // Mostrar la lista de proveedores
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<p><strong>Nombre:</strong> " . $row["nombre"] . "</p>";
            echo "<p><strong>Dirección:</strong> " . $row["direccion"] . "</p>";
            echo "<p><strong>Teléfono:</strong> " . $row["telefono"] . "</p>";
            echo "<p><strong>Email:</strong> " . $row["email"] . "</p>";
            echo "<hr>";
        }
    } else {
        echo "No se encontraron proveedores.";
    }

    // Cerrar la conexión
    $conn->close();
    ?>

    <a href="index.html">Volver a la página de inicio</a>
</body>
</html>
