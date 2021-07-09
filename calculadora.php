<?php  
	if (isset($_POST['operacion'])) {
		// code...
		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];
		$op = $_POST['operacion'];
		//Para comprovar
		var_dump($_POST);
	}
	if (!empty($num1) && !empty($num2) && !empty($op)){
		if(is_numeric($num1) && is_numeric($num2)){
			if($op == "+"){
				$resultado = $num1 + $num2;
			}else if($op == "-"){
				$resultado = $num1 - $num2;
			}else if($op == "/"){
				$resultado = $num1 / $num2;
			}else if($op == "*"){
				$resultado = $num1 * $num2;
			}else{
				$resultado = "Esa no es una operacion valida";
			}
		}else{
			$resultado = "Debes de teclear los numeros";
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/estilo.css">
    <title>Document</title>
</head>
<body>
    
<div class="contenedor">
		<div class="calc">
			<h2>Calculadora</h2>
			<form action="<? echo $_SERVER['PHP SELF']; ?>" method="POST">
				<label for="primerNumero">Digite el primer numero</label>
				<input type="number" name="num1">
				<label for="segundoNumero">Digite el segundo numero</label>
				<input type="number" name="num2">
				<div class="op">
					<input type="submit" name="operacion" value="+">
				</div>
				<div class="op">
					<input type="submit" name="operacion" value="-">
				</div>
				<div class="op">
					<input type="submit" name="operacion" value="/">
				</div>
				<div class="op">
					<input type="submit" name="operacion" value="*">
				</div>
				<h3 class="result"></h3>
			</form>
		</div>
	</div>
</body>
</body>
</html>