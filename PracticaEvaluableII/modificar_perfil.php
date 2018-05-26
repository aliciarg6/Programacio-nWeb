<?php

session_start();

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


if(isset($_POST['password'])){
    $pass=$_POST['password'];
    $stmt = $conexion->prepare("UPDATE usuario SET password = :pass WHERE dni='$_SESSION[username]'");
    $stmt->bindValue(':pass',$pass);
    $stmt->execute();

   if( $stmt->rowCount()){
     echo "La contraseña se actualizó correctamente";
     header("Location: perfil.php?msg=password");
   }else{
     echo "El registro NO se actualizo correctamente";
   }
}













if(isset($_POST['nombre'])){
  $nombre=$_POST['nombre'];
  $stmt = $conexion->prepare("UPDATE usuario SET nombre= :nombre WHERE dni='$_SESSION[username]'");
  $stmt->bindValue(':nombre',$nombre);
  $stmt->execute();

 if( $stmt->rowCount()){
   echo "El nombre se actualizó correctamente";
   $_SESSION['nombre']=$nombre;
   header("Location: perfil.php?msg=nombre");
 }else{
   echo "El registro NO se actualizo correctamente";
 }

}

if(isset($_POST['apellido1'])){
  $apellido1=$_POST['apellido1'];
  $stmt = $conexion->prepare("UPDATE usuario SET apellido1= :apellido1 WHERE dni='$_SESSION[username]'");
  $stmt->bindValue(':apellido1',$apellido1);
  $stmt->execute();

 if( $stmt->rowCount()){
   echo "El primer apellido se actualizó correctamente";
   $_SESSION['apellido1']=$apellido1;
   header("Location: perfil.php?msg=apellido1");
 }else{
   echo "El registro NO se actualizo correctamente";
 }

}

if(isset($_POST['apellido2'])){
  $apellido2=$_POST['apellido2'];
  $stmt = $conexion->prepare("UPDATE usuario SET apellido2= :apellido2 WHERE dni='$_SESSION[username]'");
  $stmt->bindValue(':apellido2',$apellido2);
  $stmt->execute();

 if( $stmt->rowCount()){
   echo "El primer apellido se actualizó correctamente";
   $_SESSION['apellido2']=$apellido2;
   header("Location: perfil.php?msg=apellido2");
 }else{
   echo "El registro NO se actualizo correctamente";
 }

}

if(isset($_POST['sexo'])){
  $sexo=$_POST['sexo'];
  $stmt = $conexion->prepare("UPDATE usuario SET sexo= :sexo WHERE dni='$_SESSION[username]'");
  $stmt->bindValue(':sexo',$sexo);
  $stmt->execute();

 if( $stmt->rowCount()){
   echo "El primer apellido se actualizó correctamente";
   $_SESSION['sexo']=$sexo;
   header("Location: perfil.php?msg=sexo");
 }else{
   echo "El registro NO se actualizo correctamente";
 }

}

if(isset($_POST['direccion'])){
  $direccion=$_POST['direccion'];
  $stmt = $conexion->prepare("UPDATE usuario SET direccion= :direccion WHERE dni='$_SESSION[username]'");
  $stmt->bindValue(':direccion',$direccion);
  $stmt->execute();

 if( $stmt->rowCount()){
   echo "El primer apellido se actualizó correctamente";
   $_SESSION['direccion']=$direccion;
   header("Location: perfil.php?msg=direccion");
 }else{
   echo "El registro NO se actualizo correctamente";
 }

}

if(isset($_POST['cp'])){
  $cp=$_POST['cp'];
  $stmt = $conexion->prepare("UPDATE usuario SET cp= :cp WHERE dni='$_SESSION[username]'");
  $stmt->bindValue(':cp',$cp);
  $stmt->execute();

 if( $stmt->rowCount()){
   echo "El primer apellido se actualizó correctamente";
   $_SESSION['cp']=$cp;
   header("Location: perfil.php?msg=cp");
 }else{
   echo "El registro NO se actualizo correctamente";
 }


}

if(isset($_POST['localidad'])){

  $localidad=$_POST['localidad'];
  $stmt = $conexion->prepare("UPDATE usuario SET localidad= :localidad WHERE dni='$_SESSION[username]'");
  $stmt->bindValue(':localidad',$localidad);
  $stmt->execute();

 if( $stmt->rowCount()){
   echo "El primer apellido se actualizó correctamente";
   $_SESSION['localidad']=$localidad;
   header("Location: perfil.php?msg=localidad");
 }else{
   echo "El registro NO se actualizo correctamente";
 }

}

if(isset($_POST['provincia'])){
  $provincia=$_POST['provincia'];
  $stmt = $conexion->prepare("UPDATE usuario SET provincia= :provincia WHERE dni='$_SESSION[username]'");
  $stmt->bindValue(':provincia',$provincia);
  $stmt->execute();

 if( $stmt->rowCount()){
   echo "El primer apellido se actualizó correctamente";
   $_SESSION['provincia']=$provincia;
   header("Location: perfil.php?msg=provincia");
 }else{
   echo "El registro NO se actualizo correctamente";
 }

}

if(isset($_POST['movil'])){
  $movil=$_POST['movil'];
  $stmt = $conexion->prepare("UPDATE usuario SET movil= :movil WHERE dni='$_SESSION[username]'");
  $stmt->bindValue(':movil',$movil);
  $stmt->execute();

 if( $stmt->rowCount()){
   echo "El primer apellido se actualizó correctamente";
   $_SESSION['movil']=$movil;
   header("Location: perfil.php?msg=movil");
 }else{
   echo "El registro NO se actualizo correctamente";
 }

}


if(isset($_POST['mail'])){
  $mail=$_POST['mail'];
  $stmt = $conexion->prepare("UPDATE usuario SET mail= :mail WHERE dni='$_SESSION[username]'");
  $stmt->bindValue(':mail',$mail);
  $stmt->execute();

 if( $stmt->rowCount()){
   echo "El primer apellido se actualizó correctamente";
   $_SESSION['mail']=$mail;
   header("Location: perfil.php?msg=mail");
 }else{
   echo "El registro NO se actualizo correctamente";
 }

}

if(isset($_POST['tipotarifa'])){
  $tipotarifa=$_POST['tipotarifa'];
  $stmt = $conexion->prepare("UPDATE usuario SET tipotarifa= :tipotarifa WHERE dni='$_SESSION[username]'");
  $stmt->bindValue(':tipotarifa',$tipotarifa);
  $stmt->execute();

 if( $stmt->rowCount()){
   echo "El primer apellido se actualizó correctamente";
   $_SESSION['tipotarifa']=$tipotarifa;
   header("Location: perfil.php?msg=tipotarifa");
 }else{
   echo "El registro NO se actualizo correctamente";
 }

}

if(isset($_POST['imagen'])){
  $imagen=$_POST['imagen'];
  $stmt = $conexion->prepare("UPDATE usuario SET foto= :imagen WHERE dni='$_SESSION[username]'");
  $stmt->bindValue(':imagen',$imagen);
  $stmt->execute();

 if( $stmt->rowCount()){
   echo "El primer apellido se actualizó correctamente";
   $_SESSION['foto']=$imagen;
   header("Location: perfil.php?msg=imagen");
 }else{
   echo "La imagen NO se actualizo correctamente";
 }

}

//Cerrar la conexion
$conexion="";

 ?>
