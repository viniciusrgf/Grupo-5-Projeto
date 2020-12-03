<?php
	$servidor = "localhost";
	$usuario = "u911921446_Grupo5";
	$senha = "Grupo5bd";
	$dbname = "u911921446_Grupo5BD";
	
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	if(!$conn){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
		//echo "Conexao realizada com sucesso";
	}	
	
?>