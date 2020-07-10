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
	 	$login->autenticacao();
	 	 
	 }

 ?>