<?php 
	
	namespace App\Controller;

	require_once("../../vendor/autoload.php");
	use App\Model\Login;
	use App\Model\ConexaoBDO;
	use App\Model\LoginModel;

	echo '<pre>';
	print_r($_POST);
	echo '<pre>';

	//$votos = $_POST['valores'];
	$comentario = $_POST['comentario']; 
	//aqui estou passando um array para uma variavel 
	$valores = implode(', ' , $_POST['valores']);
  
	 
	if(isset($_POST['voto']) == ''){
		header('Location:../../login.php?voto=null');

	}else{
		//aqui vou fazer a lógica para inerir no BDO
		session_start();
		//Aqui estou pegando o usuário logado e em quem ele voltou
		$usuarioLogado = $_SESSION['user']; //Usuário logado
	    $pessoaVotada = $_POST['voto']; //em quem ele votou
	    //echo "pessoa votada foi ".$pessoaVotada; 

	    //Fazendo a instancia do BDO e do LoginModel que pede como parametros na classe loginModel
	    $conn = new ConexaoBDO();
	    $loginModel = new LoginModel();
	    $votada = new LoginModel();
	    $votos = new LoginModel(); 

	    //Vou adicionar o 'SIM' para a pessoa já votou
	    $loginModel->__set('usuarioLogado', $usuarioLogado);
	    $loginModel = new Login($conn, $loginModel);
	    $loginModel->javotou(); 

	    //Aqui vou adicionar a pessoa que ela votou
	    $votada->__set('pessoaVotada', $pessoaVotada);
	    $votada->__set('usuarioLogado',$usuarioLogado);
	    $votada->__set('valores', $valores);
	    $votada->__set('comentario', $comentario);
	    $votada = new Login($conn, $votada);
	    $votada->votouem();

	    //aqui vou somar os votos da pessoa votada
	    $votos->__set('pessoaVotada', $pessoaVotada);
	    $votos = new Login($conn, $votos);
	    $votos->somaVotos();

	    header('Location:../../login.php?voto=ok');

	    echo 'Usuário logado é o '.$usuarioLogado. "<br>";
	    echo 'Ele votou no '.$pessoaVotada;

	   
	}
 
 

 ?>