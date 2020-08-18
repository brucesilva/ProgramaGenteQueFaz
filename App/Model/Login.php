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

			$sql = "SELECT * FROM login order by votos desc";
			$stmt = $this->conn->prepare($sql);
			$stmt->execute();
			$users = $stmt->fetchAll(\PDO::FETCH_OBJ); 
		 	

		 	//tirei esse aqui para não aparecer no adm
		 	//dai passo a váriavel que contem todos os dados
			/* foreach ($users as $key => $user) {
			 	echo $user->user. " Votos -> ". $user->votos ;
			 	echo '<br>';
			 } 
			*/
			 return $users;

		}

		public function vencedor(){
			$sql = "SELECT nome, user, votos FROM login WHERE votos = (SELECT MAX(votos) FROM login)";
			$stmt = $this->conn->prepare($sql);
			$stmt->execute();

			$vencedor = $stmt->fetchAll(\PDO::FETCH_OBJ);

			return $vencedor; 

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

			//aqui preciso incluir os valores e o comentario que a pessoa fez para o funcionário
			$sql = "UPDATE login SET valores = :valores, comentario=:comentario WHERE user =:userLogado";
			$stmt = $this->conn->prepare($sql);
			$stmt->bindValue(':valores', $this->login->__get('valores')); 
			$stmt->bindValue(':comentario', $this->login->__get('comentario'));
			$stmt->bindValue(':userLogado', $this->login->__get('usuarioLogado')); 

			$stmt->execute();

		}

		public function somaVotos(){

			$sql = "UPDATE login SET votos = votos + 1 WHERE user = :pessoaVotada";
			$stmt = $this->conn->prepare($sql);
			$stmt->bindValue(':pessoaVotada', $this->login->__get('pessoaVotada'));

			$resul = $stmt->execute();
			//echo "o usuario ja " .$resul;

			//echo "A pessoa votada é ". $this->login->__get('pessoaVotada') ."<br>";
		}

		public function verificaSituacao(){

			$sql = "SELECT * FROM login WHERE javotou = 'Sim' and user = :usuarioLogado"; 
			$stmt = $this->conn->prepare($sql);
			$stmt->bindValue(':usuarioLogado', $this->login->__get('user'));

		    $stmt->execute();

			return $stmt->rowCount();
			
			
		}






	}//fecha a classe principal

 ?>