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
<style>
	div.container{
		margin:5rem 5rem 5rem 5rem;
	}
	div.main-post{
		background-color: #02020226;
	}

	div.main-content {
		padding: 3rem 3rem 3rem 3rem;
	}

	.img-container img {
		max-width: 50%;
		max-height: 50%;
	}

	div.comment-container li {
		list-style-type: none;		
	}

	div.comment-container {
		padding-top: 2rem;
	}

	div.cmt-area {
		margin-bottom: 2rem;
		background-color: #00000000;
	}

	div.comment-container div li label.cmt {
		background-color: #00000000;
		padding: 5px 10px 5px 10px;
		border: 2px solid #564d4d;
  		border-radius: 15px;
	}

/*	div.comment-container div li.cmt-wrap {
		background-color: #00000000;
		border: 2px;
  		border-radius: 6px;
	}*/
	div.photo-container img {
    max-width: 10%;
	}

	.photo-container {
		align-items: baseline;
	}

	div.cmt-sender {
		background-color: #00000000;
		padding: 5px 10px 5px 10px;
		border: 2px solid #564d4d;
  		border-radius: 15px;
	}
</style>
</head>
<body class="landing-page sidebar-collapse" style="background-color:#00000000;">

<div class="main-post container w-100">
	<div class="main-content">
		<div class="photo-container d-flex">
			<img src="../../assets/img/julie.jpg" alt="Circle Image" class="rounded-circle">			
			<h3>My Name</h3>
		</div>
		<div class="p-5">				
			<div class="body-content">	
				<h1>Post Title Here</h1>
				<p style="  height: 200px; width: 50%;">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</div>
	<!-- imaage -->
			<div class="img-container">
				<img src="../../assets/img/tiny.jpg"  alt="Raised Image" class="rounded img-raised">
				<!-- <img src="../../assets/img/tiny.jpg"  alt="Raised Image" class="rounded img-raised"> -->
			</div>
	<!-- imaage -->
			<div class="comment-container">
	<!-- comment area -->
				<div class="cmt-area">								
					<li class="cmt-wrap">
						<i class="nav-link far fa-user-circle" style="font-size: 1.3rem; color:#39b137;"></i><label class="cmt">comment here</label>
					</li>
					<li class="cmt-wrap">
						<i class="nav-link far fa-user-circle" style="font-size: 1.3rem; color:#39b137;"></i><label class="cmt">comment here</label>
					</li>
					<li class="cmt-wrap">
						<i class="nav-link far fa-user-circle" style="font-size: 1.3rem; color:#39b137;"></i><label class="cmt">comment here</label>
					</li>
					<li class="cmt-wrap">
						<i class="nav-link far fa-user-circle" style="font-size: 1.3rem; color:#39b137;"></i><label class="cmt">comment here</label>
					</li>
					<li class="cmt-wrap">
						<i class="nav-link far fa-user-circle" style="font-size: 1.3rem; color:#39b137;"></i><label class="cmt">comment here</label>
					</li>

					
				</div>
	<!-- comment area -->
				<div class="input-group d-flex">
					<input type="text" name="comment" placeholder="comment here..." class="">
<!-- 					<input type="button" name="submit" value="send"> -->
					<button>
						<i class="nav-link far fa-paper-plane" style="font-size: 1.3rem; color:#39b137;"></i>
					</button>
				</div>
			</div>
		</div>
	</div>

</div>



	<?php include '../../includes/link/js_link.php'?>

</body>
</html>