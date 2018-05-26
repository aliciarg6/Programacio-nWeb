<?php

session_start();

$dsn = "mysql:host=localhost;dbname=db15428277_pw1718";
$db_username = "x15428277";
$db_password = "15428277";


//Encripta la contraseña
//la función password_hash(), la cual utiliza como parámetros la variable $form_pass y el algoritmo de encriptacion CRYPT_BLOWFISH.
//$hash = password_hash($form_pass, PASSWORD_BCRYPT);

//Conectando...
try{
  $conexion = new PDO($dsn, $db_username, $db_password);
  $conexion->setAttribute(PDO::ATTR_PERSISTENT,true);
  $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch ( PDOException $e ) {
  echo "Error al conectar a la base de datos";
  die( "Conexión fallida: " . $e­>getMessage() );
}


$buscarUsuario = "SELECT * FROM usuario WHERE dni='$_POST[dni]'";
//Ejecuta la sentencia y devuelve el numero de filas afectadas

$result = $conexion->prepare($buscarUsuario);
$result->execute();

if($result->rowCount()==1){
  header("Location: usuario.php?msg=added");
  //echo "El usuario ya ha sido resgistrado anteriormente";
}else{
/*
  // Recibo los datos de la imagen
  $nombre_img = $_FILES['imagen']['name'];
  $tipo = $_FILES['imagen']['type'];
  $tamanio = $_FILES['imagen']['size'];

  //Si existe imagen y tiene un tamaño correcto
  if (($nombre_img == !NULL) && ($_FILES['imagen']['size'] <= 200000)) {
   //indicamos los formatos que permitimos subir a nuestro servidor
   if (($_FILES["imagen"]["type"] == "image/gif") || ($_FILES["imagen"]["type"] == "image/jpeg")
    || ($_FILES["imagen"]["type"] == "image/jpg") || ($_FILES["imagen"]["type"] == "image/png")){
      // Ruta donde se guardarán las imágenes que subamos
      $directorio = $_SERVER['DOCUMENT_ROOT'].'../imagenes';
      // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
      move_uploaded_file($_FILES['imagen']['tmp_name'],$directorio.$nombre_img);
    }else{
       //si no cumple con el formato
       echo "No se puede subir una imagen con ese formato ";
    }
  }else{
   //si existe la variable pero se pasa del tamaño permitido
   if($nombre_img == !NULL) echo "La imagen es demasiado grande ";
  }
*/
  //if($nombre_img==NULL){
    $nombre_img="imagenes/perfil.jpg";
  //}

      if(!isset($_POST['cp'])){
        $cp=0;
      }else{
        $cp=$_POST['cp'];
      }

      if(!isset($_POST['movil'])){
        $movil=0;
      }else{
        $movil=$_POST['movil'];
      }

     $sql = $conexion->prepare("INSERT INTO usuario VALUES
      (:dni,:password,:nombre,:apellido1,:apellido2,
      :sexo,:direccion, :cp, :localidad, :provincia,
      :movil, :mail, :tipotarifa, :foto)");

     $sql->bindValue(':dni',$_POST['dni']);
     $sql->bindValue(':password',$_POST['password']);
     $sql->bindValue(':nombre',$_POST['nombre']);
     $sql->bindValue(':apellido1',$_POST['apellido1']);
     $sql->bindValue(':apellido2',$_POST['apellido2']);
     $sql->bindValue(':sexo',$_POST['sexo']);
     $sql->bindValue(':direccion',$_POST['direccion']);
     $sql->bindValue(':cp',$cp);
     $sql->bindValue(':localidad',$_POST['localidad']);
     $sql->bindValue(':provincia',$_POST['provincia']);
     $sql->bindValue(':movil',$movil);
     $sql->bindValue(':mail',$_POST['mail']);
     $sql->bindValue(':tipotarifa',$_POST['tipotarifa']);
     $sql->bindValue(':foto',$nombre_img);

     $result = $sql->execute();

     if(!$result){
       die('Consulta no válida: ');
       echo "Error al crear el usuario" ;
     }else{
       header("Location: index.php?msg=new");
       echo  "Usuario Creado Correctamente!";
     }

}

//Cerrar la conexion
$conexion="";

 ?>
