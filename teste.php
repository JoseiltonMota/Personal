<?php

$dt_limite = 01/01/2017;
$t = 05/02/2016;

echo $timestamp_limite = strtotime($dt_limite) . " - ";
echo $dt = strtotime($t) . " - ";


if ($dt > $timestamp_limite){
	echo 'Falha ao cadastrar falta';
} else {
	echo 'sdf';
}

?>