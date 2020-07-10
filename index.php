<?php 

	require_once("vendor/autoload.php");
	use App\Model\ConexaoBDO;
	use App\Model\Login;
	use App\Model\LoginModel;

	 

	/*
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
*/
 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Gente que Faz - by Fabrício Silva </title>

	<meta name="viewport" content="width=device-width, initial-scale-1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<link rel="stylesheet" href="css/style.css">

</head>
<body> 

		<div class="container-fluid contH1">
			<div class="row linhaH1">
				<div class="col-md-12 colH1">
					<h1>Programa Gente que Faz - <label style="color: red;">by Fabrício Barros</label> </h1>
				</div>
			</div>
		</div>

	 	<!--Div principal do Site -->
		<div class="containerPrincipal container-fluid p-0 m-0 mb-0 pb-0">  
			<!--Container do meio -->
			<div class="container-fluid">

			  <div class="row linha">

			  	<!--Div que fica a imagem -->
			    <div class="col-md-3 colImg" >
			    	<img class="imgSeara" src="img/seara.png" class="img-responsive">
			    </div><!--Fecha div col-md-3 -->

			 
			    <!--Div que fica os nome-->
			    <div class="col-md-2 colLabel">
			    	<label class="label1" style="color: white; font-size: 17px;">Please log on</label><br>
			    	<label class="label" style="color: gray; font-size: 12px; "> User name:</label><br>
			    	<label class="label" style="color: gray; font-size: 12px;">Password</label>
			    </div> <!--Fecha div col-md-2 -->

			    <!--Div que fica os input -->
			    <div class="col-md-7 colInputs" >

					<form action="App/Controller/controller.php" method="post">  
					    	<input type="text" name="user" required><br>
					    	<input type="password" name="password" required><br> 
					    	<button class="btn btn-primary">Submit</button> 
					 </form>	
			    </div> <!--Fecha div col-md-7 -->
 			

			    <div class="row login2">
					<div class="col-md-12 colInputs conteudo4"> 
						<label class="label1" style="color: white; font-size: 17px;  width: 390px; text-align: left; ">Please log on</label><br>

						<form action="App/Controller/controller.php" method="post"> 
							<label class="label" style="color: gray; font-size: 12px; width: 390px; text-align: left;"> User name:</label><br>
							<input type="text" name="user" class="" ><br>
							
							<label class="label" style="color: gray; font-size: 12px; width: 390px; text-align: left; margin-top: -2px;">Password:</label><br>
							<input type="password" name="password" ><br>

							<button class="btn btn-primary">Submit</button>  
						</form> <!--Fecha form -->  
					 </div><!--Fecha div conteudo4 -->  
				</div><!--Fecha row login2 -->  

			  </div><!--Fecha div row linha -->  
			</div><!--Fecha div container-fluid 2 --> 
		</div><!--Fecha div container-fluid a principal que pega todo o site-->
	 


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>