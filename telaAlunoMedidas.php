<!DOCTYPE html>
<html lang="pt">

<?php include("head.php"); ?>

    <body>
        <?php
        include("banco/banco.php");
        $id_aluno = $_SESSION['UsuarioID'];
        $query = "Select * from medidas where id_aluno = $id_aluno order by data desc";
        $rs = Select($query);
        ?>
        
        <br>
        <?php include("cabecarioAluno.php");?>
        
        <table class="table table-striped table-bordered table-condensed"> 
      <!--<caption>Consulta de Beneficiario</caption> -->
      <thead>
          <tr>  
            <th>Peso</th>
            <th>Altura</th>
            <th>IMC</th>
            <th>Circ Abd (cm)</th>
            <th>Circ Quad (cm)</th>
            <th>Data</th>
          </tr>
      </thead>
      <tbody>
          <?php 
          while($row = mysql_fetch_array($rs)){
              echo '<tr>';  
              echo"<td>".$row['peso']."</td>" ;
              echo"<td>".$row['altura']."</td>" ;
              echo"<td>".$row['imc']."</td>" ;
              echo"<td>".$row['circAbd']."</td>" ;
              echo"<td>".$row['circQuad']."</td>";
                $data = $row['data'];
                $dataP = explode('-', $data);
                $novaData = $dataP[2]."-".$dataP[1]."-".$dataP[0];
              echo"<td>".$novaData."</td>" ;
              echo "</tr>";
          }
          ?>
      </tbody>
  </table>
        
        
        
        
        
        <?php include("script.html"); ?>
        <?php include("foot.html"); ?>
    </body>
    
</html>