<!DOCTYPE html>
<html>
<head>
	<title>EjiLeader Resort and Spa</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	<div  class="box-rignt">
			<!--<h3  style="display: inline;" align="left"><a href="index-customer.php">EjiLeader Resort and Spa</a></h3>-->
			<a href="Index-cus.php"><img src="Images/u1.png" height="50" width="300"></a>
			<a href="Index-cus.php">
				<span style="padding-left:95%">
					<h3  style="display: inline;" align="right">
						<font color="SlateGrey">
							Contract Us 
						</font>
					</h3>
				</span>
			</a>
			<?php
				session_start();
				//echo $_SESSION['username'];
			?>
			<!--<span style="padding-left:10px"><a href="login.php" ><h5 style="display: inline;">Logout</h5></a></span>-->
			<br><br>
	</div>
<style type="text/css">
	div#header { /* ส่วนหัวสำหรับใส่ logo */
	  background:url("Images/qqqqq.png"); /* พื้นหลังของ logo */
	}

	div#footer { /* ส่วนด้านล่าง */
	  position:absolute;
	  width:100%;
	  left: 0;
	  bottom:0; /* stick to bottom */ 
	  text-align:center;
	  background:url(""); /* พื้นหลังของ footer */

	}
</style>
</head>
<body background="Images/slide5.jpg" style="background-attachment: fixed;">


</body>
<footer  class="bottom">
	<div id="footer">
	<br><br><br>
		@
		<?php
			echo date("Y");
			echo " - EjiLeader Resort and Spa";
		?>
		<br>
	</div>
</footer>
</html>