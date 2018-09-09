<?php
    //Conectando ao banco de dados
    
	if(isset($_POST['tipoPecaB'])){
	include('conexao.php');
    $tipoPeca = $_POST['tipoPecaB'];
    //Consultando banco de dados
	$html = "";
	$qryLista = mysqli_query($mysqli, "SELECT tipopeca.id, tipopeca.nome FROM tipoPeca WHERE tipopeca.nome LIKE '%$tipoPeca%'");
	$sql = "SELECT tipopeca.id, tipopeca.nome FROM tipoPeca WHERE tipopeca.nome LIKE '%$tipoPeca%'" or die("Erro ao selecionar");
	$query = $mysqli->query($sql);
	$row = $query->num_rows;
		if($row>0){
			$html .= "<table class='responsive-table'><thead><tr><th>ID</th><th>Nome</th><th></th></tr></thead><tbody>";
			while($ress = mysqli_fetch_array($qryLista)){
				$html .= "<tr class='modal-close' onclick=\"carregarTipoPeca('$ress[0]','$ress[1]');\"><td>".$ress[0]."</td><td>".$ress[1]."</td><td><button class='btn waves-effect waves-light red lighten-2 modal-trigger right s12 m12 l12' href='#modal3' onclick=\"carregarTipoPeca('$ress[0]','$ress[1]');\" type='button'  name='action'>
		  <i class='fas fa-trash fa-sm center'></i>
		</button></td></tr>";
			}
			$html .= "</tbody></table>";
			echo $html;	
		}else{
			echo "<table class='centered'><tr class='modal-close'><td>Nenhum resultado encontrado</td></tr></table>";		
		}
	}
?>