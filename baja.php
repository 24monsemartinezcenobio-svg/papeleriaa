<?php
include "conexion.php";

$id = $_POST['idProducto'];

$sql = "DELETE FROM producto WHERE idProducto = $id";
 
if ($conexion->query($sql) === TRUE) {
        echo "Producto eliminado";
    } else {
        echo "Error: " . $conexion->error;
    }

echo "<a href='index.html'>Volver</a>";

$conexion->close();

?>