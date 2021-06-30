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
	$icNo = "";
	
	$sql1 = mysqli_query($con, "SELECT * FROM busowner WHERE username = '".$username."'");
	$row1 = mysqli_fetch_array($sql1, MYSQLI_ASSOC);
	$r = $row1["IC"];

	$sql2 = mysqli_query($con, "SELECT * FROM driver");
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
		<h2 style="text-align: center;"><b>SBC Driver Profile</h2></b><br /><br />
		<ul class="nav nav-tabs nav-justified">
	    	<li class="active"><a data-toggle="tab" href="#tab1" style="font-size:16px;">Create New Driver</a></li>
	    	<li><a data-toggle="tab" href="#tab2" style="font-size:16px;">Update Driver Profile</a></li>
	  	</ul>

	  	<div class="tab-content">
	  		<!-- CREATE A DRIVER -->
	    	<div id="tab1" class="tab-pane fade in active"><br />
	    		<h2 style="text-align: center;">Create New Driver Profile</h2><br /><br />
			    <form method="post" action="createDriverAction.php" autocomplete="off">
			    	<label for="driverName" style="font-size:16px;">Driver Name:</label>
		            <input type="text" class="form-control" id="driverName" name="driverName" placeholder="Name"/><br />
			      	<label for="IC" style="font-size:16px;">Driver IC Number:</label>
		            <input type="text" class="form-control" id="IC" name="IC" placeholder="IC Number"/><br />
		            
		            <label for="license" style="font-size:16px;">Driver License Number:</label>
		            <input type="text" class="form-control" id="license" name="license" placeholder="License Number"/><br />
		            <label for="phoneNo" style="font-size:16px;">Driver Phone Number:</label>
		            <input type="text" class="form-control" id="phoneNo" name="phoneNo" placeholder="Phone Number"/><br />
		            <input type="hidden" class="form-control" id="registeredOwnerIC" name="registeredOwnerIC" value="<?php echo $row1["IC"];?>"/>
		            <br />
		            <p style="text-align: center;"><button class="btn btn-primary">Save</button></p>
			    </form>
	    	</div>

	    	<!-- UPDATE A DRIVER -->
	    	<div id="tab2" class="tab-pane fade"><br />
	    		<h2 style="text-align: center;">Update Driver Profile</h2><br /><br />
			    <form method="post" action="updateDriver.php" autocomplete="off">
			      	<select class="form-control" id="vehicleDropDown" name="vehicleDropDown">
						<option selected="true" value="" disabled="disabled">Choose Your Driver:</option>
						<?php
							while($row2 = mysqli_fetch_array($sql2, MYSQLI_ASSOC)) {
								if($row2["RegisteredOwnerIC"] == $r)
									echo '<option value="'.$row2["IC"].'">'.$row2["Name"].', '.$row2["IC"].'</option>';
								
							}
						?>
					</select><br /><br />
		            <br />
		            <p style="text-align: center;"><button class="btn btn-primary">Select</button></p>
			    </form>
	    	</div>
	    </div>

	  	
	</div>
</body>
</html>