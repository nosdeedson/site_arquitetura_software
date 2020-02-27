<?php
class Dao{
	private $con;
	
	public function __construct(){
		require_once(dirname(__FILE__)."/../../../../protec/conecta_site.php");
		$this->con = conecta_site();
	}
	
	/* funções intrumento*/
	public function inserirInstrumento($instrumento){
		$codigoInstrumento = $instrumento->getCodigoInstrumento();
		$nomeInstrumento = $instrumento->getNomeInstrumento();
		
		$query = $this->con->prepare("INSERT INTO instrumento VALUES(?, ?)");
		$query->bindParam(1,$codigoInstrumento);
		$query->bindParam(2,$nomeInstrumento);
		if(!$query->execute()){
			$atualiza = $this->con->prepare("UPDATE instrumento SET nomeInstrumento=? WHERE codigoInstrumento=?");
			$atualiza->bindParam(1,$nomeInstrumento);
			$atualiza->bindParam(2,$codigoInstrumento);
			if($atualiza->execute())
				return 1;
			return 0;
		}
		return 1;
	}
	/* fim das funções instrumento */
	/* funções usuario */
	public function carregaUsuario($codigo){
		require_once(dirname(__FILE__)."/../model/usuario.class.php");
		
		$user = new Usuario($codigo);
		
		$query = $this->con->prepare("SELECT nome, senha FROM usuario WHERE codigo=?");
		$query->bindParam(1,$codigo);
		$query->execute();
		
		if($query->rowCount() == 0)
			return NULL;
			
		$usuario = $query->fetch(PDO::FETCH_OBJ);
		$user->setNome($usuario->nome);
		$user->setSenha($usuario->senha);
		
		return $user;
	}
	public function inseriUsuario($user){
		

		$codigo = $user->getCodigo();
		$nome = $user->getNome();
		$senha = $user->getSenha();
		
		$query = $this->con->prepare("INSERT INTO usuario values (?, ?, ?)");
		$query->bindParam(1, $codigo);
		$query->bindParam(2, $nome);
		$query->bindParam(3, $senha);
		
		if(!$query->execute()){
			$atualiza = $this->con->prepare("UPDATE usuario SET nome=?, senha=? WHERE codigo=?");
			$atualiza->bindParam(1, $nome);
			$atualiza->bindParam(2, $senha);
			$atualiza->bindParam(3, $codigo);
			/* o codigo é o terceiro valor pois vai ser usado na clausula where
			se os valores fossem colocados na ordem do banco daria errado pois a senha iria ser usada na clausula where*/
			
			if($atualiza->execute())
				return 1;
			return 0;
		}
		return 1;
	}
	
	public function removeUsuario($usuario){
		
		$codigo = $usuario->getCodigo();
		$query = $this->con->prepare("DELETE FROM usuario WHERE codigo=?");
		
		$query->bindParam(1,$codigo);
		if($query->execute()){
			return 1;
		}
			return 0;
	}
}//fim classe
?>
