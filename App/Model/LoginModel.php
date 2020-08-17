<?php 

namespace App\Model;

class LoginModel{
	private $id;
	private $user;
	private $senha;
	private $usuarioLogado;
	private $pessoaVotada;
	private $valores;
	private $comentario;

	public function __set($atributo, $valor){
		$this->$atributo = $valor;
	}

	public function __get($atributo){
		return $this->$atributo;
	}
}
 

?>