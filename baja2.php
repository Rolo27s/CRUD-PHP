<?php
include "conexion.php";

mysqli_select_db($conexion, "id21757097_productosbd");

$productoBorrar = $_GET["id"];

// Obtener el nombre de la imagen antes de borrar el registro
$consulta = "SELECT imagen FROM productos WHERE identificador = '$productoBorrar'";
$resultado = mysqli_query($conexion, $consulta);
$fila = mysqli_fetch_assoc($resultado);
$nombreImagenProductoABorrar = $fila['imagen'];

// Borrar el fichero del back
if ($nombreImagenProductoABorrar) {
    $rutaImagen = 'imagenes/' . $nombreImagenProductoABorrar; // Reemplaza 'ruta/del/almacenamiento/local/' con la ruta real a tu directorio de imágenes
    if (file_exists($rutaImagen)) {
        unlink($rutaImagen); // Eliminar el archivo de imagen local
    }
}

$borrar = "DELETE FROM productos WHERE identificador = '$productoBorrar'";
mysqli_query($conexion, $borrar);



header("Location: baja_ok.php");
