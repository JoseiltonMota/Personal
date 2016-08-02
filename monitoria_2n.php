			<!-- start: Content -->
			<div id="content" class="span10">

				<ul class="breadcrumb">
					<img style="width: 180px; height: 40px;" src="img/logo_stefanini.png" alt=""> <!-- logo Stefanini -->
					<li>
						<i class="icon-home"></i>
						<a href="index.php">Home</a>
						<i class="icon-angle-right"></i> 
					</li>
					<li>
						<i class=""></i>
						<a href="#">Monitoria 2° Nivel</a>
					</li>
				</ul>
				
				<?php include("controller/cadastro/monitoria_2n.php");?>

				<form class="form-horizontal" method="post">

					<!-- start: Monitoria -->
					<div class="row-fluid sortable">
						<div class="box span12"> <!--/span form-escuta-->
							<div class="box-header" data-original-title>
								<h2><i class="halflings-icon white edit"></i><span class="break"></span>Monitoria</h2>
								<div class="box-icon">
									<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
								</div>
							</div>
							
							<div class="box-content">
								<fieldset>
									<!-- start: Analista -->										
									<div class="control-group">
										<label class="control-label" for="selectAnalista">* Analista</label>
										<div class="controls">
											<select id="selectAnalista" style="width:400px;" data-rel="chosen" name="matricula_func">
												<option value=""></option>
												<?php
												$select = "SELECT matricula, nome FROM funcionario  WHERE id_grupo <> 7004 ORDER BY 2";

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
								</div><!-- end: Analista -->
								
								
								<!-- start: Data Monitoria -->
								<div class="control-group">
									<label class="control-label" for="date01">Data da monitoria </label>
									<div class="controls">
										<input type="text" class="input-xlarge datepicker" id="date01" name="date_mon" placeholder="dd/mm/aaaa">
									</div>
								</div>

								
							</div>
						</div><!--/span form monitoria-->
					</div><!--/row form-escuta monitoria-->
					<!-- end: Data Monitoria -->

					<br /><br />

					<!-- start: Escuta -->
					<div class="row-fluid sortable">
						<div class="box span12"> <!--/span form-escuta-->
							<div class="box-header" data-original-title>
								<h2><i class="halflings-icon white edit"></i><span class="break"></span>Critérios</h2>
								<div class="box-icon">
									<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
								</div>
							</div>
							<div class="box-content">
								<fieldset>

									<div class="control-group">
										<label class="control-label" for="sac">Status atualizados corretamente</label>
										<div class="controls">
											<select id="sac" name="sac" required>
												<option></option>
												<option>0</option>
												<option>15</option>
											</select>
										</div>
									</div>

									<div class="control-group">
										<label class="control-label" for="rec">Retornos enviados corretamente</label>
										<div class="controls">
											<select id="rec" name="rec" required>
												<option></option>
												<option>0</option>
												<option>6</option>
											</select>
										</div>
									</div>

									<div class="control-group">
										<label class="control-label" for="dr">Demandas resolvidas</label>
										<div class="controls">
											<select id="dr" name="dr" required>
												<option></option>
												<option>0</option>
												<option>20</option>
											</select>
										</div>
									</div>

									<div class="control-group">
										<label class="control-label" for="dsegd">Descrição sem erros gramaticais e de digitação</label>
										<div class="controls">
											<select id="dsegd" name="dsegd" required>
												<option></option>
												<option>0</option>
												<option>5</option>
											</select>
										</div>
									</div>

									<div class="control-group">
										<label class="control-label" for="lccc">Logs claros, corretos e coerentes</label>
										<div class="controls">
											<select id="lccc" name="lccc" required>
												<option></option>
												<option>0</option>
												<option>10</option>
											</select>
										</div>
									</div>

									<div class="control-group">
										<label class="control-label" for="iarc">Informações adicionais registradas corretamente</label>
										<div class="controls">
											<select id="iarc" name="iarc" required>
												<option></option>
												<option>0</option>
												<option>6</option>
											</select>
										</div>
									</div>

									<div class="control-group">
										<label class="control-label" for="a_ima">Atendeu ao IMA2</label>
										<div class="controls">
											<select id="a_ima"  name="a_ima" required>
												<option></option>]
												<option>0</option>
												<option>14</option>
											</select>
										</div>
									</div>

									<div class="control-group">
										<label class="control-label" for="a_iad">Atendeu ao IAD</label>
										<div class="controls">
											<select id="a_iad" name="a_iad" required>
												<option></option>
												<option>0</option>
												<option>14</option>
											</select>
										</div>
									</div>

									<div class="control-group">
										<label class="control-label" for="ocob_ps">Obteve conceito ÓTIMO/BOM na Pesquisa de Satisfação</label>
										<div class="controls">
											<select id="ocob_ps" name="ocob_ps" required>
												<option></option>
												<option>0</option>
												<option>10</option>
											</select>
										</div>
									</div>


								</fieldset>
							</div>
						</div><!--/span form monitoria-->
					</div><!--/row form-escuta monitoria-->
					<!-- end: Escuta -->


					<!-- start: Desclassificação -->
					<div class="row-fluid sortable">
						<div class="box span12" style="border-color: rgb(204, 74, 74);"> <!--/span form-escuta-->
							<div class="box-header" style="background: #FF4F4F" data-original-title>
								<h2><i class="halflings-icon white edit"></i><span class="break"></span>Desclassificação</h2>
								<div class="box-icon">
									<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
								</div>
							</div>
							<div class="box-content">
								<fieldset>

									<div class="control-group">
										<label class="control-label" for="oepe">Omissão ou esquiva em prestar esclarecimento</label>
										<div class="controls">
											<select id="oepe"  name="oepe" required>
												<option></option>
												<option>SIM</option>
												<option>NAO</option>
											</select>
										</div>
									</div>

									<div class="control-group">
										<label class="control-label" for="atin">Atitudes indevidas</label>
										<div class="controls">
											<select id="atin" name="atin" required>
												<option></option>
												<option>SIM</option>
												<option>NAO</option>
											</select>
										</div>
									</div>							

								</fieldset>
							</div>
						</div><!--/span -->
					</div><!--/row -->
					<!-- end: Desclassificação -->

					<div class="row-fluid sortable">
						<div class="box span12"> <!--/span form-escuta-->
							<div class="box-header" data-original-title>
								<h2><i class="halflings-icon white edit"></i><span class="break"></span>Notas</h2>
								<div class="box-icon">
									<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
								</div>
							</div>
							<div class="box-content">
								<fieldset>

									<!-- start: Data Monitoria -->
									<div class="control-group">
										<label class="control-label" for="ticket">N° Demanda </label>
										<div class="controls">
											<input type="text" id="ticket" placeholder="Numero da demanda" name="ticket" required>
										</div>
									</div>

									<div class="control-group">
										<label class="control-label" for="tipo_ticket">Tipo de demanda</label>
										<div class="controls">
											<select id="tipo_ticket" name="tipo_ticket" placeholder="Incidente ou requisição" required>
												<option></option>
												<option>REQUISICAO</option>
												<option>INCIDENTE</option>
											</select>
										</div>
									</div>	


									<div class="control-group">
										<label class="control-label" for="textarea">Observações</label>
										<div class="controls">
											<textarea class="form-control" id="textarea" name="obs" required></textarea>
										</div>
									</div>

									<div class="form-actions ">
										<button data-toggle="modal" href="#mon2n" class="btn btn-primary" >Salvar</button>
										<button type="reset" class="btn">Limpar</button>
									</div>
								</fieldset>
							</div>
						</diV>
					</div>

					<div class="modal hide fade" id="mon2n">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">×</button>
							<h3>Confirmação</h3>
						</div>
						<div class="modal-body">
							<p>Tem certeza que deseja sair?</p>
						</div>
						<div class="modal-footer">
							<a href="#" class="btn" data-dismiss="modal">Cancelar</a>
							<button type="submit" class="btn btn-primary" name="mon_n2"><span class="glyphicon glyphicon-check"></span>Salvar</button>
						</div>
					</div>

				</form>
			</div>

		</div>
	</div>
</div>