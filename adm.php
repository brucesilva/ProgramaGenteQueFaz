<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>ADM - SEARA</title>

		<!-- estilos -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<link rel="stylesheet" type="text/css" href="css/styleAdm.css">

		<!-- script -->
		<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

		<script src="js/script.js"></script>
		
	</head>

	<body> 
 
		<!--Container Principal --> 
		<div class="container-fluid fundoSeara"> 
			<!--Container NavBar-->
			<div class="container ">
				<div class="navbar">
					 <!--logo-->
					 <a href="#" class="navbar-brand"> 
					 	<img src="img/searaLogo.png" width="120px">
					 </a>
					  
					 <ul class="nav">
					 	<li class="nav-item">
					 		<a href="App/Controller/controllerAdm.php?adm=1" class="nav-link text-white font-weight-bold "> Vencedor </a>
					 	</li>

					 	<li class="nav-item">
					 		<a href="App/Controller/controllerAdm.php?adm=2" class="nav-link text-white font-weight-bold"> Falta Votar </a>
					 	</li>

					 	<li class="nav-item">
					 		<a href="App/Controller/controllerAdm.php?adm=3" class="nav-link text-white font-weight-bold "> Geral </a>
					 	</li>

					 	<li class="nav-item">
					 		<a href="App/Controller/controllerAdm.php?adm=4" class="nav-link text-white font-weight-bold"> Sobre </a>
					 	</li>
 
					 </ul>
				</div><!--/NavBar-->
			</div><!--/container NavBar-->  
		</div> <!--/container principal -->

		<!--Carouser --> 
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			     <img class="slides" src="img/bacon.png" class="d-block" alt="...">
			    </div>
			    <div class="carousel-item">
			      <img class="slides"  src="img/produtos.png" class="d-block w-70 " alt="...">
			    </div>
			    <div class="carousel-item">
			     <img class="slides"  src="img/qualidade.png" class="d-block w-70" alt="...">
			    </div>
			  </div>

			  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div> 
		<!--/Fim Carouser -->

		<!--footer-->
		<footer>
			<div class="rodape">

			</div>
		</footer>
		<!--/fim Footer-->
	 
	 	<!--aqui é para o carousel passar a cada tantos de segundos -->
		<script type="text/javascript">
			
			$('.carousel').carousel({
  				interval: 4500
			})

		</script>	 
		
 	</body> 
</html>