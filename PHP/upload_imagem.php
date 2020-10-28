<center><div id="menu">
		<a href= "http://kapinawa.tk">Home</a> | <a href= "http://kapinawa.tk/foto/">Visualizar fotos</a></div>

<h1>Cadastrar Imagem</h1>
		<form method="POST" action="proc_upload.php" enctype="multipart/form-data">
			<input name="arquivo"  type="file" onchange="previewImagem()"><br><br>
			<img style="width: 150px; height: 150px;"><br><br>
			
			Informações: <input type="text" name="descricao" placeholder="" required></br></br>
			
			<input type="submit" value="Cadastrar">
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
