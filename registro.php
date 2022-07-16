<!DOCTYPE html>
<html lang="es">
<head>
	<title>Login V16</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Registrate
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" action="#" method="POST">

					<div class="wrap-input100 validate-input" data-validate = "Ingresar Cedula">
						<input class="input100" type="text" name="Cedula" placeholder="Cedula">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Ingresar Nombre">
						<input class="input100" type="text" name="Nombre" placeholder="Nombre">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					

					<div class="wrap-input100 validate-input" data-validate = "Ingresar Correo">
						<input class="input100" type="email" name="Correo" placeholder="Correo">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Ingresar Contraseña">
						<input class="input100" type="password" name="Contrasena" placeholder="Contraseña">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn">
							Registrar
						</button>
					</div>

				</form>

				<?php
		session_start();
		require "base/conex.php";
		if(isset($_POST['Cedula']) && isset($_POST['Nombre']) && isset($_POST['Correo']) && isset($_POST['Contrasena'])){
			$cedula = $_POST['Cedula'];
			$nombre = $_POST['Nombre'];
			$correo = $_POST['Correo'];
			$_SESSION['email'] = $correo;
			$pass = $_POST['Contrasena'];
			if($cedula=="" || $nombre=="" || $correo == "" || $pass == ""){
				echo '<script language="javascript">alert("Debe ingresar los datos requeridos");window.location.href="registro.php"</script>'; 
			}else{
				$sql = "insert into cliente(cedula, nombre, correo, password, rol) values('$cedula', '$nombre', '$correo', '$pass', 1)";
				$r = mysqli_query($l, $sql) or die ("ERROR al ingresar datos");
				if($r){
					echo '<script language="javascript">alert("El registro se realizo correctamente");window.location.href="train.php"</script>'; 
				}
			}
		}
	?>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	
</body>
</html>