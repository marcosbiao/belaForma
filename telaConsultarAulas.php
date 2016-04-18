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
        <h3>Consulta de aulas</h3>
        <div class="container">
            <div class="table">
                <div class="col-lg-4">
                    <label class="input-group-addon">Selecione o aluno</label>
                            <select name="id_aluno">
                                <option value="">--- Selecione ---</option>
                                <?php
                                while ($row = mysql_fetch_array($rs)) {
                                    echo "<option value=" . $row['id_aluno'] . ">" . $row['nome'] . "</option>";
                                }
                                ?>
                            </select>
                </div>
                
                <div class="col-md-2">
                    <span class="input-group-addon" id="sizing-addon2">Data</span>
                    <input type="date" class='form-control' id="data" name="data">
                </div>
                
                <div class="col-md-4">.col-md-4
                
                </div>
                
                <div class="col-md-2">.col-md-2
                
                </div>
            </div>
        </div>
        <h3>Consulta de aulas</h3>
        <div class="container">
            <div class="row">
                        <div class="col-xs-3 col-md-3 input-group">
                            <span class="input-group-addon" id="sizing-addon2">Selecione o aluno</span>
                            <select name="id_aluno">
                                <option value="">--- Selecione ---</option>
                                <?php
                                while ($row = mysql_fetch_array($rs)) {
                                    echo "<option value=" . $row['id_aluno'] . ">" . $row['nome'] . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-xs-3 col-md-3 input-group" >
                            <span class="input-group-addon" id="sizing-addon2">Data</span>
                            <input type="date" class='form-control' id="data" name="data">
                        </div>
                
                        <div class="col-xs-3 col-md-3 input-group">
                            <span class="input-group-addon" id="sizing-addon2">Selecione o aluno</span>
                            <select name="id_aluno">
                                <option value="">--- Selecione ---</option>
                                <?php
                                while ($row2 = mysql_fetch_array($rs)) {
                                    echo "<option value=" . $row2['id_aluno'] . ">" . $row2['nome'] . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-xs-3 col-md-3 input-group" >
                            <span class="input-group-addon" id="sizing-addon2">Data</span>
                            <input type="date" class='form-control' id="data" name="data">
                        </div>
                
                
            </div>
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
                    <h3>Cadastro de aulas</h3>

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
                        <input type="date" class='form-control' id="data" name="data">
                        
                        
                        
                        
                        <span class="input-group-addon" id="sizing-addon2">Selecione o aluno</span>
                        <select name="id_aluno">
                            <option value="">--- Selecione ---</option>
                            <?php
                            while ($row = mysql_fetch_array($rs)) {
                                echo "<option value=" . $row['id_aluno'] . ">" . $row['nome'] . "</option>";
                            }
                            ?>
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