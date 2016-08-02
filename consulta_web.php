			<!-- start: Content -->
			<div id="content" class="span10">

				<ul class="breadcrumb">
					<img style="width: 180px; height: 40px;" src="img/logo_stefanini.png" alt=""> <!-- logo Stefanini -->
					<li>
						<i class="icon-home"></i>
						<a href="index.html"> Home</a>
						<i class="icon-angle-right"></i> 
					</li>
					<li>
						<i class=""></i>
						<a href="#">Consulta Monitoria Web</a>
					</li>
				</ul>

				<form class="form-horizontal" method="POST">

					<!-- start: Monitoria -->
					<div class="row-fluid sortable">
						<div class="box span12"> <!--/span form-escuta-->
							<div class="box-header" data-original-title>
								<h2><i class="halflings-icon white edit"></i><span class="break"> Consulta Monitoria</span></h2>
								<div class="box-icon">
									<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
								</div>
							</div>
							<div class="box-content">
								<fieldset>

									<!-- start: Data Monitoria -->
									<div class="control-group">
										<label class="control-label" for="date01">* De </label>
										<div class="controls">
											<input type="text" class="input-xlarge datepicker" id="date01" name="dt_ini" placeholder="dd/mm/aaaa" required>
										</div>
									</div>

									<div class="control-group">
										<label class="control-label" for="date02">* Até </label>
										<div class="controls">
											<input type="text" class="input-xlarge datepicker" id="date02" name="dt_fim" placeholder="dd/mm/aaaa" required>
										</div>
									</div>
									<!-- start: Data Monitoria -->

									<!-- start: Analista -->										
									<div class="control-group">
										<label class="control-label" for="selectAnalista">* Analista</label>
										<div class="controls">
											<select id="selectAnalista" data-rel="chosen" name="id_func">
												<option value="">Selecione o analista</option>
												<?php
												$select = "SELECT matricula, nome FROM funcionario  WHERE id_grupo = 7004 AND tipo_atend like 'WEB' ORDER BY 2";

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
								<!-- end: Analista -->

								<div class="control-group">
									<label class="control-label" for="selectGrupo">* Grupamento</label>
									<div class="controls">
										<select id="selectGrupo" data-rel="chosen" placeholder="Selecione o grupo" name="id_grupo">
											<?php
											$select = "SELECT * FROM Grupo WHERE id = 7004";

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

							<div class="form-actions ">
								<button type="submit" class="btn btn-primary" name="consulta_web">Consultar</button>
								<button type="reset" class="btn">Limpar</button>
							</div>

						</fieldset>
					</div>
				</div><!--/span form monitoria-->
			</div><!--/row form-escuta monitoria-->
		</form>

		<?php include("control_consultaWeb.php");?>

	</div><!--/.fluid-container-->

	<!-- end: Content -->
</div><!--/#content.span10-->
</div><!--/fluid-row-->


<div class="clearfix"></div>
