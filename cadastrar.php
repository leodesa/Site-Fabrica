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
	if(isset($_POST['idAt'])){
		include('conexao.php');
		$tipoPeca = $_POST['AtuTipoPeca'];
		$id = $_POST['AtuId'];
		$sql1 = "UPDATE tipopeca SET tipopeca.nome = '$tipoPeca' WHERE tipopeca.id = '$id'";
		$mysqli->query($sql1);
	}
	if(isset($_POST['idEx'])){
		include('conexao.php');
		$idEx = $_POST['idEx'];
		$pastaDel = 'fotos';

		$sql = "SELECT membros.foto FROM membros WHERE membros.id = '$idEx'";
		$query = $mysqli->query($sql);
		$row = $query->num_rows;
		if($row>0){
			while($ress = mysqli_fetch_array($query)){
				$fotos = $ress[0];
			}
			$sql1 = "DELETE FROM membros WHERE membros.id = '$idEx'";
			$mysqli->query($sql1);
			unlink($pastaDel."/".$fotos);
		}
	}
?>