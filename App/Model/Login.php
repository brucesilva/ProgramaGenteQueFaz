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
			  
			$sql = "SELECT * FROM login WHERE user = :user and senha = :senha";
			$stmt = $this->conn->prepare($sql);
			$stmt->bindValue(':user', $this->login->__get('user'));
			$stmt->bindValue(':senha', $this->login->__get('senha'));

			$stmt->execute();

			if($stmt->rowCount() > 0){ 
				header('Location:../../votacao.php');
			}else{
				header('Location:../../index.php?login=1');
			} 
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

		public function teste(){
			echo "Estou na classe de login";
		}

	}//fecha a classe principal

 ?>