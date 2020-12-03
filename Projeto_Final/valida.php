<?php
	session_start();	
	//Incluindo a conexão com banco de dados
	include_once("conexao.php");	
	//O campo usuário e senha preenchido entra no if para validar
	if((isset($_POST['cpf'])) && (isset($_POST['senha']))){
		$usuario = mysqli_real_escape_string($conn, $_POST['cpf']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
		//$usuario = $_POST['cpf'];
		$senha = mysqli_real_escape_string($conn, $_POST['senha']);
		//$senha = $_POST['senha'];
		//$senha = md5($senha);
			
		//Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
		$result_usuario = "SELECT * FROM Usuário WHERE cpf = $usuario && Senha = '$senha' LIMIT 1";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		$resultado = mysqli_fetch_assoc($resultado_usuario);
		
		//Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
		if(isset($resultado)){
			$_SESSION['usuarioId'] = $resultado['CPF'];
			$_SESSION['usuarioNome'] = $resultado['Nome'];
			$_SESSION['usuarioNiveisAcessoId'] = $resultado['Nivel_acesso'];
		//	$_SESSION['usuarioEmail'] = $resultado['email'];
			if($_SESSION['usuarioNiveisAcessoId'] == "1"){
				header("Location: coordenador.php");
			}elseif($_SESSION['usuarioNiveisAcessoId'] == "2"){
				header("Location: professor.php");
			}else{
				header("Location: outros_usuarios.php");
			}
		//Não foi encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
		//redireciona o usuario para a página de login
		}else{	
			//Váriavel global recebendo a mensagem de erro
			$_SESSION['loginErro'] = "Usuário ou senha inválido" ;
			header("Location: login.php");
		}
	//O campo usuário e senha não preenchido entra no else e redireciona o usuário para a página de login
	}else{
		$_SESSION['loginErro'] = "Usuário ou senha inválido";
		header("Location: login.php");
	}
?>