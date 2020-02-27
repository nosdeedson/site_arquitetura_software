<?php
class Instrumento{
	private $codigoInstrumento;
	private $nomeInstrumento;
	
	public function __construct($codigoInstrumento){
		$this->codigoInstrumento = $codigoInstrumento;
	}
	
	public function getCodigoInstrumento(){
		return $this->codigoInstrumento;
	}
	
	public function getNomeInstrumento(){
		return $this->nomeInstrumento;
	}
	
	public function setNomeInstrumento($nomeInstrumento){
		$this->nomeInstrumento = $nomeInstrumento;
	}
}//fim classe
?>
