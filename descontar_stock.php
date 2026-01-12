<?php
include "conexion.php";

$id = $_POST['idProducto'];
$cantidad = $_POST['cantidad'];

$sql = "UPDATE producto SET stock = stock - $cantidad WHERE idProducto = $id";

if ($conexion->query($sql) === TRUE) {
        echo "Stock actualizado";
    } else {
        echo "Error: " . $conexion->error;
    }

echo "<a href='index.html'>Volver</a>";

$conexion->close();
?>