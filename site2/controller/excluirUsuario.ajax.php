<?php /* tudo ok por aqui */
	$codigo = $_GET['codigo'];
	require_once(dirname(__FILE__)."/../model/usuario.class.php");
	require_once(dirname(__FILE__)."/../dal/dao.class.php");

	$conexaoBD = new Dao();
	
	$user = $conexaoBD->carregaUsuario($codigo);
	if($user){
		$conexaoBD->removeUsuario($user);
	}
?>
