<?php 
	
	namespace App\Controller;

	require_once("../../vendor/autoload.php");
	use App\Model\Login;
	use App\Model\ConexaoBDO;
	use App\Model\LoginModel;


	if(isset($_POST['voto']) == ''){
		header('Location:../../index.php?voto=null');

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
	    $votada = new Login($conn, $votada);
	    $votada->votouem();

	    //aqui vou somar os votos da pessoa votada
	    $votos->__set('pessoaVotada', $pessoaVotada);
	    $votos = new Login($conn, $votos);
	    $votos->somaVotos();

	    echo 'Usuário logado é o '.$usuarioLogado. "<br>";
	    echo 'Ele votou no '.$pessoaVotada;

	    /*

	    $conn = new ConexaoBDO();  
	    $userLogado = new LoginModel();

	    //aqui estou pegando a pessoa que está logada no sistema
	    $userLogado->__set('user', $_SESSION['user']);

	    $userOK = new login($conn, $userLogado);
	    //aqui estou passando para a função adicionar que ela já votou
	    $userOK->userLogado();

	    //aqui vou colocar o voto na pessoa que o usuário logado votou
	    $userLogado->__set('usuarioLogado', $_SESSION['user']);
	    $userLogado->__set('pessoaVotada', $pessoaVotada); 
	    $userLogado = new login($conn, $userLogado);
	    $result = $userLogado->votouem();

	    //aqui vou add os votos na pessoa votada
	    //$pessoaVotada->__set('pessoaVotada', $pessoaVotada);
	    //$pessoaVotada = new Login ($conn, $pessoaVotada);
	    //$pessoaVotada->somaVotos();


	    //se tivermos sucesso na inclusão, ele redireciona para o index.
	    if($result >0){ 
	    	header('Location:../../index.php?voto=ok');
	    }else{
	    	echo "Ninguém foi votado";
	    }

	*/
	}

 ?>