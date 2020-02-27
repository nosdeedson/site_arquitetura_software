<?php
class RegistraUsuario{
		private $usuario;
		
		public function __construct($codigo = 0){
		if($codigo != 0)
		{
			require_once(dirname(__FILE__)."/../dal/dao.class.php");
			$dao = new Dao();
			$this->usuario = $dao->carregaUsuario($codigo);
		}
		else
		{
			require_once(dirname(__FILE__)."/../model/usuario.class.php");		
			$this->usuario = new Usuario(0);
			$this->usuario->setNome("");
			$this->usuario->setSenha("");
		}
	}
		
		public function draw(){
			
			echo"
				<div style='100%'; text-align: center; top:2px; position: relative>
					<input id='codigoUsuario' type='hidden' value='".$this->usuario->getCodigo()."'/>
					<input id='nomeUsuario' type='text' style='width:45%' value='".$this->usuario->getNome()."'/>
					<input id='senhaUsuario' type='text' style='width:25%' value='".$this->usuario->getSenha()."'/>
					<BUTTON style='width: 20%' onclick='reg_usuario(".$this->usuario->getCodigo().")' > OK </BUTTON>
				</div>
			";
		}
}
?>
