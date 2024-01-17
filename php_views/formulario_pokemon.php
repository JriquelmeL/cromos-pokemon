<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pokemon";
$selectAlltipoQuery = "select * from tipo";
$selectAllRegionQuery = "select * from region";


$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sentencia = $conn->prepare("$selectAlltipoQuery");
$sentencia->execute();

$tipos = $sentencia->fetchAll();

$sentencia = $conn->prepare("$selectAllRegionQuery");
$sentencia->execute();

$regiones = $sentencia->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"
        content="IE=edge">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>

    <?php include('../php_partials/bootstrap.php'); ?>
</head>

<body>
    <?php require_once('../php_partials/mensajes.php'); ?>
    <div class="card border-0">
        <div class="card-header"
            style="background-color: #EF2100; color: white;">
            <img src="../media/pokeball.png"
                alt="Bootstrap"
                width="50"
                height="50" />
            <span>Añadir Pokemon</span>
        </div>
        <div class="card-body">
            <form action="/cromos/php_controllers/pokemon_controller.php"
                method="POST"
                enctype="multipart/form-data">
                <div class="row mb-3">
                    <label for="inputNumero"
                        class="col-sm-2 col-form-label">Numero</label>
                    <div class="col-sm-10">
                        <input type="number"
                            class="form-control"
                            id="inputNumero"
                            name="numero"
                            required />
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputNombre"
                        class="col-sm-2 col-form-label">Nombre</label>
                    <div class="col-sm-10">
                        <input type="text"
                            class="form-control"
                            id="inputNombre"
                            name="nombre"
                            required />
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputRegion"
                        class="col-sm-2 col-form-label">Region</label>
                    <div class="col-sm-10">
                        <select class="form-select"
                            id="inputRegion"
                            name="region">
                            <?php
                            foreach ($regiones as $region) {
                                echo "<option value=" . $region["id"] . ">" . $region["nombre_region"] . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="chxTipo"
                        class="col-sm-2">Tipo</label>
                    <div class="col-sm-10">
                        <?php
                        foreach ($tipos as $tipo) {
                            echo '<div class="form-checkform-check-inline">';
                            echo ' <input class="form-check-input" type="checkbox" id="checkType' . $tipo["nombre_tipo"] . '" name="tipo[]" value="' . $tipo["id"] . '" />';
                            echo '  <label class="form-check-label" for="checkType' . $tipo["nombre_tipo"] . '">' . $tipo["nombre_tipo"] . '</label>';
                            echo '</div>';
                        }
                        ?>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputImagen"
                        class="col-sm-2 col-form-label"
                        id="imagen"
                        name="imagen">Imagen</label>
                    <div class="col-sm-10">
                        <input class="form-control"
                            type="file"
                            id="inputImagen"
                            name="imagen" />
                    </div>
                </div>
                <div class="row">
                    <div class="d-flex gap-2 justify-content-end">
                        <a class="btn btn-secondary"
                            href="../php_views/coleccionCromos.php">Cancelar</a>
                        <button type="submit"
                            class="btn btn-primary"
                            name="enviar">
                            Enviar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>

</html>