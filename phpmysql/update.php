<?php

require('../conneccion.php');

$mi_id = 4;
$mi_nombre ="Luay";
$mi_usuario="Lui123";
$mi_password="12334444";

$sql = "UPDATE usuario SET nombre='$mi_nombre,usuario='$mi_usuario'password='$mi_password'WHERE id='$mi_id'";

$resultado = $msqli -> query($sql);
if($resultado){

    if($msqli -> affect_rows > 0 ){
        echo "usuario modificado correctamente";
    }else{
        echo"Este usuario no existe";
   }
}


?>