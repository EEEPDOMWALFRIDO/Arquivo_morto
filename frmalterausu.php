<?php
    include('testasessao.php');
	
	$id = $_GET['id'];
														  								  
    //fazendo conexão com o banco de dados
    include('banco.php');
	
    //criar sql de consulta
    $sql = "select * from tbusuario where codusu = '$id'";
																  
    //realizar a consulta
    $consulta = $conexao->query($sql);

    //testa se consulta deu certo
    if($consulta == true){
      if($consulta->num_rows > 0){
	    $linha=$consulta->fetch_array(MYSQLI_ASSOC);
	  }
	}														
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Agenda - 2022</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
<br>
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="principal.php">
                <div class="sidebar-brand-icon rotate-n-20">
                    <img src="img/logo.png" alt="" class="img-fluid" width="45" height="45">
                </div>
                <div class="sidebar-brand-text mx-3"><sup>arquivo morto</sup></div>
            </a>
<br>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <span>Painel</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menus
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            
            <li class="nav-item">
                <a class="nav-link" href="buscaestud.php" >                    
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span> Buscar - Estudante </span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="buscausu.php" >                    
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span> Buscar - Usuário </span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="buscacurso.php" >                    
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span> Buscar - Curso </span>
                </a>
            </li>
            
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#logoutModal">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Sair</span>
                </a>
            </li>

            <!-- Nav Item - Charts -->
            

            <!-- Nav Item - Tables -->
            

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
           

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            

                        

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['nome'];?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#logoutModal">
                                                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                                            Sair
                                                        </a>
                                                    </div>
                            <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header bg-success text-white">
                                            <h5 class="modal-title" id="logoutModalLabel">Confirmação de Saída</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Tem certeza que deseja sair do sistema?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não desejo sair</button>
                                            <a href="sair.php" class="btn btn-success">Desejo sair</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <h1 class="h3 mb-0 text-gray-800">Alterar - Usuário</h1>
                    <br>
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <a class="btn btn-success" href="buscausu.php"><i class="fa fa-arrow-left"></i> Voltar</a>
						
                        
                    </div>

                    <!-- Content Row -->
					
                    <div class="row">

                        
						<!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-12 col-md-6 mb-4">
						
                            <div class="card border-left-primary shadow h-100 py-2">
                                
								<div class="card-body">
								       <?php
  										   if(isset($_GET['cad'])){
											   if($_GET['cad']=='ok'){
												  echo    '<div class="alert alert-success alert-dismissible fade show" role="alert">
															  <strong>Atencao!</strong> Dados cadastrados com sucesso!.
															  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															  </button>
															</div>';  
											   }
										   }
										?>
								
                                    <div class="row no-gutters align-items-center">
									    
                                        <div class="col mr-2">
										    
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                
												
												<label>Informe os dados abaixo</label>
												<hr>
												
											</div>
											
											<form name="f1" method="POST" action="alterarusu.php"> 
											
										    
										    <div class="input-group">											
										    <input value="<?php echo $linha['codusu'];?>" class="form-control" type="hidden" name="codusu" id="codusu" >
										    </div>
											
											<label>Nome</label><br>
										    <div class="input-group">											
										    <input value="<?php echo $linha['nome'];?>" placeholder="informe seu nome" class="form-control" type="text" name="nome" id="nome" required>
										    </div><br>
											
											<label>E-mail</label><br>
											<div class="input-group">											
											    <input value="<?php echo $linha['email'];?>"placeholder="informe seu e-mail" class="form-control" type="e-mail" name="email" id="email" required>
											</div><br>
											<label>Senha</label><br>
											<div class="input-group">											
											    <input value="<?php echo $linha['senha'];?>" class="form-control" type="text" name="senha" id="senha" required>
											</div>
											<hr>
											<button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Salvar</button>
											</form>
							  
												
                                               
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        

                        <!-- Earnings (Monthly) Card Example -->
                        

                        <!-- Pending Requests Card Example -->
                        
                    </div>

                    <!-- Content Row -->

                    

                    <!-- Content Row -->
                    
					

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</body>

</html>