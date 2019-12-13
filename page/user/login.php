<!DOCTYPE html>
<html>
<head>
	<?php include '../../includes/link/css_link.php'?>

	<title></title>
	
</head>

<body style="background-image: url('../../assets/img/local.jpg'); background-size: cover;">
	<div class="container-fluid">
		<div class="row justify-content-around mt-5">
		<form class="col-md-4" style="background-color: #ffffff; border-radius: 20px;">
			<h2 class="text-center">LogIn</h2>
			<div class="form-group">
				<label for="exampleInputEmail1">Email address</label>
				<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			</div>
			<div class="form-check">
				<label class="form-check-label">
					<input class="form-check-input" type="checkbox" value="">
					Option one is this
					<span class="form-check-sign">
						<span class="check"></span>
					</span>
				</label>
			</div>
			<button type="submit" class="btn btn-info">Submit</button>
		</form>

		<form class="col-md-5" style="background-color: #ffffff; border-radius: 20px;">
			<h2 class="text-center">Create a New Account</h2>
			<h4>It's Quick and easy.</h4>
		<div class="form-group">
			<label for="exampleInputEmail1">Email address</label>
			<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Password</label>
			<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
		</div>
			<small class="muted">By clicking Sign Up, you agree to our Terms, Data Policy and Cookies Policy. You may receive SMS Notifications from us and can opt out any time.</small>
			<br>
		<button type="submit" class="btn btn-success">Submit</button>
		</form>
		</div>
	</div>
	
</body>
</html>

	<?php include '../../includes/link/js_link.php'?>
