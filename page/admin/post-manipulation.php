<?php
include_once '../../function/config.php';

  if(isset($_GET['id'])){
 		$upload_dir = '../../assets/uploaded-post-img/';
		$id = $_GET['id'];
		$sql = "select * from post_collector_tbl where id = ".$id;
		$result = mysqli_query($con, $sql);
		if(mysqli_num_rows($result) > 0){
			$row = mysqli_fetch_assoc($result);
			$image = $row['image'];
			unlink($upload_dir.$image);
			$sql = "delete from post_collector_tbl where id=".$id;
			if(mysqli_query($con, $sql)){
				echo "<script>alert('Record deleted successfully')window.location.href='post-manipulation.php'</script>";
			}
		}
	}
?>

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
		 .thmb{
		 	max-height: auto;
		 	max-width: 60%;
		 	display: block;
			margin: auto auto auto auto;
			margin-top: auto;
		 }
	</style>
</head>
<body class="landing-page sidebar-collapse">

	<div style="background-color: #000000">
<!-- TOP NAV BAR -->
		<?php
			include '../../includes/navbar-Admin.php'
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
							BLOG TIMELINE
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

<!-- START OF FIRST ROW -->
<?php
	// Include the database configuration file
	include_once '../../function/config.php';

	// Get images from the database
	$sql = $con->query("SELECT * FROM post_collector_tbl");

	if($sql->num_rows > 0){
	    while($row = $sql->fetch_assoc()){
	        $imageURL = '../../assets/uploaded-post-img/'.$row["image"];
	        // $rowid = $row['id'];


		echo '<div class="content-item"><div class="row p-3"><div class="col-sm-4 div-bar">';

	    echo'<img src="'.$imageURL.'" alt="" class="thmb"></div>';
		echo '<div class="col-sm-6 div-bar"><div><h3>'.$row['title'].'</h3></div><div><p>'.$row['post_content'].'</p></div></div>';
		echo '<div class="col-sm-2">'
			 	.'<a href="post-edit.php?id='.$row['id'].'" class="btn btn-info" style="font-size: 1.5rem; color: #fff; width: 100%;" data-toogle="modal" data-target="#editModal">EDIT</a>'
				.	'<a onclick="javascript:confirmDel($(this));return false;" href="post-manipulation.php?id='.$row['id'].'" class="btn btn-danger" style="font-size: 1.5rem; color: #fff; width: 100%;">DELETE</a>'
				.'</div></div></div>';
	 }
	}else{ 
	    echo "<p>No image(s) found...</p>";
	 } 
?> 

<!-- END OF THIRD ROW -->

		<div class="content-item">
			<div class="row p-3">				
				<div class="col-sm-4 div-bar">
				<img src="../../assets/uploaded-post-img/clem-onojeghuo.jpg" alt="" style="height: 3rem; width: 3rem;">
				</div>
				<div class="col-sm-6 div-bar">
					<div>
						<h3>Your Title</h3>
					</div>
					<div>
						<p>Lorem</p>
					</div>
				</div>
				<div class="col-sm-2">
					<button class="btn btn-info" style="font-size: 1.5rem; color: #fff; width: 100%;" data-toggle="modal" data-target="#myModal">EDIT</button>
					<button class="btn btn-danger" style="font-size: 1.5rem; color: #fff; width: 100%;">DELETE</button>
				<!-- <i class="fas fa-trash-alt" style="font-size: 3.438rem; color:#d53f3a;"></i> -->
				</div>
			</div>
		</div>
		<div class="content-item">
			<div class="row p-3">				
				<div class="col-sm-4 div-bar">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
				</div>
				<div class="col-sm-6 div-bar">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
				</div>
				<div class="col-sm-2">
					<button class="btn btn-info" style="font-size: 1.5rem; color: #fff; width: 100%;">EDIT</button>
					<button class="btn btn-danger" style="font-size: 1.5rem; color: #fff; width: 100%;">DELETE</button>
				<!-- <i class="fas fa-trash-alt" style="font-size: 3.438rem; color:#d53f3a;"></i> -->
				</div>
			</div>
		</div>
		<div class="content-item">
			<div class="row p-3">				
				<div class="col-sm-4 div-bar">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
				</div>
				<div class="col-sm-6 div-bar">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
				</div>
				<div class="col-sm-2">
					<button class="btn btn-info" style="font-size: 1.5rem; color: #fff; width: 100%;">EDIT</button>
					<button class="btn btn-danger" style="font-size: 1.5rem; color: #fff; width: 100%;">DELETE</button>
				<!-- <i class="fas fa-trash-alt" style="font-size: 3.438rem; color:#d53f3a;"></i> -->
				</div>
			</div>
		</div>

<!-- EDIT MODAL -->

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header justify-content-center">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              <i class="now-ui-icons ui-1_simple-remove"></i>
            </button>
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
					Select images: <input type="file" name="files[]" multiple >
				</div>
				<div>
					<input type="submit" name="save" value="Save" class="btn btn-success btn-round">
				</div>
				

			</form>
          </div>
<!--           <div class="modal-footer">
            <button type="button" class="btn btn-default">Nice Button</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div> -->
        </div>
      </div>
    </div>
<!-- EDIT MODAL -->


	<?php include '../../includes/footer.php'?>

	</div>
<!-- END CONTENT WRAPPER -->
<!-- 	<script src="../../assets/js/core/jquery.min.js" type="text/javascript"></script>
	<script src="../../assets/js/core/popper.min.js" type="text/javascript"></script>
	<script src="../../assets/js/core/bootstrap.min.js" type="text/javascript"></script> -->
	<?php include '../../includes/link/js_link.php'?>














<?php
	// function delete(){
	// 	// sql to delete a record
	// 	$sql = "DELETE FROM post_collector_tbl WHERE id = $rowid";

	// 	if ($conn->query($sql) === TRUE) {
	// 	    echo "Record deleted successfully";
	// 	} else {
	// 	    echo "Error deleting record: " . $conn->error;
	// 	}

	// 	$conn->close();
	// }

	// if(isset($_GET[$rowid])){
	// 	delte();
	// }
?>








<script>
function confirmDel(anchor)
{
   var conf = confirm('Are you sure want to delete this record?');
   if(conf)
      window.location=anchor.attr("href");
}
</script>
</body>
</html>