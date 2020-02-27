<?php
class Helper{
	private $con;
	
	public function __construct(){
		require_once(dirname(__FILE__)."/../../../../protec/conecta_site.php");
		$this->con = conecta_site();
	}
	
	public function listaUsuario(){
		$listaDeUsuario = Array();
		
		$listaBD = $this->con->prepare("SELECT codigo FROM usuario ORDER BY nome");
		$listaBD->execute();
		while($lista = $listaBD->fetch(PDO::FETCH_OBJ))
			array_push($listaDeUsuario, $lista->codigo);
			
		return $listaDeUsuario;
	}
}
?>
