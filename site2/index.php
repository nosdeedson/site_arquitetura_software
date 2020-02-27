<HTML>
	<HEAD>
		<TITLE>Site</TITLE>
			<LINK rel='stylesheet' href='view/estilo/estilo.css'/>
			<SCRIPT type='text/javascript' src='view/script.js'> </SCRIPT>
	</HEAD>
		
	<BODY>
		<DIV id='mestra' class='mestra'>
			<DIV id='banner' class='banner'> </DIV>
			<DIV id='usuario' class='usuario'>
				<?php
					require_once(dirname(__FILE__)."/view/registraUsuario.class.php");
					$inseriUserBD = new RegistraUsuario();
					$inseriUserBD->draw();
				?>
			</DIV>
			<DIV id='conteudo' class='conteudo'>
				<DIV id='lista' class='lista'>
					<?php
						require_once(dirname(__FILE__)."/view/listaUsuario.class.php");
						$teste = new Lista();
						$teste->draw();
					?>
				</DIV>
			</DIV>
			<div hidden id='instrumento' class='instrumento'>
				<div id='instrUsuario' class='instrUsuario'>
					intrumento aqui
				</div>
			</div>
			<DIV id='rodape' class='rodape'> </DIV>
		</DIV>
	</BODY>
</HTML>
