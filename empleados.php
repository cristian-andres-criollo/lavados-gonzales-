<div class="table-responsive">
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
      </style>
    <table class="table table-hover" id="table_empleados">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Edad</th>
                <th scope="col">Cédula</th>
                <th scope="col">Cargo</th>
                <th scope="col">Avatar</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($empleados as $empleado) { ?>
                <tr id="empleado_<?php echo $empleado['id']; ?>">
                    <th scope='row'><?php echo $empleado['id']; ?></th>
                    <td><?php echo $empleado['nombre']; ?></td>
                    <td> <?php echo $empleado['edad']; ?></td>
                    <td><?php echo $empleado['cedula']; ?></td>
                    <td><?php echo $empleado['cargo']; ?></td>
                    <td>
                        <img class="rounded-circle" src="acciones/fotos_empleados/<?php echo $empleado['avatar']; ?>" alt=<?php echo $empleado['nombre']; ?> width="50" height="50">
                    </td>
                    <td>
                        <a title="Ver detalles del empleado" href="visualizar.php?id=<?php echo $empleado['id']; ?>" class="btn btn-success"><i class="bi bi-binoculars"></i></a>
                        <a title="Editar datos del empleado" href="index.php?id=<?php echo $empleado['id']; ?>" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                        <a title="Eliminar datos del empleado" href="#" class="btn btn-danger" onclick="eliminarEmpleado(<?php echo $empleado['id']; ?>, '<?php echo $empleado['avatar']; ?>')"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>