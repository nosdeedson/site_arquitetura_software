<?php
class UsuarioInstrumento{
	private $codigoUsuarioInstrumento;
	private $keyInstrumento;
	private $keyUsuario;
	
	public function __construct($codigoUsuarioInstrumento){
		$this->codigoUsuarioInstrumento = $codigoUsuarioInstrumento;
	}
	
	public function getCodigoUsuarioInstrumento(){
		return $this->codigoUsuarioInstrumento;
	}
	
	public function getKeyInstrumento(){
		return $this->keyInstrumento;
	}
	
	public function getKeyUsuario(){
		return $this->keyUsuario;
	}
	
	public function setKeyInstrumento($keyInstrumento){
		$this->keyInstrumento = $keyInstrumento;
	}
	
	public function setKeyUsuario($keyUsuario){
		$this->keyUsuario = $keyUsuario;
	}	
} //fim classe
?>
