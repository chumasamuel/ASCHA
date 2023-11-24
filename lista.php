<?php
include_once("Principal.php");
include_once("conexao.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
	<meta property="og:title" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
	<meta property="og:description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
	<meta property="og:image" content="https://fillow.dexignlab.com/xhtml/social-image.png">
	<meta name="format-detection" content="telephone=no">
	
	<!-- PAGE TITLE HERE -->
	<title>ASCHA</title>
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <!-- Datatable -->
    <link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
	<link href="vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>



   
      
        
       			<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Profile Datatable</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Nome</th>
                                                <th>Género</th>
                                                <th>Categoria</th>
                                                <th>Telefone</th>
                                                <th>Email</th>
                                                <th>Acão </th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                        <?php 
		 // faz a seleção do dados na Tabela	
			$sql = mysqli_query($conexao, "SELECT * FROM ong");
		 // lista os dados
			while($value = mysqli_fetch_array($sql)){
			?>	
							
			<tr>
				<td><?php echo $value['id'] ?>	</td>
				<td><?php echo $value['nome'] ?></td>
				<td><?php echo $value['genero'] ?></td>
				<td><?php echo $value['categoria'] ?></td>
				<td><?php echo $value['telefone'] ?></td>
                <td><?php echo $value['email'] ?></td>
               
		<!--  redireciona o botao editar e apagar para os repectivos ficheiros  -->
			    <td>
					<a class="btn btn-sm btn-info " href="edit.php?id=<?php echo $value['id']; ?>"><i class="fas fa-pencil-alt"></i>Editar </a> - 
					<a class="btn btn-sm btn-danger " href="deleteQuery.php?id=<?php echo $value['id']; ?>" onclick="return confirma()"><i class="fas fa-trash"></i> Apagar</a>
				</td>
			</tr>
		 <?php  }?>		
	</table>
                            </div>
                        </div>
                    </div>
				</div>
            
        
       
        
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
    <script src="vendor/chart.js/Chart.bundle.min.js"></script>
	<!-- Apex Chart -->
	<script src="vendor/apexchart/apexchart.js"></script>
	
    <!-- Datatable -->
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="js/plugins-init/datatables.init.js"></script>

	<script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>

    <script src="js/custom.min.js"></script>
	<script src="js/dlabnav-init.js"></script>
	<script src="js/demo.js"></script>
    <script src="js/styleSwitcher.js"></script>
</body>
</html>