<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8" />
<title>Log Firebase</title>

</head>

<body onload="retornarLogs()">

<?php

	require_once("firebase.php");

	echo "
	<h1><a href='./' target='_top' >LOGs</a></h1>
	<h2>Ultimos registros (JSON):</h2>
	<div id='exibelogs'>
		<table>
			<tr><td></td></tr>
			<tr id='id_2'></tr>
		</table>
	</div>";

	if($_GET) {
		require_once("Log.class.php");

		$log = new Log();
		$log->criaLog($_GET);

		echo "<br/> <a href='./' target='_top' >Voltar</a>";

		/* EXIBIR O RETORNO DO GET X getObjeto :: APENAS PARA CONFERENCIA
			$array = array($_GET);

			echo "<hr/> Log Get's <br/>";
			echo "PRODUTO: ". $log->getProduto() . "<br/>";
			echo "CLIENTE: ". $log->getCliente() . "<br/>";
			echo "DATA HORA: ". $log->getDatahora() . "<br/>";
			echo "CATEGORIA: ". $log->getCategoria() . "<br/>";
			echo "OPERACAO: ". $log->getOperacao() . "<br/>";

			echo "<hr/>";

		*/

	} else {
		echo "
		<h2>INSERIR REGISTRO MANUAL</h2>
		<h3>Favor, informe seus dados:</h3>
		<form action='' target='_top' >
			Produto: <input type='text' name='produto' value='' /> <br/>
			Cliente: <input type='text' name='cliente' value='' /> <br/>
			Data e Hora: <input type='text' name='dataHora' value='".(date('Y-m-d H:i:s'))."' /> <br/>
			Categoria: <input type='text' name='categoria' value='' /> <br/>
			Operacao: <input type='text' name='operacao' value='' /> <br/>
			<br/>
			<input type='submit' value='Enviar...'>
		</form>";

		echo "<br/> <a href='./' target='_top' >Voltar</a>";
	}

?>
</body>

</html>

