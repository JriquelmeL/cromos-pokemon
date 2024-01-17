<?php
require_once('../php_librarys/bd.php');



if (isset($_POST['enviar'])) {

    // Recoger datos del formulario
    $numero = $_POST['numero'];
    $nombre = $_POST['nombre'];
    $region = $_POST['region'];
    $tipos = $_POST['tipo'];
    $imagen = $_FILES["imagen"]["name"];

    // Insertar en la tabla principal y la tabla de relación
    $resultado = insertPokemon($numero, $nombre, $region, $imagen, $tipos);

    // Manejar el resultado como sea necesario (puede ser un mensaje de éxito/error)
    echo $resultado;
}