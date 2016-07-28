<div class="container">
	<form class="form-horizontal col-xs-6 col-md-4" method="post">
		
		<?php include("controller/login_logic.php");?>

		<div class="form-group">
			<label for="exampleInputName2" class="col-sm-2 control-label">Usuário</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="exampleInputName2" name="user" placeholder="Usuario">
			</div>
		</div>

		<div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Senha</label>
			<div class="col-sm-10">
				<input type="password" class="form-control" id="inputPassword3" name="senha" placeholder="Password">
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<div class="checkbox">
					<label>
						<input type="checkbox"> Lembrar-me
					</label>
				</div>
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<input type="submit" name="logar" value="Entrar" class="btn btn-default"></input>
			</div>
		</div>

	</form>
</div>