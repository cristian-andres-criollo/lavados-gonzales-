<?php
session_start();
if (!isset($_SESSION['Usuario']) || $_SESSION['id_cargo'] != 1) {
    echo '<script>alert("Faltan permisos."); history.go(-1);</script>';
    exit();
}
?>




<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nosotros</title>
    <link rel="stylesheet" href="./css/style1.css" />
    <link rel="stylesheet" href="./css/About.css" />
    <link rel="stylesheet" href="./css/General.css" />
    <link rel="icon" sizes="32x32" type="image/png" href=.\css\img\Logo_LG.jpeg>
    <title>Nosotros</title>
    <link
      rel="icon"
      sizes="32x32"
      type="image/png"
      href=".\css\img\1000051981.png"
    />
  </head>
  <body>
    <!-- Panel de Navicion -->
    <header class="header">
      <div class="menu container"> 
                <input type="checkbox" id="menu">
                <label for="menu">
                  <img src="" alt="">
                </label>
                  <nav class="navbar">
                  <ul>
                    <li><a href=".\Lavados Gonzalez Admin.html">HogarGonzalez</a></li>
                    <li class="active"><a href="#">Conócenos</a></li>
                    <li><a href=".\portafolio.html">Portafolio de servicios</a></li>
                    <li><a href=".\contacto.html">Contáctenos</a></li>
                    <li><a href="./Profile.html">Perfil</a></li>
                    <li><a href=".\Cerrar Sesion.php">Cerrar Sesion</a></li>
                    
                  </ul>   
      </div>
      <br>
      <br>
    </header>
<input type="checkbox" class="ctrl menu-principal esconder" id="ctrl_01">
<input type="checkbox" class="ctrl hacer-visible esconder" id="ctrl_02">

<div class="contenedor" id="top">


    <ul class="menu-config">
      <li class="icono config"></li>
      <li><label for="ctrl_02" class="trigger-config icono ojo"></label></li>
    </ul>

  </header>

  <main class="contenido">

    
    

    <section class="seccion empresa" id="empresa">

      
      <article class="articulo somos">
        <figure>
          <img src="./css/img/conocenos1.jpeg" alt="" width="990" height="395">
        </figure>
        <p class="parrafo"><b class="letra-principal">Lavados Gonzalez.</b> Un emprendimiento dispuesto a ofrecerte un servicio de limpieza y de comodidad</p>
      </article>
      
      <article class="articulo misionvision">
        <div class="mision">
          <h4 class="titulo icono mision">Esta es nuestra <b>MISIÓN</b></h4>
          <p class="parrafo">
            Tenemos como objetivo mejorar la calidad de vida de nuestros clientes al proporcionarles ambientes más limpios, frescos y saludables. Utilizamos técnicas avanzadas y buenos productos para garantizar una limpieza profunda y segura, cuidando de cada tejido y material con la máxima delicadeza y profesionalismo. Nos esforzamos por superar las expectativas de nuestros clientes a través de un servicio excepcional, atención personalizada y un compromiso inquebrantable con la excelencia.
          </p>
        </div>
        <div class="vision">
          <h4 class="titulo icono vision">Por ellos, es nuestra <b>VISIÓN</b></h4>
          <p class="parrafo">
            Queremos a corto plazo convertirnos en la empresa con mayor clientela en el ámbito de la limpieza, para el año 2025 aumentar nuestra clientela al doble de la que tenemos actualmente. 
          </p>
        </div>
      </article>

    </section>

    

    <section class="seccion servicios" id="servicios">

      <h3 class="titulo portada">
        <span>SERVICIOS</span>
      </h3>

      <article class="soluciones">
        <h4 class="titulo">Los <b>Servicios</b> que ofrecemos</h4>  

        <h4><p class="parrafo">Nuestros SERVICIOS se encargan del mantenimiento y cuidado de tu hogar. Le damos a nuestra <b>clientela</b> una evolución económica, laboral y empresarial.</p>

        <p class="parrafo">Dentro de nuestra amplia gama de servicios podemos mencionar:</p></h4>
      </article>

      <ul class="lista">
        <h4><li>Limpieza de muebles.</li>
        <li>Limpieza de sillas de comedor.</li>
        <li>Limpieza de tapetes decorativos.</li>
        <li>Limpieza alfombras.</li>
        <li>Lavado de colchones.</li>
        <li>Lavado de vehículos y cojinería.</li>
        <li>Lavado de toda clase de cortinas.</li>
        <li>Mantenimiento y pulida de pisos laminados, madera, mármol, piedra muñeca, tableta alfa.</li>
        <li>Servicio de pintura casas, apartamentos, locales etc.</li>
        <li>Servicio de estuco.</li>
        <li>Limpiezas de fachadas y cristales.</li>
        <li>Fumigación</li></h4>
    </ul>

</div>
</div>
<footer style="background-color: #ffffff; color: #00334d; padding: 40px 0; border-top: 10px solid #00334d;">
  <div style="text-align: center;">
    <h4><b>Lavados Gonzalez</b></h4>
    <p style="max-width: 600px; margin: 0 auto; line-height: 1.6;">
      Lavados Gonzalez ofrece servicios profesionales de limpieza en Bogotá y sus alrededores. Nos especializamos en limpieza profunda, mantenimiento de suelos, y más. ¡Contáctanos para obtener una cotización!
    </p>
    <br>
    <ul class="social" style="list-style: none; padding: 20px 0 10px;">
      <li style="display: inline-block; margin: 0 15px;">
        <a href="https://www.facebook.com/profile.php?id=100082858706474&mibextid=ZbWKwL" style="color: #00334d; text-decoration: none;">
          <i class="fab fa-facebook fa-2x"></i>
        </a>
      </li>
      <li style="display: inline-block; margin: 0 15px;">
        <a href="#" style="color: #00c3ff; text-decoration: none;">
          <i class="fab fa-twitter fa-2x"></i>
        </a>
      </li>
      <li style="display: inline-block; margin: 0 15px;">
        <a href="#" style="color: #ff0095; text-decoration: none;">
          <i class="fab fa-instagram fa-2x"></i>
        </a>
      </li>
    </ul>
    <br>
    <div style="margin-top: 20px;">
      <p><b>Teléfono:</b> <a href="tel:3144368571" style="color: #00334d; text-decoration: none;">314-436-8571</a></p>
      <p><b>Email:</b> <a href="mailto:contacto@lavadosgonzalez.com" style="color: #00334d; text-decoration: none;">contacto@lavadosgonzalez.com</a></p>
    </div>
  </div>
  <div style="text-align: center; margin-top: 20px;">
    <p>&copy; 2024 Lavados Gonzalez. Todos los derechos reservados.</p>
    <p>
      <a href="./terms.html" style="color: #00c3ff; text-decoration: none; margin-right: 15px;">Términos y Condiciones</a> | 
      <a href="./privacy.html" style="color: #00c3ff; text-decoration: none; margin-left: 15px;">Política de Privacidad</a>
    </p>
  </div>
</footer>
</div>
</div>
</body>
</html>