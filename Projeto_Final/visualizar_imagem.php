<?php 
    $servidor = "localhost";
    $usuario = "u911921446_Grupo5";
	$senha = "Grupo5bd";
	$dbname = "u911921446_Grupo5BD";
	
    $banco = new mysqli($servidor, $usuario, $senha, $dbname);
    $sql = "SELECT * FROM u911921446_Grupo5BD.imagens";
    $resultado = $banco->query($sql);
    while ($linha = mysqli_fetch_array($resultado)) {
        $Grupo5BD[] = $linha;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

	<title>Visualização de Imagens</title>
	<meta charset="utf-8">
	<style type="text/css">
	    img{border-radius: 15px;}
        .row {
            margin-top: 10px;
            margin-right: 10px
        }


	</style>

</head>
<body bgcolor="FCF7F0" >
    
	<center>
        

	
    	<table>
            <tr>
                <?php
                $cont =0;
                foreach ($Grupo5BD as $foto){
                    $cont++;
                ?>
                <td>
                    <div class="row">
                    <img src="<?php echo "./foto/".$foto["nome_imagem"]?>" width="260" height="200"/>
                    </div>
                </td>
                <?php 
                if ($cont == 4){
                    echo "</tr>";
                    echo "<tr>";
                    $cont = 0;
                }
                    
                }
                ?>
            </tr>
        </table>
    </center>
</body>
</html>