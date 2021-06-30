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
	
	$sql3 = mysqli_query($con, "SELECT A.*, C.Name FROM booking A
		JOIN drivershift B ON A.BookingID = B.BookingID 
		JOIN driver C ON B.DriverIC = C.IC 
		JOIN busowner D ON C.RegisteredOwnerIC = D.IC
		WHERE D.username='" .$username. "'");

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
		@media screen and (max-width: 668px) {
			.container {
				width:90%;
			}
		}
		@media screen and (min-width: 669px) {
			.container {
				width:90%;
			}
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="index.php">Hi, <?php echo $username; ?></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="external.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
            <li><a href="manageDriver.php"><span class="glyphicon glyphicon-user"></span> Driver Profile</a></li>
            <li><a href="requestList.php"><span class="glyphicon glyphicon-list-alt"></span> Booking Request</a></li>
            <li><a href="notifications.php"><span class="glyphicon glyphicon-exclamation-sign"></span> Changed / Cancelled Booking</a></li>
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <br /><br />
	<div class="container">
	  	<h2 style="text-align: center;"><b>SBC Changed / Cancelled Booking<b/></h2><br />

	      	<div style="overflow: auto;">
	      		<table class="table table-hover">
	      			<thead>
	      				<th>BOOKING ID</th>
	      				<th>CUSTOMER PHONE NO</th>
						<th>DRIVER NAME</th>
	      				<th>DATE</th>
	      				<th>DEPART LOCATION</th>
	      				<th>ARRIVAL LOCATION</th>
	      				<th>SBC STAFF ID</th>
						<th>PASSENGER NO.</th>
						<th>PAYMENT STATUS</th>
						<th>REMARKS</th>
	      			</thead>
	      			<tbody>
	      	<?php

	      			while($listRow3 = mysqli_fetch_array($sql3, MYSQLI_ASSOC)) {
	      					echo "<tr>
	      					<td>".$listRow3["BookingID"]."</td>
	      					<td>".$listRow3["CustomerPhoneNo"]."</td>
	      					<td>".$listRow3["Name"]."</td>
	      					<td>".$listRow3["BookingDate"]."</td>
	      					<td>".$listRow3["DepartLocation"]."</td>
	      					<td>".$listRow3["ArrivalLocation"]."</td>
	      					<td>".$listRow3["EmpID"]."</td>
	      					<td>".$listRow3["passengerNumber"]."</td>
	      					<td>".$listRow3["status"]."</td>
	      					<td>".$listRow3["remarks"]."</td>
	      					</tr>";
	      			}
	      	?>

	      			</tbody>
	      		</table>

	</div>

</body>
</html>
