<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regiones</title>
</head>

<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pokemon";
    $selectAllRegionQuery = "select * from region";

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sentencia = $conn->prepare($selectAllRegionQuery);
    $sentencia->execute();
    $resultado = $sentencia->fetchAll();

    foreach ($resultado as $region) {
        echo "<h2>" . $region["id"] . "</h2>";
        echo "<h2>" . $region["nombre_region"] . "</h2>";
    }
    ?>

</body>

</html>