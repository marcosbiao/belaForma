
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
$nExercicio = trim($_POST["nExercicios"]);
$id_aluno = trim($_POST["id_aluno"]);
$dataA = trim($_POST["data"]);
    $dataP = explode('/', $dataA);
    $data = $dataP[2].'-'.$dataP[1].'-'.$dataP[0];

for($i=0;$i<$nExercicio;$i++){
    $exer = "exercicio".$i;
    $exercicio = trim($_POST[$exer]);
    $rep = "repeticao".$i;
    $repeticao = trim($_POST[$rep]);
    $car = "carga".$i;
    $carga = trim($_POST[$car]);

//if ($login == "Marcos") {
//    $_SESSION['Mensagem'] = "Erro defina um novo login";
//    header("Location: telaCadastrarAluno.php");
//}
// chamando a função query da classe banco para adicionar ao banco de dados
$b = "INSERT INTO exercicio (id_aluno,exercicio,repeticao,carga,data) "
        . "VALUES ($id_aluno,'$exercicio','$repeticao',$carga,'$data')";
//echo $b;
noQuery($b);

}
?>
<script>

    //window.location = "telaCadastrarAulas.php"
    
</script>