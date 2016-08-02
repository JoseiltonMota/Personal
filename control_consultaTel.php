<?php
include_once("conexao/conecta.php");

if(isset($_POST['consulta_tel'])){

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
		,rm.us as us
		,rm.atu_cad as atu_cad
		,rm.gent_usu as gent_usu
		,rm.dic_tim as dic_tim
		,rm.aus_ling as aus_ling
		,rm.person as person
		,rm.atencao as atencao
		,rm.argu as argu
		,rm.dem_tra as dem_tra
		,rm.dr as dr
		,rm.tma as tma
		,rm.iaas as iaas
		,rm.sicrp as sicrp
		,rm.qoai as qoai
		,rm.perd_host as perd_host
		,rm.oepe as oepe
		,rm.fluxo_soluc as fluxo_soluc
		,rm.gr_co as gr_co
		,rm.reg_c as reg_c
		,rm.resu_c as resu_c
		,rm.causa_inc as causa_inc
		,rm.solic_inf as solic_inf
		,rm.categ_correto as categ_correto
		,rm.tipo_dem as tipo_dem
		,rm.enc_correto as enc_correto
		,rm.ticket as ticket
		,rm.tipo_ticket as tipo_ticket
		,rm.tipo_ligacao as tipo_ligacao
		,rm.temp_ligacao as temp_ligacao
		,rm.hora_inicio as hora_inicio
		,rm.obs as obs
		,rm.conceito as conceito
		,fuu.nome as monitor
		,gr.nome as grupamento
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
		<a style="background-color: #008349; border-color: #00682E;" href="report/mon_1n_tel.php?dt_in=<?php echo $dt_formatada_in; ?>&dt_fim=<?php echo $dt_formatada_end; ?>&matricula=<?php echo $matricula; ?>&grupo=<?php echo $grupo; ?>" class="btn btn-default" style="float:right">Exportar monitoria completa</a> 
		<br></br>
		
		<div class="row-fluid sortable">
			<div class="box span12">
				<div class="box-header" data-original-title>
					<h2><i class="icon-align-justify"></i><span class="break"> Resumo da monitoria</span></h2>
					<div class="box-icon">
						<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
					</div>
				</div>
				<div class="box-content">

					<!-- Botão que chama a função exportar_excel -->

					<table class="table table-striped table-bordered bootstrap-datatable datatable dataTable">
						<thead>
							<th class="center"  title="Nome do colaborador">Analista</th>
							<th class="center" title="Data da monitoria realizada">Dt_monitoria</th>
							<th title="Observação">Obs</th>
							<th title="Conceito">Conceito</th>
							<th title="Grupamento do(a) colaborador(a)">Grupo</th>
							<th title="Nome do(a) monitor(a)">Monitor(a)</th>
							<th title="Data de atendimento">Dt_inserção</th>
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
										<td><?php echo $value['colaborador']?></td>
										<td><?php echo $value['date_mon']?></td>
										<td><?php echo utf8_encode($value['obs'])?></td>
										<td><?php echo $value['conceito']?></td>
										<td><?php echo $value['grupamento']?></td>
										<td><?php echo utf8_encode($value['monitor'])?></td>
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