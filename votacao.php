<?php 
	echo '<pre>';
	echo print_r($_POST);
	echo '</pre>';

	session_start();
	//verificando se o usuário está tentando acessar via URL
	if(!isset($_SESSION['logado']) == true){
		//destruindo a sessão
		unset($_SESSION['logado']);
		header('Location:index.php?login=0');  
	} 


 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Votação Gente que Faz</title>
</head>
<body>

	<h1>Votação Gente que Faz</h1>

</body>
</html>