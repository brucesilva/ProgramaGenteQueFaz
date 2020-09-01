<?php  

	 

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


		<!-- <link rel="stylesheet" type="text/css" href="css/styleVotacao.css"> -->

		<!-- script -->
		<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

		 
</head>
<body>

		<div class="container " id="principal" style="border: 1px solid red">Container

			<div class="row"> 
				<div class="col-md-6 conteudo2" style="border: 1px solid blue; height: 300px;">
					Conteudo 1
					 
					<button id="cont2"> te </button> 

					<ul >
						<li >
							<a  href="">teste</a>
						</li>
					</ul>

				</div><!--/Conteudo1-->

			<div class="col-md-6" id="conteudo2" style="border: 1px solid green">
				<div>
					Conteudo 2
					Conteudo 2
					Conteudo 2
					Conteudo 2 
					Conteudo 2
				</div>
			</div><!--/Conteudo2-->


			</div><!--/row--> 
		</div><!--/Container-->


		<script type="text/javascript">
			
			$(document).ready(()=>{
				$('#cont2').on('click', () => {
					$('#conteudo2').load('teste.html')
					alert('oi')
				})
			})

		</script>


</body>
</html>