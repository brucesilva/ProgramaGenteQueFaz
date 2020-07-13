<?php 

	namespace App\Model;
		

	class Login{

		private $user;
		private $senha;
		private $conn;
		private $login;
	 

		public function __construct($conexao, $login){//, $user, $senha
			$this->conn = $conexao->conecta(); 
			$this->login = $login; 
		}

		public function autenticacao(){
			  
			//echo "Estou dentro do autenticacao --> ".$this->login->__get('user');
			  
			$sql = "SELECT * FROM login WHERE user = :user and cpf = :cpf";
			$stmt = $this->conn->prepare($sql);
			$stmt->bindValue(':user', $this->login->__get('user'));
			$stmt->bindValue(':cpf', $this->login->__get('senha'));

			$stmt->execute();

			//aqui verifico se ele me retorna um valor maior q 0
			//que significa que existe o usuário e a senha no BDO
			return $stmt->rowCount();
		}
 
		public function read(){
		/*Teste de conexão e para trazer os usuários do banco*/

			$sql = "SELECT * FROM login";
			$stmt = $this->conn->prepare($sql);
			$stmt->execute();
			$users = $stmt->fetchAll(\PDO::FETCH_OBJ); 
		 
			foreach ($users as $key => $user) {
			 	echo $user->user;
			 	echo '<br>';
			 } 

		}

		public function javotou(){

			$sql = "UPDATE login SET javotou = :javotou WHERE user = :usuarioLogado";
			$stmt = $this->conn->prepare($sql);
			$stmt->bindValue(':javotou', 'Sim');
			$stmt->bindValue(':usuarioLogado', $this->login->__get('usuarioLogado'));

			$stmt->execute();
		}

		public function votouem(){

			$sql = "UPDATE login SET votouem = :votouem WHERE user = :usuarioLogado"; 
			$stmt = $this->conn->prepare($sql);
			$stmt->bindValue(':votouem', $this->login->__get('pessoaVotada'));
			$stmt->bindValue(':usuarioLogado', $this->login->__get('usuarioLogado'));

			$stmt->execute();
		}

		public function somaVotos(){

			$sql = "UPDATE login SET votos = votos + 1 WHERE user = :pessoaVotada";
			$stmt = $this->conn->prepare($sql);
			$stmt->bindValue(':pessoaVotada', $this->login->__get('pessoaVotada'));

			$stmt->execute();

			//echo "A pessoa votada é ". $this->login->__get('pessoaVotada') ."<br>";
		}

		/*
		public function userLogado(){
		
			//falando que o usuário já voltou
			//$sql = "UPDATE login SET javotou = :ok WHERE user = :user";
			$sql = "UPDATE login SET javotou = ? WHERE user = ?";
			$stmt = $this->conn->prepare($sql);
			$stmt->bindValue(1, 'Sim');
			$stmt->bindValue(2, $this->login->__get('user'));

			return $stmt->execute();

		}

		public function somaVotos(){
			//	jfbdsil votou em aldines
			//aqui vou adicionar o voto na pessoa votada
			$sql = "UPDATE login SET votos = votos + 1 WHERE user :pessoaVotada";
			$stmt = $this->conn->prepare($sql);
			$stmt->bindValue('user', $this->login->__get('pessoaVotada'));

			$stmt->execute();
		}

		public function votouem(){ 
			//aqui atribuo o voto a pessoa votada
			$sql = "UPDATE login SET votouem = :votouem Where user = :user ";

			$stmt = $this->conn->prepare($sql);
			$stmt->bindValue(':votouem',$this->login->__get('user') );
			$stmt->bindValue(':user',$this->login->__get('pessoaVotada'));

			 //echo "Pessoa votada é ".$this->login->__get('user'). "<br>";
			//   echo "Pessoa logada é ".$this->login->__get('user'). "<br>";
			$stmt->execute(); 

			$sql = "UPDATE login SET votos = votos + 1 WHERE user :pessoaVotada";


		}
		*/





	}//fecha a classe principal

 ?>