<?php 
require_once("conexao.php");

$query = $pdo->query("SELECT * from usuarios");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
//consulta de linhas
$linhas = @count($res);
$senha = '123';
$senha_crip = md5($senha);
if($linhas == 0){
    $pdo->query("INSERT INTO usuarios SET  nome = '$nome_sistema', email = '$email_sistema', senha = '$senha', senha_crip = '$senha_crip', nivel = 'Administrador', ativo = 'Sim', telefone = '$telefone_sistema', cpf = '$cpf_sistema', endereco = '$endereco_usuario', foto = 'sem-foto.jpg', dataC = curDate()");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="shortcut icon" href="img/icone.ico" type="image/x-icon">
</head>
<body>
    <div class="login">
        <div class="form">
            <img class ="logo-login" src="img/logo-login.png" alt="logo empresa">
            <form class="registro" action="autenticar.php" method="POST">
                <label for="">Usuário</label>
                <input type="email" name="usuario" placeholder="Seu E-mail">
                <label for="">Senha</label>
                <input type="password" name="senha" placeholder="Sua Senha">
                <button>Login</button>
            </form>
        </div><!--fim div formulario-->
    </div><!--fim div login-->
</body>
</html>
