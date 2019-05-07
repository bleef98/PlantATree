<?php include_once("index.html"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PlantATree Prototype - Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="style.css" rel="stylesheet">
</head>
<body>

	<div class="modal-dialog text-center">
		<div class="col-sm-8 main-section">
			<div class="modal-content">
				
				<div class="col-12 user-img">
					<h2>PlantATree</h2>
					<img src="img/treelogo.png">
				</div>

				<form class="col-12">
					<div class="form-group">
						<br>
						<input type="email" class="form-control" placeholder="Enter Email">
					</div>
					<div class="form-group">
							<input type="password" class="form-control" placeholder="Enter Password">
					</div>
					<div class="form-group">
							Stay Signed In <input type="checkbox" name="keep-session">
					</div>
					
					<button type="submit" class="btn"> Login</button>
				</form>

				<div class="col-12 under-login">
					<br>
					<a href="register.html">Register</a><br>
					<a href="forgotpassword.html">Forgot Password</a>
				</div>

			</div> <!-- End Modal Content-->
		</div>
	</div>


</body>
</html>
