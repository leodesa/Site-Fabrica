<?php
	include('classes/CRUD.class.php');
	if(isset($_POST['usuario'])){
		$usuario = md5($_POST['usuario']);
		$pass = md5($_POST['senha']);
		$CRUD = new CRUD;
		$CRUD->verificarLogin($usuario,$pass);
	}
	/*if(isset($_POST['nome'])){
		$nome = $_POST['nome'];
		$sobrenome = $_POST['sobrenome'];
		$nomeMae = $_POST['nomeMae'];
		$dtNasc = $_POST['dtNasc'];
		$cns = $_POST['cns'];
		$complemento = $_POST['complemento'];
		$bairro = $_POST['bairro'];
		$telefone = $_POST['telefone'];
		$uf = $_POST['uf'];
		$cidade = $_POST['cidade'];
		$sexo = $_POST['sexo'];
		$numeroCasa = $_POST['numeroCasa'];
		$rua = $_POST['rua'];
		$celular1 = $_POST['celular1'];
		$celular2 = $_POST['celular2'];
		$email = $_POST['email'];
		$CRUD = new CRUD;
		$CRUD->cadastrarPaciente($nomeP,$nomePai,$nomeMae,$dtNasc,$cns,$complemento,$bairro,$telefone,$uf,$cidade,$sexo,$numeroCasa,$rua,$celular1,$celular2,$email);
	}
	if(isset($_POST['nomeMedico'])){
		$nomeMedico = $_POST['nomeMedico'];
		$especialidade = $_POST['especialidade'];
		$numConselho = $_POST['numConselho'];
		$uf = $_POST['uf'];
		$CRUD = new CRUD;
		$CRUD->cadastrarMedico($nomeMedico,$especialidade,$numConselho,$uf);
	}
	
	//Atualizar Cadastro
	if(isset($_POST['atualizar'])){
		include("conexao.php");
		if(!empty($_POST['usuarioCad'])){
			$userUp = md5($_POST['usuarioCad']);
			$senhaa = md5($_POST['senha']);
			$sql = "SELECT * FROM login WHERE usuario = '$userUp' limit 1" or die("erro ao selecionar");
			$query = $mysqli->query($sql);
			$linhas = $query->num_rows;
			if ($linhas>0){
				echo("<script type='text/javascript'> alert('Nome de usuário já cadastrado!'); location.href='cadastro.php';</script>");
				return false;
			}
			
		}else{
			$userUp = "";
			$senhaa = "";
		}
		$id = $_POST['atualizar'];
		$cnpj = $_POST['cnpj'];
		$chars = array(".","/","-");
		$cnpj2 = str_replace($chars,"",$cnpj);
		$sql44 = "SELECT * FROM fornecedores WHERE cnpj = '$cnpj2' AND id='$id'" or die("erro ao selecionar");
		$query44 = $mysqli->query($sql44);
		$linhas44 = $query44->num_rows;
		if ($linhas44>0){
			
		}else{
		$sql33 = "SELECT * FROM fornecedores WHERE cnpj = '$cnpj2' limit 1" or die("erro ao selecionar");
		$query33 = $mysqli->query($sql33);
		$linhas33 = $query33->num_rows;
		if ($linhas33>0){
			echo("<script type='text/javascript'> alert('CNPJ já cadastrado!'); location.href='inicio.php';</script>");
			return false;
		}}
		
		$rasao = $_POST['rasaoSocial'];
		$fantasia = $_POST['fantasia'];
		$cgf = $_POST['cgf'];
		$rua = $_POST['rua'];
		$numeroCasa = $_POST['numeroCasa'];
		$complemento = $_POST['complemento'];
		$bairro = $_POST['bairro'];
		$telefone = $_POST['telefone'];
		$uf = $_POST['uf'];
		$cidade = $_POST['cidade'];
		$nomeBanco = $_POST['nomeBanco'];
		$agencia = $_POST['agencia'];
		$contaCorrente = $_POST['contaCorrente'];
		$qtdeSocios = (int)$_POST['qtdeSocios'];
		$socio = array("","","","","","","","","","");
		for($i = 1; $i <= $qtdeSocios; $i++){
			$nomeSocio = $_POST['nomeSocio'.$i];
			$cpfSocio = $_POST['cpfSocio'.$i];
			$quantificacaoSocio = $_POST['quantificacaoSocio'.$i];
			$telefoneSocios = $_POST['telefoneSocios'.$i];
			$celularSocio = $_POST['celularSocio'.$i];
			$emailSocio = $_POST['emailSocio'.$i];
			$dados = array('nome' =>"$nomeSocio", 'cpf'=>"$cpfSocio", 'quantificacaoSocio'=>"$quantificacaoSocio", 'telefoneSocios'=>"$telefoneSocios", 'celularSocio'=>"$celularSocio", 'emailSocio'=>"$emailSocio");
			for($k = 0; $k < $qtdeSocios; $k++){
				if($socio[$k]==""){
					$socio[$k] = (object)$dados;
					break;
				}
			}
		}
		$CRUD = new CRUD;
		$CRUD->atualizarFornecedor($userUp,$senhaa,$rasao,$fantasia,$cnpj,$cgf,$rua,$numeroCasa,$complemento,$bairro,$telefone,$uf,$cidade,$nomeBanco,$agencia,$contaCorrente,$socio,$qtdeSocios,$id);
	}
	if(isset($_POST['msg'])){
		include("conexao.php");
		$msg = $_POST['msg'];
		$idf = $_POST['idf'];
		date_default_timezone_set('America/Fortaleza');
		$data = date('Y-m-d H:i');
		$sql = "INSERT INTO recomendacoes VALUES(null,'$msg','$data','$idf')";
		$mysqli->query($sql);
		$sql3 = "UPDATE fornecedores SET sit='3' WHERE fornecedores.id='$idf'";
		$mysqli->query($sql3);
	}
	if(isset($_POST['idAprovado'])){
		include("conexao.php");
		$idf = $_POST['idAprovado'];
		$sql = "UPDATE fornecedores SET sit='2' WHERE fornecedores.id='$idf'";
		$mysqli->query($sql);
	}*/

	
	if(isset($_POST['nome']) AND empty($_POST['idIntegrante'])){
		$nome = $_POST['nome'];
		$sobrenome = $_POST['sobrenome'];
		$matricula = $_POST['matricula'];
		$link = $_POST['link'];
		$descricao = $_POST['descricao'];
		include("conexao.php");
	if(isset($_FILES['foto'])){
      date_default_timezone_set("Brazil/East"); //Definindo timezone padrão

	  $ext = ltrim( substr(  $_FILES['foto']['name'], strrpos(  $_FILES['foto']['name'], '.' ) ), '.' ); //Pegando extensão do arquivo
      $new_name = md5(date("Y.m.d-H.i.s")) . "." . $ext; //Definindo um novo nome para o arquivo
      $dir = 'fotos/'; //Diretório para uploads

   
	$sql4 = "INSERT INTO membros VALUES(null, '$nome','$sobrenome','$matricula','$link','$descricao','$new_name','1')";
	if($mysqli->query($sql4) AND move_uploaded_file($_FILES['foto']['tmp_name'], $dir.$new_name)){
		echo("<script type='text/javascript'> alert('Salvo com sucesso!'); location.href='cadastroIntegrante.php';</script>");
	}else{
		echo("<script type='text/javascript'> alert('Houve um erro! tente novamente'); location.href='cadastroIntegrante.php';</script>");
	}
		}
	}
	if(!empty($_POST['idIntegrante'])){
		$id = $_POST['idIntegrante'];
		$nome = $_POST['nome'];
		$sobrenome = $_POST['sobrenome'];
		$matricula = $_POST['matricula'];
		$link = $_POST['link'];
		$descricao = $_POST['descricao'];
		$nomeFoto = $_POST['nomeFoto'];
		include("conexao.php");
		$sql = "SELECT membros.foto FROM membros WHERE membros.foto = '$nomeFoto'";
		$query = $mysqli->query($sql);
		$sql2 = "SELECT membros.foto FROM membros WHERE membros.id = '$id'";
		$query2 = $mysqli->query($sql2);
		$row = $query->num_rows;
		if($row<1){
			while($ress = mysqli_fetch_array($query2)){
				$fotos = $ress[0];
			}
			$pastaDel = 'fotos';
			unlink($pastaDel."/".$fotos);
			if(isset($_FILES['foto'])){
				date_default_timezone_set("Brazil/East"); //Definindo timezone padrão

				$ext = ltrim( substr(  $_FILES['foto']['name'], strrpos(  $_FILES['foto']['name'], '.' ) ), '.' ); //Pegando extensão do arquivo
				$new_name = md5(date("Y.m.d-H.i.s")) . "." . $ext; //Definindo um novo nome para o arquivo
				$dir = 'fotos/'; //Diretório para uploads

		   
				$sql4 = "UPDATE membros SET membros.foto='$new_name', membros.nome='$nome', membros.sobrenome='$sobrenome', membros.matricula='$matricula', membros.link='$link', membros.descricao='$descricao' WHERE membros.id = '$id'";
			if($mysqli->query($sql4) AND move_uploaded_file($_FILES['foto']['tmp_name'], $dir.$new_name)){
				echo("<script type='text/javascript'> alert('Atualizado com sucesso!'); location.href='cadastroIntegrante.php';</script>");
			}else{
				echo("<script type='text/javascript'> alert('Houve um erro! tente novamente'); location.href='cadastroIntegrante.php';</script>");
			}
		}
		}else{
			$sql4 = "UPDATE membros SET membros.nome='$nome', membros.sobrenome='$sobrenome', membros.matricula='$matricula', membros.link='$link', membros.descricao='$descricao' WHERE membros.id = '$id'";
			if($mysqli->query($sql4)){
				echo("<script type='text/javascript'> alert('Atualizado com sucesso!'); location.href='cadastroIntegrante.php';</script>");
			}else{
				echo("<script type='text/javascript'> alert('Houve um erro! tente novamente'); location.href='cadastroIntegrante.php';</script>");
			}
		}
	
	}
?>