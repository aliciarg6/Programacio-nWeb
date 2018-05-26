<?php
session_start();
?>

<?php

$dsn = "mysql:host=localhost;dbname=db15428277_pw1718";
$db_username = "x15428277";
$db_password = "15428277";

//Conectando...
try{

  $conexion = new PDO($dsn, $db_username, $db_password);
} catch ( PDOException $e ) {
  echo "Error al conectar a la base de datos";
  die( "Conexión fallida: " . $e­>getMessage() );
}


$sql ="SELECT * FROM usuario WHERE dni=:dni AND password=:password";


$result=$conexion->prepare($sql);
$dni = $_POST['dni'];
$password = $_POST['password'];
$result->bindValue(":dni", $dni, PDO::PARAM_INT);
$result->bindValue(":password", $password, PDO::PARAM_STR);
$result->execute();

if($result->rowCount()>0){

  $rows = $result->fetchAll(PDO::FETCH_ASSOC);

  foreach ($rows as $row) {

    $_SESSION['nombre']=$row['nombre'];
    $_SESSION['foto']=$row['foto'];
    $_SESSION['apellido1']=$row['apellido1'];
    $_SESSION['apellido2']=$row['apellido2'];
    $_SESSION['sexo']=$row['sexo'];
    $_SESSION['direccion']=$row['direccion'];
    $_SESSION['cp']=$row['cp'];
    $_SESSION['localidad']=$row['localidad'];
    $_SESSION['provincia']=$row['provincia'];
    $_SESSION['movil']=$row['movil'];
    $_SESSION['mail']=$row['mail'];
    $_SESSION['tipotarifa']=$row['tipotarifa'];
  }

      $_SESSION['loggedin'] = true;
      $_SESSION['username'] = $dni;
      header("Location: index.php");

  } else {
    header("Location: index.php?msg=add");
}

//Cerrar la conexion
$conexion="";


 ?>
