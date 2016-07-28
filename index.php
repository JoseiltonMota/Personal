<html lang="pt-br">
<head>
	<meta http-equiv="Content-Type" charset="iso-8859-1" />
	<link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" media="screen">

	<script type="text/javascript"> // Obrigando letra em Maisculo
	function toUpper() {
		// Transformando em maiusculo
		nomeGrupo = document.getElementById("grupo");
		nomeGrupo.value = nomeGrupo.value.toUpperCase();
	}
</script> <!-- Fim Letra Maisculo-->

<script language="JavaScript"> //Inicio Validação da Data 


function VerificaData(digData) {
	var bissexto = 0;
	var data = digData;
	var tam = data.length;

	if (tam == 10) 	{

		var dia = data.substr(0,2); 
		var mes = data.substr(3,2);
		var ano = data.substr(6,4);

		if ((ano > 1900) || (ano < 2100)){
			switch (mes){
				case '01':
				case '03':
				case '05':
				case '07':
				case '08':
				case '10':
				case '12':
				
				if  (dia <= 31){
					return true;
				} break	

				case '04':
				case '06':
				case '09':
				case '11':
				
				if  (dia <= 30){
					return true;
				} break

				case '02':
				/* Validando ano Bissexto / fevereiro / dia */
				if ((ano % 4 == 0) || (ano % 100 == 0) || (ano % 400 == 0)){
					bissexto = 1;
				}
				if ((bissexto == 1) && (dia <= 29)){
					return true;
				}
				if ((bissexto != 1) && (dia <= 28)){
					return true;
				} break
			}
		}
	}

	else {
		alert("O formato de data inserido é inválido!");
		return false;
	}
}
</script> <!-- Fim Validação data-->

<!-- Incluindo o jQuery que é requisito do JavaScript do Bootstrap --> 
<script src="http://code.jquery.com/jquery-latest.js"></script> 

<!-- Incluindo o JavaScript do Bootstrap --> 
<script src="bootstrap/dist/js/bootstrap.min.js"></script> 


<script src="jquery-ui/jquery-ui.js"></script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<link href="bootstrap/dist/css/bootstrap-chosen.css" rel="stylesheet" media="screen">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="http://harvesthq.github.io/chosen/chosen.jquery.js"></script>
<script>

$(function() {
	$('.chosen-select').chosen();
	$('.chosen-select-deselect').chosen({ allow_single_deselect: true });
});
</script>
<title>Absenteismo 3121</title>
<style>
.modal .modal-header .btn{
	position: absolute;
	top: 0;
	border-bottom-right-radius: 0;
	border-top-left-radius: 0;
	margin-top: 0;
	right: 0;
}
</style>
</head>



<body>

	<?php include_once("controller/veri.php"); ?>

	<?php
// Chamando o menu
	require_once('menu.php'); 
	?>

	<div style="position: absolute">
		<img src="img/logo-banco-nordeste.png" style="margin-left: 10px; padding-top: 0px;" class="img-responsive" alt="Cinque Terre" width="200" height="150"> 
	</div>

	<div >
		<img src="img/stefanini.png" style="float: right; margin-right: 10px; padding-top: 0px;" class="img-responsive"> 
	</div>

	<?php

// Se "cod" tiver algum valor e se existir
	if ((isset($_GET['cod'])) and !(empty($_GET['cod']))){
		switch($_GET['cod']){
			case 1: {include_once('view/cadastro/cadastroFalta.php');}
			break;

			case 2: {include_once('view/cadastro/cadastroFuncionario.php');}
			break;

		 //case 3: {include_once('login.php');}
		 //break;

			case 4: {include_once('view/cadastro/cadastroUsuario.php');}
			break;

			case 5: {include_once('view/cadastro/cadastroGrupo.php');}
			break;

			case 6: {include_once('view/consulta/consultaFalta.php');}
			break;

			case 7: {include_once('view/consulta/consultaFuncionario.php');}
			break;

			default: {header("Location: signin/login.php");}
			break;
		}
	} else {
		include_once('view/cadastro/cadastroFalta.php');
	}

	?>

</body>
</html>

