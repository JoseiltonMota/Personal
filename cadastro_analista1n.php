	<!-- start: Content -->
	<div id="content" class="span10">

		<ul class="breadcrumb">
			<img style="width: 180px; height: 40px;" src="img/logo_stefanini.png" alt=""> <!-- logo Stefanini -->
			<li>
				<i class="icon-home"></i>
				<a href="index.html">Home</a>
				<i class="icon-angle-right"></i> 
			</li>
			<li>
				<i class=""></i>
				<a href="#">Cadastro de Analista 1° Nivel</a>
			</li>
		</ul>

		<form class="form-horizontal" method="post">

			<!-- start: Monitoria -->
			<div class="row-fluid sortable">
				<div class="box span12"> <!--/span form-escuta-->
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Cadastro</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
						</div>
					</div>
					<fieldset>
						<div class="box-content">

							<?php include_once("controller/cadastro/cadAnalista_1N.php");?> <!-- lógica do cadastro-->

							<!-- start: Analista -->										
							<div class="control-group">
								<label class="control-label" for="selectAnalista">* Analista</label>
								<div class="controls">
									<input class="input-xlarge" style="width: 300px;" id="selectAnalista" type="text" name="nome" maxlength="100" placeholder="Digite apenas o nome. Ex: Francisco Beltrano" required></input>
								</div>
							</div>

							<!-- start: matricula -->										
							<div class="control-group">
								<label class="control-label" for="selectMat">* Matricula</label>
								<div class="controls">
									<input class="input-xlarge" style="width: 300px;" name="matricula" maxlength="10" id="selectMat" type="text" placeholder="Aqui você digita a matricula do colaborador" required></input>
								</div>
							</div>


							<div class="control-group">
								<label class="control-label" for="selectAnalista">* Grupo</label>
								<div class="controls">
									<select class="form-control disabled" style="width: 300px;" data-rel="chosen" id="selectAnalista" data-placeholder="Selecionar grupo" disabled>
										<?php
										$select = "SELECT * FROM grupo where id=7004";

										try{
											$result = $conexao->prepare($select);
											$result->execute();

											while($linha = $result->fetch(PDO::FETCH_ASSOC)){ ?>
											<option value="<?php echo $linha['id']?>"><?php echo $linha['nome']?></option>
											<?php
										}

									} catch(PDOException $e){
										echo $e;
									}

									?>
								</select>
							</div>
						</div>

						<div class="control-group">
							<label class="control-label">* Atendimento</label>
							<div class="controls">
								<label class="radio-inline">
									<input type="radio" name="tipo_atend" id="optionsRadios1" value="TELEFONE" required>
									TELEFONE
								</label>
								<div style="clear:both"></div>
								<label class="radio-inline">
									<input type="radio" name="tipo_atend" id="optionsRadios2" value="WEB" required>
									WEB
								</label>
							</div>
						</div>

						<div class="control-group">
							<label class="control-label">* Sexo</label>
							<div class="controls">
								<label class="radio-inline">
									<input type="radio" name="sex" id="optionsRadios1" value="M" required>
									MASCULINO
								</label>
								<div style="clear:both"></div>
								<label class="radio-inline">
									<input type="radio" name="sex" id="optionsRadios2" value="F" required>
									FEMININO
								</label>
							</div>
						</div>

						<div class="form-actions ">
							<button data-toggle="modal" href="#cadAnlist" class="btn btn-primary" name="mon_n2">Cadastrar</button>
							<button type="reset"  class="btn">Limpar</button>
						</div>

					</fieldset>
				</div>
			</div>
		</div>


		<div class="modal hide fade" id="cadAnlist">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h3>Confirmação</h3>
			</div>
			<div class="modal-body">
				<p>Tem certeza que deseja sair?</p>
			</div>
			<div class="modal-footer">
				<a href="#" class="btn" data-dismiss="modal">Cancelar</a>
				<button type="submit" class="btn btn-primary" name="cadAnalista_1N"><span class="glyphicon glyphicon-check"></span>Salvar</button>
			</div>
		</div>

	</form>
</div>


<div class="clearfix"></div>