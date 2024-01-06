<?php
include "conexion.php";

mysqli_select_db($conexion, "id21757097_productosbd");

// var_dump($_POST);

$identificador = $_POST['identificador'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];

// var_dump($_FILES['imagen']);

$directorioSubida = "imagenes/";
$max_file_size = "5120000";
$extensionesValidas = array("jpeg", "jpg", "png", "gif");

if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] == 0) {
    $errores = 0;
    $nombreArchivo = $_FILES['imagen']['name'];
    $tamanoArchivo = $_FILES['imagen']['size'];
    $directorioTemporal = $_FILES['imagen']['tmp_name'];
    $tipoArchivo = $_FILES['imagen']['type'];
    $arrayArchivo = pathinfo($nombreArchivo);
    // var_dump($arrayArchivo);
    $extension = $arrayArchivo['extension'];

    if (!in_array($extension, $extensionesValidas)) {
        echo "La extensión del archivo no es valida";
        $errores = 1;
    }

    if ($tamanoArchivo > $max_file_size) {
        echo "El tamaño del archivo es mayor al permitido";
        $errores = 1;
    }

    if ($errores == 0) {
        $nombreCompleto = $directorioSubida . $nombreArchivo;
        move_uploaded_file($directorioTemporal, $nombreCompleto);

        $insertar = "INSERT INTO productos (identificador, nombre, descripcion, precio, imagen) VALUES ($identificador, '$nombre', '$descripcion', '$precio', '$nombreArchivo')";
        mysqli_query($conexion, $insertar);

        header("Location: alta_ok.php");
    } else {
        header("Location: alta_error.php");
    }
}
