<?php

$pag = 'usuarios';
?>
<button onclick="inserir()" type="button" class="btn btn-primary"><span class="fa fa-plus"></span>Novo Usuário</button>

<div class="bs-example widget-shadow" style="padding: 15px;" id="listar">
 
<table class="table table-striped" id="tabela">


</div>

<script type="text/javascript">var pag = "<?=$pag?>"</script>
<script src="js/ajax.js"></script>


<!-- Modal Form -->
<div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="exampleModalLabel"><span id="titulo_inserir"></span></h4>
				<button id="btn-fechar" type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -25px">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form id="form">
			<div class="modal-body">
				

					<div class="row">
						<div class="col-md-6">							
								<label>Nome</label>
								<input type="text" class="form-control" id="nome" name="nome" placeholder="Seu Nome" required>							
						</div>

						<div class="col-md-6">							
								<label>Email</label>
								<input type="email" class="form-control" id="email" name="email" placeholder="Seu Nome" required>							
						</div>
					</div>


					<div class="row">
						<div class="col-md-6">							
								<label>Telefone</label>
								<input type="text" class="form-control" id="telefone" name="telefone" placeholder="Seu Telefone" required>							
						</div>

                        
						<div class="col-md-4">							
								<label>Nível</label>
								<select class="form-control" id="nivel" name="nivel" required>
                                <option value="">Administrador</option>
                                <option value="">Usuario</option>
                                </select>							
						</div>

						<div class="col-md-6">							
								<label>CPF</label>
								<input type="text" class="form-control" id="cpf" name="cpf" placeholder="Seu CPF" >							
						</div>
					



					<div class="row">
						<div class="col-md-6">							
								<label>Senha</label>
								<input type="password" class="form-control" id="senha_perfil" name="senha" placeholder="Senha" value="<?php echo $senha_usuario ?>" required>							
						</div>

						<div class="col-md-6">							
								<label>Confirmar Senha</label>
								<input type="password" class="form-control" id="conf_senha" name="conf_senha" placeholder="Confirmar Senha" value="" required>							
						</div>
					</div>

					<div class="col-md-12">							
								<label>Endereço</label>
								<input type="text" class="form-control" id="conf_senha" name="conf_senha" placeholder="Seu endereço" >							
						</div>


					<div class="row">
						<div class="col-md-6">							
								<label>Foto</label>
								<input type="file" class="form-control" id="foto" name="foto" value="<?php echo $foto_usuario ?>" onchange="carregarImg()">							
						</div>

						<div class="col-md-6">								
							<img src="images/perfil/<?php echo $foto_usuario ?>"  width="80px" id="target-usu">								
							
						</div>

						
					</div>


					<input type="hidden" name="id_usuario" value="<?php echo $id_usuario ?>">
				

				<br>
				<small><div id="msg-perfil" align="center"></div></small>
			</div>
			<div class="modal-footer">       
				<button type="submit" class="btn btn-primary">Salvar</button>
			</div>
			</form>
		</div>
	</div>
</div>

