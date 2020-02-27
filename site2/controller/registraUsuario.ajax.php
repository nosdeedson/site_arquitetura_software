<?php
	$codigo = $_GET['codigo']; 
	$nome = $_GET['nome'];
	$senha = $_GET['senha'];

	
	
	require_once(dirname(__FILE__)."/../model/usuario.class.php");
	require_once(dirname(__FILE__)."/../dal/dao.class.php");

	
	$user = new Usuario($codigo);
	$user->setNome($nome);
	$user->setSenha($senha);
	
	
	$conexao = new Dao();
	$conexao->inseriUsuario($user);
?>
