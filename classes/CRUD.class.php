<?php
	class CRUD{
		public function VerificarTipoArquivo($tipo){
			$tipoArquivo = array("Contrato Social e Aditivos", "CNPJ", "Inscrição Municipal", "CGF", "RG e CPF", "Certidão Federal (Portaria nº1751 02/10/2014)","Certidão Estadual", "Certidão Municipal", "Certidão de Regularidade com FGTS","Certidão Falência","Balanço Patrimonial (Conforme Lei 123 das empresas ME/EPP optante do Simples Nacional, estão dispensadas)", "CREA (se for o caso Construção ou Prestador de Serviços de Engenharia)");
			$tipoInt = (int) $tipo;
			return $tipoArquivo[$tipoInt-1];
		}
		public function verificarLogin($usuario, $pass){
			include("conexao.php");
			$sql = "SELECT * FROM login WHERE usuario='$usuario' AND senha='$pass'" or die("Erro ao selecionar");
			$query = $mysqli->query($sql);
			$row = $query->num_rows;
			if ($row>0){
				setcookie(md5('userFabrica'),$usuario);
				setcookie(md5('senhaFabrica'),$pass);
				$sql2 = mysqli_query($mysqli, "SELECT login.nivel FROM login WHERE usuario = '$usuario' AND senha = '$pass'");
				while($valor = mysqli_fetch_array($sql2)){
					$nivel = $valor[0];
				}
				if($nivel==2){
					header('Location: login.php');
				}else if($nivel==1){
					header('Location: cadastro.php');
				}
			}else{
				echo ("<script>
					window.alert('Dados Incorretos!')
					window.location.href='login.php';
				</script>");
			}
		}
		public function verificarNivel($nivelU){
			include("conexao.php");
			if (isset($_COOKIE[md5('userFabrica')]) and isset($_COOKIE[md5('senhaFabrica')])){
				$usuarioCookie = $_COOKIE[md5('userFabrica')];
				$senhaCookie = $_COOKIE[md5('senhaFabrica')];
			if($nivelU==1){
					$sql = "SELECT * FROM login WHERE usuario='$usuarioCookie' AND senha='$senhaCookie' AND nivel= '1'" or die("Erro ao selecionar");
					$query = $mysqli->query($sql);
					$row = $query->num_rows;
					if ($row>0){
					}else{
						echo "<script type='text/javascript'> alert('Acesso negado!'); location.href='logout.php';</script>";
					}
			}
			if($nivelU==2){
					$sql = "SELECT * FROM login WHERE usuario='$usuarioCookie' AND senha='$senhaCookie' AND nivel= '2'" or die("Erro ao selecionar");
					$query = $mysqli->query($sql);
					$row = $query->num_rows;
					if ($row>0){
					}else{
						echo "<script type='text/javascript'> alert('Acesso negado!'); location.href='logout.php';</script>";
					}
				}
			}else{
						echo("<script type='text/javascript'> alert('Acesso negado!'); location.href='logout.php';</script>");
					}
		}
		public function cadastrarPaciente($nomeP,$nomePai,$nomeMae,$dtNasc,$cns,$complemento,$bairro,$telefone,$uf,$cidade,$sexo,$numeroCasa,$rua,$celular1,$celular2,$email){
			include("conexao.php");
			$sql1 = "INSERT INTO pacientes VALUES(null, '$nomeP','$nomeMae','$nomePai','$dtNasc','$sexo','$cns','$rua','$bairro','$numeroCasa','$complemento','$uf','$cidade','$telefone','$celular1','$celular2','$email')";
			if($mysqli->query($sql1)){
				echo("<script type='text/javascript'> alert('Paciente cadastrado com sucesso!'); location.href='cadastro.php';</script>");
			}else{
				echo("<script type='text/javascript'> alert('Houve um erro! tente novamente.'); location.href='cadastro.php';</script>");
			}
		}
		public function cadastrarMedico($nomeMedico,$especialidade,$numConselho,$uf){
			include("conexao.php");
			$sql1 = "INSERT INTO medicos VALUES(null, '$nomeMedico','$especialidade','$numConselho','$uf','1')";
			if($mysqli->query($sql1)){
				echo("<script type='text/javascript'> alert('Médico cadastrado com sucesso!'); location.href='cadastroMedico.php';</script>");
			}else{
				echo("<script type='text/javascript'> alert('Houve um erro! tente novamente.'); location.href='cadastroMedico.php';</script>");
			}
		}
		
		
		//Atualizar Fornecedor
		
		public function atualizarFornecedor($userUp,$senhaa,$rasao,$fantasia,$cnpj,$cgf,$rua,$numeroCasa,$complemento,$bairro,$telefone,$uf,$cidade,$nomeBanco,$agencia,$contaCorrente,$socio,$qtdeSocios,$idFornecedor){
			$chars = array(".","/","-");
			$cnpj2 = str_replace($chars,"",$cnpj);
			include("conexao.php");
			date_default_timezone_set('America/Fortaleza');
			$data = date('Y-m-d H:i:s');
			$sql1 = "UPDATE fornecedores SET rasao = '$rasao', fantasia = '$fantasia', cnpj = '$cnpj2', cgf = '$cgf', rua = '$rua', numeroCasa = '$numeroCasa', complemento = '$complemento', bairro = '$bairro', telefone = '$telefone', uf = '$uf', cidade = '$cidade', nomeBanco = '$nomeBanco', agencia = '$agencia', contaCorrente = '$contaCorrente' , entrada = '$data', status = 2, visto = '1' WHERE id = '$idFornecedor'";
			if($mysqli->query($sql1)){
			}else{
				echo("<script type='text/javascript'> alert('Houve um erro! tente novamente'); location.href='inicio.php';</script>");
			}
			$sql3 = "DELETE FROM socios WHERE vinculo='$idFornecedor'";
			if($mysqli->query($sql3)){
			}else{
				echo("<script type='text/javascript'> alert('Houve um erro! tente novamente'); location.href='inicio.php';</script>");
			}
			if($userUp!=""){
				$sql2 = "UPDATE login SET usuario = '$userUp' WHERE vinculo = '$idFornecedor'";
				if($mysqli->query($sql2)){
					setcookie(md5('userFabrica'),$userUp);
				}else{
					echo("<script type='text/javascript'> alert('Houve um erro! tente novamente'); location.href='inicio.php';</script>");
				}
			}
			if($senhaa!=""){
				$sql5 = "UPDATE login SET senha = '$senhaa' WHERE vinculo = '$idFornecedor'";
				if($mysqli->query($sql5)){
					setcookie(md5('senhaFabrica'),$senhaa);
				}else{
					echo("<script type='text/javascript'> alert('Houve um erro! tente novamente'); location.href='inicio.php';</script>");
				}
			}
			$sql6 = "UPDATE fornecedores SET sit='1' WHERE fornecedores.id='$idFornecedor'";
			$mysqli->query($sql6);
			for($j = 0; $j < $qtdeSocios; $j++){
					$nomeSocio = $socio[$j]->nome;
					$cpfSocio = $socio[$j]->cpf;
					$quantiSocio = $socio[$j]->quantificacaoSocio;
					$telSocio = $socio[$j]->telefoneSocios;
					$celSocio = $socio[$j]->celularSocio;
					$mailSocio = $socio[$j]->emailSocio;
					if(($nomeSocio!="") and ($cpfSocio!="") and ($quantiSocio!="") and ($telSocio!="") and ($celSocio!="") and ($mailSocio!="")){
						$sql4 = "INSERT INTO socios VALUES(null, '$nomeSocio','$cpfSocio','$quantiSocio','$telSocio','$celSocio','$mailSocio','$idFornecedor')";
						if($mysqli->query($sql4)){
							echo("<script type='text/javascript'> alert('Atualizado com sucesso!'); location.href='inicio.php';</script>");
						}else{
							echo("<script type='text/javascript'> alert('Houve um erro! tente novamente'); location.href='inicio.php';</script>");
						}
					}
			}
			echo("<script type='text/javascript'> alert('Atualizado com sucesso!'); location.href='inicio.php';</script>");
		}
	}
?>


