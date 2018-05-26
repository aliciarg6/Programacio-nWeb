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

<h1 class="tituloactividades">Perfil</h1>


<h2 class="tituloperfil">Modificar Perfil</h2>
<section class="perfil">

    <form action="modificar_perfil.php" method="POST" >
      <label for="pass">Modificar contrase&ntilde;a:</label>
      <input type="password" name="password" maxlength="12" placeholder="Nueva Contrase&ntilde;a">
      <input type="submit" onclick="pregunta()" value="Modificar">
    </form>

<?php echo '<form action="modificar_perfil.php" method="POST" >
  <label for="nombre">'.$_SESSION['nombre'].':</label>
  <input type="text" name="nombre" placeholder="Nuevo Nombre">
  <input type="submit" onclick="pregunta()" value="Modificar">
</form>' ?>


<?php echo ' <form action="modificar_perfil.php" method="POST" >
  <label for="apellido1">'.$_SESSION['apellido1'].':</label>
  <input type="text" name="apellido1" placeholder="Nuevo Primer Apellido">
  <input type="submit" onclick="pregunta()" value="Modificar">
</form>' ?>


<?php  echo '<form action="modificar_perfil.php" method="POST" >
  <label for="apellido2">'.$_SESSION['apellido2'].':</label>
  <input type="text" name="apellido2" placeholder="Nuevo Segundo Apellido">
  <input type="submit" onclick="pregunta()" value="Modificar">
</form>'?>


<?php echo '<form action="modificar_perfil.php" method="POST" >
  <label for="sexo">'.$_SESSION['sexo'].':</label>
  <input type="text" id="sex" list="sexo" name="sexo" placeholder="Nuevo Sexo">
  <datalist id="sexo">
    <option value="Masculino"> <option value="Femenino">
  </datalist>
  <input type="submit" onclick="pregunta()" value="Modificar">
</form>' ?>


<?php echo '<form action="modificar_perfil.php" method="POST" >
  <label for = "checkDir">'.$_SESSION['direccion'].': </label>
  <input type = "text"  name="direccion" id = "checkDir" placeholder="Nuevo Direcci&oacute;n"/>
  <input type="submit" onclick="pregunta()" value="Modificar">
</form>' ?>


<?php echo '<form action="modificar_perfil.php" method="POST" >
  <label for = "checkPost">'.$_SESSION['cp'].': </label>
  <input type = "number"  name="cp" id = "checkPost" placeholder="Nuevo C&oacute;digo Postal"/>
  <input type="submit" onclick="pregunta()" value="Modificar">
</form>' ?>


<?php echo '<form action="modificar_perfil.php" method="POST" >
  <label for = "checkLoc">'.$_SESSION['localidad'].': </label>
  <input type = "text"  name="localidad" id = "checkLoc" placeholder="Nueva Localidad"/>
  <input type="submit" onclick="pregunta()" value="Modificar">
</form>' ?>


<?php echo '<form action="modificar_perfil.php" method="POST" >
  <label for = "checkPro">'.$_SESSION['provincia'].': </label>
  <input type = "text"  name="provincia" id = "checkPro" placeholder="Nueva Provincia"/>
  <input type="submit" onclick="pregunta()" value="Modificar">
</form>' ?>


<?php echo '<form action="modificar_perfil.php" method="POST" >
  <label for = "checkMovil">'.$_SESSION['movil'].': </label>
  <input type = "number"  name="movil" id = "checkMovil" placeholder="Nuevo M&oacute;vil"/>
  <input type="submit" onclick="pregunta()" value="Modificar">
</form>' ?>


<?php echo '<form action="modificar_perfil.php" method="POST" >
  <label for = "checkCorreo">'.$_SESSION['mail'].': </label>
  <input type = "email"  name="mail" id = "checkCorreo" placeholder="Nuevo Email"/>
  <input type="submit" onclick="pregunta()" value="Modificar">
</form>' ?>


<?php echo '<form action="modificar_perfil.php" method="POST" >
  <label for = "checkCorreo">'.$_SESSION['tipotarifa'].': </label>
  <input type="text" name="tipotarifa" id="tarif" list="tarifa" placeholder="Nueva Tarifa"/>
  <datalist id="tarifa">
  <option value="Ma&ntilde;ana Joven (19,95 &euro;)"> <option value="Ma&ntilde;ana Adulto (21,95 &euro;)"> <option value="Completo Joven (29,95 &euro;)"> <option value="Completo Jubilado (32,95 &euro;)"> <option value="Completo Adulto (34,95 &euro;)">
  </datalist>
  <input type="submit" onclick="pregunta()" value="Modificar">
