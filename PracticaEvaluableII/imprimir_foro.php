<?php

//session_start();

$dsn = "mysql:host=localhost;dbname=db15428277_pw1718";
$db_username = "x15428277";
$db_password = "15428277";


//Conectando...
try{
  $conexion = new PDO($dsn, $db_username, $db_password);
  $conexion->setAttribute(PDO::ATTR_PERSISTENT,true);
  $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


  $sql ="SELECT * FROM preguntas";
  $result=$conexion->prepare($sql);
  $result->execute();
  $rows = $result->fetchAll(PDO::FETCH_ASSOC);

  foreach ($rows as $row) {

    //Para cada pregunta vamos a obtener el nombre y la foto de la persona que la ha realizado

    $dnipregunta = $row['dni'];
    $obtenerdnipregunta = $conexion->prepare("SELECT * FROM usuario WHERE dni='$dnipregunta'");
    $obtenerdnipregunta->execute();
    $rdnipregunta = $obtenerdnipregunta->fetchAll(PDO::FETCH_ASSOC);

    //OBTENEMOS NOMBRE Y FOTO

    foreach ($rdnipregunta as $aux) {
      $nombre= $aux['nombre'];
      $foto = $aux['foto'];
    }

    //Hallamos las respuesta  a la pregunta

    $pregunta=$row['idPregunta'];
    $sqlr ="SELECT * FROM respuesta WHERE idPregunta='$pregunta'";
    $r=$conexion->prepare($sqlr);
    $r->execute();
    $rowsr = $r->fetchAll(PDO::FETCH_ASSOC);

    //Variable en la que se almacenarán todas las preguntas que ha realizado un Usuario
    $todaspreguntas=" ";
    $obtenerpreguntas = $conexion->prepare("SELECT * from preguntas WHERE dni='$dnipregunta'");
    $obtenerpreguntas->execute();
    $robtenerpreguntas = $obtenerpreguntas->fetchAll(PDO::FETCH_ASSOC);

    $contador=1;
    $punto = ".";
    foreach ($robtenerpreguntas as $aux1) {

      $todaspreguntas = $todaspreguntas.$contador;
      $todaspreguntas = $todaspreguntas.$punto;
      $todaspreguntas = $todaspreguntas.$aux1['pregunta']."     ";

      $contador=$contador+1;
    }


    //Imprimimos las pregunta con el nombre y la foto del usuario que la ha realizado
    echo '<section class="preg">
        <form action="aniadir_respuesta.php?id='.$pregunta.'" method="post">
        <h2>PREGUNTA</h2>
        <a href="#" data-toggle="tooltip" data-placement="top" title="'.$todaspreguntas.'"><img src='.$foto.' width="50px" height="50px"></a>
        <h4>'.$nombre.': '.$row['pregunta'].'</h4>';

    foreach ($rowsr as $rowr) {

      //Consultar nombre y foto del usuario que ha respondido la pregunta

      $dnirespuesta=$rowr['dni'];
      $resultado=$conexion->prepare("SELECT * FROM usuario WHERE dni='$dnirespuesta'");
      $resultado->execute();
      $filas = $resultado->fetchAll(PDO::FETCH_ASSOC);

      //Imprimir foto, nombre y respuesta

      foreach ($filas as $fila) {

        //Variable en la que se almacenarán todas las preguntas que ha realizado un Usuario
        $todasrespuestas=" ";
        $obtenerderespuestas = $conexion->prepare("SELECT * from preguntas WHERE dni='$dnirespuesta'");
        $obtenerderespuestas->execute();
        $robtenerderespuestas = $obtenerderespuestas->fetchAll(PDO::FETCH_ASSOC);

        $contador=1;
        $punto = ".";
        foreach ($robtenerderespuestas as $aux2) {

          $todasrespuestas = $todasrespuestas.$contador;
          $todasrespuestas = $todasrespuestas.$punto;
          $todasrespuestas = $todasrespuestas.$aux2['pregunta']."     ";

          $contador=$contador+1;
        }




        echo '<a href="#" data-toggle="tooltip" data-placement="top" title="'.$todasrespuestas.'"><img src='.$fila['foto'].' width="30px" height="30px"></a>
        <p>'.$fila['nombre'].' : '.$rowr['respuesta'].'</p>';
      }


    }
    //Caja de texto para añadir una nueva respuesta
    echo'<textarea name="mensaje" placeholder="Escriba aqu&iacute; una nueva respuesta"></textarea>
        <input type="submit" value="ENVIAR" id="bot">
        </form>
        </section>';

      echo '
      <br/>
      <br/>
      <br/>
      <br/>';


  }


} catch ( PDOException $e ) {
  echo "Error al conectar a la base de datos";
  die( "Conexión fallida: " . $e­>getMessage() );
}

$conexion="";



?>
