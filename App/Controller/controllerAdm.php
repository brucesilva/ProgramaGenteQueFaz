<?php 
	

	namespace App\Controller;

	require_once("../../vendor/autoload.php");

	use App\Model\ConexaoBDO;
	use App\Model\LoginModel;
	use App\Model\Login;

	$adm = $_GET['adm']; 
	//echo "O valor passado na URL é ".$adm; 

	$conn = new ConexaoBDO();
	$LoginModel = new LoginModel(); 
	$consulta = new Login($conn, $LoginModel); 

	//if($adm == 1){
	$vencedor =  $consulta->vencedor();   
	//Aqui estou trazendo todos os registros do BDO
	$todosOsDados =  $consulta->read(); 

	$votouem = $consulta->readVotouem();


	//foreach ($select as $key => $value) {

	//	if($value->valores == ''){
			 
	//	}else{
	//		 echo $value->valores;
	//	     echo "<br>";
	//	}
		 
	//}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title></title>

 	<!-- estilos -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<link rel="stylesheet" type="text/css" href="../../css/styleAdm.css">

		<!-- script -->
		<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

		<script src="js/script.js"></script>

 </head>
 <body class="controller">

 	<!--Container Principal --> 
		<div class="container-fluid fundoSeara"> 
			<!--Container NavBar-->
			<div class="container ">
				<div class="navbar">
					 <!--logo-->
					 <a href="../../adm.php" class="navbar-brand"> 
					 	<img src="../../img/searaLogo.png" width="120px">
					 </a>
					  
					 <ul class="nav">
					 	<li class="nav-item">
					 		<a href="controllerAdm.php?adm=1" class="nav-link text-white font-weight-bold "> Vencedor </a>
					 	</li>

					 	<li class="nav-item">
					 		<a href="controllerAdm.php?adm=2" class="nav-link text-white font-weight-bold"> Falta Votar </a>
					 	</li>

					 	<li class="nav-item">
					 		<a href="controllerAdm.php?adm=3" class="nav-link text-white font-weight-bold "> Valores e Comentários </a>
					 	</li>

					 	<li class="nav-item">
					 		<a href="controllerAdm.php?adm=4" class="nav-link text-white font-weight-bold"> Todos os dados </a>
					 	</li>
 
					 </ul>
				</div><!--/NavBar-->
			</div><!--/container NavBar-->  
		</div> <!--/container principal -->
 
 	 
	<!--Logica para saber em qual if entrar e mostra a sua lógica -->
 	<?php if($adm ==1){ 

 		 foreach ($vencedor as $key => $ganhador) {
	   	 //echo "O vencedor é o ".$ganhador->user; 
	   	// echo "<br>"; 

 	?>

 		<h1 class="display-3" style="text-align: center; margin-top: 30px;"> Vencedor <?php echo $ganhador->nome ?> </h1>


 	<?php } } else if($adm == 2) { ?> 
 		<table class="table">
		  <thead class="thead-dark">
		    <tr>
		      <th scope="col">Falta Votar</th> 
		      
		    </tr>
		  </thead>

		 	
		 <?php 
		 //aqui estou verificando quem ainda não votou
		 	foreach ($todosOsDados as $key => $value) {
	  			if($value->javotou != ''){
	  				//echo "Já votou ".$value->nome;
	  				//echo "<br>";
	  			}else{

		  ?>
		  <tbody>
		    <tr>
		    <th scope="row"><?php echo $value->nome; ?></th>
		     
		    </tr>  

	   <?php } }   ?>
	</table>
 
 	<?php } else if($adm == 3) { ?> 
 		 
 	<table class="table">
	  <thead class="thead-dark">
	    <tr> 
	      <th scope="col">User</th> 
	      <th scope="col">Valores</th>
	      <th scope="col">Comentários</th>
	    </tr>
	  </thead>

	 		
	 <?php 
	 	foreach ($votouem as $key => $value) {
  			if($value->valores == '' && $value->valores == ''){

  			}else{

	  ?>
	  <tbody>
	    <tr> 
	    <th scope="row"><?php echo $value->votouem; ?></th>  
	      <td><?php echo $value->valores; ?></td>
	      <td><?php echo $value->comentario; ?></td> 
	    </tr>  

	   <?php } } }  ?>
	</table>	


 
 	<?php if($adm ==4){ ?>  
 		 
 	<table class="table">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">Nome</th>
	      <th scope="col">CPF</th>
	      <th scope="col">User</th>
	      <th scope="col">Qtd Votos</th>
	      <th scope="col">Votou Em</th>
	      <th scope="col">Valores</th>
	      <th scope="col">Comentários</th>
	    </tr>
	  </thead>

	 	
	 <?php 
	 	foreach ($todosOsDados as $key => $value) {
  
	  ?>
	  <tbody>
	    <tr>
	    <th scope="row"><?php echo $value->nome; ?></th> 
	      <td><?php echo $value->user; ?></td> 
	      <td><?php echo $value->cpf; ?></td> 
	      <td><?php echo $value->votos; ?></td>
	      <td><?php echo $value->votouem; ?></td>
	      <td><?php echo $value->valores; ?></td>
	      <td><?php echo $value->comentario; ?></td> 
	    </tr>  

	   <?php }  } ?>
	</table>

	  
 </body>
 </html>