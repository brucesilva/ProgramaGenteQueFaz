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

	<link rel="stylesheet" href="css/style3.css">

	 <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

		 
		<!-- Conteudo -->
    <section id="servicos">
      <div class="container">
        <div class="row">
          <!-- coluna para o album -->
          <div class="col-md-6" >

            <div class="row albuns">
              <div class="col-md-6">
                                    <!-- class="img-responsive" para tornar a img responsiva -->
                <img src="../img/seara.png" class="img-responsive"> 
              </div><!-- col-md-6 album -->

              <div class="col-md-6">
               <img src="../img/fundo.jpg" class="img-responsive">
              </div><!-- col-md-6 album --> 
            </div> <!-- row -->

            <div class="row albuns">
              <div class="col-md-6">
                                    <!-- class="img-responsive" para tornar a img responsiva -->
                <img src="../img/fundo.jpg" class="img-responsive"> 
              </div><!-- col-md-6 album -->

              <div class="col-md-6">
               <img src="../img/fundo.jpg" class="img-responsive">
              </div><!-- col-md-6 album --> 
            </div> <!-- row -->

          </div><!-- col-md-6 album -->

          <!-- coluna para o Serviços -->
          <div class="col-md-6" >
            <h2>O que o Spotify tem?</h2>

            <h3>Músicas</h3>
            <p>O spotify tem milhoes de músicas, Escute seus sons favoritos, descubra novas músicas
            e reúna seus favoritos em um só lugar.</p>

            <h3>Playlists</h3>
            <p>O spotify tem milhoes de músicas, Escute seus sons favoritos, descubra novas músicas
            e reúna seus favoritos em um só lugar.</p>

            <h3>Novos Lançamentos</h3>
            <p>O spotify tem milhoes de músicas, Escute seus sons favoritos, descubra novas músicas
            e reúna seus favoritos em um só lugar.</p>

          </div><!-- col-md-6 Serviçoss -->
        </div><!-- row --> 
      </div><!-- container -->
    </section><!-- section -->
			

	 
	 


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>


