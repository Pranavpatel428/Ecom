<?php
session_start();
include "db.php";
if (isset($_SESSION["signup_button"])) {
	$address = $_POST["address"];
	$name = $_POST["f_name"] . " " . $_POST["l_name"];
	$number = $_POST["mobile"];

	$sql = "INSERT INTO `guestuser` 
		(`id`,`name`,`number`,`address`) 
		VALUES (NULL, '$name', '$number', '$address')";
		if ($conn->query($sql)) {
			
		}
}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Khan Store</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
<body>
<div class="wait overlay">
	<div class="loader"></div>
</div>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand">Khan Store</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
				<li><a href="index.php"><span class="glyphicon glyphicon-modal-window"></span>Product</a></li>
			</ul>
		</div>
	</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="signup_msg">
				<!--Alert from signup form-->
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="panel panel-primary">
					<div class="panel-heading">Guest Login Form</div>
					<div class="panel-body">
						<!--User Login Form-->
						<form>
							<div class="row">
							<div class="col-md-6">
								<label for="f_name">First Name</label>
								<input type="text" id="f_name" name="f_name" class="form-control">
							</div>
							<div class="col-md-6">
								<label for="f_name">Last Name</label>
								<input type="text" id="l_name" name="l_name"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="mobile">Mobile</label>
								<input type="text" id="mobile" name="mobile"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="address">Address</label>
								<textarea id="address" class="form-control mt-1"  name="address" placeholder="Enter Address" rows="2"></textarea>
							</div>
						</div>
						<p><br/></p>
						<div class="row">
							<div>
								<div style="margin-left: 17px;"><a href="login_form.php">Login</a></div>

								<input style="float: right;margin-right: 15px;" value="Continue" type="submit" name="signup_button"class="btn btn-success btn-lg">
								
								<div style="margin-left: 17px;"><a href="customer_registration.php?register=1">Create a new account?</a></div>
							</div>
						</div>
						
					</div>					
						</form>
				</div>
				<div class="panel-footer"><div id="e_msg"></div></div>
			</div>
		</div>
		<div class="col-md-4"></div>
	</div>
</body>
</html>






















