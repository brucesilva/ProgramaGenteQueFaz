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

	 $user = $_POST['user'];
	 $senha = $_POST['password'];


	 if($user == 'admin' && $senha == '123'){ 
	 	 header('Location:../../adm.php?adm=ok');


	 } else{

	 //Lógica pra pegar o usuário e a senha e verificar se os dois existem
	 //Aqui estou verificando se o formulário está sendo preenchido
	 if(isset($_POST['user']) && $_POST['user'] == '' || $_POST['password'] == ''){
	 	 header('Location:../../login.php?false'); 

	 }else{	
	 	//aqui vou enviar o usuário e o login para verificar se existe no BDO
	 	 
	 	$conn = new ConexaoBDO();
	 	$loginModel = new LoginModel();
 
	 	//Enviando os dados do formulário do Index
	 	$loginModel->__set('user', $_POST['user']);
	 	$loginModel->__set('senha', $_POST['password']);

	 	//echo "o usuario aqui e " .$_POST['user']. "<br>";

	 	$login = new Login($conn, $loginModel);

	 	//aqui vou verificar se o usuário já votou 
	 	//se ele já tiver votado, mando para pág index com paramentro true
	 	 if($login->verificaSituacao() > 0){
	 	 	 header('Location:../../login.php?javotou=true');

	 	 } else {
		 	/* se caso tenha o usuário e a senha, o retorno é 1 */
		 	if($login->autenticacao() > 0){ 
		 		//aqui se o usuário estiver ok, eu crio uma sessão para ser recuperado na página de votação
		 		session_start();
		 		$_SESSION['logado'] = true;
		 		//aqui estou passando a pessoa que está logada no sistema
		 		$_SESSION['user'] = $_POST['user']; 
		 		
				//header('Location:../../votacao.php');
				 header('Location:../../votacao2.php');
			}else{
				 header('Location:../../login.php?login=1');
			}

		  } 
	 	}//fecha o if do adm e da senha
	}
 

 ?>