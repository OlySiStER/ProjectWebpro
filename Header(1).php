<!DOCTYPE html>
<html>
<head>
	<title>EjiLeader Resort and Spa</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<!--<p>
		<h3 style="display: inline;" align="left">............... Resort and Spa</h3>
		<span style="padding-left:500px"><h5 style="display: inline;" align="right">Welcome : </h5></span>
	</p>-->
	<div class="box">
			<h3  style="display: inline;" align="left">EjiLeader Resort & Spa</h3>
			<span style="padding-left:600px"><h5  style="display: inline;" align="right">Welcome : </h5></span>
			<?php	
				session_start();
				//echo $_SESSION['username'];
			?>
			<span style="padding-left:10px"><a href="login.php" ><h5 style="display: inline;">Logout</h5></a></span>
			<br><br>
	</div>
	
</head>
<body background="Images/light-gray.jpg">
</html>