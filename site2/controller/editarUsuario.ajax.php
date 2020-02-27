<?php
	$codigo = $_GET['codigo'];
				
	require_once(dirname(__FILE__)."/../view/registraUsuario.class.php");
	$novoUser = new RegistraUsuario($codigo);
	
	$novoUser->draw();	
	
?>
