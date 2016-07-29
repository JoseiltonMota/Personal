<?php
include("controller/veri.php");
include("conexao/conecta.php");
?>

<div class="container-fluid">
	<form class="col-md-6 col-md-offset-3" method="post">
		<div class="row"> <!-- Row 1 -->
			<div class="col-xs-5 col-sm-5 col-md-5">
				<label class="control-label">* De:</label>
				<div class="form-group">
					<input type="date" class="form-control" id="date_mon" name="dt_ini" />
				</div>
			</div>

			<div class="col-xs-5 col-sm-5 col-md-5">
				<label class="control-label">* Até:</label>
				<div class="form-group">
					<input type="date" class="form-control" id="date_mon" name="dt_fim" />
				</div>
			</div>
		</div>

		<div class="form-group">
			<label class="exampleInputName2">* Grupo</label>
			<select class="form-control chosen-select" data-placeholder="Selecionar grupo" name="id_grupo">
				<option value=""></option>
				<?php
				$select = "SELECT * FROM grupo";

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

	<?php if ($_SESSION['nivelsession']==1) {?>
	<div class="form-group">
		<label class="exampleInputName2">Order By</label>
		<select class="form-control" data-placeholder="Ordenar por" name="order_by">
			<option value="3"></option>
			<option value="1">DESC</option>
			<option value="4, 2">GRUPO, NOME</option>

		</select>
	</div>
	<?PHP } ?>


	<input type="submit" name="consulta_falta" value="Consultar" class="btn btn-primary"></input>	
</form>

<br />

<?php include("controller/consulta/cons_falta.php"); ?>


</body>
</head>