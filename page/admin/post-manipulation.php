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
		  top: 4rem;
		  left: 0px;
		  padding-left: 10px;
		  background: #191c20;
		  overflow-x: hidden;
		  padding: 8px 0;
		  max-height: 50rem;
		  color:#fff;

		}
		<script src="https://use.fontawesome.com/dc48c8c24e.js"></script>

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
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		
		</div>
	</div>
<!-- END SIDE BAR -->


	<div class="content-wrapper ">
		<div class="content-item">
			<div class="row p-3">				
				<div class="col-sm-4">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
				</div>
				<div class="col-sm-4">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
				</div>
				<div class="col-sm-4">
				<i class="fas fa-pen" style="font-size:30px;color:lightblue;text-shadow:2px 2px 4px #fff;"></i>
				<i class="fas fa-trash-alt" style="font-size:30px;color:#d53f3a;"></i>
				</div>
			</div>
		</div>
		<div class="content-item">
			<div class="row p-3">				
				<div class="col-sm-4">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
				</div>
				<div class="col-sm-4">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
				</div>
				<div class="col-sm-4">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
				</div>
			</div>
		</div>
		<div class="content-item">
			<div class="row p-3">				
				<div class="col-sm-4">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
				</div>
				<div class="col-sm-4">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
				</div>
				<div class="col-sm-4">
<ion-icon src="/path/to/external/file.svg"></ion-icon>
				</div>
			</div>
		</div>
		<div class="content-item">
			<div class="row p-3">				
				<div class="col-sm-4">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
				</div>
				<div class="col-sm-4">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
				</div>
				<div class="col-sm-4">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
				</div>
			</div>
		</div>

	</div>

	<?php include '../../includes/link/js_link.php'?>
	<?php include '../../includes/footer.php'?>
</body>
</html>