<?php
include 'cn.php';

//Recibir los datos y almacenarlos en variables 
$Nombres = $_POST ['Nombres'];
$Telefono = $_POST['Telefono'];
$Correo = $_POST['Correo'];
$Mensaje = $_POST['Mensaje'];

//Consulta para insertar 
$insertar = "INSERT INTO contacto (Nombres, Telefono, Correo, Mensaje) VALUES ('$Nombres', '$Telefono', '$Correo', '$Mensaje')";

//$verificar_Usuario = mysqli_query($conexion, "SELECT * FROM sing_Up WHERE Usuario ='$Usuario'");
//if (mysqli_num_rows($verificar_Usuario) > 0) {
//    echo '<script>
//  alert("El usuario ya está registrado"); 
//     window.history.go(-1);
//     </script>';
//     exit;     
// }
// $verificar_Email = mysqli_query($conexion, "SELECT * FROM sing_Up WHERE Email ='$Email'");
// if (mysqli_num_rows($verificar_Email) > 0) {
//      echo   '<script>
//              alert("El Correo ya está registrado"); 
//              window.history.go(-1);
//              </script>';
//     exit; 
// }
//Ejecutar consulta 
$resultado = mysqli_query($conexion, $insertar);
if (!$resultado) {
    echo 'Error al registrarse';
} else {
    echo   '<script>
           alert("Mensaje Enviado"); 
           window.history.go(-1);
           </script>';
     exit;
}

// Cerrar conexión a la base de datos
mysqli_close($conexion);
?>
