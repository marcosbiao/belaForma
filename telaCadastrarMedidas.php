<html lang="pt">

    <?php include("head.php"); ?>
    <body>
        <?php include("cabecarioAdm.php"); ?>

        <?php
        include("banco/banco.php");
        $query = "Select * from aluno";
        $rs = Select($query);
        ?>
        <?php
        //retornar a data atual
        $dia = date('d');
        $mes = date('m');
        $ano = date('Y');
        $data = date('d/m/Y');
        ?>
        <div class="container panel panel-default">
            </br></br>
            <form action = "fachadaCadastrarMedidas.php" method = "POST">
                <div class="panel panel-default jumbotron">	
                    <div id="vpav"></div>
                    <?php
                    if (!empty($_SESSION['Mensagem'])) {
                        echo $_SESSION['Mensagem'];
                    }
                    $_SESSION['Mensagem'] = "";
                    ?>
                    <h3>Cadastro de medidas</h3>

                    <div class="input-group">
                        <span class="input-group-addon" id="sizing-addon2">Selecione o aluno</span>
                        <select name="id_aluno">
                            <option value="">--- Selecione ---</option>
                            <?php
                            while ($row = mysql_fetch_array($rs)) {
                                echo "<option value=" . $row['id_aluno'] . ">" . $row['nome'] . "</option>";
                            }
                            ?>
                        </select>

                        <span class="input-group-addon" id="sizing-addon2">Data</span>
                        <?php echo $dia . '/' . $mes . '/' . $ano; ?>
                        <?php echo $data; ?>
                    </div>

                    <input type="hidden" name="dia" value="<?php echo $dia ?>">
                    <input type="hidden" name="mes" value="<?php echo $mes ?>">
                    <input type="hidden" name="ano" value="<?php echo $ano ?>">
                    <input type="hidden" name="data" value="<?php echo $data ?>">
                    <br>

                    <div class="input-group">
                        <span class="input-group-addon" id="sizing-addon2">Peso</span>
                        <input type="number" required class="form-control"  id="peso" name="peso" placeholder="Digite o nome do aluno" aria-describedby="sizing-addon2" min="0" step="0.1">

                        <span class="input-group-addon" id="sizing-addon2">Altura</span>
                        <input type="number" required class="form-control"  id="altura" name="altura" placeholder="Digite o nome do aluno" aria-describedby="sizing-addon2" min="0" step="0.01">
                    </div>

                    <br>

                    <div class="input-group">
                        <span class="input-group-addon" id="sizing-addon2">Circunferencia Abdominal</span>
                        <input type="number" required class="form-control"  id="circAbd" name="circAbd" placeholder="Digite o nome do aluno" aria-describedby="sizing-addon2" min="0" step="0.1">

                        <span class="input-group-addon" id="sizing-addon2">Circunferencia Quadril</span>
                        <input type="number" required class="form-control"  id="circQuad" name="circQuad" placeholder="Digite o nome do aluno" aria-describedby="sizing-addon2" min="0" step="0.1">
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