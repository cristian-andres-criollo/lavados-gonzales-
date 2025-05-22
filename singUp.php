<?php
include 'cn.php';


//Recibir los datos y almacenarlos en variables 
$Usuario = $_POST ['Usuario'];
$correo = $_POST['correo'];
$Celular = $_POST['Celular'];
$Clave = $_POST['Clave'];
$Verifica = $_POST['Verifica'];

//Consulta para insertar 
$insertar = "INSERT INTO registro (Usuario, correo, Celular, Clave, Verifica) VALUES ('$Usuario', '$correo', '$Celular', '$Clave', '$Verifica')";


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
           alert("Usted ha sido registrado exitosamente"); 
           window.history.go(-1);
           </script>';
     exit;
}

// Cerrar conexión a la base de datos
mysqli_close($conexion);
?>
