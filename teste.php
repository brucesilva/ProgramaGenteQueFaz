<?php 
/*
	echo '<pre>';
	echo print_r($_POST);
	echo '</pre>';
*/
	//Essa sessão vem do login do index
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

	<meta name="viewport" content="width=device-width, initial-scale-1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css/styleVotacao.css">

	<script >
			
		 

	</script>
	
</head>
<body> 

	<form action="pegaRadioButton.php" method="post">
		<input type="radio" name="colors" value="red" id="myRadio" onclick="myFunction()">Red color
		<input type="radio" name="colors" value="yellow" id="myRadio" onclick="myFunction()">yellow color
	
		<input type="submit" name="">
	</form>
	 
<script>

	function myFunction() {
	  var x = document.getElementsByName("colors");
  
	  	 if(x[0].checked){
	  	 	x[1].disabled = true;
	  	 }
	  	  if(x[1].checked){
	  	 	alert("O Segundo botão foi clicado");
	  	 }
	 
	   
	}

</script>
 

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>