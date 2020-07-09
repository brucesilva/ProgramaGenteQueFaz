<?php 

	require_once("vendor/autoload.php");
	use App\Model\ConexaoBDO;
	use App\Model\Login;
	use App\Model\LoginModel;

	$conn = new ConexaoBDO(); 

	try {

		//Fazendo a conexão com o BDO
		$conn->Conecta();
		 
		$loginModel = new LoginModel();
		//$loginModel->__set('user','bruce');
		//$loginModel->__set('senha','123');

		$login = new Login($conn, $loginModel);
		//$login->read();

	} catch (PDOException $e) {
		echo "Erro --> ".$e->getMessage();
	} 
 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>

	<meta name="viewport" content="width=device-width, initial-scale-1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<link rel="stylesheet" href="css/style.css">

</head>
<body>

	 	<!--Div principal do Site -->
		<div class="containerPrincipal2 container-fluid p-0 m-0 mb-0 pb-0"> 
			
			<div class="container-fluid con">
				<div class="row linha2">
					<div class="col-md-12 col12">
						dlkajdfkl
					</div>
				</div>
		</div><!--Fecha div container-fluid -->
	 


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>