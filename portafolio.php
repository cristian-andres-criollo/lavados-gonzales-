<?php
include "cn.php"; // Asegúrate de que este archivo contiene la conexión a la base de datos

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener los datos enviados por la solicitud
    $cantidad = $_POST['Cantidad'];
    $fecha = $_POST['Fecha'];
    $action = $_POST['action'] ?? '';

    // Validar y limpiar los datos
    $cantidad = mysqli_real_escape_string($conexion, $cantidad);
    $fecha = mysqli_real_escape_string($conexion, $fecha);

    // Verificar si la acción es insertar
    if ($action == 'insert') {
        // Consulta para insertar el registro
        $sql = "INSERT INTO portafolio (Cantidad, Fecha) VALUES ('$cantidad', '$fecha')";
        $resultado = mysqli_query($conexion, $sql);

        if (!$resultado) {
            error_log('Error al registrar: ' . mysqli_error($conexion));
            echo '<script>
                    alert("Ocurrió un error al registrar el servicio.");
                    window.history.go(-1);
                    </script>';
        } else {
            echo '<script>
                    alert("Servicio registrado exitosamente.");
                    window.history.go(-1);
                    </script>';
        }
    } elseif ($action == 'delete') {
        // Consulta para eliminar el registro
        $sql = "DELETE FROM portafolio WHERE Cantidad = '$cantidad' AND Fecha = '$fecha'";
        $resultado = mysqli_query($conexion, $sql);

        if (!$resultado) {
            error_log('Error al eliminar el registro: ' . mysqli_error($conexion));
            echo '<script>
                    alert("Ocurrió un error al eliminar el registro.");
                    window.history.go(-1);
                    </script>';
        } else {
            echo '<script>
                    alert("Registro eliminado exitosamente.");
                    window.history.go(-1);
                    </script>';
        }
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($conexion);
}
?>






