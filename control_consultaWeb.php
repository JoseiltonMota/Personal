<?php

if(isset($_POST['consulta_web'])){

	$dt_ini = trim(strip_tags($_POST['dt_ini']));
	$dt_fim = trim(strip_tags($_POST['dt_fim']));
	$grupo = trim(strip_tags($_POST['id_grupo']));
	$matricula = trim(strip_tags($_POST['id_func']));

		// VALIDANDO SE OS CAMPOS ESTÃO VAZIOS.
	if(empty($dt_ini) || empty($dt_fim) || empty($grupo) || empty($matricula)){
		echo "<script>alert(\"Preencha todos os campos!\");</script>";
	}
	
	else{

		$timestamp1 = strtotime( $dt_ini );
		$timestamp2 = strtotime( $dt_fim );

		$dt_formatada_in = date('Y-m-d', $timestamp1);
		$dt_formatada_end = date('Y-m-d', $timestamp2);

		// O RESULTADO DA CONSULTA ABAIXO SERÁ EXIBIDO PARA O USUÁRIO DENTRO DA TABELA 

		$select = 
		"SELECT fu.nome as colaborador
		,rm.date_mon as date_mon
		,rm.ort_form as ort_form
		,rm.dem_tra as dem_tra
		,rm.dr as dr
		,rm.sicrp as sicrp
		,rm.qoai as qoai
		,rm.fluxo_soluc as fluxo_soluc
		,rm.reg_c as reg_c
		,rm.resu_c as resu_c
		,rm.causa_inc as causa_inc
		,rm.solic_inf as solic_inf
		,rm.categ_correto as categ_correto
		,rm.enc_correto as enc_correto
		,rm.ticket as ticket
		,rm.tipo_ticket as tipo_ticket
		,rm.obs as obs
		,rm.conceito as conceito
		,gr.nome as grupo
		,fuu.nome as monitora
		,rm.dt_insert as dt_insert
		
		FROM res_monitoria rm 
		
		INNER JOIN funcionario fu ON (fu.matricula = rm.matricula_func)
		INNER JOIN funcionario fuu ON (fuu.matricula = rm.mat_monitora)
		INNER JOIN grupo gr ON (gr.id = fu.id_grupo)

		WHERE  rm.date_mon BETWEEN '$dt_formatada_in' AND '$dt_formatada_end'
		AND gr.id = '$grupo'
		AND fu.matricula = '$matricula'
		ORDER BY 1, 2";
		?>

		<div class="row-fluid sortable">		
			<div class="box span12">
				<div class="box-header" data-original-title>
					<h2><i class="icon-align-justify"></i><span class="break"></span></h2>
					<div class="box-icon">
						<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
					</div>
				</div>
				<div class="box-content">
					<a href="report/mon_1n_web.php?dt_in=<?php echo $dt_formatada_in; ?>&dt_fim=<?php echo $dt_formatada_end; ?>&matricula=<?php echo $matricula; ?>&grupo=<?php echo $grupo; ?>" class="btn btn-default" style="float:right">Exportar para excel</a> 

					<table class="table table-condensed">
						<thead>
							<tr>
								<th title="Nome do colaborador">Anali</th>
								<th title="Data da monitoria realizada">Dt_mon</th>
								<th title="Ortografia/Formalidade">ort</th>
								<th title="Registros coerentes">reg</th>
								<th title="Resumo correto">resu</th>
								<th title="Causa raiz/Incidente pai/Tipo de demanda">cr</th>
								<th title="Solicitação/Atenção às informações necessárias">sol</th>
								<th title="Demandas tratadas">dt</th>
								<th title="Demandas resolvidas">dr</th>
								<th title="Fluxo correto/Existe solução em 1º nível/Solução bem elaborada">flu</th>
								<th title="Categorização correta">cat</th>
								<th title="Enchaminhamento correto">enc</th>
								<th title="Solução registrada incoerente com a resolução de problema">sic</th>
								<th title="Quaisquer outras atitudes indevidas">qoai</th>	
								<th title="Numero da demanda">tick</th>	
								<th title="Tipo da demanda, Requisição ou Incidente">tp_tick</th>	
								<th title="Observação">obs</th>
								<th title="Conceito">con</th>
								<th title="Grupamento do colaborador">Grupo</th>
								<th title="Nome do(a) monitor(a)">Monitora(o)</th>
								<th title="Data do atendimento">Dt_inserção</th>
							</tr>
						</thead>   
						<tbody>
							<?php try{
								$result = $conexao->prepare($select);
								$result->execute();

								$linha = $result->fetchall(PDO::FETCH_ASSOC);
								if (empty($linha)) {
									echo "<script>alert(\"Não foram encontrados registros no período selecionado!\");</script>";
								} else {
									foreach ($linha as $value) { ?>
									<tr>
										<td class="center"><?php echo $value['colaborador']?></td>
										<td class="center"><?php echo $value['date_mon']?></td>
										<td class="center"><?php echo $value['ort_form']?></td>
										<td class="center"><?php echo $value['reg_c']?></td>
										<td class="center"><?php echo $value['resu_c']?></td>
										<td class="center"><?php echo $value['causa_inc']?></td>
										<td class="center"><?php echo $value['solic_inf']?></td>
										<td class="center"><?php echo $value['dem_tra']?></td>
										<td class="center"><?php echo $value['dr']?></td>
										<td class="center"><?php echo $value['fluxo_soluc']?></td>
										<td class="center"><?php echo $value['categ_correto']?></td>
										<td class="center"><?php echo $value['enc_correto']?></td>
										<td class="center"><?php echo $value['sicrp']?></td>
										<td><?php echo $value['qoai']?></td>
										<td><?php echo $value['ticket']?></td>
										<td><?php echo $value['tipo_ticket']?></td>
										<td class="center"><?php echo $value['obs']?></td>
										<td><?php echo $value['conceito']?></td>
										<td class="center"><?php echo $value['grupo']?></td>
										<td><?php echo $value['monitora']?></td>
										<td><?php echo $value['dt_insert']?></td>
									</tr>
									<?php
								} // fim foreach 
							} //?>


								<?php } // fim Try
								

								catch(PDOException $e){
									echo $e;
								}

								?>
							</tbody>
						</table>            
					</div>
				</div><!--/span-->
			</div><!--/row-->
			<?php
	 } // Fim do Else
} // Fim do IF 

?>