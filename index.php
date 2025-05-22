<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Empleados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.1/css/dataTables.bootstrap5.css">

</head>
<div>
<body>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f3f3;
        }

        .navbar {
            margin-bottom: 0;
            border-radius: 0;
            background-color: #004d66;
        }

        .navbar-brand {
            padding: 15px 20px;
            font-size: 20px;
            color: #fff;
        }

        .navbar-nav > li > a {
            color: #fff;
            font-weight: bold;
            padding: 15px 20px;
        }

        .navbar-nav > li > a:hover,
        .navbar-nav > li.active > a {
            background-color: #007795 !important;
        }

        .navbar-nav {
            display: flex;
            justify-content: center;
            flex-grow: 1;
        }

        .navbar-nav.navbar-right {
            margin-left: auto;
        }
        .navbar-nav {
    display: flex;
    justify-content: center;
    flex-grow: 1;
}

.navbar-nav.navbar-right {
    margin-left: auto;
}
    </style>
     <!-- Panel de Navegacion -->

     <div class="contenedor"> 
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">    
    <div class="navbar navbar-inverse">
        
          <div class="col-lg-12">
            <div class="navbar-header">
              <button class="navbar-toggle" data-target="#mobile_menu" data-toggle="collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
              <a href="" class="navbar-brand">Lavados Gonzalez</a>
            </div>
            <div class="navbar-collapse collapse" id="mobile_menu">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">HogarGonzalez</a></li>
                <li><a href="./about1.html">Conócenos</a></li>
                <li><a href=".\portafolio.html">Portafolio de servicios</a></li>
                <li><a href=".\contacto.html">Contáctenos</a></li>
              </ul>
              <ul class="nav navbar-nav">
                <li>
                  <form action="" class="navbar-form">
                    <div class="form-group">
                      <div class="input-group">
                      </div>
                    </div>
                  </form>
                </li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="./Profile.html">Perfil</a></li>
                <li><a href=".\Cerrar Sesion.php">Cerrar Sesion</a></li>
                  </ul>
                </li>
              </ul>






            </div>
          </div>

      </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <?php
    include("config/config.php");
    include("acciones/acciones.php");
    ?>
    <h1 class="text-center mt-5 mb-5 fw-bold" style="color:#dee2e6">Empleados</h1>

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-4" style="border-right: 1px solid #dee2e6;">
                <?php
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $datoEmpleadoEdit = obtenerDatosEmpleado($conexion, $id);
                }
                include("formulario.php"); ?>
            </div>
            <div class="col-md-8">
                <h1 class="text-center">lista de empleados
                    <span class="float-end">
                        <a href="acciones/exportar.php" class="btn btn-success" title="Exportar a CSV" download="empleados.csv"><i class="bi bi-filetype-csv"></i></a>
                    </span>
                    <hr>
                </h1>
                <?php
                $empleados = obtenerEmpleados($conexion);
                $totalEmpleados = $empleados->num_rows;
                echo "Total de empleados: <strong>" . $totalEmpleados . "</strong>";
                include("empleados.php"); ?>
            </div>
        </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="assets/js/home.js"></script>

    <!------------------css para la tabla de empleados-------------------------->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.1/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.1/js/dataTables.bootstrap5.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json"></script>
    <script>
        $(document).ready(function() {
            $("#table_empleados").DataTable({
                language: {
                    url: "//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json",
                },
            });
        });
    </script>
    <br><br><br><br>
 <footer style="background-color: #004d66; color: #ffffff; padding: 40px 0; border-top: 10px solid #00334d;">
      <div style="text-align: center;">
          <h4><b>Lavados Gonzalez</b></h4>
          <p style="max-width: 600px; margin: 0 auto;">
            Lavados Gonzalez ofrece servicios profesionales de limpieza en Bogotá y sus alrededores. Nos especializamos en limpieza profunda, mantenimiento de suelos, y más. ¡Contáctanos para obtener una cotización!
        </p>
          <br>
          <br>
          <br>
          <ul class="social" style="list-style: none; padding: 20px 0 10px;">
              <li style="display: inline-block; margin: 0 15px;">
                  <a href="https://www.facebook.com/profile.php?id=100082858706474&mibextid=ZbWKwL" style="color: #ffffff; text-decoration: none;">
                      <i class="fab fa-facebook fa-2x"></i>
                  </a>
              </li>
              <li style="display: inline-block; margin: 0 15px;">
                  <a href="#" style="color: #ffffff; text-decoration: none;">
                      <i class="fab fa-twitter fa-2x"></i>
                  </a>
              </li>
              <li style="display: inline-block; margin: 0 15px;">
                  <a href="#" style="color: #ffffff; text-decoration: none;">
                      <i class="fab fa-instagram fa-2x"></i>
                  </a>
              </li>
          </ul>
    <br><br><br>
          <div style="margin-top: 20px;">
              <p><b>Teléfono:</b> 314-436-8571</p>
              <p><b>Email:</b> contacto@lavadosgonzalez.com</p>
          </div>
      </div>
      <div style="text-align: center; margin-top: 20px;">
          <p>&copy; 2024 Lavados Gonzalez. Todos los derechos reservados.</p>
          <p><a href="./terms.html" style="color: #ffffff; text-decoration: none;">Términos y Condiciones</a> | <a href="./privacy.html" style="color: #ffffff; text-decoration: none;">Política de Privacidad</a></p>
      </div>
  </footer>
</body>

</html>