<html>
<head>
		<meta charset="utf-8">
<title>Calculos</title>
</head>

<body>

    <h2>Calculos</h2>

    <?php

$valor1 = $_POST ['valor1'];
$valor2 = $_POST ['valor2'];
$calculo = $_POST ['calculo'];  

if ($calculo == "som"){ 
    $result= $valor1 + $valor2;
}

if ($calculo == "sub"){
    $result= $valor1 - $valor2;
}

if ($calculo == "mul"){
    $result= $valor1 * $valor2;
}

if ($calculo == "div"){
    $result= $valor1 / $valor2;
}

echo ("Resultado do Cálculo: $result");

?>

</body>
</html>