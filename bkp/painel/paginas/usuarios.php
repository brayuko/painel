<?php

$pag = 'usuarios';
?>
<button type="button" class="btn btn-primary"><span class="fa fa-plus"></span>Novo Usuário</button>

<div class="bs-example widget-shadow" style="padding: 15px;" id="listar">
 
<table class="table table-striped" id="tabela">


</div>

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