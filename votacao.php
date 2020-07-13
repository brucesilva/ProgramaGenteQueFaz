<?php 

   require_once("vendor/autoload.php");
   use App\Model\LoginModel;


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

		//verificando qual foi o radio button selecionado
		$votado = $_POST['voto'];
		echo $votado; 

		//Aqui estou pegando o usuário logado
 		$user = $_SESSION['user']; ;


 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>Votação Gente que Faz</title>

	<meta name="viewport" content="width=device-width, initial-scale-1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css/styleVotacao.css">

	<script type="text/javascript">
			

		function pegaRadio(){

			var votos = document.getElementsByName("voto"); 
			var btn = document.getElementById('btnVoto');
			//aqui estou passando o usuário que está logado
			var user = "<?php echo $user;?>";
   		
			if(user == 'lsobiesk'){ 
				btn.disabled = false; 
			}  	 	
	

			if(user == 'adslima'){
				if(votos[0].checked){
					votos[0].disabled = true;
					btn.disabled = true; 
				}else{
					btn.disabled = false;
				}
			}  				
			 
			if(user == 'aalvaren'){
				if(votos[1].checked){
					votos[1].disabled = true;
					btn.disabled = true; 
				}else{
					btn.disabled = false;
				}
			}  	

			 if(user == 'acarraro'){
				if(votos[2].checked){
					votos[2].disabled = true;
					btn.disabled = true; 
				}else{
					btn.disabled = false;
				}
			}  

			if(user == 'aperei17'){
				if(votos[3].checked){
					votos[3].disabled = true;
					btn.disabled = true; 
				}else{
					btn.disabled = false;
				}
			} 

			if(user == 'casilva'){
				if(votos[4].checked){
					votos[4].disabled = true;
					btn.disabled = true; 
				}else{
					btn.disabled = false;
				}
			} 

			if(user == 'cmdcost2'){
				if(votos[5].checked){
					votos[5].disabled = true;
					btn.disabled = true; 
				}else{
					btn.disabled = false;
				}
			} 

			if(user == 'dvrdort1'){
				if(votos[6].checked){
					votos[6].disabled = true;
					btn.disabled = true; 
				}else{
					btn.disabled = false;
				}
			} 

			if(user == 'jdrsilva'){
				if(votos[7].checked){
					votos[7].disabled = true;
					btn.disabled = true; 
				}else{
					btn.disabled = false;
				}
			} 

			if(user == 'jfbdsil1'){
				if(votos[8].checked){
					votos[8].disabled = true;
					btn.disabled = true; 
				}else{
					btn.disabled = false;
				}
			} 
			
			if(user == 'jpereira'){
				if(votos[9].checked){
					votos[9].disabled = true;
					btn.disabled = true; 
				}else{
					btn.disabled = false;
				}
			} 

			if(user == 'jemlima'){
				if(votos[10].checked){
					votos[10].disabled = true;
					btn.disabled = true; 
				}else{
					btn.disabled = false;
				}
			}

			if(user == 'kjdsilv1'){
				if(votos[11].checked){
					votos[11].disabled = true;
					btn.disabled = true; 
				}else{
					btn.disabled = false;
				}
			}

			if(user == 'ldarri'){
				if(votos[12].checked){
					votos[12].disabled = true;
					btn.disabled = true; 
				}else{
					btn.disabled = false;
				}
			}

			if(user == 'lgcosta2'){
				if(votos[13].checked){
					votos[13].disabled = true;
					btn.disabled = true; 
				}else{
					btn.disabled = false;
				}
			}

			if(user == 'Luis'){
				if(votos[14].checked){
					votos[14].disabled = true;
					btn.disabled = true; 
				}else{
					btn.disabled = false;
				}
			}

			if(user == 'maverdi'){
				if(votos[15].checked){
					votos[15].disabled = true;
					btn.disabled = true; 
				}else{
					btn.disabled = false;
				}
			}

			if(user == 'Dalva'){
				if(votos[16].checked){
					votos[16].disabled = true;
					btn.disabled = true; 
				}else{
					btn.disabled = false;
				}
			}

			if(user == 'mrfngama'){
				if(votos[17].checked){
					votos[17].disabled = true;
					btn.disabled = true; 
				}else{
					btn.disabled = false;
				}
			}

			if(user == 'mlsilva'){
				if(votos[18].checked){
					votos[18].disabled = true;
					btn.disabled = true; 
				}else{
					btn.disabled = false;
				}
			}

			if(user == 'pfdsous2'){
				if(votos[19].checked){
					votos[19].disabled = true;
					btn.disabled = true; 
				}else{
					btn.disabled = false;
				}
			}


		}
 

	</script>
	
