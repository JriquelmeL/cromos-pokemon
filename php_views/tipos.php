<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos</title>
</head>

<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pokemon";
    $selectAllTiposQuery = "select * from tipo";

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sentencia = $conn->prepare($selectAllTiposQuery);
    $sentencia->execute();
    $resultado = $sentencia->fetchAll();

    foreach ($resultado as $tipo) {
        echo "<h2>" . $tipo['id'] . "</h2>";

        echo "<h2>" . $tipo['nombre_tipo'] . "</h2>";
    }
    ?>
</body>

</html>