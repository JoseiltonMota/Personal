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
				<a href="#">Cadastro de Monitor(a)</a>
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

							<?php include_once("controller/cadastro/cad_monitor.php");?><!-- lógica do cadastro-->
							
							<!-- start: Analista -->										
							<div class="control-group">
								<label class="control-label" for="selectAnalista">* Monitor(a)</label>
								<div class="controls">
									<select id="selectAnalista" style="width: 300px;" data-rel="chosen" name="id_func" data-placeholder="Selecionar Analista">
										<option value=""></option>
										<?php
										$select = "SELECT matricula, nome FROM funcionario ORDER BY 2";

										try{
											$result = $conexao->prepare($select);
											$result->execute();

											while($linha = $result->fetch(PDO::FETCH_ASSOC)){ ?>
											<option value="<?php echo $linha['matricula']?>"><?php echo $linha['nome']?></option>
											<?php
										}

									} catch(PDOException $e){
										echo $e;
									}

									?>
								</select>
							</div>
						</div>

						<!-- start: matricula -->										
						<!--<div class="control-group">
							<label class="control-label" for="selectMat">* Matricula</label>
							<div class="controls">
								<input class="input-xlarge" style="width: 300px;"  name="matricula" maxlength="10" id="selectMat" type="text" placeholder="Aqui você digita a matricula do colaborador" required></input>
							</div>
						</div>-->

						<!-- start: senha -->										
						<div class="control-group">
							<label class="control-label" for="selectMat">* Senha</label>
							<div class="controls">
								<input type="password" class="form-control" id="usuario" name="senha" maxlenght="10" required/>
							</div>
						</div>

						<div class="control-group">
							<label class="control-label">* Nivel de acesso</label>
							<div class="controls">
								<label class="radio-inline">
									<input type="radio" name="nivel" id="optionsRadios1" value="1">
									Admistrador
								</label>

								<div style="clear:both"></div>

								<label class="radio-inline">
									<input type="radio" name="nivel" id="optionsRadios2" value="2">
									Monitor
								</label>

								<div style="clear:both"></div>

								<label class="radio-inline">
									<input type="radio" name="nivel" id="optionsRadios3" value="3">
									Lider
								</label>
							</div>
						</div>



						<div class="form-actions ">
							<button data-toggle="modal" href="#cadMonitor" class="btn btn-primary" name="mon_n2">Cadastrar</button>
							<button type="reset"  class="btn">Limpar</button>
						</div>


					</fieldset>
				</div>
			</div>
		</div>


		<div class="modal hide fade" id="cadMonitor">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h3>Confirmação</h3>
			</div>
			<div class="modal-body">
				<p>Tem certeza que deseja Salvar?</p>
			</div>
			<div class="modal-footer">
				<a href="#" class="btn" data-dismiss="modal">Cancelar</a>
				<button type="submit" class="btn btn-primary" name="cadMonitor"><span class="glyphicon glyphicon-check"></span>Salvar</button>
			</div>
		</div>

	</form>
</div>


<div class="clearfix"></div>