</head>
<body>

	<div class="container-fluid mt-5">
		<div class="row">
			<div class="col-md-12">
				<h1 style="color: white; text-align: center;">Bem vindo <?= $_SESSION['user']; ?></h1>
			</div><!--/col-md-12 -->
		</div><!--/row Cabeçalho -->
	</div><!--/Container-fluid Topo -->

	<form action="votacao.php" method="post" >
		<!--aqui vai ficar os radios button para votação -->
		<div class="container-fluid mt-3 container-meio pt-3">
			<div class="container" >
				<div class="row">
 
					<div class="col-md-6"  >
						<label class="radio">
							<input type="radio" name="voto" id="t" value="aldines" onclick="pegaRadio()"> Aldines dos Santos lima <br>
						</label><br>

						<label class="radio">
							<input type="radio" name="voto" id="b" value="alessandro" onclick="pegaRadio()"> Alessandro Alvarenga <br>	
						</label><br>

						<label class="radio">
							<input type="radio" name="voto" id="b" value="ana" onclick="pegaRadio()"> Ana Carolina Carraro <br>	
						</label><br>

						<label class="radio">
							<input type="radio" name="voto" id="b" value="antonio" onclick="pegaRadio()"> Antonio Tavares <br>
						</label><br>

						<label class="radio">
							<input type="radio" name="voto" id="b" value="celma" onclick="pegaRadio()"> Celma Aparecida Rodrigues <br>
						</label><br>

						<label class="radio">
							<input type="radio" name="voto" id="b" value="caio" onclick="pegaRadio()"> Caio Matheus da Costa <br>	 
						</label><br>

						<label class="radio">
							<input type="radio" name="voto" id="b" value="debora" onclick="pegaRadio()"> Debora Vitória Rodrigues Dorta <br>
						</label><br>

						<label class="radio">
							<input type="radio" name="voto" id="b" value="joao" onclick="pegaRadio()"> João dos Reis Silva <br>	 	
						</label><br>

						<label class="radio">
							<input type="radio" name="voto" id="b" value="fabricio" onclick="pegaRadio()"> José Fabrício Barros da SIlva <br>	 
						</label><br>

						<label class="radio">
							<input type="radio" name="voto" id="b" value="juliano" onclick="pegaRadio()"> Juliano Santana dos Santos <br>	  
						</label><br> 
					</div><!--/col-md-6 -->

					<div class="col-md-6" >
						 <label class="radio">
							<input type="radio" name="voto" id="b" value="jhonatan" onclick="pegaRadio()"> Jhonatan Elias Monteiro Lima <br>	  
						</label><br> 

						<label class="radio">
							<input type="radio" name="voto" id="b" value="kleber" onclick="pegaRadio()"> Kleber Jose da Silva <br>	  
						</label><br> 

						<label class="radio">
							<input type="radio" name="voto" id="b" value="leandra" onclick="pegaRadio()"> Leandra Darri <br>	  
						</label><br> 

						<label class="radio">
							<input type="radio" name="voto" id="b" value="leandro" onclick="pegaRadio()"> Leandro Gonçalves Costa <br>	  
						</label><br> 

						<label class="radio">
							<input type="radio" name="voto" id="b" value="luis" onclick="pegaRadio()"> Luis Fernando dos Santos <br>	  
						</label><br> 

						<label class="radio">
							<input type="radio" name="voto" id="b" value="marcelo" onclick="pegaRadio()"> Marcelo Antonio Vedi <br>	  
						</label><br> 

						<label class="radio">
							<input type="radio" name="voto" id="b" value="dalva" onclick="pegaRadio()"> Maria Dalva dos Santos <br>	  
						</label><br> 

						<label class="radio">
							<input type="radio" name="voto" id="b" value="mariane" onclick="pegaRadio()"> Mariane Regina Fortunato Nunes <br>	  
						</label><br> 

						<label class="radio">
							<input type="radio" name="voto" id="b" value="monica" onclick="pegaRadio()"> Monica Luzia da SIlva <br>	  
						</label><br> 

						<label class="radio">
							<input type="radio" name="voto" id="b" value="pedro" onclick="pegaRadio()"> Pedro Felipe de Alcantara <br>	  
						</label><br> 


					</div><!--/col-md-6 -->
					 
					<button class="btn btn-primary btn-lg btn-block mt-3" id="btnVoto" disabled >Vote no funcionário do mês do seu setor</button> 
				</div><!--/row votação --> 
			</div><!--/Container -->
		</div><!--/Container-fluid votacao -->
	</form><!--/form -->










	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>