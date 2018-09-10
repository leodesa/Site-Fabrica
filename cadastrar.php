<?php
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
	if(isset($_POST['new_user'])){
		include('conexao.php');
		$new_user = md5($_POST['new_user']);
		$senhaUser = md5($_POST['senhaUser']);
		$usuarioCookie = $_COOKIE[md5('userFabrica')];
		$sql = "SELECT * FROM login WHERE login.usuario = '$usuarioCookie' AND login.senha = '$senhaUser'";
		$query = $mysqli->query($sql);
		$row = $query->num_rows;
		if($row>0){
			$sql1 = "UPDATE login SET login.usuario = '$new_user' WHERE login.usuario = '$usuarioCookie' AND login.senha = '$senhaUser'";
			$mysqli->query($sql1);
			setcookie(md5('userFabrica'),$new_user);
			echo "Nome de usuário atualizado com sucesso!";
		}else{
			echo "Senha atual incorreta!";
		}
	}
	if(isset($_POST['senhas'])){
		include('conexao.php');
		$senha = md5($_POST['senhas']);
		$senhaAt = md5($_POST['senhaAt']);
		$usuarioCookie = $_COOKIE[md5('userFabrica')];
		$sql = "SELECT * FROM login WHERE login.usuario = '$usuarioCookie' AND login.senha = '$senhaAt'";
		$query = $mysqli->query($sql);
		$row = $query->num_rows;
		if($row>0){
			$sql1 = "UPDATE login SET login.senha = '$senha' WHERE login.usuario = '$usuarioCookie' AND login.senha = '$senhaAt'";
			$mysqli->query($sql1);
			setcookie(md5('senhaFabrica'),$senha);
			echo "Senha atualizada com sucesso!";
		}else{
			echo "Senha atual incorreta!";
		}
	}
?>