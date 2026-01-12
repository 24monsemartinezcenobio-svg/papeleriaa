<?php
include "conexion.php";

$resultado = $conexion->query("SELECT * FROM producto");

echo "<table border='1'>
<tr>
<th>ID</th>
<th>Nombre</th>
<th>Categoría</th>
<th>Marca</th>
<th>Unidad</th>
<th>Precio Unitario</th>
<th>Stock</th>
</tr>";

while ($fila = $resultado->fetch_assoc()){
    echo "<tr>";
    echo "<td>".$fila['idProducto']."</td>";
    echo "<td>".$fila['nombreProducto']."</td>";
    echo "<td>".$fila['categoria']."</td>";
    echo "<td>".$fila['marca']."</td>";
    echo "<td>".$fila['unidad']."</td>";
    echo "<td>".$fila['precioUnitario']."</td>";
    echo "<td>".$fila['stock']."</td>";
    echo "</tr>";
}
    echo "</table>";

echo "<br><a href='index.html'>Volver</a>";

$conexion->close();
?>