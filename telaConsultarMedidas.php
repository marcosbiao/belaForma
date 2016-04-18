<html lang="pt">

    <?php include("head.php"); ?>
    
    <body>
        <?php include("cabecarioAdm.php"); ?>

        <?php
        include("banco/banco.php");
        $query = "Select * from aluno";
        $rs = Select($query);
        ?>



        <div class="container panel panel-default">
            </br></br>
            <form action="#" method = "POST" id='menu' name="menu">
                <div class="panel panel-default jumbotron">	
                    <div id="vpav"></div>
                    <h3>Visualizador de medidas</h3>

                    <div class="input-group">
                        <span class="input-group-addon" id="sizing-addon2">Selecione o aluno</span>
                                    <select name="id_aluno">
                            <?php
                            while ($row = mysql_fetch_array($rs)) {
                                echo "<option value=" . $row['id_aluno'] . ">" . $row['nome'] . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                        <div>
                        <input type="submit" id = "bm" class="btn btn-default topElementos" value="Escolher" />
                    </div>
                    
            </form>
        <?php 
            $id_aluno = $_POST['id_aluno'];
            $query2 = "Select * from medidas where id_aluno = ". $id_aluno. " order by data desc";
            $rs2 = Select($query2);
        ?>
            <!-- Table -->
  <table class="table table-striped table-bordered table-condensed" border="6"> 
      <!--<caption>Consulta de Beneficiario</caption> -->
      <thead>
          <tr>  
            <th>Peso</th>
            <th>Altura</th>
            <th>Imc</th>
            <th>CircAbd</th>
            <th>CircQuad</th>
            <th>Data</th>
          </tr>
      </thead>
      <tbody>
          <?php 
          while($row2 = mysql_fetch_array($rs2)){
              echo '<tr>';  
              echo"<td>".$row2['peso']."</td>" ;
              echo"<td>".$row2['altura']."</td>" ;
              echo"<td>".$row2['imc']."</td>" ;
              echo"<td>".$row2['circAbd']."</td>" ;
              echo"<td>".$row2['circQuad']."</td>" ;
              $dataMysql = $row2['data'];
              echo"<td>".date('d/m/Y',strtotime($dataMysql))."</td>" ;
              echo "</tr>";
          }
          ?>
      </tbody>
  </table>
        </div>
                
  

        <?php include("script.html"); ?>
        <?php include("foot.html"); ?> 
                
                
                
                
    </body>
    

</html>

