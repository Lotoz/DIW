<?php
$query = $_SERVER['QUERY_STRING'];
$parametros = explode(',', $query);

echo "Pulso en x = ";
echo $parametros[0];
echo " px y en y = ";
echo $parametros[1];
echo " px<br><br>";
echo "<a href='index.html'>Volver</a>";
?>
