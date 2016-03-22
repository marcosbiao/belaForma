
    <?php
        // incluindo o arquivo do banco de dados
        include ("banco/banco.php");
        // pegando o nome e tirando os espaços no inicio e no fim com a funcao "trim"

        $nome = trim($_POST["nome"]);
        $login = trim($_POST["login"]);
        $senha = trim($_POST["senha"]);
        $data = trim($_POST["data"]);
        echo $data;
        //$data2 = explode("-" or "/" or "." ,$data); 
        //$data = implode("",$data2);
        // chamando a função query da classe banco para adicionar ao banco de dados
        $b = "INSERT INTO aluno (nome,login,senha,data) VALUES ('$nome','$login','$senha','$data')";
        //echo $b;
        noQuery($b);
    ?>
<script>
    
    window.location = "telaPrincipal.php"
    
</script>