<?php 
@session_start();
require_once("conexao.php");
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$senha_crip = md5($senha);

$query = $pdo->prepare("SELECT * from usuarios where email = :email and senha_crip = :senha");
$query->bindValue(":email", "$usuario");
$query->bindValue(":senha", "$senha_crip");
$query->execute();
$res = $query->fetchAll(PDO::FETCH_ASSOC);
//consulta de linhas
$linhas = @count($res);
//echo $linhas;
if($linhas > 0){
    $_SESSION['nome'] = $res[0]['nome'];
    $_SESSION['id'] = $res[0]['id'];
    $_SESSION['nivel'] = $res[0]['nivel'];

    // exibe nivel de acesso
    //echo $nivel;
    //exit();

    echo '<script>window.location="painel"</script>';

}else{
    
    echo '<script>window.alert("Dados incorretos!!")</script>';
    echo '<script>window.location="index.php"</script>';
}
?>