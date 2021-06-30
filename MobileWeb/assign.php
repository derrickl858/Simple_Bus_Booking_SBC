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
	$username = $_COOKIE["username"];
	$q = mysqli_query($con, "SELECT * FROM busowner WHERE username = '".$username."'");
	$row1 = mysqli_fetch_array($q, MYSQLI_ASSOC);
	$r = $row1["IC"];

	$assignedBookingID = $_GET["bookingID"];
	$assignedBookingDate = $_GET["bookingDate"];

	$sql1 = mysqli_query($con, "SELECT * FROM bus
                     WHERE NumberPlate NOT IN
                    (SELECT BusNumberPlate FROM drivershift WHERE Date= '" .$assignedBookingDate. "')
                     AND bus.status = 'Available';");



	$sql2 = mysqli_query($con, "SELECT * FROM driver WHERE IC NOT IN 
		(SELECT DriverIC FROM drivershift WHERE Date='" .$assignedBookingDate. "') 
		AND RegisteredOwnerIC IN
		(SELECT IC FROM busowner WHERE username='" .$username. "');")


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
	<style>
		body {
			background-color: #f2f2f2;
			background-size: 100%;
		}
		@media screen and (max-width: 668px) {
			.container {
				width:90%;
			}
		}
		@media screen and (min-width: 669px) {
			.container {
				width:35%;
			}
		}
	</style>
</head>
<body>
	<div class="container" style="background-color:white; margin-top:35px;">
		<form method="post" action="assignAction.php" autocomplete="off">

			<h3 style="text-align: left;"><b>Please assign a bus/van and driver:</b></h3><br /><br />
			<label for="bookingID" style="font-size:18px;">Current Booking ID:</label>
			<input type="text" class="form-control" id="bookingID" name="bookingID" value="<?php echo $assignedBookingID; ?>" readonly/><br /><br />
			<label for="vehicle" style="font-size:18px;">Bus / Van:</label>
			<select class="form-control" id="vehicleDropDown" name="vehicleDropDown">
				<option selected="true" value="" disabled="disabled">Select bus / van</option>
				<?php
					while($row1 = mysqli_fetch_array($sql1, MYSQLI_ASSOC)) {
						if($row1["OwnerIC"] == $r)
							echo '<option value="'.$row1["NumberPlate"].'">'.$row1["Category"].', '.$row1["NumberPlate"].'</option>';
					}
				?>
			</select><br /><br />
			<label for="driver" style="font-size:18px;">Driver:</label>
			<select class="form-control" id="driverDropDown" name="driverDropDown">
				<option selected="true" value="" disabled="disabled">Select driver</option>
				<?php
					while($row2 = mysqli_fetch_array($sql2, MYSQLI_ASSOC)) {
						if($row2["RegisteredOwnerIC"] == $r)
							echo '<option value="'.$row2["IC"].'">'.$row2["Name"].', '.$row2["IC"].', '.$row2["PhoneNo"].'</option>';
					}
				?>
			</select><br /><br />
			<label for="details" style="font-size:18px;">Remarks: </label>
			<input type="text" class="form-control" id="details" name="details"/><br /><br />
			<p style="text-align: center;">
				<input type="submit" class="btn btn-primary" value="Save"/>
				<input type="hidden" value="<?php echo 
				$assignedBookingDate ?>" name="bookingDate"/>
			</p>
		</form>
	</div>
</body>
</html>