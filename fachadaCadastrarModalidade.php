
    <?php
        // incluindo o arquivo do banco de dados
        include ("banco/banco.php");
        // pegando o nome e tirando os espaços no inicio e no fim com a funcao "trim"

        $nome = trim($_POST["nome"]);
        echo $data;
        //$data2 = explode("-" or "/" or "." ,$data); 
        //$data = implode("",$data2);
        // chamando a função query da classe banco para adicionar ao banco de dados
        $b = "INSERT INTO modalidade (nome_modalidade) VALUES ('$nome')";
        //echo $b;
        noQuery($b);
    ?>
<script>
    
    window.location = "telaPrincipal.php"
    
</script>