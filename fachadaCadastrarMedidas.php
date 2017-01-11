
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
$dataA = trim($_POST["data"]);
    $dataP = explode('/', $dataA);
    $data = $dataP[2]."-".$dataP[1]."-".$dataP[0];
    echo $data;

$peso = trim($_POST["peso"]);
if(empty(trim($_POST["altura"]))){
    $query = "Select altura from medidas where id_aluno = $id_aluno order by data desc limit 0,1";
    $rs = Select($query);
    $row = mysql_fetch_array($rs);
    $altura = $row['altura'];
}else{
    $altura = trim($_POST["altura"]);
}
$imc = $peso/($altura*$altura);
$circAbd = trim($_POST["circAbd"]);
$circQuad = trim($_POST["circQuad"]);
    
// chamando a função query da classe banco para adicionar ao banco de dados
$b = "INSERT INTO medidas (id_aluno,peso,altura,imc,circAbd,circQuad,data) "
        . "VALUES ($id_aluno,$peso,$altura,$imc,$circAbd,$circQuad,'$data')";
echo $b;
noQuery($b);


?>
<script>

    window.location = "telaPrincipalAdm.php"
    
</script>