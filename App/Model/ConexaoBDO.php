<?php 

namespace App\Model;

class ConexaoBDO{
	private $host = "localhost";
	private $dbname = "genteqfaz";
	private $user = "root";
	private $senha = "";

	public function Conecta(){

		try { 

			$conn = new \PDO("mysql:host=$this->host;
				dbname=$this->dbname",
				"$this->user" , 
				"$this->senha"
			); 
			return $conn;

		} catch (PDOException $e) {
			echo "Erro classe--> ".$e->getMessage();
		}   
	}
}


 ?>