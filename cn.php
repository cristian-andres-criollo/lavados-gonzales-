<?php
$conexion =
 mysqli_connect ("localhost","root","","lavados_gonzalez");
if (!$conexion){
    echo 'Error al conectar a la base de datos';
}
else {
    echo 'Conectado a la base de datos';
}  