</form>' ?>


<?php echo '<form action="modificar_perfil.php" method="POST" >
  <label for="imagen">'.$_SESSION['foto'].': </label>
  <input type = "file"  name="imagen" id = "imagen" placeholder="Nuevo Foto de Perfil"/>
  <input type="submit" onclick="pregunta()" value="Modificar">
</form>' ?>




</section>

<br/>

<?php if(isset($_GET["msg"]) && $_GET["msg"]=='password'){ ?>
  <script> alert("La contraseña ha sido modificada correctamente")</script>
<?php } ?>

<?php if(isset($_GET["msg"]) && $_GET["msg"]=='fecha'){ ?>
  <script> alert("El año de nacimiento ha sido modificado correctamente")</script>
<?php } ?>

<?php if(isset($_GET["msg"]) && $_GET["msg"]=='nombre'){ ?>
  <script> alert("El nombre ha sido modificado correctamente")</script>
<?php } ?>

<?php if(isset($_GET["msg"]) && $_GET["msg"]=='apellido1'){ ?>
  <script> alert("El primer apellido ha sido modificado correctamente")</script>
<?php } ?>

<?php if(isset($_GET["msg"]) && $_GET["msg"]=='apellido2'){ ?>
  <script> alert("El segundo apellido ha sido modificado correctamente")</script>
<?php } ?>

<?php if(isset($_GET["msg"]) && $_GET["msg"]=='sexo'){ ?>
  <script> alert("El sexo ha sido modificado correctamente")</script>
<?php } ?>

<?php if(isset($_GET["msg"]) && $_GET["msg"]=='direccion'){ ?>
  <script> alert("La direccion ha sido modificada correctamente")</script>
<?php } ?>

<?php if(isset($_GET["msg"]) && $_GET["msg"]=='numero'){ ?>
  <script> alert("El número ha sido modificado correctamente")</script>
<?php } ?>

<?php if(isset($_GET["msg"]) && $_GET["msg"]=='bloque'){ ?>
  <script> alert("El bloque ha sido modificado correctamente")</script>
<?php } ?>

<?php if(isset($_GET["msg"]) && $_GET["msg"]=='escalera'){ ?>
  <script> alert("La escalera ha sido modificada correctamente")</script>
<?php } ?>

<?php if(isset($_GET["msg"]) && $_GET["msg"]=='piso'){ ?>
  <script> alert("El piso ha sido modificado correctamente")</script>
<?php } ?>

<?php if(isset($_GET["msg"]) && $_GET["msg"]=='puerta'){ ?>
  <script> alert("La puerta ha sido modificada correctamente")</script>
<?php } ?>

<?php if(isset($_GET["msg"]) && $_GET["msg"]=='cp'){ ?>
  <script> alert("El código postal ha sido modificado correctamente")</script>
<?php } ?>

<?php if(isset($_GET["msg"]) && $_GET["msg"]=='localidad'){ ?>
  <script> alert("La localidad ha sido modificada correctamente")</script>
<?php } ?>

<?php if(isset($_GET["msg"]) && $_GET["msg"]=='provincia'){ ?>
  <script> alert("La provincia ha sido modificada correctamente")</script>
<?php } ?>

<?php if(isset($_GET["msg"]) && $_GET["msg"]=='movil'){ ?>
  <script> alert("El móvil ha sido modificado correctamente")</script>
<?php } ?>

<?php if(isset($_GET["msg"]) && $_GET["msg"]=='mail'){ ?>
  <script> alert("El correo electrónico ha sido modificado correctamente")</script>
<?php } ?>

<?php if(isset($_GET["msg"]) && $_GET["msg"]=='tipotarifa'){ ?>
  <script> alert("El tipo de tarifa ha sido modificado correctamente")</script>
<?php } ?>

<?php if(isset($_GET["msg"]) && $_GET["msg"]=='imagen'){ ?>
  <script> alert("La imagen de perfil ha sido modificado correctamente")</script>
<?php } ?>

<footer>
  <a href="contacto.php">Contacto</a>
  <a href="como_se_hizo.pdf">C&oacute;mo se hizo</a>
</footer>


</body> </html>
