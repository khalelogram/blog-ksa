<?php
	include_once '../../function/config.php';
	// $id = $_GET['id'];

		// // sql to delete a record
		// $sql = "DELETE FROM post_collector_tbl WHERE id = $id";

		// if ($con->query($sql) === TRUE) {
  //               echo "<script>
  //               alert('Record deleted successfully');
  //               window.location.href='post-manipulation.php';
  //               </script>";

	 //        // echo "<script>alert('Record deleted successfully')window.location.href='post-manipulation.php'</script>";
		// } else {
  //           // echo "<script>
  //           // alert('".$statusMsg."');
  //           // window.location.href='post-manipulation.php';
  //           // </script>";

		// 	echo "<script>alert('Error deleting record:".$conn->error."')window.location.href='post-manipulation.php'</script>";
		// }

		// $con->close();



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