<!DOCTYPE html>
<html lang="pt-br">
  <head>
    
  <title>Kapinawa</title>
  <meta charset="utf-8">
  <!--<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
!-->
      
    <title>Cadastro de arquivos</title>
    <meta charset="utf-8">
    <style>
.menu {
    list-style: none;   
    margin: 0;
    padding: 0;
}

	.menu li {
		display:inline-block;
		padding: 6px;
		border: 1px solid #DDD;
		border-radius: 2px; 
		margin-right: 4px;
        border-bottom: 0;
	}

article {
	position: relative;
}

section {
	position: absolute;
	padding: 8px;
	border: 1px solid #DDD;
	border-radius: 2px;
	background: #FFF;
    width: 300px;
	z-index: 0;
}

	section.active {
		z-index: 1;
	}

	/* Target cria a referência do elemento clicado */
	section:target {
		z-index: 2
	}

</style>
  </head>
  <body>
      
<body>
<!--
<div class="container">
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="https://kapinawa.tk/#">Kapinawa</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        
      </li>
      <li class="nav-item">
      </li>
      <li class="nav-item dropdown">
    
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <div class="dropdown-divider"></div>
        </div>
      </li>
      <li class="nav-item">
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <meta name="viewport" content="width=device-width, initial-scale=1">

<img src="https://pbs.twimg.com/profile_images/859897103123927040/ex-eLEzP_400x400.jpg" alt="Avatar" style="width:50px">
<style>

</style>
!-->

<!-- sample html for this button-->

<!-- stylesheet for this button -->
<style type="text/css">
  .button {
    backface-visibility: hidden;
  position: relative;
  cursor: pointer;
  display: inline-block;
  white-space: nowrap;
  background: #ff934f;
  border-radius: 010px;
  border: 1px solid #ff934f;
  border-width: 1px 1px 1px 1px;
  padding: 8px 16px 8px 16px;
  box-shadow: inset 0px 1px 0px rgba(255,255,255,1),0px 1px 3px rgba(0,0,0,0.3);
    color: #fff;
  font-size: 16px;
  font-family: Poppins;
  font-weight: 600;
  font-style: normal;
  text-shadow: 0px -1px 0px rgba(0,0,0,0.4)
  }
  .button > div {
    color: #999;
  font-size: 10px;
  font-family: Helvetica Neue;
  font-weight: initial;
  font-style: normal;
  text-align: center;
  margin: 0px 0px 0px 0px
  }
  .button > i {
    font-size: 1em;
  border-radius: 0px;
  border: 0px solid transparent;
  border-width: 0px 0px 0px 0px;
  padding: 0px 0px 0px 0px;
  margin: 0px 0px 0px 0px;
  position: static
  }
  .button > .ld {
    font-size: initial
  }
</style>

  

    </form>
  </div>
</nav>


<body bgcolor="FCF7F0"> 
    <center>
        <!--
        <div id="menu">
		    <a href= "http://kapinawa.tk">Home</a> | <a href= "http://kapinawa.tk/visualizar_imagem.php">Visualizar fotos</a>
		</div>
!-->
		<form method="POST" action="proc_upload_arquivo.php" enctype="multipart/form-data">
    			<input name="arquivo"  type="file" onchange="previewImagem()"><br><br>
    			<img style="width: 300px; height: 260px;"><br><br>
    			
    			Descrição: <input type="text" name="descricao" placeholder="" required></br></br>
    			ISBN: <input type="text" name="isbn" placeholder="" required></br></br>
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
    
  </body>
</html>



