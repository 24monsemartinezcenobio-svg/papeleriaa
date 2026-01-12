<?php
include "conexion.php";

$nombre = $_POST['nombreProducto'];
$categoria = $_POST['categoria'];
$marca = $_POST['marca'];
$unidad = $_POST['unidad'];
$precio = $_POST['precioUnitario'];
$stock = $_POST['stock'];

$sql = "INSERT INTO producto (nombreProducto, categoria, marca, unidad, precioUnitario, stock)
        VALUES ('$nombre', '$categoria', '$marca', '$unidad', '$precio', '$stock')";

if ($conexion->query($sql) === TRUE) {
        echo "Producto agregado exitosamente.";
    } else {
        echo "Error: " . $conexion->error;
    }
echo "<a href='index.html'>Volver</a>";

    $conexion->close();
?>