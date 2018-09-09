<?php
    //Conectando ao banco de dados
    
	if(isset($_POST['nomeI']) or isset($_POST['sobrenomeI']) or isset($_POST['matriculaI']) or isset($_POST['linkI'])){
		include('conexao.php');
		$nome = $_POST['nomeI'];
		$sobrenome = $_POST['sobrenomeI'];
		$matricula = $_POST['matriculaI'];
		$link = $_POST['linkI'];
		$sql = "SELECT membros.id, membros.nome, membros.sobrenome, membros.matricula, membros.link, membros.foto FROM membros WHERE membros.nome LIKE '%$nome%'";
		if(!empty($_POST['sobrenomeI'])){
			$sql .= " AND membros.sobrenome LIKE '%$sobrenome%'";
		}
		if(!empty($_POST['linkI'])){
			$sql .= " AND membros.link LIKE '%$link%'";
		}
		if(!empty($_POST['matriculaI'])){
			$sql .= " AND membros.matricula = '$matricula'";
		}
    //Consultando banco de dados
	$html = "";
	$qryLista = mysqli_query($mysqli, $sql);
	$query = $mysqli->query($sql);
	$row = $query->num_rows;
		if($row>0){
			$html .= "<table class='responsive-table'><thead><tr><th>ID</th><th>Nome</th><th>Matrícula</th><th>Lattes</th><th>Foto</th></thead><tbody>";
			while($ress = mysqli_fetch_array($qryLista)){
				$html .= "<tr class='modal-close' onclick=\"carregarIntegrante('$ress[0]');\"><td>".$ress[0]."</td><td>".$ress[1]." ".$ress[2]."</td><td>$ress[3]</td><td><a href='$ress[4]'>Acessar</a></td><td><img src='fotos/$ress[5]' width='50'></td></tr>";
			}
			$html .= "</tbody></table>";
			echo $html;	
		}else{
			echo "<table class='centered'><tr class='modal-close'><td>Nenhum resultado encontrado</td></tr></table>";		
		}
	}
	if(isset($_POST['idI'])){
		include('conexao.php');
		$id = $_POST['idI'];
		$sql = "SELECT membros.nome, membros.sobrenome, membros.matricula, membros.link, membros.descricao, membros.foto, membros.status FROM membros WHERE membros.id = '$id'";
		$query = $mysqli->query($sql);
		$row = $query->num_rows;
		if($row>0){
			while($ress = mysqli_fetch_array($query)){
				echo $ress[0].";".$ress[1].";".$ress[2].";".$ress[3].";".$ress[4].";".$ress[5].";".$ress[6];
			}
		}
	}
?>