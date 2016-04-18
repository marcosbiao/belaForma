<html lang="pt">

    <?php include("head.php"); ?>
    <body>
        <?php include("cabecarioAdm.php"); ?>
        <div class="container panel panel-default">
            </br></br>
            <form action = "fachadaCadastrarAluno.php" method = "POST">
                <div class="panel panel-default jumbotron">	
                    <div id="vpav"></div>
                    <?php
                    if (!empty($_SESSION['Mensagem'])) {
                        echo $_SESSION['Mensagem'];
                    }
                    $_SESSION['Mensagem'] = "";
                    ?>
                    <h3>Dados obrigatorios</h3>
                    <div class="input-group">
                        <span class="input-group-addon" id="sizing-addon2">Nome</span>
                        <input type="text" required class="form-control"  id="nome" name="nome" placeholder="Digite o nome do aluno" aria-describedby="sizing-addon2">
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon" id="sizing-addon2">Login</span>
                        <input type="text" required class="form-control"  id="login" name="login" placeholder="Digite o login" aria-describedby="sizing-addon2">
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon" id="sizing-addon2">Senha</span>
                        <input type="text" required class="form-control"  id="senha" name="senha" placeholder="Digite a senha" aria-describedby="sizing-addon2">
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon" id="sizing-addon2">Email</span>
                        <input type="email"  class="form-control"  id="email" name="email" placeholder="Digite a senha" aria-describedby="sizing-addon2">
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon" id="sizing-addon2">Telefone</span>
                        <input type="tel"  class="form-control"  id="fone" name="fone" placeholder="Digite a senha" aria-describedby="sizing-addon2">
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon" id="sizing-addon2">Data</span>
                        <input type="date" class="form-control" id="data" name="data" pattern="[0-9]{4}/[0-9]{2}/[0-9]{2}" maxlength="10" min="2012-01-01" max="2020-01-01" placeholder="YYYY/MM/DD" aria-describedby="sizing-addon2" name="textFieldData"/>
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