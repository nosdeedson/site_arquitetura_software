<?php
	require_once(dirname(__FILE__)."/view/listaUsuario.class.php");
	require_once(dirname(__FILE__)."/model/usuario.class.php");
	require_once(dirname(__FILE__)."/dal/dao.class.php");
	require_once(dirname(__FILE__)."/view/registraUsuario.class.php");
	require_once(dirname(__FILE__)."/model/instrumento.class.php");
	
	$instru = new Instrumento(0);
	$instru->setNomeInstrumento("violão");
	$conexao = new Dao();
	$conexao->inserirInstrumento($instru);

?>
