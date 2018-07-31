<?php

function pegarTodosUsuarios () {
	$cnx = mysqli_connect (“localhost”,“root”,“”,“lojaa”);
	if (!$cnx) {
 		echo("Connect failed: " . mysqli_connect_error());
	}
	$todos = "SELECT * FROM Clientes";
	$resultado = mysqli_query($cnx, $todos);
	while($linha = mysqli_fetch_assoc($resultado)){
 	echo " id: " . $linha["id"];
 	echo " nome: " . $linha["nome"] . "<br>"; }
}

pegarTodosUsuarios();

?>











