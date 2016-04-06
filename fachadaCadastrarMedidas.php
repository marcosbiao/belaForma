
<?php
// A sessão precisa ser iniciada em cada página diferente
if (!isset($_SESSION))
    session_start();
// Verifica se não há a variável da sessão que identifica o usuário
if (!isset($_SESSION['UsuarioID'])) {
    // Destrói a sessão por segurança
    session_destroy();
    // Redireciona o visitante de volta pro login
    header("Location: index.php");
    exit;
}

include ("banco/banco.php");
// pegando o nome e tirando os espaços no inicio e no fim com a funcao "trim"

$id_aluno = trim($_POST["id_aluno"]);
$peso = trim($_POST["peso"]);
$altura = trim($_POST["altura"]);
$imc = $peso/($altura * $altura);
$circAbd = trim($_POST["circAbd"]);
$circQuad = trim($_POST["circQuad"]);
$dia = trim($_POST["dia"]);
$mes = trim($_POST["mes"]);
$ano = trim($_POST["ano"]);
//if ($login == "Marcos") {
//    $_SESSION['Mensagem'] = "Erro defina um novo login";
//    header("Location: telaCadastrarAluno.php");
//}
// chamando a função query da classe banco para adicionar ao banco de dados
$b = "INSERT INTO medidas (id_aluno,peso,altura,imc,circAbd,circQuad,dia,mes,ano) "
        . "VALUES ($id_aluno,$peso,$altura,$imc,$circAbd,$circQuad,$dia,$mes,$ano)";
//echo $b;
noQuery($b);
?>
<script>

    window.location = "telaCadastrarMedidas.php"

</script>