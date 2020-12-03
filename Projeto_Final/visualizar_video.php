<?php 
    $servidor = "localhost";
    $usuario = "u911921446_Grupo5";
	$senha = "Grupo5bd";
	$dbname = "u911921446_Grupo5BD";
	
    $banco = new mysqli($servidor, $usuario, $senha, $dbname);
    $sql = "SELECT * FROM u911921446_Grupo5BD.Vídeos";
    $resultado = $banco->query($sql);
    while ($linha = mysqli_fetch_array($resultado)) {
        $Grupo5BD[] = $linha;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

	<title>Visualização de Videos</title>
	<meta charset="utf-8">

</head>
<body bgcolor="FCF7F0">
    
	<center>
        
		<div id="gallery-pt--body">

		</div>

	
    	<table>
            <tr>
                <?php
                $cont =0;
                foreach ($Grupo5BD as $video){
                    $cont++;
                ?>
                <td>
                    Título: <a class="nav-link" href= ""><?php echo $video['Título']; ?></a>
                    </td> 
                    <td>  Descrição: <?php echo $video['Descrição']; ?></td> 
                </td>
                <?php 
                if ($cont == 1){
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