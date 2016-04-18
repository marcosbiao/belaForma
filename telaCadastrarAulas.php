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
                        
                        <span class="input-group-addon" id="sizing-addon2">Numero de exercicios</span>
                        <select name="nExercicios">
                            <option value="0">--- Selecione ---</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                        
                    </div>
                    
                    <div class="input-group">
                        <span class="input-group-addon" id="sizing-addon2">Data</span>
                        <input type="date" required class="form-control" size="10" id="data" name="data" placeholder="dd/mm/yyyy" aria-describedby="sizing-addon2">
                    </div>

                    <input type="hidden" name="data" value="<?php echo $data ?>">
                    <br>

                    
                    <?php 
                        for($i=1;$i<=10;$i++){
                            echo "<div class='input-group'>";
                            
                            echo "<span class='input-group-addon' id='sizing-addon2'>Nome exercicio</span>";
                            echo "<input type='text' class='form-control'  size='45' id='exercicio' name='exercicio".$i."' placeholder='Digite o nome do exercicio' aria-describedby='sizing-addon2'>";
                        
                            echo "<span class='input-group-addon' id='sizing-addon2'>Repetição</span>";
                            echo "<input type='text' class='form-control' size='8' id='repeticao' name='repeticao".$i."' placeholder='Digite a quantidade de repetições' aria-describedby='sizing-addon2'>";
                            
                            echo "<span class='input-group-addon' id='sizing-addon2'>Carga</span>";
                            echo "<input type='number' class='form-control' size='8' id='carga' name='carga".$i."' placeholder='Digite a quantidade de carga' aria-describedby='sizing-addon2' min='0'>";
                            echo "</div>";
                        }
                    
                    
                    
                    ?>
                    
                    <br>
                    
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