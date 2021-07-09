<?php  

require('conneccion.php');

$mi_nombre ="Garry";
$mi_usuario ="Garry007";
$mi_password ="123456789";

$sql = "INSERT INTO usuarios(id,nombre,usuario,pasword) VALUES (NULL,'$mi_usuario,'$mi_password')";

$resultado =$msqli -> query($sql);
if($resultado){
    echo"usuario se inserto correctamente";
}else{
    echo "hubo un error al insertar el usuario".$msqli->error;
}

?>