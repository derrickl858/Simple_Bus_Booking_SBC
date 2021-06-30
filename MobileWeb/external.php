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
	$requested = "requested";
	$changed = "changed";
	$cancelled = "cancelled";

	$sql1 = mysqli_query($con, "SELECT booking.BookingID FROM booking JOIN drivershift ON booking.BookingID = drivershift.BookingID JOIN driver ON drivershift.DriverIC = driver.IC JOIN busowner ON driver.RegisteredOwnerIC = busowner.IC WHERE busowner.IC = (SELECT busowner.IC FROM busowner WHERE busowner.username = '$username') AND booking.modified = 1");

	
	
	// $sql1 = mysqli_query($con, "SELECT * FROM busowner WHERE username = '".$username."'");
	// $row1 = mysqli_fetch_array($sql1);

	// $sql2 = mysqli_query($con, "SELECT * FROM booking");
	// $row2 = mysqli_fetch_array($sql2);

	// $sql3 = mysqli_query($con, "SELECT * FROM booking");
	// $row3 = mysqli_fetch_array($sql3);
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
			#tab1 {
				margin:0px auto 0px auto;
				width:100%;
			}
			#tab2 {
				width:100%;
			}
			#tab3 {
				width:100%;
			}
			.carouselSlide {
				height:300px;
			}
		}
		@media screen and (min-width: 669px) {
			.container {
				width:60%;
			}
			#tab1 {
				margin:0px auto 0px auto;
				width:40%;
			}
			#tab2 {
				width:100%;
			}
			#tab3 {
				width:100%;
			}
			.carouselSlide {
				width:100%;
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
	<div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top:-20px;">
	    <!-- Indicators -->
	    <ol class="carousel-indicators">
	      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	      <li data-target="#myCarousel" data-slide-to="1"></li>
	      <li data-target="#myCarousel" data-slide-to="2"></li>
	    </ol>

	    <!-- Wrapper for slides -->
	    <div class="carousel-inner" role="listbox">
	      <div class="item active">
	        <img class="carouselSlide" src="images/image7.jpg" alt="Bus Image 1">
	        <div class="carousel-caption">
	          <h2><b>Shuttle Bus Central Sdn. Bhd.</b></h2>
	          <h5><b>We Provide The Best Service</b></h5>
	        </div>      
	      </div>

	      <div class="item">
	        <img class="carouselSlide" src="images/image3.jpg" alt="Bus Image 2">
	        <div class="carousel-caption">
	          <h2><b>Shuttle Bus Central Sdn. Bhd.</b></h2>
	          <h5><b>Convenient, Efficient, Excellent</b></h5>
	        </div>      
	      </div>
	    
	      <div class="item">
	        <img class="carouselSlide" src="images/image4.jpg" alt="Bus Image 3">
	        <div class="carousel-caption">
	          <h2><b>Shuttle Bus Central Sdn. Bhd.</b></h2>
	          <h5><b>Do Join Us To Become Part Of SBC</b></h5>
	        </div>      
	      </div>
	    </div>

	    <!-- Left and right controls -->
	    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
	      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	      <span class="sr-only">Previous</span>
	    </a>
	    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
	      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	      <span class="sr-only">Next</span>
	    </a>
	</div>

	<div id="content" class="container text-center" style="margin-top:60px;">
	  <h2>&#10071; Notification &#10071;</h2><br />
	  	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<?php
				// IF A USER CLICKS THE BUTTON 'MARKED AS READ'
				if (isset($_POST['submit']))
				{
					while($row1 = mysqli_fetch_array($sql1, MYSQLI_ASSOC))
					{
						$sql2 = "UPDATE booking SET modified = 0 WHERE BookingID = '".$row1["BookingID"]."'";
						$r = mysqli_query ($con, $sql2);
					}
					echo '<p style="font-size:18px;">No notifications yet</p>';
				}
				else
				{
					while($row1 = mysqli_fetch_array($sql1, MYSQLI_ASSOC)) {
						echo '<p style="font-size:18px;">"Booking '.$row1["BookingID"].' info has changed."</p>';
					}
					echo '<br /><input type="submit" name="submit" class="btn btn-primary" value="Marked As Read" />';
				}
			?>
		</form>
	  <br /><br />
	</div>


	<footer style="width:100%; height:50px; background-color:white;">
		<div style="text-align:center; color:black; padding:100px;">
			Copyright &copy; 2020 Shuttle Bus Central Sdn. Bhd.
		</div>
	</footer>
</body>
</html>