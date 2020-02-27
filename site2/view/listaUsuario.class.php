<?php
class Lista{
		private $conexao;
		private $ajuda;
		
		public function __construct(){
			require_once(dirname(__FILE__)."/../dal/helper.class.php");
			require_once(dirname(__FILE__)."/../dal/dao.class.php");
			
			$this->conexao = new Dao();
			$this->ajuda = new Helper();
		}
		
		public function draw(){
			echo "
		<TABLE style='width: 100%'>
			<TR>
				<TD style='width:60%'> Nome </TD>
				<TD style='width:20%'>Instrumento</TD>
				<TD style='width:20%'> Excluir </TD>
			</TR>";
		
		$lista = $this->ajuda->listaUsuario();
		for($i = 0; $i < count($lista); $i++)
		{
			$usuario = $this->conexao->carregaUsuario($lista[$i]);
			echo "
			<TR>
				<TD style='width:80%'>".$usuario->getNome()."</TD>
				<TD style='width:80%'>
					<BUTTON onclick='mostrarInstrumento()'>Ver</BUTTON>
				</TD>
				<TD style='width:20%'>
					<BUTTON onclick='excluir_usuario(".$lista[$i].")'>deletar</BUTTON>
				</TD>
			</TR>";
		}
		
		echo "
		</TABLE>";
		}
}//fim classe

?>
