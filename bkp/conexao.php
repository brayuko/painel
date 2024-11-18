<?php 
//definir fuso horario
date_default_timezone_set('America/Sao_Paulo');
//conexão local
    $servidor = 'localhost';
    $banco = 'painel';
    $usuario = 'root';
    $senha = '1qa2ws@23';

    try {
        $pdo = new PDO("mysql:dbname=$banco;host=$servidor;charset=utf8", "$usuario", "$senha");
        //echo "Conexão do banco de dados efetuado com sucesso!";
    } catch (Exception $e){
        echo "Erro ao conectar ao banco de dados!<br><br>";
        echo $e;
    }
   //VARIAVEIS GLOBAIS

   $nome_sistema = 'Bruno';
   $email_sistema = 'omeuemailbkp@gmail.com';
   $telefone_sistema = '(22) 99719-4980';
   $cpf_sistema = '111.111.111-11';
   $endereco_usuario = 'rua ficticia, 10 macaé-rj';

?>
