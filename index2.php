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
		<div class="containerPrincipal container-fluid p-0 m-0 mb-0 pb-0">

			 
			 

 			<!-- Div do meio, onde vai a imagem e os campos de senha -->
			<div class="containerMeio container-fluid h-50">
				 <!-- Div que esta dentro da div do meio, para colocar o log e os campos de user e senh -->
				<div class="container login">


					<div class="row">
						<div class="col-md-4 img1">  
							<img src="img/seara2.png" />
						</div><!--Fecha div img1-->

						<div class="col-md-2">
							<label style="color: white"></style> Please log on</label><br>
						</div>

						<div class="col-md-6 campos">
							 <form> 
							 	
							 	<label>user name:</label> <input type="text" name=""> <br>
							 	<label>password:</label>  <input type="password" name=""> <br>
							 	<button class="btn btn-success">Submit</button>
							 </form>
						</div><!--Fecha div campos-->


					</div><!--Fecha div row-->
					  
				</div><!--Fecha div containerLogin-->

			</div><!--Fecha div containerMeio-->

		</div><!--Fecha div container-fluid -->
	 







<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>