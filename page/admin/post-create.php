<!DOCTYPE html>
<html lang="en">
<head>
	<script src="https://use.fontawesome.com/dc48c8c24e.js"></script>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="../../assets/img/tab-ico.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<?php include '../../includes/link/css_link.php'?>
	<title>Post Manipulation</title>
	<style>

		.sidebar {
		  width: 247px;
		  position: fixed;
		  z-index: 	1;
		  top: 3.5rem;
		  left: 0px;
		  padding-left: 10px;
		  background: #191c20;
		  overflow-x: hidden;
		  padding: 8px 0;
		  height: 100%;
		  color:#fff;

		}

		div.sidebar i.nav-link {
			color: #fff;
			padding-left: 10px;
			padding-right: 8px;
		}

		div.sidebar a {
			color: #fff;
			border-bottom: 1.5px solid #2e2f32;
		}

		/* Style the active class, and buttons on mouse-over */
		.active, li.nav-item:hover {
		  background-color: #2e2f32;
		  color: #191c20;


		}
		.content-wrapper {
			background-color: #2e2f32;
			margin-left: 247px;
			padding:2.2rem 2.2rem;
		}

		.content-item {
			position: relative;
		    display: flex;
		    flex-direction: column;
		    min-width: 0;
		    word-wrap: break-word;
		    background-color: #191c20;
		    background-clip: border-box;
		    border: 1px solid rgba(0, 0, 0, 0.125);
		    color: #fff;
		    margin-bottom: 0.9375rem;
		    border-radius: 10px;
		}

		div.content-wrapper div.content-item div.div-bar{
			border-right: 5px solid #fff;"
		} 
	</style>
</head>
<body class="landing-page sidebar-collapse">

	<div style="background-color: #000000">
<!-- TOP NAV BAR -->
		<?php
			include '../../includes/navbar.php'
		?>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</div>
	
<!-- START SIDE BAR-->
	<div class="sidebar">
		<div class="p-3">
			<div class="navbar-collapse">
				<ul class="navbar-nav justify-content-start">
					<li class="nav-item">
						<a href="#" class="nav-link">
							<i class="nav-link fas fa-home" style="font-size: 1.3rem; color:#3a8dd5;"></i>
							HOME
						</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">
							<i class="nav-link far fa-user-circle" style="font-size: 1.3rem; color:#39b137;"></i>
							PROFILE
						</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">
							<i class="nav-link fas fa-tasks" style="font-size: 1.3rem; color:#d48044;"></i>
							BLOG
						</a>
					</li>
					<!-- this is the overlap hidder -->
					<li>
					</li>
					<!-- this is the overlap hidder -->
				</ul>
			</div>
		
		</div>
	</div>
<!-- END SIDE BAR -->


	<div class="content-wrapper">
		<div class="content-item p-3">
			<form method="POST" action="post-save.php" enctype="multipart/form-data">
				temporary:<input type="text" name="userid">
				<div class="d-flex">
					<h3>TITLE:</h3><input type="text" name="title" class="input-group ml-1 w-50">
				</div>
				<div class="d-flex">
					<h4>YOUR<br>CONTENT:</h4>
					<textarea class="w-50" name="content">
					</textarea>
				</div>
				<div>

				</div>
				<div>
					Select images: <input type="file" name="image">
				</div>
				<div>
					<input type="submit" name="save" value="Save" class="btn btn-success btn-round">
				</div>
				

			</form>

		</div>

	<?php include '../../includes/footer.php'?>
	</div>
<!-- END CONTENT WRAPPER -->
	<?php include '../../includes/link/js_link.php'?>
</body>
</html>