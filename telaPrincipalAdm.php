<!DOCTYPE html>
<html lang="pt">

<?php include("head.php"); ?>

    <body>
        <br>
        <center> <img src="imagem/logoBelaForma.jpg" width="700" height="300"> </center>
        <br>
        <ul class="nav nav-tabs">
            <!--Dropdown para bolsa estagio-->
            <li role="presentation"><a href="telaPrincipal.php">Home</a></li>

            <li role="presentation" class="dropdown">
             <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
               Alunos<span class="caret"></span>
             </a>
             <ul class="dropdown-menu">
                <li role="presentation"><a href="telaCadastrarAluno.php">Cadastrar aluno</a></li>
                <li role="presentation"><a href="telaConsultaBeneficiario.php">Consultar aluno</a></li>
                <li role="presentation"><a href="telaSolicitarBolsaEstagio.php">Alterar aluno</a></li>
                <li role="presentation"><a href="telaConsultarSolicitacaoBolsaEstagio.php">Desativar aluno</a></li>
                <li role="presentation"><a href="telaConsultarSolicitacaoBolsaEstagio.php">Reativar aluno</a></li>
            </ul>
        </li> 
            <li role="presentation"><a href="telaAlunoDisciplina.php">Modalidade</a></li>

            <li role="presentation"><a href="logout.php">Sair</a></li>
      </ul>
        
        <?php include("script.html"); ?>
        <?php include("foot.html"); ?>
    </body>
    
</html>