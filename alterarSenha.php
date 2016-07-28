<?PHP include_once("controller/veri.php");?>

<html lang="pt-br">
<head>
	<meta http-equiv="Content-Type" charset="utf-8" />
	<link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" media="screen">

	<!-- Incluindo o jQuery que é requisito do JavaScript do Bootstrap --> 
	<script src="http://code.jquery.com/jquery-latest.js"></script> 

	<!-- Incluindo o JavaScript do Bootstrap --> 
	<script src="bootstrap/dist/js/bootstrap.min.js"></script> 

	<style>
	.modal .modal-header .btn{
		position: absolute;
		top: 0;
		border-bottom-right-radius: 0;
		border-top-left-radius: 0;
		margin-top: 0;
		right: 0;
	}
	</style>

	<title>Absenteismo 3121</title>

</head>
<body>
	<?php include_once("menu.php");?>

	<div style="position: absolute" class="img-responsive">
		<img src="img/logo-banco-nordeste.png" style="margin-left: 10px; padding-top: 0px;" class="img-responsive" alt="Cinque Terre" width="200" height="150"> 
	</div>

	<div class="img-responsive">
		<img src="img/stefanini.png" style="float: right; margin-right: 10px; padding-top: 0px;"> 
	</div>

	<div class="container-fluid">
		<form class="col-md-4 col-md-offset-4 form-horizontal" method="post">
		<?php include_once("controller/alteraSenha.php"); ?>
		
			<div class="form-group">
				<label class="control-label col-sm-4" for="senhaAntiga">Senha Atual:</label>
				<div class="col-sm-7">
					<input type="password" class="form-control" id="senhaAtual" name="senhaAtual" placeholder="Digite sua senha atual">
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-4" for="pwd">Nova senha:</label>
				<div class="col-sm-7">          
					<input type="password" class="form-control" id="novaSenha" name="novaSenha" placeholder="Digite sua nova senha">
				</div>
			</div>

			<div class="form-group">        
				<div class="col-sm-offset-4 col-sm-10">
					<button type="button" data-toggle="modal" href="#confirmAlteraSenha" class="btn btn-primary">Alterar</button>
					<input type="submit" name="limpar" value="Limpar" class="btn btn-default"></input>
				</div>
			</div>

			<!-- Confirmação Modal -->
			<div class="container">
				<div class="row">
					<div id="confirmAlteraSenha" class="modal fade in">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<a class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></a>
									<h4 class="modal-title">Confirmação</h4>
								</div>
								<div class="modal-body">
									<p>Tem certeza que deseja salvar?</p>
								</div>
								<div class="modal-footer">
									<div class="btn-group">
										<button class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Cancel</button>
										<button type="submit" class="btn btn-primary" name="alteraSenha"><span class="glyphicon glyphicon-check"></span>Salvar</button>
									</div>
								</div>
							</div><!-- /.modal-content -->
						</div><!-- /.modal-dalog -->
					</div><!-- /.modal -->
				</div>
			</div><!-- Confirmação Modal -->
		</form>
	</div>

</body>
</html>



