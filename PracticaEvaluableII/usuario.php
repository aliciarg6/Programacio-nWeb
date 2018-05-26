<!doctype html> <html lang="es">
<head>
<meta charset="utf­8">
<title>Pr&aacute;ctica Evaluable I</title>
<link rel="stylesheet" type="text/css" href="aspecto.css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">


<script type="text/javascript">
function validarFormulario(){

  var nombre = document.getElementById('checkNombre').value;
  var pass = document.getElementById('password').value;
  var correo = document.getElementById('checkCorreo').value;
  var dni = document.getElementById('checkId').value;
  var cp = document.getElementById("checkPost").value;
  var provincia = document.getElementById('checkPro').value;
  var localidad = document.getElementById('checkLoc').value;
  var apellido1 = document.getElementById('checkApellido1').value;
  var apellido2 = document.getElementById('checkApellido2').value;
  var movil = document.getElementById('checkMovil').value;
  var direccion = document.getElementById('checkDir'). value;


  if(nombre==null || nombre.length==0 || /^\s+$/.test(nombre)){
    alert('ERROR: El nombre no puede ser vacío o estar compuesto por espacios en blanco');
    return false;
  }

  if(apellido1==null || apellido1.length==0 || /^\s+$/.test(apellido1)){
    alert('ERROR: El primer apellido no puede ser vacío o estar compuesto por espacios en blanco');
    return false;
  }

  if(apellido2==null || apellido2.length==0 || /^\s+$/.test(apellido2)){
    alert('ERROR: El segundo apellido no puede ser vacío o estar compuesto por espacios en blanco');
    return false;
  }

  if(pass==null || pass.length<5){
    alert('ERROR: La contraseña debe contener al menos 5 caracteres');
    return false;
  }

  if(movil==null || movil.length==0 || movil.length!=9){
    alert('ERROR: El número móvil debe tener nueve valores');
    return false;
  }

  if(!(/\S+@\S+\.\S+/.test(correo))){
    alert('ERROR: El formato de correo electrónico no es correcto');
    return false;
  }

  if(dni == null || dni.length == 0 || isNaN(dni)){
    alert('ERROR: Ingresar el DNI correctamente');
    return false;
  }

  if(direccion==null || direccion.length==0 || /^\s+$/.test(direccion)){
    alert('ERROR: El direccion no puede ser vacío o estar compuesto por espacios en blanco');
    return false;
  }


  if(cp == null || cp.length==0 || isNaN(cp) || cp.length!=5){
    alert('ERROR: Ingresar el código postal correctamente');
    return false;
  }

  if(provincia==null || provincia.length==0 || /^\s+$/.test(provincia)){
    alert('ERROR: La provincia no puede ser vacío o estar compuesto por espacios en blanco');
    return false;
  }

  if(localidad==null || localidad.length==0 || /^\s+$/.test(localidad)){
    alert('ERROR: La localidad no puede ser vacío o estar compuesto por espacios en blanco');
    return false;
  }


  return true;
}
</script>

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

<h1 class="tituloactividades">Alta Usuario</h1>





