<!doctype html>
<html lang="pt-br">
  <head>

    <title>Bootstrap - Sistema de grids</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <style type="text/css">
    	
    	.marcador{
    		background: #fe9d9d;
    		border: 1px solid #f94646;
    	}

    	.marcador-container{
    		background: #5bf946;
    		border: 1px solid blue;
    	}

    	.conteudo4{
    		display: none;
    		align-items: center;
    	}

    	.login2{
    		display: table; /*deixar centralizado - Esse display é pra ter o comportamento igual tabela */
			width: 100%; /*Pegando 100* */
    	}

    	 /*  Extra small devices (portrait phones, less than 576px) */
		@media (max-width: 575.98px) { 
			.conteudo1{
				display: none;
			}
			.conteudo2{
				display: none;
			}
			.conteudo3{
				display: none;
			}
			.conteudo4{
				display: block;
				border: 1px solid red;
				text-align: center; 
			}
		 }

		/* Small devices (landscape phones, less than 768px)*/
		@media (max-width: 767.98px) { 
			.conteudo1{
				display: none;
			}
			.conteudo2{
				display: none;
			}
			.conteudo3{
				display: none;
			}
			.conteudo4{
				display: block;
				border: 1px solid red;
				text-align: center; 
			}
		 }

		/* Medium devices (tablets, less than 992px)*/
		@media (max-width: 991.98px) { 

		 }

		/* Large devices (desktops, less than 1200px)*/
		@media (max-width: 1199.98px) { 

		 }

    </style>



  </head>

  <body>

  	<div class="container marcador-container"> 
  		<div class="row">
  			<div class="col-sm-6 col-md-2 marcador conteudo1">
  				Conteudo 1
  			</div>

  			<div class="col-sm-1 col-md-8 marcador conteudo2">
  				Conteudo 2
  			</div>

  			<div class="col-sm-5 col-md-2 marcador conteudo3">
  				Conteudo 3
  			</div>
 
  			<div class="row login2">
				<div class="col-md-6 colInputs conteudo4">
					<label class="label1" style="color: white; font-size: 17px;">Please log on</label><br> 
					<label class="label" style="color: gray; font-size: 12px; text-align: right;"> User name:</label><br>
					<input type="text" name="" class=""><br>
					<label class="label" style="color: gray; font-size: 12px;">Password</label><br>
					<input type="password" name=""><br>
					<button class="btn btn-primary">Submit</button>   
				 </div>
			</div>

  		</div> 
  	</div>
 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>