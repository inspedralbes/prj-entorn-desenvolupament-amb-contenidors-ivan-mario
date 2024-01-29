<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "persones";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar conexión
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Realizar consulta SQL
    $sql = "SELECT id, nom FROM noms";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Mostrar los datos de cada fila
        while ($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"] . " - Name: " . $row["nom"] . "<br>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
</body>

</html>