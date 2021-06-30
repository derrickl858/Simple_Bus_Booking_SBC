<?php
	$con = mysqli_connect('localhost','root','','sbc') or die('Unable to connect');

	// TO CHECK WHETHER A LOGGED-IN USER IS EXTERNAL DRIVER OR NOT
    if(!isset($_COOKIE["username"]) || !isset($_COOKIE["role"])) {
		header("Location: index.php");
	}
	if(isset($_COOKIE["role"])) {
		if($_COOKIE["role"] != "external" || $_COOKIE["role"] == "") {
			header("Location: index.php");
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Shuttle Bus Central System</title>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="modal fade" id="successModal" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header bg-primary">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Successful Message</h4>
				</div>
				<div class="modal-body">
					<p>Driver profile is updated  SUCCESSFULLY!</p>
				</div>
				<div class="modal-footer">
					<a class="btn btn-primary" href="manageDriver.php">Back To Driver Profile</a>
				</div>
			</div>

		</div>
	</div>

	<div class="modal fade" id="failureModal" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header bg-warning">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Error Message</h4>
				</div>
				<div class="modal-body">
					<p>FAILED to update driver profile!</p>
				</div>
				<div class="modal-footer">
					<a class="btn btn-danger" href="manageDriver.php">Back To Driver Profile</a>
				</div>
			</div>

		</div>
	</div>
</body>
</html>
<?php
	$ic = mysqli_real_escape_string($con, trim($_POST['IC']));
	$license = mysqli_real_escape_string($con, trim($_POST['license']));
	$phoneNo = mysqli_real_escape_string($con, trim($_POST['phoneNo']));

	$q = "UPDATE driver SET License = '$license', PhoneNo = '$phoneNo' WHERE IC = '$ic'";

	$r = @mysqli_query ($con, $q);
	if (mysqli_affected_rows($con) == 1) {
		echo 
			'<script type="text/javascript">
				$(document).ready(function(){
				$("#successModal").modal("show");
				});
			</script>';
	} 
	else {
		echo 
			'<script type="text/javascript">
				$(document).ready(function(){
				$("#failureModal").modal("show");
				});
			</script>';
	}
	mysqli_close($con);
?>