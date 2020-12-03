<h1> Área do Professor </h1>
<?php
	session_start();
	echo "Usuario: ". $_SESSION['usuarioNome'];	
?>
<br>
<a href="sair.php">Sair</a>