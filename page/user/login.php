<!DOCTYPE html>
<html>
<head>
	<?php include '../../includes/link/css_link.php'?>

	<title></title>
</head>
	
<body>
	<div class="wrapper">
		<div class="page-header">
			<div class="page-header-image" data-parallax="true" style="background-image: url('../../assets/img/local.jpg');">

          	</div>

            <div class="blackh2">
                <div class="section mt-9 row">
                	<div class="container col-sm-3">
						<form action="login.php" method="POST"><h2>Log In</h2>
							Username: <input class="form-control" type="text" name="username" placeholder="Enter your Username" autocomplete="off" required>
							Password: <input class="form-control" type="text" name="password" placeholder="Enter your Password" autocomplete="off" required>
							<input class="btn btn-success" type="login" name="login" value="Log in">
						</form>
					</div>
					<div class="container col-sm-5">	
						<form action="login.php" method="POST"><h2>Sign Up</h2>
							<div class="rowrow">
								<div class="col-sm-6 padpad">
									First Name: <input class="form-control" type="text" name="name" placeholder="First name" autocomplete="off" required>
								</div>
								<div class="col-sm-6 padpad1">
									Last Name: <input class="form-control" type="text" name="name" placeholder="Last name" autocomplete="off" required>
								</div>
							
									Email-address: <input class="form-control" type="text" name="name" placeholder="Email Address" autocomplete="off" required>
									Username: <input class="form-control" type="text" name="Username" placeholder="Username" autocomplete="off" required>
									Password: <input class="form-control" type="text" name="Password" placeholder="Enter your Password" autocomplete="off" required>
									Confirm Password: <input class="form-control" type="text" name="confirm" placeholder="Confirm your Password" autocomplete="off" required>
							</div>
									<input class="btn btn-success" type="submit" name="submit" value="Sign up">

						</form>

					</div>
            	</div>
            </div>
    	</div>
    </div>


	
	

	
	<?php include '../../includes/link/js_link.php'?>
	<?php include '../../includes/footer.php'?>
</body>
</html>