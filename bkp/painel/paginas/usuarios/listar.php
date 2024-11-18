<?php
$tabela = 'usuarios';
require_once("../../../conexao.php");

$query = $pdo->query("SELECT * from usuarios");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$linhas = @count($res);
if($linhas > 0){
    echo <<<HTML
<small>
	<table class="table table-hover" id="tabela">
	<thead> 
	<tr> 
	<th>Nome</th>	
	<th class="esc">Telefone</th>	
	<th class="esc">Email</th>	
	<th class="esc">Nível</th>	
	<th>Ações</th>
	</tr>
	</thead> 
	<tbody>	
HTML;
}

for($i=0; $i < $linhas; $i++){	
    $id = $res[$i]['id'];
    $nome = $res[$i]['nome'];
    $telefone = $res[$i]['telefone'];
    $email = $res[$i]['email'];
    $foto = $res[$i]['foto'];
    $cpf = $res[$i]['cpf'];
    $nivel = $res[$i]['nivel'];
    $ativo = $res[$i]['ativo'];
    $data_cad = $res[$i]['data'];
    $endereco = $res[$i]['endereco'];
    $senha = $res[$i]['senha'];
    $created = $res[$i]['data'];
    $modifield = $res[$i]['edita'];

    $dataF = implode('/', array_reverse(explode('-', $created)));

echo <<<HTML
    <tr>
        <td>{$nome}</td>
        <td>{$telefone}</td>
        <td>{$email}</td>
        <td>{$nivel}</td>
        <td>acao</td>
    </tr>
HTML;

echo <<<HTML
</body>
</table>
HTML;
}

?>
<script type="text/javascript">var pag = "<?=$pag?>"</script>
<script src="js/ajax.js"></script>
<script type="text/javascript">
    $(document).ready( function () {
        $('#tabela').DataTable({
            "language" : {
                "url" : '//cdn.datatables.net/plug-ins/1.13.2/i18n/pt-BR.json'
            }
        });
    });

</script>