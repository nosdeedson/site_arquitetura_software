function car_lista()
{
	var ru = new XMLHttpRequest();
	ru.onreadystatechange = function()
	{
		if(ru.readyState == 4)
		{
			document.getElementById('lista').innerHTML = ru.responseText;
		}
	}
	ru.open("GET","controller/carregaLista.ajax.php?data="+new Date(), true);
	ru.send();
}
function edt_usuario(codigo){
	var eu= new XMLHttpRequest();
	eu.onreadystatechange = function(){
		if(eu.readyState == 4){
			document.getElementById('usuario').innerHTML = eu.responseText;
		}
	}
	eu.open("GET","controller/editarUsuario.ajax.php?codigo="+codigo, true);
	eu.send();
}
function excluir_usuario(codigo)
{
	var ru = new XMLHttpRequest();
	ru.onreadystatechange = function()      
	{
		if(ru.readyState == 4)
		{
			car_lista();
		}
	}	
	ru.open("GET","controller/excluirUsuario.ajax.php?codigo="+	codigo, true);
	ru.send();
}
function mostrarInstrumento(){
	document.getElementById("instrumento").innetHTML = 'visible';
}

function reg_usuario(codigo)
{
	var nome = document.getElementById('nomeUsuario').value;
	var senha = document.getElementById('senhaUsuario').value;
	
	var ru = new XMLHttpRequest();
	ru.onreadystatechange = function()
	{
		if(ru.readyState == 4)
		{
			car_lista();
		}
	}
	ru.open("GET","controller/registraUsuario.ajax.php?codigo="+codigo+
				  "&nome="+nome+"&senha="+senha, true);
	ru.send();
}



