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

<h1 class="tituloactividades">Descripci&oacute;n Actividad</h1>



<article class="descripcion">
  <h1>Body Combat</h1>
  <figure>
  <img src = "imagenes/bc.jpg" alt = "figura de ejemplo" width="50%" height="30%"/>
  </figure>
  <p>El body combat es un programa de ejercicios cardiovasculares que se realiza en grupo y consiste en realizar movimientos de
    diferentes artes marciales como el taekwondo, karate, capoeira, muay thay (boxeo tailand&eacute;s), tai chi o boxeo, entre otros,
    a trav&eacute;s de coreograf&iacute;as con m&uacute;sica en la que se pueden ejercitar brazos, hombros, espalda, piernas y abdominales, permitiendo
    as&iacute; mejorar la flexibilidad, la fuerza, la coordinaci&oacute;n y la resistencia cardiovascular.
 </p>
</article>

<section class="menuactividades">
  <ul>
    <li><a href="descripcion1.php"> Cicling Life</a></li>
    <li><a href="descripcion2.php"> Body Combat</a></li>
    <li><a href="descripcion3.php"> Zumba</a></li>
    <li><a href="descripcion4.php"> Body Pump</a></li>
    <li><a href="descripcion5.php">Yoga</a></li>
    <li><a href="descripcion6.php">Pilates</a></li>
    <li><a href="descripcion7.php">Gap</a></li>
    <li><a href="descripcion8.php">Step</a></li>
  </ul>
</section>


<br/>

<footer>
  <a href="contacto.php">Contacto</a>
  <a href="como_se_hizo.pdf">C&oacute;mo se hizo</a>
</footer>


</body> </html>
