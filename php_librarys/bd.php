<?php
session_start();
function openBd()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pokemon";

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->exec("set names utf8"); // para no tener problemas con los acentos

    return $conn;
}

function closeBd()
{
    return null;
}

function errorMessage($e)
{
    if (!empty($e->errorInfo[1])) {
        switch ($e->errorInfo[1]) {
            case 1062:
                $mensaje = "Registro duplicado";
                break;
            case 1451:
                $mensaje = "Registro con elementos relacionados";
                break;
            default:
                $mensaje = $e->errorInfo[1] . '-' . $e->errorInfo[2];
                break;
        }
    } else {
        switch ($e->getCode()) {
            case 1044:
                $mensaje = "Usuario i/o password incorrecto";
                break;
            case 1049:
                $mensaje = "Base de datos desconocida";
                break;
            case 2002:
                $mensaje = "No se encuentra el servidor";
                break;
            default:
                $mensaje = $e->getCode() . '-' . $e->getMessage();
                break;
        }
    }
    return $mensaje;
}


function selectRegiones()
{
    $conexion = openBd();

    $textQuery = "select * from region";

    $query  = $conexion->prepare($textQuery);
    $query->execute();

    $result = $query->fetchAll();

    $conexion = closeBd();

    return $result;
}

function insertRegion($id, $nombre_region)
{
    $conexion = openBd();

    $textQuery = "insert into region (id , nombre_region) values (:id, :nombre_region)";
    $query = $conexion->prepare($textQuery);
    $query->bindParam(':id', $id);
    $query->bindParam(':nombre_region', $nombre_region);

    $result = $query->fetchAll();

    $conexion = closeBd();


    return $result;
}


function insertPokemon1($numero, $nombre, $region, $imagen)
{
    $conexion = openBd();
    $textoQuery = "insert into pokemon (numero,nombre,region_id,imagen) values (:numero,:nombre,:region_id,:imagen)";
    $query = $conexion->prepare($textoQuery);
    $query->bindParam(':numero', $numero);
    $query->bindParam(':nombre', $nombre);
    $query->bindParam(':region_id', $region);
    // $query->bindParam(':tipo', $tipo);
    $query->bindParam(':imagen', $imagen);

    $query->execute();

    $conexion = closeBd();

    return "Datos insertados";
}

// Función para insertar en la tabla principal y de relación
function insertPokemon($numero, $nombre, $region, $imagen, $tipos)
{
    $conexion = openBd();

    try {
        // Inserción en la tabla principal (pokemon)
        $textoQuery = "INSERT INTO pokemon (numero, nombre, region_id, imagen) VALUES (:numero, :nombre, :region_id, :imagen)";
        $query = $conexion->prepare($textoQuery);
        $query->bindParam(':numero', $numero);
        $query->bindParam(':nombre', $nombre);
        $query->bindParam(':region_id', $region);
        $query->bindParam(':imagen', $imagen);

        $query->execute();

        // Obtener el ID del último Pokémon insertado
        $pokemonId = $conexion->lastInsertId();

        // Inserción en la tabla de relación (pokemon_has_tipo)
        foreach ($tipos as $tipo) {
            $textoQueryRelacion = "INSERT INTO pokemon_has_tipo (pokemon_id, tipo_id) VALUES (:pokemon_id, :tipo_id)";
            $queryRelacion = $conexion->prepare($textoQueryRelacion);
            $queryRelacion->bindParam(':pokemon_id', $pokemonId);
            $queryRelacion->bindParam(':tipo_id', $tipo);
            $queryRelacion->execute();
        }

        $conexion = closeBd();

        return "Datos insertados correctamente en la base de datos.";
    } catch (PDOException $e) {
        return "Error al insertar datos: " . $e->getMessage();
    }
}
