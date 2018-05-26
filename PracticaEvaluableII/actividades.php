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

<h1 class="tituloactividades">Actividades</h1>

<section class="contenedor">

<figure>
<a href="descripcion1.php">
<img src = "imagenes/spining.jpg" alt = "figura de ejemplo" width="50%" height="30%"/>
<figcaption>Cicling Life</figcaption>
</a>
</figure>

<figure>
<a href="descripcion2.php">
<img src = "imagenes/bc.jpg" alt = "figura de ejemplo" width="50%" height="30%"/>
<figcaption>Body Combat</figcaption>
</a>
</figure>

<figure>
<a href="descripcion3.php">
<img src = "imagenes/zumba.jpg" alt = "figura de ejemplo" width="50%" height="30%"/>
<figcaption>Zumba</figcaption>
</a>
</figure>

<figure>
<a href="descripcion4.php">
<img src = "imagenes/bp.jpg" alt = "figura de ejemplo" width="50%" height="30%"/>
<figcaption>Body Pump</figcaption>
</a>
</figure>

<figure>
<a href="descripcion5.php">
<img src = "imagenes/yoga.jpg" alt = "figura de ejemplo" width="50%" height="30%"/>
<figcaption>Yoga</figcaption>
</a>
</figure>

<figure>
<a href="descripcion6.php">
<img src = "imagenes/pilates.jpg" alt = "figura de ejemplo" width="50%" height="30%"/>
<figcaption>Pilates</figcaption>
</a>
</figure>

<figure>
<a href="descripcion7.php">
<img src = "imagenes/gap.jpg" alt = "figura de ejemplo" width="50%" height="30%"/>
<figcaption>GAP</figcaption>
</a>
</figure>

<figure>
<a href="descripcion8.php">
<img src = "imagenes/step.jpg" alt = "figura de ejemplo" width="50%" height="30%"/>
<figcaption>Step</figcaption>
</a>
</figure>

</section>

<aside class="noticias">
  <h1>&Uacute;ltimas Noticias</h1>
  <a href="http://www.marca.com">
    <img src = "imagenes/marca.gif" alt = "Noticia 1" width="40%" height="30%"/>
  </a>

  <a href="https://as.com">
    <img src = "imagenes/as.jpg" alt = "Noticia 2" width="40%" height="30%"/>
  </a>

  <a href="https://www.diariogol.com">
    <img src = "imagenes/gol.jpg" alt = "Noticia 3" width="40%" height="30%"/>
  </a>

  <a href="http://www.elmundo.es/deportes.html?intcmp=MENUHOM24801&s_kw=deportes">
    <img src = "imagenes/elmundo.jpg" alt = "Noticia 3" width="40%" height="30%"/>
  </a>

  <a href="http://www.abc.es/deportes/">
    <img src = "imagenes/abc.jpg" alt = "Noticia 3" width="40%" height="30%"/>
  </a>

</aside>

<br/>

<footer>
  <a href="contacto.php">Contacto</a>
  <a href="como_se_hizo.pdf">C&oacute;mo se hizo</a>
</footer>




</body> </html>
