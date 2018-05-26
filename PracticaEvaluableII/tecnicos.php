<!doctype html> <html lang="es">
<head>
<meta charset="utf­8">
<title>Pr&aacute;ctica Evaluable I</title>
<link rel="stylesheet" type="text/css" href="aspecto.css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
</head>
<body>

  <header>
    <section class="logo">
      <img src = "imagenes/logo.jpeg" alt = "Logotipo del Centro Deportivo" width="125px" height="100px"/>
    </section>

    <section class="titulo">
      <h2>Centro Deportivo</h2>
      <h1>SERFIT</h1>
      <h4>Sacrificio&plus;Energ&iacute;a&equals;Resultados</h4>
    </section>

    <?php
      include("registro.php");
    ?>
  </header>

<br/>

<section class="menuh">
  <ul class="menuhorizontal">
    <li><a href="actividades.php"> Actividades</a></li>
    <li><a href="horario.php"> Horario</a></li>
    <li><a href="tecnicos.php"> T&eacute;cnicos</a></li>
    <li><a href="instalaciones.php"> Instalaciones y Servicios</a></li>
    <li><a href="localizacion.php">Localizaci&oacute;n</a></li>
    <li><a href="precios.php">Precios y Promociones</a></li>
    <?php
    if(!isset($_SESSION['loggedin'])){
      echo '<li><a href="usuario.php">Alta Usuario</a></li>';
    }else{
      echo '<li><a href="perfil.php">Perfil</a></li>';
    }
    ?>
    <?php
    if(!isset($_SESSION['loggedin'])){
      echo '<li><a>Foro</a></li>';
    }else{
      echo '<li><a href="foro.php">Foro</a></li>';
    }
    ?>
  </ul>
</section>

<h1 class="tituloactividades">T&eacute;cnicos</h1>


<section class="tecnicos">

<figure >
<img src = "imagenes/monitor.jpg" alt = "Logotipo del Centro Deportivo" width="60%" height="30%"/>
<figcaption>Sa&uacute;l Craviotto</figcaption>
</figure>

<figure >
<img src = "imagenes/monitora.jpg" alt = "Logotipo del Centro Deportivo" width="60%" height="30%"/>
<figcaption>Mireia Belmonte</figcaption>
</figure>

<figure >
<img src = "imagenes/monitor.jpg" alt = "Logotipo del Centro Deportivo" width="60%" height="30%"/>
<figcaption>Sa&uacute;l Craviotto</figcaption>
</figure>

<figure >
<img src = "imagenes/monitora.jpg" alt = "Logotipo del Centro Deportivo" width="60%" height="30%"/>
<figcaption>Mireia Belmonte</figcaption>
</figure>

<figure >
<img src = "imagenes/monitor.jpg" alt = "Logotipo del Centro Deportivo" width="60%" height="30%"/>
<figcaption>Sa&uacute;l Craviotto</figcaption>
</figure>

<figure >
<img src = "imagenes/monitora.jpg" alt = "Logotipo del Centro Deportivo" width="60%" height="30%"/>
<figcaption>Mireia Belmonte</figcaption>
</figure>

</section>

<br/>

<footer>
  <a href="contacto.php">Contacto</a>
  <a href="como_se_hizo.pdf">C&oacute;mo se hizo</a>
</footer>


</body> </html>
