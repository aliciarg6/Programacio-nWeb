<?php

session_start();

$dsn = "mysql:host=localhost;dbname=db15428277_pw1718";
$db_username = "x15428277";
$db_password = "15428277";


//Conectando...
try{
  $conexion = new PDO($dsn, $db_username, $db_password);
  $conexion->setAttribute(PDO::ATTR_PERSISTENT,true);
  $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql = $conexion->prepare("INSERT INTO preguntas VALUES
    (NULL, :pregunta, :dni)");

   $sql->bindValue(':pregunta',$_POST['pregunta']);
   $sql->bindValue(':dni',$_SESSION[username]);

   $result = $sql->execute();

   if(!$result){
     die('Consulta no válida: ');
     echo "Error al añadir una pregunta" ;
   }else{
     //header("Location: foro.php?msg=newp");
     header("Location: foro.php");
   }

} catch ( PDOException $e ) {
  echo "Error al conectar a la base de datos";
  die( "Conexión fallida: " . $e­->getMessage() );
}


//Cerrar la conexion
$conexion="";

?>
