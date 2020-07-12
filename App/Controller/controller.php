<?php  
	namespace App\Controller;

	require_once("../../vendor/autoload.php");

	use App\Controller\testeController;
	use App\Model\ConexaoBDO;
	use App\Model\Login;
	use App\Model\LoginModel;
	  
	//use App\Model\ConexaoBDO;
	//use App\Model\LoginModel;


	 echo '<pre>';
	 echo print_r($_POST);
	 echo '</pre>';

	 //Aqui estou verificando se o formulário está sendo preenchido
	 if(isset($_POST['user']) && $_POST['user'] == '' || $_POST['password'] == ''){
	 	header('Location:../../index.php?false');
	 
	 }else{

	 	//aqui vou enviar o usuário e o login para verificar se existe no BDO
	 	 
	 	$conn = new ConexaoBDO();
	 	$loginModel = new LoginModel();

	 	//Enviando os dados do formulário do Index
	 	$loginModel->__set('user', $_POST['user']);
	 	$loginModel->__set('senha', $_POST['password']);

	 	$login = new Login($conn, $loginModel);

	 	/*se caso tenha o usuário e a senha, o retorno é 1 */
	 	if($login->autenticacao() > 0){ 
	 		//aqui se o usuário estiver ok, eu crio uma sessão para ser recuperado na página de votação
	 		session_start();
	 		$_SESSION['logado'] = true;
	 		//aqui estou passando a pessoa que está logada no sistema
	 		$_SESSION['user'] = $_POST['user']; 
	 		
			header('Location:../../votacao.php');
		}else{
			header('Location:../../index.php?login=1');
		}
	 	
	}

 ?>