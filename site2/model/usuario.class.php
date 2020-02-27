<?php
class Usuario{
	private $codigo;
	private $nome;
	private $senha;
	
	public function __construct($codigo){
		$this->codigo =$codigo;
	}

	
	public function getCodigo()
	{
		return $this->codigo;
	}
	
	public function getNome(){
		return $this->nome;
	}
	
	public function getSenha(){
		return $this->senha;
	}
	
	public function setNome($nome){
		$this->nome = $nome;
	}
	
	public function setSenha($senha){
		$this->senha = $senha;
	}
}
?>
