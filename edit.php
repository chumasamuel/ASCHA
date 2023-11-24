<?php 
	include_once("conexao.php");

	
	$id = $_GET['id'];
	// faz a seleção do dados na Tabela	
		$query = mysqli_query($conexao, "SELECT * FROM ong WHERE id = '$id' LIMIT 1");
		$result = mysqli_fetch_assoc($query);

?>	
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Faça o seu cadastro</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


 <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
		 <!-- INICIO -->

    
         <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Cadastrar</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="editQuery.php" >
                <div class="card-body">
				<input type="hidden" name="id" value="<?php echo $result['id']; ?>">
				
				<div class="row">
                  <div class="form-group col-md-6">
                    <label>Nome</label>
                    <input type="text" class="form-control" name= "nome" value="<?php echo $result['nome']; ?>">
                  </div>

       <div class="row">
                  <div class="form-group col-md-6">
                    <label>Genero</label>
                    <input type="text" class="form-control" name= "genero" value="<?php echo $result['genero']; ?>">
                  </div>

        <div class="row">
                  <div class="form-group col-md-6">
                    <label>Categoria</label>
                    <input type="text" class="form-control" name= "categoria" value="<?php echo $result['categoria']; ?>">
                  </div>
				  
        <div class="form-group col-md-6">
                    <label>Telefone</label>
                    <input type="tel" class="form-control" name= "telefone" value="<?php echo $result['telefone']; ?>">
                  </div>				  
				</div>
				
				<div class="row">
                  <div class="form-group col-md-6">
                    <label>Email</label>
                    <input type="email" class="form-control" name= "email" value="<?php echo $result['email']; ?>">
                  </div>
				  
				  <div class="form-group col-md-6">
                    <label>Nive de Acesso</label>
                    <select class="form-control select2" style="width: 100%;">
                    	<option value = "">Selecione...</option>
						<option value = "Administrador">Voluntario</option>
						<option value = "Administrador">Colaborador</option>
            <option value = "Administrador">Beneficiario</option>

                  </select>
                  </div>
				</div>
				
                 <div class="row">
                  <div class="form-group col-md-6">
                    <label>Password</label>
                    <input type="password" class="form-control" name= "password"  placeholder="Password">
                  </div>
				  <div class="form-group col-md-6">
                    <label>Confirmar Password</label>
                    <input type="password" class="form-control" name= "password2"  placeholder="Password">
                  </div>
				 </div>

                <!-- /.card-body -->

                <div class="card-footer text-right">
                  <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
		
		 <!-- FIM -->
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
 
                
 
  