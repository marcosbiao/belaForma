
    <?php
        // A sessão precisa ser iniciada em cada página diferente
        if (!isset($_SESSION)) session_start();
        // Verifica se não há a variável da sessão que identifica o usuário
        if (!isset($_SESSION['UsuarioID'])) {
          // Destrói a sessão por segurança
          session_destroy();
          // Redireciona o visitante de volta pro login
          header("Location: index.php"); exit;
        }
        
        include ("banco/banco.php");
        // pegando o nome e tirando os espaços no inicio e no fim com a funcao "trim"

        $nome = trim($_POST["nome"]);
        $login = trim($_POST["login"]);
        $senha = trim($_POST["senha"]);
        $email = trim($_POST["email"]);
        $fone = trim($_POST["fone"]);
        $data = trim($_POST["data"]);
        if($login == "Marcos"){
            $_SESSION['Mensagem'] = "Erro defina um novo login";
            header("Location: telaCadastrarAluno.php");
        }
        echo $data;
        // chamando a função query da classe banco para adicionar ao banco de dados
        $b = "INSERT INTO aluno (nome,login,senha,email,fone,data) "
                . "VALUES ('$nome','$login','$senha','$email','$fone','$data')";
        //echo $b;
        noQuery($b);
    ?>
<script>
    
    window.location = "telaPrincipalAdm.php"
    
</script>