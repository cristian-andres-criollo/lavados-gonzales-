<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Empleados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="./css/style1.css">
    <link rel="stylesheet" href="./css/style2.css">
</head>

<body>
<style>
       body {
            font-family: Arial, sans-serif;
            background-color: #f3f3f3;
        }

        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        .navbar-brand {
            padding: 15px 20px;
            font-size: 20px;
            color: #fff;
            background-color: #004d66;
        }

        .navbar-toggle {
            background-color: #004d66;
            border: none;
        }

        .navbar-toggle .icon-bar {
            background-color: #fff;
        }

        .navbar-collapse {
            background-color: #004d66;
        }

        .navbar-nav > li > a {
            color: #fff;
            font-weight: bold;
        }

        .navbar-nav > li > a:hover,
        .navbar-nav > li.active > a {
            background-color: #007795 !important;
        }
      body {
          font-family: 'Roboto', sans-serif;
          margin: 0;
          padding: 0;
          background: linear-gradient(180deg, #004d66 100%, #005f70 100%, #004d66 100%);
          color: #333;
      }
  
      header {
    width: 100%;
    height: 100vh;
    background: #86c0d5;
    display: flex;
    justify-content: center;
    align-items: center;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 100;
}
  
      header div {
          display: flex;
          justify-content: center;
          align-items: center;
          gap: 20px;
      }
  
      header img {
          width: 100%;
          height: auto;
          max-width: 1000px;
      }
      .navbar-inverse {
          background-color: #004d66;
          border-color: #004d66;
      }
  
      .navbar-inverse .navbar-brand,
      .navbar-inverse .navbar-nav > li > a {
          color: #ffffff;
      }
      </style>
    <h1 class="text-center mt-5 mb-5 fw-bold">Desarrollo de un Sistema CRUD de Empleados en PHP utilizando PDO y MySQL</h1>

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-4" style="border-right: 1px solid #dee2e6;">
                <?php include("formulario.php"); ?>
            </div>
            <div class="col-md-8">
                <h1 class="text-center">

                    <a href="./" class="float-start">
                        <i class="bi bi-arrow-left-circle"> </i>
                    </a>
                    Datos del empleado
                    <hr>
                </h1>
                <?php
                if (isset($_GET['id'])) {
                    include("config/config.php");
                    include("acciones/acciones.php");
                    $id = $_GET['id'];
                    $dataInfo = obtenerDatosEmpleado($conexion, $id);
                } else {
                    header("location:./");
                }
                ?>

                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Nombre: <strong> <?php echo $dataInfo['nombre']; ?></strong></li>
                    <li class="list-group-item">Cédula: <strong><?php echo $dataInfo['cedula']; ?></strong></li>
                    <li class="list-group-item">Edad: <strong><?php echo $dataInfo['edad']; ?></strong></li>
                    <li class="list-group-item">Sexo: <strong><?php echo $dataInfo['sexo']; ?></strong></li>
                    <li class="list-group-item">Teléfono: <strong><?php echo $dataInfo['telefono']; ?></strong></li>
                    <li class="list-group-item">Cargo: <strong><?php echo $dataInfo['cargo']; ?></strong></li>
                    <li class="list-group-item">
                        <strong>Foto de perfil</strong> <br>
                        <img src="acciones/fotos_empleados/<?php echo $dataInfo['avatar']; ?>" alt='<?php echo $dataInfo['nombre']; ?>' width="100" height="100">
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="assets/js/home.js"></script>

</body>

</html>