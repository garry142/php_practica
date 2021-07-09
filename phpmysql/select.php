<?php


require('conneccion.php');

$sql = "SELECT * FROM usuarios";

$resultado = $msqli -> query ($sql);
echo "<pre>";
var_dump($resultado);
echo "</pre>";

if($resultado -> num_rows >  0){
while($fila = $resultado -> fetch_assoc()){

    echo "<pre>";
    echo var_dump($fila);
    echo"</pre>";

    echo $fila['id'];
    echo "br";
    echo $fila['usuario'];
    echo"br";
    echo $fila['password'];
}

}else{
    echo "no hay usuarios";
}


?>