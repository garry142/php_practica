<?php

$msqli = new mysqli("localhost","root","","comentariosBD");
//para probar la conexion
echo "<pre>";
var_dump($msqli);
echo "</pre>";

if($msqli->connect_errno){
    echo"fallo al proyectar , numero de error:".mysqli -> connect_errno."<br>
    descripcion del error:".mysqli -> connect_error;
    echo "hubo un error de conexion intentelo mas tarde ";
}else{
    echo"La conexion fue exitosa";
}
 
?>