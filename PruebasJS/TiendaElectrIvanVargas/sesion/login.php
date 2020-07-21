<?php include ('../view/encabezado.php'); ?>

<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">		
					<div class="card">
						<div class="loginBox">
							<img src="../img/logo.JPG" class="img-responsive" alt="PHP MySQL logos" heigth="35%" width="50%">
							<h2>Login</h2>

							<form action="check_login.php" method="post">                           	
								<div class="form-group">									
									<input type="email" class="form-control input-lg" name="email" placeholder="&#128272;  Correo" required>        
								</div>							
								<div class="form-group">        
									<input type="password" class="form-control input-lg" name="password" placeholder="&#128272;  Contraseña" required>       
								</div>								    
									<button type="submit" class="btn btn-success btn-block">Iniciar Sesión</button>
							</form>
							<!-- Collapse a form when user click Lost your password? link-->
							<p><a href="#showForm" data-toggle="collapse" aria-expanded="false" aria-controls="collapse">Lost your password?</a></p>	
							<div class="collapse" id="showForm">
								<div class='well'>
									<form action="password-recovery.php" method="post">
										<div class="form-group">										
											<input type="email" class="form-control" name="email" placeholder="Enter the email associated with the password." required>
										</div>
										<button type="submit" class="btn btn-dark">Recover Password</button>
									</form>								
								</div>
							</div>
													
							<hr><p>Nuevo en la tienda? <a href="../view/index.php" title="Crear cuenta">Crea una cuenta</a>.</p>								
						</div><!-- /.loginBox -->	
					</div><!-- /.card -->
				</div><!-- /.col -->
			</div><!--/.row-->
		</div><!-- /.container -->
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <?php include ('../view/encabezado.php'); ?>