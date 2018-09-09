<?php
    //Conectando ao banco de dados
	if(isset($_POST['nomePeca'])){
		include('conexao.php');
		$nomePeca = $_POST['nomePeca'];
		$descPeca = $_POST['descPeca'];
		$tipoPeca = $_POST['tipoPeca'];
		$cor = $_POST['cor'];
		$fabricante = $_POST['fabricante'];
		$compra = $_POST['compra'];
		$revenda = $_POST['revenda'];
		$qtde = $_POST['qtde'];
		$sql1 = "INSERT INTO pecas VALUES(null, '$nomePeca','$descPeca','$tipoPeca','$cor','$fabricante','$compra','$revenda','$qtde')";
		$mysqli->query($sql1);
	}
	if(isset($_POST['CadTipoPeca'])){
		include('conexao.php');
		$tipoPeca = $_POST['CadTipoPeca'];
		$sql1 = "INSERT INTO tipoPeca VALUES(null, '$tipoPeca')";
		$mysqli->query($sql1);
	}
	if(isset($_POST['AtuTipoPeca'])){
		include('conexao.php');
		$tipoPeca = $_POST['AtuTipoPeca'];
		$id = $_POST['AtuId'];
		$sql1 = "UPDATE tipopeca SET tipopeca.nome = '$tipoPeca' WHERE tipopeca.id = '$id'";
		$mysqli->query($sql1);
	}
	if(isset($_POST['idEx'])){
		include('conexao.php');
		$idEx = $_POST['idEx'];
		$sql1 = "DELETE FROM tipopeca WHERE tipopeca.id = '$idEx'";
		$mysqli->query($sql1);
	}
?>