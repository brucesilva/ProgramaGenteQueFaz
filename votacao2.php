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
		// destruindo a sessão
	 	unset($_SESSION['logado']);
	 	header('Location:login.php?login=0');  
	 }  

		//verificando qual foi o radio button selecionado
		//$votado = $_POST['voto'];
		//echo $votado; 

		//Aqui estou pegando o usuário logado
 		$user = $_SESSION['user'];

 		//Aqui estou passando o login para o nome do usuário
 		if($user == 'adslima'){
 			$nome = 'Aldines';
 		}
 		if($user == 'acarraro'){
 			$nome = 'Ana Carolina';
 		}

 		if($user == 'aalvaren'){
 			$nome = 'Alessandro';
 		}

 		if($user == 'aperei17'){
 			$nome = 'Antonio Carlos';
 		}

 		if($user == 'casilva'){
 			$nome = 'Celma';
 		}

 		if($user == 'cmdcost2'){
 			$nome = 'Caio';
 		}

 		if($user == 'dvrdort1'){
 			$nome = 'Debora';
 		}

 		if($user == 'jdrsilva'){
 			$nome = 'João';
 		}

 		if($user == 'jfbdsil1'){
 			$nome = 'Fabrício Barros';
 		}

 		if($user == 'jpereira'){
 			$nome = 'Juliano';
 		}

 		if($user == 'jemlima'){
 			$nome = 'Jhonatan';
 		}

 		if($user == 'kjdsilv1'){
 			$nome = 'Kleber';
 		}

 		if($user == 'ldarri'){
 			$nome = 'Leandra Darri';
 		}

 		if($user == 'lgcosta2'){
 			$nome = 'Leandro';
 		}

 		if($user == 'Luis'){
 			$nome = 'Luis';
 		}

 		if($user == 'maverdi'){
 			$nome = 'Marcelo';
 		}

 		if($user == 'Dalva'){
 			$nome = 'Dalva';
 		}

 		if($user == 'mrfngama'){
 			$nome = 'Mariane';
 		}

 		if($user == 'mlsilva'){
 			$nome = 'Mônica';
 		}

 		if($user == 'pfdsous2'){
 			$nome = 'pedroz';
 		}

 		if($user == 'lsobiesk'){
 			$nome = 'Leandra Sobieski';
 		}

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>Votação Gente que Faz</title>

	<meta name="viewport" content="width=device-width, initial-scale-1">

	<!-- estilos -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


		<link rel="stylesheet" type="text/css" href="css/styleVotacao.css">

		<!-- script -->
		<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

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
<div class="container-fluid mt-4">

		<div class="container">

			<div class="row">

				<div class="col-md-2" style=""> 
					<img src="img/searalogo.png" width="130px" height="130px" style="border-radius: 30px; margin-top: -18px;   "> 
				</div><!--/col-md-3  -->

				<div class="col-md-10"> 
					<h1 class="teste" >Bem vindo <?=$nome; ?></h1>
					 
				</div><!--/col-md-9  -->

			</div><!--/row  -->
			
		</div>
  
	<!-- <form action="App/Controller/satisfacaoController.php" method="POST" > -->
		<form action="App/Controller/controllerVotos.php" method="POST" >
		<!--aqui vai ficar os radios button para votação -->
		<div class="container-fluid mt-3 container-meio pt-3" style="border: none; margin-bottom: 50px">
			<div class="container" >
				<div class="row">

					<!--Gestor e Funcionários--> 
					<div class="col-md-12 rh" style="border: 3px solid white; margin-bottom: 30px; border-radius: 50px; margin-top: -40px" >
						 	
						 <div class="row" >

						 	<div class="col-md-12" style=" text-align: center; color: white; ">
						 	<!--	<h1 style="margin-bottom: 20px;">Equipe ADM</h1> -->
						 		<img src="img/adm/leandra1.png" width="100px" height="100px" style="border-radius: 50px; margin: 10px 0px 20px 0px" /> 
								<h4 style="margin-bottom: 15px;">Leandra Sobieski</h4>  
						 	</div><!--col-md-12-->
						 </div><!--row-->

						 <div class="row">
						 	<div class="col-md-3" style=" text-align: center; color: white">
						 		<label class="radio">
							 		<img src="img/adm/aldines.png" width="100px" height="100px" style="border-radius: 50px; margin: 10px 0px 20px 0px" /> 
									<h4 style="margin-bottom: 15px;">Aldines</h4> 
									<input type="radio" name="voto" id="b" value="adslima" onclick="pegaRadio()">
								</label>
						 	</div><!--col-md-4-->

						 	<div class="col-md-3" style="text-align: center; color: white">
						 		<label class="radio">
							 		<img src="img/adm/alessandro.png" width="100px" height="100px" style="border-radius: 50px; margin: 10px 0px 20px 0px" /> 
									<h4 style="margin-bottom: 15px;">Alessandro</h4>  
									<input type="radio" name="voto" id="b" value="aalvaren" onclick="pegaRadio()">
								</label>
						 	</div><!--col-md-4-->

						 	<div class="col-md-3" style=" text-align: center; color: white">
						 		<label class="radio">
							 		<img src="img/adm/ana.png" width="100px" height="100px"  style="border-radius: 50px; margin: 10px 0px 20px 0px"/> 
									<h4 style="margin-bottom: 15px;">Ana</h4>   
									<input type="radio" name="voto" id="b" value="acarraro" onclick="pegaRadio()">
								</label>
						 	</div><!--col-md-4--> 

						 	<div class="col-md-3" style=" text-align: center; color: white">
						 		<label class="radio">
							 		<img src="img/adm/antonio.png" width="100px" height="100px"  style="border-radius: 50px; margin: 10px 0px 20px 0px"/> 
									<h4 style="margin-bottom: 15px;">Antonio</h4> 
									<input type="radio" name="voto" id="b" value="aperei17" onclick="pegaRadio()">
								</label> 
						 	</div><!--col-md-4--> 

						 	<div class="col-md-3" style=" text-align: center; color: white">
						 		<label class="radio"> 
							 		<img src="img/adm/celma.png" width="100px" height="100px"  style="border-radius: 50px; margin: 10px 0px 20px 0px"/> 
									<h4 style="margin-bottom: 15px;">Celma</h4>  
									<input type="radio" name="voto" id="b" value="casilva" onclick="pegaRadio()">
								</label>  
						 	</div><!--col-md-4--> 

						 	<div class="col-md-3" style=" text-align: center; color: white">
						 		<label class="radio"> 
							 		<img src="img/adm/caio.png" width="100px" height="100px"  style="border-radius: 50px; margin: 10px 0px 20px 0px"/> 
									<h4 style="margin-bottom: 15px;">Caio</h4>  
									<input type="radio" name="voto" id="b" value="cmdcost2" onclick="pegaRadio()">
								</label>  
						 	</div><!--col-md-4--> 

						 	<div class="col-md-3" style=" text-align: center; color: white">
						 		<label class="radio">
							 		<img src="img/adm/debora.png" width="100px" height="100px"  style="border-radius: 50px; margin: 10px 0px 20px 0px"/> 
									<h4 style="margin-bottom: 15px;">Debora</h4>   
									<input type="radio" name="voto" id="b" value="dvrdort1" onclick="pegaRadio()">
								</label> 
						 	</div><!--col-md-4--> 

						 	<div class="col-md-3" style=" text-align: center; color: white">
						 		<label class="radio">
							 		<img src="img/adm/user.jpg" width="100px" height="100px"  style="border-radius: 50px; margin: 10px 0px 20px 0px"/> 
									<h4 style="margin-bottom: 15px;">João</h4>   
									<input type="radio" name="voto" id="b" value="jdrsilva" onclick="pegaRadio()">
								</label> 
						 	</div><!--col-md-4--> 

						 	<div class="col-md-3" style=" text-align: center; color: white">
						 		<label class="radio"> 
							 		<img src="img/adm/fabricio.png" width="100px" height="100px"  style="border-radius: 50px; margin: 10px 0px 20px 0px"/> 
									<h4 style="margin-bottom: 15px;">Fabrício</h4> 
									<input type="radio" name="voto" id="b" value="jfbdsil1" onclick="pegaRadio()">
								</label> 
						 	</div><!--col-md-4--> 

						 	<div class="col-md-3" style=" text-align: center; color: white">
						 		<label class="radio">
							 		<img src="img/adm/juliano.jpg" width="100px" height="100px"  style="border-radius: 50px; margin: 10px 0px 20px 0px"/> 
									<h4 style="margin-bottom: 15px;">Juliano</h4> 
									<input type="radio" name="voto" id="b" value="jpereira" onclick="pegaRadio()">
								</label>  
						 	</div><!--col-md-4--> 

						 	<div class="col-md-3" style=" text-align: center; color: white">
						 		<label class="radio">
							 		<img src="img/adm/Jhonatan.png" width="100px" height="100px"  style="border-radius: 50px; margin: 10px 0px 20px 0px"/> 
									<h4 style="margin-bottom: 15px;">Jhonatan</h4>  
									<input type="radio" name="voto" id="b" value="jemlima" onclick="pegaRadio()">
								</label>  
						 	</div><!--col-md-4--> 

						 	<div class="col-md-3" style=" text-align: center; color: white">
						 		<label class="radio">
							 		<img src="img/adm/Kleber.png" width="100px" height="100px"  style="border-radius: 50px; margin: 10px 0px 20px 0px"/> 
									<h4 style="margin-bottom: 15px;">Kleber</h4>  
									<input type="radio" name="voto" id="b" value="kjdsilv1" onclick="pegaRadio()">
								</label>  
						 	</div><!--col-md-4--> 

						 	<div class="col-md-3" style=" text-align: center; color: white">
						 		<label class="radio"> 
							 		<img src="img/adm/leandro.jpg" width="100px" height="100px"  style="border-radius: 50px; margin: 10px 0px 20px 0px"/> 
									<h4 style="margin-bottom: 15px;">Leandro</h4>   
									<input type="radio" name="voto" id="b" value="lgcosta2" onclick="pegaRadio()">
								</label> 
						 	</div><!--col-md-4--> 

						 	<div class="col-md-3" style=" text-align: center; color: white">
						 		<label class="radio"> 
							 		<img src="img/adm/user.jpg" width="100px" height="100px"  style="border-radius: 50px; margin: 10px 0px 20px 0px"/> 
									<h4 style="margin-bottom: 15px;">Luis</h4>
									<input type="radio" name="voto" id="b" value="luis" onclick="pegaRadio()">
								</label>   
						 	</div><!--col-md-4--> 

						 	<div class="col-md-3" style=" text-align: center; color: white">
						 		<label class="radio">
							 		<img src="img/adm/marcelo.png" width="100px" height="100px"  style="border-radius: 50px; margin: 10px 0px 20px 0px"/> 
									<h4 style="margin-bottom: 15px;">Marcelo</h4>  
									<input type="radio" name="voto" id="b" value="maverdi" onclick="pegaRadio()"> 
								</label> 
						 	</div><!--col-md-4--> 

						 	<div class="col-md-3" style=" text-align: center; color: white">
						 		<label class="radio">
							 		<img src="img/adm/userM.png" width="100px" height="100px"  style="border-radius: 50px; margin: 10px 0px 20px 0px"/> 
									<h4 style="margin-bottom: 15px;">Dalva</h4>  
									<input type="radio" name="voto" id="b" value="dalva" onclick="pegaRadio()">
								</label>  
						 	</div><!--col-md-4--> 

						 	<div class="col-md-3" style=" text-align: center; color: white">
						 		<label class="radio"> 
							 		<img src="img/adm/mariane.png" width="100px" height="100px"  style="border-radius: 50px; margin: 10px 0px 20px 0px"/> 
									<h4 tyle="margin-bottom: 15px;">Mariane</h4>  
									<input type="radio" name="voto" id="b" value="mrfngama" onclick="pegaRadio()">
								</label> 
						 	</div><!--col-md-4--> 

						 	<div class="col-md-3" style=" text-align: center; color: white">
						 		<label class="radio"> 
							 		<img src="img/adm/monica.jpg" width="100px" height="100px"  style="border-radius: 50px; margin: 10px 0px 20px 0px"/> 
									<h4 style="margin-bottom: 15px;">Mônica</h4>  
									<input type="radio" name="voto" id="b" value="mlsilva" onclick="pegaRadio()">
								</label>  
						 	</div><!--col-md-4--> 

						 	<div class="col-md-3" style=" text-align: center; color: white">
						 		<label class="radio">
							 		<img src="img/adm/user.jpg" width="100px" height="100px"  style="border-radius: 50px; margin: 10px 0px 20px 0px"/> 
									<h4 style="margin-bottom: 15px;">Pedro</h4> 
									<input type="radio" name="voto" id="b" value="pfdsous2" onclick="pegaRadio()">
								</label>   
						 	</div><!--col-md-4--> 

						 </div><!--row--> 
					</div> <!--col-md-12-->
					<!--Gestor e Funcionários--> 


					<!--div cod md do h1 até o textearea -->
					<div class="col-md-12" style="border: 3px solid white; border-radius: 50px;">

					<!--H1 --> 
					<div class="col-md-12" style="color: white; text-align: center; margin: 20px 0px 30px 0px" >
						 <h2>Informe os valores desse funcionário</h2>
					</div><!--col-md-12-->
					<!--H1 --> 

					<!--Voto Radio--> 
					<div class="col-md-12" style=" margin: 10px 0px 10px; border: ">
 
						<div class="row" style=""> 

	 						<div class="col-md-6" style=""> 
	 							<label class="checkbox" style="padding-left: 15px;">
									<input type="checkbox" name="valores[]" id="t" value="determinacao" onclick="pegaRadio()" >  
								 <span style="color:blue ; font-size: 22px; margin-left: 8px"> <strong>Determinação </strong> </span><br>
								</label><br>

								<label class="checkbox" style="padding-left: 15px;">
									<input type="checkbox" name="valores[]" id="t" value="simplicidade" onclick="pegaRadio()">  
								   <span style="color:#D2691E ; font-size: 22px; margin-left: 8px"> <strong> Simplicidade </strong> <br> </span>
								</label><br>

								<label class="checkbox" style="padding-left: 15px;">
									<input type="checkbox" name="valores[]" id="t" value="Disponibilidade" onclick="pegaRadio()">  
								   <span style="color:#00FF00 ; font-size: 22px; margin-left: 8px"> <strong> Disponibilidade </strong> </span> <br>
								</label><br> 

								<label class="checkbox" style="padding-left: 15px;">
									<input type="checkbox" name="valores[]" id="t" value="Humildade" onclick="pegaRadio()">  
								   <span style="color:#B0E0E6; font-size: 22px; margin-left: 8px"> <strong> Humildade </strong> </span> <br>
								</label><br>  
	 						</div><!--col-md-6-->  

	 						<div class="col-md-6" style=""> 
	 							<label class="checkbox" style="padding-left: 15px;">
									<input type="checkbox" name="valores[]" id="t" value="Franqueza" onclick="pegaRadio()" >  
								 <span style="color:#FFA07A; font-size: 22px; margin-left: 8px"> <strong>Franqueza </strong> </span><br>
								</label><br>

								<label class="checkbox" style="padding-left: 15px;">
									<input type="checkbox" name="valores[]" id="t" value="Disciplina" onclick="pegaRadio()">  
								   <span style="color:#FFFF00 ; font-size: 22px; margin-left: 8px"> <strong> Disciplina </strong> <br> </span>
								</label><br>

								<label class="checkbox" style="padding-left: 15px;">
									<input type="checkbox" name="valores[]" id="t" value="atitudeDeDono" onclick="pegaRadio()">  
								   <span style="color:#00FFFF ; font-size: 22px; margin-left: 8px"> <strong> Atitude de Dono </strong> </span> <br>
								</label><br> 
	 						</div><!--col-md-6--> 
 						</div><!--/row--> 
 
					</div><!--col-md-12-->
					<!--voto --> 

					<!--textearea Comentário--> 
					<div class="col-md-12" style="margin-bottom: 20px;"  > 

						<div class="col-md-12" style="">
							<h4 style="color: white">Deixe aqui o seu feedback para o funcionário:</h4>
						</div><!--col md 12--> 

						<div class="col-md-6" style="">
							 <textarea cols="90" rows="4" name="comentario"></textarea>
						</div><!--col md 12--> 

						<button class="btn btn-primary mb-2 ml-3 mt-2" id="btnVoto" style="margin-top: 2px">Deixe aqui seu voto e feedback </button> 
						
					</div><!--col md 12--> 
					<!--textearea Comentário-->  
				</div><!--div cod md do h1 até o textearea -->
					  
				</div><!--/row votação --> 
			</div><!--/Container -->
		</div><!--/Container-fluid votacao -->
	</form><!--/form -->

 


	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>