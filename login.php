<?php
// Iniciar sesión
session_start();

// Recibe los datos y almacénalos en variables
$Usuario = $_POST["Usuario"];
$Contraseña = $_POST["Contraseña"];

// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "lavados_gonzalez");

// Verificar la conexión
if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}

// Consulta para verificar si el usuario existe
  

$verificar_usuario = "SELECT * FROM login WHERE Usuario='$Usuario' AND Contraseña='$Contraseña'";
$resultado = mysqli_query($conexion, $verificar_usuario);



// Verifica si se encontró el usuario
if (mysqli_num_rows($resultado) > 0) {
    $filas = mysqli_fetch_array($resultado);
    
    // Iniciar sesión según el cargo del usuario
    $_SESSION['Usuario'] = $Usuario; // Guardar el nombre de usuario en la sesión
    $_SESSION['id_cargo'] = $filas['id_cargo']; // Guardar el cargo en la sesión
    
    if ($filas['id_cargo'] == 1) { // Administrador
        header("Location: Lavados Gonzalez Admin.php");
        exit();
    } else if ($filas['id_cargo'] == 2) { // Cliente
        header("Location:Lavados Gonzalez.php ");
        exit();
    }
} else {
    // Si no se encuentra el usuario
    echo '<script>
        alert("Error al registrarse");
        window.history.go(-1);
    </script>';
}

// Cerrar conexión
mysqli_close($conexion);
?>
