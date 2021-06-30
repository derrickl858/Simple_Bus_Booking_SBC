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
	$icNo = $_POST["vehicleDropDown"];
	
	// $sql1 = mysqli_query($con, "SELECT * FROM busowner WHERE username = '".$username."'");
	// $row1 = mysqli_fetch_array($sql1);
	// $registeredOwnerIC = $row1["IC"];

	$sql1 = mysqli_query($con, "SELECT * FROM driver WHERE IC = '$icNo'");
	$row1 = mysqli_fetch_array($sql1);
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
				width:30%;
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
		<div>
			<h2 style="text-align: center;">Update Driver Profile</h2><br /><br />

			    <form method="post" action="updateDriverAction.php" autocomplete="off">
			    	<label for="Name" style="font-size:16px;">Driver Name:</label>
		            <input type="text" class="form-control" id="name" name="name" value="<?php echo $row1['Name'];?>" readonly/><br />
			    	<label for="driverIC" style="font-size:16px;">Driver IC Number:</label>
		            <input type="text" class="form-control" id="IC" name="IC" value="<?php echo $row1['IC'];?>" readonly/><br />

			      	<label for="license" style="font-size:16px;">Driver License Number:</label>
		            <input type="text" class="form-control" id="license" name="license" value="<?php echo $row1['License'];?>" readonly/><br />
		            <label for="phoneNo" style="font-size:16px;">Driver Phone Number:</label>
		            <input type="text" class="form-control" id="phoneNo" name="phoneNo" placeholder="Phone Number" value="<?php echo $row1['PhoneNo'];?>"/><br />
		            <br />
		            <p style="text-align: center;"><button class="btn btn-primary">Save</button></p>
			    </form>
		</div>
	</div>
</body>
</html>