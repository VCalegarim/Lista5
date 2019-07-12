<html>
<head>
		<meta charset="utf-8">
<title>Vinhos</title>
</head>

<body>

    <h2>Seletor de vinhos</h2>

<img src="img/vinho1.jpeg" alt="vinho" width="42" height="42">
<img src="img/vinho2.jpeg" alt="vinho" width="42" height="42">

    <?php

	$nome = $_POST ['nome'];

	$branco = $_POST ['tipo1'];
	$rose= $_POST ['tipo2'];
	$tinto = $_POST ['tipo3'];

	$refeic = $_POST ['refei'];

	echo "Obrigado pela sua atenção, $nome ";
	echo "Você realmente aprecia $refeic , especialmente com um bom vinho ";

		?>

</body>
</html>