<form action="procesar_alta.php" enctype=”multipart/form-data” method="post" class="alta" onsubmit="return validarFormulario()">

  <fieldset>
  <legend>Datos Personales</legend>

    <label for = "checkId">NIF&sol;NIE&sol;PASAPORTE sin letra&colon;</label>
    <input type = "number"  name="dni" id = "checkId"/>
    <br/>

    <label for="pass">Password:</label>
    <input type="password" name="password" id="password" >
    <br/>

    <label for = "checkNombre">Nombre: </label>
    <input type = "text" name="nombre" id = "checkNombre"/>
    <br/>

    <label for = "checkApellido1">Primer Apellido: </label>
    <input type = "text" name="apellido1" id = "checkApellido1"/>

    <label for = "checkApellido2">Segundo Apellido: </label>
    <input type = "text" name="apellido2" id = "checkApellido2"/>
    <br/>

    <label for="sex">Sexo </label>
    <input type="text" id="sexo" list="sexo" name="sexo">
    <datalist id="sexo">
      <option value="Masculino"> <option value="Femenino"><option value="NS/NC">
    </datalist>
    <br/>


    <label for="imagen">Foto de Perfil:</label>
    <input id="imagen" name="imagen" size="30" type="file" />



  </fieldset>

  <fieldset>
  <legend>Datos de contacto</legend>

    <label for = "checkDir">Direcci&oacute;n: </label>
    <input id="checkDir" type = "text"  name="direccion" />

    <br/>

    <label for = "checkPost">C&oacute;digo Postal: </label>
    <input id="checkPost" type="number" name="cp" />

    <label for = "checkLoc">Localidad: </label>
    <input id="checkLoc" type = "text" name="localidad" />
    <label for = "checkPro">Provincia: </label>
    <input id="checkPro" type = "text" name="provincia" />
    <br/>

    <label for = "checkMovil">M&oacute;vil: </label>
    <input id="checkMovil" type = "tel" name="movil" />
    <br/>

    <label for = "checkCorreo">Email: </label>
    <input id="checkCorreo" type = "email" name="mail" />

    </fieldset>

    <fieldset>
    <legend>Tipo de Tarifa</legend>

    <label for="tarif">Seleccione el tipo de tarifa</label>
    <input type="text" name="tipotarifa" id="tarifa" list="tarifa">
    <datalist id="tarifa">
    <option value="Ma&ntilde;ana Joven (19,95 &euro;)"> <option value="Ma&ntilde;ana Adulto (21,95 &euro;)"> <option value="Completo Joven (29,95 &euro;)"> <option value="Completo Jubilado (32,95 &euro;)"> <option value="Completo Adulto (34,95 &euro;)">
    </datalist>

    </fieldset>

    <fieldset>
    <legend>Cuestionario</legend>

    <label for="cu1">&iquest;Cu&aacute;les son tus expectativas y objetivos&quest;</label>
    <input type="text" id="cu1" list="c1">
    <datalist id="c1">
    <option value="Salud y Bienestar"> <option value="Diversi&oacute;n y Entretenimiento"> <option value="Mejorar la condici&oacute;n f&iacute;sica"> <option value="Recuperar de una lesi&oacute;n">
    <option value="Preparaci&oacute;n f&iacute;sica"> <option value="Socializaci&oacute;n">
    </datalist>
    <br/>

    <label for="cu2">&iquest;Por qu&eacute; eliges nuestro centro&quest;</label>
    <input type="text" id="cu2" list="c2">
    <datalist id="c2">
    <option value="Cercania"> <option value="Precio"> <option value="Instalaciones y Servicios"> <option value="Horario">
    <option value="Recomendaciones m&eacute;dicas"> <option value="Motivos de socializaci&oacute;n"> <option value="Otros">
    </datalist>
    <br/>

    <label for="cu3">&iquest;Cu&aacute;l es tu horario preferible para asistir a SERFIT&quest;</label>
    <input type="text" id="cu3" list="c3">
    <datalist id="c3">
    <option value="Horario de Ma&ntilde;ana"> <option value="Horario de Medio D&iacute;a">
    <option value="Horario de Tarde"> <option value="Horario de Tarde&#47;Noche">
    </datalist>
    <br/>

    <label for="cu4">&iquest;Cuales son tus actividades preferidas&quest;</label>
    <input type="text" id="cu4" list="c4">
    <datalist id="c4">
    <option value="Tipo Body Pump"> <option value="Tipo Zumba"> <option value="Tipo Body Combat">
    <option value="Tipo Cicling Life"> <option value="Tipo Yoga"> <option value="Tipo Pilates">
    <option value="Tipo GAP"> <option value="Tipo Step"> <option value="Otras">
    </datalist>
    <br/>

    </fieldset>

    <br/>

    <input type="submit" value="Darse de Alta">
    <input type="reset" value="Resetear Formulario">

</form>
<?php if(isset($_GET["msg"]) && $_GET["msg"]=='added'){ ?>
  <script> alert("Este usuario ya es miembro de nuestro centro deportivo")</script>
<?php } ?>


<br/>

<footer>
  <a href="contacto.php">Contacto</a>
  <a href="como_se_hizo.pdf">C&oacute;mo se hizo</a>
</footer>


</body> </html>
