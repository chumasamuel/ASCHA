<?php	

	include_once("conexao.php");

	$html = <div class="table-responsive">	
	$html .= '<thead>';
	$html .= '<tr>';
	$html .= '<th>Id</th>';
	$html .= '<th>Nome</th>';
	$html .= '<th>Genero</th>';
	$html .= '<th>Categoria</th>';
	$html .= '<th>Telefone</th>';


	$html .= '</tr>';
	$html .= '</thead>';
	$html .= '<tbody>';
	
	$ascha = "SELECT * FROM ong";
	$rCadastro = mysqli_query($conexao, $Cadastro);
	while($row_estudantes = mysqli_fetch_assoc($resultado_trasacoes)){
		$html .= '<tr><td>'.$row_estudantes['id'] . "</td>";
		$html .= '<td>'.$row_estudantes['nome'] . "</td>";
		$html .= '<td>'.$row_estudantes['endereco'] . "</td>";
		$html .= '<td>'.$row_estudantes['cidade'] . "</td>";
		
		$html .= '<td>'.$row_estudantes['ano_ingresso'] . "</td>";
		$html .= '<td>'.$row_estudantes['categoria'] . "</td>";
		$html .= '<td>'.$row_estudantes['nuit'] . "</td>";
		$html .= '<td>'.$row_estudantes['celular'] . "</td>";
				
	}
	
	$html .= '</tbody>';
	$html .= '</table';

	
	//referenciar o DomPDF com namespace
	use Dompdf\Dompdf;

	// include autoloader
	require_once("dompdf/autoload.inc.php");

	//Criando a Instancia
	$dompdf = new DOMPDF();
	
	// Carrega seu HTML
	$dompdf->load_html('
		<p style="text-align: center";><img src="assets/img/logo2.jpg"/></P>
		<h2 style="text-align: center;">Universidade Save</h2>
		<h3 style="text-align: center;">Departamento De Ciências Naturais e Exactas</h3>
			<h3 style="text-align: center;">Lista Nominal Dos Estudantes de 3 Ano de Informática</h3><br><br>
			'. $html .'
		');

	//Renderizar o html
	$dompdf->render();

	//Exibibir a página
	$dompdf->stream(
		"relatorio.pdf", 
		array(
			"Attachment" => true//Para realizar o download somente alterar para true
		)
	);
?>
