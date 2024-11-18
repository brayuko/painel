$(document).ready(function() {    
    listar();    
} );

function listar(){
    $.ajax({
        url: 'paginas/' + pag + "/listar.php",
        method: 'POST',
        data: {},
        dataType: "html",

        success:function(result){
            $("#listar").html(result);
            $('#mensagem-excluir').text('');
        }
    });
}

function inserir(){
    //$('#id_usuario').val(localStorage.id_usu);
    //$('#id_empresa').val(localStorage.id_empresa);
    $('#mensagem').text('');
    $('#titulo_inserir').text('Inserir Registro');
    $('#modalForm').modal('show');
    limparCampos();
}
