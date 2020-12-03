<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="refresh" content="1; URL=https://kapinawa.tk/sistema/upload_arquivos.php "/>
	</head>
	<body>
	    
	    <center>
        <!--
        <div id="menu">
		    <a href= "http://kapinawa.tk">Home</a> | <a href= "http://kapinawa.tk/visualizar_imagem.php">Visualizar fotos</a>
		</div>
!-->
		<form method="POST" action="proc_arquivos.php" enctype="multipart/form-data">
    			<input name="arquivo"  type="file" onchange="previewImagem()"><br><br>
    			<img style="width: 300px; height: 260px;"><br><br>
    			
    			Informações: <input type="text" name="descricao" placeholder="" required></br></br>
    			
    			<input  type="submit" value="Cadastrar">
    		</form>		
    		
    		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    		
    		<script>
    			function previewImagem(){
    				var imagem = document.querySelector('input[name=arquivo]').files[0];
    				var preview = document.querySelector('img');
    				
    				var reader = new FileReader();
    				
    				reader.onloadend = function () {
    					preview.src = reader.result;
    				}
    				
    				if(imagem){
    					reader.readAsDataURL(imagem);
    				}else{
    					preview.src = "";
    				}
    			}
    		</script>
    </center>
    
		<?php
			include_once("conexao.php");
			$arquivo 	= $_FILES['arquivo']['name'];
			$descricao = $_POST['descricao'];
			$isbn = $_POST['isbn'];
			//Pasta onde o arquivo vai ser salvo
			$_UP['pasta'] = 'foto/';
			
			//Tamanho máximo do arquivo em Bytes
			$_UP['tamanho'] = 1024*1024*100; //5mb
			
			//Array com a extensões permitidas
			$_UP['extensoes'] = array('png', 'jpg', 'jpeg', 'gif','mp4', 'docs', 'pdf');
			
			//Renomeiar
			$_UP['renomeia'] = false;
			
			//Array com os tipos de erros de upload do PHP
			$_UP['erros'][0] = 'Não houve erro';
			$_UP['erros'][1] = 'O arquivo no upload é maior que o limite do PHP';
			$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especificado no HTML';
			$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
			$_UP['erros'][4] = 'Não foi feito o upload do arquivo';
			
			//Verifica se houve algum erro com o upload. Sem sim, exibe a mensagem do erro
			if($_FILES['arquivo']['error'] != 0){
				die("Não foi possivel fazer o upload, erro: <br />". $_UP['erros'][$_FILES['arquivo']['error']]);
				exit; //Para a execução do script
			}
			
			//Faz a verificação da extensao do arquivo
			$extensao = strtolower(end(explode('.', $_FILES['arquivo']['name'])));
			if(array_search($extensao, $_UP['extensoes'])=== false){		
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://kapinawa.tk/upload_arquivos.php'>
					<script type=\"text/javascript\">
						alert(\"A imagem não foi cadastrada extesão inválida.\");
					</script>
				";
			}
			
			//Faz a verificação do tamanho do arquivo
			else if ($_UP['tamanho'] < $_FILES['arquivo']['size']){
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://kapinawa.tk/sistema/upload_arquivos.php'>
					<script type=\"text/javascript\">
						alert(\"Arquivo muito grande.\");
					</script>
				";
			}
			
			//O arquivo passou em todas as verificações, hora de tentar move-lo para a pasta foto
			else{
				//Primeiro verifica se deve trocar o nome do arquivo
				if($UP['renomeia'] == true){
					//Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .jpg
					$nome_final = time().'.pdf';
				}else{
					//mantem o nome original do arquivo
					$nome_final = $_FILES['arquivo']['name'];
				}
				//Verificar se é possivel mover o arquivo para a pasta escolhida
				if(move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta']. $nome_final)){
					//Upload efetuado com sucesso, exibe a mensagem
					
					$query = mysqli_query($conn, "INSERT INTO Livro (
					Título,Descrição,ISBN) VALUES('$nome_final','$descricao', '$isbn')");
					echo "
						<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://kapinawa.tk/sistema/upload_arquivos.php'>
						<script type=\"text/javascript\">
							alert(\"arquivo cadastrada com Sucesso.\");
						</script>
					";	
				}else{
					//Upload não efetuado com sucesso, exibe a mensagem
					echo "
						<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Aula/upload_arquivos.php'>
						<script type=\"text/javascript\">
							alert(\"Imagem não foi cadastrada com Sucesso.\");
						</script>
					";
				}
			}
			
			
		?>
		
	</body>
</html>