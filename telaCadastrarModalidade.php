<html lang="pt">
    
    <?php include("head.php");  ?>
    <body>
        <?php include("cabecarioAdm.php");?>
        <div class="container panel panel-default">
			</br></br>
                        <form action = "fachadaCadastrarModalidade.php" method = "POST">
				<div class="panel panel-default jumbotron">	
					<div id="vpav"></div>
					<h3>Dados obrigatorios</h3>
					<div class="input-group">
	  					<span class="input-group-addon" id="sizing-addon2">Nome</span>
	  					<input type="text" class="form-control"  id="nome" name="nome" placeholder="Digite o nome do aluno" aria-describedby="sizing-addon2">
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