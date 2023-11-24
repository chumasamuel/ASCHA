<?php 
	include_once("../_db.php");
	include_once("../_header.php");
?>	
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Usuarios</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Usuarios</a></li>
              <li class="breadcrumb-item active">Cadastrar</li>
            </ol>
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
              <form method="POST" action="addQuery.php" >
                <div class="card-body">
				
				<div class="row">
                  <div class="form-group col-md-6">
                    <label>Nome</label>
                    <input type="text" class="form-control" name= "name" placeholder="Nome completo">
                  </div>
				  
                  <div class="form-group col-md-6">
                    <label>Contacto</label>
                    <input type="tel" class="form-control" name="contact" placeholder="contacto">
                  </div>				  
				</div>
				
				<div class="row">
                  <div class="form-group col-md-4">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Email">
                  </div>
				  
				  <div class="form-group col-md-4">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Username">
                  </div>
				  
				  <div class="form-group col-md-4">
                    <label>Nive de Acesso</label>
                    <select class="form-control select2" name="nivel" style="width: 100%;">
                    	<option value = "">Selecione...</option>
						<option value = "Administrador">Administrador</option>
						<option value = "Usuario">Usuario</option>

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
  
 
                
 
  <?php include_once("../_footer.php");  ?> 