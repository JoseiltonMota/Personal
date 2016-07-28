<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<ul class="nav navbar-text">
			<li>Absenteismo Central 3121 <?php
			if($_SESSION['nivelsession']==1){
				echo ' - [ADMINISTRATOR]';
			}
			?></li>


		</ul>

		<div class="collapse navbar-collapse" id="navigation">		 
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
						<li><a href="index.php?cod=2">Cadastro de Funcionario</a></li>
						
						<?php

						if($_SESSION['nivelsession']==1){
							echo '<li role="separator" class="divider"></li>';
							echo '<li><a href="index.php?cod=4">Cadastro de Usuário</a></li>';
							echo '<li><a href="index.php?cod=5">Cadastro de Grupo</a></li>';
						}
						?>
					</ul>
				</li>

				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Perfil<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="alterarSenha.php">Alterar Senha</a></li>
					</ul>
				</li>

				<li>
					<button class="btn btn-success navbar-btn btn-circle" href="#myModal" data-toggle="modal">Sair</button>
				</li>
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