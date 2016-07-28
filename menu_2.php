<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<ul class="nav navbar-text">
			<li>Absenteismo Central 3121</li>
		</ul>

		<div class="inverse navbar-inverse" id="bs-example-navbar-inverse-1">		 
			<ul class="nav navbar-nav navbar-right" style="margin-right: 50px">

				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Consulta <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="index.php?cod=6">Consulta de Falta</a></li>
					</ul>
				</li>

				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastro <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="index.php?cod=1">Cadastro de Falta</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="index.php?cod=2">Cadastro de Funcionario</a></li>
					</ul>
				</li>
				<li><a href="#myModal" data-toggle="modal">Sair</a></li>
			</ul>
		</div>
	</div>
</nav>

<!-- Confirmação -->
<div class="container">
	<div class="row">
		<div id="myModal" class="modal fade in">
			<div class="modal-dialog">
				<div class="modal-content">

					<div class="modal-header">
						<a class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></a>
						<h4 class="modal-title">Confirmação</h4>
					</div>
					<div class="modal-body">
						<p>Tem certeza que deseja sair?</p>
					</div>
					<div class="modal-footer">
						<div class="btn-group">
							<button class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Cancel</button>
							<a style="text-decoration: none; color: white;" href="logoff.php"><button class="btn btn-primary"><span class="glyphicon glyphicon-check"></span>Sim</button></a>
						</div>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dalog -->
		</div><!-- /.modal -->
	</div>
</div>