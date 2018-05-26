<?php

session_start();


if(!isset($_SESSION['loggedin'])){
  echo '<section class="registro">
        <form action="login.php" id ="myform" name="myform" method="POST">
        <section>
          <label for = "chekUsuario">DNI:</label>
          <input type = "number"  name="dni" id = "checkUsuario" placeholder="DNI usuario" required/>
          </br>
          <label for = "chekPassword">Contrase&ntilde;a:</label>
          <input type ="password" name="password" id = "checkPassword" placeholder="Contrase&ntilde;a" required/>
        </section>
          <input type="submit" name="submit" value="Enviar" id="blogin">
        </form>
        </section>';
}else{
  echo '<section class="registro">
        <h3>Est&aacute;s conectado</h3>';
  echo  $_SESSION['nombre'];
  echo  '<form name="myform" action="logout.php" method="POST">
        <input type="submit" value="Cerrar Sesi&oacute;n" id="br">
        </form>
        </section>';

}

?>
