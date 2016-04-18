<html lang="pt">
    <?php include("banco/banco.php");
    $query = "Select * from aluno";
    $rs = Select ($query);
    $row = mysql_fetch_array($rs);
    ?>
    <?php include("head.php");  ?>
    <body>
        <?php include("cabecarioAdm.php");?>
        <div class="container panel panel-default">
			</br></br>
                        <form action = "fachadaMatricularAluno.php" method = "POST">
				<div class="panel panel-default jumbotron">	
					<div id="vpav"></div>
					<h3>Dados obrigatorios</h3>
                                        
					<div class="input-group">
                                        <span class="input-group-addon" id="sizing-addon2">Selecione o usuario</span>
                                        <select name="id_aluno">
                                            <option value="">--- Selecione ---</option>
                                            <?php
                                               echo "<option value=".$row['idUsuario'].">".$row['login']."</option>" ;
                                               while($row = mysql_fetch_array($rs)){
                                               echo "<option value=".$row['idUsuario'].">".$row['login']."</option>" ;
                                            } ?>
                                        </select>
                                        </div>
                                        <div>
                                            <input type="submit" id = "bm" class="btn btn-default topElementos" value="Salvar" />
                                        </div>
                                </div>
                        </form>
        </div>
        
        <?php include("script.html"); ?>
        <?php include("foot.html"); ?>    
    </body>
</html>