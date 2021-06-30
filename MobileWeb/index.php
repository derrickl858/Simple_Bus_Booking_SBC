<?php
    ob_start();
    setcookie("username", "", time() - 3600 * 30);
    setcookie("role", "", time() - 3600 * 30);
?> 
<!DOCTYPE html>
<html>
<head>
	<title>Shuttle Bus Central System</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
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
	
	<script>
		$(document).ready(function() {
			$('.input100').each(function(){
				$(this).on('blur', function(){
					if($(this).val().trim() != "") {
						$(this).addClass('has-val');
					}
					else {
						$(this).removeClass('has-val');
					}
				})    
			});
			var showPass = 0;
			$('.btn-show-pass').on('click', function(){
				if(showPass == 0) {
					$(this).next('input').attr('type','text');
					$(this).find('i').removeClass('zmdi-eye');
					$(this).find('i').addClass('zmdi-eye-off');
					showPass = 1;
				}
				else {
					$(this).next('input').attr('type','password');
					$(this).find('i').addClass('zmdi-eye');
					$(this).find('i').removeClass('zmdi-eye-off');
					showPass = 0;
				}
			});
		});
	</script>
</head>

<?php


	// IF A USER CLICKS LOGIN BUTTON
	if(count($_POST) > 0) {
		$username = $_POST["username"];
		$userPwd = $_POST["userPwd"];

		$con = mysqli_connect('localhost','root','','sbc') or die('Unable to connect');
		$sql = mysqli_query($con, "SELECT * FROM busowner WHERE username = '".$username."' AND hash = '".md5($userPwd)."'");
		$row  = mysqli_fetch_array($sql);
		if(is_array($row)) {
			$cookie_name1 = "username";
			$cookie_name2 = "role";
			$cookie_value1 = $row["username"];
			$cookie_value2 = "external";



			setcookie($cookie_name1, $cookie_value1, time() + (3600), "/");
	        setcookie($cookie_name2, $cookie_value2, time() + (3600), "/");
	        setcookie($cookie_name3, $cookie_value3, time() + (3600), "/");
	        header("Location: external.php");	
		}
		else {
?>
	<script>
		$(document).ready(function() {
			$("#loginModal").modal();
		});
	</script>
	<?php
		}

	}
?>


<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST" autocomplete="off" action="">
					
					<div class="login100-form-title p-b-26">
						<img src="images/logo3.png" width="180" height="90"/>
						
						<div style="padding-top: 15px">Shuttle Bus Central</div>

						<!--<div>
		<i class="zmdi zmdi-font"></i>
	</div>
	Shuttle Bus Central System
		-->
					</div>
			

					<div class="wrap-input100 validate-input" data-validate = "Invalid Username">
						<input class="input100" type="text" name="username">
						<span class="focus-input100" data-placeholder="Username" ></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Invalid Password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="userPwd">
						<span class="focus-input100" data-placeholder="Password" style="margin-bottom: 10px;"></span>
						
					</div>

					 <div style="margin-top: -30px; margin-bottom: 35px; text-align: end;"><a href="xxxxxxxxx" style="color: #bfbfbf; font-size: 12px;">Forget Password?</a></div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="submit" type="submit">
								Login
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">

						<span class="txt1">Copyright &copy; 2020 Shuttle Bus Central Sdn. Bhd.</span>
					

					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
	<div class="modal fade" id="loginModal">
		<div class="modal-dialog">
			<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header">
				<h4 class="modal-title">Login Message</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<!-- Modal body -->
			<div class="modal-body">
				Your username or password is incorrect!
			</div>

			<!-- Modal footer -->
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>

			</div>
		</div>
	</div>
</body>
</html>

